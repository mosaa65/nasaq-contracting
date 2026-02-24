<?php
$pageTitle = "خدماتنا - معرض الأعمال المتميزة";
$pageExtraCss = '
    <link rel="stylesheet" href="assets/css/services-gallery.css">
';
$pageExtraJs = '<script src="assets/js/services-gallery.js" defer></script>';
include 'includes/header.php';

// صور قسم قبل / بعد - نفس مسار صفحة المشاريع
$beforeAfterImages = [
    "assets/befor_after_images/1/IMG_1407.JPG",
    "assets/befor_after_images/1/IMG_1408.JPG",
    "assets/befor_after_images/2/IMG_1405.JPG",
    "assets/befor_after_images/2/IMG_1406.JPG",
    "assets/befor_after_images/3/IMG_1409.JPG",
    "assets/befor_after_images/3/IMG_1410.JPG"
];
?>
<section class="hero hero-slider services-hero-slider">
    <div class="hero-bg">
        <div class="hero-slide active" style="background-image:url('assets/image_services/Architectural_design.jpg');"></div>
        <div class="hero-slide" style="background-image:url('assets/image_services/Halls.JPG');"></div>
        <div class="hero-slide" style="background-image:url('assets/image_services/Rooms.JPG');"></div>
        <div class="hero-slide" style="background-image:url('assets/image_services/Baths.JPG');"></div>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-kicker">
            تصميم معماري · غرف · حمامات · دورات مياه · صالات
        </div>

        <h1 class="hero-title">
            خدماتنا <span>المتميزة</span><br>
            من <span>التصميم</span> إلى <span>التنفيذ</span>
        </h1>

        <p class="hero-subtitle">
            نقدم لكم مجموعة شاملة من الخدمات في مجال التصميم الداخلي والتشطيبات، 
            حيث نحول رؤيتكم إلى واقع ملموس بأعلى معايير الجودة والإبداع.
        </p>

        <div class="hero-actions">
            <button class="btn-primary scroll-to-services">استعرض الخدمات</button>
            <button class="btn-outline" onclick="window.location.href='contact.php'">اطلب استشارة مجانية</button>
        </div>

        <div class="hero-badges">
            <span>تصاميم إبداعية</span>
            <span>جودة تنفيذ عالية</span>
            <span>خبرة واحترافية</span>
        </div>
    </div>
</section>

<section class="reveal services-gallery-section" id="services">
    <div class="section-wrapper">
        <div class="services-gallery-grid">
            
            <!-- خدمة 1: فلل -->
            <div class="service-item" data-service="architectural">
                <div class="service-image-wrapper">
                    <img src="assets/image_services/Architectural_design.jpg" class="service-main-image">
                    <div class="service-overlay">
                        <button class="view-gallery-btn">عرض المعرض</button>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">تشطيبات داخلية فاخرة للفلل</h3>
                    <p class="service-description">
                        نقدم حلول تصميم وتشطيب داخلي متكاملة للفلل السكنية الراقية.
                    </p>
                </div>
            </div>

            <!-- خدمة 2: الغرف -->
            <div class="service-item" data-service="rooms">
                <div class="service-image-wrapper">
                    <img src="assets/image_services/Rooms.JPG" class="service-main-image">
                    <div class="service-overlay">
                        <button class="view-gallery-btn">عرض المعرض</button>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">تصميم وتنسيق الغرف</h3>
                    <p class="service-description">
                        غرف عصرية أنيقة بتوزيع مثالي للأثاث والإضاءة.
                    </p>
                </div>
            </div>

            <!-- خدمة 3: الحمامات -->
            <div class="service-item" data-service="baths">
                <div class="service-image-wrapper">
                    <img src="assets/image_services/Baths.JPG" class="service-main-image">
                    <div class="service-overlay">
                        <button class="view-gallery-btn">عرض المعرض</button>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">تصميم الحمامات الفاخرة</h3>
                    <p class="service-description">
                        حمامات بتصاميم تجمع بين الأناقة والوظيفة.
                    </p>
                </div>
            </div>

            <!-- خدمة 4: دورة المياه -->
            <div class="service-item" data-service="toilet">
                <div class="service-image-wrapper">
                    <img src="assets/image_services/For a toilet (bathroom).JPG" class="service-main-image">
                    <div class="service-overlay">
                        <button class="view-gallery-btn">عرض المعرض</button>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">تشطيب دورات المياه</h3>
                    <p class="service-description">
                        تشطيب عملي وأنيق لدورات المياه.
                    </p>
                </div>
            </div>

            <!-- خدمة 5: الصالات -->
            <div class="service-item" data-service="halls">
                <div class="service-image-wrapper">
                    <img src="assets/image_services/Halls.JPG" class="service-main-image">
                    <div class="service-overlay">
                        <button class="view-gallery-btn">عرض المعرض</button>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">تصميم الصالات</h3>
                    <p class="service-description">
                        صالات استقبال فسيحة بديكورات عصرية.
                    </p>
                </div>
            </div>

            <!-- خدمة 6: معرض قبل / بعد -->
            <div class="service-item" data-service="beforeafter">
                <div class="service-image-wrapper">
                    <img src="assets/befor_after_images/1/IMG_1408.JPG" class="service-main-image">
                    <div class="service-overlay">
                        <button class="view-gallery-btn">عرض المعرض</button>
                    </div>
                </div>

                <div class="service-content">
                    <h3 class="service-title">معرض قبل / بعد</h3>
                    <p class="service-description">
                        شاهد التحول الحقيقي قبل التنفيذ وبعده في مشاريعنا.
                    </p>
                </div>

                <!-- JSON الخاص بالصور -->
                <script type="application/json" class="service-data">
                    <?= json_encode($beforeAfterImages, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>
                </script>
            </div>

        </div>
    </div>
</section>

<!-- مودال المعرض -->
<div class="gallery-modal" id="galleryModal">
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <button class="modal-close" id="modalClose">×</button>
        <h2 class="modal-title" id="modalTitle">معرض الصور</h2>
        <p class="modal-subtitle" id="modalSubtitle">اضغط على أي صورة لعرضها</p>
        <div class="gallery-grid" id="galleryGrid"></div>
    </div>
</div>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <div class="lightbox-overlay"></div>
    <button class="lightbox-close" id="lightboxClose">×</button>
    <button class="lightbox-nav lightbox-prev" id="lightboxPrev">‹</button>
    <button class="lightbox-nav lightbox-next" id="lightboxNext">›</button>

    <div class="lightbox-content">
        <img id="lightboxImage">
        <div class="lightbox-counter" id="lightboxCounter"></div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
