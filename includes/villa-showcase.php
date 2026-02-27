<?php
/* ================================
   1) دالة قراءة الصور من المجلد
   ================================ */
function getProjectImages($category, $projectNumber) {

    // نحدد مسار الـ URL + المسار الفعلي حسب نوع التصنيف
    if ($category === 'befor_after_images' || $category === 'before_after_images') {
        // قسم قبل/بعد مثل ما هو مستخدم في projects.php
        $basePath = "assets/befor_after_images/{$projectNumber}/";
    } else {
        // باقي الأقسام (فلل، غرف، حمامات، ممرات)
        $basePath = "assets/project_img/{$category}/{$projectNumber}/";
    }

    // ملف الإنكلود داخل includes/ لذلك نطلع مستوى واحد للأعلى
    $fullPath = __DIR__ . "/../" . $basePath;

    if (!is_dir($fullPath)) {
        return [];
    }

    $images = [];
    $files  = scandir($fullPath);

    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg','jpeg','png','gif','webp'])) {
                // هذا المسار الذي يذهب للمتصفح
                $images[] = $basePath . $file;
            }
        }
    }

    return $images;
}

/* ================================
   2) قائمة مشاريع سكشن العيّنة
   ================================ */
$villaShowcase = [

    // فلل
    [
        'title'         => 'فيلا فاخرة بتشطيبات راقية',
        'category'      => 'فلل',
        'category_slug' => 'fela_imag',
        'project_number'=> '1',
        'description'   => 'تنفيذ تشطيبات داخلية وخارجية بمستوى راقٍ يعكس الفخامة والأناقة',
    ],

    // غرف
    [
        'title'         => 'غرف نوم عصرية',
        'category'      => 'غرف',
        'category_slug' => 'room_image',
        'project_number'=> '1',
        'description'   => 'تصميم غرف نوم راقية مع ديكورات عصرية وإضاءة مدروسة',
    ],
    [
        'title'         => 'غرف معيشة أنيقة',
        'category'      => 'غرف',
        'category_slug' => 'room_image',
        'project_number'=> '2',
        'description'   => 'مساحات معيشة واسعة مع ديكورات عصرية وألوان هادئة',
    ],
    [
        'title'         => 'غرفة نوم رئيسية فاخرة',
        'category'      => 'غرف',
        'category_slug' => 'room_image',
        'project_number'=> '3',
        'description'   => 'الغرفة تتمحور حول سرير فاخر مع لوح خلفي مخملي وإضاءة ناعمة.',
    ],
    [
        'title'         => 'غرفة نوم عصرية بتصميم أنيق وهادئ',
        'category'      => 'غرف',
        'category_slug' => 'room_image',
        'project_number'=> '4',
        'description'   => 'الغرفة تتميز بأجواء راقية تجمع بين الألوان الهادئة.',
    ],

    // حمّامات
    [
        'title'         => 'حمامات فاخرة',
        'category'      => 'حمامات',
        'category_slug' => 'pathroom_image',
        'project_number'=> '1',
        'description'   => 'حمامات بتصاميم عصرية مع أفضل التجهيزات والمواد.',
    ],
    [
        'title'         => 'حمامات راقية',
        'category'      => 'حمامات',
        'category_slug' => 'pathroom_image',
        'project_number'=> '2',
        'description'   => 'تصاميم أنيقة تجمع بين الأناقة والعملية.',
    ],
    [
        'title'         => 'حمامات عصرية',
        'category'      => 'حمامات',
        'category_slug' => 'pathroom_image',
        'project_number'=> '3',
        'description'   => 'حمامات بتصاميم حديثة مع لمسات جمالية راقية.',
    ],
    [
        'title'         => 'حمامات فاخرة',
        'category'      => 'حمامات',
        'category_slug' => 'pathroom_image',
        'project_number'=> '4',
        'description'   => 'تصاميم فاخرة مع استخدام أفضل المواد والتجهيزات.',
    ],
    [
        'title'         => 'دورات مياه أنيقة',
        'category'      => 'حمامات',
        'category_slug' => 'pathroom_image',
        'project_number'=> '5',
        'description'   => 'تصاميم عملية وأنيقة مع استغلال أمثل للمساحة.',
    ],

    // ممرات
    [
        'title'         => 'ممرات واسعة',
        'category'      => 'ممرات',
        'category_slug' => 'path_image',
        'project_number'=> '1',
        'description'   => 'ممرات فسيحة مع إضاءة مدروسة وديكورات عصرية.',
    ],
    [
        'title'         => 'ممرات أنيقة',
        'category'      => 'ممرات',
        'category_slug' => 'path_image',
        'project_number'=> '2',
        'description'   => 'ممرات بتصاميم عصرية مع لمسات جمالية راقية.',
    ],

    // قبل / بعد
    [
        'title'         => 'مشروع واجهة — قبل / بعد',
        'category'      => 'قبل/بعد',
        'category_slug' => 'befor_after_images', // اسم المجلد في assets
        'project_number'=> '1',
        'description'   => 'مشروع تطوير واجهة سكنية يظهر الفرق الحقيقي بين قبل وبعد التنفيذ.',
    ],
    [
        'title'         => 'مشروع داخلي — قبل / بعد',
        'category'      => 'قبل/بعد',
        'category_slug' => 'befor_after_images',
        'project_number'=> '2',
        'description'   => 'تطوير مساحة داخلية كاملة وتحويلها من شكل خام إلى تصميم فاخر.',
    ],
    [
        'title'         => 'مدخل رئيسي — قبل / بعد',
        'category'      => 'قبل/بعد',
        'category_slug' => 'befor_after_images',
        'project_number'=> '3',
        'description'   => 'ترميم وتحسين المدخل الرئيسي وإظهار التغيير بوضوح.',
    ],
];

