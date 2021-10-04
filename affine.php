<?php
$kalimat = $_GET["kata"];
$kunci1 = $_GET["key1"];
$kunci2 = $_GET["key2"];

for($i=0;$i<strlen($kalimat);$i++)
    {
       $kode[$i] = ord($kalimat[$i]); 
       $b[$i] = ((($kunci1*($kode[$i]-65) ) + $kunci2) % 26)+65;
       $c[$i] = chr($b[$i]);
    }
//digabungkan proses enkripsi
echo "kalimat ASLI : ";
for($i=0;$i<strlen($kalimat);$i++)
    {
        echo $kalimat[$i];
    }
echo "<br>";
echo "hasil enkripsi =";
$hsl = '';
for ($i=0; $i<strlen($kalimat);$i++)
{
    echo $c[$i];
    $hsl = $hsl . $c[$i];
}
echo "<br>";

?>