<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- css link -->
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/respon.css">
        
        <!-- bootstrap link -->
        <link rel="stylesheet" href="./assets/bootstrap5/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
        <!-- fontawewsome link -->
        <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
        
        <!-- jquery link -->
        <script src="./assets/jquery/jquery-3.6.0.min.js"></script>
        <title>GH888</title>
    </head>
    <body>
    <div class="header-for-mobile">
        <div class="icon" id="search-for-mobile">
            <img src="./assets/images/icon/search.png" alt="">
        </div>
        <div class="logo-mobile">
            <img src="./assets/logo/GH888 V2.0.png" alt="">
        </div>
        <div class="icon" id="bars-menu-for-mobile" onclick="openNav()">
            <img src="./assets/images/icon/menu.png" alt="">
        </div>
    </div>
    <div class="main-blog">
        <div class="main-box">
            <div class="side-bars" id="myNav">
                <div class="close-menu" onclick="closeNav()">
                    <img src="./assets/images/icon/close.png" alt="">
                </div>
                <div class="logo">
                    <img src="./assets/logo/GH888 V2.0.png" alt="">
                </div>
                <div class="user-member">
                    <div class="images">
                        <img src="./assets/images/icon/user.png" alt="">
                    </div>
                    <div class="btn-user">
                        <span id="signin">Log in</span>
                        <span id="signup">Sign Up</span>
                    </div>
                </div>
                <div class="side-menu">
                    <ul>
                        <li><a href="#" class="active"><img src="./assets/images/icon/home.png" alt="">&emsp;Home</a></li>
                        <li><a href="#"><img src="./assets/images/icon/slot.png" alt="">&emsp;Slots</a></li>
                        <li><a href="#"><img src="./assets/images/icon/poker-card.png" alt="">&emsp;Poker Cards</a></li>
                        <li><a href="#"><img src="./assets/images/icon/fish.png" alt="">&emsp;Fishs</a></li>
                        <li><a href="#"><img src="./assets/images/icon/roulette.png" alt="">&emsp;Roulette</a></li>
                        <li><a href="#"><img src="./assets/images/icon/girl-live.png" alt="">&emsp;Lives</a></li>
                        <li><a href="#"><img src="./assets/images/icon/download.png" alt="">&emsp;Downloads</a></li>
                        <li><a href="#"><img src="./assets/images/icon/contact.png" alt="">&emsp;Contact Us</a></li>
                    </ul>
                </div>
                <div class="clock" id="myclock" onload="showTime()"></div>
                <div class="follow">
                    <h6>Follow Us</h6>
                    <a href="#"><img src="./assets/images/icon/facebook-logo.png" alt=""></a>
                    <a href="#"><img src="./assets/images/icon/youtube.png" alt=""></a>
                    <a href="#"><img src="./assets/images/icon/telegram.png" alt=""></a>
                </div>
                <div class="copyright">
                    <p>Copyright 2022, the GH888. All rights reserved</p>
                </div>
            </div>
            <div class="box-blog">
                <div class="header">
                    <div class="form-search">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <p>Search for you favourite game</p>
                            <button type="submit" name="btn-searcc"><i class="fa fa-search"></i></button>
                            <input type="text" name="search">
                        </form>
                    </div>
                    <div class="trending">
                        <marquee behavior="right" direction="#" >GH888 is a Website that includes all types of online games corresponding to the player's condition</marquee>
                    </div>
                </div>
                <div class="banner">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/images/banner-img/Banner 01.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/banner-img/Banner 02.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/banner-img/Banner 03.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/banner-img/Banner 04.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <!-- blog-2 -->
                <div class="blog-2">
                    <div class="title">
                        <span>Poker Card Games</span>
                    </div>
                    <div class="main-box">
                        <a href="#">
                            <div class="box">
                                <div class="images">
                                    <img src="./assets/images/port-jpg-1/2.jpg" alt="">
                                </div>
                                <div class="des">
                                    <!-- <p>Slot Big Win</p> -->
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="main-box">
                        <a href="#">
                            <div class="box">
                                <div class="images">
                                    <img src="./assets/images/port-jpg-1/8.jpg" alt="">
                                </div>
                                <div class="des">
                                    <!-- <p>New Poker</p> -->
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="main-box">
                        <a href="#">
                            <div class="box">
                                <div class="images">
                                    <img src="./assets/images/port-jpg-1/10.jpg" alt="">
                                </div>
                                <div class="des">
                                    <!-- <p>New Poker</p> -->
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <!-- blog-3 -->
                <div class="blog-3">
                    <div class="main-box">
                        <a href="#">
                            <div class="box">
                                <div class="images">
                                    <img src="./assets/images/lan-png/1.png" alt="">
                                </div>
                                <div class="des">
                                    <p>Xóc Đĩa</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="main-box">
                        <a href="#">
                            <div class="box">
                                <div class="images">
                                    <img src="./assets/images/lan-png/14.png" alt="">
                                </div>
                                <div class="des">
                                    <p>Tài Xỉu</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="main-box">
                        <a href="#">
                            <div class="box">
                                <div class="images">
                                    <img src="./assets/images/lan-png/15.png" alt="">
                                </div>
                                <div class="des">
                                    <p>Xổ Số</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="main-box">
                        <a href="#">
                            <div class="box">
                                <div class="images">
                                    <img src="./assets/images/lan-png/16.png" alt="">
                                </div>
                                <div class="des">
                                    <p>Bầu Cua</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- user account -->
    <div class="main-box-user" id="main-box-user">
        <div class="user-signup-for-desktop" id="user-signup-for-desktop">
            <div class="close" id="close-user-signup">
                <i class="fa fa-times"></i>
            </div>
            <div class="icon">
                <img src="./assets/images/icon/user.png" alt="">
            </div>
            <h6>Sign Up</h6>
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="#">Uasername</label><br>
                <input type="text" placeholder="Username" name="username"><br>
                <label for="#">Email</label><br>
                <input type="text" placeholder="Email" name="email"><br>
                <label for="#">Passwords</label><br>
                <input type="password" placeholder="Passwords" name="password"><br>
                <label for="#">Confirm Passwords</label><br>
                <input type="password" placeholder="Confirm Passwords" name="confirm_password"><br>
                <button type="submit" name="btn-signup">Sign Up</button>
            </form>
        </div>
        <div class="user-signin-for-desktop" id="user-signin-for-desktop">
            <div class="close" id="close-user-signin">
                <i class="fa fa-times"></i>
            </div>
            <div class="icon">
                <img src="./assets/images/icon/user.png" alt="">
            </div>
            <h6>Sign In</h6>
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="#">Uasername or Email</label><br>
                <input type="text" placeholder="Username or Email" name="username_or_email"><br>
                <label for="#">Passwords</label><br>
                <input type="password" placeholder="Passwords" name="password"><br>
                <button type="submit" name="btn-signin">Sign In</button>
            </form>
        </div>
    </div>
    <!-- script link -->
    <script src="./assets/script/script.js"></script>
</body>
</html>