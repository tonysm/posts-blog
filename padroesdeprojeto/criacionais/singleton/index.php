<?php

    require "BancoDeDados.php";
    
    $Banco = BancoDeDados::getInstance();
    $Banco2 = BancoDeDados::getInstance();
    
    //var_dump($Banco === $Banco2); // output true
    
    $conn = $Banco->connect();
    $conn2 = $Banco2->connect();
    
    //var_dump( $conn === $conn2 ); // output true
    
    //forçando o reconnect
    $conn2 = $Banco2->forceReconnect();
    
    //var_dump( $conn === $conn2 ); // output false
    
    $Banco3 = BancoDeDados::getInstance();
    
    //var_dump(($Banco === $Banco3) && ($Banco2 === $Banco3)); //output true
    
    $conn3 = $Banco3->connect();
    
    //var_dump($conn === $conn2); // output false
    //var_dump($conn2 === $conn3); // output true
    
    $conn4 = $Banco->connect();
    
    //$conn e $conn4 foram recuperadas pelo mesmo objeto ($Banco), mas eu forcei o reconnect no singleton
    //var_dump($conn === $conn4); //output false
    //var_dump($conn2 === $conn4); //output true
    //var_dump($conn3 === $conn4); //output true
