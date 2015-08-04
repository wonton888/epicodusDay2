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
?>
