<?php include 'header.php'; ?>
<div class="hero-section">
    <video autoplay muted loop class="hero-video">
        <source src="<?= base_url(); ?>public/assets/video/codutorV.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-text">
        <div class="contact-info">
            <div class="country-code">
                <img src="https://flagcdn.com/w320/in.png" alt="Flag of India" class="flag">
                <span>+91</span>
            </div>
            <input type="text" placeholder="Mobile Number" class="mobile-input">
            <a href="#" class="book-trial-btn">Book Free Trial</a>
        </div>
    </div>
    <a href="https://wa.me/your-number" class="whatsapp-icon" target="_blank">
        <i class="fab fa-whatsapp" aria-hidden="true"></i>
    </a>
</div>

<hr class="section-divider">

<!-- New Section -->
<section class="tech-leaders-section">
    <h2>You Know ??</h2>
    <p>Today's tech leaders began coding in their childhood</p>
    <div class="leaders-grid">
        <div class="leader">
            <img src="<?= base_url(); ?>public/assets/landImg/1.webp" alt="Mark Zuckerberg, started coding at 10"
                loading="lazy">
            <p>Mark Zuckerberg<br>Started coding at 10</p>
        </div>

        <div class="leader">
            <img src="<?= base_url(); ?>public/assets/landImg/2.webp" alt="Daphne Koller, started coding at 10"
                loading="lazy">
            <p>Daphne Koller<br>Started coding at 10</p>
        </div>

        <div class="leader">
            <img src="<?= base_url(); ?>public/assets/landImg/3.webp" alt="Elon Musk, started coding at 10"
                loading="lazy">
            <p>Elon Musk<br>Started coding at 10</p>
        </div>

        <div class="leader">
            <img src="<?= base_url(); ?>public/assets/landImg/4.webp" alt="Steve Jobs, started coding at 10"
                loading="lazy">
            <p>Steve Jobs<br>Started coding at 10</p>
        </div>

        <div class="leader">
            <img src="<?= base_url(); ?>public/assets/landImg/5.webp" alt="Jack Dorsey, started coding at 10"
                loading="lazy">
            <p>Jack Dorsey<br>Started coding at 10</p>
        </div>

        <div class="leader">
            <img src="<?= base_url(); ?>public/assets/landImg/6.webp" alt="Bill Gates, started coding at 10"
                loading="lazy">
            <p>Bill Gates<br>Started coding at 10</p>
        </div>
    </div>
    <a href="#" class="explore-button">Explore Online Coding Courses for Kids</a>
</section>

<hr class="section-divider">

<!-- New Personalized Courses Section -->
<section class="personalized-courses-section">
    <h2>Personalised Comprehensive, tailored online coding courses designed for Kids and Teens</h2>
    <div class="courses-grid">
        <div class="course">
            <img src="<?= base_url(); ?>public/assets/landImg/c5.webp" alt="Scratch for Kids course" loading="lazy">
            <p>Scratch for Kids</p>
        </div>
        <div class="course">
            <img src="<?= base_url(); ?>public/assets/landImg/c8.webp" alt="Python course" loading="lazy">
            <p>Python</p>
        </div>
        <div class="course">
            <img src="<?= base_url(); ?>public/assets/landImg/c6.webp" alt="App Development course" loading="lazy">
            <p>App Development</p>
        </div>
        <div class="course">
            <img src="<?= base_url(); ?>public/assets/landImg/4.png" alt="AI course" loading="lazy">
            <p>AI</p>
        </div>
        <div class="course">
            <img src="<?= base_url(); ?>public/assets/landImg/28.webp" alt="Roblox course" loading="lazy">
            <p>Roblox</p>
        </div>
        <div class="course">
            <img src="<?= base_url(); ?>public/assets/landImg/c9.webp" alt="Data Science course" loading="lazy">
            <p>Data Science</p>
        </div>
        <div class="course">
            <img src="<?= base_url(); ?>public/assets/landImg/c10.webp" alt="Maths course" loading="lazy">
            <p>Maths</p>
        </div>
        <div class="course">
            <img src="<?= base_url(); ?>public/assets/landImg/c11.webp" alt="Game Development course" loading="lazy">
            <p>Game Development</p>
        </div>
        <div class="course">
            <img src="<?= base_url(); ?>public/assets/landImg/c12.webp" alt="Web Development course" loading="lazy">
            <p>Web Development</p>
        </div>
    </div>
