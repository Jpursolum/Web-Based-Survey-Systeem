<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SURVEY</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    </head>
    
    <body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5 d-flex justify-content-between align-items-center">
        <!-- Logo Section -->
        <div class="d-flex align-items-center">
            <a class="navbar-brand fw-bold me-3" href="#page-top">
                <img src="assets/img/logo.png" alt="DICT Logo" width="110" height="50">
            </a>
            <a class="navbar-brand fw-bold" href="#page-top">
                <img src="assets/img/BP.png" alt="Second Logo" width="60" height="50">
            </a>
            <a class="navbar-brand fw-bold" href="#page-top">
                <img src="assets/img/arta.png" alt="Third Logo" width="100" height="50">
            </a>
        </div>

        <!-- Navbar Toggle Button (For Mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" 
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi-list"></i>
        </button>

        <!-- Navbar Links & Login Button -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#masthead">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <button class="btn btn-primary rounded-pill px-3 ms-3" onclick="window.location.href='http://127.0.0.1:8000/admin';">
                <i class="bi-lock-fill me-2"></i> Login
            </button>
        </div>
    </div>
</nav>

<!-- Mashead header-->
<header class="masthead" id="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">HELP US SERVE YOU BETTER!</h1>
                    <p class="lead fw-normal text-muted mb-5">This Client Satisfaction Measurement (CSM) tracks the customer experience of government offices. Your feedback on the concluded transaction will help this office provide a better service. Personal information shared will be kept confidential and you always have the option to answer this form.</p>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <p class="lead fw-normal text-muted mb-5">For more information you may visit our virtual Citizen's Charter Handbook: ( Citizens Charter )</p>
                        <!-- <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a> -->
                    </div>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Send Feedback</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Masthead device mockup feature-->
                <div class="masthead-device-mockup">
                    <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                <stop class="gradient-start-color" offset="0%"></stop>
                                <stop class="gradient-end-color" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                    </svg>
                    <svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">
                                <!-- PUT CONTENTS HERE: -->
                                <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%;">
                                    <source src="assets/img/oldsur.mp4" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="features" class="py-5 features-section">
    <div class="container px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Key Features</h2>
            <p class="lead text-muted">Innovative tools to ensure seamless feedback collection and data analysis.</p>
        </div>
        <div class="row gx-5 text-center">
            <div class="col-md-3">
                <i class="bi-clipboard-check icon-feature text-gradient d-block mb-3"></i>
                <h3 class="font-alt">User-Friendly Surveys</h3>
                <p class="text-muted mb-0">Easily submit feedback with a simple and intuitive survey interface.</p>
            </div>
            <div class="col-md-3">
                <i class="bi-bar-chart icon-feature text-gradient d-block mb-3"></i>
                <h3 class="font-alt">Real-Time Data Insights</h3>
                <p class="text-muted mb-0">Get instant analytics to improve public services efficiently.</p>
            </div>
            <div class="col-md-3">
                <i class="bi-lock icon-feature text-gradient d-block mb-3"></i>
                <h3 class="font-alt">Secure & Confidential</h3>
                <p class="text-muted mb-0">Your responses are encrypted and kept strictly confidential.</p>
            </div>
            <div class="col-md-3">
                <i class="bi-globe icon-feature text-gradient d-block mb-3"></i>
                <h3 class="font-alt">Accessible Anywhere</h3>
                <p class="text-muted mb-0">Access the survey anytime, on any device, with full responsiveness.</p>
            </div>
        </div>
    </div>
</section>




<!-- Mission and Vision Section -->
<section id="mission-vision" class="py-5 mission-vision-section" style="background: linear-gradient(to right, #007bff, #6610f2); color: white;">
    <div class="container px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #fff;">Our Mission & Vision</h2>
            <p class="lead" style="color: #d9d9d9;">Empowering the Nation Through Innovation</p>
        </div>
        <div class="row gx-5 align-items-center">
            <!-- Mission -->
            <div class="col-md-6 mb-5">
                <div class="p-4 shadow-lg rounded-lg" style="background: #ffffff; color: #212529;">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <i class="bi-flag text-primary display-3 me-3"></i>
                        <h3 class="fw-bold text-primary m-0">Mission</h3>
                    </div>
                    <p class="text-muted">
                        To establish a well-connected, inclusive, and secure digital society where every Filipino can thrive through 
                        innovation and progress, empowered by advanced ICT.
                    </p>
                </div>
            </div>
            <!-- Vision -->
            <div class="col-md-6 mb-5">
                <div class="p-4 shadow-lg rounded-lg" style="background: #ffffff; color: #212529;">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <i class="bi-lightbulb text-warning display-3 me-3"></i>
                        <h3 class="fw-bold text-warning m-0">Vision</h3>
                    </div>
                    <p class="text-muted">
                        To lead the Philippines' digital transformation as a catalyst for economic growth, improving lives through 
                        innovative, accessible, and sustainable ICT services.
                    </p>
                </div>
            </div>
        </div>
        <!-- Call-to-action -->
        <div class="text-center mt-4">
            <button class="btn btn-warning rounded-pill px-5 py-2 shadow" style="background: #ffc107; border: none; color: #212529;">
                Learn More About DICT
            </button>
        </div>
    </div>
</section>




<!-- Services Section -->
<section id="services" class="bg-light py-5 services-section">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Our Services</h2>
                    <p class="lead text-muted mb-0">Empowering citizens with accessible and high-quality services.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-md-4 mb-5">
                <div class="text-center">
                    <i class="bi-speedometer2 icon-feature text-gradient d-block mb-3"></i>
                    <h3 class="font-alt">Efficient Processes</h3>
                    <p class="text-muted mb-0">Quick and streamlined processes to save your valuable time.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="text-center">
                    <i class="bi-people icon-feature text-gradient d-block mb-3"></i>
                    <h3 class="font-alt">Community-Centric</h3>
                    <p class="text-muted mb-0">Services designed with the community's needs in mind.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="text-center">
                    <i class="bi-stars icon-feature text-gradient d-block mb-3"></i>
                    <h3 class="font-alt">Excellence Guaranteed</h3>
                    <p class="text-muted mb-0">Providing top-notch services to ensure satisfaction.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contact Section -->
<section id="contact" class="py-5 contact-section bg-light">
    <div class="container px-4 px-lg-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-primary">Contact Us</h2>
            <p class="lead text-muted">We'd love to hear from you! Reach out for inquiries, feedback, or support.</p>
        </div>
        <div class="row gx-5">
            <!-- Contact Info -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="p-4 shadow-sm rounded-3 bg-white">
                    <h3 class="fw-bold text-secondary mb-3">Get In Touch</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt-fill text-primary me-3"></i>
                            <span class="text-muted">Quezon City, Philippines</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-telephone-fill text-primary me-3"></i>
                            <span class="text-muted">+63 2 123-4567</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-fill text-primary me-3"></i>
                            <span class="text-muted">contact@dict.gov.ph</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-clock-fill text-primary me-3"></i>
                            <span class="text-muted">Mon - Fri, 9AM - 5PM</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <form class="p-4 shadow-sm rounded-3 bg-white">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label fw-bold">Your Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary rounded-pill px-4 py-2">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>






<!-- Quote/testimonial aside 
<aside class="text-center" style="background-color: #3347ff;">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xl-8">
                <div class="h2 fs-1 text-white mb-4">
                    Help us serve you better! 🚀 Your feedback on our Client Satisfaction Measurement (CSM) helps improve government services. 
                    Your responses stay confidential, and your voice makes a difference! 💙✨
                </div>
            </div>
        </div>
    </div>
</aside>
-->




<!--<section class="bg-light">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-12 col-lg-5">
                <h2 class="display-4 lh-1 mb-4">Enhancing Public Services Through Your Feedback</h2>
                <p class="lead fw-normal text-muted mb-2">
                    Your voice matters! The DICT Survey System allows citizens to provide valuable insights, helping us improve government digital services. 
                    Participate today and be a part of building a more efficient and responsive public sector.
                </p>
                
            </div>
            <div class="col-sm-8 col-md-6">
                <div class="px-5 px-sm-0">
                   <!--   <img class="img-fluid rounded-circle" src="assets/img/survey-feedback.jpg" alt="Survey Feedback"> 
                </div>
            </div>
        </div>
    </div>
</section>-->
-->

        <!-- Call to action section-->
       <!--  <section class="cta">
            <div class="cta-content">
                <div class="container px-5">
                    <h2 class="text-white display-1 lh-1 mb-4">
                        Stop waiting.
                        <br />
                        Start building.
                    </h2>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank">Download for free</a>
                </div>
            </div>
        </section>
        <!-- App badge section-->
     <!--   <section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container px-5">
                <h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                    <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
                </div>
            </div>
        </section>-->
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <p class="lead fw-bold text-primary">Total Visitors: {{ \App\Models\Visitor::count() }}</p>
                    <div class="mb-2">&copy; Your Website 2023. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div>
        </footer>
<!-- Feedback Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <div>
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send Feedback</h5>
                    <p class="text-white mb-0">
                        Click your answer to the Citizen's Charter (CC) questions. The Citizen's Charter is an official document that reflects the services of a government agency/office, including its requirements, fees, and processing times, among others.
                    </p>
                </div>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body border-0 p-4">
                <form id="contactForm" action="{{ route('survey.submit') }}" method="POST">
                    @csrf

                    <!-- Step 1 (Page 1) -->
                    <div id="step1">
                        <!-- Email input (Optional) -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email">
                            <label for="email" class="fw-bold">Email (Optional)</label>
                        </div>

                        <!-- Client Type -->
                        <div class="form-floating mb-3">
                            <select class="form-control" id="client_type" name="client_type" required>
                                <option value="" disabled selected>Select Client Type</option>
                                <option value="Citizen">Citizen</option>
                                <option value="Business">Business</option>
                                <option value="Government">Government</option>
                            </select>
                            <label for="client_type" class="fw-bold">Client Type</label>
                        </div>

                        <!-- Date -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="date" type="date" name="date" required>
                            <label for="date" class="fw-bold">Date</label>
                        </div>

                        <!-- Sex -->
                        <div class="form-floating mb-3">
                            <select class="form-control" id="sex" name="sex" required>
                                <option value="" disabled selected>Select Sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Prefer not to say">Prefer not to say</option>
                            </select>
                            <label for="sex" class="fw-bold">Sex</label>
                        </div>

                        <!-- Age -->
                        <div class="form-floating mb-3">
                            <select class="form-control" id="age" name="age" required>
                                <option value="" disabled selected>Select Age Range</option>
                                <option value="18-25">18-25</option>
                                <option value="26-35">26-35</option>
                                <option value="36-45">36-45</option>
                                <option value="46-60">46-60</option>
                                <option value="60+">60 and above</option>
                            </select>
                            <label for="age" class="fw-bold">Age</label>
                        </div>

                        <!-- Region of Residence -->
                        <div class="form-floating mb-3">
                            <select class="form-control" id="region" name="region">
                                <option value="" disabled selected>Select Region</option>
                                <option value="NCR">National Capital Region (NCR)</option>
                                <option value="CAR">Cordillera Administrative Region (CAR)</option>
                                <option value="Region I">Ilocos Region (Region I)</option>
                                <option value="Region II">Cagayan Valley (Region II)</option>
                                <option value="Region III">Central Luzon (Region III)</option>
                                <option value="Region IV-A">CALABARZON (Region IV-A)</option>
                                <option value="MIMAROPA">MIMAROPA Region</option>
                                <option value="Region V">Bicol Region (Region V)</option>
                                <option value="Region VI">Western Visayas (Region VI)</option>
                                <option value="Region VII">Central Visayas (Region VII)</option>
                                <option value="Region VIII">Eastern Visayas (Region VIII)</option>
                                <option value="Region IX">Zamboanga Peninsula (Region IX)</option>
                                <option value="Region X">Northern Mindanao (Region X)</option>
                                <option value="Region XI">Davao Region (Region XI)</option>
                                <option value="Region XII">SOCCSKSARGEN (Region XII)</option>
                                <option value="Region XIII">Caraga (Region XIII)</option>
                                <option value="BARMM">Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)</option>
                            </select>
                            <label for="region" class="fw-bold">Region of Residence</label>
                        </div>

                        <!-- Service Availed -->
                        <div class="form-floating mb-3">
                            <select class="form-control" id="service_availed" name="service_availed" required>
                                <option value="" disabled selected>Select Service Availed</option>
                                <option value="DICT Technical Assistance (All Projects)">DICT Technical Assistance (All Projects)</option>
                                <option value="Technical assistance on iBPLS/ELGU">Technical assistance on iBPLS/ELGU</option>
                                <option value="Application to ICT Diagnostic Examination">Application to ICT Diagnostic Examination</option>
                                <option value="Application for ICT Proficiency Hands-on Examination">Application for ICT Proficiency Hands-on Examination</option>
                                <option value="Capacity Development/Training">Capacity Development/Training</option>
                                <option value="Technical Assistance to PNPKI">Technical Assistance to PNPKI</option>
                            </select>
                            <label for="service_availed" class="fw-bold">Service Availed</label>
                        </div>

                        <!-- Mode of Transaction -->
                        <div class="form-floating mb-3">
                            <select class="form-control" id="transaction_mode" name="transaction_mode" required>
                                <option value="" disabled selected>Select Transaction Mode</option>
                                <option value="Physical">Physical Transaction</option>
                                <option value="Online">Online Transaction</option>
                                <option value="Both">Both</option>
                            </select>
                            <label for="transaction_mode" class="fw-bold">Mode of Transaction</label>
                        </div>



                    <div class="d-grid">
                        <button class="btn btn-primary rounded-pill btn-lg" type="button" onclick="nextStep(1)">Next</button>
                    </div>
                </div>
                    <!-- Step 2 (Page 2) -->
                    <div id="step2" style="display: none;">
                        <!-- Awareness of CC -->
                        <div class="form-floating mb-3">
                            <select class="form-control" id="awareness_cc" name="awareness_cc" required>
                                <option value="" disabled selected>Which of the following describes your awareness of the CC?</option>
                                <option value="Saw CC">I know what a CC is and I saw this office’s CC.</option>
                                <option value="Didn't see CC">I know what a CC is but I did NOT see this office’s CC.</option>
                                <option value="Learned from office">I learned of the CC only when I saw this office’s CC.</option>
                                <option value="Don't know CC">I do not know what a CC is.</option>
                            </select>
                            <label for="awareness_cc" class="fw-bold">CC1: Awareness of CC</label>
                        </div>

                        <!-- Visibility of CC -->
                        <div class="form-floating mb-3">
                            <select class="form-control" id="visibility_cc" name="visibility_cc" required>
                                <option value="" disabled selected>If aware of CC, would you say that the CC of this office was</option>
                                <option value="Easy to see">Easy to see</option>
                                <option value="Somewhat easy">Somewhat easy to see</option>
                                <option value="Difficult">Difficult to see</option>
                                <option value="Not visible">Not visible at all</option>
                                <option value="N/A">N/A</option>
                            </select>
                            <label for="visibility_cc" class="fw-bold">CC2: Visibility of CC</label>
                        </div>

                        <!-- Helpfulness of CC -->
                        <div class="form-floating mb-3">
                            <select class="form-control" id="usefulness_cc" name="usefulness_cc" required>
                                <option value="" disabled selected>If aware of CC, how much did the CC help you?</option>
                                <option value="Helped very much">Helped very much</option>
                                <option value="Somewhat helped">Somewhat helped</option>
                                <option value="Did not help">Did not help</option>
                                <option value="N/A">N/A</option>
                            </select>
                            <label for="usefulness_cc" class="fw-bold">CC3: Helpfulness of CC</label>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-secondary rounded-pill btn-lg" type="button" onclick="prevStep(2)">Back</button>
                            <button class="btn btn-primary rounded-pill btn-lg" type="button" onclick="nextStep(2)">Next</button>
                        </div>
                    </div>

                     <!-- Step 3: Survey Table -->
                    <div id="step3" class="step" style="display: none;">
                        <div class="instructions bg-primary text-white p-3 rounded">
                            <h5>INSTRUCTIONS:</h5>
                            <p>For <strong>SQD 0-8</strong>, please <strong>check</strong> the column that best corresponds to your answer.</p>
                            <p><strong>PLEASE CHECK ONE PER ROW ONLY</strong></p>
                        </div>

                        <table class="survey-table w-100 text-center border">
                            <thead>
                                <tr>
                                    <th>Statement</th>
                                    <th>Strongly Agree (5)</th>
                                    <th>Agree (4)</th>
                                    <th>Neither Agree nor Disagree (3)</th>
                                    <th>Disagree (2)</th>
                                    <th>Strongly Disagree (1)</th>
                                    <th>N/A</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $questions = [
                                        'SQD0' => 'I am satisfied with the service that I availed.',
                                        'SQD1' => 'I spent a reasonable amount of time for my transaction.',
                                        'SQD2' => 'The office followed the transaction\'s requirements and steps based on the information provided.',
                                        'SQD3' => 'The steps (including payment) I needed to do for my transaction were easy and simple.',
                                        'SQD4' => 'I easily found information about my transaction from the office\'s website.',
                                        'SQD5' => 'I paid a reasonable amount of fees for my transaction. (If service was free, mark "N/A").',
                                        'SQD6' => 'I am confident my online transaction was secure.',
                                        'SQD7' => 'The office\'s online support was available, and (if asked questions) online support was quick to respond.',
                                        'SQD8' => 'I got what I needed from the government office, or (if denied) denial of request was sufficiently explained to me.'
                                    ];
                                @endphp

                                        @foreach ($questions as $key => $question)
                                        <tr>
                                            <td class="text-start fw-semibold">{{ $question }}</td>
                                            @foreach (['5', '4', '3', '2', '1', 'N/A'] as $value)
                                                <td>
                                                    <input type="radio" name="{{ $key }}" value="{{ $value }}" {{ old($key) == $value ? 'checked' : '' }}>
                                                </td>
                                            @endforeach
                                        </tr>
                                        @endforeach

                            </tbody>
                        </table>
                        <!-- Notification for Successful Submission -->
