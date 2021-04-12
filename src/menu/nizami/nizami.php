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
                    nizami
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
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-4-mobile">Shan-e-nizami darbar</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="snd">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/n1.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">Shan-e-nizami darbar</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (Shan-e-nizami darbar)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">TANDOORI RAAN PESHAWARL <p class="is-size-7 has-text-grey">( leg of a lamb cooked in the tandoor with curd, <br> fried onion paste, authentic ground spices )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">1870</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">TANDOORI RAAN SIKANDAR <p class="is-size-7 has-text-grey">( leg of lamb cooked in tandoor with delicious chef spl. <br> spicy masala, has the touch of royalty )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">1870</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">TANDOORI RAAN IRANI <p class="is-size-7 has-text-grey"> (lamb roasted in clay oven with curd, cream, white pepper, <br> black pepper & chef spl. spices )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">1870</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">AL NIZAMI RAAN TANDOORI</td>
                                        <td class="has-text-weight-bold is-uppercase">1980</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">RAAN TANDOORI MASALA</td>
                                        <td class="has-text-weight-bold is-uppercase">2035</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">RAAN JALANDHARI MASALA </td>
                                        <td class="has-text-weight-bold is-uppercase">2035</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">RAAN ZAFRANI BIRYANI </td>
                                        <td class="has-text-weight-bold is-uppercase">2110</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td class="has-text-weight-bold is-uppercase">RAAN AL NIZAMI BIRYANI</td>
                                        <td class="has-text-weight-bold is-uppercase">2150</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td class="has-text-weight-bold is-uppercase">RAAN CHILLY KABSA RICE </td>
                                        <td class="has-text-weight-bold is-uppercase">2150</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG KABSA RICE (H/F) </td>
                                        <td class="has-text-weight-bold is-uppercase"> 640 / 1155</td>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (shan-e-nizami darbar)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG TANDOORI CHILLY KABSA RICE (H/F)</td>
                                        <td class="has-text-weight-bold is-uppercase">705 / 1230</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td class="has-text-weight-bold is-uppercase">GOSHT CHILLY KABSA RICE (H/F)</td>
                                        <td class="has-text-weight-bold is-uppercase">790 / 1450</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td class="has-text-weight-bold is-uppercase">GOSHT BOTI KABSA RICE (H/F)</td>
                                        <td class="has-text-weight-bold is-uppercase">870 / 1530</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td class="has-text-weight-bold is-uppercase">MUTTON MANDIRICE(H/F)
                                            <p class="is-size-7 has-text-grey">(chef sp!. mutton boti with mandi rice ) <br></p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase"> 870 / 1530</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td class="has-text-weight-bold is-uppercase">AL NIZAMI SPL. KABSA RICE (CHI. / MTN.)
                                            <p class="is-size-7 has-text-grey">( Chicken - 8 pcs chi. in arabic preparation, 3 pcs. chi. tikka,<br> kabsa rice with chef made tomato sauce )</p>
                                            <p class="is-size-7 has-text-grey">( Mutton - 6 pcs. mutton in arabic preparation, 3 pcs. chi. tikka,<br> kabsa rice with chef made tomato sauce )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">1320 / 1650</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG SAUDI KABSA (H/F)
                                            <p class="is-size-7 has-text-grey">( mandi rice, kabsa rice, with chef spl. tandoori chi. )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">725 / 1320</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG MANDI RICE (H/F)
                                            <p class="is-size-7 has-text-grey">(chef spl. tandoori chi. with mandi rice )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">660 / 1210</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/n2.webp" class="img-fluid" style="height: 350px; width: 100%" />
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
    </section>

    <section class="menu-1 px-4 py-6 has-background-light">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-3-mobile">Arabic special</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="as">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/n3.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">arabic special</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (arabic special)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">HUMMUS WITH PITA BREAD<p class="is-size-7 has-text-grey">( ground cooked chickpeas mixed with garlic, lemon juice, olive oil, & ground sesame )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">305</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">HUMMUS WITH PITA BREAD (CHI. / MIN.)
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">375 / 440</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">FALAFEL
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">360</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">FATTOUSH SALAD<p class="is-size-7 has-text-grey">(chilled mixed salad tossed with small cubes of toasted bread )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">235</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">mutabal<p class="is-size-7 has-text-grey">(roasted eggplant paste with ground sesame dip )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">245</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td class="has-text-weight-bold is-uppercase">BABA GANOUSH<p class="is-size-7 has-text-grey">( roasted eggplant mix with olive oil, fresh olives, onion, bell peppers. )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">245</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td class="has-text-weight-bold is-uppercase">TABBOULEH SALAD<p class="is-size-7 has-text-grey">( puffed rice & chopped tomato, coriander leaves mixed with tabbouleh sauce & olive oil. )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">245</td>
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
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-3-mobile">malamal thaal</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="mt">
            <div class="column is-7-desktop">
                <div class="card">
                    <div class="card-body has-background-warning-light">
                        <div class="card-text">
                            <table class="table has-background-warning-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">#</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (malamal thaal)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="spc3">
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">VEG THAAL
                                            <p class="is-size-7 has-text-grey">( 4 pcs paneer tikka, veg manchurian , 4 pcs veg. hara bhara kebab, 2 veg fried rice, veg kadai, veg hot garlic, 4 bread.4 pcs gulab jamun )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">2420</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG CHINESE THAAL
                                            <p class="is-size-7 has-text-grey">( chi. fried rice, chi. hakka noodles, chi. crispy, chi. thai basil, chi. lollypop, chi.oyster chilly, honey noodles with ice cream )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">2970</td>
                                    </tr>
                                    <tr class="has-background-warning">
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">AL NIZAMI SPECIAL THAAL
                                            <p class="is-size-7 has-text-grey">( 1 raan, kebsa rice, 4 pcs chaap, 4 pcs. mutton seekh kebab, 6 pcs chi. tikka, 1 chi. gravy, 1 mutton gravy, 4 pcs bread, 2 sizzling brownie )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">5280</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">ARABIC SPECIAL THAA
                                            <p class="is-size-7 has-text-grey">( 1 raan, mandi rice, 4 pcs mutton irani boti, 4 pcs mutton shish kebab, 1 chi. Gravy, 1 mutton gravy, 4 pcs arabic chi. Tikka, 4 pcs caramel custard )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">5280</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/n4.jpg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">malamal thaal</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-1 px-4 py-6 has-background-light">
        <div class="t has-text-centered mb-6">
            <p class="has-text-weight-bold is-uppercase is-size-1-desktop is-size-3-mobile">tawa special</p>
        </div>
        <hr>
        <div class="columns is-mobile is-multiline" id="ts">
            <div class="column is-size-5-desktop  d-none d-lg-block my-auto">
                <div class="bg-image" data-aos="flip-left" data-aos-delay="300">
                    <img src="../../../images/menu/n5.jpeg" class="img-fluid img-border" style="height: 350px; width: 100%" />
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-white mb-0">
                            <h5 class="card-title has-text-weight-bold is-uppercase has-text-centered is-size-3-desktop is-size-5-mobile">tawa special</h5>
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
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Dish (tawa special)</th>
                                        <th scope="col" class="has-text-weight-bold is-uppercase has-text-grey-light">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="has-text-weight-bold is-uppercase">POMFRET TAWA FRY
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">a.p.s</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="has-text-weight-bold is-uppercase">SURMAI TAWA FRY (SLICE)
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">a.p.s</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="has-text-weight-bold is-uppercase">RAWAS TAWA FRY
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">715</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="has-text-weight-bold is-uppercase">MURG CHAPLI KEBAB
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">500</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="has-text-weight-bold is-uppercase">MUTTON CHAPLI KEBAB
                                            <p class="is-size-7 has-text-grey">( shallow fried minced lamb meat studded with authentic ground spices, ginger & garlic paste )</p>
                                        </td>
                                        <td class="has-text-weight-bold is-uppercase">715</td>
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