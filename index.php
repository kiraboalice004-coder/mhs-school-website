<?php include 'header.php'; ?>

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>



<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Mercy High School </title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">



</head>



<!-- =====================================================
     HEADER
===================================================== -->





<!-- =====================================================
     HERO SLIDER
===================================================== -->


<div class="slides">


<!-- =====================================================
     MERCY HIGH SCHOOL — HERO SLIDER
===================================================== -->

<section class="hero-slider">

    <div class="slides">

        <!-- SLIDE 1 -->
        <div class="slide active"
             style="background-image:url('images/10.jpeg');">

            <div class="slide-overlay" style="background:rgba(0,0,0,.18)!important;"></div>

            <div class="slide-content">

                <span class="welcome-text">
                    WELCOME TO
                </span>

                <h1>
                    Mercy High School
                </h1>

                <p>
                    Empowering students with knowledge, discipline,
                    confidence and skills for a brighter future.
                </p>

                <div class="hero-buttons">

                    <a href="about.php" class="btn primary-btn">
                        Learn More
                    </a>

                    <a href="admissions.php" class="btn secondary-btn">
                        Apply Now
                    </a>

                </div>

            </div>

        </div>


        <!-- SLIDE 2 -->
        <div class="slide"
             style="background-image:url('images/18.jpeg');">

            <div class="slide-overlay" style="background:rgba(0,0,0,.18)!important;"></div>

            <div class="slide-content">

                <span class="welcome-text">
                    QUALITY EDUCATION
                </span>

                <h1>
                    Building Bright<br>
                    Futures
                </h1>

                <p>
                    We provide an environment where every learner
                    can discover their potential and achieve excellence.
                </p>

                <div class="hero-buttons">

                    <a href="academics.php" class="btn primary-btn">
                        Our Academics
                    </a>

                    <a href="contact.php" class="btn secondary-btn">
                        Contact Us
                    </a>

                </div>

            </div>

        </div>


        <!-- SLIDE 3 -->
        <div class="slide"
             style="background-image:url('images/51.jpeg');">

            <div class="slide-overlay" style="background:rgba(0,0,0,.18)!important;"></div>

            <div class="slide-content">

                <span class="welcome-text">
                    DISCIPLINE &amp; EXCELLENCE
                </span>

                <h1>
                    Learning Today,<br>
                    Leading Tomorrow
                </h1>

                <p>
                    Developing responsible, disciplined and innovative
                    young people ready to serve society.
                </p>

                <div class="hero-buttons">

                    <a href="about.php" class="btn primary-btn">
                        Discover Us
                    </a>

                    <a href="admissions.php" class="btn secondary-btn">
                        Admissions
                    </a>

                </div>

            </div>

        </div>


        <!-- SLIDE 4 -->
        <div class="slide"
             style="background-image:url('images/81.jpeg');">

            <div class="slide-overlay" style="background:rgba(0,0,0,.18)!important;"></div>

            <div class="slide-content">

                <span class="welcome-text">
                    OUR SCHOOL COMMUNITY
                </span>

                <h1>
                    Growing Together<br>
                    As One Family
                </h1>

                <p>
                    A supportive school community where students,
                    teachers and parents work together for success.
                </p>

                <div class="hero-buttons">

                    <a href="who-we-are.php" class="btn primary-btn">
                        Who We Are
                    </a>

                    <a href="contact.php" class="btn secondary-btn">
                        Get In Touch
                    </a>

                </div>

            </div>

        </div>




        <!-- SLIDE 5 -->
        <div class="slide" style="background-image:url('images/72.jpeg');">
            <div class="slide-overlay" style="background:rgba(0,0,0,.18)!important;"></div>
            <div class="slide-content">
                <span class="welcome-text">ADMISSIONS NOW OPEN</span>
                <h1>Give Your Child<br>A Brighter Future</h1>
                <p>Join Mercy High School Uganda and give your child an opportunity to learn, grow and succeed.</p>
                <div class="hero-buttons">
                    <a href="admissions.php" class="btn primary-btn">Apply Now</a>
                    <a href="contact.php" class="btn secondary-btn">Contact Us</a>
                </div>
            </div>
        </div>


    <!-- ARROWS -->

    <button class="slider-arrow prev"
            onclick="changeSlide(-1)"
            aria-label="Previous slide">

        <i class="fa-solid fa-chevron-left"></i>

    </button>

    <button class="slider-arrow next"
            onclick="changeSlide(1)"
            aria-label="Next slide">

        <i class="fa-solid fa-chevron-right"></i>

    </button>

</section>
<!-- =====================================================
     WELCOME
===================================================== -->

