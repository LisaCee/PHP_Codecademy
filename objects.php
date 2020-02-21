
<?php
class Beverage {
  public $color, $opacity, $temperature;
};

// <?php
class Beverage {
  public $temperature, $color, $opacity;
}

$tea = new Beverage;

$tea->temperature = "hot";

echo $tea->temperature;

// <?php
class Beverage {
  public $temperature, $color, $opacity;
  function getInfo() {
    return "This beverage is $this->temperature and $this->color.";
  }
}

$soda = new Beverage();
$soda->color = "black";
$soda->temperature = "cold";

echo $soda->getInfo();

// <?php
class Beverage {
  public $temperature, $color, $opacity;
  function __construct($temperature, $color){
    $this->temperature = $temperature;
    $this->color = $color;
  }

  function getInfo() {
    return "This beverage is $this->temperature and $this->color.";
  }
}


$water = new Beverage("cold", "black");
$water->temperature = "cold";
$water->color = "black";

echo $water->getInfo();

// <?php
class Beverage {
  public $temperature;
  
  function getInfo() {
    return "This beverage is $this->temperature.";
  }
}

class Milk extends Beverage {
  function __construct() {
    $this->temperature = "cold";
  }
}

<?php
class Beverage {
  public $temperature;
  
  function getInfo() {
    return "This beverage is $this->temperature.";
  }
}

class Milk extends Beverage {
  function __construct() {
    $this->temperature = "cold";
  }
  function getInfo(){
    return parent::getInfo() . " I like my milk this way.";
  }
}

$chocolate = new Milk();
echo $chocolate->getInfo();
