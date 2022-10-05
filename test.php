<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1 style='color: blue;'> Ya soy más cool </h1>";
        print ("<h2> Bienvenidos a PHP </h2>");
        $nombre = "Cristiano Ronaldo";
        $carrera = "Programaión";
        $grupo = "5PV";
    ?>

    <ul>
        <li><?=$nombre?></li>
        <li> <?php echo $carrera ?></li>
        <li><?=$grupo?></li>
    </ul>
    <select name="" id="">
        <option value=""><?= $nombre; ?></option>
        <option value=""><?= $carrera; ?></option>
        <option value=""><?= $grupo; ?></option>
    </select>

    <input type="text" value="<? $nombre ?>">
</body>
</html>