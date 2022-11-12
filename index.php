<?php

require_once 'encrypt.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Encryptor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="data-preview">
            <h6>Hash Encryptor Tool</h6>
        </div>
        <div class="container">
            <div class="form">
            <form action="" method="POST">
                <input type="text" name="text" id="text" placeholder="Enter text to encrypt">
                <select name="type" id="type">
                    <option value="md5">MD5</option>
                    <option value="sha256">SHA256</option>
                    <option value="sha512">SHA512</option>
                    <option value="bcrypt">BCRYPT</option>
                </select>
                <input type="submit" class="button" value="ENCRYPT">
            </form>
        </div>
            <br>
            <h6 class="second-h6">HASH EEN GEGEVEN STRING MET GEBRUIK VAN HET GESELECTEERDE HASHING-ALGORITME.</h6>
        </div>
    </div>
    <div class="result"> <?php encrypt(); ?> </div>
    <div class="reload-page">
        <button class="button" onclick="window.location.href=window.location.href">REFRESH PAGE</button>
    </div>
</body>
</html>