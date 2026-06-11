<?php 
    include 'includes/header.php'; 
?>

<!-- Add GLightbox CSS in your header or here -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

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

<section class="gallery-section">
    <div class="container">
        <!-- Folder View -->
        <div id="folder-view" class="gallery-folders">
            <div class="folder-item reveal" data-folder="environment">
                <div class="folder-icon">
                    <i class="fas fa-folder"></i>
                </div>
                <h3>Location</h3>
                <p class="folder-count">0 photos</p>
            </div>
            
            <div class="folder-item reveal" data-folder="news">
                <div class="folder-icon">
                    <i class="fas fa-folder"></i>
                </div>
                <h3>News</h3>
                <p class="folder-count">0 photos</p>
            </div>
            
            <div class="folder-item reveal" data-folder="events">
                <div class="folder-icon">
                    <i class="fas fa-folder"></i>
                </div>
                <h3>Events</h3>
                <p class="folder-count">0 photos</p>
            </div>
            
            <!-- <div class="folder-item reveal" data-folder="community">
                <div class="folder-icon">
                    <i class="fas fa-folder"></i>
                </div>
                <h3>Community</h3>
                <p class="folder-count">0 photos</p>
            </div> -->
        </div>

        <!-- Images View -->
        <div id="images-view" style="display:none;">
            <div class="back-button">
                <button id="back-to-folders">
                    <i class="fas fa-arrow-left"></i> Back to Folders
                </button>
            </div>
            <h2 id="current-folder-title" class="folder-title"></h2>
            <div id="gallery-grid" class="gallery-grid"></div>
            <div id="gallery-no-images" style="display:none; color:#bfa13a; text-align:center; margin:40px 0; font-size:1.2em;">
                No images found in this folder.
            </div>
        </div>
    </div>
</section>

<style>
/* GLightbox Custom Styling to match your theme */
.glightbox-clean .gslide-description {
    background: rgba(0, 0, 0, 0.8);
    color: #d1b24a;
}

.glightbox-clean .gclose,
.glightbox-clean .gnext,
.glightbox-clean .gprev {
    background: rgba(209, 178, 74, 0.8);
    color: white;
}

.glightbox-clean .gclose:hover,
.glightbox-clean .gnext:hover,
.glightbox-clean .gprev:hover {
    background: rgba(209, 178, 74, 1);
}

.glightbox-clean .gslide-title {
    color: #d1b24a;
    font-size: 1.2em;
}

.glightbox-clean .gdesc-inner {
    color: #fff;
}
</style>

<!-- Add GLightbox JS before closing body tag or here -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
// Gallery configuration - Add your images here
const galleryData = {
    environment: [
        { 
            src: 'assets/images/gallery/environment/env1.jpg', 
            thumb: 'assets/images/gallery/environment/env1.jpg',
            alt: 'Environment 1',
            // description: 'Beautiful environment scene'
        },
        { 
            src: 'assets/images/gallery/environment/env2.jpg', 
            thumb: 'assets/images/gallery/environment/env2.jpg',
            alt: 'Environment 2',
            // description: 'Nature photography'
        },
        // { 
        //     src: 'assets/images/gallery/environment/env3.jpg', 
        //     thumb: 'assets/images/gallery/environment/env3.jpg',
        //     alt: 'Environment 3',
        //     // description: 'Landscape view'
        // },
    ],
    news: [
        { 
            src: 'assets/images/gallery/news/news1.jpg', 
            thumb: 'assets/images/gallery/news/news1.jpg',
            alt: 'News 1',
            // description: 'Latest news update'
        },
        { 
            src: 'assets/images/gallery/news/news2.jpg', 
            thumb: 'assets/images/gallery/news/news2.jpg',
            alt: 'News 2',
            // description: 'Breaking news coverage'
        },
    ],
    events: [
        { 
            src: 'assets/images/gallery/events/event1.jpg', 
            thumb: 'assets/images/gallery/events/event1.jpg',
            alt: 'Event 1',
            // description: 'Community event'
        },
        { 
            src: 'assets/images/gallery/events/event2.jpg', 
            thumb: 'assets/images/gallery/events/event2.jpg',
            alt: 'Event 2',
            // description: 'Special gathering'
        },
        { 
            src: 'assets/images/gallery/events/event3.jpg', 
            thumb: 'assets/images/gallery/events/event3.jpg',
            alt: 'Event 3',
            // description: 'Annual celebration'
        },
    ],
    // community: [
    //     { 
    //         src: 'assets/images/gallery/community/comm1.jpg', 
    //         thumb: 'assets/images/gallery/community/comm1.jpg',
    //         alt: 'Community 1',
    //         // description: 'Community members'
    //     },
    // ]
};

let lightbox;
let currentFolder = '';

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    updateFolderCounts();
    setupFolderListeners();
    setupRevealAnimation();
});

// Update folder counts
function updateFolderCounts() {
    document.querySelectorAll('.folder-item').forEach(folder => {
        const folderName = folder.dataset.folder;
        const count = galleryData[folderName] ? galleryData[folderName].length : 0;
        folder.querySelector('.folder-count').textContent = `${count} photo${count !== 1 ? 's' : ''}`;
    });
}

// Setup folder click listeners
function setupFolderListeners() {
    document.querySelectorAll('.folder-item').forEach(folder => {
        folder.addEventListener('click', function() {
            const folderName = this.dataset.folder;
            openFolder(folderName);
        });
    });
    
    document.getElementById('back-to-folders').addEventListener('click', function() {
        document.getElementById('folder-view').style.display = 'flex';
        document.getElementById('images-view').style.display = 'none';
        
        // Destroy existing lightbox
        if (lightbox) {
            lightbox.destroy();
        }
    });
}

// Open folder and display images
function openFolder(folderName) {
    currentFolder = folderName;
    const images = galleryData[folderName] || [];
    
    document.getElementById('folder-view').style.display = 'none';
    document.getElementById('images-view').style.display = 'block';
    document.getElementById('current-folder-title').textContent = 
        folderName.charAt(0).toUpperCase() + folderName.slice(1);
    
    const galleryGrid = document.getElementById('gallery-grid');
    const noImages = document.getElementById('gallery-no-images');
    
    galleryGrid.innerHTML = '';
    
    if (images.length === 0) {
        noImages.style.display = 'block';
        return;
    }
    
    noImages.style.display = 'none';
    
    // Create gallery items
    images.forEach((image, index) => {
        const item = document.createElement('a');
        item.href = image.src;
        item.className = 'gallery-item glightbox';
        item.dataset.gallery = folderName;
        // item.dataset.glightbox = `description: ${image.description}`;
        
        item.innerHTML = `<img src="${image.thumb}" alt="${image.alt}">`;
        galleryGrid.appendChild(item);
    });
    
    // Initialize GLightbox with custom options
    lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        autoplayVideos: true,
        openEffect: 'zoom',
        closeEffect: 'fade',
        slideEffect: 'slide',
        moreLength: 0,
        zoomable: true,
        draggable: true,
        dragAutoSnap: true,
        dragToleranceX: 40,
        dragToleranceY: 65,
        preload: true,
        oneSlidePerOpen: false,
        keyboardNavigation: true,
        skin: 'clean',
        svg: {
            close: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>',
            next: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>',
            prev: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>'
        }
    });
}

// Reveal animation on scroll
function setupRevealAnimation() {
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
    
    // Trigger initial reveal
    window.dispatchEvent(new Event('scroll'));
}
</script>

<?php include 'includes/footer.php'; ?>