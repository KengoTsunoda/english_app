<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!--<link rel="stylesheet" href="style.css">-->
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="parent">
            <span id="first" class="cls">こんにちは！ 日本！</span>
            <span>こんにちは！ JAPAN！</span>
            <span>こんにちは！ 日本！</span>
            <div>こんにちは！ 東京！</div>
            <div>Hello world! USA!</div>
            <input type="button" id="btn1" value="ボタン" onclick="btnClick();" />
            <div id="output"></div>
            <h1>
                <!-- 外部ファイルの読み込み -->
                <?php require("php/connect_db.php"); ?>
            </h1>
        </div>
    </body>
</html>