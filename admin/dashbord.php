<?php   session_start() ; 
        include 'init.php' ;
        if(isset($_SESSION['user'])){
            
        }else{
            header('location:index.php') ;
            exit() ;
        }
?>

    


<?php include $temp . 'footer.php' ; ?>
