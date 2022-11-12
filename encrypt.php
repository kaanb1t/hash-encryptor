<?php

function encrypt() {
    if (isset($_POST['text']) && isset($_POST['type'])){
        $text = $_POST['text'];
        $type = $_POST['type'];
        if ($type == 'md5'){
            echo 'Encrypted Hash: ' . md5($text);
            echo '<br>Algorithm used: ' . $type;
            echo '<br>Original Text: ' . $text;
        } else if ($type == 'sha256'){
            echo 'Encrypted Hash: ' . hash('sha256', $text);
            echo '<br>Algorithm used: ' . $type;
            echo '<br>Original Text: ' . $text;
        } else if ($type == 'sha512'){
            echo 'Encrypted Hash: ' . wordwrap(hash('sha512', $text), 64, ' ', true);
            echo '<br>Algorithm used: ' . $type;
            echo '<br>Original Text: ' . $text;
        } else if ($type == 'bcrypt'){
            echo 'Encrypted Hash: ' . password_hash($text, PASSWORD_BCRYPT);
            echo '<br>Algorithm used: ' . $type;
            echo '<br>Original Text: ' . $text;
        } else {
            echo "Please select a valid option";
        }
    }
}



?>