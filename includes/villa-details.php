<?php
// villa-details.php

// نحدد رقم الفلة من الرابط مثل: villa-details.php?villa=1
$villaNumber = isset($_GET['villa']) ? (int)$_GET['villa'] : 1;

/* ============================================
   1) دالة جلب صور قسم معيّن من نفس الفلّة
   ============================================ */
function getVillaSectionImages($villaNumber, $folderName) {

    $basePath = "assets/project_img/fela_imag/{$villaNumber}/{$folderName}/";
    $fullPath = __DIR__ . "/" . $basePath;  // هنا الملف في الجذر (عدّل المسار لو الصفحة داخل مجلد)

    if (!is_dir($fullPath)) {
        return [];
    }

    $images = [];
    $files  = scandir($fullPath);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }

        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg','jpeg','png','gif','webp'])) {
            $images[] = $basePath . $file;
        }
    }

    return $images;
}

/* ============================================
   2) إعداد بيانات سكشن الفلّة
   ============================================ */

$villaShowcase = [

    [
        'title'       => 'الواجهة والخارجية',
        'folder'      => 'الخارجية',
        'tag'         => 'واجهات ومداخل — لقطات متتابعة',
        'description' => 'واجهات ومداخل بتشطيبات فاخرة تعكس أسلوب معماري راقٍ.'
    ],

    [
        'title'       => 'التشطيبات الداخلية',
        'folder'      => 'الداخلية',
        'tag'         => 'تصميم داخلي — لقطات متعددة',
        'description' => 'تشطيبات داخلية فاخرة مع توزيع إضاءة وديكورات مدروسة.'
    ],

    [
        'title'       => 'المطابخ',
        'folder'      => 'المطبخ',
        'tag'         => 'مطابخ عصرية — صور حقيقية',
        'description' => 'مطابخ بتشطيبات حديثة وخامات عالية الجودة وتفاصيل عملية.'
    ],

    [
        'title'       => 'الحمامات',
        'folder'      => 'الحمام',
        'tag'         => 'تفاصيل حمّام — صور حقيقية',
        'description' => 'حمامات بتصاميم راقية تجمع بين الفخامة والراحة اليومية.'
    ],

    [
        'title'       => 'السطح والمساحات العلوية',
        'folder'      => 'السطح',
        'tag'         => 'سطح واستغلال مساحات خارجية',
        'description' => 'استغلال سطح الفلّة كمساحة جلوس واسترخاء بتشطيبات أنيقة.'
    ],

];

/* ============================================
   3) جلب الصور لكل بطاقة من مجلد الفلة
   ============================================ */
foreach ($villaShowcase as $i => $item) {
    $villaShowcase[$i]['images'] = getVillaSectionImages(
        $villaNumber,
        $item['folder']
    );
}
?>

<!-- هنا تقدر تضيف هيدر موقعك (include header.php) -->

<section class="reveal villa-showcase">
    <div class="section-wrapper">

        <h2 class="section-title">تفاصيل الفلّة رقم <?php echo htmlspecialchars($villaNumber, ENT_QUOTES, 'UTF-8'); ?></h2>

        <p class="section-subtitle">
            عرض الأقسام المختلفة لنفس الفلّة: واجهات، داخلية، مطابخ، حمّامات، وأسقف علوية.
        </p>

        <div class="villa-grid">
            <?php foreach ($villaShowcase as $item): ?>
                <?php if (!empty($item['images'])): ?>

                    <div class="villa-card"
                        data-images='<?php echo json_encode($item["images"], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>'>

                        <div class="villa-label">
                            <?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?>
                        </div>

                        <div class="villa-img-wrapper">
                            <button class="villa-img-arrow villa-img-prev" type="button">‹</button>
                            <div class="villa-img"></div>
                            <button class="villa-img-arrow villa-img-next" type="button">›</button>
                        </div>

                        <div class="villa-tag">
                            <?php echo htmlspecialchars($item['tag'], ENT_QUOTES, 'UTF-8'); ?>
                        </div>

                        <div class="villa-caption">
                            <?php echo htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8'); ?>
                        </div>

                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- اللايت بوكس نفس اللي عندك في الصفحة الرئيسية (انسخه هنا لو تحتاجه) -->
<!-- اللايت بوكس لعرض الصور بشكل مكبّر -->
<div class="villa-lightbox" id="villaLightbox">
    <div class="villa-lightbox-overlay"></div>

    <button class="villa-lightbox-close" type="button">×</button>
    <button class="villa-lightbox-nav villa-lightbox-prev" type="button">‹</button>
    <button class="villa-lightbox-nav villa-lightbox-next" type="button">›</button>

    <div class="villa-lightbox-content">
        <img id="villaLightboxImage" src="" alt="">
        <div class="villa-lightbox-caption">
            <span id="villaLightboxTitle"></span>
            <span id="villaLightboxCounter"></span>
        </div>
    </div>
</div>
