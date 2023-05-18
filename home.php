<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> <span>max</span>wheels </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#vehicles">vehicles</a>
            <a href="#services">services</a>
            <a href="#featured">featured</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
        </nav>

        <div id="login-btn">

          <a href="index.php">  <button class="btn">Log Out</button> </a>

            <i class="far fa-user"></i>
        </div>
    </header>


    <section class="home" id="home">

        <h3 data-speed="-2" class="home-parallax">Looking For a Car ?</h3>

        <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

        <a data-speed="7" href="#featured" class="btn home-parallax">explore cars</a>

    </section>

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>15+</h3>
                <p>branches</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>4770+</h3>
                <p>cars sold</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>320+</h3>
                <p>happy clients</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>1500+</h3>
                <p>news cars</p>
            </div>
        </div>

    </section>

    <section class="vehicles" id="vehicles">

        <h1 class="heading"> popular <span>vehicles</span> </h1>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/vehicle-1.png" alt="">
                    <div class="content">
                        <h3>Land Rover Range Rover</h3>
                        <div class="price"> <span>price : </span> 2.5 Cr/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 9.32 kmpl
                        </p>
                        <a href="./Popular Vehicles/Range rover/Land Rover Range Rover.php" class="btn">check out</a>

                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/vehicle-2.png" alt="">
                    <div class="content">
                        <h3>BMW 3 Series</h3>
                        <div class="price"> <span>price : </span> 60 L/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 16.13 kmpl
                        </p>
                        <a href="./Popular Vehicles/BMW 3 series/BMW_3_series.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/vehicle-3.png" alt="">
                    <div class="content">
                        <h3>Mercedes-Benze C-Class</h3>
                        <div class="price"> <span>price : </span> 70 L/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 18 kmpl
                        </p>
                        <a href="./Popular Vehicles/C-class/C-class.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/vehicle-4.png" alt="">
                    <div class="content">
                        <h3>Audi Q7</h3>
                        <div class="price"> <span>price : </span> 90 L/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 12 kmpl
                        </p>
                        <a href="./Popular Vehicles/Audi Q7/Audi Q7.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/vehicle-5.png" alt="">
                    <div class="content">
                        <h3>Land Rover Velar</h3>
                        <div class="price"> <span>price : </span> 1.4 cr/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 13 kmpl
                        </p>
                        <a href="./Popular Vehicles/Velar/Velar.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/vehicle-6.png" alt="">
                    <div class="content">
                        <h3>Toyota Fortuner</h3>
                        <div class="price"> <span>price : </span> 52 L/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 12.57 kmpl
                        </p>
                        <a href="./Popular Vehicles/Fortuner/Fortuner.php" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>New Arrivals</h3>
                <p>.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>parts repair</h3>
                <p>.</p>
                <a href="./Services/Spare Part/sparepart.php" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>car insurance</h3>
                <p>.</p>
                <a href="./Services/Insurance/insurance.php" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-car-battery"></i>
                <h3>battery replacement</h3>
                <p>.</p>
                <a href="./Services/Battery/index.php" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>oil change</h3>
                <p>.</p>
                <a href="./Services/Oil Change/oil.php" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24/7 support</h3>
                <p>.</p>
                <a href="#" class="btn"> read more</a>
            </div>

        </div>

    </section>

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> cars </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/car-1.png" alt="">
                    <div class="content">
                        <h3>Jeep Wrangler</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">60.70 L/-</div>
                        <a href="./Featured Cars/Jeep Wrangler/Jeep Wranler.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-2.png" alt="">
                    <div class="content">
                        <h3>Honda civic</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">28 L/-</div>
                        <a href="./Featured Cars/Honda Civic/Honda Civic.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-3.png" alt="">
                    <div class="content">
                        <h3>Audi Q5</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>l
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">78 L/-</div>
                        <a href="./Featured Cars/Audi Q5/Audi Q5.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-4.png" alt="">
                    <div class="content">
                        <h3>Mercedes-Benze E-class</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">85 L/-</div>
                        <a href="./Featured Cars/Eclass/E-class.php" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/car-5.png" alt="">
                    <div class="content">
                        <h3>Tata Harrier</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">23.60 L/-</div>
                        <a href="./Featured Cars/Harrier/Harrier.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-6.png" alt="">
                    <div class="content">
                        <h3>Hyundai Tucson</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">30 L/-</div>
                        <a href="./Featured Cars/Harrier/Harrier.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-7.png" alt="">
                    <div class="content">
                        <h3>BMW M5 Competition</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">1.73 Cr/-</div>
                        <a href="./Featured Cars/BMW M5/M5.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-8.png" alt="">
                    <div class="content">
                        <h3>Land Rover Defender</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">90 L/-</div>
                        <a href="./Featured Cars/Defender/Defender.php" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="reviews" id="reviews">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/pic-1.png" alt="">
                    <div class="content">
                        <p>One can get each and every detailed information about new cars, used cars, upcoming cars
                            everything related to autoworld. All kind of used cars' information around the country</p>
                        <h3>Kaustubh Mitkari</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-2.png" alt="">
                    <div class="content">
                        <p>I am searching a new car on this site ...awesome exp ..with some trouble ..I heard this app
                            providing coupan offer but .I didnt receved such offer coupan </p>
                        <h3>Husaif Fayaz </h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <div class="content">
                        <p>My first choice to search,find,compare cars. app updates me latest news on cars. Thank you
                            team. you are doing a good job. Keep it up</p>
                        <h3>Satyam Rathod</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-4.png" alt="">
                    <div class="content">
                        <p>Definitely in need of an update to kill some bugs. A lot of car apps have disappeared and I
                            hope this one doesn’t. I love reading reviews but it has issues. App crashes, won’t load
                            some pics</p>
                        <h3>Sarabjeet Bindra</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-5.png" alt="">
                    <div class="content">
                        <p>The detailed info about the car is good and the news feature is a good one. The app at times
                            feels laggy when navigation to the next page from say specs to price to compare. Otherwise
                            it was a smooth experience</p>
                        <h3>Rahul Yadav</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-6.png" alt="">
                    <div class="content">
                        <p>Good service and user-friendly. Would be appreciable if the documentation and other supports
                            are provided.</p>
                        <h3>Ubaid Afzal</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span> us</h1>

        <div class="row">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860316.0629474903!2d68.36791992187499!3d19.114678004380277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b44bdc6ec3%3A0x950293b22cb93249!2sBig%20Boy%20Toyz!5e0!3m2!1sen!2sin!4v1653762680430!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="contact.php" method="POST">
                <h3>get in touch</h3>
                <input type="text" name="fullname" placeholder="your name" class="box">
                <input type="email" name="email" placeholder="your email" class="box">
                <input type="text" name="subj" placeholder="subject" class="box">
                <textarea name="discription" placeholder="your message" class="box" cols="30" rows="10"></textarea>
                <input type="submit" name="save" value="send message" class="btn">
            </form>

        </div>

    </section>

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>our branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91 7038976087 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> rathodsatyamkumar@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> sarabjeet </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Aurangabad, india - 431001 </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit"> Thank You </div>

    </section>










    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</>