<?php

echo "<h4>2.We have an array of IDs and prices. Please create two functions as per the below,</h4>";

echo "<h4> i. One which will return the lists, which have prices greater than a certain threshold
that can be dynamic provided by the user.</h4>";
echo "<h4> ii. Another function will return the total sum of prices from that filtered list.</h4>";

// Sample array of IDs and prices
$ids_prices = array(
  'id_1' => 10,
  'id_2' => 20,
  'id_3' => 30,
  'id_4' => 40,
  'id_5' => 60,
  'id_6' => 80,
  'id_7' => 90,
  'id_8' => 120,
);

// Example usage
$threshold = 15;  // Minimum price threshold
$filtered_list = filterByPrice($ids_prices, $threshold);
$total_price = calculateTotalPrice($filtered_list);

// Output the results
echo "Filtered list:\n\t";
echo "<br>";
print_r($filtered_list);
echo "<br>";
echo "<hr>";
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

// Function to return sum of price from filtered list

function calculateTotalPrice($ids_prices) {
  $total = 0;
  foreach ($ids_prices as $price) {
      $total += $price;
  }
  return $total;
}


?>