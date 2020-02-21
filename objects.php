
<?php
class Beverage {
  public $color, $opacity, $temperature;
};

<?php
class Beverage {
  public $temperature, $color, $opacity;
}

$tea = new Beverage;

$tea->temperature = "hot";

echo $tea->temperature;