</section>

<hr class="section-divider">

<!-- New Section: Why Kids Should Learn Coding -->
<section class="why-learn-coding">
    <h2>Why Kids Should Learn Coding</h2>
    <div class="coding-content">
        <!-- Left side with a single image -->
        <div class="coding-images">
            <img src="<?= base_url(); ?>public/assets/landImg/13.webp" alt="Kids learning coding" loading="lazy">
        </div>

        <!-- Right side with shadow boxes -->
        <div class="coding-boxes">
            <div class="coding-box">
                <div class="circle">01</div>
                <p>Coding teaches kids problem-solving skills by allowing them to think logically.</p>
            </div>
            <div class="coding-box">
                <div class="circle">02</div>
                <p>It fosters creativity as kids can create and design their own projects from scratch.</p>
            </div>
            <div class="coding-box">
                <div class="circle">03</div>
                <p>Understanding coding can open up a wide range of career opportunities in tech fields.</p>
            </div>
            <div class="coding-box">
                <div class="circle">04</div>
                <p>Coding improves math skills, helping kids learn how to apply math in real-world situations.</p>
            </div>
        </div>
    </div>
</section>

<hr class="section-divider">


<!-- <section class="best-coding-course">
    <h2>Best Coding Course for Your Kids</h2>
    <div class="wrapper">

        <div class="pricing-table">
            <div class="head1">
                <h4 class="title">Introduction to Data Structures and Functions</h4>
                <h4 class="title">for 24 Classes</h4>
            </div>
            <div class="content">
                <ul>
                    <li>Course Includes:</li>
                    <li>• Basics of Python</li>
                    <li>• Create Simple Desktop App</li>
                    <li>• Create Animation</li>
                    <li>• Data Structures</li>
                </ul>
                <p>₹999<span> per Class</span></p>
                <div class="price">
                    <h1>Total: ₹23990</h1>
                </div>
                <p><span>No Cost EMI starts at ₹2000/month</span></p>
                <div class="buy-now">
                    <a href="#" class="btn round">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="pricing-table">
            <div class="head2">
                <h4 class="title">Introduction to Artificial Intelligence</h4>
                <h4 class="title">for 48 Classes</h4>
            </div>
            <div class="content">
                <ul>
                    <li>Course Includes:</li>
                    <li>• Basics of Python</li>
                    <li>• Create Animation</li>
                    <li>• Data Structures</li>
                    <li>• Develop Desktop App & Game</li>
                </ul>
                <p>₹950<span> per Class</span></p>
                <div class="price">
                    <h1>Total: ₹45600</h1>
                </div>
                <p><span>(5% off)</span></p>
                <p>No Cost EMI starts at ₹13800/month</p>
                <div class="buy-now">
                    <a href="#" class="btn round">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="pricing-table">
            <div class="head3">
                <h4 class="title">Introduction to Internet of Things and Robotics</h4>
                <h4 class="title">for 96 Classes</h4>
            </div>
            <div class="content">
                <ul>
                    <li>Course Includes:</li>
                    <li>• Create Animation</li>
                    <li>• Data Structures</li>
                    <li>• Develop Desktop App</li>
                    <li>• Create a Game</li>
                    <li>• Project Based on Real World Data</li>
                    <li>• Applications of AI & IoT</li>
                </ul>
                <p>₹900<span> per Class</span></p>
                <div class="price">
                    <h1>Total: ₹86400</h1>
                </div>
                <p><span>(10% off)</span></p>
                <p>No Cost EMI starts at ₹7200/month</p>
                <div class="buy-now">
                    <a href="#" class="btn round">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="pricing-table">
            <div class="head4">
                <h4 class="title">Master Apps, Website with Python, JS and AI-ML</h4>
                <h4 class="title">for 192 Classes</h4>
            </div>
            <div class="content">
                <ul>
                    <li>Course Includes:</li>
                    <li>• Create a Game</li>
                    <li>• Basics of Python</li>
                    <li>• Learn JavaScript, Build Websites</li>
                    <li>• Project Based on Real World Data</li>
                    <li>• Applications of AI & IoT</li>
                    <li>• Create Lifestyle Apps</li>
                </ul>
                <p>₹850<span> per Class</span></p>
                <div class="price">
                    <h1>Total: ₹163200</h1>
                </div>
                <p><span>(15% off)</span></p>
                <p>No Cost EMI starts at ₹13600/month</p>
                <div class="buy-now">
                    <a href="#" class="btn round">Buy Now</a>
                </div>
            </div>
        </div>

    </div>
