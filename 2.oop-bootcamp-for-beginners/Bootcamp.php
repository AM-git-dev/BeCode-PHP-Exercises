<?php

//$basket = [
//    'Bananas' => [
//        'price' => 1,
//        'quantity' => 6
//    ],
//    'Apples' => [
//        'price' => 1.5,
//        'quantity' => 3
//    ],
//    'Bottles' => [
//        'price' => 10,
//        'quantity' => 2
//    ]
//];
//
//
//$total = 0;
//$taxetotale = 0;
//foreach ($basket as $product => $key) {
//
//    if ($product === 'Bananas' || $product === 'Apples'){
//        $tax=0.06;
//    } else {
//        $tax=0.21;
//    }
//
//    $soustotal = $key['price'] * $key['quantity'];
//    $total += $soustotal;
//    $taxetotale += $soustotal*$tax;
//
//}
//
//echo 'total = '.$total.'<br>';
//echo 'taxe totale = '.$taxetotale.'<br>';
//echo '<br>';


class Basket
{

    public string $product;
    public int $quantity;
    public float $price;
    public float $discount;

    public function __construct(string $product, int $quantity, float $price, float $discount)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getTotal(): float
    {
        if ($this->discount) {
            return ($this->price * $this->quantity) * $this->discount;
        } else
            return $this->price * $this->quantity;

    }

    public function getTotalTax(): float
    {

        if ($this->product === 'Bananas' || $this->product === 'Apples') {
            $taxRate = 0.06;
            if($taxRate = 0.06) {
                $this->discount = 0.5;
            }
        } else {
            $taxRate = 0.21;
        }
        return $taxRate * $this->getTotal();
    }

}




$banana = new Basket('Bananas', 6, 1, 1);
$apple = new Basket('Apples', 3, 1.5, 1) ;
$bottle = new Basket('Bottles', 2, 10, 1);


echo 'Banane : ' . $banana->getTotal() .'€';
echo '<br>';
echo 'Pommes : ' . $apple->getTotal().'€';
echo '<br>';
echo 'Bouteilles de Vin : ' . $bottle->getTotal() . '€';
echo '<br>';
echo '<hr>';
echo 'Prix Total du Panier : ' . $banana->getTotal()+$apple->getTotal()+$bottle->getTotal() .'€';
echo '<br>';
echo 'Total de la TVA : ' . $banana->getTotalTax()+$apple->getTotalTax()+$bottle->getTotalTax(). '€';



?>