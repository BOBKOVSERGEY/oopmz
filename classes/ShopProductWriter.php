<?php


class ShopProductWriter
{
    public $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products = $shopProduct;
    }

    public function write()
    {
        $str = "";
        print_r($this->products);

        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->title} : ";

        }
        echo $str;
    }
}