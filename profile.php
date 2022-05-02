<?php

require_once'dbconfig.php';
session_start();

if( !isset($_SESSION["id"]) ){

    header('Location: login.php');
    exit;
} else {
    $user1 = $_POST['user'];
    $pas = $_POST['pas'];
    $sql = "SELECT user , pas , id ,firstName ,lastName ,email , phone ,address  FROM users";
    $id_1= $_SESSION["id"];
    $query = $conn->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($results as $result) {
        $id = $result->id;
        if ($id_1 == $id){
            $a = $result->user;
            $fn = $result->firstName ;
            $ln = $result->lastName ;
            $em = $result->email ;
            $ph = $result->phone ;
            $ad = $result->address ;
        }
       
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../prj1/css/profile.css">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پروفایل</title>
</head>
<body>
    
    <div class="body">
        <div class="profile-img">
            <img src="./img/login.jpeg" alt="">
            <input type="file">

        </div>
        
        <form class="form" method="POST">
            <div class="name_kar">
                <label for="">نام کاربری</label>
                <h3><?php  echo($a); echo"@";?></h3>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>نام</label>
                    <input type="text" class="form-control" name="firstName" value="<?php echo htmlentities( $fn)?>" >
                </div>
                <div class="form-group col-md-6">
                    <label>نام خانوادگی</label>
                    <input type="text" class="form-control" name="lastName" value="<?php echo htmlentities( $ln)?>">
                </div>
            </div>
            <div class="form-group">
                <label>ایمیل</label>
                <input type="email" class="form-control"  name="email" value="<?php echo htmlentities( $em)?>">
            </div>
            <div class="form-group">
                <label>شماره</label>
                <input type="number" class="form-control" name="phone" value="<?php echo htmlentities( $ph)?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>آدرس</label>
                    <textarea class="form-control" rows="5" name="address" >
                    <?php echo htmlentities( $ad)?>
                    </textarea>

                </div>
            </div>
            <input type="submit" class="btn btn-success" value="ثبت" name="update">

        </form>
            
    </div>
    
</body>
</html>