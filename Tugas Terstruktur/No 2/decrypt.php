<?php
$kunci1 = $_GET["key1"];
$kunci2 = $_GET["key2"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile, "r"); //buka file hasil enkripsi
$isi = fread($fp, filesize($nmfile));

$batas = 65;
$a_inv = 0;
$flag = 0;
for($i=0;$i<26;$i++){
    $flag = ($kunci1*$i)%26;

    if($flag == 1){
        $a_inv = $i;
    }
}
for($i=0; $i<strlen($isi); $i++){
    $kode[$i]=ord($isi[$i]); //menunjukan huruf atau lambang itu urutan keberapa dalam ASCII
    $b[$i]=(($a_inv*(($kode[$i] -$batas)- $kunci2))% 26); //proses dekripsi affine
    if($b[$i]<0){ 
        //diberi ini karena terdapat hasil dari pengurangan berupa negatif
        $b[$i] = 26 - abs($b[$i]); //fungsi abs untuk menentapkan bilangan tersebut teteap positif
    }
    $hasil[$i] = $b[$i]+$batas;
    $c[$i]=chr($hasil[$i]); 
}
// echo $a_inv;
echo "kalimat ciphertext : ";
for ($i=0; $i<strlen($isi); $i++){
    echo $isi[$i];
}
echo "<br>";
echo "hasil deskripsi = ";
for ($i=0; $i<strlen($isi); $i++){
    echo $c[$i];
}
// echo($c[$i]);
echo "<br>"


?>