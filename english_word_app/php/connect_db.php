<?php
  class Connect_db
  {
    public function connect(){
      if( !$conn = mysqli_connect("160.16.116.104", "kengo", "KTkt1816!","english_app")) {
        print ("Connection failed.\n");
        exit;
      }

      // mysql接続コマンド
      // mysql -u root -p
      if (mysqli_connect_errno()) {
        die("データベースに接続できません:" . mysqli_connect_error() . "\n");
      } else {
        //echo "データベースの接続に成功しました。\n";
      }
    
      $sql = "SELECT id, english_word, japanese_word FROM words where id between ? and ?;";
      if ( !$result = mysqli_query($conn, $sql)) {
        print ("Failed : $sql\n");
        exit;
      }
      $wordArray = array();
      foreach ($result as $row) {
        array_push($wordArray, $row);
      }
      $row = mysqli_fetch_array($result);
    
      mysqli_free_result($result);
    
      if (!mysqli_close($conn)) {
        print ("disconnect failed\n");
        exit;
      }

      return $wordArray;
    }
  }
?>