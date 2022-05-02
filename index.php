<?php

require_once'dbconfig.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav">
            <img src="img/Dataextraction.svg" class="brand-logo" alt="">
            <div class="nav-item">
                <div class="search">
                    <input type="text" class="search-box" placeholder="جست وجو در بین کالا و سازنده">
                    <button class="search-btn">جست و جو</button>
                </div>
                <a href="login.Php"><?php if( isset($_SESSION["id"]) ){$user1 = $_POST['user'];
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
                    
                    } echo($a); echo"@";}?><i class="fas fa-user"></i></a>
                <a href="../prj1/index.php"><?php session_destroy();?><i class="fas fa-shopping-cart"></i></a>

            </div>
        </div>
        <ul class="Links-container">
            <li class="Link-item"><a href="" class="Link">خانه</a></li>
            <li class="Link-item"><a href="" class="Link">مردانه</a></li>
            <li class="Link-item"><a href="" class="Link">زنانه</a></li>
            <li class="Link-item"><a href="" class="Link">بچه گانه</a></li>
            <li class="Link-item"><a href="" class="Link">ساخت</a></li>

        </ul>
    </nav>
    <!--hero-->
    <header class="hero-section">
        
       <!-- <div class="content">
            <img src="img/Dataextraction.svg" class="logo" alt="">
            <p class="sub-heading">  بهترین خرید را با ما تجربه کنید</p>
        </div> -->
    </header>
    <section class="product">
        <h2 class="product-category"> محصولات پیشنهادی</h2>
        <div>
            <button class="pre-btn"><img src="img/arrow-left.svg" alt=""></button>
            <button class="nxt-btn"><img src="img/arrow-left - 1.svg" alt=""></button>
            
            <div class="product-container">
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/h1.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/h2.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/h3.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/h4.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/h5.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/h6.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/h7.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="collection-container">
        <a href="#" class="collection">
            <img src="img/w.jpg" alt="">
            <p class="collection-title"> پوشاک <br> زنانه</p>
        </a>
        <a href="#" class="collection">
            <img src="img/m.jpg" alt="">
            <p class="collection-title"> پوشاک <br> مردانه</p>
        </a>
        <a href="#" class="collection">
            <img class="img-acc" src="img/a.jpg" alt="">
            <p class="collection-title"> سایر</p>
        </a>

    </section>
    <section class="product">
        <h2 class="product-category"> پیراهن</h2>
        <div>
            <button class="pre-btn"><img src="img/arrow-left.svg" alt=""></button>
            <button class="nxt-btn"><img src="img/arrow-left - 1.svg" alt=""></button>
            
            <div class="product-container">
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/b1.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/b2.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/b3.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/b4.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/b5.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/b6.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/b7.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="product">
        <h2 class="product-category">کفش</h2>
        <div>
            <button class="pre-btn"><img src="img/arrow-left.svg" alt=""></button>
            <button class="nxt-btn"><img src="img/arrow-left - 1.svg" alt=""></button>
            
            <div class="product-container">
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/s1.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/s2.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/s3.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/s4.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/s5.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/s6.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-img">
                        <span class="discount-tag">50% تخفیف</span>
                        <img src="img/s7.jpg" class="product-thumb" alt="">
                        <button class="card-btn"> افزودن به سبد خرید</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">برند</h2>
                        <p class="product-short-des"> یک توضیح کوتاه در چند خط...</p>
                        <span class="price">۲۰۰هزارتومان</span><span class="actual-price">۴۰۰هزار تومان</span>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <footer>
        
    </footer>

    <script src="js/nav.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
</body>
</html>