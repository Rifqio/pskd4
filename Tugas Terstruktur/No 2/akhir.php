<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            font-family: sans-serif;
        }
    </style>
    <form action="affine.php" method="get">
    <h1> ENKRIPSI AFFINE</h1>
    Plainteks : <input type="text" name="kata"><br>
    a : <input type="number" name="key1"><br>
    b : <input type="number" name="key2"><br>
    <input type="submit" value="kirim">
    <input type="reset" value="ulangi">
    </form>
</body>
</html>