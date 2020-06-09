function btnClick(){
    target = document.getElementById("output");
    target.innerHTML = "正解"
    console.log("js読み込み成功");
}

// DOMを全て読み込んだ後に実行される
$(function () {
    $('#readWord').click(function() {
        // Ajax通信を開始する
        $.ajax({
            url: '../english_word_app/php/readWord.php',
            type: 'post',
            dataType: 'json',
            // 送信データを指定（getの場合は自動的にurlの後ろにクエリとして付加される）
            data: {
                from: $('#from').val(),
                to: $('#to').val(),
            },
        })

        // ステータスコードは正常で、dataTypeで定義したようにパースできたとき
        .done(function (response) {
            $('#result').val('成功');
            putJson(response.result)
        })

        // サーバからステータスコード400以上が返ってきたとき
        // Ajax通信が失敗したとき
        .fail(function (response) {
            $('#result').val('失敗');
            $('#detail').val(response);
        });
    });
});

// JSONをHTMLで表示する
function putJson(json){
    $("#detail2").append("<li>" + json.id + "&emsp;" + json.english_word + "&emsp;" + json.japanese_word + "</li>");
    for(var i in json) {
        $("#detail2").append("<li>" + json[i].id + "  " + json[i].english_word + "  " + json[i].japanese_word + "</li>");
    }
};

/*// DOMを全て読み込んだ後に実行される
$(function () {
    $('#execute').click(function() {
        // Ajax通信を開始する
        $.ajax({
            url: '../english_word_app/php/main.php',
            type: 'post',
            dataType: 'json',
            // 送信データを指定（getの場合は自動的にurlの後ろにクエリとして付加される）
            data: {
                age: $('#age').val(),
                job: $('#job').val(),
            },
        })

        // ステータスコードは正常で、dataTypeで定義したようにパースできたとき
        .done(function (response) {
            $('#result').val('成功');
            $('#detail').val(response.data);
        })

        // サーバからステータスコード400以上が返ってきたとき
        // Ajax通信が失敗したとき
        .fail(function () {
            $('#result').val('失敗');
            $('#detail').val('');
        });
    });
});*/