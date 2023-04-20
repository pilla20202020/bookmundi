<?php

// XML Data into Readable Format
echo "<h2>1. Use this link to get XML data and convert those data in more readable JSON format
</h2>";
$url = 'http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml';
$xml = simplexml_load_file($url);
$json = json_decode(json_encode((array) $xml), true);
echo "<pre>" . print_r($json,true) . "</pre>";





// Sample array of IDs and prices
$ids_prices = array(
  'product1' => 10,
  'product2' => 20,
  'product3' => 30,
  'product4' => 40,
);

// Example usage
$threshold = 25;  // Minimum price threshold
$filtered_list = filterByPrice($ids_prices, $threshold);
$total_price = calculateTotalPrice($filtered_list);

// Output the results
echo "Filtered list:\n";
print_r($filtered_list);
echo "Total price: $total_price\n";


// Function to filter the list of IDs and prices by a giving a certain threshold
function filterByPrice($ids_prices, $threshold) {
  $filtered = array();
  foreach ($ids_prices as $id => $price) {
      if ($price > $threshold) {
          $filtered[$id] = $price;
      }
  }
  return $filtered;
}


function calculateTotalPrice($ids_prices) {
  $total = 0;
  foreach ($ids_prices as $price) {
      $total += $price;
  }
  return $total;
}


?>