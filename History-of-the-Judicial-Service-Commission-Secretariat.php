<?php 
    // include 'db_connect.php'; 
    include 'includes/header.php'; 
?>

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>History of Judicial Service Commission Secretariat</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Judicial Service Commission Secretariat</span>
        </nav>
    </div>
</section>

<section class="history-section reveal">
    <div class="history-container">
        
        <div class="history-text">
            <h4 class="sub-title">The Foundation</h4>
            <h2>History of the Judicial Service Commission Secretariat</h2>
            <div class="gold-divider"></div>
            
            <p>
                The Judicial Service Commission (JSC) of Sri Lanka was established on <strong>4 October 1947</strong> as an independent constitutional body tasked with preserving the independence of the judiciary and overseeing the judicial service.
            </p>
            
            <p>
                Supporting this constitutional body, the <strong>Judicial Service Commission Secretariat</strong> was formed to provide essential administrative, logistical, and institutional support to the Commission. The Secretariat ensures smooth functioning of the JSC’s duties, including recruitment, transfers, promotions, disciplinary control, and HR management within the judicial service.
            </p>

            <h3>Role & Mandate</h3>
            <p>
                The Judicial Service Commission is entrusted with wide-ranging responsibilities: appointment and career control of judges in courts of first instance, training and discipline of Quazis with Family Court jurisdiction, appointments to judicial and statutory tribunals, and oversight of court staff. Its decisions uphold judicial independence and proper administration of justice throughout Sri Lanka.
            </p>

            <blockquote>
                "The independence of the judiciary is essential to the rule of law and the fair administration of justice."
                <span>— Constitutional Principle</span>
            </blockquote>

            <h3>Modern Developments</h3>
            <p>
                In recent decades, the Secretariat has modernised its administrative processes, embraced digital records, and strengthened its coordination across courts nationwide. These developments aim to support the JSC’s constitutional mandate efficiently and transparently in the 21st century.
            </p>
            <!-- <img src="assets/images/lady-justice-statue-front-courthouse.jpg" alt="Judicial Service Commission Secretariat" class="history-text-img"> -->
        </div>

        <div class="history-sidebar">
            <div class="image-box">
                <img src="assets/images/lady-justice-law-library-concept.png" alt="Judicial Service Commission Secretariat">
            </div>

            <div class="timeline-box">
                <h3>Key Milestones</h3>
                <ul>
                    <li>
                        <span class="year">1947</span>
                        <span class="event">Judicial Service Commission established on 4 October 1947. </span>
                    </li>
                    <li>
                        <span class="year">1978</span>
                        <span class="event">Constitution reinforces judicial independence and functions of the JSC.</span>
                    </li>
                    <li>
                        <span class="year">2000s</span>
                        <span class="event">Secretariat modernises administrative systems, expands HR functions.</span>
                    </li>
                </ul>
            </div>
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