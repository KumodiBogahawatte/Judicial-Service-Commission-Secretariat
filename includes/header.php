<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judicial Service Commission Secretariat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- AOS Library CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Add Anime.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Add GLightbox CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <header id="main-header">
        <div class="logo-container">
            <a href="/JSC/">
                <img src="assets/logo-white.png" alt="Emblem of Sri Lanka" class="logo-desktop">
                <img src="assets/logo-black.png" alt="Emblem of Sri Lanka" class="logo-mobile">
            </a>
        </div>

        <nav id="navbar">
            <ul>
                <li><a href="/JSC/">Home</a></li>
                <li class="dropdown">
                    <a href="#">About Us <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="History-of-the-Judicial-Service-Commission-Secretariat">History</a></li>
                        <li><a href="Organization-Structure">Organization Structure</a></li>
                        <li><a href="JSC-Staff-Functions">JSC Staff Functions</a></li>
                        <li><a href="Judicial-Hierarchy">Judicial Hierarchy</a></li>
                    </ul>
                </li>
                <li><a href="circulars">Circulars</a></li>
                <li><a href="news-events">News & Events</a></li>
                <li><a href="downloads">Downloads</a></li>
                <li><a href="gallery">Gallery</a></li>
                <li class="dropdown">
                    <a href="#">Contact Us <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="Contact-Details">Contact Details</a></li>
                        <li><a href="Inquire">Inquire</a></li>
                    </ul>
                </li>
                <!-- <li><a href="site-map ">Site Map</a></li> -->
            </ul>
        </nav>

        <!-- Header Icons (inside header) -->
        <div class="header-icons">
            <i class="fas fa-search search-btn"></i>
            <i class="fas fa-bars menu-btn" onclick="toggleSidebar('menuSidebar')"></i>
            <i class="fas fa-sign-out-alt info-btn" onclick="toggleSidebar('infoSidebar')"></i>
        </div>
    </header>

    <div class="sidebar menu-sidebar" id="menuSidebar">
        <div class="close-btn" onclick="toggleSidebar('menuSidebar')">&times;</div>

        <div class="sidebar-logo">
            <img src="assets/Emblem_of_Sri_Lanka.svg.png" alt="Emblem">
        </div>

        <div class="search-box-mobile">
            <input type="text" placeholder="Search...">
            <i class="fas fa-search"></i>
        </div>

        <ul class="mobile-menu-list">
            <li><a href="/JSC/" class="active">Home</a></li>

            <li class="has-dropdown">
                <div class="menu-item" onclick="toggleAccordion(this)">
                    About Us <i class="fas fa-chevron-down"></i>
                </div>
                <ul class="submenu">
                    <li><a href="History-of-the-Judicial-Service-Commission-Secretariat">History</a></li>
                    <li><a href="Organization-Structure">Organization Structure</a></li>
                    <li><a href="JSC-Staff-Functions">JSC Staff Functions</a></li>
                    <li><a href="Judicial-Hierarchy">Judicial Hierarchy</a></li>
                </ul>
            </li>

            <li><a href="circulars">Circulars</a></li>
            <li><a href="news-events">News & Events</a></li>
            <li><a href="downloads">Downloads</a></li>
            <li><a href="gallery">Gallery</a></li>

            <li class="has-dropdown">
                <div class="menu-item" onclick="toggleAccordion(this)">
                    Contact Us <i class="fas fa-chevron-down"></i>
                </div>
                <ul class="submenu">
                    <li><a href="Contact-Details ">Contact Details</a></li>
                    <li><a href="Inquire ">Inquire</a></li>
                </ul>
            </li>

            <!-- <li><a href="site-map ">Site Map</a></li> -->
        </ul>
    </div>

    <div class="sidebar info-sidebar" id="infoSidebar">
        <div class="close-btn" onclick="toggleSidebar('infoSidebar')">&times;</div>

        <h3>Recent Posts</h3>
        <div class="sidebar-post">
            <a href="#">Notice on Appointment of Judicial Officers</a>
        </div>
        <div class="sidebar-post">
            <a href="#">Court Holiday Notice – Poson Poya</a>
        </div>

        <h3>Contact Us</h3>
        <div class="contact-item">
            <i class="fas fa-phone-alt"></i>
            <div class="contact-text">
                <p>+94 0112 433 119</p>
                <p>+94 0112 451 159</p>
            </div>
        </div>
        <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <p>sjsc@sltnet.lk</p>
        </div>
        <div class="contact-item">
            <i class="fas fa-home"></i>
            <p>P O Box 573, Hulftsdorp, Colombo 12</p>
        </div>

        <h3>Follow Us</h3>
        <div class="social-links">
            <a href="#" class="social-btn fb"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-btn tw"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-btn ln"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-btn in"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <script>
        function toggleSidebar(id) {
            const sidebar = document.getElementById(id);
            const isActive = sidebar.classList.contains('active');

            // 1. Close ALL sidebars first
            document.querySelectorAll('.sidebar').forEach(sb => {
                sb.classList.remove('active');
            });

            // 2. Open the requested one if it wasn't already open
            if (!isActive) {
                sidebar.classList.add('active');
                document.body.style.overflow = 'hidden'; // Stop background scrolling
            } else {
                document.body.style.overflow = 'auto'; // Re-enable scrolling
            }
        }

        function toggleAccordion(element) {
            element.parentElement.classList.toggle("open");
        }

        // Sticky Header on Scroll
        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            if (window.scrollY > 50) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        });

        const currentPath = window.location.pathname.replace(/\/$/, "");

        document.querySelectorAll("#navbar a").forEach(link => {
            let linkPath = link.getAttribute("href");

            if (!linkPath || linkPath === "#") return;

            linkPath = linkPath.trim().replace(/\/$/, "");

            if (
                currentPath.endsWith(linkPath) ||
                (currentPath === "/JSC" && linkPath === "/JSC")
            ) {
                link.classList.add("active");
                const parentDropdown = link.closest(".dropdown");
                if (parentDropdown) {
                    const parentLink = parentDropdown.querySelector("a");
                    parentLink.classList.add("active");
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>