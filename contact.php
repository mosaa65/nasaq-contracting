<?php
$pageTitle = "تواصل معنا";
$pageExtraCss = '<link rel="stylesheet" href="assets/css/contact.css">';
$pageExtraJs = '<script src="assets/js/contact.js" defer></script>';
include 'includes/header.php';
?>

<section class="reveal contact-hero">
    <div class="section-wrapper">
        <div class="contact-hero-content">
            <span class="hero-badge">📞 تواصل معنا</span>
            <h1 class="hero-title">نحن هنا لمساعدتك</h1>
            <p class="hero-description">
                يسعدنا استقبال استفساراتكم والتنسيق لمشاريعكم. تواصل معنا عبر النموذج أدناه 
                أو من خلال وسائل الاتصال المباشرة، وسنكون سعداء بخدمتك.
            </p>
        </div>
    </div>
</section>

<section class="reveal contact-section">
    <div class="section-wrapper">
        <div class="contact-grid">
                        <!-- معلومات التواصل -->
            <div class="contact-info-wrapper">
                <div class="info-header">
                    <h2 class="info-title">معلومات التواصل</h2>
                    <p class="info-subtitle">تواصل معنا مباشرة عبر القنوات التالية</p>
                </div>

                <div class="contact-cards">
                    <a href="tel:+966531033314" class="contact-card">
                        <div class="card-icon phone-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">الهاتف</h3>
                            <p class="card-value">+966 53 103 3314</p>
                            <span class="card-hint">اضغط للاتصال</span>
                        </div>
                    </a>

                    <a href="mailto:mliar.dirr@gmail.com" class="contact-card">
                        <div class="card-icon email-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">البريد الإلكتروني</h3>
                            <p class="card-value">mliar.dirr@gmail.com</p>
                            <span class="card-hint">اضغط لإرسال بريد</span>
                        </div>
                    </a>

                    <a href="https://wa.me/966531033314" target="_blank" rel="noopener" class="contact-card whatsapp-card">
                        <div class="card-icon whatsapp-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.98-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">واتساب</h3>
                            <p class="card-value">+966 53 103 3314</p>
                            <span class="card-hint">اضغط للدردشة</span>
                        </div>
                    </a>

                    <div class="contact-card location-card">
                        <div class="card-icon location-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">العنوان</h3>
                            <p class="card-value">المملكة العربية السعودية</p>
                            <span class="card-hint">الرياض</span>
                        </div>
                    </div>
                </div>

                <div class="working-hours">
                    <h3 class="hours-title">ساعات العمل</h3>
                    <div class="hours-list">
                        <div class="hours-item">
                            <span class="hours-day">كل يوم</span>
                            <span class="hours-time">السبت -الجمعة</span>
                        </div>
                        <div class="hours-item">
                            <span class="hours-day">اوقات الدوام</span>
                            <span class="hours-time">24 : ساعة</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- نموذج التواصل -->
            <div class="contact-form-wrapper">
                <div class="form-header">
                    <h2 class="form-title">أرسل لنا رسالة</h2>
                    <p class="form-subtitle">املأ النموذج وسنتواصل معك في أقرب وقت</p>
                </div>

                <form method="POST" action="contact_handler.php" class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name" class="form-label">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span>الاسم الكامل</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="form-input"
                            placeholder="أدخل اسمك الكامل"
                            required
                            autocomplete="name"
                        >
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <span>رقم الجوال</span>
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            class="form-input"
                            placeholder="05xxxxxxxx"
                            required
                            autocomplete="tel"
                        >
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span>البريد الإلكتروني (اختياري)</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-input"
                            placeholder="example@email.com"
                            autocomplete="email"
                        >
                    </div>

                    <div class="form-group">
                        <label for="service" class="form-label">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>نوع الخدمة</span>
                        </label>
                        <select id="service" name="service" class="form-select">
                            <option value="">اختر نوع الخدمة</option>
                            <option value="تشطيبات">تشطيبات داخلية وخارجية</option>
                            <option value="مقاولات عامة">مقاولات عامة</option>
                            <option value="تصميم معماري">تصميم معماري</option>
                            <option value="صيانة وترميم">صيانة وترميم</option>
                            <option value="أخرى">خدمة أخرى</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <span>تفاصيل الطلب / المشروع</span>
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            class="form-textarea"
                            placeholder="اكتب تفاصيل مشروعك أو استفسارك هنا..."
                            rows="6"
                            required
                        ></textarea>
                    </div>

                    <button type="submit" class="form-submit-btn">
                        <span>إرسال الرسالة</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </button>
                </form>
            </div>



        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
