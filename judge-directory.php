
<?php 
    // include 'db_connect.php'; 
    include 'includes/header.php'; 
?>

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Judge Directory</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Judge Directory</span>
        </nav>
    </div>
</section>

<section class="judge-directory-section section-padding reveal">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 50px; flex-wrap: wrap; gap: 30px;">
        <div style="flex: 1; min-width: 300px;">
            <p style="color: var(--gold-accent); text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 10px;">Find a Judge</p>
            <h2 style="font-size: 2.5rem; color: var(--primary-color); line-height: 1.2;">Judge Directory</h2>
            <div style="width: 50px; height: 3px; background-color: var(--gold-accent); margin-top: 15px;"></div>
        </div>
        <div style="flex: 1; min-width: 300px; color: #666; font-size: 0.95rem; line-height: 1.6;">
            Search for judges by province, court type, or keywords. Use the filters below to quickly find the judge you need.
        </div>
    </div>
    <div class="container">
        <form class="judge-directory-form" style="display: flex; flex-wrap: wrap; gap: 18px 32px; align-items: flex-end; justify-content: center; margin-bottom: 36px; background: #f9f7ed; border-radius: 10px; padding: 24px 18px 18px 18px; box-shadow: 0 2px 12px rgba(61,51,15,0.07);">
            <div style="flex: 1 1 220px; min-width: 180px;">
                <label for="province" style="font-weight: 600; color: var(--primary-color); margin-bottom: 6px; display: block;">Select Province</label>
                <select id="province" name="province" style="width: 100%; padding: 10px 12px; border-radius: 6px; border: 1.5px solid #d1b24a; font-size: 1rem;">
                    <option value="">-- Select Province --</option>
                    <!-- Add province options here -->
                </select>
            </div>
            <div style="flex: 1 1 220px; min-width: 180px;">
                <label for="court-type" style="font-weight: 600; color: var(--primary-color); margin-bottom: 6px; display: block;">Select Court Type</label>
                <select id="court-type" name="court-type" style="width: 100%; padding: 10px 12px; border-radius: 6px; border: 1.5px solid #d1b24a; font-size: 1rem;">
                    <option value="">-- Select Type --</option>
                    <!-- Add court type options here -->
                </select>
            </div>
            <div style="flex: 1 1 220px; min-width: 180px;">
                <label for="keywords" style="font-weight: 600; color: var(--primary-color); margin-bottom: 6px; display: block;">Key Words</label>
                <input type="text" id="keywords" name="keywords" style="width: 100%; padding: 10px 12px; border-radius: 6px; border: 1.5px solid #d1b24a; font-size: 1rem;">
            </div>
            <div style="flex: 0 0 160px; min-width: 120px; text-align: center;">
                <button type="submit" style="width: 100%; background: var(--gold-accent); color: #fff; border: none; border-radius: 6px; padding: 12px 0; font-weight: 600; font-size: 1.08rem; cursor: pointer; transition: background 0.2s;">Search</button>
            </div>
        </form>
        <div class="judge-directory-results" style="min-height: 120px; background: #fff; border-radius: 8px; box-shadow: 0 1px 6px rgba(61,51,15,0.04); padding: 24px 18px; text-align: left; color: #666; font-size: 1.08rem;">
            <span style="color: #a5851b;">No Results to Display</span>
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