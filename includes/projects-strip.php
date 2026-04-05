<?php
$stripProjects = [

    // ============= فلل (واجهة) =============
    [
        'category_slug'  => 'fela_imag',
        'project_number' => '1',
        'title'          => 'واجهة فيلا حديثة',
        'tag_main'       => 'هوية معمارية',
        'tag_soft'       => 'فلل',
        'text'           => 'تشطيب واجهة فيلا بخطوط هندسية ومواد فاخرة تعكس فخامة التصميم وجودة التنفيذ.'
    ],

    // ============= غرف (غرفة نوم) =============
    [
        'category_slug'  => 'room_image',
        'project_number' => '1',
        'title'          => 'غرفة نوم عصرية',
        'tag_main'       => 'غرف نوم',
        'tag_soft'       => 'تشطيب داخلي',
        'text'           => 'تصميم غرفة نوم بألوان هادئة وإضاءة جانبية ناعمة تمنح شعوراً بالراحة والدفء.'
    ],

    // ============= غرف (غرفة معيشة) =============
    [
        'category_slug'  => 'room_image',
        'project_number' => '2',
        'title'          => 'غرفة معيشة أنيقة',
        'tag_main'       => 'غرف معيشة',
        'tag_soft'       => 'ديكور داخلي',
        'text'           => 'مساحة معيشة بتوزيع متناسق وإضاءة مخفية تزيد من فخامة المكان.'
    ],

    // ============= غرفة نوم رئيسية =============
    [
        'category_slug'  => 'room_image',
        'project_number' => '3',
        'title'          => 'غرفة نوم رئيسية فاخرة',
        'tag_main'       => 'غرف نوم',
        'tag_soft'       => 'تصميم فاخر',
        'text'           => 'غرفة تتمحور حول سرير فاخر وظهر مخملي يمنح عمقاً ورقياً للمساحة.'
    ],

    // ============= حمامات =============
    [
        'category_slug'  => 'pathroom_image',
        'project_number' => '1',
        'title'          => 'حمام بتصميم عصري',
        'tag_main'       => 'حمامات',
        'tag_soft'       => 'تشطيب راقٍ',
        'text'           => 'حمام معاصر بخامات عالية الجودة وإضاءة ناعمة تعكس الفخامة والراحة.'
    ],

    // ============= حمام فخم =============
    [
        'category_slug'  => 'pathroom_image',
        'project_number' => '4',
        'title'          => 'حمام فخم بتفاصيل رخامية',
        'tag_main'       => 'حمامات فاخرة',
        'tag_soft'       => 'رخام',
        'text'           => 'تشطيب حمام بلمسات رخامية فاخرة وتوزيع متقن يرفع من قيمة التصميم.'
    ],

    // ============= ممرات =============
    [
        'category_slug'  => 'path_image',
        'project_number' => '1',
        'title'          => 'ممر راقٍ بإضاءة مخفية',
        'tag_main'       => 'ممرات',
        'tag_soft'       => 'ديكور داخلي',
        'text'           => 'ممر داخلي فسيح بإضاءة جانبية وخطوط نظيفة تعطي إحساساً بالحركة السلسة.'
    ],

    // ============= تحول مدخل رئيسي =============
    [
        'category_slug'  => 'before_after_images',
        'project_number' => '3',
        'title'          => 'تحويل مدخل رئيسي',
        'tag_main'       => 'تحول مدروس',
        'tag_soft'       => 'مداخل',
        'text'           => 'تطوير مدخل رئيسي من بناء خام إلى مدخل رخامي مضاء يعكس جودة التنفيذ.'
    ],

];
?>

<section class="projects-strip reveal" id="projects-strip">
    <div class="section-wrapper">
        <div class="projects-strip-header">
            <span class="eyebrow">لمحات حية من مشاريعنا</span>
            <h2 class="service-quick-title">تحولات التنفيذ بلمسة نَسَق</h2>
            <p class="section-subtitle">
                مجموعة مختارة من المشاريع المنفذة، تبرز أسلوبنا في التشطيب، توزيع الإضاءة،
                واختيار الخامات بطريقة فاخرة ومتناسقة.
            </p>
        </div>

        <div class="projects-grid">

            <?php foreach ($stripProjects as $proj): ?>

                <?php
                // مسار الويب (يُستخدم في background-image)
                $webFolder = "assets/project_img/{$proj['category_slug']}/{$proj['project_number']}/";

                // مسار فعلي على الهارد (لـ scandir) من جذر المشروع manegar/
                $fsFolder  = dirname(__DIR__) . '/' . $webFolder;

                $image = '';

                if (is_dir($fsFolder)) {
                    $files = scandir($fsFolder);

                    foreach ($files as $file) {
                        if ($file === '.' || $file === '..') {
                            continue;
                        }
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                            $image = $webFolder . $file; // هذا الذي نستخدمه في الـ HTML
                            break;
                        }
                    }
                }

                // لو ما لقى صورة، لا يعرض الكرت
                if ($image === '') {
                    continue;
                }
                ?>

                <article class="project-card">
                    <div class="project-img"
                         style="background-image:url('<?php echo htmlspecialchars($image); ?>');">
                    </div>

                    <div class="project-label">
                        <span class="tag"><?php echo htmlspecialchars($proj['tag_main']); ?></span>
                        <span class="tag-soft"><?php echo htmlspecialchars($proj['tag_soft']); ?></span>
                    </div>

                    <h3 class="project-title">
                        <?php echo htmlspecialchars($proj['title']); ?>
                    </h3>

                    <p class="project-text">
                        <?php echo htmlspecialchars($proj['text']); ?>
                    </p>
                </article>

            <?php endforeach; ?>

        </div>


    </div>
</section>
