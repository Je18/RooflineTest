document.addEventListener('DOMContentLoaded', function () {
    const faqContainer = document.querySelector('.faq-container');
    const faqItems = Array.from(
        faqContainer.querySelectorAll('.faq-item')
    );

    faqItems.sort(() => Math.random() - 0.5);

    faqItems.forEach(item => faqContainer.appendChild(item));
});
