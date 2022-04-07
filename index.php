<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php 
    $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, perferendis ducimus quasi doloribus cumque libero. Illo unde beatae, dolore distinctio doloremque dolorum! Totam consectetur deleniti aspernatur soluta exercitationem ullam! Impedit!
    ";
    ?>
    <div>
        Testo: <?= $str ?>
    </div>
    <div>
        Lunghezza testo: <?= strlen($str)?> caratteri.
    </div>
    <?php
    $badword=trim($_GET['badword']);
    $censuredStr=str_replace($badword, "***", $str);
    ?>
    <div>
        Testo censurato: <?= $censuredStr ?>
    </div>
    <div>
        Lunghezza testo: <?= strlen($censuredStr)?> caratteri.
    </div>
</body>
</html>