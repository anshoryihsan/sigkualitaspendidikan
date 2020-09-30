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
                        <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v1.0.0/leaflet.markercluster.js'></script>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v1.0.0/MarkerCluster.css' rel='stylesheet' />
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v1.0.0/MarkerCluster.Default.css' rel='stylesheet' />
<div id='map' class='map'></div>
                            </script>
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
    var wmsLayer = L.tileLayer.wms('http://localhost:8080/geoserver/SIGTA/wms?service=WMS&version=1.1.0&request=GetMap&layers=SIGTA:geotiff_KBB&styles=&bbox=107.09468629067595,-7.144346587749957,107.8417146116843,-6.664566706662186&width=768&height=493&srs=EPSG:4326&format=image%2Fpng', {
    layers: 'workspace:imgfile.tif',
    transparent: true,
    format: 'image/png'
    }).addTo(mymap);
   
	// var mapbox = {
    //     url: 'https://api.mapbox.com/styles/v1/mapbox/streets-v9/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaWhzYW5hbnNob3J5IiwiYSI6ImNqcG51Y2NieTA2ZGw0M21na3QzemQzZjEifQ.eM6cdlKE0hvD3aA9BQvHug',
    //     options: {attribution:'© <a href="https://www.mapbox.com/map-feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}
    // };
    // var mq=L.tileLayer(mapbox.url,mapbox.options).addTo(mymap);
    
    var kualitasSD="<?php echo base_url('/assets/layers/mapSD/layers_mapSD.php')?>";
    var pointSD="<?php echo base_url('/assets/layers/mapSD/point_identitasSD.php')?>";
    var pointIdentitas="<?php echo base_url('/assets/layers/mapSD/point_identitasSD_terdaftar.php')?>";
    var danausungai="<?php echo base_url('/assets/layers/danausungai.php')?>";
    var pemukiman="<?php echo base_url('/assets/layers/pemukiman.php')?>";
    var controlLayers = L.control.layers().addTo(mymap);
    //endbasemap
    //icon 
    var iconSD = L.icon({
        iconUrl: '<?php echo base_url('/assets/img/sd.png')?>',
         iconSize: [38, 95],
        });
    var iconSD1 = L.icon({
        iconUrl: '<?php echo base_url('/assets/img/sd1.png')?>',
         iconSize: [38, 95],
        });
    //layers
    
	$.getJSON(kualitasSD,function(kualitasSD){
        var kualitasSD = L.geoJson( kualitasSD,{onEachFeature:popUp, style: warna}
         ).addTo(mymap);
         controlLayers.addBaseLayer(kualitasSD, 'Kualitas sd');
    });
    
	$.getJSON(pointIdentitas,function(pointIdentitas){
        var pointIdentitas = L.geoJson( pointIdentitas,{
            onEachFeature:popUp, icon: iconSD
        }
         );
         controlLayers.addOverlay(pointIdentitas, 'marker sekolah sd');
    });

    $.getJSON(pointSD,function(pointSD){
        var pointSD = L.geoJson( pointSD,{
            onEachFeature:popUp, icon: iconSD1
        }
         );
         controlLayers.addOverlay(pointSD, 'marker sekolah sd keseluruhan');
    });

    $.getJSON(danausungai,function(danausungai){
        var danausungai = L.geoJson( danausungai,{
            onEachFeature:popUp, style:warnasungai,
        }
         );
         controlLayers.addOverlay(danausungai, 'danau sungai');
    });

    $.getJSON(pemukiman,function(pemukiman){
        var pemukiman = L.geoJson( pemukiman,{
            onEachFeature:popUp, style:warnapemukiman,
        }
         );
         controlLayers.addOverlay(pemukiman, 'pemukiman');
    });

    L.control.scale({imperial: false}).addTo(mymap);

    // detect fullscreen toggling
    mymap.on('enterFullscreen', function(){
        if(window.console) window.console.log('enterFullscreen');
    });
    mymap.on('exitFullscreen', function(){
        if(window.console) window.console.log('exitFullscreen');
    });

    function popUp(f,l){
        var out = [];
        if (f.properties){
            for(key in f.properties){
                out.push(key+": "+f.properties[key]);
            }
            l.bindPopup(out.join("<br />"));
        }
    }
    function warnapemukiman (f,l){
        return{
            
            weight: 2,
            opacity: 1,
            color: '#C133FF',
            dashArray: '0',
            fillOpacity: 0.7
        }
    }
    function warnasungai (f,l){
        return{
            
            weight: 2,
            opacity: 1,
            color: '#33FFF0',
            dashArray: '3',
            fillOpacity: 0.7
        }
    }
    function warna (f,l){
        return{
            fillColor: getColorKec(f.properties.wadmkc),
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