<section class="welcome-section">
<div class="welcome-layout">
<div class="welcome-image">
<img src="images/1.jpeg" alt="Mercy High School students">
</div>
<div class="welcome-content">

<div class="section-container">


<div class="section-container">

<span class="section-label">
ABOUT OUR SCHOOL
</span>

<h2>
Welcome to Mercy High School 
</h2>

<p>
Mercy High School  is committed to providing
quality education in a supportive and disciplined environment.
</p>

<p>
Our school seeks to nurture learners academically,
socially, morally and physically while preparing them
to become responsible citizens and future leaders.
</p>

<a href="about.php" class="read-more">

Read More

<i class="fa-solid fa-arrow-right"></i>

</a>

</div>

</div>

</section>



<!-- =====================================================
     SCHOOL STATISTICS
===================================================== -->

<section class="statistics-section">

<div class="statistics-heading">
<span>WHY CHOOSE MERCY</span>
<h2>Excellence, People &amp; Community</h2>
<p>Discover the people, values and experience that make Mercy High School a place where learners are supported to grow and succeed.</p>
</div>

<div class="statistics-container">

<div class="statistic-card">

<div class="statistic-icon">
<i class="fa-solid fa-graduation-cap"></i>
</div>

<div class="statistic-number">
Excellence
</div>

<h3>
Academic Excellence
</h3>

<p>
Committed to high academic standards and
the success of every learner.
</p>

</div>



<div class="statistic-card">

<div class="statistic-icon">
<i class="fa-solid fa-chalkboard-user"></i>
</div>

<div class="statistic-number">
Dedicated
</div>

<h3>
Teaching Staff
</h3>

<p>
Dedicated teachers who guide, inspire
and support our learners.
</p>

</div>



<div class="statistic-card">

<div class="statistic-icon">
<i class="fa-solid fa-users"></i>
</div>

<div class="statistic-number">
Committed
</div>

<h3>
Non-Teaching Staff
</h3>

<p>
A committed team supporting a safe,
organized and welcoming school.
</p>

</div>



<div class="statistic-card">

<div class="statistic-icon">
<i class="fa-solid fa-calendar-days"></i>
</div>

<div class="statistic-number">
50+
</div>

<h3>
Years of Existence
</h3>

<p>
A proud history of contributing to
education and community development.
</p>
</div>


<div class="statistic-card">

<div class="statistic-icon">
<i class="fa-solid fa-user-graduate"></i>
</div>

<div class="statistic-number">
500+
</div>

<h3>
Students Enrolled
</h3>

<p>
A growing community of learners pursuing excellence and personal development.
</p>

</div>

</div>

</div>

</section>



<!-- =====================================================
     WHY CHOOSE US
===================================================== -->

<section class="news-section">

<div class="section-heading">

<span class="section-label">
WHY CHOOSE US
</span>

<h2>
Excellence in Education
</h2>

<p>
We provide learners with opportunities to grow,
learn and prepare for a successful future.
</p>

</div>


<div class="section-title">
<span class="section-label">STUDENT EXPERIENCE</span>
</div>

<div class="student-stories-home-button">
    <a href="testimonials.php">Student Stories</a>
</div>

<div class="news-container">


<div class="news-card">

<div class="news-image">

<img src="images/41.jpeg" alt="Quality Education">

</div>

<div class="news-content">

<span class="news-category">
ACADEMICS
</span>

<h3>
Quality Education
</h3>

<p>
We promote academic excellence through
effective teaching and learning.
</p>



</div>

</div>



<div class="news-card">

<div class="news-image">

<img src="images/16.jpeg"
alt="School Community">

</div>

<div class="news-content">

<span class="news-category">
COMMUNITY
</span>

<h3>
Strong School Community
</h3>

<p>
Students, teachers and parents work together
to create a supportive environment.
</p>



</div>

</div>



<div class="news-card">

<div class="news-image">

<img src="images/52.jpeg"
alt="Student Development">

</div>

<div class="news-content">

<span class="news-category">
DEVELOPMENT
</span>

<h3>
Holistic Development
</h3>

<p>
We nurture academic, social, moral and
personal development.
</p>



</div>

</div>

</div>

</section>



<!-- =====================================================
     UPCOMING NEWS
===================================================== -->

<section class="buildings-section news-events-bg37">

<div class="section-heading">

<span class="section-label">
SCHOOL NEWS
</span>

<h2>
Upcoming News & Events
</h2>

<p>
Stay informed about activities and important
events at Mercy High School .
</p>

</div>


<div class="news-container">


<div class="news-card">

<div class="news-image">

<img src="images/20.jpeg"
alt="School News">

<span class="news-date">
UPCOMING
</span>

</div>

<div class="news-content">

<span class="news-category">
ACADEMICS
</span>

<h3>
Academic Activities
</h3>

