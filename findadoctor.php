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
                    <a class="nav-link" href="medi-chatbot.php">Medi-ChatBot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ml-analyzer.php">ML-Analyzer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ai-analyzer.php">AI-Analyzer</a>
                </li>
                <li class="nav-item" id="item">
                    <a class="nav-link active" aria-current="page" href="findadoctor.php" >Find a Doctor</a>
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
                <h1>Find a Doctor:</h1><h2><span id="element"></span></h2>
                <p>Welcome to <i><b>Find A Doctor</b></i>. Experience precision in diagnostics: Our AI-driven platform swiftly identifies diseases from reported symptoms, revolutionizing healthcare.</p>
                <button class="btn2" id="scrollBtn">Let's Take a Dive Now!</button>
            </div>
            <div class="image">
                <div id="animation-container" style="width: 600px; height: 600px;"></div>
            </div>
        </div>
    </header>
    <main class="doc-123">
            <section class="doctor-section">
                <div class="doc-con2">
                    <img src="avatars/im00.jpg" alt="Doctor 1" class="doc-img">
                </div>
                <div class="doc-con3">
                    <h2>Meet Our Specialist Team</h2>
                    <p>Welcome to "Find a Doctor", Engage with our esteemed professionals for a personalized and expert consultation tailored to your well-being.</p>
                    <h3>Why Choose Find a Doctor?</h3>
                    <p>Discover expert healthcare tailored to you at Find a Doctor. Our specialists offer personalized consultations, expert guidance, and a holistic approach to your well-being. Choose us for a healthcare experience that prioritizes your unique needs.</p>
                </div>
            </section>
    </main>
    <main>
       <section class="gridall">
            <div class="h22"><div class="spotlight"><h2 id="spotlight">Contact</h2><h2 id="spotlight2">Our Doctors</h2></div></div>
            <div class="grid">
            <div class="grid-item">
                <span title="If you want to consult this doctor, CLICK HERE! And Connect through Mail or Whatsapp chat"><img src="avatars/pp1.png" alt="Doctor 1" class="grid-image" data-popup="doctor1"></span>
                <h2>Dr. Jhones</h2>
                <p>Dermatologist, MBBS</p>
                <p>Location: Malappuram, Kerala</p>
            </div>
            <div class="grid-item">
                <span title="If you want to consult this doctor, CLICK HERE! And Connect through Mail or Whatsapp chat"><img src="avatars/pp2.png" alt="Doctor 2" class="grid-image" data-popup="doctor2"></span>
                <h2>Dr. Jhones</h2>
                <p>Dermatologist, MBBS</p>
                <p>Location: Malappuram, Kerala</p>
            </div>
            <div class="grid-item">
                <span title="If you want to consult this doctor, CLICK HERE! And Connect through Mail or Whatsapp chat"><img src="avatars/pp3.png" alt="Doctor 3" class="grid-image" data-popup="doctor3"></span>
                <h2>Dr. Jhones</h2>
                <p>Dermatologist, MBBS</p>
                <p>Location: Malappuram, Kerala</p>
            </div>
            <div class="grid-item">
                <span title="If you want to consult this doctor, CLICK HERE! And Connect through Mail or Whatsapp chat"><img src="avatars/pp4.png" alt="Doctor 1" class="grid-image" data-popup="doctor1"></span>
                <h2>Dr. Jhones</h2>
                <p>Dermatologist, MBBS</p>
                <p>Location: Malappuram, Kerala</p>
            </div>
            <div class="grid-item">
                <span title="If you want to consult this doctor, CLICK HERE! And Connect through Mail or Whatsapp chat"><img src="avatars/pp5.png" alt="Doctor 1" class="grid-image" data-popup="doctor1"></span>
                <h2>Dr. Jhones</h2>
                <p>Dermatologist, MBBS</p>
                <p>Location: Malappuram, Kerala</p>
            </div>
            <div class="grid-item">
                <span title="If you want to consult this doctor, CLICK HERE! And Connect through Mail or Whatsapp chat"><img src="avatars/pp6.png" alt="Doctor 1" class="grid-image" data-popup="doctor1"></span>
                <h2>Dr. Jhones</h2>
                <p>Dermatologist, MBBS</p>
                <p>Location: Malappuram, Kerala</p>
            </div>
            <div class="grid-item">
                <span title="If you want to consult this doctor, CLICK HERE! And Connect through Mail or Whatsapp chat"><img src="avatars/pp7.png" alt="Doctor 1" class="grid-image" data-popup="doctor1"></span>
                <h2>Dr. Jhones</h2>
                <p>Dermatologist, MBBS</p>
                <p>Location: Malappuram, Kerala</p>
            </div>
            <div class="grid-item">
                <span title="If you want to consult this doctor, CLICK HERE! And Connect through Mail or Whatsapp chat"><img src="avatars/pp8.png" alt="Doctor 1" class="grid-image" data-popup="doctor1"></span>
                <h2>Dr. Jhones</h2>
                <p>Dermatologist, MBBS</p>
                <p>Location: Malappuram, Kerala</p>
            </div>
            <div class="grid-item">
                <span title="If you want to consult this doctor, CLICK HERE! And Connect through Mail or Whatsapp chat"><img src="avatars/pp9.png" alt="Doctor 1" class="grid-image" data-popup="doctor1"></span>
                <h2>Dr. Jhones</h2>
                <p>Dermatologist, MBBS</p>
                <p>Location: Malappuram, Kerala</p>
            </div>
            </div>

            <div class="popup" id="doctor1-popup">
                <div class="close-icon"><img src="delete.png" alt="close"></div>
                <h3 style="color: #5851bb;">Compose Your mail for Consultation</h3>
                <div class="inbox">
                    <form id="emailForm" action="mailto:dilujilshadvkd@gmail.com" method="post" enctype="text/plain">
                        <div>
                            <label for="emailInput" class="llabel">Email:</label>
                            <input type="email" id="emailInput" name="email" value="dilujilshadvkd@gmail.com" required readonly>
                        </div>
                        <div>
                            <label for="subjectInput" class="llabel">Subject:</label>
                            <input type="text" id="subjectInput" name="subject" placeholder="What type of topic are you sharing?" required>
                        </div>
                        <div>
                            <label for="messageTextarea" class="llabel">Message:</label>
                            <textarea id="messageTextarea" name="message" placeholder="What do you want to talk to your doctor about?" required></textarea>
                        </div>
                        <button class="bttn" type="submit">Send Mail</button>
                        <div class="or-divider">
                            <span class="or-text">OR</span>
                        </div>
                        <a href="https://wa.me/1234567899"><button class="bttn" type="button">Start WhatsApp Chat</button></a>
                    </form>
                </div>
            </div>

            <div class="popup" id="doctor2-popup">
                <div class="close-icon"><img src="delete.png" alt="close"></div>
                <h3 style="color: #5851bb;">Compose Your mail for Consultation</h3>
                <div class="inbox">
                    <form id="emailForm" action="mailto:jilshadmayyeri000@gmail.com" method="post" enctype="text/plain">
                        <div>
                            <label for="emailInput" class="llabel">Email:</label>
                            <input type="email" id="emailInput" name="email" value="jilshadmayyeri000@gmail.com" required readonly>
                        </div>
                        <div>
                            <label for="subjectInput" class="llabel">Subject:</label>
                            <input type="text" id="subjectInput" name="subject" placeholder="What type of topic are you sharing?" required>
                        </div>
                        <div>
                            <label for="messageTextarea" class="llabel">Message:</label>
                            <textarea id="messageTextarea" name="message" placeholder="What do you want to talk to your doctor about?" required></textarea>
                        </div>
                        <button class="bttn" type="submit">Send Mail</button>
                        <div class="or-divider">
                            <span class="or-text">OR</span>
                        </div>
                        <a href="https://wa.me/1234567899"><button class="bttn" type="button">Start WhatsApp Chat</button></a>
                    </form>
                </div>
            </div>

            <div class="popup" id="doctor3-popup">
                <div class="close-icon"><img src="delete.png" alt="close"></div>
                <h3 style="color: #5851bb;">Compose Your mail for Consultation</h3>
                <div class="inbox">
                    <form id="emailForm" action="mailto:freeuse9496@gmail.com" method="post" enctype="text/plain">
                        <div>
                            <label for="emailInput" class="llabel">Email:</label>
                            <input type="email" id="emailInput" name="email" value="freeuse9496@gmail.com" required readonly>
                        </div>
                        <div>
                            <label for="subjectInput" class="llabel">Subject:</label>
                            <input type="text" id="subjectInput" name="subject" placeholder="What type of topic are you sharing?" required>
                        </div>
                        <div>
                            <label for="messageTextarea" class="llabel">Message:</label>
                            <textarea id="messageTextarea" name="message" placeholder="What do you want to talk to your doctor about?" required></textarea>
                        </div>
                        <button class="bttn" type="submit">Send Mail</button>
                        <div class="or-divider">
                            <span class="or-text">OR</span>
                        </div>
                        <a href="https://wa.me/1234567899"><button class="bttn" type="button">Start WhatsApp Chat</button></a>
                    </form>
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
                <p><a href="findadoctor.php" class="logoo">🩺HDA</a></p>
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
            strings: ["Let's Find Your Doctor Now!"],
            typeSpeed: 100,
            loop: true,
        });

        const animationPath = 'https://lottie.host/b8b3b12c-a4c7-4f90-a66e-d9b8cce42cc5/9a2XmLoCuP.json';
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
            const contentSection = document.querySelector('.doc-123');
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


        document.addEventListener('DOMContentLoaded', function() {
        const gridImages = document.querySelectorAll('.grid-image');

        gridImages.forEach(image => {
            image.addEventListener('click', function() {
            const popupId = this.getAttribute('data-popup');
            const popup = document.getElementById(popupId + '-popup');
            if (popup) {
                popup.classList.add('active');
            }
            });
        });


        // Close popup when close button is clicked
        document.querySelectorAll('.close-icon').forEach(button => {
            button.addEventListener('click', function(event) {
            const popup = this.closest('.popup');
            if (popup) {
                popup.classList.remove('active');
            }
            event.stopPropagation(); // Prevents the click event from triggering when clicking the button
            });
        });

        // Close popup when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.popup') && !event.target.classList.contains('grid-image')) {
            const popups = document.querySelectorAll('.popup');
            popups.forEach(popup => {
                popup.classList.remove('active');
            });
            }
        });
        });

        document.getElementById('emailForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            const email = document.getElementById('emailInput').value;
            const subject = document.getElementById('subjectInput').value;
            const message = document.getElementById('messageTextarea').value;

            // Generate the mailto link
            const mailtoLink = `mailto:${email}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(message)}`;

            // Open the mailto link in a new window or tab
            window.open(mailtoLink);
        });


    </script>
</body>
</html>