# Basic PHP Geolocation Converter Function

:: V0.3

This is a basic level function that will take the GPS exif_data out of an image ( if present ) and then convert it into a format that will give you a decimal result that can be used in such things as Google Maps for GeoCoding etc.

This is only very basic at the moment. The point of it is to convert the data to the appropriate format.

It doesn't do any file type checking of any kind, as you should already be doing that anyway ;) I will no doubt make this more robust as it goes along and incorporate all that goodness...But for now, it's but a mere conversion function.

The file includes a basic usage example as per below --

	/*

		$dir = 'images/';
  		$image = 'seaside.jpg';
  		$image = exif_read_data($dir . $image, 0, true);

  	// get coordinates.

  		$longitude = $image['GPS']['GPSLongitude'];
  		$latitude = $image['GPS']['GPSLatitude'];

  	// get direction ( N, S, E, W ).

  		$longitudeRef = $image['GPS']['GPSLongitudeRef'];
  		$latitudeRef = $image['GPS']['GPSLatitudeRef'];

  	// create array of direction and coordinate for each axis.

  		$geoData = [[$longitude, $longitudeRef], [$latitude, $latitudeRef]];

  	// run function with array values.

  		$long = gpsLocation($geoData[0][0], $geoData[0][1]);
  		$lat = gpsLocation($geoData[1][0], $geoData[1][1]);


	*/

