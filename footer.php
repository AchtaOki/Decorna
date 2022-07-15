<!DOCTYPE html>
<html>
    <head>
    <title>Entete site</title>
        <meta charset="utf-8">
        
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="lib/slick/slick.css" rel="stylesheet">
<link href="lib/slick/slick-theme.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<style>

.footer {
  
    position: relative;
    padding: 30px 0 0 0;
    background: cyan;
}

.footer .footer-widget {
    position: relative;
    width: 100%;
    margin-bottom: 30px;
}

.footer .footer-widget h2 {
    font-size: 25px;
    white-space: nowrap;
    margin-bottom: 20px; 
}

.footer .footer-widget ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.footer .footer-widget ul li {
    margin-bottom: 12px; 
}

.footer .footer-widget ul li:last-child {
    margin-bottom: 0; 
}

.footer .footer-widget ul li a {
    color: #353535;
    white-space: nowrap;
    display: block;
    line-height: 23px;
    transition: all .3s;
}

.footer .footer-widget ul li a::before {
    content: '\f105';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    padding-right: 5px;
}

.footer .footer-widget ul li a:hover {
    color: #FF6F61;
}

.footer .footer-widget ul li a:hover::before {
    content: '\f101';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
}

.footer .contact-info p {
    margin-bottom: 10px;
    font-size: 16px;
}

.footer .contact-info p i {
    margin-right: 5px;
}

.footer .social {
    position: relative;
    width: 100%;
}

.footer .social a {
    display: inline-block;
    margin: 10px 5px 0 0;
    width: 40px;
    height: 40px;
    padding: 6px 0;
    text-align: center;
    font-size: 18px;
    color: #353535;
    border: 1px solid #353535;
    border-radius: 4px;
    transition: all .3s;
}

.footer .social a:hover {
    color: #FF6F61;
    border-color: #FF6F61;
}

.footer .payment {
    padding-top: 25px;
    padding-bottom: 25px;
    border-top: 1px solid rgba(0,0,0,.1);
}

@media (min-width: 992px) {
    .footer .payment {
        max-width: 80%;
        margin: 0 auto;
    }
}

.footer .payment-method,
.footer .payment-security {
    overflow: hidden;
}

.footer .payment-method {
    text-align: left;
}

.footer .payment-security {
    text-align: right;
}

@media (max-width: 768.98px) {
    .footer .payment-method {
        margin-bottom: 15px;
    }
    
    .footer .payment-method,
    .footer .payment-security {
        text-align: center; 
    } 
}

.footer .payment-method h2,
.footer .payment-security h2 {
    display: inline-block;
    margin: 0 10px 0 0;
    font-size: 18px;
    font-weight: 400;
    line-height: 22px;
}

.footer .payment-method img,
.footer .payment-security img {
    height: 25px;
}
.footer-bottom {
    position: relative;
    padding: 25px 0;
    background: #000000;
}

.footer-bottom .copyright {
    text-align: left;
}

.footer-bottom .template-by {
    text-align: right;
}

.footer-bottom .copyright p,
.footer-bottom .template-by p {
    color: #ffffff;
    font-weight: 400;
    margin: 0;
}

.footer-bottom .copyright p a,
.footer-bottom .template-by p a {
    font-weight: 600;
}

.footer-bottom .copyright p a:hover,
.footer-bottom .template-by p a:hover {
    color: #ffffff;
}

@media (max-width: 768.98px) {
    .footer-bottom .copyright,
    .footer-bottom .template-by {
        text-align: center; 
    } 
}

</style>



    </head>
    <body>
   
    <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Nous contacter</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>N'djari derrière Hec-Tchad, N'djamena, Tchad</p>
                                <p><i class="fa fa-envelope"></i>decornaevents@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+235 63 25 17 33</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Suivez nous sur:</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

   

                    
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>On Accepte:</h2>
                            <img src="project_images/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Sécuriser par:</h2>
                            <img src="project_images/godaddy.svg" alt="Payment Security" />
                            <img src="project_images/norton.svg" alt="Payment Security" />
                            <img src="project_images/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
            
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>

</body>
</html>