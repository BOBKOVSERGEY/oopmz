<?php


class CDProduct extends ShopProduct
{
    private $playLength;

    public function __construct(
            string $title,
            string $firstName,
            string $mainName,
            float $price,
            int $playLength
    )
    {
        parent::__construct(
                $title,
                $firstName,
                $mainName,
                $price,
                $playLength
        );
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }
}