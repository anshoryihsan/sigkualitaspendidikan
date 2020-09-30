<!-- breadcrumbs -->
<div class="container">
	<ul id="breadcrumbs">
		<li><a href="<?php echo base_url();?>index.php/upt/home"><i class="icsw16-home"></i></a></li>
	</ul>
</div>
<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<div class="w-box ">
				<div class="w-box-header">
					<h4> Geografis Kualitas Pendidikan </h4>
                    <form id="geocoding_form" class="pull-right">
                        <div class="input-append">
                            <input type="text" id="gmaps_address" class="span8">
                            <button type="submit" class="btn btn-sm">Find</button>
                        </div>
                    </form>
                </div>
                <div class="tab-content w-box-content cnt_a">
                    <div  class="toolbar clearfix">
                        <div class="" id="n_combobox">
                            <form class="" action="<?php echo base_url('index.php/masterdata/home/cariMap'); ?>" method="post">
                            <div class="span5">
                                <select name="thajar" id="s2_single" class="span12" placeholder="Pilih Tahun Ajaran">
                                <option  value="0">Tahun Ajaran</option>
                                <?php if(isset($tajar ) && is_array($tajar )){
                                    foreach($tajar as $key => $row)  {
                                    echo '<option  value="'.$row->th_ajaran.'">'.$row->th_ajaran.'</option>';
                                    }
                                }
                                ?>
                                </select>
                            </div>
                            <div class="span5">
                                <select name="bdidikan" id="s2_single" class="span12" placeholder="Pilih Tahun Ajaran">
                                    <option value="">Bentuk Pendidikan</option>
                                    <option value="SD">Sekolah Dasar</option>
                                    <option value="SMP">Sekolah Menengah pertama</option>
                                </select>
                            </div>
                            <div class="span2">
                                <input type="submit" name="" class=" btn btn-beoro-6 btn-xs pull-left span12" value="Tampilkan" >
                            </div>
                            </form>
                        </div>
                    </div>
                        <div class="gmap">
                            <div id="map"></div>
                        </div>
                </div>
                </div>
			</div>
		</div>
	</div>
	<div class="footer_space"></div>
</div>






