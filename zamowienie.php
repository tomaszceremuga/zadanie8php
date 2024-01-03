<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">

  <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
    }
  </style>

</head>
<body>

  <?php
        $imie = $_POST['imie'];
        $olej = $_POST['olej'];
        $klocki = $_POST['klocki'];
        $zarowki = $_POST['zarowki'];
        $opony = $_POST['opony'];
        $plik = fopen("zamowienia.txt", "a") or die("nie ma pliku");
        $data = date("Y-m-d H:i:s");
        fwrite($plik, "$imie;$olej;$klocki;$zarowki;$opony\n");
        fclose($plik);  

        echo "Dziękujemy za twoje zamówienie: <br>";
        echo "- Oleje: $olej szt. <br>";
        echo "- Klocki: $klocki szt. <br>";
        echo "- Żarówki $zarowki szt. <br>";
        echo "- Opony: $opony szt. <br>" ;
        echo 'Zapomniałeś czegoś? <a href="skladanie.html" >Złóż kolejne zamówienie!</a>';
        echo '<a href="sprawdzanie.html" > Sprawdź swoje zamówienia! <a/>'
    ?>
  </table>
</body>
</html>
