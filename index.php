<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php for ($i = 0; $i < 10; $i++): ?>
    <?php if ($i % 2 == 0): ?>
        <?php echo "{$i} is Even" ?>
        <?php continue;?>
        <?php endif;?>
        <br>
    <?php echo "{$i} is Odd"?>
    <br>
<?php endfor;?>

</body>
</html>