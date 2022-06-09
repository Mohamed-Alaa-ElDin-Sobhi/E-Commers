<?php 
session_start() ;
if(isset($_SESSION['user'])){
    header('location:dashbord.php') ;
}
$NoNavbar = "" ;
$pagetitle = "Login" ;
include 'init.php' ;
    if(isset($_POST['login'])){
        $user       = trim($_POST['user']) ;
        $pass       = sha1(trim($_POST['pass'])) ;
        
        
        $sql        = " SELECT
                            `user_id` , `gruop_id`,`user_name`,`password` 
                        FROM 
                            `users` 
                        WHERE `user_name` = '$user'" ;

        $query      = $conn->query($sql) ;
        $row        = $query->fetch_array() ;
        if($query->num_rows > 0 ){
            if($user == $row['user_name'] && $pass == $row['password'] && $row['gruop_id'] == 1 ){
                $_SESSION['user'] = $row['user_name'] ;
                $_SESSION['id'] = $row['user_id'] ;
                $_SESSION['rank'] = $row['admin'] ;
                header('location:dashbord.php') ;   
                exit() ;             
            }elseif($user == $row['user_name'] && $pass == $row['password'] && $row['gruop_id'] == 0 ){
                $_SESSION['user'] = $row['user_name'] ;
                $_SESSION['id'] = $row['user_id'] ;
                $_SESSION['rank'] = $row['member'] ;
                header('location:dashbord.php') ;   
                exit() ;  
            }else{
                echo "<h2> كلمه السر غير صحيحه <h2>" ;
            } 
        }else{
            echo "<h2>المستخدم غير موجود<h2>" ;
        } 
    }
?>

    




    <form method="POST" class= "login">
    <h2 class="text-center">Admin Login</h2>
        <input type="text" name="user" class= "form-control" placeholder= "User Name" autocomplete="off">
        <input type = "password" name = "pass" class = "form-control" placeholder = "Password" autocomplete = "new-password">
        <input type = "submit" name="login" value ="Login" class = "btn btn-primary btn-block" placeholder = "User Name" >
    </form>

<?php include $temp . 'footer.php' ; ?>


