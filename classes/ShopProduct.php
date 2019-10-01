<?php


class ShopProduct
{
    // defined properties
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    // created a constructor
    public function __construct(
            string $title,
            string $firstName,
            string $mainName,
            float $price
    ){
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
    }

    // created a method
    public function getProducer()
    {
        return $this->producerMainName . ' '
                . $this->producerFirstName;
    }
}