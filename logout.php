<?php

    session_start();
    
    //unset destrói a variável especificada
    unset ( $_SESSION['logged'] );
    
    session_destroy();
    
    http_response_code(303);
    header( "Location:  login.php" );

?>