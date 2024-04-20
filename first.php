<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>
<body>
    <div class="mobile-message">
        <p>Sorry, this website is not accessible on small screens. Please use <b>Desktop Mode</b> to access this website.</p>
    </div>
    <div class="mobile-message2">
        <img src="imm.jpg" alt="scrnsht" class="mob">
    </div>
    <div class="website-container">
        <div class="website-content">
            <div class="nav">
                <div class="toggle-btn" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
                <div class="logo">
                    <p><a href="first.php">🩺HDA</a> </p>
                </div>
                <div class="navbar">
                <ul class="nav-list">
                        <li class="nav-item">
                            <a class="nav-li" id="non">ㅤㅤ▼</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="first.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="medi-chatbot.php">Medi-ChatBot</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ml-analyzer.php">ML-Analyzer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ai-analyzer.php">AI-Analyzer</a>
                        </li>
                        <li class="nav-item" id="item">
                            <a class="nav-link" href="findadoctor.php" >Find a Doctor</a>
                        </li>
                        <div class="dropdown">
                        <button class="dropbtn">More &#9660;</button>
                        <div class="dropdown-content">
                            <a href="about.php">About Us</a>
                            <a href="terms.php">Terms & Conditions</a>
                            <a href="faq.php">FAQ</a>
                        </div>
                    </ul>
                </div>

                <div class="right-links">

                    <a href="index.php"> <button class="btn">Login</button> </a>

                </div>
            </div>
            <header>
                <div class="container1">
                    <div class="content">
                        <h1>HDA System:</h1><h2><span id="element"></span></h2>
                        <p>Welcome to <i><b>H</b>uman <b>D</b>isease <b>A</b>nalyzer</i>. Experience precision in diagnostics: Our AI-driven platform swiftly identifies diseases from reported symptoms, revolutionizing healthcare.</p>
                        <a href="register.php"> <button class="btn2">Get Started - It's Free</button></a>
                    </div>
                    <div class="image">
                        <div id="animation-container" style="width: 550px; height: 550px;"></div>
                    </div>
                    <button id="scrollBtn" class="scroll-btn">
                        <span>▼</span>
                    </button>
                </div>
            </header>

            <main class="content-section">
                <section class="container2">
                    <div class="content2">
                        <h2>How It Works</h2>
                        <p>Using our intuitive interface, you can input symptoms you're experiencing, and our AI-driven system swiftly analyzes this information. Through a sophisticated ML model trained on extensive medical data, our platform cross-references symptoms against an extensive database to provide potential disease identifications.</p>
                        <div class="container4">
                        <div class="steps">
                        <div class="step">
                            <span class="step-number">Step 1</span><br>
                            <h3>Input Symptoms</h3>
                            <div class="step-icon"><i class="fas fa-diagnoses"></i></div>
                            <p>Describe the symptoms you are experiencing in the symptom checker tool.</p>
                        </div>
                        <div class="step">
                            <span class="step-number">Step 2</span><br>
                            <h3>Disease Analysis</h3>
                            <div class="step-icon"><i class="fas fa-stethoscope"></i></div>
                            <p>Our system will analyze the provided symptoms and generate potential diagnoses or health advice.</p>
                        </div>
                        <div class="step">
                            <span class="step-number">Step 3</span><br>
                            <h3>Take Precautions</h3>
                            <div class="step-icon"><i class="fas fa-hospital"></i></div>
                            <p>Review the generated results and seek further medical advice if necessary.</p>
                        </div>
                        </div>
                        </div>
                    </div>
                </section>
            </main>
            
            <div class="spotlight"><h2 id="spotlight">Spotlight</h2><h2 id="spotlight2"> Essentials</h2></div>
            <main class="fea">
                <div class="align">
                    <section class="align1">
                        <section class="features-section">
                            <div class="container5">
                                <div class="features">
                                <div class="feature">
                                    <h3>Medical-ChatBot</h3>
                                    <p>Welcome to Our Health Analyzer, your trusted platform for assessing and understanding health symptoms. We are a dedicated team of medical professionals and technologists committed to providing accurate and reliable information to help you make informed health decisions.</p>
                                </div>
                                </div>
                            </div>
                        </section>

                        <section class="image-section">
                            <div class="image-container">
                                <img src="im2.png" alt="img">
                            </div>
                        </section>
                    </section>
                    <section class="align2">
                        <section class="image-section">
                            <div class="image-container">
                                <img src="im3.png" alt="img">
                            </div>
                        </section>
                        <section class="features-section">
                            <div class="container5">
                                <div class="features">
                                <div class="feature">
                                    <h3>ML-Analyzer</h3>
                                    <p>Welcome to Our Health Analyzer, your trusted platform for assessing and understanding health symptoms. We are a dedicated team of medical professionals and technologists committed to providing accurate and reliable information to help you make informed health decisions.</p>
                                </div>
                                </div>
                            </div>
                        </section>
                    </section>
                    <section class="align3">
                        <section class="features-section">
                            <div class="container5">
                                <div class="features">
                                <div class="feature">
                                    <h3>AI-Analyzer</h3>
                                    <p>Welcome to Our Health Analyzer, your trusted platform for assessing and understanding health symptoms. We are a dedicated team of medical professionals and technologists committed to providing accurate and reliable information to help you make informed health decisions.</p>
                                </div>
                                </div>
                            </div>
                        </section>

                        <section class="image-section">
                            <div class="image-container">
                                <img src="im1.png" alt="img">
                            </div>
                        </section>
                    </section>
                </div>
            </main>
            <main>
                <section>
                    <div class="get">
                        <h1>Discover the future of healthcare: AI-driven precision diagnostics. <span id="join"></span></h1>
                        <p>Welcome to Human Disease Analyzer. Experience precision in diagnostics: Our AI-driven platform swiftly identifies diseases from reported symptoms, revolutionizing healthcare.</p>
                        <a href="register.php"> <button class="btn3">Join Now - It's Free</button></a>
                    </div>
                </section>

            </main>
            <main class="content-section">
                <section class="container11">
                    <div class="content11">
                        <h2>Explore Our Services</h2>
                        <p>Empowering Health, Redefining Care!</p>
                        <div class="container04">
                        <div class="steps11">
                        <div class="step11">
                            <div class="step-icon1"><i class="fas fa-robot"></i></div>
                            <p>Discover, Ask, Learn! Your Medical Queries Answered Instantly with Our Chatbot.</p>
                        </div>
                        <div class="step11">
                            <div class="step-icon1"><i class="fas fa-search"></i></div>
                            <p>Swiftly detect diseases. Get probabilities & personalized precautions.</p>
                        </div>
                        <div class="step11">
                            <div class="step-icon1"><i class="fas fa-dna"></i></div>
                            <p>Limitless disease insights: Detailed descriptions, essential precautions.</p>
                        </div>
                        <div class="step11">
                            <div class="step-icon1"><i class="fas fa-user-md"></i></div>
                            <p>Connect with Specialists: Access personalized care from diverse doctors.</p>
                        </div>
                        </div>
                        </div>
                    </div>
                </section>

            </main>
            <main>
                <section class="about-section">
                    <div class="container3">
                        <h2>About Us</h2>
                        <p>Welcome to Our Health Analyzer, your trusted platform for assessing and understanding health symptoms.</p>
                        <p>We are a dedicated team of medical professionals and technologists committed to providing accurate and reliable information to help you make informed health decisions.</p>
                        <p>At Our Health Analyzer, we prioritize user privacy and data security while striving to offer a user-friendly and accessible experience for everyone.</p>
                        <p>Feel free to explore our symptom checker tool and extensive medical information database to empower yourself with knowledge about various health conditions.</p>
                    </div>
                </section>
            </main>

            <footer class="footer">
                <div class="foott1">
                    <div class="colu1">
                        <p><a href="first.php" class="logoo">🩺HDA</a></p>
                    </div>
                    <div class="colu2">
                        <h4>QUICK MENU</h4>
                        <ul class="foo-list">
                            <li class="foo-item">
                                <a class="foo-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="foo-item">
                                <a class="foo-link" href="#">Medi-Bot</a>
                            </li>
                            <li class="foo-item">
                                <a class="foo-link" href="#">ML-Analyzer</a>
                            </li>
                            <li class="foo-item">
                                <a class="foo-link" href="#">AI-Analyzer</a>
                            </li>
                            <li class="foo-item" id="item">
                                <a class="foo-link" href="#">Find a Doctor</a>
                            </li>
                        </ul>
                    </div>
                    <div class="colu3">
                    <h4>SOCIALS</h4>
                        <ul class="foo-list">
                            <li class="foo-item">
                                <a class="foo-link" href="#">Facebook</a>
                            </li>
                            <li class="foo-item">
                                <a class="foo-link" href="#">LinkedIn</a>
                            </li>
                            <li class="foo-item">
                                <a class="foo-link" href="#">Instagram</a>
                            </li>
                            <li class="foo-item">
                                <a class="foo-link" href="#">Twitter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="colu4">
                        <div class="foo-contact">
                            <h4>LOCATED</h4>
                            <p class="con-item">Address: Xilliams Corner Wine g 2017.1112 A Market St # Ste B22, Charlottesville, CA 45565</p>
                        </div>
                        <div class="foo-nwsltr">
                            <h4 id="nwsltr">NEWS LETTER</h4>
                            <p>Subscribe to our newsletter for updates.</p>
                            <form action="#" method="post">
                            <input class="btnd" type="email1" placeholder="ㅤYour Email">
                            <button class="btn1" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="foott2">
                    <a href="#" class="con-item" id="foo-p1"><p>contact@example.com</p></a>
                    <a href="#" class="con-item" id="foo-p2"><p>+1 123 456 7890</p></a>
                    <p id="foo-p3">&copy; 2024 🩺HDA. All rights reserved.</p>
                </div>
            </footer>
            <div class="cookie-popup" id="cookiePopup">
                <div><button class="close-cookie" onclick="hidePopup()"><img src="delete.png"></button><h3>"COOKIE 🍪"</h3><br></div>
                <p>This website uses cookies to ensure you get the best experience.</p>
                <button class="cookie-btn" onclick="acceptCookies()">Accept</button>
            </div>
        </div>
    </div>

    <!-- CDN link for Lottie library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        function toggleMenu() {
            var nav = document.querySelector('.nav');
            nav.classList.toggle('active');
        }

        var typed = new Typed('#element', {
            strings: ['Analyze Symptoms', 'Detect Disease','Take Precautions'],
            typeSpeed: 100,
            loop: true,
        });

        var typed = new Typed('#join', {
            strings: ['Join Us!'],
            typeSpeed: 100,
            loop: true,
        });

        const animationPath = 'https://lottie.host/a3494035-8b80-412d-ac1e-c7acbebae515/uth7ep8P6I.json';

        // Load the animation
        const animData = {
            container: document.getElementById('animation-container'),
            renderer: 'svg', // Use 'svg', 'canvas', or 'html' based on your preference
            loop: true, // Set true for looping
            autoplay: true, // Set true for autoplay
            path: animationPath // Path to your animation JSON
        };

        const anim = lottie.loadAnimation(animData);


        const scrollBtn = document.getElementById('scrollBtn');

        // Smooth scroll function
        function scrollToContent() {
            const contentSection = document.querySelector('.content-section');
            contentSection.scrollIntoView({ behavior: 'smooth' });
        }

        // Show scroll button after scrolling a bit from the top
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                scrollBtn.classList.add('show');
            } else {
                scrollBtn.classList.remove('show');
            }
        });

        // Add click event to the scroll button
        scrollBtn.addEventListener('click', scrollToContent);

        // Set a cookie function
        function setCookie(cookieName, cookieValue, expirationDays) {
            const date = new Date();
            date.setTime(date.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
            const expires = "expires=" + date.toUTCString();
            document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
        }

        // Check if the cookie is accepted, if not, show the popup
        window.onload = function() {
            const cookieAccepted = getCookie("cookiesAccepted");
            if (!cookieAccepted) {
                document.getElementById("cookiePopup").classList.add("show");
            }
        }

        // Function to accept cookies and hide the popup
        function acceptCookies() {
            setCookie("cookiesAccepted", "true", 30); // Set a cookie named "cookiesAccepted"
            document.getElementById("cookiePopup").classList.remove("show");
        }

        // Function to hide the popup without accepting cookies
        function hidePopup() {
            document.getElementById("cookiePopup").classList.remove("show");
        }

        // Function to get a specific cookie value
        function getCookie(cookieName) {
            const name = cookieName + "=";
            const decodedCookie = decodeURIComponent(document.cookie);
            const cookieArray = decodedCookie.split(';');
            for (let i = 0; i < cookieArray.length; i++) {
                let cookie = cookieArray[i];
                while (cookie.charAt(0) === ' ') {
                    cookie = cookie.substring(1);
                }
                if (cookie.indexOf(name) === 0) {
                    return cookie.substring(name.length, cookie.length);
                }
            }
            return "";
        }

        document.addEventListener("DOMContentLoaded", function () {
        const questions = document.querySelectorAll('.question');

        questions.forEach(function (question) {
            question.addEventListener('click', function () {
            const answer = this.nextElementSibling;
            answer.classList.toggle('show');
            const icon = this.querySelector('.toggle-icon');
            icon.textContent = icon.textContent === '+' ? '-' : '+';
            this.classList.toggle('active'); // Optionally add a class for active state
            });
        });
        });




    </script>

    
</body>
</html>