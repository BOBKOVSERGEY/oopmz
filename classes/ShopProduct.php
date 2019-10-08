<?php


class ShopProduct
{
    // defined properties
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount = 0;

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

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }

    public function setDiscount(int $num)
    {
        $this->discount = $num;
    }

    public function getPrice()
    {
        return ($this->price - $this->discount);
    }
}