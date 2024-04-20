<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
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
<div class="nav">
        <div class="toggle-btn" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <div class="logo">
            <p><a href="home.php">🩺HDA</a> </p>
        </div>
        <div class="navbar">
        <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-li" id="non">ㅤㅤ▼</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="medi-chatbot.php">Medi-ChatBot</a>
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

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            
            ?>

            

            <!-- Modify your logout button -->
            <button class="btn" id="logout" onclick="simulateLoading()">Log Out</button>

        </div>
        
    </div>
    <header>
        <div class="container1">
            <div class="content">
                <h1>Medi-ChatBot:</h1><h2><span id="element"></span></h2>
                <p>Welcome to <i><b>Medical ChatBot</b></i>. Experience precision in diagnostics: Our AI-driven platform swiftly identifies diseases from reported symptoms, revolutionizing healthcare.</p>
                <a href="https://hda-bot.streamlit.app/"> <button class="btn2">Let's Launch the App!</button></a>
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
    <div class="spotlight"><h2 id="spotlight">DEMO-VIDEO</h2><h2 id="spotlight2">for ChatBot</h2></div>
    <main>
        <div class="img1-vid">
        <video autoplay loop muted preload="auto">
            <source src="img1.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>
        </div>
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
                <p><a href="medi-chatbot.php" class="logoo">🩺HDA</a></p>
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
    
    <div class="loading-spinner" id="loadingSpinner"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        function toggleMenu() {
            var nav = document.querySelector('.nav');
            nav.classList.toggle('active');
        }

        let Signout = () => {
            window.location.href = "php/logout.php";
        }

        function simulateLoading() {
            let btn = document.getElementById('logout');
            let loadingIcon = document.getElementById('loadingSpinner');

            btn.disabled = true; 
            loadingIcon.style.display = 'block'; 

            setTimeout(function () {
            loadingIcon.classList.add('success');
            setTimeout(function () {
                loadingIcon.classList.remove('success');
                loadingIcon.style.display = 'none'; // Hide the loading icon
                Signout(); // Call the signout function after the loading animation finishes
            }, 1000); 
            }, 0); 
        }

        var typed = new Typed('#element', {
            strings: ['Search Diagnose Conditions','Ask Precautions','Identify Health Issues','Clarify Medical Doubts'],
            typeSpeed: 100,
            loop: true,
        });

        const animationPath = 'https://lottie.host/a0f13229-7c2c-4590-bdde-3a500c3075c2/t7E9U6VurW.json';
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