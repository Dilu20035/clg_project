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
                    <a href="terms.php" aria-current="page">Terms & Conditions</a>
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
    <main>
        <div class="main-box top">
          <div class="bottom">
            <div class="box">
                <h1>Terms and Conditions</h1>
                <h4>Welcome to Our Health Analyzer! By using our platform, you agree to comply with and be bound by the following terms and conditions. Please read these carefully before using our services.</h4>

                <h3>1. Acceptance of Terms:</h3>
                <p>By accessing or using Our Health Analyzer, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions. If you do not agree with any part of these terms, please do not use our platform.</p>

                <h3>2. Privacy and Security:</h3>
                <p>We take your privacy seriously. Our Privacy Policy outlines how we collect, use, and protect your personal information. By using Our Health Analyzer, you consent to the practices described in our Privacy Policy.</p>

                <h3>3. Medical Disclaimer:</h3>
                <p>Our Health Analyzer is designed for informational purposes only. It does not provide medical advice, diagnosis, or treatment. Consult with qualified healthcare professionals for personalized medical advice related to your specific health conditions.</p>

                <h3>4. Accuracy of Information:</h3>
                <p>While we strive to provide accurate and up-to-date information, Our Health Analyzer does not guarantee the accuracy, completeness, or reliability of any content. Use the information at your own risk.</p>

                <h3>5. User Responsibilities:</h3>
                <p>Users are responsible for the accuracy of the information they input into the symptom checker tool. Misleading information may lead to inaccurate results. Users must also ensure the security of their account credentials.</p>

                <h3>6. User Conduct:</h3>
                <p>Users agree to use Our Health Analyzer in compliance with applicable laws and regulations. Any unauthorized use, including but not limited to, attempting to gain unauthorized access to our systems, is strictly prohibited.</p>

                <h3>7. Modifications:</h3>
                <p>We reserve the right to update, modify, or terminate our platform, including these terms and conditions, at any time without prior notice. Continued use of Our Health Analyzer after modifications constitutes acceptance of the updated terms.</p>

                <h3>8. Limitation of Liability:</h3>
                <p>Our Health Analyzer, its affiliates, and partners are not liable for any direct, indirect, incidental, consequential, or punitive damages arising out of your use or inability to use our platform.</p>

                <h3>9. Governing Law:</h3>
                <p>These terms and conditions are governed by and construed in accordance with the laws of [Your Jurisdiction]. Any disputes arising from or in connection with these terms shall be subject to the exclusive jurisdiction of the courts in [Your Jurisdiction].</p>

                <h3>10. Contact Information:</h3>
                <p>If you have any questions or concerns about these terms and conditions, please contact us at inform@gmail.com.</p>

                <h4>Thank you for using Our Health Analyzer. We appreciate your trust and commitment to promoting informed well-being.</h4>

            </div>
          </div>
       </div>

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
    </script>
</body>
</html>