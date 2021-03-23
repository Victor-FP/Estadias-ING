<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
</style>
<body>
<?php 
    if (isset($_GET['Blink'])) { 
        $Blink  = $_GET['Blink']; } ?>
 <div><iframe src="<?php echo $Blink; ?>"></iframe></div>
</body>
</html>