<?php

declare(strict_types=1);
class Beverage {
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string {
        return "This beverage is $this->temperature and $this->color.";
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }
}

class Beer extends Beverage {
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, temperature: $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float {
        return $this->alcoholPercentage;
    }

    private function beerInfo(): string {
        return "The $this->name have an alcohol percentage of $this->alcoholPercentage and have a $this->color color.";
    }

    public function printBeerInfo(): void {
        echo $this->beerInfo() . "<br>";
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo $duvel->getAlcoholPercentage() . "<br>";
echo "Alcohol percentage: " . $duvel->getAlcoholPercentage() . "%<br>";
echo "The color of the beer is: " . $duvel->getColor() . "<br>";
echo $duvel->getInfo() . "<br>";

$duvel->setColor("light");
echo "The new color of the beer is: " . $duvel->getColor() . "<br>";

$duvel->printBeerInfo();
?>

<!--/* EXERCISE 4-->
<!---->
<!--Copy the code of exercise 3 to here and delete everything related to cola.-->
<!---->
<!--TODO: Make all properties protected.-->
<!--TODO: Make all the other prints work without error without changing the beverage class.-->
<!--TODO: Don't call getters in de child class.-->
<!---->
<!--USE TYPEHINTING EVERYWHERE!-->
<!--*/-->