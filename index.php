<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br><br><br>
<div class="dikdortgen">
<link rel="stylesheet" href="index.css">
<br> <br><br>
<h4>FAKTORİYEL HESAPLAMA</h4>
 
<form method="GET" action="">
    <p class="sayi">Sayı Giriniz</p> 
    <p> 
        <input type="text" name="sayi"> <br><br>
        <input type="submit" name="gonder" value="HESAPLA">
    </p>
</form>

<?php
if(isset($_GET["sayi"])) 
{
    $sayi = $_GET["sayi"];
    if(!empty($sayi) && is_numeric($sayi)) 
    {
        $faktoriyel = 1;
        for($i=1; $i <= $sayi; $i++) 
        {
            $faktoriyel *= $i;
        }
        echo "<div class='result'>Faktöriyel: " . $faktoriyel . "</div>";
    } 
    else 
    {
        echo "<div class='error'>Lütfen sayı giriniz.</div>";
    }
}
?>

</div>
</body>
</html>
