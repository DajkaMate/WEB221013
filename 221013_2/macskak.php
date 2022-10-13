<?php
    $r = rand(1, 10);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random macskás képek</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
    <div class="container text-white">
        <h1 class="display-3 text-center m-4">Cuki macskás random képek</h1>   
        <img class="img-fluid w-100" src="<?php echo "img/".$r.".jpg" ?>" alt="">
    </div>
</body>
</html>