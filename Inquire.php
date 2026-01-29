<?php 
    // include 'db_connect.php'; 
    include 'includes/header.php'; 
?>

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Inquire</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Inquire</span>
        </nav>
    </div>
</section>

<section class="inquire-section section-padding">
    <div class="container">
        <div class="row inquire-row">
            <div class="col-lg-5 inquire-img-col">
                <div class="inquire-img-box">
                    <img src="assets/images/lady-justice-law-library-concept.jpg" alt="Judicial Service Commission" class="inquire-side-img">
                </div>
            </div>
            <div class="col-lg-7 inquire-form-col">
                <div class="contact-form contact-form-message inquire-form-card">
                    <h2 class="inquire-heading">Send Us a Message</h2>
                    <div class="inquire-divider"></div>
                    <form id="contactForm" method="post" action="contact.php" data-parsley-validate autocomplete="off">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" required data-parsley-error-message="Please enter your name">
                        </div>
                        <div class="form-group form-row-2">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *" required data-parsley-type="email" data-parsley-error-message="Please enter a valid email">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone (Optional)">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject *" required data-parsley-error-message="Please enter a subject">
                        </div>
                        <div class="form-group">
                            <label for="message" class="inquire-label">Your message :</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Your Message *" required data-parsley-error-message="Please enter your message"></textarea>
                        </div>
                        <div class="form-group form-inline-checkbox">
                            <input type="checkbox" id="copy_email" name="copy_email">
                            <label for="copy_email">E-mail a copy of this message to your own address</label>
                        </div>
                        <div class="form-group captcha-group">
                            <label for="captcha_code" class="inquire-label">Copy the security code:</label>
                            <div class="captcha-flex">
                                <img id="captcha_img" src="generate_captcha.php" alt="Captcha" class="captcha-img">
                                <button type="button" id="reload_captcha" class="captcha-reload-btn" title="Reload Captcha">
                                    <i class="fas fa-sync-alt captcha-reload-icon"></i>
                                </button>
                                <input type="text" id="captcha_code" name="captcha_code" class="form-control captcha-input" placeholder="Enter code" required data-parsley-error-message="Please enter the security code">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary inquire-btn">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Captcha reload functionality
document.addEventListener('DOMContentLoaded', function() {
    var reloadBtn = document.getElementById('reload_captcha');
    var captchaImg = document.getElementById('captcha_img');
    if(reloadBtn && captchaImg) {
        reloadBtn.addEventListener('click', function(e) {
            e.preventDefault();
            captchaImg.src = 'generate_captcha.php?' + Date.now();
        });
    }
});
</script>

<script>
    window.addEventListener('scroll', function() {
        var reveals = document.querySelectorAll('.reveal');
        for(var i = 0; i < reveals.length; i++){
            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;
            if(revealtop < windowheight - revealpoint){
                reveals[i].classList.add('active');
            }
        }
    });
</script>
<?php include 'includes/footer.php'; ?>