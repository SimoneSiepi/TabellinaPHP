<?php
    $nome=$_GET["nome"];//? il metodo get fa vedere la richiesta nell'url della pagina web
    $numero=$_GET["numero"];//? il metodo post non fa vedere la richiesta nell'url della pagina web
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellina</title>
</head>
<body>
    <?php
    print("<table border='1'>");//*todo echo e print funzionano alla stessa maniera
      echo "<tr><th>tabellina di $nome</th></tr>";
      for ($i=1; $i <=10; $i++) { 
        $risultato=$numero*$i;
        print("<tr><td>$numero x $i</td><td>$risultato</td></tr>");
      }
    print("</table>");
    ?>
</body>
</html>