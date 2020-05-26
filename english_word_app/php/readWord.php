<?php

  require 'connect_db.php';

  header('Content-Type: application/json');

  $from = $_POST['from'];
  $to = $_POST['to'];

  $result = new Connect_db;
  $result->connect();

  //$data = "{$_POST['age']}歳、{$_POST['job']}です";
  //echo json_encode(compact('data'));

?>