@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Survey Submitted',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    });
</script>
@endif

                        <!-- Submit Button -->
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-secondary rounded-pill btn-lg" type="button" onclick="prevStep(3)">Back</button>
                            <button class="btn btn-primary rounded-pill btn-lg" id="submitButton" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function nextStep(currentStep) {
        document.getElementById(`step${currentStep}`).style.display = 'none';
        document.getElementById(`step${currentStep + 1}`).style.display = 'block';
    }

    function prevStep(currentStep) {
        document.getElementById(`step${currentStep}`).style.display = 'none';
        document.getElementById(`step${currentStep - 1}`).style.display = 'block';
    }
    document.addEventListener("DOMContentLoaded", function () {
        const features = document.querySelectorAll(".features-section .col-md-3");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view");
                }
            });
        });

        features.forEach((feature) => observer.observe(feature));
    });
    document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll(".mission-vision-section .col-md-6");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view");
                }
            });
        });

        sections.forEach((section) => observer.observe(section));
    });
    document.addEventListener("DOMContentLoaded", function () {
        const serviceItems = document.querySelectorAll(".services-section .col-md-4");
        const contactItems = document.querySelectorAll(".contact-section .col-lg-5, .contact-section .col-lg-7");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view");
                }
            });
        });

        serviceItems.forEach((item) => observer.observe(item));
        contactItems.forEach((item) => observer.observe(item));
    });
