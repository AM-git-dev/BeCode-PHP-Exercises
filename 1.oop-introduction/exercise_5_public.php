<?php
declare(strict_types=1);
class Beverage {
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }

    public function changeColor(string $newColor): void {
        $this->color = $newColor;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getPrice(): float {
        return $this->price;
    }
}

class Beer extends Beverage {
    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float {
        return $this->alcoholPercentage;
    }

    public function updateBeerColor(string $newColor): void {
        $this->changeColor($newColor);
    }

    public function printBeerInfo(): void {
        echo "Hi I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a " . $this->getColor() . " color." . "<br>";
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo $duvel->getAlcoholPercentage() . "<br>";
echo "Alcohol percentage: " . $duvel->getAlcoholPercentage() . "%<br>";
echo "The color of the beer is: " . $duvel->getColor() . "<br>";
echo $duvel->getInfo() . "<br>";

$duvel->updateBeerColor("light");
echo "The new color of the beer is: " . $duvel->getColor() . "<br>";

echo "The price of the beer is: " . $duvel->getPrice() . " euro<br>";

$duvel->printBeerInfo();

?>


<!--/* EXERCISE 5-->
<!---->
<!--Copy the class of exercise 1.-->
<!---->
<!--TODO: Change the properties to private.-->
<!--TODO: Fix the errors without using getter and setter functions.-->
<!--TODO: Change the price to 3.5 euro and print it also on the screen on a new line.-->
<!--*/-->