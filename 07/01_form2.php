<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select_stylist = $_POST['stylist'];
    $nameee = $_POST['name'];
    $number = $_POST['ka'];
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            <?php foreach ($stylists as $rank => $stylist) : ?>
                <option value="<?= $rank ?>"><?= $rank ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="text" name="name" id="">
        <input type="submit" value="送信">
        <input type="number" name="ka">
    </form>

    <?php if ($select_stylist) : ?>
        <p>あなたの担当は<?= $stylists[$select_stylist] ?>です</p>
        <p>あなたの担当は<?= $nameee ?>です</p>
        <p>あなたの番号は<?= $number ?>です</p>
    <?php endif; ?>
</body>
<!-- <input type="date" name="" id="">
<input type="text" name="" id="">
<input type="color" name="" id="">
<input type="button" value="まさ"> -->

</html>

<input type="number" name="adad" id="">
