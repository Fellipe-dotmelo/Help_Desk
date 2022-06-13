<?php

    session_start();

    session_destroy();
    header('Location: index.php')    
    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    //remover índices do array de sessão
    //unset() - Remove apenas índices existentes

    unset($_SESSION['x']);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir a variável de sessão
    //session_destroy() - Necessária nova requisição (comum forçar redirecionamento)

    
    session_destroy();

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */
?>