</section> -->
<hr class="section-divider">
<section class="get-started">
    <div class="container">
        <h2>How To Get Started?</h2>
        <div class="steps">
            <div class="step">
                <div class="circle">
                    <span class="icon"><i class="fas fa-bell"></i></span>
                </div>
                <h3>1. Choose the Right Course</h3>
                <p>Choose the right course of your choice.</p>
            </div>
            <div class="step">
                <div class="circle">
                    <span class="icon"><i class="fas fa-book-open"></i></span>
                </div>
                <h3>2. Trial Class</h3>
                <p>Book a FREE live demo session.</p>
            </div>
            <div class="step">
                <div class="circle">
                    <span class="icon"><i class="fas fa-pencil-alt"></i></span>
                </div>
                <h3>3. Enroll</h3>
                <p>Register with us in any of our programs.</p>
            </div>
            <div class="step">
                <div class="circle">
                    <span class="icon"><i class="fas fa-laptop-code"></i></span>
                </div>
                <h3>4. Start Learning</h3>
                <p>Start learning from your home with the help of our experienced mentors.</p>
            </div>
            <div class="step">
                <div class="circle">
                    <span class="icon"><i class="fas fa-certificate"></i></span>
                </div>
                <h3>5. Certification</h3>
                <p>Successfully complete all assessments to demonstrate your proficiency and get certification.</p>
            </div>
        </div>
    </div>
</section>

<hr class="section-divider">


<section class="experience-games">
    <div class="container">
        <h2>EXPERIENCE THE GAMES CREATED BY OUR STUDENTS</h2>
        <div class="games-row">
            <div class="game-card col-md-4">
                <div class="icon-container">
                    <span class="icon"><i class="fas fa-code"></i></span>
                </div>
                <img src="<?= base_url(); ?>public/assets/landImg/33.webp" alt="Game 1" class="game-image">
                <div class="input-option">
                    <label for="input1">1</label>
                    <input type="text" id="input1" placeholder="" class="game-input">
                </div>
                <p>There is just enough space here for several lines of text. Use it well.</p>
            </div>
            <div class="game-card col-md-4">
                <div class="icon-container">
                    <span class="icon"><i class="fas fa-laptop-code"></i></span>
                </div>
                <img src="<?= base_url(); ?>public/assets/landImg/34.webp" alt="Game 2" class="game-image">
                <div class="input-option">
                    <label for="input2">2</label>
                    <input type="text" id="input2" placeholder="" class="game-input">
                </div>
                <p>There is just enough space here for several lines of text. Use it well.</p>
            </div>
            <div class="game-card col-md-4">
                <div class="icon-container">
                    <span class="icon"><i class="fas fa-question"></i></span>
                </div>
                <img src="<?= base_url(); ?>public/assets/landImg/35.webp" alt="Game 3" class="game-image">
                <div class="input-option">
                    <label for="input3">3</label>
                    <input type="text" id="input3" placeholder="" class="game-input">
                </div>
                <p>There is just enough space here for several lines of text. Use it well.</p>
            </div>
        </div>
        <!-- Centered button below the game cards -->
        <div class="button-container">
            <button class="gradient-button">LTP</button>
        </div>
    </div>
</section>

<hr class="section-divider">

