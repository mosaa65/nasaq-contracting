<?php
$pageTitle = "مشاريعنا";
$pageExtraCss = '<link rel="stylesheet" href="assets/css/projects.css">';
$pageExtraJs = '<script src="assets/js/projects.js" defer></script>';
include 'includes/header.php';

// دالة لجلب الصور من مجلد المشروع
function getProjectImages($category, $projectNumber) {
    $basePath = "assets/project_img/{$category}/{$projectNumber}/";
    $fullPath = __DIR__ . "/" . $basePath;
    
    if (!is_dir($fullPath)) {
        return [];
    }
    
    $images = [];
    $files = scandir($fullPath);
    
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                $images[] = $basePath . $file;
            }
        }
    }
    
    return $images;
}

// بيانات المشاريع
$projects = [
    [
        'id' => 'villa-1',
        'title' => 'فيلا فاخرة بتشطيبات راقية',
        'category' => 'فلل',
        'category_slug' => 'fela_imag',
        'project_number' => '1',
        'description' => 'تنفيذ تشطيبات داخلية وخارجية بمستوى راقٍ يعكس الفخامة والأناقة',
        'images' => getProjectImages('fela_imag', '1')
    ],
    [
        'id' => 'room-1',
        'title' => 'غرف نوم عصرية',
        'category' => 'غرف',
        'category_slug' => 'room_image',
        'project_number' => '1',
        'description' => 'تصميم غرف نوم راقية مع ديكورات عصرية وإضاءة مدروسة',
        'images' => getProjectImages('room_image', '1')
    ],
    [
        'id' => 'room-2',
        'title' => 'غرف معيشة أنيقة',
        'category' => 'غرف',
        'category_slug' => 'room_image',
        'project_number' => '2',
        'description' => 'مساحات معيشة واسعة مع ديكورات عصرية وألوان هادئة',
        'images' => getProjectImages('room_image', '2')
    ],
    [
        'id' => 'room-3',
        'title' => 'غرفة نوم رئيسية فاخرة',
        'category' => 'غرف',
        'category_slug' => 'room_image',
        'project_number' => '3',
        'description' => 'الغرفة تتمحور حول سرير فاخر ذو لوح خلفي من القماش المخملي باللون الأخضر الداكن...',
        'images' => getProjectImages('room_image', '3')
    ],
    [
        'id' => 'room-4',
        'title' => 'غرفة نوم عصرية بتصميم أنيق وهادئ',
        'category' => 'غرف',
        'category_slug' => 'room_image',
        'project_number' => '4',
        'description' => 'الغرفة تتميز بأجواء راقية تجمع بين الألوان الهادئة...',
        'images' => getProjectImages('room_image', '4')
    ],
    [
        'id' => 'bathroom-1',
        'title' => 'حمامات فاخرة',
        'category' => 'حمامات',
        'category_slug' => 'pathroom_image',
        'project_number' => '1',
        'description' => 'حمامات بتصاميم عصرية مع أفضل التجهيزات والمواد',
        'images' => getProjectImages('pathroom_image', '1')
    ],
    [
        'id' => 'bathroom-2',
        'title' => 'حمامات راقية',
        'category' => 'حمامات',
        'category_slug' => 'pathroom_image',
        'project_number' => '2',
        'description' => 'تصاميم أنيقة تجمع بين الأناقة والعملية',
        'images' => getProjectImages('pathroom_image', '2')
    ],
    [
        'id' => 'bathroom-3',
        'title' => 'حمامات عصرية',
        'category' => 'حمامات',
        'category_slug' => 'pathroom_image',
        'project_number' => '3',
        'description' => 'حمامات بتصاميم حديثة مع لمسات جمالية راقية',
        'images' => getProjectImages('pathroom_image', '3')
    ],
    [
        'id' => 'bathroom-4',
        'title' => 'حمامات فاخرة',
        'category' => 'حمامات',
        'category_slug' => 'pathroom_image',
        'project_number' => '4',
        'description' => 'تصاميم فاخرة مع استخدام أفضل المواد والتجهيزات',
        'images' => getProjectImages('pathroom_image', '4')
    ],
    [
        'id' => 'bathroom-5',
        'title' => 'دورات مياه أنيقة',
        'category' => 'حمامات',
        'category_slug' => 'pathroom_image',
        'project_number' => '5',
        'description' => 'تصاميم عملية وأنيقة مع استغلال أمثل للمساحة',
        'images' => getProjectImages('pathroom_image', '5')
    ],
    [
        'id' => 'corridor-1',
        'title' => 'ممرات واسعة',
        'category' => 'ممرات',
        'category_slug' => 'path_image',
        'project_number' => '1',
        'description' => 'ممرات فسيحة مع إضاءة مدروسة وديكورات عصرية',
        'images' => getProjectImages('path_image', '1')
    ],
    [
        'id' => 'corridor-2',
        'title' => 'ممرات أنيقة',
        'category' => 'ممرات',
        'category_slug' => 'path_image',
        'project_number' => '2',
        'description' => 'تصاميم ممرات عصرية مع لمسات جمالية راقية',
        'images' => getProjectImages('path_image', '2')
    ],

    /*  
    ╔══════════════════════════════════════════════╗
    ║         🔥 إضافة مشاريع التحولات 🔥        ║
    ╚══════════════════════════════════════════════╝
    */

    [
        'id' => 'beforeafter-1',
        'title' => 'تحول واجهة سكنية',
        'category' => 'تحولات',
        'category_slug' => 'before_after_images',
        'project_number' => '1',
        'description' => 'تطوير واجهة سكنية من حالة أولية بسيطة إلى نتيجة نهائية أكثر فخامة وتنظيماً.',
        'images' => [
            "assets/befor_after_images/1/IMG_1408.JPG",
            "assets/befor_after_images/1/IMG_1407.JPG"
        ]
    ],
    [
        'id' => 'beforeafter-2',
        'title' => 'تحول مساحة داخلية',
        'category' => 'تحولات',
        'category_slug' => 'before_after_images',
        'project_number' => '2',
        'description' => 'إعادة صياغة مساحة داخلية كاملة بخامات أرقى وتوزيع أكثر اتزاناً وانسجاماً.',
        'images' => [
            "assets/befor_after_images/2/IMG_1406.JPG",
            "assets/befor_after_images/2/IMG_1405.JPG"
        ]
    ],
    [
        'id' => 'beforeafter-3',
        'title' => 'تحول المدخل الرئيسي',
        'category' => 'تحولات',
        'category_slug' => 'before_after_images',
        'project_number' => '3',
        'description' => 'معالجة المدخل الرئيسي بخامات وإضاءة وتفاصيل تمنحه حضوراً أقوى وهوية أوضح.',
        'images' => [
            "assets/befor_after_images/3/IMG_1410.JPG",
            "assets/befor_after_images/3/IMG_1409.JPG"
        ]
    ]
];

