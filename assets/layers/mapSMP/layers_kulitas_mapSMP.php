<?php
$url=file_get_contents("http://localhost:8080/geoserver/SIGTA/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=SIGTA:spasial_kualitas_pendidikan_smp&outputFormat=application%2Fjson");  
 # url yang ada di dalam ("") itu link address dari halaman GeoJSON.. jangan luap hapus bagian &maxFeatures=50
echo($url);
?>