<section class="codutor-surveys">
    <div class="container">
        <h2>Codutor Online Session Surveys</h2>
        <p class="sub-header">See what our learners had to say after this</p>
        <div class="surveys-row">
            <div class="survey-item">
                <div class="survey-box">
                    <div class="icon">
                        <img src="<?= base_url(); ?>public/assets/landImg/c13.png" alt="Man going up stairs" />
                        <!-- Replace with actual path -->
                    </div>
                </div>
                <p class="survey-text">98% are happy with their learning experience on Codutor</p>
            </div>

            <div class="survey-item">
                <div class="survey-box">
                    <div class="icon">
                        <img src="<?= base_url(); ?>public/assets/landImg/c14.png" alt="Self confidence" />
                        <!-- Replace with actual path -->
                    </div>
                </div>
                <p class="survey-text">95% say codutor.com helps them improve their coding skills</p>
            </div>

            <div class="survey-item">
                <div class="survey-box">
                    <div class="icon">
                        <img src="<?= base_url(); ?>public/assets/landImg/c13.png" alt="Happy bunny" />
                        <!-- Replace with actual path -->
                    </div>
                </div>
                <p class="survey-text">96% would recommend codutor.com to a friend</p>
            </div>

            <div class="survey-item">
                <div class="survey-box">
                    <div class="icon">
                        <img src="<?= base_url(); ?>public/assets/landImg/c14.png" alt="Hand stand 5 star" />
                        <!-- Replace with actual path -->
                    </div>
                </div>
                <p class="survey-text">4.9 average rating of codutor.com, out of 5</p>
            </div>
        </div>
        <div class="button-container">
            <button class="gradient-button">CTA</button>
        </div>
    </div>
</section>

<hr class="section-divider">

<section class="testimonials">
    <div class="container">
        <h2>Testimonials</h2>

        <!-- Slider Wrapper -->
        <div class="testimonial-slider">
            <!-- Video and Feedback Rows Container -->
            <div class="testimonial-slide-wrapper">
                <!-- Slide 1: Video Row -->
                <div class="testimonial-slide video-row">
                    <div class="video-item">
                        <video width="250px" controls>
                            <source src="video1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p class="owner">John Doe, Age 25</p>
                    </div>
                    <div class="video-item">
                        <video width="250px" controls>
                            <source src="video2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p class="owner">Jane Smith, Age 30</p>
                    </div>
                    <div class="video-item">
                        <video width="250px" controls>
                            <source src="video3.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p class="owner">Alex Brown, Age 28</p>
                    </div>
                    <div class="video-item">
                        <video width="250px" controls>
                            <source src="video4.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p class="owner">Emily Green, Age 22</p>
                    </div>
                </div>

                <!-- Slide 1: Feedback Row -->
                <div class="testimonial-slide feedback-row">
                    <div class="feedback-item">
                        <img src="<?= base_url(); ?>public/assets/landImg/c15.png" alt="Icon" class="feedback-icon">
                        <p class="feedback-owner">John Doe</p>
                        <div class="rating">
                            ★★★★☆
                        </div>
                        <p class="r1">"Amazing experience, the best learning platform I've ever used!"</p>
                        <p class="more-feedback">I was able to improve my skills very quickly thanks to the
                            well-organized content and supportive community. Highly recommend it!</p>
                    </div>
                    <div class="feedback-item">
                        <img src="<?= base_url(); ?>public/assets/landImg/c15.png" alt="Icon" class="feedback-icon">
                        <p class="feedback-owner">Jane Smith</p>
                        <div class="rating">
                            ★★★★★
                        </div>
                        <p class="r1">"My coding skills improved significantly."</p>
                        <p class="more-feedback">The interactive lessons made it easy to grasp new concepts. Codutor is
                            truly a great platform!</p>
                    </div>
                    <div class="feedback-item">
                        <img src="<?= base_url(); ?>public/assets/landImg/c15.png" alt="Icon" class="feedback-icon">
                        <p class="feedback-owner">Alex Brown</p>
                        <div class="rating">
                            ★★★★☆
                        </div>
                        <p class="r1">"Highly recommend Codutor for any learner!"</p>
                        <p class="more-feedback">The platform's flexibility allowed me to learn at my own pace and
                            sharpen my skills.</p>
                    </div>
                    <div class="feedback-item">
                        <img src="<?= base_url(); ?>public/assets/landImg/c15.png" alt="Icon" class="feedback-icon">
                        <p class="feedback-owner">Emily Green</p>
                        <div class="rating">
                            ★★★★☆
                        </div>
                        <p class="r1">"Codutor helped me in my job search with the best coding tutorials."</p>
                        <p class="more-feedback">I landed a job thanks to the skills I gained here. Thank you, Codutor!
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slider Dots -->
            <div class="slider-dots">
                <span class="dot" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

        <!-- Button at the end -->
        <div class="button-container">
            <button class="gradient-button">CTA</button>
        </div>
    </div>
