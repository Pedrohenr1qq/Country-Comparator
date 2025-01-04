<?php
  function getDatasFromCountry($country){
    $api_key = "";
    $url = $api_key . $country;
    $json=  (file_get_contents($url));
  
    $datas = json_decode($json, true);

    return $datas;
  }

  $datasCountry = getDatasFromCountry($countries[$countryIndex]);
?>