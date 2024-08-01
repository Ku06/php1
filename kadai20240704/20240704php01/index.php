<html>
<head>
<meta charset="utf-8">
<title>送信画面</title>
</head>
<body>

<?php
// ;セミコロンが厳格！（命令の終わりにつけないとエラーになります）
//入力フォーム　ボタンのタイプはsubmit
?>
    
    <form action="write.php" method="post">
        名前：<input type="text" name="name"><br>
        Email<input type="text" name="email"><br>
        備考：<textarea name="memo" cols="30" rows="10"></textarea><br>
        <button type="submit">送信</button>



    </form>

</ul>
</body>
</html>

