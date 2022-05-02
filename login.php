<?php

require_once'dbconfig.php';
session_start();

if (isset($_POST['update'])) {
    
    $user1 = $_POST['user'];
    $pas = $_POST['pas'];
    $sql = "SELECT user , pas , id FROM users";
    
    $query = $conn->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($results as $result) {
        $id = $result->id;
        $a = $result->user;
        $z = strcmp ($a,$user1);
        $b = $result->pas;
        
        if ($z == 0 ){
            $c = strcmp ($b,$pas);
            if ($c == 0 ){
                $_SESSION["id"] = $result->id;
                
                echo "<script>alert('با موفقیت وارد شدین ');</script>";
                echo "<script>window.location.href='index.php'</script>";
                
            }else{
                echo "<script>alert('رمز اشتباه ');</script>";
                echo "<script>window.location.href='login.php'</script>";

            }
        }
    
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
</head>
<body>
    
    <section class="formi">
        <div class="form" >
            <form class="form-1" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="z"><label  > نام کاربری</label></div>
                        <input type="text" class="form-control" name="user" placeholder="نام کاربری"  >
                    </div>
                    <div class="form-group col-md-6">
                        <div class="z"><label> رمز عبور</label></div>
                        <input type="password" class="form-control" name="pas" placeholder="رمز عبور" >
                    </div>
                </div>
               
                <input type="submit" class="btn"  value="ثبت" name="update">
            </form>
            <div class="link">
                <a href="./insert.php"><h4>ثبت نام</h4></a>
            </div>
        </div>
        
    </section>
    <section class="back">
        <div class="img">
            <img src="/php-crash-course-2020-master/img/Dataextraction.svg" alt="">
        </div>
    </section>
    
</body>
</html>