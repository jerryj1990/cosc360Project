<?php
    
    $geo = 'http://maps.google.com/maps/api/geocode/xml?latlng='.htmlentities(htmlspecialchars(strip_tags($_GET['latlng']))).'&sensor=true';
    $xml = simplexml_load_file($geo);
    
    list($lat,$long) = explode(',',htmlentities(htmlspecialchars(strip_tags($_GET['latlng']))));
    $geodata['Latitude'] = $lat;
    $geodata['Longitude'] = $long;
    $geodata['You are currently in: '] = $xml->result->formatted_address;
    
    echo '<img src="http://maps.google.com/maps/api/staticmap?center='.$lat.','.$long.'&zoom=14&size=150x150&maptype=roadmap&&sensor=true" width="150" height="150" alt="'.$geodata['address'].'" \/><br /><br />';
    
    
    foreach($geodata as $name => $value){
        echo ''.$name.': '.str_replace('&','&amp;',$value).'<br />';
    }
    ?>