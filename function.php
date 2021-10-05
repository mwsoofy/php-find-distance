<?php 

  // Perinthalmanna Lat And Long
  $latitudeFrom = 10.9760;
  $longitudeFrom
    
    // Parse all value to desired fortmat
    $latFrom = deg2rad($latitudeFrom);
    $lonFrom = deg2rad($longitudeFrom);
    $latTo = deg2rad($latitudeTo);
    $lonTo = deg2rad($longitudeTo);

    $latDelta = $latTo - $latFrom;
    $lonDelta = $lonTo - $lonFrom;
  // Calculate distance using Earth Radius
   $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
   cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));

  // Final Distance in KM
   $finalAngle =  $angle * 6371;
?>
