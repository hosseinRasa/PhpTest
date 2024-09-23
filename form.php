<?php
$bg_color = "#00f";

include_once "functions.php";
if (isset($_POST['send'])){
    $bg_color = set_background($_POST['background_color']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body style="background-color:<?php echo $bg_color ?>">
    <form method="post" action="#">
        <input onclick=" <?php $bg_color = ('#f00') ?>" type="radio" name="background_color" value="red">قرمز
        <br>
        <input type="radio" name="background_color" value="green">سبز
        <br>
        <input type="radio" name="background_color" value="blue">آبی
        <br>
        <input type="submit" name="send" value="ارسال">
    </form>
</body>
</html>