<?php
    /*===========================================================
    ======================  اختصارات الموقع =====================
    ============================================================*/


    $css        = "design/css/" ;
    $js         = "design/js/" ;
    $temp       = "includes/templates/" ;
    $lang       = "includes/lang/" ;
    $func       = "includes/function/" ;


    /*===========================================================
    ======================  اختصارات الموقع =====================
    ============================================================*/
    //استدعاء صفحه اللغه
    include $lang . 'en.php' ;
    //functionاستدعاء صفحه 
    include $func . 'functions.php' ;
    //headerاستدعاء صفحه ال
    include $temp . 'header.php' ;
    //mambarاستدعاء صفحه ال
    if(!isset($NoNavbar)){ include $temp . 'navbar.php' ; }
    //connectاستدعاء صفحه ال
    include 'connect.php' ;
    