// إزالة المشاريع التي لا تحتوي على صور
$projects = array_filter($projects, function($project) {
    return !empty($project['images']);
});
?>

<!-- Hero Section -->
<section class="reveal projects-hero">
    <div class="section-wrapper">
        <div class="projects-hero-content">
            <span class="hero-badge">🏗️ معرض المشاريع</span>
            <h1 class="hero-title">مشاريعنا المتميزة</h1>
            <p class="hero-description">
                نستعرض مجموعة من مشاريعنا المنفذة في مجالات متنوعة، وكل مشروع يعكس
                فلسفة <strong>نَسَق</strong> في التنظيم، جودة الخامات، ودقة التنفيذ.
            </p>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="reveal projects-section">
    <div class="section-wrapper">

        <!-- Filters -->
        <div class="projects-filters">
            <button class="filter-btn active" data-filter="all">
                <span>الكل</span>
                <span class="filter-count"><?php echo count($projects); ?></span>
            </button>
            <button class="filter-btn" data-filter="فلل">
                <span>فلل</span>
                <span class="filter-count"><?php echo count(array_filter($projects, fn($p) => $p['category'] === 'فلل')); ?></span>
            </button>
            <button class="filter-btn" data-filter="غرف">
                <span>غرف</span>
                <span class="filter-count"><?php echo count(array_filter($projects, fn($p) => $p['category'] === 'غرف')); ?></span>
            </button>
            <button class="filter-btn" data-filter="حمامات">
                <span>حمامات</span>
                <span class="filter-count"><?php echo count(array_filter($projects, fn($p) => $p['category'] === 'حمامات')); ?></span>
            </button>
            <button class="filter-btn" data-filter="ممرات">
                <span>ممرات</span>
                <span class="filter-count"><?php echo count(array_filter($projects, fn($p) => $p['category'] === 'ممرات')); ?></span>
            </button>

            <!-- فلتر التحولات -->
            <button class="filter-btn" data-filter="تحولات">
                <span>تحولات</span>
                <span class="filter-count"><?php echo count(array_filter($projects, fn($p) => $p['category'] === 'تحولات')); ?></span>
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="projects-grid" id="projectsGrid">
            <?php foreach ($projects as $project): ?>
                <div class="project-card" 
                    data-category="<?php echo htmlspecialchars($project['category']); ?>" 
                    data-project-id="<?php echo htmlspecialchars($project['id']); ?>">

                    <div class="project-image-wrapper">
                        <?php if (!empty($project['images'])): ?>
                            <img 
                                src="<?php echo htmlspecialchars($project['images'][0]); ?>" 
                                alt="<?php echo htmlspecialchars($project['title']); ?>"
                                class="project-main-image"
                                loading="lazy"
                            >
                        <?php endif; ?>

                        <div class="project-overlay">
                            <div class="project-info">
                                <span class="project-category"><?php echo htmlspecialchars($project['category']); ?></span>
                                <span class="project-images-count">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                    <?php echo count($project['images']); ?> صورة
                                </span>
                            </div>

                            <button class="view-project-btn">
                                <span>عرض المشروع</span>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="project-content">
                        <h3 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p class="project-description"><?php echo htmlspecialchars($project['description']); ?></p>
                    </div>

                    <!-- بيانات المشروع -->
                    <div class="project-data" style="display: none;">
                        <?php echo json_encode($project, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <!-- Empty State -->
        <div class="projects-empty" id="projectsEmpty" style="display: none;">
            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="M21 21l-4.35-4.35"></path>
            </svg>
            <h3>لا توجد مشاريع في هذا التصنيف</h3>
            <p>جرب تصنيف آخر لعرض المزيد من المشاريع</p>
        </div>
    </div>
</section>

<!-- Project Modal -->
<div class="project-modal" id="projectModal">
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <button class="modal-close" id="modalClose">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        
        <div class="modal-header">
            <h2 class="modal-title" id="modalTitle">عنوان المشروع</h2>
            <p class="modal-subtitle" id="modalSubtitle">وصف المشروع</p>
        </div>

        <div class="modal-gallery" id="modalGallery"></div>
    </div>
</div>

<!-- Image Lightbox -->
<div class="image-lightbox" id="imageLightbox">
    <div class="lightbox-overlay"></div>
    <button class="lightbox-close" id="lightboxClose">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </button>
    <button class="lightbox-nav lightbox-prev" id="lightboxPrev">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
    </button>
    <button class="lightbox-nav lightbox-next" id="lightboxNext">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </button>
    <div class="lightbox-content">
        <img src="" alt="" id="lightboxImage">
        <div class="lightbox-counter" id="lightboxCounter">1 / 1</div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
