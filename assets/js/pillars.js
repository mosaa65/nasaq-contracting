document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".pillar-card");

    // إعداد أنيميشن الظهور
    cards.forEach((card, index) => {
        card.style.transition = "all 0.55s cubic-bezier(.24,.82,.22,1)";
        card.style.transitionDelay = `${index * 0.07}s`;
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15 }
    );

    cards.forEach((card) => observer.observe(card));

    // تدوير الصور داخل بطاقات الركائز باستخدام data-images
    const imageCards = document.querySelectorAll(".pillar-card[data-images]");

    imageCards.forEach((card) => {
        const imagesAttr = card.getAttribute("data-images");
        if (!imagesAttr) return;

        const urls = imagesAttr
            .split(",")
            .map((src) => src.trim())
            .filter((src) => src.length > 0);

        if (!urls.length) return;

        const mediaImg = card.querySelector(".pillar-media-img");
        if (!mediaImg) return;

        let currentIndex = 0;

        // أول صورة
        mediaImg.style.backgroundImage = `url('${urls[currentIndex]}')`;
        mediaImg.style.opacity = "1";

        if (urls.length === 1) return;

        setInterval(() => {
            currentIndex = (currentIndex + 1) % urls.length;
            mediaImg.style.opacity = "0";

            setTimeout(() => {
                mediaImg.style.backgroundImage = `url('${urls[currentIndex]}')`;
                mediaImg.style.opacity = "1";
            }, 280);
        }, 2600); // غيّر المدة لو تحب أبطأ/أسرع
    });
});
