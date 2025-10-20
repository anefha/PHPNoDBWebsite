/* FAQ Start */
document.addEventListener('DOMContentLoaded', function () {
        const faqItems = document.querySelectorAll('.nf_faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.nf_faq-question');

            question.addEventListener('click', function () {
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                item.classList.toggle('active');
            });
        });
    });
/* FAQ End */