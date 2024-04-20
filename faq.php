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
    <link rel="stylesheet" href="style/style.css">
    <title>About Us</title>
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
                    <a class="nav-link"  href="home.php">Home</a>
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
                <button class="dropbtn active">More &#9660;</button>
                <div class="dropdown-content">
                    <a href="about.php">About Us</a>
                    <a href="terms.php">Terms & Conditions</a>
                    <a href="faq.php" aria-current="page">FAQ</a>
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
    <main>
        <section class="faq">
            <div class="faq-container">
                <h1>Frequently Asked Questions (FAQ)</h1>
                <div class="faq-list">
                    <div class="faq-item">
                    <div class="question">
                    1. What is Our Health Analyzer?
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="answer">Our Health Analyzer is an AI-driven platform that utilizes a sophisticated machine learning model to analyze reported symptoms and provide potential disease identifications. We aim to empower individuals by offering a user-friendly and accurate tool for health assessment.</div>
                    </div>
                    <div class="faq-item">
                    <div class="question">
                    2. How does the Symptom Checker Tool work?
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="answer">The Symptom Checker Tool allows users to input their symptoms, and our machine learning model cross-references this information with an extensive medical database. The system swiftly analyzes the data to provide potential disease identifications based on reported symptoms.</div>
                    </div>
                    <div class="faq-item">
                    <div class="question">
                    3. Is Our Health Analyzer a substitute for professional medical advice?
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="answer">No, Our Health Analyzer is not a substitute for professional medical advice, diagnosis, or treatment. It is designed for informational purposes only. Always consult with qualified healthcare professionals for personalized medical advice.</div>
                    </div>
                    <div class="faq-item">
                    <div class="question">
                    4. How accurate is the identification of potential diseases?
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="answer">Our machine learning model is trained on extensive medical data to provide accurate results. However, it's essential to understand that the platform offers suggestions, and a conclusive diagnosis should be obtained from qualified healthcare professionals.</div>
                    </div>
                    <div class="faq-item">
                    <div class="question">
                    5. Is my personal information secure?
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="answer">Yes, we prioritize user privacy and data security. Our platform adheres to strict privacy policies to safeguard your personal information. For more details, please refer to our Privacy Policy.</div>
                    </div>
                    <div class="faq-item">
                    <div class="question">
                    6. Can I trust the medical information provided by Our Health Analyzer?
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="answer">While we strive for accuracy, the information provided on the platform is for informational purposes only. It's crucial to verify any health-related information with qualified healthcare professionals.</div>
                    </div>
                    <div class="faq-item">
                    <div class="question">
                    7. Are there any costs associated with using Our Health Analyzer?
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="answer">No, using Our Health Analyzer is currently free of charge. We are committed to providing accessible health assessment tools to as many individuals as possible.</div>
                    </div>
                    <div class="faq-item">
                    <div class="question">
                    8. Can I save or share the results from the Symptom Checker Tool?
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="answer">Currently, the platform does not support saving or sharing results. Users are encouraged to consult healthcare professionals for further discussions about their health concerns.</div>
                    </div>
                    <div class="faq-item">
                    <div class="question">
                    9. How often should I use Our Health Analyzer?
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="answer">The frequency of use is at your discretion. However, if you have persistent or severe symptoms, it is advisable to consult with healthcare professionals promptly.</div>
                    </div>
                    <div class="faq-item">
                    <div class="question">
                    10. How can I provide feedback or report issues?
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="answer">We value your feedback. Feel free to contact our support team at inform@gmail.com for assistance, or use the feedback option within the platform.</div>
                    </div>
                    <p>We hope these FAQs address your inquiries. For any additional questions, please don't hesitate to contact us.</p>
                </div>
            </div>
        </section>
    </main>
    
    <footer class="footer">
        <div class="foott1">
            <div class="colu1">
                <p><a href="about.php" class="logoo">🩺HDA</a></p>
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