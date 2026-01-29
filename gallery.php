<?php 
    // include 'db_connect.php'; 
    include 'includes/header.php'; 
?>

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Gallery</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Gallery</span>
        </nav>
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