<p>
Updates about academic programmes,
activities and student development.
</p>

<a href="news.php" class="news-link">
Read More →
</a>

</div>

</div>



<div class="news-card">

<div class="news-image">

<img src="images/26.jpeg"
alt="School Events">

<span class="news-date">
UPCOMING
</span>

</div>

<div class="news-content">

<span class="news-category">
EVENTS
</span>

<h3>
School Community Events
</h3>

<p>
Keep up with upcoming school activities
and community events.
</p>

<a href="news.php" class="news-link">
Read More →
</a>

</div>

</div>



<div class="news-card">

<div class="news-image">

<img src="images/37.jpeg"
alt="School Announcement">

<span class="news-date">
NEWS
</span>

</div>

<div class="news-content">

<span class="news-category">
ANNOUNCEMENTS
</span>

<h3>
Important Announcements
</h3>

<p>
Important information and announcements
from the school administration.
</p>

<a href="news.php" class="news-link">
Read More →
</a>

</div>

</div>

</div>


<div class="section-button">

<a href="news.php"
class="btn school-news-button">

View All News

</a>

</div>

</section>



<!-- =====================================================
     SCHOOL FACILITIES
===================================================== -->

<section class="campus-section">

    <div class="section-container">

        <div class="section-heading">

            <span class="section-label">
                OUR CAMPUS
            </span>

            <h2>
                School Facilities
            </h2>

            <p>
                Explore the facilities and campus environment
                that support learning, growth and student life.
            </p>

        </div>

        
<div class="buildings-container">

<div class="building-card">
<div class="building-image">
<img src="images/62.jpeg" alt="Mercy High School Main Building">
<div class="building-overlay"><i class="fa-solid fa-building"></i></div>
</div>
<div class="building-content">
<span>01</span>
<h3>Main School Building</h3>
<p>Our main school building supporting teaching, learning and school life.</p>
</div>
</div>

<div class="building-card">
<div class="building-image">
<img src="images/16.jpeg" alt="Mercy High School Classroom Block">
<div class="building-overlay"><i class="fa-solid fa-school"></i></div>
</div>
<div class="building-content">
<span>02</span>
<h3>Classroom Block</h3>
<p>Dedicated learning spaces designed to support effective classroom learning.</p>
</div>
</div>

<div class="building-card">
<div class="building-image">
<img src="images/15.jpeg" alt="Mercy High School Science Laboratories">
<div class="building-overlay"><i class="fa-solid fa-flask"></i></div>
</div>
<div class="building-content">
<span>03</span>
<h3>Science Laboratories</h3>
<p>Practical learning spaces where students develop scientific knowledge and skills.</p>
</div>
</div>

<div class="building-card">
<div class="building-image">
<img src="images/68.jpeg" alt="Mercy High School Library and ICT Centre">
<div class="building-overlay"><i class="fa-solid fa-book"></i></div>
</div>
<div class="building-content">
<span>04</span>
<h3>Library &amp; ICT Centre</h3>
<p>Resources and technology that support research, reading and digital learning.</p>
</div>
</div>

<div class="building-card">
<div class="building-image">
<img src="images/10.jpeg" alt="Mercy High School Administration">
<div class="building-overlay"><i class="fa-solid fa-landmark"></i></div>
</div>
<div class="building-content">
<span>05</span>
<h3>Administration Block</h3>
<p>A central space supporting school administration and student services.</p>
</div>
</div>

<div class="building-card">
<div class="building-image">
<img src="images/19.jpeg" alt="Mercy High School Sports Facilities">
<div class="building-overlay"><i class="fa-solid fa-futbol"></i></div>
</div>
<div class="building-content">
<span>06</span>
<h3>Sports &amp; Activities Facilities</h3>
<p>Spaces that encourage physical activity, teamwork and student talent.</p>
</div>
</div>

</div>
</section>



<!-- =====================================================
     CALL TO ACTION
===================================================== -->

<section class="cta-section">

<h2>
Give Your Child a Brighter Future
</h2>

<p>
Join Mercy High School  today.
</p>

<a href="admissions.php"
class="btn primary-btn">

Start Application

</a>

</section>



<!-- =====================================================
     MORE THAN A SCHOOL
===================================================== -->

