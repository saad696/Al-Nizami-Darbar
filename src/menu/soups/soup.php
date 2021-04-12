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
                    Soups
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
                    <li>Restaurant will remain open from morning 11 am  to mid- night 1 am.</li>
                    <li>The management reserve right to change the menu & price without giving any prior notice.</li>
                    <li>Govt. Taxes are applicable as per rule.</li>
                    <li>Outside Eatables are strictly prohibited </li>
                    <li>Please take care of your belongings.</li>
                    <li>Please allow 20 to 30 minutes to serve.</li>
                    <li>Alcohol is not allowed.</li>
                    <li>Double Filtered Vegetable oil used in all cooking process.</li>
                    <li>Reservation & Booking Solicited.</li>
                    <li>Ask for Private Parties & Functions. </li>
                    </ol><hr>
                    <div class="has-text-centered">
                    <p class="has-text-weight-semibold">We are waiting for your</p>
                    <p class="has-text-weight-semibold">Next Valuable Visit</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <section class="menu-1 px-4 py-6" id="indian-soups">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-2-mobile">Indian Soups</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="ivs">
            <div class="column is-size-5-desktop  d-none d-lg-block">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/indian-soup-1.jpg" class="img-fluid img-border" style="height: 350px; width: 100%"/>
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Vegetarian Indian Soups</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Indian Soups Veg)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">TOMATO SHORBA</td>
                                        <td class="has-text-weight-bold is-uppercase">165</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">TOMATO DHANIYA SHORBA</td>
                                        <td class="has-text-weight-bold is-uppercase">165</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">DAL SHORBA</td>
                                        <td class="has-text-weight-bold is-uppercase">165</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">CREAM OF VEG / MUSHROOM SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">165</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">CREAM OF TOMATO / PALAK SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">165</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">CREAM OF ALMONDS SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">180</td>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Indian Soups Non Veg)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">CREAM OF CHICKEN SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">195</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG SHORBA </td>
                                        <td class="has-text-weight-bold is-uppercase">195</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG YAKHNI SHORBA <p class="is-size-7 has-text-grey">( A traditional kashmiri style soup cooked with chicken and very mildly spiced with whole spices )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">195</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">PAYA SHORBA</td>
                                        <td class="has-text-weight-bold is-uppercase">240</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">TRADITIONAL MUTTON ARABIC SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">280</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">GOSHT AAB E HAYAT SHORBA <p class="is-size-7 has-text-grey">( Lamb matters immersed in a delicious shorba gravy spiced with freshly pounded black peppers )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">310</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">TABAK MASH <p class="is-size-7 has-text-grey">( 6 pcs. boneless mutton, medium spicy soup )</p></td>
                                        <td class="has-text-weight-bold is-uppercase">550</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-right" data-aos-delay="300">
                    <img src="../../../images/menu/indian-soup-2.jpg" class="img-fluid" style="height: 350px; width: 100%"/>
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Non Vegetarian Inidan Soups</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------------------------------------------------------- -->
    <section class="menu-2 px-4 py-6 has-background-light" id="cs">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-2-mobile">Chinese Soups</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/chinese-soup.jpg" class="img-fluid" style="height: 350px; width: 100%"/>
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Chinese Soups</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Indian Soups Veg)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">MANCHOW SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">160 / 210</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">HOT & SOUR SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">160 / 210</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">SWEET CORN SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">160 / 210</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">TOM YUM SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">160 / 210</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">WONTON SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">160 / 210</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">TOM KHA SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">175 / 225</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">TALUMEIN SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">170 / 220</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">LEMON CORIANDER SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">160 / 210</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">BURNT GARLIC SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">160 / 210</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">LUNG FUNG SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">220</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">SEA FOOD SOUP</td>
                                        <td class="has-text-weight-bold is-uppercase">275</td>
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