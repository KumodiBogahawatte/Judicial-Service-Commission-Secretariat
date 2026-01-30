
<?php 
    include 'includes/header.php'; 
?>

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Downloads</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Downloads</span>
        </nav>
    </div>
</section>

<section class="downloads-section section-padding reveal">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 50px; flex-wrap: wrap; gap: 30px;">
        <div style="flex: 1; min-width: 300px;">
            <p style="color: var(--gold-accent); text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 10px;">Latest Downloadable Documents</p>
            <h2 style="font-size: 2.5rem; color: var(--primary-color); line-height: 1.2;">
                Judicial Service <span style="font-family: 'Playfair Display', serif; font-style: italic; color: var(--gold-accent);">Downloads</span>
            </h2>
            <div style="width: 50px; height: 3px; background-color: var(--gold-accent); margin-top: 15px;"></div>
        </div>
        <div style="flex: 1; min-width: 300px; color: #666; font-size: 0.95rem; line-height: 1.6;">
            Browse the latest downloadable forms, notices, and documents for the Judicial Service Commission.
        </div>
    </div>
    <div class="container">
        <!-- Placeholder for backend integration: PHP loop for documents -->
        <div class="downloads-list" style="display: flex; flex-direction: column; gap: 28px;">
            <?php /* Example PHP loop for future backend:
            foreach ($downloads as $doc) {
                // $doc['title'], $doc['date'], $doc['type'], $doc['url'], $doc['desc']
            */ ?>
            <div class="download-card" style="background: #f9f7ed; border-radius: 10px; box-shadow: 0 2px 12px rgba(61,51,15,0.07); padding: 22px 18px 18px 18px;">
                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 8px;">
                    <i class="fas fa-file-download" style="color: var(--gold-accent); font-size: 1.5rem;"></i>
                    <a href="#" style="font-size: 1.13rem; color: var(--primary-color); font-weight: 600; text-decoration: underline;">Application Form for Judicial Service (2026-01-01)</a>
                    <span style="background: var(--gold-accent); color: #fff; font-size: 0.85rem; border-radius: 4px; padding: 2px 10px; margin-left: 8px;">NEW</span>
                </div>
                <div style="color: #444; font-size: 1.01rem; margin-bottom: 8px;">Download the latest application forms, notices, and other important documents for the Judicial Service Commission.</div>
                <div style="display: flex; flex-wrap: wrap; gap: 10px 24px; margin-top: 8px;">
                    <a href="assets/Doc1.pdf" download target="_blank" style="color: var(--gold-accent); text-decoration: underline; font-weight: 500;">Application Form PDF</a>
                    <!-- More links... -->
                </div>
            </div>
            <!-- Repeat .download-card for each document/notice -->
            <?php // } ?>
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