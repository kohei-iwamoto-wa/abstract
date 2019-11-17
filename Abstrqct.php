<?php
abstract class echoTaxClass
{
    abstract protected function func_tax( $var );
    function func_echo( $var ) {
        echo '税込：' . $this->func_tax( $var ) . '円<br />';
        echo '税率：' . $this->varTax * 100 . '％<br /><br />';
    }
}
class taxClass5 extends echoTaxClass
{
    public $varTax = 0.05;
    protected function func_tax( $var ) {
        return $var * ( 1 + $this->varTax );
    }
}
class taxClass7 extends echoTaxClass
{
    public $varTax = 0.07;
    public function func_tax( $var ) {
        return $var * ( 1 + $this->varTax );
    }
}
$var_class = new taxClass5();
$var_class->func_echo( 100 );
$var_class = new taxClass7();
$var_class->func_echo( 100 );
?>