document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".hero-slide");
    if (!slides.length) return;

    // لو مافيه سلايد Active نحدد أول واحد
    let current = Array.from(slides).findIndex(s => s.classList.contains("active"));
    if (current === -1) {
        current = 0;
        slides[0].classList.add("active");
    }

    const changeSlide = () => {
        slides[current].classList.remove("active");
        current = (current + 1) % slides.length;
        slides[current].classList.add("active");
    };

    // تبديل كل 4 ثواني
    setInterval(changeSlide, 4000);
});
document.addEventListener("DOMContentLoaded", () => {
    const heroSlider = document.querySelector('.services-hero-slider');
    if (!heroSlider) return;

    const slides = heroSlider.querySelectorAll('.hero-slide');
    if (slides.length <= 1) return;

    let current = 0;

    function nextSlide() {
        slides[current].classList.remove('active');
        current = (current + 1) % slides.length;
        slides[current].classList.add('active');
    }

    setInterval(nextSlide, 5000);
});