<section class="mercy-final-message">

    <div class="section-container">

        <span class="section-label">MORE THAN A SCHOOL</span>

        <h2>More Than a School</h2>

        <p>
            Mercy High School is more than classes and examinations.
            We develop minds, nurture faith, build character, discover
            talents, develop practical skills and raise young leaders.
        </p>

        <p>
            Every young person has potential. We believe education can
            transform families, families can transform communities, and
            communities can contribute to a transformed nation.
        </p>

        <div class="mercy-final-values">
            <span><i class="fas fa-brain"></i> Minds Developed</span>
            <span><i class="fas fa-praying-hands"></i> Faith Nurtured</span>
            <span><i class="fas fa-shield-alt"></i> Character Built</span>
            <span><i class="fas fa-star"></i> Talents Discovered</span>
            <span><i class="fas fa-tools"></i> Skills Developed</span>
            <span><i class="fas fa-users"></i> Leaders Raised</span>
        </div>

        <h3>WITH GOD'S MERCY WE SUCCEED</h3>

        <p class="mercy-final-motto">
            Ministering Mercy • Winning Souls • Growing Them Into Winners
        </p>

    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="main-footer">

<div class="footer-container">


<div class="footer-column">

<img src="images/logo.jpeg"
alt="Mercy High School Logo"
class="footer-logo">

<h3>
Mercy High School
</h3>

<p>

</p>

<p>
Providing quality education and nurturing
responsible future leaders.
</p>

</div>



<div class="footer-column">

<h3>
Quick Links
</h3>

<a href="index.php">Home</a>

<a href="about.php">About Us</a>

<a href="academics.php">Academics</a>

<a href="admissions.php">Admissions</a>

<a href="news.php">News</a>

<a href="contact.php">Contact</a>

</div>



<div class="footer-column">

<h3>
Admissions
</h3>

<a href="admissions.php">
Apply Now
</a>

<a href="admissions.php">
Admission Requirements
</a>

<a href="contact.php">
Contact Admissions
</a>

</div>



<div class="footer-column">

<h3>
Contact Us
</h3>

<p>
<i class="fa-solid fa-location-dot"></i>
 Uganda
</p>

<p>
<i class="fa-solid fa-phone"></i>
School Administration
</p>

<p>
<i class="fa-solid fa-envelope"></i>
<a href="mailto:mercyhighschool435@gmail.com" class="footer-email">Email Us</a>
</p>


<div class="social-links">

<a href="https://www.facebook.com/share/1Dc3Q6c2pn/">
<i class="fa-brands fa-facebook-f"></i>
</a>

<a href="#">
<i class="fa-brands fa-x-twitter"></i>
</a>

<a href="#">
<i class="fa-brands fa-youtube"></i>
</a>

<a href="#">
<i class="fa-brands fa-instagram"></i>
</a>
<a href="https://www.tiktok.com/@mercyhighschooluganda?_r=1&_t=ZS-9AC8CIOCEWk" aria-label="TikTok">
<i class="fa-brands fa-tiktok"></i>
</a>
<a href="#" aria-label="LinkedIn">
<i class="fa-brands fa-linkedin-in"></i>
</a>

</div>

</div>

</div>


<div class="footer-bottom">

<p>
&copy; <?php echo date("Y"); ?>
Mercy High School .
All Rights Reserved.
</p>

</div>

</footer>



<!-- =====================================================
     SLIDER JAVASCRIPT
===================================================== -->

<script>

let slideIndex = 1;

function showSlide(n) {

    let slides = document.querySelectorAll(".slide");

    if (slides.length === 0) {
        return;
    }

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    slides.forEach(function(slide) {
        slide.classList.remove("active");
    });

    slides[slideIndex - 1].classList.add("active");
}

function changeSlide(n) {

    slideIndex += n;

    showSlide(slideIndex);

}

function currentSlide(n) {

    slideIndex = n;

    showSlide(slideIndex);

}


/* AUTOMATIC SLIDES */

setInterval(function() {

    slideIndex++;

    showSlide(slideIndex);

}, 5000);


/* START SLIDER */

document.addEventListener("DOMContentLoaded", function() {

    showSlide(slideIndex);

});

</script>



<!-- Mercy High School Chatty Menu -->
<div class="chatty-container">

    <div class="chatty-options">

        <a href="tel:+256755372192" class="chatty-option phone-option">
            <span>📞</span>
            <span>Call Us</span>
        </a>

        <a href="mailto:mercyhighschool435@gmail.com" class="chatty-option email-option">
            <span>✉️</span>
            <span>Email Us</span>
        </a>

        <a href="https://wa.me/256755372192" class="chatty-option whatsapp-option" target="_blank" rel="noopener noreferrer">
            <span>💬</span>
            <span>WhatsApp</span>
        </a>

    </div>

    <button type="button" class="chatty-button" onclick="toggleChatty()" aria-label="Open contact options">
        <span class="chatty-icon">💬</span>
        <span class="chatty-text">Chat With Us</span>
    </button>

</div>

<script>
function toggleChatty() {
    const container = document.querySelector(".chatty-container");
    container.classList.toggle("chatty-open");
}
</script>

</body>
</html>



