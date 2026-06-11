<?php 
    include 'includes/header.php'; 
?>

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Contact Details</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Contact Us</span>
        </nav>
    </div>
</section>

<section class="contact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="order:1;">
                <div class="contact-form">
                    <h2>Judicial Service Commission Secretariat</h2>
                    <p>For inquiries, appointments, or information, please use the contact details below or send us a message.</p>
                    <ul class="contact-details">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Address</h4>
                                <p>Parking lot, Hultsdorf St, Colombo 01000</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <h4>Phone</h4>
                                <p>+94 112 433 119<br>+94 112 451 159</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <p>sjsc@sltnet.lk</p>
                            </div>
                        </li>
                    </ul>
                    <div class="working-hours">
                        <h4>Working Hours</h4>
                        <p>Monday - Friday: 8:30 AM - 4:30 PM</p>
                        <p>Saturday/Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map -->
<section class="google-map">
    <div class="container">
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.578170170138!2d79.85754414752948!3d6.936457775092027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2591c7bcb2541%3A0xb3906b3e4ddcf2c5!2sJudicial%20Service%20Commission!5e0!3m2!1sen!2slk!4v1769573488113!5m2!1sen!2slk"
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                title="Judicial Service Commission Secretariat Location Map">
            </iframe>
        </div>
    </div>
</section>

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