</section>
<hr class="section-divider">
<section class="superstar-teacher">
    <div class="container">
        <!-- Heading -->
        <h2 class="heading">Superstar Best Teacher</h2>

        <!-- Teacher Introduction Section -->
        <div class="teacher-intro">
            <!-- Left Side Content -->
            <div class="intro-left">
                <ul class="fun-info">
                    <li>Let's get to know our teacher!Educational background</li>
                    <li>Teaching Experience</li>
                    <li>Fun facts</li>
                </ul>
            </div>

            <!-- Right Side Circles -->
            <div class="intro-right">
                <!-- Circle 1 with Teacher Image -->
                <div class="circle-wrapper">
                    <div class="circle-large">
                        <img src="<?= base_url(); ?>public/assets/landImg/c16.jpg" alt="Teacher Image">
                        <div class="teacher-info">
                            <div class="teacher-name">Tanya</div>
                            <div class="teacher-qualification">BE - Computer Science</div>
                        </div>
                    </div>
                    <!-- Circle 2 with Text -->
                    <div class="circle-small">
                        <h3>Students Review</h3>
                        <p class="stdR">Students Review & Recommendation</p>
                    </div>

                </div>
            </div>
        </div>

        <!-- Row for Slider -->
        <div class="teacher-slider">
            <div class="slider-wrapper">

                <div class="slider-item">
                    <div class="circles">
                        <img src="<?= base_url(); ?>public/assets/landImg/6.webp" alt="Student 1">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="circles">
                        <img src="<?= base_url(); ?>public/assets/landImg/1.webp" alt="Student 2">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="circles">
                        <img src="<?= base_url(); ?>public/assets/landImg/2.webp" alt="Student 3">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="circles">
                        <img src="<?= base_url(); ?>public/assets/landImg/3.webp" alt="Student 4">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="circles">
                        <img src="<?= base_url(); ?>public/assets/landImg/4.webp" alt="Student 5">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="circles">
                        <img src="<?= base_url(); ?>public/assets/landImg/5.webp" alt="Student 6">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="circles">
                        <img src="<?= base_url(); ?>public/assets/landImg/6.webp" alt="Student 7">
                    </div>
                </div>

            </div>
        </div>

        <div class="button-container">
            <button class="gradient-button">Become a Teacher</button>
        </div>
    </div>
