<?php

  require 'connect_db.php';

  header('Content-Type: application/json');

  if (isset($_POST['from'])) {
    $from = $_POST['from'];
  }
  if (isset($_POST['to'])) {
    $to = $_POST['to'];
  }

  $result = new Connect_db();
  $result = Connect_db::connect();
  $test = "{$result[1]}";

  // JSON形式にして返す
  echo json_encode(compact('result'));

  //$data = "{$_POST['age']}歳、{$_POST['job']}です";
  //echo json_encode(compact('data'));

?>