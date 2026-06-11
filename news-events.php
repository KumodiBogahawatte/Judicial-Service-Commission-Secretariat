<?php 
    // include 'db_connect.php'; 
    include 'includes/header.php'; 
?>

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>News & Events</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">News & Events</span>
        </nav>
    </div>
</section>

<section class="content-section reveal" style="padding: 80px 8%; background-color: #fff;">
    
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 50px; flex-wrap: wrap; gap: 30px;">
        
        <!-- <div style="flex: 1; min-width: 300px; color: #666; font-size: 0.95rem; line-height: 1.6;">
            We provide timely updates on important news, press releases, and official announcements issued by the Judicial Service Commission Secretariat of Sri Lanka, keeping the public informed about matters related to the administration of justice and judicial services.
        </div> -->
        <div style="flex: 1; min-width: 300px;text-align:center">
            <p style="color: var(--gold-accent); text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 10px;">Official Updates</p>
            <h2 style="font-size: 2.5rem; color: var(--primary-color); line-height: 1.2;">
                Stay updated With Our Latest <br><span style="font-family: 'Playfair Display', serif; font-style: italic; color: var(--gold-accent);">News & Events</span>
            </h2>
            <div style="width: 50px; height: 3px; background-color: var(--gold-accent); margin: 15px auto 0 auto;"></div>
        </div>
    </div>

    <div class="news-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        
        <div class="news-item-card">
            <div class="news-meta">
                <span><i class="far fa-calendar-alt"></i> Jan 01, 2026</span>
                <span><i class="far fa-user"></i> By Admin</span>
            </div>
            <h3 class="news-title">Judicial Service Commission Secretariat - BIDDING DOCUMENT NATIONAL COMPETITIVE BIDDING - Supply and Delivery of 104 All-in-One Computers and 326 Desktop Computers to 90 Courts</h3>
            <a href="#" class="btn-black">View more</a>
        </div>

        <div class="news-item-card">
            <div class="news-meta">
                <span><i class="far fa-calendar-alt"></i> Jan 06, 2026</span>
                <span><i class="far fa-user"></i> By Admin</span>
            </div>
            <h3 class="news-title">Calling for Applications for Recruitment to the Post of Court Registrar Grade III on Merit Basis – 2026</h3>
            <a href="#" class="btn-black">View more</a>
        </div>

        <div class="news-item-card">
            <div class="news-meta">
                <span><i class="far fa-calendar-alt"></i> Jan 21, 2026</span>
                <span><i class="far fa-user"></i> By Admin</span>
            </div>
            <h3 class="news-title">Extension of the Order Suspending Temporary Attachments and Transfers of Officers in the Scheduled Public Service and Development Officers Serving in the Courts.</h3>
            <a href="#" class="btn-black">View more</a>
        </div>

        <div class="news-item-card">
            <div class="news-meta">
                <span><i class="far fa-calendar-alt"></i> Jan 21, 2026</span>
                <span><i class="far fa-user"></i> By Admin</span>
            </div>
            <h3 class="news-title">Criteria for Granting Annual Salary Increments to Presidents of Labour Tribunals</h3>
            <a href="#" class="btn-black">View more</a>
        </div>

    </div>

    <div style="margin-top: 50px; text-align: center;">
        <a href="#" style="display: inline-block; padding: 10px 20px; background: var(--primary-color); color: white; text-decoration: none; border-radius: 4px;">Load More News</a>
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