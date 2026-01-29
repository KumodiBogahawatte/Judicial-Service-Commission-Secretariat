
<?php 
    // include 'db_connect.php'; 
    include 'includes/header.php'; 
?>

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>JSC Staff Functions</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">JSC Staff Functions</span>
        </nav>
    </div>
</section>

<section class="staff-functions-section section-padding reveal">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 50px; flex-wrap: wrap; gap: 30px;">
        <div style="flex: 1; min-width: 300px;">
            <p style="color: var(--gold-accent); text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 10px;">Our Divisions & Responsibilities</p>
            <h2 style="font-size: 2.5rem; color: var(--primary-color); line-height: 1.2;">
                Judicial Service Commission Secretariat <span style="font-family: 'Playfair Display', serif; font-style: italic; color: var(--gold-accent);">Staff Functions</span>
            </h2>
            <div style="width: 50px; height: 3px; background-color: var(--gold-accent); margin-top: 15px;"></div>
        </div>
        <div style="flex: 1; min-width: 300px; color: #666; font-size: 0.95rem; line-height: 1.6;">
            Explore the key functions and responsibilities of the Judicial Service Commission Secretariat staff, organized by division for clarity and transparency.
        </div>
    </div>
    <div class="container">
        <div class="staff-functions-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
            <div class="staff-functions-card">
                <h3 class="staff-functions-title"><i class="fas fa-user-tie" style="color: var(--gold-accent); margin-right:8px;"></i>Secretary's Division</h3>
                <ul class="staff-functions-list">
                    <li>Overall Supervision</li>
                    <li>Recruitment</li>
                    <li>Transfers</li>
                    <li>Promotions</li>
                    <li>Annual Increments</li>
                    <li>Special Appointments</li>
                    <li>Leave</li>
                    <li>Training of Judges</li>
                    <li>Accounts Division and Miscellaneous</li>
                </ul>
            </div>
            <div class="staff-functions-card">
                <h3 class="staff-functions-title"><i class="fas fa-user-cog" style="color: var(--gold-accent); margin-right:8px;"></i>Deputy Secretary's Division</h3>
                <ul class="staff-functions-list">
                    <li>Investigation Division</li>
                    <li>Coordinating Seminars with the Judges Institute</li>
                    <li>Disciplinary Inquiries</li>
                    <li>Organizing meetings of the Commission</li>
                    <li>Establishments Matters</li>
                    <li>Accounts Division</li>
                    <li>Conducting EB Examinations and Training of Scheduled Public Officers</li>
                    <li>Leave of Judicial Officers</li>
                    <li>Recruitment of Judges</li>
                    <li>Miscellaneous</li>
                </ul>
            </div>
            <div class="staff-functions-card">
                <h3 class="staff-functions-title"><i class="fas fa-user-shield" style="color: var(--gold-accent); margin-right:8px;"></i>Senior Assistant Secretary's Division</h3>
                <ul class="staff-functions-list">
                    <li>Training</li>
                    <li>Transfers</li>
                    <li>Promotions</li>
                    <li>Disciplinary Control</li>
                    <li>EB and Other Examinations</li>
                    <li>Assist the Secretary and Deputy Secretary in any other way</li>
                </ul>
            </div>
            <div class="staff-functions-card">
                <h3 class="staff-functions-title"><i class="fas fa-map-marker-alt" style="color: var(--gold-accent); margin-right:8px;"></i>North - East and Quazi Division</h3>
                <ul class="staff-functions-list">
                    <li>North and East Judges and Scheduled Officers</li>
                    <li>Quazi</li>
                    <li>Miscellaneous</li>
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
<style>
    .staff-functions-section.section-padding {
        padding: 60px 8% 40px 8%;
        background: #fff;
    }
    .staff-functions-header h2 {
        font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
    }
    .staff-functions-grid {
        margin-top: 18px;
    }
    .staff-functions-card {
        background: #f9f7ed;
        border-radius: 10px;
        box-shadow: 0 2px 12px rgba(61,51,15,0.07);
        padding: 28px 22px 22px 22px;
        transition: box-shadow 0.2s;
    }
    .staff-functions-card:hover {
        box-shadow: 0 4px 18px rgba(61,51,15,0.13);
    }
    .staff-functions-title {
        font-size: 1.18rem;
        color: var(--primary-color);
        margin-bottom: 14px;
        font-weight: 600;
        display: flex;
        align-items: center;
    }
    .staff-functions-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .staff-functions-list li {
        font-size: 1.02rem;
        color: #444;
        margin-bottom: 8px;
        padding-left: 0.5em;
        position: relative;
    }
    .staff-functions-list li:before {
        content: '\2022';
        color: var(--gold-accent);
        font-size: 1.2em;
        position: absolute;
        left: -0.7em;
        top: 0;
    }
    @media (max-width: 700px) {
        .staff-functions-section.section-padding { padding: 28px 4% 24px 4%; }
        .staff-functions-header h2 { font-size: 1.3rem; }
        .staff-functions-card { padding: 18px 8px 12px 8px; }
        .staff-functions-title { font-size: 1rem; }
        .staff-functions-list li { font-size: 0.98rem; }
    }
</style>
<?php include 'includes/footer.php'; ?>