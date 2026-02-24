
<?php
$serviceQuick = [

    // ============= فلل (واجهة) =============
    [
        'category_slug'  => 'fela_imag',
        'project_number' => '1',
        'label'          => 'واجهات & مداخل',
        'title'          => 'تصميم وتنفيذ الواجهات المعمارية',
        'text'           => 'تصميم واجهات عصرية بخطوط نظيفة ومواد فاخرة، من الرخام إلى الإنارة المخفية لصناعة واجهة قوية وهوية واضحة.'
    ],

    // ============= غرف (غرفة نوم) =============
    [
        'category_slug'  => 'room_image',
        'project_number' => '1',
        'label'          => 'تشطيبات داخلية',
        'title'          => 'تشطيب غرف نوم عصرية',
        'text'           => 'تنفيذ غرف نوم بألوان هادئة ولمسات خشبية وإضاءة جانبية، لخلق جو مريح وفاخر في المساحة.'
    ],

    // ============= غرف (غرفة معيشة) =============
    [
        'category_slug'  => 'room_image',
        'project_number' => '2',
        'label'          => 'ديكور داخلي',
        'title'          => 'تصميم غرف معيشة أنيقة',
        'text'           => 'تصميم غرف معيشة بتوزيع متوازن للإضاءة والأثاث يمنح المكان فخامة وحضوراً قوياً.'
    ],

    // ============= غرفة نوم رئيسية =============
    [
        'category_slug'  => 'room_image',
        'project_number' => '3',
        'label'          => 'تشطيب فاخر',
        'title'          => 'تنفيذ غرفة نوم رئيسية فاخرة',
        'text'           => 'غرفة رئيسية بظهر سرير مخملي ولمسات ناعمة تعطي عمقاً ورقياً للمساحة.'
    ],

    // ============= حمامات (عصري) =============
    [
        'category_slug'  => 'pathroom_image',
        'project_number' => '1',
        'label'          => 'حمامات',
        'title'          => 'تشطيب حمامات عصرية',
        'text'           => 'حمامات حديثة بخامات فاخرة وإضاءة هادئة تعكس النظافة والراحة والفخامة.'
    ],

    // ============= حمامات فاخرة =============
    [
        'category_slug'  => 'pathroom_image',
        'project_number' => '4',
        'label'          => 'حمامات فاخرة',
        'title'          => 'تصميم حمامات بلمسات رخامية',
        'text'           => 'استخدام الرخام والإضاءة الذكية لرفع مستوى الفخامة في الحمام بشكل واضح.'
    ],

    // ============= ممرات =============
    [
        'category_slug'  => 'path_image',
        'project_number' => '1',
        'label'          => 'ممرات',
        'title'          => 'تنفيذ ممرات بإضاءة مخفية',
        'text'           => 'تنسيق الممرات بإضاءة مخفية وألوان عصرية تمنح إحساساً بالاتساع والأناقة.'
    ],

    // ============= قبل/بعد – مداخل =============
    [
        'category_slug'  => 'before_after_images',
        'project_number' => '3',
        'label'          => 'Before / After',
        'title'          => 'تحويل المداخل الرئيسية',
        'text'           => 'إعادة تشكيل المدخل من خام إلى تصميم رخامي مضاء يترك انطباعاً قوياً عند الزوار.'
    ],

];
?>
<section class="services-quick">
    <div class="services-quick-inner">

        <div class="services-quick-header">
            <span class="sq-eyebrow">خدماتنا التنفيذية</span>
            <h2 class="service-quick-title">حلول معمارية وتشطيبية متكاملة</h2>
            <p class="sq-subtitle">
                خدمات متنوعة مستمدة من مشاريعنا الفعلية، مع عرض حي يعطي تصوراً واقعياً لجودة التنفيذ.
            </p>
        </div>

        <div class="services-grid">
            

            <?php foreach ($serviceQuick as $card): ?>

                <?php
                // مسار الويب للمجلد
                $webFolder = "assets/project_img/{$card['category_slug']}/{$card['project_number']}/";

                // مسار فعلي لقراءة الملفات (نفس حل المشاريع)
                $fsFolder = dirname(__DIR__) . '/' . $webFolder;

                $images = [];

                if (is_dir($fsFolder)) {
                    $files = scandir($fsFolder);

                    foreach ($files as $file) {
                        if ($file === '.' || $file === '..') continue;

                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        if (in_array($ext, ['jpg','jpeg','png','gif','webp'])) {
                            $images[] = $webFolder . $file;
                        }
                    }
                }

                // نتخطّى البطاقة إذا لم يوجد ولا صورة
                if (empty($images)) continue;

                // نربط كل الصور في data-images
                $dataImages = htmlspecialchars(implode(',', $images), ENT_QUOTES, 'UTF-8');
                ?>

                <article class="service-card" data-images="<?php echo $dataImages; ?>">

                    <div class="service-image-slider">
                        <div class="service-slide"></div>
                        <button class="slider-nav prev">&#10094;</button>
                        <button class="slider-nav next">&#10095;</button>
                        <div class="slider-dots"></div>
                    </div>

                    <div class="service-label">
                        <?php echo htmlspecialchars($card['label']); ?>
                    </div>

                    <h3 class="service-quick-title">
                        <?php echo htmlspecialchars($card['title']); ?>
                    </h3>

                    <p class="service-text">
                        <?php echo htmlspecialchars($card['text']); ?>
                    </p>
                </article>

            <?php endforeach; ?>

        </div>

    </div>
</section>