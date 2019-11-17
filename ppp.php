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

// 肉クラス
class Meet implements IProduct
{
    private $price = 2000;

    public function applyPriceDown()
    {
        if ('29' == date('d')) {
            // 29日なら半額
            $this->price = $this->price / 2;
        }
    }
}

// 冷凍食品クラス
class FreezedFood implements IProduct
{
    private $price = 500;

    public function applyPriceDown()
    {
        // 値引きなし
    }
}

// カートクラス
class Cart
{
    // 商品インスタンス保持用配列
    private $products = array();

    // 商品追加
    public function addProduct($product)
    {        
        $product->applyPriceDown();    
        $this->products[] = $product;
    }
}

$vegetable = new Vegetable();
$meet = new Meet();
$freezed = new FreezedFood();

$cart = new Cart();
$cart->addProduct($vegetable);
$cart->addProduct($meet);
$cart->addProduct($freezed);

?>