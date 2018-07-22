<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <?php 
    
    $f = $_GET["Mobile"];
    $l= count($f);

    for($i=0; $i < $l; $i++)
    {
    echo $f[$i];
    
    }




    ?>
</body>
</html>
