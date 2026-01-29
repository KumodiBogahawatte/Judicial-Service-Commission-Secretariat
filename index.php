<?php include 'includes/header.php'; ?>

<section class="hero">

    <div class="hero-slideshow">
        <div class="slide active" style="background-image: url('assets/images/front-view-blurry-lawyer-working.jpg');"></div>
        <div class="slide" style="background-image: url('assets/images/law-justice-gavel-statue-books.jpg');"></div>
        <div class="slide" style="background-image: url('assets/images/judge-holding-gavel-courtroom.jpg');"></div>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h2>Safeguarding Judicial Independence & Administrative Integrity</h2>
        <p>Supporting the appointment, transfer, and discipline of the Judicial Service of Sri Lanka.</p>

        <a href="#" class="btn-gold">View Circulars & Notices</a>
    </div>

</section>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function nextSlide() {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % totalSlides;
        slides[currentSlide].classList.add('active');
    }

    setInterval(nextSlide, 5000);
</script>
<br><br>

<div class="reveal" style="padding: 60px 8%; display:flex; gap:40px; flex-wrap:wrap;">
    <div style="flex: 1; min-width: 300px;">
        <h4 style="color:var(--gold-accent); text-transform:uppercase;">Welcome to</h4>
        <h2 style="color:var(--primary-color); font-size:2.5rem; margin-bottom:20px;">
            Judicial Service Commission Secretariat
        </h2>
        <div class="gold-divider"></div>
        <p style="margin-bottom:20px;">
            The Judicial Service Commission Secretariat operates under Article 111 of the Constitution
            of the Democratic Socialist Republic of Sri Lanka, providing administrative and institutional
            support to the Judicial Service Commission.
        </p>
        <p>
            The Secretariat is committed to upholding judicial independence while ensuring transparency,
            efficiency, and accountability in the administration of the judicial service.
        </p>
        <br>
        <a href="#" class="btn-gold" style="transition: background 0.2s, color 0.2s; border:1px solid #5f523a;">
            Read More
        </a>
    </div>

    <div style="flex: 1; min-width: 300px;">
        <img src="assets/images/grey-marble-column-details-building-scaled.jpg" alt="Judicial Service Commission" style="width:100%; border-radius:10px;">
    </div>
</div>

<!-- <section class="services-grid reveal">
    <div class="card">
        <i class="fas fa-user-tie fa-3x" style="color:rgb(226, 208, 156)"></i>
        <h3>Judicial Appointments</h3>
        <p>Appointments of judicial officers to Magistrates’ Courts and Primary Courts.</p>
    </div>

    <div class="card">
        <i class="fas fa-exchange-alt fa-3x" style="color:rgb(226, 208, 156)"></i>
        <h3>Transfers & Postings</h3>
        <p>Administration of transfers and postings of judicial officers islandwide.</p>
    </div>

    <div class="card">
        <i class="fas fa-gavel fa-3x" style="color:rgb(226, 208, 156)"></i>
        <h3>Disciplinary Control</h3>
        <p>Exercise of disciplinary control in accordance with the Constitution.</p>
    </div>

    <div class="card">
        <i class="fas fa-file-contract fa-3x" style="color:rgb(226, 208, 156)"></i>
        <h3>Circulars & Guidelines</h3>
        <p>Issuance of official circulars, notices, and administrative guidelines.</p>
    </div>
</section> -->

<section class="news-section reveal">
    <div class="section-header">
        <p style="font-family: 'Playfair Display', serif;text-align: center; color: var(--gold-accent); font-size: 1.2rem;">Official Updates</p>
        <h2 style="text-align: center; margin-bottom: 2px; font-style: italic;"> News & Announcements</h2>
        <div style="text-align:center;">
            <img src="assets/underline.png" alt="" style="width:100px; height:150px; display:inline-block; margin-bottom:-60px; margin-top:-60px;">
        </div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">

        <div class="news-card">
            <img src="assets/images/news/1.jpg" alt="">
            <div style="padding: 20px;">
                <span style="font-size: 1rem; color: var(--gold-accent); font-weight: bold;">NOTICE</span>
                <h4>Appointments of Judicial Officers</h4>
                <p>Appointments and confirmations issued by the Judicial Service Commission.</p>
                <div class="news-meta">Jan 23, 2026 &nbsp; | &nbsp; by Admin</div>
            </div>
        </div>

        <div class="news-card">
            <img src="assets/images/news/2.jpg" alt="">
            <div style="padding: 20px;">
                <span style="font-size: 1rem; color: var(--gold-accent); font-weight: bold;">CIRCULAR</span>
                <h4>Transfer Guidelines</h4>
                <p>Updated administrative guidelines on judicial transfers and postings.</p>
                <div class="news-meta">Jan 20, 2026 &nbsp; | &nbsp; by JSC Staff</div>
            </div>
        </div>

        <div class="news-card">
            <img src="assets/images/news/3.jpg" alt="">
            <div style="padding: 20px;">
                <span style="font-size: 1rem; color: var(--gold-accent); font-weight: bold;">TRAINING</span>
                <h4>Judicial Training Programmes</h4>
                <p>Orientation and professional development programmes for judicial officers.</p>
                <div class="news-meta">Jan 15, 2026 &nbsp; | &nbsp; by Training Dept</div>
            </div>
        </div>

        <div class="news-card">
            <img src="assets/images/news/4.jpg" alt="">
            <div style="padding: 20px;">
                <span style="font-size: 1rem; color: var(--gold-accent); font-weight: bold;">ADMINISTRATION</span>
                <h4>Administrative Notices</h4>
                <p>Official notices issued by the Judicial Service Commission Secretariat.</p>
                <div class="news-meta">Jan 10, 2026 &nbsp; | &nbsp; by Secretariat</div>
            </div>
        </div>

    </div>
