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
                    Chinese
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
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-3-mobile">Chinese Starters
            <p class="is-size-4 mt-3">( Vegeterian )</p>
            </p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="csv">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/c1.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Veg. Chinese Starters</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Veg. Chinese Starters)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG MANCHURIAN</td>
                                        <td class="has-text-weight-bold is-uppercase">300</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG CRISPY</td>
                                        <td class="has-text-weight-bold is-uppercase">310</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">CRISPY POTATO HONEY CHILLY</td>
                                        <td class="has-text-weight-bold is-uppercase">300</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">CRISPY CORN CHILLY PEPPER</td>
                                        <td class="has-text-weight-bold is-uppercase">300</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG FRIED WONTON</td>
                                        <td class="has-text-weight-bold is-uppercase">310</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG SPRING ROLL / DRAGON ROLL</td>
                                        <td class="has-text-weight-bold is-uppercase">300</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER CHILLY</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER KUNG PAO / THAI BASIL</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">CRISPY THREAD PANEER</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">MUSHROOM MANGOLIAN</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">BABY CORN CHILLY RED PEPPER</td>
                                        <td class="has-text-weight-bold is-uppercase">280</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER CRISPY</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER OYSTER CHILLY</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER SATAY ( SCHEZWAN / BTR. PEANUT )</td>
                                        <td class="has-text-weight-bold is-uppercase">430</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-2 px-4 py-6 has-background-light">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-3-mobile">Chinese starters
            <p class="is-size-4 mt-3">( Non Vegeterian )</p>
            </p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="csnv">
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Non Veg. Chinese Starters)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">CHICKEN CHILLY / CRISPY</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">CRISPY THREAD CHICKEN</td>
                                        <td class="has-text-weight-bold is-uppercase">390</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">CHICKEN SATAY ( SCHEZWAN / BTR PEANUTS )</td>
                                        <td class="has-text-weight-bold is-uppercase">430</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">BURNT WOK CHICKEN</td>
                                        <td class="has-text-weight-bold is-uppercase">390</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">CHICKEN TERIYAKI / PATAYA</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">CHICKEN SPRING ROLL</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">CHICKEN LOLLYPOP</td>
                                        <td class="has-text-weight-bold is-uppercase">380</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">CHICKEN KUNG PAO / KOREAN CHILLY</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">CRISPY CHICKEN IN HONEY CHILLY</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">CHICKEN MANGOLIAN / THAI BASIL</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">LAMB HOT GARLIC
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">570</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/c2.cms" class="img-fluid" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Non Veg. Chinese Starters</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns is-mobile is-multiline mt-6">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-right" data-aos-delay="300">
                    <img src="../../../images/menu/c3.jpg" class="img-fluid" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Non Veg. Chinese Starters</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Non Veg. Chinese Starters)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td class="has-text-weight-bold is-uppercase">CRISPY LAMB IN SCHEZWAN
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">570</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td class="has-text-weight-bold is-uppercase">STIR FRY LAMB
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">590</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td class="has-text-weight-bold is-uppercase">ROAST LAMB CHILLY</td>
                                        <td class="has-text-weight-bold is-uppercase">590</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td class="has-text-weight-bold is-uppercase">WOK SET LAMB
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">590</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td class="has-text-weight-bold is-uppercase">PRAWNS IN BUTTER GARLIC</td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td class="has-text-weight-bold is-uppercase">PRWANS SALT & PEPPER
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18</th>
                                        <td class="has-text-weight-bold is-uppercase">FISH OYSTER CHILLY
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td class="has-text-weight-bold is-uppercase">POMFRET SHANGHAI ( BONELESS )
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">a.p.s</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">20</th>
                                        <td class="has-text-weight-bold is-uppercase">PAN GRILLED FISH CHILLY GARLIC</td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">21</th>
                                        <td class="has-text-weight-bold is-uppercase">GOLDEN FRIED PRAWNS</td>
                                        <td class="has-text-weight-bold is-uppercase">650</td>
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
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-4-mobile">Chinese main course
            <p class="is-size-4 mt-3">( Vegeterian )</p>
            </p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="cmcv">
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (veg. Chinese main course)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">ASSORTED VEG IN HUNAN SAUCE </td>
                                        <td class="has-text-weight-bold is-uppercase">325</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">ASSORTED VEG IN SWEET & SOUR SAUCE</td>
                                        <td class="has-text-weight-bold is-uppercase">325</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG BALLS IN HOT GARLIC</td>
                                        <td class="has-text-weight-bold is-uppercase">325</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">PANEER IN BLACK PAPER SAUCE</td>
                                        <td class="has-text-weight-bold is-uppercase">410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">MUSHROOM IN GREEN GARLIC SAUCE</td>
                                        <td class="has-text-weight-bold is-uppercase">390</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">THREE TREASURE VEG IN OYSTER CHILLY SAUCE</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG THAI CURRY WITH RICE [ RED / GREEN ]</td>
                                        <td class="has-text-weight-bold is-uppercase">450</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/c4.webp" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">veg. chinese main course</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-1 px-4 py-6 has-background-light">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-4-mobile">Chinese main course
            <p class="is-size-4 mt-3">( non Vegeterian )</p>
            </p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="cmcnv">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-right" data-aos-delay="300">
                    <img src="../../../images/menu/c5.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">veg. chinese main course</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (non veg. Chinese main course)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">HOT POT CHICKEN</td>
                                        <td class="has-text-weight-bold is-uppercase">425</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">CHICKEN GINGER SAUCE</td>
                                        <td class="has-text-weight-bold is-uppercase">425</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">CHICKEN IN PEPPER SAUCE</td>
                                        <td class="has-text-weight-bold is-uppercase">550</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">CHICKEN THAI CURRY WITH RICE [ RED / GREEN ]</td>
                                        <td class="has-text-weight-bold is-uppercase">530</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">LAMB IN HOT & SPICY SAUCE</td>
                                        <td class="has-text-weight-bold is-uppercase">610</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">FISH IN BARBEQUE SAUCE</td>
                                        <td class="has-text-weight-bold is-uppercase">675</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">PRAWNS PANANG CURRY</td>
                                        <td class="has-text-weight-bold is-uppercase">675</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">BONELESS POMFRET IN HOT GARLIC SAUCE</td>
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
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-3-mobile">Chinese rice</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="cr">
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Chinese rice)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">FRIED RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">250 / 300</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">SCHEZWAN FRIED RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">260 / 310
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">BURNT GARLIC FRIED RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">260 / 310</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">KOREAN FRIED RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">350 / 400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">TRIPPLE FRIED RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">360 / 410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">POT RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">350 / 400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">SINGAPORE FRIED RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">270 / 320</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">CHILLY GARLIC FRIED RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">270 / 320</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">SRILANKAN FRIED RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">350 / 400</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">PEAKING FRIED RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">280 / 330</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">FIVE SPICE RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">280 / 330</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td class="has-text-weight-bold is-uppercase">INDONESIAN FRIED RICE ( NASI GORENG )</td>
                                        <td class="has-text-weight-bold is-uppercase">290 / 340</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td class="has-text-weight-bold is-uppercase">FRIED RICE ( EGG / MUTTON /PRAWNS )</td>
                                        <td class="has-text-weight-bold is-uppercase">230 / 390 / 410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td class="has-text-weight-bold is-uppercase">MIXED FRIED RICE</td>
                                        <td class="has-text-weight-bold is-uppercase">400</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/c6.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">chinese rice</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-1 px-4 py-6 has-background-light">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-3-mobile">Chinese noodles</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="cn">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-right" data-aos-delay="300">
                    <img src="../../../images/menu/c7.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">chinese noodles</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Chinese noodles)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">HAKKA NOODLES</td>
                                        <td class="has-text-weight-bold is-uppercase">260 / 310</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">SCHEZWAN NOODLES</td>
                                        <td class="has-text-weight-bold is-uppercase">270 / 320
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">BURNT GARLIC NOODLES</td>
                                        <td class="has-text-weight-bold is-uppercase">270 / 320</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">CHILLY GARLIC NOODLES</td>
                                        <td class="has-text-weight-bold is-uppercase">270 / 320</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">SINGAPORE NOODLES</td>
                                        <td class="has-text-weight-bold is-uppercase">270 / 320</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">HONG KONG NOODLES</td>
                                        <td class="has-text-weight-bold is-uppercase">270 / 320</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">KOREAN NOODLES</td>
                                        <td class="has-text-weight-bold is-uppercase">370 / 420</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">CHINESE CHOPSUEY</td>
                                        <td class="has-text-weight-bold is-uppercase">350 / 390</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">AMERICAN CHOPSUEY</td>
                                        <td class="has-text-weight-bold is-uppercase">360 / 410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">PAN FRIED NOODLES [SAPO, BURNT CHILLY, GREEN GARLIC]</td>
                                        <td class="has-text-weight-bold is-uppercase">370 / 425</td>
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