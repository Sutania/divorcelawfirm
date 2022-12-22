<?php

    $host = '127.0.0.1';
    $db = 'divorcelawfirm_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

        //use this one for the remote sql set up
    //$host = 'sql.freedb.tech';
    //$db = 'freedb_appliedweb';
    //$user = 'freedb_freedb_appliedweb';
    //$pass = '%&2P5szD2Uj&$vE';
    //$charset = 'utf8mb4';


    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    

    try{

            $pdo = new PDO($dsn, $user, $pass);
            //echo 'HELLO DATABASE';
           $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
            throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $users = new users($pdo);

    $users->insertUsers("admin","password");


?>