</section>

<section class="blog-section reveal">
    <div style="text-align: center;" class="section-header">
        <p style="font-family: 'Playfair Display', serif; text-align: center; color: var(--gold-accent); font-size: 1.2rem;">Blog</p>
        <h2 style="text-align: center; margin-bottom: 20px; font-style: italic;">Judicial Administration & Insights</h2>
        <div style="text-align:center;">
            <img src="assets/underline.png" alt="" style="width:100px; height:150px; display:inline-block; margin-bottom:-80px; margin-top:-80px;">
        </div>
    </div>

    <div class="blog-list">
        <div class="blog-card">
            <img class="blog-bg" src="assets/images/news/1.jpg" alt="Judicial Bench">
            <div class="blog-gradient"></div>
            <div class="blog-plus">+</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <!-- <img src="assets/images/sc-logo.png" alt="Supreme Court Logo"> -->
                    <!-- <span class="blog-category">supreme court</span> -->
                </div>
                <div class="blog-underline"></div>
                <div class="blog-title">Streamlining the Annual Transfer Process for Judicial Officers: 2026 Guidelines</div>
            </div>
        </div>

        <div class="blog-card">
            <img class="blog-bg" src="assets/images/news/2.jpg" alt="Judicial Ethics">
            <div class="blog-gradient"></div>
            <div class="blog-plus">+</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <!-- <img src="assets/images/sc-logo.png" alt="Supreme Court Logo"> -->
                    <!-- <span class="blog-category">supreme court</span> -->
                </div>
                <div class="blog-underline"></div>
                <div class="blog-title" style="margin-bottom: 14px;">Upholding the Code of Conduct: The Role of the JSC in Judicial Integrity
                </div>
            </div>
        </div>

        <div class="blog-card">
            <img class="blog-bg" src="assets/images/news/3.jpg" alt="Digital System">
            <div class="blog-gradient"></div>
            <div class="blog-plus">+</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <!-- <img src="assets/images/sc-logo.png" alt="Supreme Court Logo"> -->
                    <!-- <span class="blog-category">supreme court</span> -->
                </div>
                <div class="blog-underline"></div>
                <div class="blog-title">Implementing the New E-Human Resource Management System for Court Staff</div>
            </div>
        </div>

        <div class="blog-card">
            <img class="blog-bg" src="assets/images/news/4.jpg" alt="Training">
            <div class="blog-gradient"></div>
            <div class="blog-plus">+</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <!-- <img src="assets/images/sc-logo.png" alt="Supreme Court Logo"> -->
                    <!-- <span class="blog-category">supreme court</span> -->
                </div>
                <div class="blog-underline"></div>
                <div class="blog-title">Highlights from the Orientation Program for Newly Appointed Magistrates</div>
            </div>
        </div>

        <div class="blog-card">
            <img class="blog-bg" src="assets/images/news/5.jpg" alt="International Cooperation">
            <div class="blog-gradient"></div>
            <div class="blog-plus">+</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <!-- <img src="assets/images/sc-logo.png" alt="Supreme Court Logo"> -->
                    <!-- <span class="blog-category">supreme court</span> -->
                </div>
                <div class="blog-underline"></div>
                <div class="blog-title">JSC Secretariat and UNDP Discuss Modernizing the Judicial Appointment Registry</div>
            </div>
        </div>
    </div>
</section>

<section class="reveal" style="padding: 60px 8%; background-color: #fff; border-top: 1px solid #eee;">
    <div style="display: flex; gap: 40px; align-items: flex-start; flex-wrap: wrap;">
        <div style="flex: 2;">
            <h3 style="color: var(--primary-color); font-size: 1.8rem; margin-bottom: 10px;">
                Citizen’s <span style="color: var(--gold-accent); font-family: 'Playfair Display', serif; font-style: italic;">Charter</span>
            </h3>
            <p style="color: #666; font-size: 0.9rem; margin-bottom: 20px;">
                Institution — Judicial Service Commission Secretariat<br>
                Legal Basis — Constitution of Sri Lanka
            </p>

            <h4 style="color: var(--primary-color); font-size: 1.1rem; margin-bottom: 15px;">Key Commitments:</h4>
            <ul class="charter-list" style="list-style: none; padding: 0;">
                <li><i class="fas fa-check-circle" style="color: var(--gold-accent);"></i> <strong>Independence:</strong> Upholding judicial independence without external influence.</li>
                <li><i class="fas fa-check-circle" style="color: var(--gold-accent);"></i> <strong>Transparency:</strong> Fair and accountable administrative processes.</li>
                <li><i class="fas fa-check-circle" style="color: var(--gold-accent);"></i> <strong>Efficiency:</strong> Timely handling of appointments, transfers, and disciplinary matters.</li>
            </ul>
        </div>

        <div style="flex: 1; min-width: 250px;">
            <img class="hover-scale" src="assets/images/law-legal-system-justice-crime-concept-mallet-gavel-hammer-scales-table-d-render-illustration.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
            <a href="#" class="btn-gold" style="display: block; text-align: center; margin-top: 15px; background: var(--primary-color); color: white; padding: 10px; text-decoration: none; border-radius: 4px; transition:0.3s;">
                Frequently Asked Questions (FAQ)
            </a>
        </div>
    </div>
</section>

<script>
    window.addEventListener('scroll', reveal);

    function reveal() {
        var reveals = document.querySelectorAll('.reveal');
        for (var i = 0; i < reveals.length; i++) {
            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;
            if (revealtop < windowheight - revealpoint) {
                reveals[i].classList.add('active');
            }
        }
    }
    reveal();
</script>

<?php include 'includes/footer.php'; ?>