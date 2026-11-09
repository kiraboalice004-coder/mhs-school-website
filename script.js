sudo bash -c 'cat > /opt/lampp/htdocs/khs-website/script.js <<'\''JS'\''
document.addEventListener("DOMContentLoaded", function () {

    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");

    const nextButton = document.querySelector(".next");
    const previousButton = document.querySelector(".prev");

    let currentSlide = 0;
    let autoSlide;


    function showSlide(index) {

        if (slides.length === 0) {
            return;
        }

        if (index >= slides.length) {
            currentSlide = 0;
        }

        if (index < 0) {
            currentSlide = slides.length - 1;
        }

        slides.forEach(function (slide) {
            slide.classList.remove("active");
        });

        dots.forEach(function (dot) {
            dot.classList.remove("active");
        });

        slides[currentSlide].classList.add("active");

        if (dots[currentSlide]) {
            dots[currentSlide].classList.add("active");
        }
    }


    function nextSlide() {

        currentSlide++;

        if (currentSlide >= slides.length) {
            currentSlide = 0;
        }

        showSlide(currentSlide);
    }


    function previousSlide() {

        currentSlide--;

        if (currentSlide < 0) {
            currentSlide = slides.length - 1;
        }

        showSlide(currentSlide);
    }


    function startAutoSlide() {

        clearInterval(autoSlide);

        autoSlide = setInterval(function () {

            nextSlide();

        }, 5000);
    }


    if (nextButton) {

        nextButton.addEventListener("click", function () {

            nextSlide();
            startAutoSlide();

        });

    }


    if (previousButton) {

        previousButton.addEventListener("click", function () {

            previousSlide();
            startAutoSlide();

        });

    }


    dots.forEach(function (dot, index) {

        dot.addEventListener("click", function () {

            currentSlide = index;

            showSlide(currentSlide);

            startAutoSlide();

        });

    });


    showSlide(0);

    startAutoSlide();

});
JS
'