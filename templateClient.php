<?php
require_once 'tableDisplay.php';
require_once 'listDisplay.php';


//ここでデータベースを呼び出す。

$data = array('kohei',
              'kaorun',
              'neko'
);

$display = new tableDisplay( $data );
$display1 = new listDisplay( $data );
var_dump($display);
$display->display();
$display1->display();