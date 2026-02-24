/* =========================================================
   🏗️ صفحة المشاريع - Projects Page
   ⚡ محسّن للأداء - Performance Optimized
   ========================================================= */

// =========================================================
// 🎯 Utility Functions
// =========================================================

function debounce(func, wait = 100) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function smoothAnimation(callback) {
    if ('requestAnimationFrame' in window) {
        return requestAnimationFrame(callback);
    }
    return setTimeout(callback, 16);
}

// =========================================================
// 📊 المتغيرات العامة
// =========================================================

let currentFilter = 'all';
let currentProject = null;
let currentImages = [];
let currentImageIndex = 0;

// العناصر الأساسية
const filterButtons = document.querySelectorAll('.filter-btn');
const projectCards = document.querySelectorAll('.project-card');
const projectsGrid = document.getElementById('projectsGrid');
const projectsEmpty = document.getElementById('projectsEmpty');
const projectModal = document.getElementById('projectModal');
const modalClose = document.getElementById('modalClose');
const modalTitle = document.getElementById('modalTitle');
const modalSubtitle = document.getElementById('modalSubtitle');
const modalGallery = document.getElementById('modalGallery');
const imageLightbox = document.getElementById('imageLightbox');
const lightboxImage = document.getElementById('lightboxImage');
const lightboxCounter = document.getElementById('lightboxCounter');
const lightboxClose = document.getElementById('lightboxClose');
const lightboxPrev = document.getElementById('lightboxPrev');
const lightboxNext = document.getElementById('lightboxNext');

// =========================================================
// 📱 تحسينات الهواتف المحمولة
// =========================================================

const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
const isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

// تحسين اللمس على الهواتف
function optimizeTouchInteractions() {
    if (!isTouch) return;
    
    document.body.classList.add('touch-device');
    
    // تحسين التمرير
    if ('scrollBehavior' in document.documentElement.style) {
        document.documentElement.style.scrollBehavior = 'smooth';
    }
    
    // منع zoom المزدوج على iOS
    let lastTouchEnd = 0;
    document.addEventListener('touchend', (e) => {
        const now = Date.now();
        if (now - lastTouchEnd <= 300) {
            e.preventDefault();
        }
        lastTouchEnd = now;
    }, false);
    
    console.log('✅ تم تحسين التفاعلات اللمسية');
}

// =========================================================
// 🚀 التهيئة
// =========================================================

document.addEventListener('DOMContentLoaded', () => {
    console.log(`📱 نوع الجهاز: ${isMobile ? 'موبايل' : 'كمبيوتر'}`);
    console.log(`👆 دعم اللمس: ${isTouch ? 'نعم' : 'لا'}`);
    
    // تحسينات خاصة بالهواتف
    if (isMobile || isTouch) {
        optimizeTouchInteractions();
    }
    
    initFilters();
    initProjectCards();
    initModalControls();
    initLightboxControls();
    initRevealAnimations();
});

// =========================================================
// 🎛️ Filters
// =========================================================

function initFilters() {
    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');
            setActiveFilter(filter, btn);
        });
    });
}

function setActiveFilter(filter, clickedBtn) {
    // تحديث الأزرار
    filterButtons.forEach(btn => btn.classList.remove('active'));
    clickedBtn.classList.add('active');
    
    currentFilter = filter;
    
    // تصفية المشاريع
    filterProjects(filter);
}

function filterProjects(filter) {
    let visibleCount = 0;
    
    projectCards.forEach(card => {
        const category = card.getAttribute('data-category');
        const shouldShow = filter === 'all' || category === filter;
        
        if (shouldShow) {
            card.classList.remove('hidden');
            visibleCount++;
            
            // أنيميشن الظهور
            smoothAnimation(() => {
                card.style.opacity = '0';
                card.style.transform = 'scale(0.9)';
                
                setTimeout(() => {
                    card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                }, 50);
            });
        } else {
            card.classList.add('hidden');
        }
    });
    
    // إظهار/إخفاء Empty State
    if (visibleCount === 0) {
        projectsEmpty.style.display = 'block';
        projectsGrid.style.display = 'none';
    } else {
        projectsEmpty.style.display = 'none';
        projectsGrid.style.display = 'grid';
    }
}

// =========================================================
// 🖼️ Project Cards
// =========================================================

function initProjectCards() {
    projectCards.forEach(card => {
        const viewBtn = card.querySelector('.view-project-btn');
        const projectData = card.querySelector('.project-data');
        
        if (!projectData) return;
        
        const project = JSON.parse(projectData.textContent);
        
        // عند النقر على البطاقة أو الزر
        const openProject = (e) => {
            e.preventDefault();
            e.stopPropagation();
            openProjectModal(project);
        };
        
        if (viewBtn) {
            viewBtn.addEventListener('click', openProject);
        }
        
        card.addEventListener('click', (e) => {
            if (!e.target.closest('.view-project-btn')) {
                openProject(e);
            }
        });
    });
}

// =========================================================
// 🎬 Project Modal
// =========================================================

