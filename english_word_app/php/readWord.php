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
    $mysqli = $connectdb->connect();

    $result = readdb($mysqli, $from, $to);
  
    // JSON形式にして返す
    echo json_encode(compact('result'));

    function readdb($mysqli, $from, $to) {

      $sql = "SELECT id, english_word, japanese_word FROM words WHERE id BETWEEN ? AND ?;";
      if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("ii", $from, $to);
        $stmt->execute();
      }
      $wordArray = array();
      foreach ($stmt->get_result() as $row) {
        array_push($wordArray, $row);
      }
    
      if (!$stmt->close()) {
        print ("disconnect failed\n");
        exit;
      }

      return $wordArray;
    }

?>