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
  <link rel="stylesheet" href="./dist/css/styles.css">
  <!-- navbar css -->
  <link rel="stylesheet" href="./src/navbar/navbar.css">
  <!-- footer css -->
  <link rel="stylesheet" href="./src/footer/footer.css">
  <!-- ion icons -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <!-- aos css -->
  <link rel="stylesheet" href="./node_modules/aos/dist/aos.css">
  <!-- app.js -->
  <script src="./app.js" defer></script>
  <title>Al-Nizami Darbar</title>
</head>

<body>
  <?php  $page = "home"; include("./src/navbar/navbar.php") ?>


  <section>

    <div class="img-sec" style="background-image: url('./images/og-bg.png');">
      <!-- <figure class="image is-128x128 logo">
          <img class="py-5 ml-5 logo-img" src="./images/logo.png" alt="Al-Nizam Darbar">
        </figure> -->
      <div class="d-flex justify-content-center logo-container">
        <figure class="image is-256x256">
          <img class="animate__animated animate__fadeInDownBig animate__slow animate__delay-2s" src="./images/og-logo.png">
        </figure>
      </div>
      <!-- <div class="full-logo-img d-flex justify-content-center">
        <img class="full-logo animate__animated animate__fadeInDownBig animate__slow animate__slow animate__delay-1s" src="./images/nizami-text.png">
      </div> -->
      <div class="d-flex justify-content-center">
        <img class="animate__animated animate__fadeInDownBig animate__slow" src="./images/royalBorder.png">
      </div>
      <!-- <div class="small-intro mx-auto mt-3 has-text-centered">
        </div>
        <p class="has-text-weight-semibold is-size-6 is-uppercase">
          opening hours
        </p>
        <p><span class="has-text-weight-semibold is-size-7">Monday - Friday:</span> <span class="is-size-7">10:00 AM - 23:00 PM</span></p>
        <p><span class="has-text-weight-semibold is-size-7">Weekends:</span> <span class="is-size-7">09:00 AM - 01:00 AM</span></p>
      </div> -->
    </div>
  </section>
  <section class="our-story py-6">
    <div class="columns is-mobile is-multiline">
      <div class="column is-3-desktop is-12-mobile our-story_food-1" data-aos="zoom-in-right">
        <figure class="image is-256x256">
          <img src="./images/food-1.png" alt="">
        </figure>
        <figure class="image is-256x256 our-story_food-2 ml-2" data-aos="zoom-in-right">
          <img src="./images/food-2.png" alt="">
        </figure>
      </div>
      <div class="column is-6-desktop is-12-mobile has-text-centered">
        <div class="our-story-text" style="background-image: url('./images/our-story-frame.png');">
          <div class="story-text has-text-centered">
            <p class="story-text_title has-text-weight-semibold is-size-3-desktop is-size-5-mobile mb-5">
              Our Story
            </p>
            <figure class="image is-256x256">
              <img src="./images/nizami-text.png" alt="">
              <img class="rb" src="./images/royalBorder.png">
            </figure>
            <p class="mt-4" style="padding-bottom: 2rem">
              NIZAM, which in Arabic means an order or arrangement, was the title bestowed upon the ruler of Hyderabad.
              The NIZAMS of Hyderabad were of Turkish and Hadrahmi Arab descent.
              DARBAR, an audience hall, was the majestic court of a native prince that originated in Persia. Later it was used as a title to honour the princely court of rulers in India.
            </p>
          </div>
        </div>
      </div>
      <div class="column is-3-desktop is-12-mobile">
        <figure class="image is-256x256 our-story_food-3" data-aos="zoom-in-left">
          <img src="./images/food-3.png" alt="">
        </figure>

        <figure class="image is-256x256 our-story_food-4" data-aos="zoom-in-left">
          <img src="./images/food-4.png" alt="">
        </figure>
      </div>
    </div>
  </section>
  <section>
    <div class="bg-image">
      <div class="image-section" style="background-image: url('./images/bg-5.jpeg');">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="image-section_text has-text-centered">
            <div class="is-size-1-desktop is-size-3-mobile"> <span id="typed"></span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="my-6">
    <div class="columns is-mobile is-multiline">
      <div class="column is-12-mobile py-6 has-text-dark has-text-centered">
        <div class="pb-6" data-aos="fade-right">
          <p class="has-text-weight-bold is-size-1-desktop is-size-3-mobile" style="font-family: 'Dancing Script', cursive;">Our Four Authentic Flavours</p>
        </div>
        <div class="container px-6">

          <div class="item" data-aos="flip-right">
            <img src="./images/nizami-food.png" />
            <i>Nizami</i>
          </div>

          <div class="item" data-aos="flip-right">
            <img src="./images/mughalai-food.jpg" />
            <i>Mughalai</i>
          </div>
        </div>
        <div class="container px-6">
          <div class="item" data-aos="flip-right">
            <img src="./images/inidan-food.jpg" />
            <i>Indian</i>
          </div>

          <div class="item" data-aos="flip-right">
            <img src="./images/chinese-food.jpg" />
            <i>Chinese</i>
          </div>
        </div>
      </div>
      <div class="column is-12-mobile py-6 has-text-dark has-text-centered">
        <div class="pb-6" data-aos="fade-left">
          <p class="has-text-weight-bold is-size-1-desktop is-size-2-mobile" style="font-family: 'Dancing Script', cursive;">Our Specialities</p>
        </div>
        <div class="special-1 pl-3" data-aos="fade-left">
          <div class="columns">
            <div class="column is-3">
              <figure class="image is-128x128">
                <img class="is-rounded shadow-2-strong" src="./images/sp-item-1.jpg">
              </figure>
            </div>
            <div class="column ml-4">
              <div class="has-text-left pb-6">
                <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold is-uppercase sp-dish-head">Nizami Daawat ( 24 pcs )</p>
                <p class="is-size-6-desktop is-size-7-mobile has-text-weight-semibold has-text-grey">( 4 pcs. Rawas, 4 pcs. Prawns, 4 pcs. Mutton Seekh, 4 pcs. Chi. Tikka, 4 pcs. chi. Pahadi Kebab, 4 pcs Chi. Reshmi Kebab )</p>
                <span class="is-size-7 has-text-weight-semibold has-text-grey"><span class="has-text-dark">Category:</span> <span>Starter</span></span><br>
                <a href="#!" class="btn v-btn btn-sm">View in menu</a>
              </div>
            </div>
          </div>
        </div>

        <div class="special-2 pl-3" data-aos="fade-left">
          <div class="columns">
            <div class="column is-3">
              <figure class="image is-128x128">
                <img class="is-rounded shadow-2-strong" src="./images/sp-item-2.jpg">
              </figure>
            </div>
            <div class="column ml-4">
              <div class="has-text-left pb-6">
                <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold is-uppercase sp-dish-head">Al Nizami Special Biryani</p>
                <p class="is-size-6-desktop is-size-7-mobile has-text-weight-semibold has-text-grey">( full chi. tandoori biryani garnished with. 6 pcs Chi. Chapli, 6 pcs. Chi. Seekh Kebab served with Veg Raita )</p>
                <span class="is-size-7 has-text-weight-semibold has-text-grey"><span class="has-text-dark">Category:</span> <span>Main Course</span></span><br>
                <a href="#!" class="btn v-btn is-inverted is-small">View in menu</a>
              </div>
            </div>
          </div>
        </div>

        <div class="special-3 pl-3" data-aos="fade-left">
          <div class="columns">
            <div class="column is-3">
              <figure class="image is-128x128">
                <img class="is-rounded shadow-2-strong" src="./images/sp-item-3.jpg">
              </figure>
            </div>
            <div class="column ml-4">
              <div class="has-text-left">
                <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold is-uppercase sp-dish-head">Nizami Daawat ( 24 pcs )</p>
                <p class="is-size-6-desktop is-size-7-mobile has-text-weight-semibold has-text-grey">( 4 pcs. Rawas, 4 pcs. Prawns, 4pcs. Mutton Seekh, 4 pcs. Chi. Tikka, 4 pcs. chi. Pahadi Kebab, 4 pcs Chi. Reshmi Kebab )</p>
                <span class="is-size-7 has-text-weight-semibold has-text-grey"><span class="has-text-dark">Category:</span> <span>Thaali</span></span><br>
                <a href="#!" class="btn v-btn is-inverted is-small">View in menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="has-background-warning-light py-6 standard-sec">
  <canvas class="background"></canvas>
    <div class="has-text-centered"  data-aos="zoom-in-down">
      <p class="has-text-weight-bold is-size-1-desktop is-size-2-mobile" style="font-family: 'Dancing Script', cursive;">Our Standards</p>
    </div>
    <div class="columns is-mobile is-multiline mt-6">
      <div class="column is-4-desktop is-12-mobile ">
        <div class="standard-1 card card-bg px-4 py-4" style="background-image: url('./images/card-bg.jpg');" data-aos="flip-left" data-aos-offset="300">
          <p class="has-text-weight-semibold is-size-4-desktop is-size-4-mobile standard-title">Nizami Theme</p>
          <p class="has-text-weight-semibold is-size-6-desktop is-size-6-mobile py-3 has-text-dark">With our menu being centered around the casual Nizami dishes, we added several sumptuous, authentic vegetarian and non-vegetarian dishes from Arabia, India, Persia and Turkey.</p>
        </div>
      </div>
      <div class="column is-4-desktop is-12-mobile ">
        <div class="standard-1 card card-bg px-4 py-4" style="background-image: url('./images/card-bg.jpg');" data-aos="flip-up" data-aos-offset="300">
          <p class="has-text-weight-semibold is-size-4-desktop is-size-4-mobile standard-title">Royal Enviroment</p>
          <p class="has-text-weight-semibold is-size-6-desktop is-size-6-mobile py-3 has-text-dark">Sit back and luxuriate in the magnificent grandeur incorporated into its interiors. Revel in the majesty of the DARBAR as enjoyed by the people of a bygone era.</p>
        </div>
      </div>
      <div class="column is-4-desktop is-12-mobile ">
        <div class="standard-1 card card-bg px-4 py-4" style="background-image: url('./images/card-bg.jpg');" data-aos="flip-right" data-aos-offset="300">
          <p class="has-text-weight-semibold is-size-4-desktop is-size-4-mobile standard-title">Exquisite cuisine</p>
          <p class="has-text-weight-semibold is-size-6-desktop is-size-6-mobile py-3 has-text-dark">While the hospitality and the tastes of the NIZAMS has been kept intact, we have also added contemporary culinary experiences by adding several sumptuous, authentic vegetarian and non-vegetarian dishes from Arabia, Persia and Turkey.</p>
        </div>
      </div>
    </div>
  </section>
  
    <?php include("./src/footer/footer.php")?>

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
  <script src="./node_modules/aos/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>
</body>

</html>