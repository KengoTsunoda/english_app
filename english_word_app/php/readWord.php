<?php

  require 'connect_db.php';

  header('Content-Type: application/json');

  if (isset($_POST['from'])) {
    $from = $_POST['from'];
  }
  if (isset($_POST['to'])) {
    $to = $_POST['to'];
  }

  $connectdb = new Connect_db();
  $result = $connectdb->connect();
  
  // JSON形式にして返す
  echo json_encode(compact('result'));

?>