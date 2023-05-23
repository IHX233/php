<?php
    $pdo = new PDO('mysql:host=localhost;dbname=boke','root','root');
    $stmt = $pdo->prepare('select * from gf');
    $stmt->execute(); 
    $arr=$stmt->fetchAll();
    var_dump($arr);