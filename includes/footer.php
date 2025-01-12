<?php /*<section class="footer-layout1 mt-4 z-home-common" data-bg-src="assets/img/bg/footer-bg-1-1.png">
    <img class="footer-ele1" src="assets/img/footer/falling-leaves.png" alt="">
    <div class="widget-area">
      <div class="container">
        <div class="row gy-5">
          <div class="col-lg-4">
            <div class="widget footer-widget">
              <div class="vs-widget-about">
                <div class="footer-logo">
                  <a href="home"><img src="assets/img/logo.png" alt="Cannabo" class="logo"></a>
                </div>
                <p class="footer-text">Aliquet eget sit amet tellus cras adipiscing
                  enim eu turpis. Hac habitasse platea dictu
                  mst quisque.</p>
                <div class="footer-social pt-xl-4">
                  <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="widget footer-widget">
              <h3 class="widget_title">Contact Information</h3>
              <div class="footer-info">
                <div class="footer-info__icon">
                  <i>
                  <img src="assets/img/icons/footer-info-1-1.png" alt="footer info">
                </i>
                </div>
                <div class="media-body">
                  <div class="footer-info__link pe-xl-5">
                    <p>New Town Western King Street, 5th Avenue, New York</p>
                  </div>
                </div>
              </div>
              <div class="footer-info">
                <div class="footer-info__icon">
                  <i>
                  <img src="assets/img/icons/footer-info-1-2.png" alt="footer info">
                </i>
                </div>
                <div class="media-body">
                  <span class="footer-info__label">Phone No:</span>
                  <div class="footer-info__link">
                    <a href="tel:+1800-2355-2356">1800-2355-2356</a>
                  </div>
                </div>
              </div>
              <div class="footer-info">
                <div class="footer-info__icon">
                  <i>
                  <img src="assets/img/icons/footer-info-1-3.png" alt="footer info">
                </i>
                </div>
                <div class="media-body">
                  <span class="footer-info__label">Email Address:</span>
                  <div class="footer-info__link">
                    <a href="mailto:username@domain.com">username@domain.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="widget footer-widget">
              <h3 class="widget_title">Useful Links</h3>
              <div class="footer-menu--style">
                <ul>
                  <li><a href="about">Our Process</a></li>
                  <li><a href="home">Payments</a></li>
                  <li><a href="contact">Special Offers</a></li>
                  <li><a href="faq">Shipping</a></li>
                  <li><a href="blog">Regulations</a></li>
                  <li><a href="home-2">Product Returns</a></li>
                  <li><a href="contact">About Us</a></li>
                  <li><a href="project">FAQ</a></li>
                  <li><a href="services">Our Team</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright-wrap">
      <div class="container">
        <div class="row g-3 justify-content-center justify-content-xxl-between align-items-center">
          <div class="col-lg-auto">
            <p class="copyright-text text-center text-lg-start">Copyright © <a href="home">Cannabo 2024</a> . All
              rights reserved. <a href="https://themeforest.net/user/vecuro_themes">Vecuro</a></p>
          </div>
          <div class="col-lg-auto">
            <div class="footer-payment">
              <img src="assets/img/others/payment.png" alt="payment">
            </div>
          </div>
          <div class="col-lg-auto">
            <div class="widget widget_nav_menu footer-widget">
              <div class="menu-all-pages-container">
                <ul class="menu justify-content-center justify-content-lg-end ">
                  <li><a href="contact">Terms and Conditions</a></li>
                  <li><a href="contact">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section> */?>
<section class="footer-layout3">
    <div class="widget-area style3" data-bg-src="assets/img/bg/footer-bg-3-1.png">
      <img src="assets/img/leafs/footer-3-1.png" alt="footer leafs" class="footer-overlay">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="widget footer-widget">
              <div class="vs-widget-about">
                <div class="footer-logo">
                  <a href="home"><img src="<?=$lien_logo.$logo?>" alt="Cannabo" class="logo"></a>
                </div>
                <p class="footer-text style3"><?=$decription_entreprise?>
                 </p>
                <div class="footer-social style3">
                  <a href="<?=$lien_facebook?>"><i class="fab fa-facebook-f"></i></a>
                  <a href="<?=$lien_twitter?>"><i class="fab fa-twitter"></i></a>
                  <a href="<?=$instagram?>"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="widget footer-widget">
              <h3 class="widget_title style3">Information de contacts</h3>
              <div class="footer-info style3">
                <div class="footer-info__icon">
                  <i>
                                    <img src="assets/img/icons/footer-info-1-1.png" alt="footer info">
                                </i>
                </div>
                <div class="media-body">
                  <div class="footer-info__link">
                    <p><?= $region. " ".$quartier. " " .$ville ?> </p>
                  </div>
                </div>
              </div>
              <div class="footer-info style3">
                <div class="footer-info__icon">
                  <i>
                                    <img src="assets/img/icons/footer-info-1-2.png" alt="footer info">
                                </i>
                </div>
                <div class="media-body">
                  <span class="footer-info__label">Numéro de téléphone:</span>
                  <div class="footer-info__link">
                    <a href="tel:+1800-2355-2356"><?=$telephone?></a>
                  </div>
                </div>
              </div>
              <div class="footer-info style3">
                <div class="footer-info__icon">
                  <i>
                                    <img src="assets/img/icons/footer-info-1-3.png" alt="footer info">
                                </i>
                </div>
                <div class="media-body">
                  <span class="footer-info__label">Adresse email:</span>
                  <div class="footer-info__link">
                    <a href="mailto:<?= $emal_entreprise?>"><?=$emal_entreprise?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="widget footer-widget">
              <h3 class="widget_title style3">Liens utiles</h3>
              <div class="footer-menu--style style3">
                <ul>
                  <li><a href="home">Acceuil</a></li>
                  <li><a href="about">À propos</a></li>
                  <li><a href="product">Boutique</a></li>
                  <li><a href="contact">Contact</a></li>
                  <!--
                  <li><a href="blog">Regulations</a></li>
                  <li><a href="home-2">Product Returns</a></li>
                  <li><a href="contact">About Us</a></li>
                  <li><a href="project">FAQ</a></li>
                  <li><a href="services">Our Team</a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Instagram Area -->

    <!-- Instagram Area End -->
    <div class="copyright-wrap">
      <div class="container">
        <div class="row g-3 justify-content-center justify-content-xxl-between align-items-center">
          <div class="col-lg-auto">
            <p class="copyright-text text-center text-lg-start">Copyright ©  Faire  Par <a href="https://akilaweb.net">Akila Web Factory</a> . Tous
                droits réservés. <a href="https://<?=$nom_entreprise?>/home"><?=$nom_entreprise?></a></p>
          </div>
          <div class="col-lg-auto">
           <?php /* <div class="footer-payment">
              <img src="assets/img/others/payment.png" alt="payment">
            </div> */ ?>
          </div>
          <div class="col-lg-auto"> 
            <?php /*           
            <div class="widget widget_nav_menu footer-widget style3">
              <div class="menu-all-pages-container">
                <ul class="menu justify-content-center justify-content-lg-end ">
                  <li><a href="contact"><span>Termes et conditions</span></a></li>
                  <li><a href="contact"><span>Politique de confidentialité</span></a></li>
                </ul>
              </div>
            </div> 
            */ ?>
          </div>
        </div>
      </div>
    </div>
  </section>