</section>
<hr class="section-divider">
<section class="superstar-student">
    <div class="student-projects">
        <div class="heading-section">
            <h2>Amazing projects created by our students from across the globe</h2>
            <img src="<?= base_url(); ?>public/assets/landImg/19.webp" alt="Project image" class="heading-image">
        </div>
        <div class="extra-images">
            <img src="<?= base_url(); ?>public/assets/landImg/cd8.webp" alt="Extra Image 1" class="extra-image1">
            <img src="<?= base_url(); ?>public/assets/landImg/cd7.webp" alt="Extra Image 2" class="extra-image2">
        </div>


        <div class="card-container">
            <!-- Student Card 1 -->
            <div class="student-card">
                <div class="student-info">
                    <div class="student-image">
                        <img src="<?= base_url(); ?>public/assets/landImg/cd3.webp" alt="Student">
                    </div>
                    <div class="student-details">
                        <h3>John Doe</h3>
                        <p>New York, USA</p>
                        <p>Grade A</p>
                    </div>
                </div>
                <div class="project-image">
                    <img src="<?= base_url(); ?>public/assets/landImg/38.webp" alt="Project">
                </div>
                <button class="explore-btn">Explore Project</button>
            </div>

            <!-- Student Card 2 -->
            <div class="student-card">
                <div class="student-info">
                    <div class="student-image">
                        <img src="<?= base_url(); ?>public/assets/landImg/cd4.webp" alt="Student">
                    </div>
                    <div class="student-details">
                        <h3>Jane Smith</h3>
                        <p>London, UK</p>
                        <p>Grade B</p>
                    </div>
                </div>
                <div class="project-image">
                    <img src="<?= base_url(); ?>public/assets/landImg/34.webp" alt="Project">
                </div>
                <button class="explore-btn">Explore Project</button>
            </div>

            <!-- Student Card 3 -->
            <div class="student-card">
                <div class="student-info">
                    <div class="student-image">
                        <img src="<?= base_url(); ?>public/assets/landImg/cd5.png" alt="Student">
                    </div>
                    <div class="student-details">
                        <h3>Michael Brown</h3>
                        <p>Toronto, Canada</p>
                        <p>Grade A+</p>
                    </div>
                </div>
                <div class="project-image">
                    <img src="<?= base_url(); ?>public/assets/landImg/41.webp" alt="Project">
                </div>
                <button class="explore-btn">Explore Project</button>
            </div>

            <!-- Student Card 4 -->
            <div class="student-card">
                <div class="student-info">
                    <div class="student-image">
                        <img src="<?= base_url(); ?>public/assets/landImg/cd3.webp" alt="Student">
                    </div>
                    <div class="student-details">
                        <h3>Emily Davis</h3>
                        <p>Sydney, Australia</p>
                        <p>Grade B+</p>
                    </div>
                </div>
                <div class="project-image">
                    <img src="<?= base_url(); ?>public/assets/landImg/33.webp" alt="Project">
                </div>
                <button class="explore-btn">Explore Project</button>
            </div>

            <!-- Student Card 5 -->
            <div class="student-card">
                <div class="student-info">
                    <div class="student-image">
                        <img src="<?= base_url(); ?>public/assets/landImg/cd5.png" alt="Student">
                    </div>
                    <div class="student-details">
                        <h3>Sarah Wilson</h3>
                        <p>Paris, France</p>
                        <p>Grade A</p>
                    </div>
                </div>
                <div class="project-image">
                    <img src="<?= base_url(); ?>public/assets/landImg/34.webp" alt="Project">
                </div>
                <button class="explore-btn">Explore Project</button>
            </div>

            <!-- Student Card 6 -->
            <div class="student-card">
                <div class="student-info">
                    <div class="student-image">
                        <img src="<?= base_url(); ?>public/assets/landImg/cd4.webp" alt="Student">
                    </div>
                    <div class="student-details">
                        <h3>David Lee</h3>
                        <p>Tokyo, Japan</p>
                        <p>Grade A</p>
                    </div>
                </div>
                <div class="project-image">
                    <img src="<?= base_url(); ?>public/assets/landImg/35.webp" alt="Project">
                </div>
                <button class="explore-btn">Explore Project</button>
            </div>

            <!-- Student Card 7 -->
            <div class="student-card">
                <div class="student-info">
                    <div class="student-image">
                        <img src="<?= base_url(); ?>public/assets/landImg/cd3.webp" alt="Student">
                    </div>
                    <div class="student-details">
                        <h3>Anna Garcia</h3>
                        <p>Madrid, Spain</p>
                        <p>Grade A</p>
                    </div>
                </div>
                <div class="project-image">
                    <img src="<?= base_url(); ?>public/assets/landImg/37.webp" alt="Project">
                </div>
                <button class="explore-btn">Explore Project</button>
            </div>

            <!-- Student Card 8 -->
            <div class="student-card">
                <div class="student-info">
                    <div class="student-image">
                        <img src="<?= base_url(); ?>public/assets/landImg/cd5.png" alt="Student">
                    </div>
                    <div class="student-details">
                        <h3>James Carter</h3>
                        <p>Berlin, Germany</p>
                        <p>Grade B+</p>
                    </div>
                </div>
                <div class="project-image">
                    <img src="<?= base_url(); ?>public/assets/landImg/38.webp" alt="Project">
                </div>
                <button class="explore-btn">Explore Project</button>
            </div>

            <!-- Student Card 9 -->
            <div class="student-card">
                <div class="student-info">
                    <div class="student-image">
                        <img src="<?= base_url(); ?>public/assets/landImg/cd4.webp" alt="Student">
                    </div>
                    <div class="student-details">
                        <h3>Linda Roberts</h3>
                        <p>Rome, Italy</p>
                        <p>Grade A</p>
                    </div>
                </div>
                <div class="project-image">
                    <img src="<?= base_url(); ?>public/assets/landImg/41.webp" alt="Project">
                </div>
                <button class="explore-btn">Explore Project</button>
            </div>
        </div>
    </div>
</section>

<hr class="section-divider">


<?php include 'footer.php'; ?>