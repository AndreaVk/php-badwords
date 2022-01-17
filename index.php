<?php 
$frase = "Sei uno scemo!";
$filtro = str_replace($_GET['parola'], "***", $frase);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <h2>Frase Completa</h2>
    <p><?php echo $frase; ?> </p>
    <p><?php echo strlen($frase); ?></p>
</head>
<body>
    
</body>
</html>