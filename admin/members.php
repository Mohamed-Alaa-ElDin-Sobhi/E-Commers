<?php
session_start() ;
if(isset($_SESSION['user'])){
    $pagetitle = "Members" ;
    include 'init.php' ;
    /*===========================================================
    ==============GETمن خلال ال memberتقسيم صفحه ال===============
    ============================================================*/
    $action = "" ;
    if(isset($_GET['action'])){
        $action = $_GET['action'] ; 
    }else{
        $action = "manage" ;
    }
    /*===========================================================
    ===================== manageصفحه ال =========================
    ============================================================*/
    if($action == "manage"){

    }
    /*===========================================================
    ======================= Edit صفحه ال =========================
    ============================================================*/
    elseif($action == "Edit"){
        if(isset($_GET['ID']) && is_numeric($_GET['ID'])){
            $id             = $_GET['ID'];
            $sql            = " SELECT * FROM `users` WHERE `user_id`= '$id' LIMIT 1";
            $query          = $conn->query($sql) ;
            $row            = $query->fetch_array() ; 
          
            if(isset($row['user_id']) && $_SESSION['user'] == $row['user_name']){

                ?>

                <h1 class = "text-center">Edit Member</h1>
                <div class = "container" >
                    <form class="form-horizotal" action="?action=Update" method="POST">

                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="form-gruop" >
                            <label class="col-sm-2 control-label" for="user"> <?php echo lang('USER NAME') ?> </label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="user" id="user" value=" <?php echo $row['user_name'] ?> " autocomplete="off" class="form-control">
                            </div>
                        </div>

                        <div class="form-gruop">
                            <label class="col-sm-2 control-label" for="pass"> <?php echo lang('PASSWORD') ?> </label>
                            <div class="col-sm-10 col-md-4">
                                <input type="password" name="pass" id="pass" autocomplete="new-password" class="form-control">
                            </div>
                        </div>

                        <div class="form-gruop">
                            <label class="col-sm-2 control-label" for="fullname"> <?php echo lang('FULL NAME') ?> </label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="full" id="fullname" value =" <?php echo $row['ful_name'] ?>" autocomplete="off" class="form-control">
                            </div>
                        </div>

                        <div class="form-gruop">
                            <label class="col-sm-2 control-label" for="email"> <?php echo lang('EMAIL') ?> </label>
                            <div class="col-sm-10 col-md-4">
                                <input type="email" name="email" id="email" value=" <?php echo $row['email'] ?>" autocomplete="off" class="form-control">
                            </div>
                        </div>
                        
                        <br>
                        <div class="form-gruop">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value = <?PHP echo  lang("SAVE") ?> class="btn btn-primary">
                            </div>
                        </div>

                    </form>
                </div>
  
      <?php }else{
                header('location:index.php') ;
            }
        }else{
            header('location:index.php') ;
        }
    }
     /*===========================================================
    ======================= Update صفحه ال =========================
    ============================================================*/
    elseif($action == "Update" ){
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "<h1 class = 'text-center'>Update Member</h1>" ;
        
      }else{
        header('location:index.php') ;
      }

    }

    include $temp . '/footer.php' ;
}else{
    header('location:index.php') ;
    exit() ;
}