<!--
<script type="text/javascript">
var map=L.map('map').setView([-6.87178,107.424723],10);
var mopt = {
    url: 'https://api.mapbox.com/styles/v1/mapbox/streets-v9/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaWhzYW5hbnNob3J5IiwiYSI6ImNqcG51Y2NieTA2ZGw0M21na3QzemQzZjEifQ.eM6cdlKE0hvD3aA9BQvHug',
    options: {attribution:'© <a href="https://www.mapbox.com/map-feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}
};

var mq=L.tileLayer(mopt.url,mopt.options);
mq.addTo(mymap);

var layer_KECAMATAN = new L.GeoJSON.AJAX("<?php echo base_url('assets/layers/request_kbb.php')?>",{ //--manggil geojson---
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

function popUp(f,l){
    var out = [];
    if (f.properties){
        for(key in f.properties){
            out.push(key+": "+f.properties[key]);
        }
        l.bindPopup(out.join("<br />"));
    }
}
var jsonTest = new L.GeoJSON.AJAX("<?php echo base_url('assets/layers/request_kbb.php')?>",{onEachFeature:popUp});
jsonTest.addTo(map);

var overlays={
    "Kualitas Pendidikan 1":layer_KECAMATAN,
    "Kualitas Pendidikan 2":jsonTest
}
var lc=L.control.layers(overlays);
lc.addTo(map);
L.control.scale({imperial: false}).addTo(map);



var legend = L.control({position: 'bottomright'});
legend.onAdd = function (legenda) {

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
-->
<script type="text/javascript">
	var mymap=L.map('map', {
    fullscreenControl: true,
    fullscreenControlOptions: {
        position: 'topleft'
    }
    }).setView([-6.87178,107.424723],10);
	//basemap
   
	var mapbox = {
        url: 'https://api.mapbox.com/styles/v1/mapbox/streets-v9/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaWhzYW5hbnNob3J5IiwiYSI6ImNqcG51Y2NieTA2ZGw0M21na3QzemQzZjEifQ.eM6cdlKE0hvD3aA9BQvHug',
        options: {attribution:'© <a href="https://www.mapbox.com/map-feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}
    };
    var mq=L.tileLayer(mapbox.url,mapbox.options).addTo(mymap);
    var kualitasSD="<?php echo base_url('assets/layers/mapSD/layers_mapSD.php')?>";
    var pointIdentitas="<?php echo base_url('assets/layers/mapSD/layers_identitasSD.php')?>";
    var point="<?php echo base_url('assets/layers/mapSD/layers_identitasSD.php')?>";
    var controlLayers = L.control.layers().addTo(mymap);
    //endbasemap
    //layers
    
	$.getJSON(kualitasSD,function(kualitasSD){
        var kualitasSD = L.geoJson( kualitasSD,{onEachFeature:popUp, style: warna}
         ).addTo(mymap);
         controlLayers.addBaseLayer(kualitasSD, 'Kualitas sd');
    });
    
	$.getJSON(pointIdentitas,function(pointIdentitas){
        var pointIdentitas = L.geoJson( pointIdentitas,{
            onEachFeature:popUp,
        }
         ).addTo(mymap);
         controlLayers.addOverlay(pointIdentitas, 'marker sekolah');
    });
    var clusterGroup = L.markerClusterGroup();
    $.getJSON(point, function(data){
        var geoJsonLayer=L.geoJson(data, {
            onEachfeature:function(feature, layer){
                
                layer.setIcon(icon);
                //mymap.addLayer(clusterGroup);
            }
        });
        clusterGroup.addLayer(geoJsonLayer);
        //mymap.addLayer(clusterGroup);
        controlLayers.addOverlay(clusterGroup, 'cluster');
    });
    // $.getJSON(point, function(f){
    //     var geoJsonLayer=L.geoJson(data, {
    //         onEachfeature:function(e){
                
    //             e.target.eachlayer(function (layer) {
    //                 clusterGroup.addLayer(layer);
    //             });
    //             //mymap.addLayer(clusterGroup);
    //         }
    //     }).addTo(mymap);
    //     controlLayers.addOverlay(geoJsonLayer, 'cluster');
    // });
    L.control.scale({imperial: false}).addTo(mymap);

    // detect fullscreen toggling
    mymap.on('enterFullscreen', function(){
        if(window.console) window.console.log('enterFullscreen');
    });
    mymap.on('exitFullscreen', function(){
        if(window.console) window.console.log('exitFullscreen');
    });

    // Add layer for markercluster
    


    function popUp(f,l){
        var out = [];
        if (f.properties){
            for(key in f.properties){
                out.push(key+": "+f.properties[key]);
            }
            l.bindPopup(out.join("<br />"));
        }
    }
    function warna (f,l){
        return{
            fillColor: getColorKec(f.properties.kecamatan),
            weight: 2,
            opacity: 1,
            color: 'white',
            dashArray: '3',
            fillOpacity: 0.7
        }
    }
    function getColorKec(l) {
    switch(l){
        case 'Kec. Lembang' : return '#a141dd' ;
        case 'Kec. Parongpong': return '#e384c5' ;
        case 'Kec. Cisarua' : return '#dcb234' ;
        case 'Kec. Cikalongwetan' : return '#cfe02e' ;
        case 'Kec. Cipeundeuy' : return '#ea447b' ;
        case 'Kec. Ngamprah' : return '#7ecf69' ;
        case 'Kec. Padalarang' : return '#c97034' ;
        case 'Kec. Cipatat' : return '#50d464' ;
        case 'Kec. Batujajar' : return '#14b0db' ;
        case 'Kec. Saguling' : return '#e56e68' ;
        case 'Kec. Cihampelas' : return '#81ded2' ;
        case 'Kec. Cililin' : return '#1f2ecfe' ;
        case 'Kec. Cipongkor' : return '#56e69e' ;
        case 'Kec. Sindangkerta' : return '#b7ea78' ;
        case 'Kec. Gununghalu' : return '#cb3fcf' ;
        case 'Kec. Rongga': return '#724ae1' ;
                      '#FFEDA0';
        }
    }
    
    
</script>