<?php

require_once'dbconfig.php';
session_start();

if (isset($_POST['insert'])) {
    $user1 = $_POST['user'];
    $sql = "SELECT user FROM users";
    
    $query = $conn->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($results as $result) {
        $a = $result->user;
        $z = strcmp ($a,$user1);
        if ($z == 0 ){
            echo "<script>alert('نام کاربری موجود است خواهشا یک نام کاربری دیگر استفاده کنید');</script>";
            echo "<script>window.location.href='insert.php'</script>";
            exit;
        }
        $w = strcmp ($email,$email1);
        if ($w != 0 ){
            echo "<script>alert('ایمیل موجود است یا ایمیل خالی رها شده');</script>";
            echo "<script>window.location.href='insert.php'</script>";
            exit;
        }
    }
    $pas = $_POST['pas'];
    $pas1 = $_POST['pas1'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email1 = $_POST['email'];
    $address = $_POST['address'];
    $phone = intval($_POST['phone']);
    $r = strcmp ($pas,$pas1);
    if ($r != 0) {
        echo "<script>alert('NOt mach pas');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
   
    if ($r == 0){
        $sql = "INSERT INTO users(user,pas,pas1,firstName,lastName,email,address,phone) VALUES(:user,:pas,:pas1,:firstname,:lastname,:email,:address,:phone)";

        $query = $conn->prepare($sql);
        $query->bindParam(':user', $user1, PDO::PARAM_STR);
        $query->bindParam(':pas', $pas, PDO::PARAM_STR);
        $query->bindParam(':pas1', $pas1, PDO::PARAM_STR);
        $query->bindParam(':firstname', $fname, PDO::PARAM_STR);
        $query->bindParam(':lastname', $lname, PDO::PARAM_STR);
        $query->bindParam(':email', $email1, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':phone', $phone, PDO::PARAM_STR);
        $query->execute();

        $lastInsertId = $conn->lastInsertId();

        if ($lastInsertId) {
            echo "<script>alert('record insert successfully');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Error');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }

}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ثبت نام</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container border p-4 mt-4">

        <div class="row">
            <div class="col-md-12">
                <h3 class="p-4">وارد کردن اطلاعات</h3>
                <hr />
            </div>
        </div>

        <form method="post">
                <div class="form-group col-md-6">
                    <label>نام کاربری</label>
                    <input type="text" class="form-control" name="user" placeholder="poker110">
                </div>
            <div class="form-row">
                
                
                <div class="form-group col-md-6">
                    <label>رمز عبور</label>
                    <input type="password" class="form-control" name="pas" placeholder="****">
                </div>
                <div class="form-group col-md-6">
                    <label> ترکرار رمزعبور</label>
                    <input type="password" class="form-control" name="pas1" placeholder="****">
                </div>
                <div class="form-group col-md-6">
                    <label>نام</label>
                    <input type="text" class="form-control" name="firstName" placeholder="مثال : علی">
                </div>
                <div class="form-group col-md-6">
                    <label>نام خانوادگی</label>
                    <input type="text" class="form-control" name="lastName" placeholder="مثال : کریمی">
                </div>
            </div>
            <div class="form-group">
                <label>ایمیل</label>
                <input type="email" class="form-control" name="email" placeholder="مثال : ali@gmail.com">
            </div>
            <div class="form-group">
                <label>شماره</label>
                <input type="number" class="form-control" name="phone" placeholder="مثال : 0912813774">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>آدرس</label>
                    <textarea class="form-control" name="address" rows="5"></textarea>
                </div>
            </div>
           <input type="submit" class="btn btn-success" value="ثبت" name="insert">
        </form>
    </div>
</body>

</html>