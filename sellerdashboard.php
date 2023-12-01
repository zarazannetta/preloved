<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Seller page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=%3F%3F%3F%3F%3F%3A400"/>
  <link rel="stylesheet" href="./styles/seller-page.css"/>
</head>
<body>
<div class="seller-page-2Ho">
  <div class="auto-group-fjcv-NcZ">
    <div class="auto-group-lesm-Jm7">
      <div class="rectangle-1-2x1">
      </div>
      <div class="image-NW5">
        <div class="fddd76-633f-484d-989d-4dd6eea62c19-1-JPj">
        </div>
        <img class="abdae-7e34-4554-be0a-9276641ca711-1-ZaZ" src="./assets/abdae-7e34-4554-be0a-9276641ca711-1-6uF.png"/>
        <img class="f663-07b3-4aae-86eb-3514c9ba69d1-1-Tvq" src="./assets/f663-07b3-4aae-86eb-3514c9ba69d1-1-D4D.png"/>
        <img class="b142d4f-2fbb-4686-9c9d-100f49d4b211-1-NY1" src="./assets/b142d4f-2fbb-4686-9c9d-100f49d4b211-1-9td.png"/>
      </div>
      <div class="promo-sUm">
        <div class="auto-group-q27j-ma9">
          <img class="cd1b4668b6fbe35be348fc9db9723284-removebg-preview-1-uAZ" src="./assets/cd1b4668b6fbe35be348fc9db9723284-removebg-preview-1-Hi9.png"/>
        </div>
        <div class="auto-group-tnhp-cam">
          <p class="keranjang-baju-rp-15000-YjK">
          Keranjang baju
          <br/>
          Rp 15.000
          <br/>
          
          <br/>
          
          </p>
          <div class="rating-fJ9">
            <img class="vector-D4m" src="./assets/vector-hb7.png"/>
            <img class="vector-Ysj" src="./assets/vector-T69.png"/>
            <img class="vector-68Z" src="./assets/vector-kgR.png"/>
            <img class="vector-3Jh" src="./assets/vector-K53.png"/>
            <img class="vector-b5K" src="./assets/vector-VfP.png"/>
            <img class="vector-jSR" src="./assets/vector-Gh7.png"/>
          </div>
        </div>
        <img class="carbon-add-filled-t4R" src="./assets/carbon-add-filled-Piy.png"/>
      </div>
      <div class="promo-2-Cau">
        <div class="auto-group-cvmx-hnZ">
          <img class="f772fcd6c01098ea12a58189a4f62-removebg-preview-1-dw7" src="./assets/f772fcd6c01098ea12a58189a4f62-removebg-preview-1-hf7.png"/>
        </div>
        <div class="auto-group-tglh-Xmb">
          <p class="panci-listrik-rp-75000-dJq">
          Panci listrik
          <br/>
          Rp 75.000
          <br/>
          
          <br/>
          
          </p>
          <div class="rating-Xv1">
            <img class="vector-4f3" src="./assets/vector-4Fb.png"/>
            <img class="vector-QD7" src="./assets/vector-oEy.png"/>
            <img class="vector-YaD" src="./assets/vector-D8d.png"/>
            <img class="vector-hCD" src="./assets/vector-7WH.png"/>
            <img class="vector-e7T" src="./assets/vector-y85.png"/>
            <img class="vector-yfX" src="./assets/vector-cXK.png"/>
          </div>
        </div>
        <img class="carbon-add-filled-7mj" src="./assets/carbon-add-filled-SeV.png"/>
      </div>
      <div class="shop-now-2th">Shop Now</div>
      <div class="search-5ry">
        <p class="search-for-anything-and-everything-xvm">Search for anything and everything</p>
        <img class="gg-search-3xD" src="./assets/gg-search-nuX.png"/>
      </div>
      <div class="welcome-precious-people-krd">
      Welcome
      <br/>
      Precious
      <br/>
      People!
      </div>
      <p class="preloved-is-the-online-platform-where-you-can-buy-and-sell-preloved-items-with-ease-whether-you-are-looking-for-clothing-accessories-books-electronics-or-anything-else-you-can-find-it-here-at-a-fraction-of-the-original-price-TFF">Preloved is the online platform where you can buy and sell preloved items with ease. Whether you are looking for clothing, accessories, books, electronics, or anything else, you can find it here at a fraction of the original price.</p>
      <div class="header-s45">
        <a href="sellerdashboard.php" onclick="scrollToSection('landingseller')" class="home-zPb">Home</a>
        <a href="#" onclick="scrollToSection('products')" class="products-vHF">Products</a>
        <a href="index.php" class="preloved-3sf"> Preloved</a>
        <a href="profileseller.php"><img class="vector-zH7" src="./assets/vector-g2V.png"/></a>
        <a href="formsell.php" class="auto-group-ndv3-KKP">Sell</a>
      </div>
    </div>
    <section id="products" class="products-you-sell-mx5">
      <div class="products-you-sell-Wem">Products You Sell</div>
      <?php include("productsellerlist.php"); ?>
      <div class="auto-group-ihaz-CnV"></div>
      <div class="group-14-kfB">Show more</div>
    </section>
  </div>
  <div class="footer-ZMj">
    <div class="rectangle-38-VmB">
    </div>
    <div class="information-dMb">
      <p class="information-ZFF">Information</p>
      <p class="about-us-more-search-blog-testimonial-events-toK">
      About Us
      <br/>
      More Search
      <br/>
      Blog
      <br/>
      Testimonial
      <br/>
      Events
      </p>
    </div>
    <div class="frame-3-ovH">
      <p class="our-services-vzu">Our Services</p>
      <p class="order-categories-list-blog-577">
      Order
      <br/>
      Categories list
      <br/>
      Blog
      </p>
    </div>
    <div class="helpful-Q9P">
      <p class="helpful-links-jBf">Helpful Links</p>
      <p class="services-supports-terms-condition-privacy-policy-fb7">
      Services
      <br/>
      Supports
      <br/>
      Terms &amp; Condition
      <br/>
      Privacy Policy
      </p>
    </div>
    <div class="ac74c2533d3f3f736f9c5d7d44-2-NkR">
    </div>
    <div class="contact-us-exq">
      <p class="contact-us-Ntq">Contact Us</p>
      <div class="auto-group-ex6q-iho">
        <img class="lets-icons-phone-fill-3k5" src="./assets/lets-icons-phone-fill.png"/>
        <p class="item-62-823-3445-6789-MVs">+62 823 3445 6789</p>
      </div>
      <div class="auto-group-ktwh-sj7">
        <img class="material-symbols-mail-PxM" src="./assets/material-symbols-mail.png"/>
        <p class="prelovedgmailcom-uvh">preloved@gmail.com</p>
      </div>
      <div class="auto-group-qo4m-42u">
        <img class="vector-zhF" src="./assets/vector-5Kf.png"/>
        <img class="vector-XhB" src="./assets/vector-vXj.png"/>
        <img class="vector-g4H" src="./assets/vector-ghw.png"/>
        <img class="vector-289" src="./assets/vector-qmj.png"/>
      </div>
    </div>
    <p class="preloved-all-rights-reserved-mrR">© 2023 Preloved. All Rights Reserved.</p>
  </div>
</div>
</body>
<script>
    function scrollToSection(sectionId) {
        var section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>
</html>