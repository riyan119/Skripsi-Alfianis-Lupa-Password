<?php
$db = new PDO('mysql:host=localhost;dbname=skripsi; charset=utf8mb4','root','',
        array(PDO::ATTR_EMULATE_PREPARES => false, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
