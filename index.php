<?php
require("common.php");

$a = "123";
$s->assign("a", $a);
$s->display("index.html");