function openProjectModal(project) {
    currentProject = project;
    currentImages = project.images || [];
    currentImageIndex = 0;
    
    // تحديث العنوان والوصف
    modalTitle.textContent = project.title;
    modalSubtitle.textContent = project.description;
    
    // تحميل الصور
    loadModalGallery(currentImages);
    
    // فتح المودال
    smoothAnimation(() => {
        projectModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
}

function loadModalGallery(images) {
    modalGallery.innerHTML = '';
    
    if (images.length === 0) {
        modalGallery.innerHTML = '<p style="text-align: center; color: var(--text-soft);">لا توجد صور متاحة</p>';
        return;
    }
    
    images.forEach((imageSrc, index) => {
        const galleryItem = document.createElement('div');
        galleryItem.className = 'modal-gallery-item';
        galleryItem.setAttribute('data-index', index);
        
        galleryItem.innerHTML = `
            <img src="${imageSrc}" alt="${currentProject.title} - صورة ${index + 1}" loading="lazy">
            <div class="modal-gallery-item-overlay">
                <div class="modal-gallery-item-icon">🔍</div>
            </div>
        `;
        
        // فتح الصورة في Lightbox
        galleryItem.addEventListener('click', () => {
            openLightbox(index);
        });
        
        modalGallery.appendChild(galleryItem);
    });
}

function closeProjectModal() {
    projectModal.classList.remove('active');
    document.body.style.overflow = '';
    
    setTimeout(() => {
        modalGallery.innerHTML = '';
        currentProject = null;
        currentImages = [];
    }, 400);
}

// =========================================================
// 🔍 Image Lightbox
// =========================================================

function openLightbox(imageIndex) {
    currentImageIndex = imageIndex;
    updateLightboxImage();
    
    smoothAnimation(() => {
        imageLightbox.classList.add('active');
    });
}

function closeLightbox() {
    imageLightbox.classList.remove('active');
}

function updateLightboxImage() {
    if (currentImages.length === 0) return;
    
    const imageSrc = currentImages[currentImageIndex];
    lightboxImage.style.opacity = '0';
    
    smoothAnimation(() => {
        lightboxImage.src = imageSrc;
        lightboxImage.alt = `${currentProject.title} - صورة ${currentImageIndex + 1}`;
        lightboxCounter.textContent = `${currentImageIndex + 1} / ${currentImages.length}`;
        
        lightboxImage.onload = () => {
            smoothAnimation(() => {
                lightboxImage.style.opacity = '1';
            });
        };
    });
}

function prevImage() {
    smoothAnimation(() => {
        currentImageIndex = (currentImageIndex - 1 + currentImages.length) % currentImages.length;
        updateLightboxImage();
    });
}

function nextImage() {
    smoothAnimation(() => {
        currentImageIndex = (currentImageIndex + 1) % currentImages.length;
        updateLightboxImage();
    });
}

// =========================================================
// 🎮 Controls
// =========================================================

function initModalControls() {
    // إغلاق المودال
    modalClose.addEventListener('click', closeProjectModal);
    
    projectModal.addEventListener('click', (e) => {
        if (e.target === projectModal || e.target.classList.contains('modal-overlay')) {
            closeProjectModal();
        }
    });
    
    // إغلاق بزر Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (imageLightbox.classList.contains('active')) {
                closeLightbox();
            } else if (projectModal.classList.contains('active')) {
                closeProjectModal();
            }
        }
    });
}

function initLightboxControls() {
    // إغلاق Lightbox
    lightboxClose.addEventListener('click', closeLightbox);
    
    imageLightbox.addEventListener('click', (e) => {
        if (e.target === imageLightbox || e.target.classList.contains('lightbox-overlay')) {
            closeLightbox();
        }
    });
    
    // أزرار التنقل
    lightboxPrev.addEventListener('click', (e) => {
        e.stopPropagation();
        nextImage(); // الصورة التالية (في العربية)
    });
    
    lightboxNext.addEventListener('click', (e) => {
        e.stopPropagation();
        prevImage(); // الصورة السابقة (في العربية)
    });
    
    // التنقل بلوحة المفاتيح
    const handleKeyNavigation = debounce((e) => {
        if (!imageLightbox.classList.contains('active')) return;
        
        if (e.key === 'ArrowRight') {
            prevImage();
        } else if (e.key === 'ArrowLeft') {
            nextImage();
        }
    }, 200);
    
    document.addEventListener('keydown', handleKeyNavigation);
    
    // التنقل بالسوايب
    let touchStartX = 0;
    let touchEndX = 0;
    
    imageLightbox.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    imageLightbox.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                nextImage(); // سوايب لليسار = التالية
            } else {
                prevImage(); // سوايب لليمين = السابقة
            }
        }
    }
}

// =========================================================
// ✨ Reveal Animations
// =========================================================

function initRevealAnimations() {
    const revealElements = document.querySelectorAll('.reveal');
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    revealElements.forEach(element => {
        revealObserver.observe(element);
    });
}

console.log('✅ صفحة المشاريع جاهزة!');

