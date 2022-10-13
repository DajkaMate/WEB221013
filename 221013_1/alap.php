<?php
    $macska = array("Perzsa", "Házi", "Agóra", "Csizmás");
    //var_dump($macska);
    $kutya = ["Németjuhász", "Pitbull", "Dándog", "Tacskó", "Bernáthegyi"];
    $nevek = array("Ádám" => 23, "Béla" => 34, "Éva" => 14);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php gyakorlás</title>
</head>
<body>
    <h1>Macskák</h1>
    <ul>
        <?php for ($i=0; $i < count($macska); $i++) { ?>
           <li><?php echo $macska[$i]?></li> 
        <?php } ?> 
    </ul>
    <h1>Kutyák</h1>
    <ul>
        <?php for ($i=0; $i < count($kutya); $i++) { ?>
           <li><?php echo $kutya[$i]?></li> 
    <?php } ?> 
    </ul>
    <h2>Asszociatív tömb</h2>
    <ol>
        <?php foreach ($nevek as $knev => $kor) { ?>
            <li><?php echo $knev." ".$kor." éves"?></li>
        <?php } ?>
    </ol>
    <h2>Kutyák foreachel</h2>
        <?php foreach ($kutya as $kutyafajta) { ?>
            <p><?php echo $kutyafajta?></p>
        <?php } ?>
</body>
</html>