</script>

<style>
    /* Initial state for animation */
.services-section .col-md-4,
.contact-section .col-lg-5,
.contact-section .col-lg-7 {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

/* Visible state */
.services-section .col-md-4.in-view,
.contact-section .col-lg-5.in-view,
.contact-section .col-lg-7.in-view {
    opacity: 1;
    transform: translateY(0);
}

    /* Initial state for animation */
.mission-vision-section .col-md-6 {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

/* Visible state */
.mission-vision-section .col-md-6.in-view {
    opacity: 1;
    transform: translateY(0);
}

    .survey-table {
        border-collapse: collapse;
        text-align: center;
    }

    .survey-table th, .survey-table td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    .survey-table th {
        background-color: #f8f9fa;
        font-weight: bold;
    }

    .survey-table td:first-child {
        text-align: left;
        font-weight: 500;
        width: 40%;
    }

    .survey-table input[type="radio"] {
        transform: scale(1.2);
        cursor: pointer;
    }
    .modal-xl {
        max-width: 90vw !important; /* Makes it take up 90% of the viewport width */
        width: 90vw;
    }
    
    .modal-content {
        min-height: 80vh; /* Increase modal height */
    }
    /* Smooth fade-in animation */
.features-section .col-md-3 {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

/* Make elements visible when in view */
.features-section .col-md-3.in-view {
    opacity: 1;
    transform: translateY(0);
}


    
</style>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