/* ========== إضافة الصور من المجلدات ========== */
foreach ($villaShowcase as $i => $item) {
    $villaShowcase[$i]['images'] = getProjectImages(
        $item['category_slug'],
        $item['project_number']
    );
}
?>

<section class="reveal villa-showcase">
    <div class="section-wrapper">

        <h2 class="section-title">من أعمال التشطيبات والديكور</h2>

        <p class="section-subtitle">
            واجهات، غرف، حمّامات، ممرات، وتصاميم داخلية متنوعة، مع لقطات
            <strong>قبل وبعد</strong> تعكس جودة التنفيذ في مختلف المشاريع.
        </p>

        <div class="villa-grid">
            <?php foreach ($villaShowcase as $item): ?>
                <?php if (!empty($item['images'])): ?>

                    <?php
                        switch ($item['category']) {
                            case 'فلل':     $tag = 'واجهة ومداخل — لقطات متتابعة'; break;
                            case 'غرف':     $tag = 'تصميم داخلي — قبل / بعد';    break;
                            case 'حمامات': $tag = 'تفاصيل حمّام — صور حقيقية';   break;
                            case 'ممرات':  $tag = 'ممرات مضاءة — لقطات متعددة';  break;
                            case 'قبل/بعد':$tag = 'قبل / بعد — إبراز الفرق';      break;
                            default:        $tag = 'تبديل تلقائي بين عدة لقطات';
                        }
                    ?>

                    <div class="villa-card"
                        data-images='<?php echo json_encode($item["images"], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>'>

                        <div class="villa-label">
                            <?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?>
                        </div>

                        <div class="villa-img-wrapper">
                            <button class="villa-img-arrow villa-img-prev" type="button">›</button>
                            <div class="villa-img"></div>
                            <button class="villa-img-arrow villa-img-next" type="button">‹</button>
                        </div>

                        <div class="villa-tag <?php echo ($item['category']==='قبل/بعد' ? 'villa-tag-beforeafter' : ''); ?>">
                            <?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?>
                        </div>

                        <div class="villa-caption">
                            <?php echo htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8'); ?>
                        </div>

                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <div class="villa-nav">
            <button id="prevCards" class="villa-nav-btn" type="button">›</button>
            <button id="nextCards" class="villa-nav-btn" type="button">‹</button>
        </div>
    </div>
</section>


<!-- 🔥 اللايت بوكس هنا خارج السكشن -->
<div class="villa-lightbox" id="villaLightbox">
    <div class="villa-lightbox-overlay"></div>

    <button class="villa-lightbox-close" type="button">×</button>
    <button class="villa-lightbox-nav villa-lightbox-prev" type="button">›</button>
    <button class="villa-lightbox-nav villa-lightbox-next" type="button">‹</button>

    <div class="villa-lightbox-content">
        <img id="villaLightboxImage" src="" alt="">
        <div class="villa-lightbox-caption">
            <span id="villaLightboxTitle"></span>
            <span id="villaLightboxCounter"></span>
        </div>
    </div>
</div>
