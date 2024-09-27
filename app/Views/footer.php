<footer class="footer">
    <div class="container">
        <!-- Upper section with logo and description -->
        <div class="footer-top">
            <div class="footer-logo">
                <img src="<?= base_url(); ?>public/assets/landImg/conductor.png" alt="Codutor Logo">
            </div>
            <div class="footer-description">
                <p>
                    Codutor is an engaging online coding platform tailored for kids and teens.
                    It offers a wide range of kid-friendly courses designed to make learning
                    fun and effective. From beginner basics to advanced coding concepts,
                    Codutor guides young learners on an exciting coding journey, helping
                    them excel and build confidence in the digital world. With interactive
                    lessons and expert guidance, Codutor transforms coding into an
                    enjoyable adventure, inspiring the next generation of tech innovators.
                </p>
            </div>
        </div>

        <div class="footer-links">
            <div class="row">
                <div class="column">
                    <ul>
                        <li>Scratch Coding</li>
                        <li>Python</li>
                        <li>App Development</li>
                        <li>Become a Teacher</li>
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li>Web Development</li>
                        <li>Roblox</li>
                        <li>AI</li>
                        <li>Data Science</li>
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li>Robotics</li>
                        <li>Game Development</li>
                        <li>Machine Learning</li>
                        <li>Algorithm</li>
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li>Contact Us</li>
                        <li>Career</li>
                        <li>Privacy Policy</li>
                        <li>Terms & Conditions</li>
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li>School Partnership</li>
                        <li>Refund Policy</li>
                        <li>Blog</li>
                        <li>Investors</li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Social media icons section -->
        <div class="footer-social">
            <ul class="social-icons">
                <li><a href="#"><img src="<?= base_url(); ?>public/assets/landImg/whatsapp.webp" alt="WhatsApp" /></a>
                </li>
                <li><a href="#"><img src="<?= base_url(); ?>public/assets/landImg/instagram.webp" alt="Instagram" /></a>
                </li>
                <li><a href="#"><img src="<?= base_url(); ?>public/assets/landImg/linkedin.webp" alt="LinkedIn" /></a>
                </li>
                <li><a href="#"><img src="<?= base_url(); ?>public/assets/landImg/facebook.webp" alt="Facebook" /></a>
                </li>
                <li><a href="#"><img src="<?= base_url(); ?>public/assets/landImg/network.webp" alt="YouTube" /></a>
                </li>
            </ul>
        </div>

        <!-- Cities section -->
        <div class="footer-cities">
            <p class="large-cities">
                Pune | Bangalore | Hyderabad | Chennai | Mumbai | Delhi | Gurgaon | Kolkata | Lucknow | Ahmedabad
            </p>

            <p class="small-cities">
                New York California San Francisco Houston Dallas Atlanta Washington Boston New Jersey Chicago London
                Amsterdam Sydney Melbourne Berlin Bangkok Kuala Lumpur Abu Dhabi
            </p>
            <p class="large-cities">
                USA | Canada | UK | Germany | Singapore | Australia | New Zealand | India | Dubai
            </p>
        </div>

    </div>
</footer>

<script>
let slideIndex = 0;
const slides = document.querySelectorAll('.testimonial-slide');
const totalSlides = slides.length / 2; // Each pair of rows (video and feedback)
const slideWrapper = document.querySelector('.testimonial-slide-wrapper');
const dots = document.querySelectorAll('.dot');

function showSlide() {
    const offset = slideIndex * -100;
    slideWrapper.style.transform = `translateX(${offset}%)`;
    updateDots();
}

function updateDots() {
    dots.forEach((dot, index) => {
        dot.classList.remove('active');
        if (index === slideIndex) {
            dot.classList.add('active');
        }
    });
}

function nextSlide() {
    slideIndex = (slideIndex + 1) % totalSlides;
    showSlide();
}

function currentSlide(index) {
    slideIndex = index;
    showSlide();
}

setInterval(nextSlide, 3000);

showSlide();
</script>
<script>
$(document).ready(function() {
    $('.slider-wrapper').slick({
        infinite: true,
        slidesToShow: 4, // Show 4 slides at a time
        slidesToScroll: 1,
        dots: true, // Adds dots below the slider
        autoplay: true,
        autoplaySpeed: 3000
    });
});
</script>
