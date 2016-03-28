<?php


// function to convert GPS latitude & Longitude into decimal point reference to be used in Google Maps.
  function gpsLocation($arr, $direction) {
    $result = ((($arr[1] * 60) + ($arr[2]/1000)) / 3600) + $arr[0];

    // if the latitude or longitude reference is either S or W it needs to be converted to a negative number.
    if($direction != 'N' && $direction != 'E') {
      $result = -$result;
    }
    return $result;
  };

  // use the function

  $dir = 'images/';
  $image = 'seaside.jpg';
  $image = exif_read_data($dir . $image, 0, true);

  // coordinates
  $longitude = $image['GPS']['GPSLongitude'];
  $latitude = $image['GPS']['GPSLatitude'];

  // direction ( N, S, E, W ).
  $longitudeRef = $image['GPS']['GPSLongitudeRef'];
  $latitudeRef = $image['GPS']['GPSLatitudeRef'];

  // create array of direction and coordinate for each axis
  $geoData = [[$longitude, $longitudeRef], [$latitude, $latitudeRef]];

  // run function with array values
  $long = gpsLocation($geoData[0][0], $geoData[0][1]);
  $lat = gpsLocation($geoData[1][0], $geoData[1][1]);

  // result
  echo 'The image Longitude is : <strong>' . $long . '</strong><br>';
  echo 'The image Latitude is : <strong>' . $lat . '</strong>';

?>
