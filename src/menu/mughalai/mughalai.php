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
                    Mughalai
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
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-3-mobile">Mughalai Starters
            <p class="is-size-4 mt-3">( Vegeterian )</p>
            </p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="msv">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/mg-1.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Veg. Mughalai Starters</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Veg. Mughalai Starters)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">HARA BHARA KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">320</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">CHEESE TUKDI</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">CORN CHEESE BALL</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">FINGER CHIPS</td>
                                        <td class="has-text-weight-bold is-uppercase">160</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">CHANA GARLIC KOLIWADA</td>
                                        <td class="has-text-weight-bold is-uppercase">210</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">AATISHI ALOO</td>
                                        <td class="has-text-weight-bold is-uppercase">270</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">BHARWAN ALOO</td>
                                        <td class="has-text-weight-bold is-uppercase">350</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER TIKKA</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER LASOONI TIKKA</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">ACHARI TIKKA MUSHROOM / PANEER</td>
                                        <td class="has-text-weight-bold is-uppercase">370 / 400</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ------------------------------------------------------------------------------------------- -->

        <div class="columns is-mobile is-multiline mt-6">
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Veg. Mughalai Starters)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER HILLTOP / MAKHMALI KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">475</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER JAFRANI TIKKA</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER AFGANI TIKKA</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td class="has-text-weight-bold is-uppercase">MUSHROOM TANDOORI</td>
                                        <td class="has-text-weight-bold is-uppercase">360</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td class="has-text-weight-bold is-uppercase">MUSHROOM MULTANI</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td class="has-text-weight-bold is-uppercase">BABY CORN TANDOORI</td>
                                        <td class="has-text-weight-bold is-uppercase">280</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG SEEKH KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">280</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18</th>
                                        <td class="has-text-weight-bold is-uppercase">MAHARANI SEEKH KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">320</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG ASSORTED KEBAB PLATTER ( 24 PCS ) <p class="is-size-7 has-text-grey">( 4 pcs. paneer, 4 pcs. mushroom, 4 pcs. baby corn, 4 pcs. baby aloo, 4 pcs. veg seekh kebab, 4 pcs. gobi )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">1010</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-right" data-aos-delay="300">
                    <img src="../../../images/menu/mg-2.jpg" class="img-fluid" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Veg. Mughalai starters</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-2 px-4 py-6 has-background-light">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-3-mobile">Mughalai starters
            <p class="is-size-4 mt-3">( Non Vegeterian )</p>
            </p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="msnv">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/mg-3.jpg" class="img-fluid" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Non Veg. Mughalai Starters</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Non Veg. Mughalai Starters)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG TIKKA</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG RESHMI KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG MALAI KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG KALIMIRI / BANJARA KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG SEEKH KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG GILAFI SEEKH KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG ANGARA KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG TANGDI KEBAB ( 2 PCS )</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG LOLLYPOP TANDOORI</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG TANDOORI ( HALF / FULL )</td>
                                        <td class="has-text-weight-bold is-uppercase">325 / 550</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">SPL. MURG TANDOORI ( HALF / FULL )<p class="is-size-7 has-text-grey"> ( AFGANI / ARABIC / NIZAMI )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">350 / 575</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns is-mobile is-multiline mt-6">
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Non Veg. Mughalai Starters)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG ROJALI KEBAB <p class="is-size-7 has-text-grey">( sliced chi. filled with minced mutton marinated in red masala cooked in tandoor )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">620</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG DILKHUSH KEBAB <p class="is-size-7 has-text-grey">( chi. stuffed with cheese & chef spl. spices cooked in tandoor )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">530</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG CHAKORI KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG LUCKNOWI SEEKH KEBAB <p class="is-size-7 has-text-grey">( minced chicken kebabs cooked in golden brown fried cashewnut paste , laced with cream and special spices, finished in clay oven )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG DUMKHAS TANGDI ( 4 PCS. )</td>
                                        <td class="has-text-weight-bold is-uppercase">600</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG SUNEHRI KEBAB <p class="is-size-7 has-text-grey">( sliced chi. filled with minced sea food, marinated with chef spl. yellow masala & served grilled )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">720</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG MOROCCAN KEBAB <p class="is-size-7 has-text-grey">( chicken cubes marinated in moroccan style blend with peppers & cheese )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">690</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG KEBAB PLATTER ( 24 PCS. ) <p class="is-size-7 has-text-grey">( 4 pcs. chi. tikka, 4 pcs chi. malai tikka, 4 pcs chi. pahadi tikka, 4 pcs. chi. reshmi tikka, 4 pcs chi. seekh kebab & half chi. tandoori )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">1600</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">20</th>
                                        <td class="has-text-weight-bold is-uppercase">MUTTON SEEKH KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-right" data-aos-delay="300">
                    <img src="../../../images/menu/mg-4.jpg" class="img-fluid" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Non Veg. Mughalai Starters</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns is-mobile is-multiline mt-6">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/mg-5.jpg" class="img-fluid" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Non Veg. Mughalai Starters</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Non Veg. Mughalai Starters)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">21</th>
                                        <td class="has-text-weight-bold is-uppercase">MUTTON PATHANI BOTI KEBAB <p class="is-size-7 has-text-grey">( a favourite of the nizams of hyderabad chunks pieces of lamb, marinated in special indian spices finished in clay oven )</td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">22</th>
                                        <td class="has-text-weight-bold is-uppercase">MUTTON TURKEY BOTI</td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">23</th>
                                        <td class="has-text-weight-bold is-uppercase">MUTTON IRANI KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">24</th>
                                        <td class="has-text-weight-bold is-uppercase">DORANG SEEKH KEBAB</td>
                                        <td class="has-text-weight-bold is-uppercase">680</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">25</th>
                                        <td class="has-text-weight-bold is-uppercase">MUTTON BARRA CHAAP <p class="is-size-7 has-text-grey">( lamb chaap marinated in yoghurt & cooked in golden brown fried cashewnut paste laced with cream& special spices finished in clay oven )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr id="spc1">
                                        <th scope="row">26</th>
                                        <td class="has-text-weight-bold is-uppercase">TANDOORI CHAAP <p class="is-size-7 has-text-grey">( PESHAWARI / LUCKNOWI )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">675</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">27</th>
                                        <td class="has-text-weight-bold is-uppercase">POMFRET TANDOORI</td>
                                        <td class="has-text-weight-bold is-uppercase">a.p.s</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">28</th>
                                        <td class="has-text-weight-bold is-uppercase">PRAWNS AFGHANI TIKKA <p class="is-size-7 has-text-grey">( king size prawns marinated in pounded black pepper adorned with white butter & served grilled )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">29</th>
                                        <td class="has-text-weight-bold is-uppercase">RAWAS JALANDHARI TIKKA</td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">30</th>
                                        <td class="has-text-weight-bold is-uppercase">FISH KOLIWADA</td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr class="has-background-warning">
                                        <th scope="row">31</th>
                                        <td class="has-text-weight-bold is-uppercase">NIZAMI DAWAT ( 24 PCS. )<p class="is-size-7 has-text-grey"> ( 4 pcs. rawas, 4 pcs. prawns, 4 pcs. mutton seekh, 4 pcs. chi. tikka, 4 pcs. chi. pahadi kebab., 4 pcs. chi. reshmi kebab )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">2050</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">32</th>
                                        <td class="has-text-weight-bold is-uppercase">SEA FOOD PLATTER<p class="is-size-7 has-text-grey">( 1 pomfret koliwada, 6 pcs. rawas pahadi tikka, 6 pcs. king prawns kalimiri tikka, 1 slice surmai tawa fry, 6 pcs. rawas banjara tikka )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">a.p.s</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-1 px-4 py-6">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-3-mobile">Basmati Zayeka</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="bz">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/mg-6.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">basmati Zayeka</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (basmati zayeka)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">steam rice</td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">jeera rice</td>
                                        <td class="has-text-weight-bold is-uppercase">225</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">dal khicdi</td>
                                        <td class="has-text-weight-bold is-uppercase">300</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">pulao veg / kashmiri</td>
                                        <td class="has-text-weight-bold is-uppercase">230 / 285</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">veg biryani / dum</td>
                                        <td class="has-text-weight-bold is-uppercase">255 / 275</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">chicken biryani / dum</td>
                                        <td class="has-text-weight-bold is-uppercase">395 / 415</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">mutton biryani / dum</td>
                                        <td class="has-text-weight-bold is-uppercase">470 / 495</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">hydrabadi biryani veg / chicken</td>
                                        <td class="has-text-weight-bold is-uppercase">275 / 415</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">hydrabadi biryani mutton / prawns</td>
                                        <td class="has-text-weight-bold is-uppercase">495 / 600</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">tikka birani paneer / chicken</td>
                                        <td class="has-text-weight-bold is-uppercase">495 / 530</td>
                                    </tr>
                                    <tr id="spc2">
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">pulao chicken / mutton</td>
                                        <td class="has-text-weight-bold is-uppercase">385 / 495</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td class="has-text-weight-bold is-uppercase">prawns biryani / dum</td>
                                        <td class="has-text-weight-bold is-uppercase">600 / 625</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td class="has-text-weight-bold is-uppercase">rawas biryani / dum</td>
                                        <td class="has-text-weight-bold is-uppercase">690 / 715</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td class="has-text-weight-bold is-uppercase">egg biryani / dum</td>
                                        <td class="has-text-weight-bold is-uppercase">275 / 300</td>
                                    </tr>
                                    <tr class="has-background-warning">
                                        <th scope="row">15</th>
                                        <td class="has-text-weight-bold is-uppercase">Al Nizami Special Biryani <p class="is-size-7 has-text-grey">( full chi. tandoori biryani garnished with. 6 pcs Chi. Chapli, <br> 6 pcs. Chi. Seekh Kebab served with Veg Raita )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">495 / 530</td>
                                    </tr>
                                </tbody>
                            </table>
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