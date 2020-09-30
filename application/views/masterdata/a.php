<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="<?php echo base_url('assets/css/st.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/leaflet/leaflet.css')?>">
	<script src="<?php echo base_url('assets/leaflet/leaflet.js')?>"></script>
	<script src="<?php echo base_url('assets/leaflet-ajax/dist/leaflet.ajax.js')?>"></script>
	<script src="<?php echo base_url('assets/leaflet-ajax/dist/leaflet.ajax.min.js')?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
    

    <title>leaflet</title>
</head>
<body>
    <div id="map">
        <script type="text/javascript">
            var map=L.map('map').setView([-6.87178,107.424723],11);
            var mopt = {
                url: 'https://api.mapbox.com/styles/v1/mapbox/streets-v9/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaWhzYW5hbnNob3J5IiwiYSI6ImNqcG51Y2NieTA2ZGw0M21na3QzemQzZjEifQ.eM6cdlKE0hvD3aA9BQvHug',
                options: {attribution:'© <a href="https://www.mapbox.com/map-feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}
            };
            var osmDataAttr = 'Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
            var osm = L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:osmDataAttr});
            var mq=L.tileLayer(mopt.url,mopt.options);

            mq.addTo(map);

            var baseMaps = {
                "Mapbox Streets": mq,
                "Open Street Map":osm
            };
            function popUp(f,l){
                var out = [];
                if (f.properties){
                    for(key in f.properties){
                        out.push(key+": "+f.properties[key]);
                    }
                    l.bindPopup(out.join("<br />"));
                }
            }

            var layer_KECAMATAN = new L.GeoJSON.AJAX("layer/request_kbb.php",{ //--manggil geojson---
                style : function (feature){
                    if (feature.properties.pgbm <= 90) {
                        return {color: '#66ff66'};
                    } else if (feature.properties.pgbm >= 95) {
                        return {color: '#00cc00'};
                    } else {
                        return {color: '#003300' };
                    }
                },
                onEachFeature : function (feature, layer) {
                    layer.bindPopup( "<center>" + feature.properties.wadmkc + "</center>")
                    layer.on({
                    mouseover: function(e) {
                        e.target.setStyle({
                        fillOpacity: 0.8,
                        dashArray: '',
                        weight: 2,
                        opacity: 1
                        });
                        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                        e.target.bringToFront();
                        }
                    },
                    mouseout: function(e) {
                        layer_KECAMATAN.resetStyle(e.target);
                    },
                    
                    });
                }
                
            });
            layer_KECAMATAN.addTo(map);
            
            var jsonTest = new L.GeoJSON.AJAX("layer/request_kbb.php",{onEachFeature:popUp});
            jsonTest.addTo(map);
            
            var overlays={
                "Kualitas Pendidikan 1":layer_KECAMATAN,
                "Kualitas Pendidikan 2":jsonTest
            }
            var lc=L.control.layers(baseMaps,overlays);
            
            lc.addTo(map);
            L.control.scale({imperial: false}).addTo(map);



            var legend = L.control({position: 'bottomright'});
legend.onAdd = function (map) {

    var div = L.DomUtil.create('div', 'info legend'),
        grades = [20.0,50.0,80.0,100.0,300.0,500.0],
        labels = ['apk'];

    // loop through our density intervals and generate a label with a colored square for each interval
    for (var i = 0; i < grades.length; i++) {
        div.innerHTML +=
            '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
            grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
    }

    return div;
};

legend.addTo(map);

function getColor(pgbm) {
    return pgbm>100.0  ? '#800026' :
    pgbm>=90.5 ? '#BD0026' :
    pgbm>=80.0 ? '#E31A1C' :
    pgbm>=70.0 ? '#FC4E2A' :
    pgbm>=60.0 ? '#FD8D3C' :
    pgbm>=10.0 ? '#FEB24C' :
     '#ff0000';
}
        </script>
    </div>
</body>
</html>