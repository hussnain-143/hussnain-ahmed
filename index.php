<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hussnain Ahmed - Portfolio</title>
    <meta name="description"
        content="Hussnain Ahmed - Full-Stack and WordPress developer specializing in Full-Stack and WordPress development. Explore my skills, projects, experience, and certifications.">
    <meta name="keywords"
        content="Hussnain Ahmed, Full-Stack Developer, WordPress Developer, Laravel Developer, PHP Developer, Web Development, Portfolio">
    <meta name="author" content="Hussnain Ahmed">
    <meta property="og:title" content="Hussnain Ahmed - Portfolio">
    <meta property="og:description"
        content="Explore my skills, projects, experience, and certifications in full-stack and WordPress development.">
    <meta property="og:type" content="website">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Header section -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Stylized HA Logo -->
                <a class="navbar-brand logo" href="#">HA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
                        <li class="nav-item"><a class="nav-link" href="#experience-education">Experience</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero text-center" id="hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-start">
                        <h1 class="hero-title">Hi, I'm <span>Hussnain Ahmed</span></h1>
                        <p class="hero-subtitle">Full-Stack & WordPress Developer</p>
                        <a href="./assets/Hussnain Ahmed - Resume.pdf" class="btn orange-btn me-2" download>Download
                            Resume</a>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="./assets/img/half-profile.png" alt="Hussnain Ahmed" class="profile-img">
                    </div>
                </div>
            </div>
        </section>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2 class="about-title">About <span>Me</span></h2>
                    <p class="about-description">
                        I'm a passionate front-end and WordPress developer, dedicated to crafting interactive
                        and responsive web applications. I specialize in creating stunning, user-friendly
                        experiences that engage and inspire.
                    </p>
                    <a href="#contact" class="orange-btn">Hire Me</a>
                </div>
                <div class="about-image">
                    <img src="./assets/img/full-profile.png" alt="Your Name">
                </div>
            </div>
        </div>
    </section>

    <!-- Skill Section -->
    <section id="skills" class="skills-section">
        <div class="container">
            <h2 class="skills-title">My <span>Skills</span></h2>
            <div class="skills-grid">
                <!-- Skill Item 1 -->
                <div class="skill-circle" data-percent="95">
                    <div class="circle">
                        <svg width="120" height="120">
                            <defs>
                                <linearGradient id="gradient-html" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#ff7f11" />
                                    <stop offset="100%" stop-color="#ffcc00" />
                                </linearGradient>
                            </defs>
                            <circle cx="60" cy="60" r="50"></circle>
                            <circle cx="60" cy="60" r="50" class="progress-circle" style="stroke: url(#gradient-html);">
                            </circle>
                        </svg>
                        <div class="percentage">95%</div>
                    </div>
                    <h3>HTML</h3>
                </div>

                <!-- Skill Item 2 -->
                <div class="skill-circle" data-percent="90">
                    <div class="circle">
                        <svg width="120" height="120">
                            <defs>
                                <linearGradient id="gradient-css" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#007bff" />
                                    <stop offset="100%" stop-color="#00d4ff" />
                                </linearGradient>
                            </defs>
                            <circle cx="60" cy="60" r="50"></circle>
                            <circle cx="60" cy="60" r="50" class="progress-circle" style="stroke: url(#gradient-css);">
                            </circle>
                        </svg>
                        <div class="percentage">90%</div>
                    </div>
                    <h3>CSS</h3>
                </div>

                <!-- Skill Item 3 -->
                <div class="skill-circle" data-percent="85">
                    <div class="circle">
                        <svg width="120" height="120">
                            <defs>
                                <linearGradient id="gradient-js" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#f7df1e" />
                                    <stop offset="100%" stop-color="#ffb400" />
                                </linearGradient>
                            </defs>
                            <circle cx="60" cy="60" r="50"></circle>
                            <circle cx="60" cy="60" r="50" class="progress-circle" style="stroke: url(#gradient-js);">
                            </circle>
                        </svg>
                        <div class="percentage">85%</div>
                    </div>
                    <h3>JavaScript</h3>
                </div>

                <!-- Skill Item 4 -->
                <div class="skill-circle" data-percent="80">
                    <div class="circle">
                        <svg width="120" height="120">
                            <defs>
                                <linearGradient id="gradient-react" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#61dafb" />
                                    <stop offset="100%" stop-color="#0078d7" />
                                </linearGradient>
                            </defs>
                            <circle cx="60" cy="60" r="50"></circle>
                            <circle cx="60" cy="60" r="50" class="progress-circle"
                                style="stroke: url(#gradient-react);"></circle>
                        </svg>
                        <div class="percentage">80%</div>
                    </div>
                    <h3>React.js</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="projects-title">My <span>Projects</span></h2>

            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <img src="project1.jpg" alt="Project 1">
                    <div class="project-info">
                        <h3>Project One</h3>
                        <p>A modern website built with HTML, CSS, and JavaScript.</p>
                        <a href="#" class="btn">View Project</a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card">
                    <img src="project2.jpg" alt="Project 2">
                    <div class="project-info">
                        <h3>React Native App</h3>
                        <p>A mobile app developed using React Native and Expo.</p>
                        <a href="#" class="btn">View Project</a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card">
                    <img src="project3.jpg" alt="Project 3">
                    <div class="project-info">
                        <h3>WordPress Theme</h3>
                        <p>A custom WordPress theme designed for businesses.</p>
                        <a href="#" class="btn">View Project</a>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card">
                    <img src="project4.jpg" alt="Project 4">
                    <div class="project-info">
                        <h3>FastAPI Backend</h3>
                        <p>Built a REST API with FastAPI and SQLAlchemy.</p>
                        <a href="#" class="btn">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificate Section -->
    <section id="certificates" class="certificates-section">
        <div class="container">
            <h2 class="certificates-title">My <span>Certificates</span></h2>

            <div class="certificates-grid">
                <!-- Certificate 1 -->
                <div class="certificate-card">
                    <img src="./assets/img/full-profile.png" alt="Certificate 1" class="certificate-img">
                    <div class="certificate-info">
                        <h3>React Native Bootcamp</h3>
                        <p>Completed an advanced React Native bootcamp.</p>
                    </div>
                </div>

                <!-- Certificate 2 -->
                <div class="certificate-card">
                    <img src="certificate2.jpg" alt="Certificate 2" class="certificate-img">
                    <div class="certificate-info">
                        <h3>WordPress Theme Development</h3>
                        <p>Mastered WordPress theme development from scratch.</p>
                    </div>
                </div>

                <!-- Certificate 3 -->
                <div class="certificate-card">
                    <img src="certificate3.jpg" alt="Certificate 3" class="certificate-img">
                    <div class="certificate-info">
                        <h3>FastAPI & SQLAlchemy</h3>
                        <p>Built scalable APIs using FastAPI and SQLAlchemy.</p>
                    </div>
                </div>

                <!-- Certificate 4 -->
                <div class="certificate-card">
                    <img src="certificate4.jpg" alt="Certificate 4" class="certificate-img">
                    <div class="certificate-info">
                        <h3>JavaScript Mastery</h3>
                        <p>Completed a full-stack JavaScript course.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience & Education Section -->
    <section id="experience-education" class="experience-education-section">
        <div class="container">
            <h2 class="section-title">My <span>Experience </span> & <span>Education</span></h2>

            <div class="timeline">
                <!-- Experience 1 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>WordPress Developer Intern</h3>
                        <h4>LDNinjas | 2025 - Present</h4>
                        <p>Developing custom WordPress themes and optimizing user experiences.</p>
                    </div>
                </div>

                <!-- Experience 2 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>React Native Developer</h3>
                        <h4>Freelance | 2024 - Present</h4>
                        <p>Building scalable mobile applications with React Native and Expo.</p>
                    </div>
                </div>

                <!-- Education 1 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>Web Development Bootcamp</h3>
                        <h4>WPBrigade & iCodeGuru | 2024</h4>
                        <p>Mastered WordPress theme development and front-end technologies.</p>
                    </div>
                </div>

                <!-- Education 2 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>Bachelor's in Computer Science</h3>
                        <h4>XYZ University | 2021 - 2025</h4>
                        <p>Focused on software development, algorithms, and cloud computing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">Get in <span>Touch</span></h2>
            <form action="send_email.php" method="post" enctype="text/plain">
                <div class="input-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="input-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="input-group">
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Logo -->
                <div class="footer-logo">
                    <a href="#" class="logo">HA</a>
                </div>

                <!-- Social Links -->
                <div class="footer-social">
                    <a href="https://www.linkedin.com/in/hussnain-ahmed143/" target="_blank" title="LinkedIn">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/hussnain-143" target="_blank" title="GitHub">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com/hussnainahmed143ha" target="_blank" title="FaceBook">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer-bottom">
                <p>© 2025 Hussnain Ahmed. All rights reserved.</p>
            </div>
        </div>
    </footer>




    <script src="script.js"></script>
</body>

</html>