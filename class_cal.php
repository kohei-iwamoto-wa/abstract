<?php

class Product {
    const TAX_RATE = 0.1;
    private $price = 0;

    public function setPrice( $price ) {
        if ( is_numeric ( $price ) ) {
            $this->price = $price;
            
        } else {
            throw new LogicException('半角数字で入力してください。');
        }
        return $price;
    }

    public function setProductName( $name ) {
        if ( is_string ( $name ) ) {
            $this->name = $name;

        } else {
            throw new LogicException('数値は入力しないで');
        }
        return $name;
    }

    // 税込み価格取得
    public function getSalePrice() {
        // 定数をクラス内で参照
        $tax = $this->price * self::TAX_RATE;
        $price = $this->price + $tax;
        return $price;
    }
    // 税抜きにする
    public function getExcludedTax() {
        $tax = $this->price * self::TAX_RATE;
        $price = $this->price - $tax;
        // $price = $this->price + $tax;
        return $price;
    }
    //税額のみ算出
    public function getTax() {
        $tax = $this->price - $this->price * 100 / 110;
        return $tax;
    }
}

$price = (int)filter_input(INPUT_GET, 'price', FILTER_SANITIZE_NUMBER_INT);


$prd = new Product();
$prd->setPrice( $price );
$pri = $prd->getSalePrice();

$excluded_price = new Product();
$excluded_price->setPrice( $price );
$excluded = $excluded_price->getExcludedTax();

$get_tax = new Product();
$get_tax->setPrice($price);
$get = $get_tax->getTax();

?>
<html>
    <head>
        <title>税計算</title>
    </head>
    <body>
    <h3>計算</h3>
        <form action = "class_cal.php" method = "GET">
            <input type = "text" name = "price">
            <input type = "submit" value = "計算">
        </form>
        <?php 
            echo '税込価格: ' . floor($price) . '<br>';
            echo '請求金額: ' . floor($excluded) . '<br>';
            echo '消費税額: ' . floor($get) . '<br>';    
        ?>
    </body>
</html>