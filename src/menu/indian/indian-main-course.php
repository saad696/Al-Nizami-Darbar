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
    <!-- main css -->
    <!-- <link rel="stylesheet" href="./dist/css/styles.css"> -->
    <!-- navbar css -->
    <link rel="stylesheet" href="../../../src/navbar/navbar.css">
    <!-- footer css -->
    <link rel="stylesheet" href="../../../src/footer/footer.css">
    <!-- ion icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- aos css -->
    <link rel="stylesheet" href="../../../node_modules/aos/dist/aos.css">
    <!-- menu scss -->
    <link rel="stylesheet" href="../../../dist/css/menu.css">
    <!-- app.js -->
    <script src="../../../app.js" defer></script>
    <!-- menu.js -->
    <script src="../menu.js" defer></script>
    <title>Al-Nizami Darbar</title>
</head>

<body>
    <?php $page = "is-v";
    include("../../../src/navbar/navbar.php") ?>

    <section class="head">
        <div class="img-sec" style="background-image: url('../../../images/og-bg-2.png');">
            <div class="d-flex justify-content-center logo-container">
                <figure class="image is-256x256">
                    <img class="animate__animated animate__fadeInDownBig animate__slow" src="../../../images/og-logo.png">
                </figure>
            </div>
            <div class="has-text-centered">
                <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-1-mobile sec-title">
                    Indian
                </p>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-center my-6">
        <button class="btn btn-warning" id="modal-btn">Please note</button>
    </div>

    <div class="columns is-centered">
        <div class="column is-half">
            <article class="message is-warning is-small animate__animated">
                <div class="message-header">
                    <p>Please Note</p>
                    <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body has-text-left has-text-weight-semibold">
                    <ol>
                        <li>Order once placed will not be cancelled.</li>
                        <li>Restaurant will remain open from morning 11 am to mid- night 1 am.</li>
                        <li>The management reserve right to change the menu & price without giving any prior notice.</li>
                        <li>Govt. Taxes are applicable as per rule.</li>
                        <li>Outside Eatables are strictly prohibited </li>
                        <li>Please take care of your belongings.</li>
                        <li>Please allow 20 to 30 minutes to serve.</li>
                        <li>Alcohol is not allowed.</li>
                        <li>Double Filtered Vegetable oil used in all cooking process.</li>
                        <li>Reservation & Booking Solicited.</li>
                        <li>Ask for Private Parties & Functions. </li>
                    </ol>
                    <hr>
                    <div class="has-text-centered">
                        <p class="has-text-weight-semibold">We are waiting for your</p>
                        <p class="has-text-weight-semibold">Next Valuable Visit</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <section class="menu-1 px-4 py-6">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-4-mobile">Indian Main Course
            <p class="is-size-4 mt-3">( Vegeterian )</p>
            </p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="imcv">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/indian-mc-1.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Veg. Indian Main Course</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Veg. Indian Main Course)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG MAKHANWALA</td>
                                        <td class="has-text-weight-bold is-uppercase">325</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG KADAI</td>
                                        <td class="has-text-weight-bold is-uppercase">325</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG SHAHI KORMA</td>
                                        <td class="has-text-weight-bold is-uppercase">350</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">CHANA PESHAWARI</td>
                                        <td class="has-text-weight-bold is-uppercase">290</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG AKBARI</td>
                                        <td class="has-text-weight-bold is-uppercase">350</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG HYDERABADI</td>
                                        <td class="has-text-weight-bold is-uppercase">325</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">DUM ALOO PUNJABI / KASHMIRI</td>
                                        <td class="has-text-weight-bold is-uppercase">325 / 350</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG TAWA</td>
                                        <td class="has-text-weight-bold is-uppercase">325</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG BHUNA</td>
                                        <td class="has-text-weight-bold is-uppercase">325</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG DIWANI HANDI</td>
                                        <td class="has-text-weight-bold is-uppercase">340</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG PATIYALA</td>
                                        <td class="has-text-weight-bold is-uppercase">350</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER BUTTER MASALA</td>
                                        <td class="has-text-weight-bold is-uppercase">390</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ------------------------------------------------------------------------------------------- -->

        <div class="columns is-mobile is-multiline mt-6" id="invs">
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Veg. Indian Main Course)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER TIKKA MASALA</td>
                                        <td class="has-text-weight-bold is-uppercase">430</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER BHURJI</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER KADAI</td>
                                        <td class="has-text-weight-bold is-uppercase">390</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER KHURCHAN</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER PALAK </td>
                                        <td class="has-text-weight-bold is-uppercase">390</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18</th>
                                        <td class="has-text-weight-bold is-uppercase">MUSHROOM & BABY CORN KADAI</td>
                                        <td class="has-text-weight-bold is-uppercase">370</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td class="has-text-weight-bold is-uppercase">NIZAMI SPL. VEG</td>
                                        <td class="has-text-weight-bold is-uppercase">450</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">20</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG NARGISI KOFTA</td>
                                        <td class="has-text-weight-bold is-uppercase">430</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">21</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG SHAAM SAVERA</td>
                                        <td class="has-text-weight-bold is-uppercase">430</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">22</th>
                                        <td class="has-text-weight-bold is-uppercase">DAL FRY / TADKA</td>
                                        <td class="has-text-weight-bold is-uppercase">240 / 260</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">23</th>
                                        <td class="has-text-weight-bold is-uppercase">DAL MAKHANI</td>
                                        <td class="has-text-weight-bold is-uppercase">310</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-right" data-aos-delay="300">
                    <img src="../../../images/menu/indian-mc-2.jpg" class="img-fluid" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Veg. Inidan Main Course</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-2 px-4 py-6 has-background-light" id="imcnv">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-4-mobile">Indian Main Course
            <p class="is-size-4 mt-3">( Non Vegeterian )</p>
            </p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/indian-mc-3.jpg" class="img-fluid" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Non Veg. Indian Main Course</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Non Veg. Indian Main Course)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG MATKA</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG LAHORI</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG LAZEEZ</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG KHURCHAN</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG KADAI</td>
                                        <td class="has-text-weight-bold is-uppercase">390</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">BUTTER CHICKEN</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG DO PYAZA</td>
                                        <td class="has-text-weight-bold is-uppercase">440</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG TIKKA MASALA</td>
                                        <td class="has-text-weight-bold is-uppercase">450</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG SAAGWALA</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG HANDI ( H / F )</td>
                                        <td class="has-text-weight-bold is-uppercase">525 / 950</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG MUSALLAM ( H / F )</td>
                                        <td class="has-text-weight-bold is-uppercase">650 / 1150</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG MUSALLAM ( H / F )</td>
                                        <td class="has-text-weight-bold is-uppercase">650 / 1150</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td class="has-text-weight-bold is-uppercase">surmai curry</td>
                                        <td class="has-text-weight-bold is-uppercase">a.p.s</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ------------------------------------------------------------------------ -->

        <div class="columns is-mobile is-multiline mt-6" id="invs">
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Non Veg. Indian Main Course)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td class="has-text-weight-bold is-uppercase">daal gosh</td>
                                        <td class="has-text-weight-bold is-uppercase">660</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td class="has-text-weight-bold is-uppercase">dabba gosh ( boneless )</td>
                                        <td class="has-text-weight-bold is-uppercase">690</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td class="has-text-weight-bold is-uppercase">Mutton rogan josh</td>
                                        <td class="has-text-weight-bold is-uppercase">660</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td class="has-text-weight-bold is-uppercase">mutton saagwala</td>
                                        <td class="has-text-weight-bold is-uppercase">660</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18</th>
                                        <td class="has-text-weight-bold is-uppercase">nalli nihari</td>
                                        <td class="has-text-weight-bold is-uppercase">685</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td class="has-text-weight-bold is-uppercase">mutton LUCKNOWI korma</td>
                                        <td class="has-text-weight-bold is-uppercase">660</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">20</th>
                                        <td class="has-text-weight-bold is-uppercase">bhuna gosht ( boneless )</td>
                                        <td class="has-text-weight-bold is-uppercase">715</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">21</th>
                                        <td class="has-text-weight-bold is-uppercase">mutton turkey boti masala ( boneless )</td>
                                        <td class="has-text-weight-bold is-uppercase">690</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">22</th>
                                        <td class="has-text-weight-bold is-uppercase">mutton afgani</td>
                                        <td class="has-text-weight-bold is-uppercase">660</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">23</th>
                                        <td class="has-text-weight-bold is-uppercase">mutton kheema masala</td>
                                        <td class="has-text-weight-bold is-uppercase">680</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">24</th>
                                        <td class="has-text-weight-bold is-uppercase">egg masala / curry</td>
                                        <td class="has-text-weight-bold is-uppercase">230</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">25</th>
                                        <td class="has-text-weight-bold is-uppercase">brain masala ( 2 pcs )</td>
                                        <td class="has-text-weight-bold is-uppercase">660</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">26</th>
                                        <td class="has-text-weight-bold is-uppercase">fish amritsari</td>
                                        <td class="has-text-weight-bold is-uppercase">760</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">27</th>
                                        <td class="has-text-weight-bold is-uppercase">pomfret gaon curry</td>
                                        <td class="has-text-weight-bold is-uppercase">a.p.s</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-right" data-aos-delay="300">
                    <img src="../../../images/menu/indian-mc-4.jpg" class="img-fluid" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Non Veg. Inidan Main Course</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("../../../src/footer/footer.php") ?>

    <!-- partical js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- tilt js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <!-- typed js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.js"></script>
    <!-- aos js -->
    <script src="../../../node_modules/aos/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>