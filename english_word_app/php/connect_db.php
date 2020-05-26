<?php
  class Connect_db
  {
    function connect(){
      if( !$conn = mysqli_connect("160.16.116.104", "kengo", "KTkt1816!","english_app")) {
        print ("Connection failed.\n");
        exit;
      }
    
      // 接続状況をチェックします
      if (mysqli_connect_errno()) {
        die("データベースに接続できません:" . mysqli_connect_error() . "\n");
      } else {
        echo "データベースの接続に成功しました。\n";
      }
    
      $sql = "SELECT * from words;";
      if ( !$result = mysqli_query($conn, $sql)) {
        print ("Failed : $sql\n");
        exit;
      }
      $row = mysqli_fetch_array($result);
      print $row[0] ."\n";
      print $row[1] ."\n";
      print $row[2] ."\n";
      print $row[3] ."\n";
      print $row[4] ."\n";
    
      mysqli_free_result($result);
    
      if (!mysqli_close($conn)) {
        print ("disconnect failed\n");
        exit;
      }

      return $row;
    }
  }
  
?>