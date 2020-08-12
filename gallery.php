<!DOCTYPE html>
<html lang="zxx">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <meta charset="UTF-8">
    <title>BacBon || Gallery</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="fonts/flaticon.css" />
    <!--favicon-->
    <link rel="shortcut icon" href="images/favicon/favicon.png">

    <!-- jQuery js -->
    <script src="js/jquery.js"></script>

</head>

<body>
    <div class="boxed_wrapper">

            <!-- header start -->
            <?php include_once('layout/header.php'); ?>
            <!-- header end -->


        <!--Page Title-->
        <section class="bredcrumb">
            <div class="bg-image text-center" style="background-image: url('images/resources/banner.jpg');">
                <h1>Gallery</h1>
            </div>
            <div class="">
                <ul class="middle">
                    <li><a href="index.php">Home</a></li>
                    <li><a class="inner" href="#">Gallery</a></li>
                </ul>
            </div>
        </section>
        <!--Page Title Ends-->
        <style>
            .imagehover {
                transition: .9s
            }
            
            .imagehover:hover {
                box-shadow: 2px 2px 4px 4px #888888;
            }
        </style>


        <style>
            * {
                box-sizing: border-box;
            }
            
            .row>.column {
                padding: 0 8px;
            }
            
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            
            .column {
                float: left;
                margin-top: 20px;
                width: 25%;
            }
            /* The Modal (background) */
            
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 100px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: black;
            }
            /* Modal Content */
            
            .modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                width: 90%;
                max-width: 1200px;
            }
            
            .modal span {
                color: yellow;
            }
            /* The close2 Button */
            
            .close2 {
                color: yellow;
                position: absolute;
                top: 80px;
                right: 45px;
                font-size: 35px;
                font-weight: bold;
            }
            
            .close2:hover,
            .close2:focus {
                color: red;
                text-decoration: none;
                cursor: pointer;
            }
            
            .mySlides {
                display: none;
            }
            
            .cursor {
                cursor: pointer
            }
            /* Next & previous buttons */
            
            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -50px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
            }
            /* Position the "next button" to the right */
            
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }
            /* On hover, add a black background color with a little bit see-through */
            
            .prev:hover,
            .next:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }
            /* Number text (1/3 etc) */
            
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }
            
            img {
                margin-bottom: -4px;
            }
            
            .caption-container {
                text-align: center;
                background-color: black;
                padding: 2px 16px;
                color: white;
            }
            
            .demo {
                opacity: 0.6;
            }
            
            .active,
            .demo:hover {
                opacity: 1;
            }
            
            img.hover-shadow {
                transition: 0.3s
            }
            
            .hover-shadow:hover {
                box-shadow: 2px 2px 4px 4px #888888;
            }
        </style>
        <section style="margin-top:20px">
            <div class="sec-title">
                <h2 class="center">Gallery</h2>

            </div>

        </section>

        <section style="padding:20px">
            <div class="container">


                <div class="row">
                    <div class="column">
                        <img src="images/gallery/1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/5.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/6.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/7.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/8.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/9.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/10.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/11.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/12.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/13.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/14.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/15.jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/16.jpg" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/17.jpg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/18.jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/19.jpg" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/20.jpg" style="width:100%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/21.jpg" style="width:100%" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/22.jpg" style="width:100%" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/23.jpg" style="width:100%" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/24.jpg" style="width:100%" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/25.jpg" style="width:100%" onclick="openModal();currentSlide(25)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/26.jpg" style="width:100%" onclick="openModal();currentSlide(26)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/27.jpg" style="width:100%" onclick="openModal();currentSlide(27)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/28.jpg" style="width:100%" onclick="openModal();currentSlide(28)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/29.jpg" style="width:100%" onclick="openModal();currentSlide(29)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/30.jpg" style="width:100%" onclick="openModal();currentSlide(30)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/31.jpg" style="width:100%" onclick="openModal();currentSlide(31)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/32.jpg" style="width:100%" onclick="openModal();currentSlide(32)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/33.jpg" style="width:100%" onclick="openModal();currentSlide(33)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/34.jpg" style="width:100%" onclick="openModal();currentSlide(34)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/35.jpg" style="width:100%" onclick="openModal();currentSlide(35)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/36.jpg" style="width:100%" onclick="openModal();currentSlide(36)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/37.jpg" style="width:100%" onclick="openModal();currentSlide(37)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/38.jpg" style="width:100%" onclick="openModal();currentSlide(38)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/39.jpg" style="width:100%" onclick="openModal();currentSlide(39)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/40.jpg" style="width:100%" onclick="openModal();currentSlide(40)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/41.jpg" style="width:100%" onclick="openModal();currentSlide(41)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/42.jpg" style="width:100%" onclick="openModal();currentSlide(42)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/43.jpg" style="width:100%" onclick="openModal();currentSlide(43)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="images/gallery/44.jpg" style="width:100%" onclick="openModal();currentSlide(44)" class="hover-shadow cursor">
                    </div>
                </div>

                <div id="myModal" class="modal">
                    <span class="close2 cursor " onclick="close2Modal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 44</div>
                            <img src="images/gallery/1.jpg" style="width:100%;height:520px;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 44</div>
                            <img src="images/gallery/2.jpg" style="width:100%;height:520px;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 44</div>
                            <img src="images/gallery/3.jpg" style="width:100%;height:520px;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 44</div>
                            <img src="images/gallery/4.jpg" style="width:100%;height:520px;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">5 / 44</div>
                            <img src="images/gallery/5.jpg" style="width:100%;height:520px;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">6 / 44</div>
                            <img src="images/gallery/6.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 44</div>
                            <img src="images/gallery/7.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 44</div>
                            <img src="images/gallery/8.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">9 / 44</div>
                            <img src="images/gallery/9.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">10 / 44</div>
                            <img src="images/gallery/10.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">11 / 44</div>
                            <img src="images/gallery/11.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">12 / 44</div>
                            <img src="images/gallery/12.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">13 / 44</div>
                            <img src="images/gallery/13.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">14 / 44</div>
                            <img src="images/gallery/14.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">15 / 44</div>
                            <img src="images/gallery/15.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">16 / 44</div>
                            <img src="images/gallery/16.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">17 / 44</div>
                            <img src="images/gallery/17.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">18 / 44</div>
                            <img src="images/gallery/18.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">19 / 44</div>
                            <img src="images/gallery/19.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">20 / 44</div>
                            <img src="images/gallery/20.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">21 / 44</div>
                            <img src="images/gallery/21.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">22 / 44</div>
                            <img src="images/gallery/22.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">23 / 44</div>
                            <img src="images/gallery/23.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">24 / 44</div>
                            <img src="images/gallery/24.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">25 / 44</div>
                            <img src="images/gallery/25.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">26 / 44</div>
                            <img src="images/gallery/26.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">27 / 44</div>
                            <img src="images/gallery/27.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">28 / 44</div>
                            <img src="images/gallery/28.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">29 / 44</div>
                            <img src="images/gallery/29.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">30 / 44</div>
                            <img src="images/gallery/30.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">31 / 44</div>
                            <img src="images/gallery/31.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">32 / 44</div>
                            <img src="images/gallery/32.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">33 / 44</div>
                            <img src="images/gallery/33.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">34 / 44</div>
                            <img src="images/gallery/34.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">35 / 44</div>
                            <img src="images/gallery/35.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">36 / 44</div>
                            <img src="images/gallery/36.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">37 / 44</div>
                            <img src="images/gallery/37.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">38 / 44</div>
                            <img src="images/gallery/38.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">39 / 44</div>
                            <img src="images/gallery/39.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">40 / 44</div>
                            <img src="images/gallery/40.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">41 / 44</div>
                            <img src="images/gallery/41.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">42 / 44</div>
                            <img src="images/gallery/42.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">43 / 44</div>
                            <img src="images/gallery/43.jpg" style="width:100%;height:520px;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">44 / 44</div>
                            <img src="images/gallery/44.jpg" style="width:100%;height:520px;">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    </div>
                </div>
            </div>


        </section>
        <script>
            function openModal() {
                document.getElementById('myModal').style.display = "block";
            }

            function close2Modal() {
                document.getElementById('myModal').style.display = "none";
            }

            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                var captionText = document.getElementById("caption");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                captionText.innerHTML = dots[slideIndex - 1].alt;
            }
        </script>





        <!-- Call to action -->

        <!-- footer start -->
        <?php include_once('layout/footer.php'); ?>
		<!-- footer end -->




        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s color2_bg">
		<span class="fa fa-angle-up"></span>
	</button>
        <!-- pre loader  -->
        <div class="preloader"></div>

        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jQuery ui js -->
        <script src="js/jquery-ui.js"></script>
        <!-- owl carousel js -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- mixit up -->
        <script src="js/wow.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/menuzord.js"></script>

        <!-- fancy box -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.polyglot.language.switcher.js"></script>
        <script src="js/nouislider.js"></script>
        <script src="js/jquery.bootstrap-touchspin.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/imagezoom.js"></script>
        <script src="js/validation.js"></script>
        <script id="map-script" src="js/default-map.js"></script>
        <script src="js/custom.js"></script>

    </div>

</body>



</html>