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
                    Refreshments
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
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-4-mobile">Brevrages</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="brv">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/r1.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Brevrages</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Brevrages</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">MINERAL WATER
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">65</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">SOFT DRINKS
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">70</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">DIET COKE / PEPSI
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">80</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">FRESH LIME WATER / SODA</td>
                                        <td class="has-text-weight-bold is-uppercase">75 / 100</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">CHAAS ( PLAIN / MASALA )</td>
                                        <td class="has-text-weight-bold is-uppercase">80 / 95</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">LASSI ( SALTED / SWEET )</td>
                                        <td class="has-text-weight-bold is-uppercase">150</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">RED BULL</td>
                                        <td class="has-text-weight-bold is-uppercase">195</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">ICE TEA ( PEACH / LEMON )</td>
                                        <td class="has-text-weight-bold is-uppercase">150</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">COLD COFFEE WITH ICE CREAM</td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-1 px-4 py-6 has-background-light">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-2-mobile">mocktail</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="moc">
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Mocktail</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">FRUIT PUNCH
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">PERU PYALA
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">MANGO MASTANI
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">VIRGIN MOJITO
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">VIRGIN PINACOLADA
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">DEEP BLUE SEA
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">180</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">WATER MELON COOLER
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">180</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">GOLDEN QUEEN
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">CHOICE OF SPL. ICE CREAM
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">PINK PANTHER
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/r2.webp" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Mocktail</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns is-mobile is-multiline mt-6">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/r3.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Mocktail</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Mocktail</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">MORNING GLORY
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td class="has-text-weight-bold is-uppercase">ORANGE BLOSSAM
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td class="has-text-weight-bold is-uppercase">CHOCOLATE MARTINI
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td class="has-text-weight-bold is-uppercase">VIRGIN MOJITO
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td class="has-text-weight-bold is-uppercase">RUSSIAN SUMMER
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td class="has-text-weight-bold is-uppercase">BLACKBERRY MINT MOSCOW
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td class="has-text-weight-bold is-uppercase">VIRGIN KICK
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">350</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18</th>
                                        <td class="has-text-weight-bold is-uppercase">FROZEN MARGARITA ( strawberry / blackberry / litchi / orange / kiwi )
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">250</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td class="has-text-weight-bold is-uppercase">MINT STORM
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">20</th>
                                        <td class="has-text-weight-bold is-uppercase">AL NIZAMI SPL. MOCKTAIL
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">250</td>
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
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-4-mobile">milk shakes</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="ms">
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">milk shakes</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">VANILLA MILK SHAKES
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">180</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">STRAWBERRY MILK SHAKES
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">180</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">CHOCOLATE MILK SHAKES
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">180</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">MANGO MILK SHAKES</td>
                                        <td class="has-text-weight-bold is-uppercase">180</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">KESAR PISTA MILK SHAKES</td>
                                        <td class="has-text-weight-bold is-uppercase">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">DRY FRUIT MILK SHAKES</td>
                                        <td class="has-text-weight-bold is-uppercase">220</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">FERRERO ROCHER MILK SHAKES</td>
                                        <td class="has-text-weight-bold is-uppercase">250</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">OREO MILK SHAKES</td>
                                        <td class="has-text-weight-bold is-uppercase">190</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/r4.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">milk shakes</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-1 px-4 py-6">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-4-mobile">faloodas</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="fl">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/r5.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">faloodas</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">faloodas</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">KESAR FALOODA
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">160</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">STRAWBERRY FALOODA
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">160</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">ROSE FALOODA
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">160</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">SAWARIYA FALOODA</td>
                                        <td class="has-text-weight-bold is-uppercase">190</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">KULFI FALOODA</td>
                                        <td class="has-text-weight-bold is-uppercase">170</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">MANGO FALOODA</td>
                                        <td class="has-text-weight-bold is-uppercase">170</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">AL NIZAMI SPECIAL FALOODA</td>
                                        <td class="has-text-weight-bold is-uppercase">240</td>
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