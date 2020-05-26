<?php

header('Content-Type: application/json');

$data = "{$_POST['age']}歳、{$_POST['job']}です";
echo json_encode(compact('data'));

?>