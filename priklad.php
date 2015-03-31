<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'seznam.php';
        $seznam = new seznam("ul"); // zadáme typ seznamu ( odrážky )
        $seznam->pridej("První položka"); // zadáme data do seznamu
        $seznam->pridej("Druhá položka");
        $seznam->pridej("Dalsi polozka seznamu");
        echo $seznam; // vypíšeme seznam
        
        $seznam = new seznam("ol"); // zadáme typ seznamu ( číslovaný )
        $seznam->pridej("Další seznam ");// zadáme data do seznamu
        $seznam->pridej("položka asd");
        $seznam->pridej("Dalsi polozka seznamu");
        echo $seznam; // vypíšeme seznam
        ?>
    </body>
</html>
