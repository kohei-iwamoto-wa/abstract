<?php
require_once 'tableDisplay.php';


//ここでデータベースを呼び出す。

$data = array('kohei',
              'kaorun',
              'neko'
);

$display = new tableDisplay( $data );
var_dump($display);
$display->display();