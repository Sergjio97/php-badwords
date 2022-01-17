<?php
    $testoOriginale= 'Ciao!, mi chiamo Sergjio.'; 
    $censura= $_GET['censura'];
    $testoCensurato= str_replace(strtolower($censura), '***', strtolower($testoOriginale));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad words</title>
</head>
<body>
    <h3>Testo originale:</h3>
    <p><?php echo $testoOriginale?></p>
    <h3>lunghezza stringa:</h3>
    <h4><?php echo strlen($testoOriginale)?></h4>
    <h3>Testo censurato :</h3>
    <p><?php echo $testoCensurato ?></p>   
</body>
</html>