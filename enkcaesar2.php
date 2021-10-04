<?php
$kalimat = $_GET["kata"];
$kunci = $_GET["key"];

$plain_text=str_split($kalimat);
$n=count($plain_text);
$key=str_split($kunci);
$m=count($key);
$bataskode = 65;
$bataslow = 97;
$encrypted_text='';

for($i=0;$i<$n;$i++)
    {
        $cipher[$i] = ord($plain_text[$i]);
        if( $cipher[$i] >= 65 && $cipher[$i] <=90 )
        {
            $encrypted_text.=chr(((ord($plain_text[$i])-$bataskode+ord($key[$i%$m])-$bataskode)%26) +$bataskode);
        } else if ( $cipher[$i] >= 97 && $cipher[$i] <= 122) 
        {
            $encrypted_text.= chr(((ord($plain_text[$i])-$bataslow + ord($key[$i % $m])-$bataslow)%26)+$bataslow);
        }
    }
//digabungkan proses enkripsi
echo "kalimat ASLI : ";
for($i=0;$i<$n;$i++)
    {
        echo $kalimat[$i];
    }
echo "<br>";
echo "hasil enkripsi =";
echo $encrypted_text;
?>