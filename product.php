<?php
$json = file_get_contents('products.json');
$productData = json_decode($json, true);
for ($x = 0; $x <= 10; $x++) {
// Display the product title
echo '<h1>' . $productData['cotton']['title'] . '</h1>';

// Display the product subtitle
echo '<h2>' . $productData['cotton']['subtitle'] . '</h2>';

// Display the product description
echo '<p>' . $productData['cotton']['description'] . '</p>';

// Display the product features
echo '<h3>Features</h3>';
echo '<ul>';
echo '<li>Area: ' . $productData['cotton']['features']['area'] . '</li>';
echo '<li>Print: ' . $productData['cotton']['features']['print'] . '</li>';
echo '</ul>';

// Display the product bullets
echo '<h3>Bullets</h3>';
echo '<ul>';
foreach ($productData['cotton']['bullets'] as $bullet) {
  echo '<li><i class="' . $bullet['icon'] . '"></i> ' . $bullet['point'] . '</li>';
}
echo '</ul>';

// Display the product specifications
echo '<h3>Specifications</h3>';
echo '<table>';
foreach ($productData['cotton']['specs'] as $spec) {
  echo '<tr>';
  echo '<th>' . $spec['key'] . '</th>';
  echo '<td>' . $spec['value'] . '</td>';
  echo '</tr>';
}
echo '</table>';
}
?>