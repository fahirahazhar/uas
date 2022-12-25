<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Cal</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logoo.png" alt=" " class="d-inline-block align-text-top">
            <img src="images/bar3.png" alt=" " class="d-inline-block align-text-top">
        </a>

        <nav class="navbar navbar-expand-md">
            <ul class="navbar-nav ms-auto">
                <li><a href="#home">Home</a></li>
                <li><a href="#bmrcount">BMR Count</a></li>
                <li><a href="#menu">Food</a></li>
                <li><a href="#sport">Sport</a></li>
                <li><a href="#review">Review</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#team">Our Team</a></li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
    </header>

    <!-- header section ends -->

    <!-- BMR section starts  -->

    <section class="bmrcount" id="bmrcount">

        <h1 class="heading"> </h1>

        <div class="wrapper">
            <div class="formContent">
                <div id="alertBox"></div>
                <div class="divider"></div>

                <div class="btn-group btn-group-toggle formElement" data-toggle="buttons">
                    <label class="btn  btn-outline-dark  active" id="male">
                        <input type="radio" name="options" autocomplete="off" checked> Male
                    </label>
                    <label class="btn btn-outline-dark " id="female">
                        <input type="radio" name="options" autocomplete="off"> Female
                    </label>
                </div>



                <div class="divider"></div>

                <div class="form-group formGroupItem">
                    <label class="col-2 col-form-label">Age</label>
                    <div class="col-10">
                        <input class="form-control" id="age" type="text" style="width: 95%;" value="20">
                    </div>
                </div>
                <div class="form-group formGroupItem ">
                    <label class="col-2 col-form-label">Height</label>
                    <div class="col-6">
                        <input class="form-control" id="height" type="text" style="width: 95%;" value="150">
                    </div>

                    <div class="col-4">
                        <div class="btn-group btn-group-toggle " data-toggle="buttons">
                            <label class="btn  btn-outline-dark  active" id="cm">
                                <input type="radio" name="options" autocomplete="off" checked> cm
                            </label>
                            <label class="btn btn-outline-dark " id="ft">
                                <input type="radio" name="options" autocomplete="off"> ft
                            </label>
                        </div>
                    </div>


                </div>
                <div class="form-group formGroupItem ">
                    <label class="col-2 col-form-label">Weight</label>
                    <div class="col-6">
                        <input class="form-control" id="weight" type="text" style="width: 95%;"
                            value="72">
                    </div>
                    <div class="col-4">
                        <div class="btn-group btn-group-toggle " id="kg"data-toggle="buttons">
                            <label class="btn  btn-outline-dark  active">
                                <input type="radio" name="options" autocomplete="off" checked> kg
                            </label>
                            <label class="btn btn-outline-dark " id="lbs">
                                <input type="radio" name="options" autocomplete="off"> lbs
                            </label>
                        </div>
                    </div>

                </div>


                <div class="divider"></div>



                <div class="form-group formGroupItem ">
                    <label class="col-2 col-form-label">Activity</label>
                    <div class="col-10">
                        <select class="form-control" style="width: 95%;" id="activity">
                            <option value="1.2">Lack of any activity</option>
                            <option value="1.3">Low physical activity (1 workouts a week) </option>
                            <option value="1.4">+ Low physical activity (2 workouts a week) </option>
                            <option value="1.5">Medium physical activity (3 workout per week) </option>
                            <option value="1.6">+ Medium physical activity (4 workout per week) </option>
                            <option value="1.7">High physical activity (3 workout per week + physical work)
                            </option>
                            <option value="1.8">+ High physical activity (4 workout per week + physical work)
                            </option>
                            <option value="1.9">Very high physical activity (athletes, people who train every day)
                            </option>
                            <option value="2.2">+ Very high physical activity (athletes, people who train every day)
                            </option>
                        </select>
                    </div>
                </div>

                <div class="divider"></div>

                <div id="submit" class="btn btn-success formSubmit"> SUBMIT </div>

                <div class="divider"></div>

                <div class="form-group formGroupItem ">
                    <label class="col-2 col-form-label">BMR</label>
                    <div class="col-10">
                        <input class="form-control" id="bmr" type="text" style="width: 95%;" readonly>
                    </div>
                </div>


                <div class="divider"></div>

                <div class="divider"></div>
            </div>

            <script>
                function isNumericAndGreatherThanZero(num) {
                    return !isNaN(num) && num > 0
                }

                $("#submit").click(function() {

                    var age = $("#age").val();
                    var height = $("#height").val();
                    var weight = $("#weight").val();


                    if (!isNumericAndGreatherThanZero(age) || !isNumericAndGreatherThanZero(height) || !
                        isNumericAndGreatherThanZero(weight)) {
                        $('#alertBox').html(
                            "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Incorrect values!</strong> Check the correctness of the entered values. <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>"
                        );
                        return;
                    }

                    var activity = $("#activity").val();
                    var male = $('#male').hasClass("active");
                    var ft = $('#ft').hasClass("active");
                    var lbs = $('#lbs').hasClass("active");




                    if (ft) {
                        height = height * 30.48;
                    }



                    if (lbs) {
                        weight = weight * 0.45359237;
                    }

                    var ageFactor, weightFactor, heightFactor, additionalFactor;

                    if (male) {
                        additionalFactor = 66;
                        weightFactor = 13.7;
                        heightFactor = 5;
                        ageFactor = 6.76;
                    } else {
                        additionalFactor = 655;
                        weightFactor = 9.6;
                        heightFactor = 1.8;
                        ageFactor = 4.7;
                    }


                    var result = Math.round((additionalFactor + (weightFactor * weight) + (heightFactor * height) - (
                        ageFactor * age)));

                    $("#bmr").val(result);

                });
            </script>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
            </script>
            <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h1 class="heading"> our <span>Food</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/yellow.jpg" border="0" alt="">
                <h3> Bulgogi Hot Dog</h3>
                <h4>460 kkal</h4>
                <h5> Protein : 39 gr</h5>
                <h5> Carbs : 49 gr</h5>
                <h5> Fiber : 6 gr</h5>
                <h5> Fat : 12 gr</h5>
                <a href="https://wa.me/6285624292128" class="btn">Order Now</a>
            </div>

            <div class="box">
                <img src="images/yellow1.jpeg" border="0" alt="Daging">
                <h3>Ayam rica and ikan Woku with nasi goreng </h3>
                <h4>451 kkal</h4>
                <h5> Protein : 40 gr</h5>
                <h5> Carbs : 48 gr</h5>
                <h5> Fiber : 6 gr</h5>
                <h5> Fat : 11 gr</h5>
                <a href="https://wa.me/6285624292128" class="btn">Order Now</a>
            </div>

            <div class="box">
                <img src="images/yellow2.jpeg" border="0" alt="Buah">
                <h3>Meatloaf with creamy spinach sauce with Chessy baked Potato</h3>
                <h4>459 kkal</h4>
                <h5> Protein : 38 gr</h5>
                <h5> Carbs : 47 gr</h5>
                <h5> Fiber : 6 gr</h5>
                <h5> Fat : 12 gr</h5>
                <a href="https://wa.me/6285624292128" class="btn">Order Now</a>
            </div>

            <div class="box">
                <img src="images/yellow3.jpeg" border="0" alt="Buah">
                <h3>Truffle Mushroom Paste</h3>
                <h4>468 kkal</h4>
                <h5> Protein : 40 gr</h5>
                <h5> Carbs : 50 gr</h5>
                <h5> Fiber : 6 gr</h5>
                <h5> Fat : 12 gr</h5>
                <a href="https://wa.me/6285624292128" class="btn">Order Now</a>
            </div>

            <div class="box">
                <img src="images/yellow4.jpeg" border="0" alt="Buah">
                <h3>Japanase Hamburg Steak with onigiri</h3>
                <h4>443 kkal</h4>
                <h5> Protein : 38 gr</h5>
                <h5> Carbs : 48 gr</h5>
                <h5> Fiber : 6 gr</h5>
                <h5> Fat : 11 gr</h5>
                <a href="https://wa.me/6285624292128" class="btn">Order Now</a>
            </div>

            <div class="box">
                <img src="images/yellow5.jpeg" border="0" alt="Buah">
                <h3>Tom Yum Suki Set</h3>
                <h4>459 kkal</h4>
                <h5> Protein : 40 gr</h5>
                <h5> Carbs : 50 gr</h5>
                <h5> Fiber : 6 gr</h5>
                <h5> Fat : 11 gr</h5>
                <a href="https://wa.me/6285624292128" class="btn">Order Now</a>
            </div>

            <div class="box">
                <img src="images/yellow6.jpeg" border="0" alt="Buah">
                <h3>Rice Box Katsu Mentai</h3>
                <h4>468 kkal</h4>
                <h5> Protein : 42 gr</h5>
                <h5> Carbs : 48 gr</h5>
                <h5> Fiber : 6 gr</h5>
                <h5> Fat : 12 gr</h5>
                <a href="https://wa.me/6285624292128" class="btn">Order Now</a>
            </div>

            <div class="box">
                <img src="images/yellow7.jpeg" border="0" alt="Buah">
                <h3>Egg Drop Sandwich</h3>
                <h4>455 kkal</h4>
                <h5> Protein : 40 gr</h5>
                <h5> Carbs : 49 gr</h5>
                <h5> Fiber : 6 gr</h5>
                <h5> Fat : 11 gr</h5>
                <a href="https://wa.me/6285624292128" class="btn">Order Now</a>
            </div>



        </div>

    </section>

    <!-- menu section ends -->

    <section class="sports" id="sports">

        <h1 class="heading"> our <span>Sports</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="https://www.youtube.com/@EmiWong" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="images/channels4_profile.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Emi Wong</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="https://www.youtube.com/@SKWADHowTos" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="images/swkd.jpg" alt="">
                </div>
                <div class="content">
                    <h3>SKWD Fitness</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="https://www.youtube.com/@sunnyfunnyfitness3478" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="images/sunny.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Sunny Funny Fitness</h3>
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

    </section>

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Yang namanya proses diet itu ya lo harus sabar. nikmati prosesnya, nikmati setiap bunyi kriuk2 di
                    perut lo, balik lagi semuanya adalah perjuangan percaya aja semua yang kita lakuin itu pasti ada
                    hasilnya and the last jangan terlalu memikirkan apa kata orang lain.</p>
                <img src="images/ricu2.jpg" class="user" alt="">
                <h3>Ricky Cuaca</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Gak mudah jalanin semua itu. Sampai akhirnya saat sakit itu aku bisa lihat di mana keluarga, sahabat,
                    dan orang-orang sekitar aku yang sayang banget sama aku. Mereka cuma pengen aku sehat terus. Di situ
                    aku jadi terdorong untuk memulai diet lagi, dengan alasan bukan cuma untuk jadi ‘KURUS’ tapi aku mau
                    jadi ‘LEBIH SEHAT.</p>
                <img src="images/clarissa.jpg" class="user" alt="">
                <h3>Clarissa Putri</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p> Diet itu harus konsisten, sabar tetapi tidak menyiksa diri dan diet itu bukan
                    tentang merubah penampilan melainkan merubah pola hidup yang lebih sehat</p>
                <img src="images/tina.jpeg" class="user" alt="">
                <h3>Tina Toon</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.865984443135!2d107.44251221455664!3d-6.538603295270665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e68a1406c01%3A0xa66f34eb29c41198!2sUniversitas%20Pendidikan%20Indonesia%2C%20Kampus%20Purwakarta!5e0!3m2!1sid!2sid!4v1671525560158!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="https://formspree.io/f/xpzeaojr" method="POST">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number phone" placeholder="number phone">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="messsage" placeholder="message">
                </div>
                <button type="submit"> send</button>
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- blogs section starts  -->

    <section class="team" id="team">

        <h1 class="heading"> our <span>Team</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/wanita.jpg" alt="">
                </div>
                <div class="content">
                    <span> by Fakhirah Azhar/ 2nd June, 2003</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="https://www.instagram.com/fkhrazhar/" class="btn">About Me</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/dyka.jpeg" alt="">
                </div>
                <div class="content">
                    <span>by Andyka Yuansyah/ 25th March, 2003</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="https://www.instagram.com/dykayuan_2503/" class="btn">About Me</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/eci2.jpeg" alt="">
                </div>
                <div class="content">
                    <span>by Resy Susilawati / 31st July 2002</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="https://www.instagram.com/resyss_s/" class="btn">About Me</a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-pinterest"></a>
            <a href="#" class="fab fa-youtube"></a>
            <a href="#" class="fab fa-whatsapp"></a>
        </div>


        <div class="links">
            <a href="#home">home</a>
            <a href="#bmrcount">bmrcount</a>
            <a href="#menu">Food</a>
            <a href="#sports">Sports</a>
            <a href="#review">Review</a>
            <a href="#contact">contact</a>
            <a href="#team">Our Team</a>
        </div>

        <div class="credit">created by <span>KELOMPOK 6</span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
