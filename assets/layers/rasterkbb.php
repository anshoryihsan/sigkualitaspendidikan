<?php
$url=file_get_contents("http://localhost:8080/geoserver/SIGTA/wms?service=WMS&version=1.1.0&request=GetMap&layers=SIGTA:geotiff_KBB&styles=&bbox=107.09468629067595,-7.144346587749957,107.8417146116843,-6.664566706662186&width=768&height=493&srs=EPSG:4326&format=image%2Fpng");  
 # url yang ada di dalam ("") itu link address dari halaman GeoJSON.. jangan luap hapus bagian &maxFeatures=50
echo($url);
?>