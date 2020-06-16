<?php
  class Connect_db
  {
    public function connect(){
      if( !$mysqli = new mysqli("160.16.116.104", "kengo", "KTkt1816!","english_app")) {
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
      
      return $mysqli;
    }
  }
?>