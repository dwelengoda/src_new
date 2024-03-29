</div> <!--newsletter-->

<!-- footer -->
<section id="footer">
    <div class="footer text-center">
        <div class="container">
        <div class="row mb-5">
                <div class="col">
                <?php
    
                                $currentFileName = basename($_SERVER['PHP_SELF']);
                                echo "File last modified: $currentFileName<br>";
                                
                                $fileLastModified = filemtime($currentFileName);
                                
                                $formattedLastModified = date("F d Y H:i:s.", $fileLastModified);
                                echo "Last modified: $formattedLastModified";
                                ?>
                                                         
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-left">
                    <h4>Want To Take Tour Packages?</h4>
                    <button class="btn btn-warning btn-footer-book mx-auto">Book Now</button>
                    <h4>Our Payment Partners</h4>
                    <img src="assets/images/icons/payment/card.png" alt="card">
                    <img src="assets/images/icons/payment/visa.png" alt="visa">
                    <img src="assets/images/icons/payment/skrill.png" alt="skrill">
                    <img src="assets/images/icons/payment/stripe.png" alt="stripe">
                    <img src="assets/images/icons/payment/paypal.png" alt="paypal">
                </div>
                <div class="col-md-3 text-left">
                    <h3><i class="material-icons">phone</i> Inquiries</h3>
                    <p><strong>Phone:</strong> +358112465465</p>
                    <p><strong>Email:</strong> <a href="mailto:inquiry@lankanmatka.fi">inquiry@lankanmatka.fi</a>
                    </p>
                    <p><strong>Address:</strong> Pohjoisesplanadi 49, 00180 Helsinki, Finland</p>
                </div>
                <div class="col-md-3 text-left social-icons">
                    <h3><i class="material-icons">follow_the_signs</i> Follow Us on</h3>
                    <p><a href="#" target="_blank"><img src="assets/images/icons/social/facebook.png" alt="Facebook">Facebook</a>
                    </p>
                    <p><a href="#" target="_blank"><img src="assets/images/icons/social/instagram.png" alt="Instagram">Instagram</a>
                    </p>
                    <p><a href="#" target="_blank"><img src="assets/images/icons/social/twitter.png" alt="Twitter">Twitter</a></p>
                    <p><a href="#" target="_blank"><img src="assets/images/icons/social/youtube.png" alt="YouTube">YouTube</a></p>
                    <p><a href="#" target="_blank"><img src="assets/images/icons/social/pinterest.png" alt="Pinterest">Pinterest</a>
                    </p>
                </div>
                <div class="col-md-3 text-left">
                    <h3><i class="material-icons">link</i> Quick Links</h3>
                    <p><a href="#">About Us</a></p>
                    <p><a href="#">Destinations</a></p>
                    <p><a href="#">Tour Packages</a></p>
                    <p><a href="#">Gallery</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright">©Copyright 2024 Lankanmatka | Design By Group 23</p>
                </div>
                <div class="col-md-6">
                    <p class="privacy"><a href="#">Privacy Policy</a> | <a href="#">Terms & Condition</a></p>
                </div>
            </div>
            
        </div>
    </div> <!--footer-->
</section>
</div> <!--container-->
</html>

