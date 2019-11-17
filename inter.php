<?php

// 商品インターフェイス
interface IProduct
{
    public function applyPriceDown();
}

// 野菜クラス
class Begetable implements IProduct
{
    private $price = 1000;

    public function applyPriceDown()
    {
        // 常に3割引
        $this->price = $this->price * 0.7;
    }
}

