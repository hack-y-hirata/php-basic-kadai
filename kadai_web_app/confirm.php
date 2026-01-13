<?php
    // POSTリクエストから入力データを所得

    $name=$_POST["employee_name"];
    $age=$_POST["employee_age"];
    $department=$_POST["department"];

?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
</head>
<body>
    <h1>入力画面をご確認ください。</h1>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力確認</th>
        </tr>

        <tr>
            <td>社員名</td>
            <td><?php echo $name; ?></td>
        </tr>

        <tr>
            <td>年齢</td>
            <td><?php echo $age; ?></td>
        </tr>

        <tr>
            <td>所属部署</td>
            <td><?php  echo $department; ?></td>
        </tr>

    </table>


    <p>
        <button id="confirm_btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>

    </p>


</body>
</html>