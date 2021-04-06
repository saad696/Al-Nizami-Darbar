<?php include 'form.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <!-- bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <!-- contact us css -->
    <link rel="stylesheet" href="./contact.css">
    <!-- navbar css -->
    <link rel="stylesheet" href="../../src/navbar/navbar.css">
    <!-- footer css -->
    <link rel="stylesheet" href="../../src/footer/footer.css">
    <!-- ion icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- aos css -->
    <link rel="stylesheet" href="../../node_modules/aos/dist/aos.css">
    <title>Contact us</title>
</head>

<body>
    <?php $page = "about";
    include("../../src/navbar/navbar.php")
    ?>
    <section class="aboutus-landing">
        <div class="bg-image">
            <div class="image-section">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                    <div class="image-section_text has-text-centered">
                        <div class="is-size-1-desktop is-size-2-mobile os has-text-white">
                            Contact us
                        </div>
                    </div>
                    <div class="msg">
                        <p class="is-size-1-desktop is-size-3-mobile has-text-weight-semibold has-text-white">Send us a message</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form mt-6">
        <div class="columns is-mobile is-multiline px-6 py-6">
            <div class="column is-6-desktop contact-bg has-text-centered py-6" style="background-image: url(../../images/og-bg-2.png);">
                <span data-tilt>
                    <img src="../../images/og-logo.png" alt="" class="pt-6 js-tilt">
                </span>
            </div>
            <div class="column is-6-desktop has-background-warning-light" data-aos="zoom-out-left" data-aos-offset="300">

                <div class="is-size-3-desktop is-size-4-mobile os has-text-centered">
                    Have a question for us
                </div>

                <div class="has-text-centered mb-3">
                    <p class="is-size-2-desktop is-size-3-mobile has-text-weight-normal has-text-grey">Message us today</p>
                </div><span class="divider"></span>

                <?php
                echo $alert;
                ?>

                <form class="mt-4" id="myForm" action="" method="POST">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="name" class="form-control" name="name" />
                        <label class="form-label" for="name">Name</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control" name="email" />
                        <label class="form-label" for="email">Email address</label>
                    </div>

                    <!-- Subject input -->
                    <!-- <div class="form-outline mb-4">
                        <input type="text" id="subject" class="form-control" name="subject" />
                        <label class="form-label" for="subject">Subject</label>
                    </div> -->

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="msg" rows="4" name="msg"></textarea>
                        <label class="form-label" for="message">Message</label>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-warning btn-block mb-4" name="send">submit</button>
                </form>
            </div>
        </div>
    </section>

    <section class="map has-text-centered mt-6">
        <p class="is-size-1-desktop is-size-3-mobile mb-3 why c" data-aos="fade-down" data-aos-offset="100">Our location</p>
        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=al%20nizami%20darbar%20mumbai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </section>

    <section class="mt-6 py-6 px-6 has-background-warning-light">
        <div class="other-details">
            <div class="has-text-centered mt-6 ">
                <p class="has-text-weight-semibold is-size-5 has-text-grey pb-4 c">Contact details: </p>
            </div>
            <div class="columns is-mobile is-multiline">
                <div class="column is-12-mobile">
                    <div class="d-flex justify-content-center mpe" data-aos="fade-down-right">
                        <i class="fas fa-map has-text-warning fa-2x my-auto"></i>
                        <a href="https://www.google.com/maps/place/Al+Nizami+Darbar/@19.1098817,72.8755438,15z/data=!4m2!3m1!1s0x0:0xc1192273cb239426?sa=X&ved=2ahUKEwicgKfD3-nvAhVIzTgGHZbKC88Q_BIwF3oECCAQBQ" class="has-text-weight-semibold is-size-6 add ml-3 has-text-left">Shop no.1, Noori Baug, Marol Airport road Metro station, opposite Leela Hotel, Andheri East, Mumbai, Maharashtra 400059</a>
                    </div>
                </div>
                <div class="column my-auto is-12-mobile">
                    <div class="d-flex justify-content-center mpe" data-aos="fade-down">
                        <i class="fas fa-phone has-text-warning fa-2x"></i>
                        <p class="has-text-weight-semibold is-size-6 add ml-3 has-text-left"><a href="tel:7045720000" class="pno">7045720000</a> / <a href="tel:7045730000" class="pno">7045730000</a></p>
                    </div>
                </div>
                <div class="column my-auto is-12-mobile">
                    <div class="d-flex justify-content-center" data-aos="fade-down-left">
                        <i class="fas fa-envelope has-text-warning fa-2x"></i>
                        <a href="mailTo:contact@alnizamidarbar.com" class="has-text-weight-semibold is-size-6 add ml-3 has-text-left pt-1">contact@alnizamidarbar.com</a>
                    </div>
                </div>
            </div>
            <div class="columns mt-6 pb-0">
                <div class="column mb-0 pb-0">
                    <div class="has-text-centered">
                        <p class="has-text-weight-semibold is-size-5 has-text-grey pb-4 c">Connect us on: </p>
                    </div>
                    <ul class="social d-flex justify-content-center" data-aos="fade-up">
                        <li>
                            <a class="ease-all" href="#!"><i class="fab fa-facebook-f fa-2x"></i><span class="hide-text">Facebook</span></a>
                        </li>
                        <li>
                            <a class="ease-all" href="#!"><i class="fab fa-twitter fa-2x"></i><span class="hide-text">Twitter</span></a>
                        </li>
                        <li>
                            <a class="ease-all" href="#!"><i class="fab fa-instagram fa-2x"></i><span class="hide-text">Instagram</span></a>
                        </li>
                        <li>
                            <a class="ease-all" href="#!"><i class="fab fa-youtube fa-2x"></i><span class="hide-text">youtube</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include("../../src/footer/footer.php") ?>

    <!-- partical js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- tilt js -->
    <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
    <!-- aos js -->
    <script src="../../node_modules/aos/dist/aos.js"></script>
    <script>
        $('.js-tilt').tilt({
            glare: true,
            maxGlare: .5
        });

        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>