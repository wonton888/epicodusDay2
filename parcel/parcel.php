<?php

  class Parcel
  {
      private $length;
      private $width;
      private $height;
      private $weight;
      private $volume;
      private $ship_weight;

      function __construct($length, $width, $height, $weight)
      {
          $this->length = $length;
          $this->width = $width;
          $this->height = $height;
          $this->weight = $weight;
      }
      function getLength()
      {
          return $this->length;
      }
      function setLength($new_length)
      {
        $float_length = (float) $new_length;
        if ($float_length != 0) {
            $formatted_length = number_format($float_length, 2);
            $this->length = $formatted_length;
        }
      }
      function getWidth()
      {
          return $this->width;
      }
      function setWidth($new_width)
      {
        $float_width = (float) $new_width;
        if ($float_width != 0) {
          $formatted_width = number_format($float_width, 2);
          $this->width =$formatted_width;
        }
      }
      function getHeight()
      {
          return $this->height;
      }
      function setHeight($new_height)
      {
        $float_height = (float) $new_height;
        if ($float_height != 0) {
          $formatted_height = number_format($float_height, 2);
          $this->height = $formatted_height;
        }
      }
      function getWeight()
      {
          return $this->weight;
      }
      function setWeight($new_weight)
      {
        $this->weight = (float) $new_weight;
      }
      function volume($x,$y,$z)
      {
        return $x*$y*$z;
      }
      function costToShip($shipping_weight)
      {
        return $shipping_weight * 2.5;
      }
}
    $first_parcel = new Parcel($_GET["length"], $_GET["width"], $_GET["height"], $_GET["weight"]);
    $first_parcel->setLength($_GET["length"]);
    $first_parcel->setWidth($_GET["width"]);
    $first_parcel->setHeight($_GET["height"]);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Answers</title>
  <body>
  <h1> Here are the answers below: </h1>
  <?php
  $first_parcel_length = $first_parcel->getLength();
  if ($first_parcel->getlength() == 0)
  {echo  "<p>Length: A number please!</p>";} else {

  echo "<p>Length: $first_parcel_length (ft)</p>";}

  $first_parcel_width = $first_parcel->getWidth();
  if ($first_parcel->getWidth() == 0) {
      echo "<p>Width: A number please!</p>"; }
  else {
      echo "<p>Width: $first_parcel_width (ft)</p>";
  }

  $first_parcel_height = $first_parcel->getHeight();
  if ($first_parcel->getHeight() == 0) {
      echo "<p>Height: A number please!</p>"; }
  else {
      echo "<p>Height: $first_parcel_height (ft)</p>";
  }

  $first_parcel_weight = $first_parcel->getWeight();
  if ($first_parcel->getWeight() == 0) {
      echo "<p>Weight: A number please!</p>"; }
  else {
      echo "<p>Weight: $first_parcel_weight (lbs)</p>";
  }

  $first_parcel_volume = $first_parcel->volume($first_parcel_length, $first_parcel_width, $first_parcel_height);
  echo "<p>Volume: $first_parcel_volume (cubic ft)</p>";

  $first_parcel_ship_cost = $first_parcel->costToShip($first_parcel_weight);
  echo "<p>Shipping Cost:$$first_parcel_ship_cost</p>";
  ?>

</body>
</html>
