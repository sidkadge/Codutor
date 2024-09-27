<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codutor</title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/header.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section1.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section3.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section4.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section5.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section6.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section7.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section8.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section9.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section10.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/section11.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/home/footer.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  

</head>

<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>

            <ul class="menu-items">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Courses <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Web Development <i class="fas fa-laptop-code"></i></a></li>
                        <li><a href="#">Data Science <i class="fas fa-chart-line"></i></a></li>
                        <li><a href="#">Design <i class="fas fa-paint-brush"></i></a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Quizzes <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Math Quiz <i class="fas fa-calculator"></i></a></li>
                        <li><a href="#">Science Quiz <i class="fas fa-flask"></i></a></li>
                        <li><a href="#">History Quiz <i class="fas fa-landmark"></i></a></li>
                    </ul>
                </li>

                <li><a href="#">For Schools</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            </ul>

            <h1 class="logo">
                <img src="<?= base_url(); ?>public/assets/landImg/conductor.png" alt="Website Logo">
            </h1>
            
            <a href="<?php echo base_url(); ?>book-free-trail" class="book-trial-btn">Book Free Trial</a>
        </div>
    </nav>

    <script>

        document.querySelectorAll('.dropdown-toggle').forEach(item => {
            item.addEventListener('click', event => {
                const dropdownMenu = item.nextElementSibling;
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';

                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    if (menu !== dropdownMenu) {
                        menu.style.display = 'none';
                    }
                });
                
                event.preventDefault(); 
            });
        });

        document.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.style.display = 'none';
                });
            }
        });
    </script>

