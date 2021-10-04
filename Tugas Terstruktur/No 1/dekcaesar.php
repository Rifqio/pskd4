<?php 
    $key = $_GET["key"];
    $nmfile = "enkripsi.txt";
    $fp = fopen($nmfile, "r"); //Buka hasil file deskripsi
    $isi = fread($fp, filesize($nmfile));
    $enc_text = str_split($isi);
    $n = count($enc_text);
    $kunci = str_split($key);
    $m = count($kunci);
    $bataskode = 65;
    $bataslow = 97;

    for($i=0; $i<$n; $i++)
    {
        $dec[$i] = ord($enc_text[$i]);
        if( $dec[$i] >= 65 && $dec[$i] <= 90 )
        {
            $dec_text[$i] = (($dec[$i] - (ord($kunci[$i % $m])))%26)+$bataskode;
            if ($dec_text[$i] < 65)
            {
                $dec_text[$i] += 26;
            } 
        } else if ($dec[$i] >= 97 && $dec[$i] <= 122)
        {
            $dec_text[$i] = (($dec[$i]-(ord($kunci[$i % $m])))%26)+$bataslow;
            if ($dec_text[$i]<97)
            {
                $dec_text[$i]+=26;
            }
        }
        
    }
    echo "Kalimat ciphertext: ";
    for($i=0; $i<strlen($isi); $i++)
    {
        echo $isi[$i];
    }
    echo "<br>";
    echo "Hasil Deskripsi = ";
    for($i=0; $i<strlen($isi); $i++)
    {
        echo chr($dec_text[$i]);
    }
    echo "<br>";
?>