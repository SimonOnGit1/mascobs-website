<?php include('api.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Bonus Hunt</title>
    <!-- Fontawesome Cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Bootstrap css link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Swipper Slider css link -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Main css link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css link -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>


    <!-- Navbar Starts -->

    <header class="header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="menu-left">
                <a href="#"><img src="images/logo.png" alt="Logo.png" class="img-fluid"></a>
            </div>
            <div class="menu-right d-lg-flex align-items-center d-none">
                <nav class="menu-list d-flex align-items-center">
                    <ul class="mb-0 ps-0 d-flex">
                        <li><a href="index.php" class="font-d-bld text-white">HOME</a></li>
                        <li><a href="gamdom.html" class="font-d-bld text-white">GAMDOM</a></li>
                        <li><a href="hypedrop.html" class="font-d-bld text-white">HYPEDROP</a></li>
                        <li><a href="leaderboard.html" class="font-d-bld text-white">LEADERBOARD</a></li>
                    </ul>
                </nav>
                <div class="social-icon d-flex align-items-center">
                <ul class="ps-0 mb-0 d-flex">
                    <li><a target="blank" href="https://www.youtube.com/@mascoobss/videos"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a target="blank" href="https://twitter.com/mascoobss"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a target="blank" href="https://discord.gg/cwwTjNNpxx"><i class="fa-brands fa-discord"></i></a></li>
                    <li><a target="blank" href="https://www.instagram.com/mascoobs/"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
                </div>
            </div><i class="fa-solid fa-bars small-menu-btn d-inline-block d-lg-none ms-auto" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
        </div>
    </header>

    <!-- Offcanvas Start -->


    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="visibility: visible;" aria-modal="true" role="dialog">
        <div class="offcanvas-header">
            <a class="offcanvas-title" href="index.html" id="offcanvasExampleLabel"><img src="images/logo.png" alt="Logo"></a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="offcanvas-body g-0 d-flex flex-column justify-content-between">
            <nav class="menu-list align-items-center">
            <ul class="mb-0 ps-0">
                    <li><a href="index.php" class="font-d-bld text-white">HOME</a></li>
                    <li><a href="gamdom.html" class="font-d-bld text-white text-uppercase">GAMDOM</a></li>
                    <li><a href="hypedrop.html" class="font-d-bld text-white text-uppercase">HYPEDROP</a></li>
                    <li><a href="leaderboard.html" class="font-d-bld text-white text-uppercase">leaderboard</a></li>
                </ul>
            </nav>
            <div class="social-icon d-flex justify-content-center">
            <ul class="ps-0 mb-0 d-flex">
                    <li><a target="blank" href="https://www.youtube.com/@mascoobss/videos"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a target="blank" href="https://twitter.com/mascoobss"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a target="blank" href="https://discord.gg/cwwTjNNpxx"><i class="fa-brands fa-discord"></i></a></li>
                    <li><a target="blank" href="https://www.instagram.com/mascoobs/"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Offcanvas Ends -->

    <!-- Hero Section Starts -->

    <section id="hero">
        <div class="container">
            <div class="hero-heading text-center">
                <h1 class="mb-0 font-d-bld">BONUS<span>HUNT</span></h1>
                <P class="mb-0 text-white font-d-bld">BONUS HUNT - FIND THE CURRENT AND ALL HUNTS FROM THE PAST</P>
            </div>
            <div class="hero-list">
                <div class="hero-list-slider">
                    <ul class="ps-0 mb-0 d-flex  swiper-wrapper">
                        <li class="swiper-slide"><span class="font-d-bld text-white text-active">#100</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#99</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#98</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#97</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#96</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#95</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#94</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#93</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#92</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#91</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#90</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#89</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#88</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#87</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#86</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#85</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#84</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#83</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#82</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#81</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#80</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#79</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#78</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#77</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#76</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#75</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#74</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#73</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#72</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#71</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#70</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#69</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#68</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#67</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#66</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#65</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#64</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#63</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#62</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#61</span></li>
                        <li class="swiper-slide"><span class="font-d-bld text-white">#60</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section Ends -->

    <!-- Bonus Hunt Section Starts -->

    <section id="bonus-hunt">
        <div class="container">
            <div class="bounus-hunt-heading d-flex align-items-center justify-content-between">
                <div class="bonus-hunt-tittle">
                    <h3 id="bonushunt-name" class="mb-0 font-d-bld text-white"></h3>
                </div>
                <div class="bonus-hunt-btn">
                    <a href="#" class="font-d-bld text-white">ARCHIVE</a>
                </div>
            </div>
            <div></div>
            <div class="bonus-hunt-statement">
                <div class="d-flex flex-wrap justify-content-lg-evenly">
                    <div class="col-lg-2 col-md-4 col-6 mb-4 mb-lg-0">
                        <div class="statement-item">
                            <p class="mb-0 font-d-bld">DATE</p>
                            <h4 id="date" class="mb-0 font-d-bld text-white"></h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4 mb-lg-0">
                        <div class="statement-item">
                            <p class="mb-0 font-d-bld">BONUSES</p>
                            <h4 id="bonuses" class="mb-0 font-d-bld text-white"></h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4 mb-lg-0">
                        <div class="statement-item">
                            <p class="mb-0 font-d-bld">START BALANCE</p>
                            <h4 id="start-balance" class="mb-0 font-d-bld text-white"></h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-md-0 mb-4">
                        <div class="statement-item">
                            <p class="mb-0 font-d-bld">END BALANCE</p>
                            <h4 id="end-balance" class="mb-0 font-d-bld text-white"></h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="statement-item">
                            <p class="mb-0 font-d-bld">AVG. BET SIZE</p>
                            <h4 id="avg-bet" class="mb-0 font-d-bld text-white"></h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="statement-item">
                            <p class="mb-0 font-d-bld">AVG. X VALUE</p>
                            <h4 id="avg-x" class="mb-0 font-d-bld text-white"></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bounus-hunt-list">
                <div class="row">
                    <div class="col-lg-8 mb-md-5 mb-4 mb-lg-0">
                        <div class="list-table">
                            <div class="table-header">
                                <div class="row">
                                    <div class="col-4">
                                        <h4 class="mb-0 font-d-bld text-white">Game</h4>
                                    </div>
                                    <div class="col-2">
                                        <h4 class="mb-0  font-d-bld text-white">Bet</h4>
                                    </div>
                                    <div class="col-3">
                                        <h4 class="mb-0  font-d-bld text-white">X</h4>
                                    </div>
                                    <div class="col-3">
                                        <h4 class="mb-0  font-d-bld text-white">Win</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="table-list">
                                <?php include('table_list.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="guess-balance">
                            <h3 class="mb-0 font-d-bld text-white">GUESS THE END BALANCE (COMING SOON)</h3>
                            <div class="guess-end-balance row gx-0">
                                <div class="col-6">
                                    <div class="your-guess">
                                        <p class="mb-0 font-d-bld">YOUR GUESS</p>
                                        <h4 class="mb-0 font-d-bld text-white">&dollar;-----</h4>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="end-balance">
                                        <p class="mb-0 font-d-bld">END BALANCE</p>
                                        <h4 class="mb-0 font-d-bld text-white">&dollar;-----</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="winner-name">
                                <div class="winner col-8 mx-auto">
                                    <p class="mb-0 font-d-bld">WINNER</p>
                                    <h4 class="mb-0 font-d-bld text-white">-----</h4>
                                </div>
                            </div>
                        </div>
                        <div class="win-multiplier">
                            <div class="highest-win">
                                <h3 class="mb-0 font-d-bld text-white">HIGHEST WIN</h3>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="mb-0 font-d-bld">GAME</p>
                                        <h4 id="slot-name" class="mb-0 font-d-bld text-white"></h4>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0 font-d-bld">WIN</p>
                                        <h4 id="payout" class="mb-0 font-d-bld text-white"></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="highest-multiplier">
                                <h3 class="mb-0 font-d-bld text-white">HIGHEST MULTIPLIER</h3>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="mb-0 font-d-bld">GAME</p>
                                        <h4 id="slot-name1" class="mb-0 font-d-bld text-white"></h4>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0 font-d-bld">X VALUE</p>
                                        <h4 id="multiplier" class="mb-0 font-d-bld text-white"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bonus Hunt Section Ends -->

    <!-- Two Box Image Starts -->

    <section id="two-box-image">
        <div class="container">
            <div class="row">
                <h5 class="d-none">Two Box images</h5>
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="box-image-1">
                        <img src="images/box-1.png" alt="box-1.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-image-2">
                        <img src="images/box-2.png" alt="box-2.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Two Box Image Ends -->

    <!-- Footer Section Starts -->

    <footer id="footer">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-2 text-center mb-3 mb-lg-0 text-lg-start">
                    <div class="footer-logo">
                        <a href="#"><img src="images/logo.png" alt="logo.png" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="footer-text text-center font-d-reg">
                        <h4 class="mb-0">Mascoobs.com. All rights reserved</h4>
                        <p class="mb-0 font-d-reg">Mascoobs.com is not responsible for misunderstood or incorrect bonuses or promotions. We highly recommend reading and understanding the conditions of the bonus before using it. If you need any help understanding a bonus or welcome
                            offer, please contact us on Twitter.</p>
                    </div>
                </div>
                <div class="col-lg-2 text-center mt-3 mt-lg-0 text-lg-start">
                    <div class="footer-right">
                        <img src="images/footer-right.png" alt="footer-right.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Section Ends -->


    <!-- Js link -->

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/api.js"></script>
    <script>
        function loadData(page) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementsByClassName("table-list")[0].innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "table_list.php?page=" + page, true);
            xmlhttp.send();
        }
    </script>

</body>

</html>