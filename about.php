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
                    <a href="about.php" aria-current="page">About Us</a>
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
            
            ?>

            

            <!-- Modify your logout button -->
            <button class="btn" id="logout" onclick="simulateLoading()">Log Out</button>

        </div>
        
    </div>
    <main>
        <div class="main-box top">
          <div class="bottom">
            <div class="box">
                <h1>About Us</h1>
                <h4>Welcome to Our Health Analyzer, where innovation meets healthcare in the pursuit of informed well-being.</h4>

                <h3>Who We Are:</h3>
                <p>We are a passionate team of medical professionals and technologists dedicated to reshaping the landscape of health assessment. Our collective vision is to empower individuals with accurate and reliable information, fostering a deeper understanding of their health.</p>

                <h3>Our Mission:</h3>
                <p>At Our Health Analyzer, our mission is to revolutionize healthcare by leveraging cutting-edge AI technology. We aim to provide individuals worldwide with a seamless and intuitive platform for symptom analysis, facilitating early detection and informed decision-making.</p>

                <h3>What Sets Us Apart:</h3>
                <p>Our differentiator lies in the fusion of medical expertise and artificial intelligence. Our robust ML model, trained on extensive medical data, ensures precise and swift identification of potential health conditions based on reported symptoms. We prioritize user privacy and data security, creating an environment where individuals can explore their health concerns without compromising confidentiality.</p>

                <h3>User-Centric Approach:</h3>
                <p>We understand that navigating health concerns can be complex. Our user-friendly interface and intuitive symptom checker tool have been designed with you in mind. We believe in empowering individuals with knowledge about various health conditions, enabling them to take charge of their well-being.</p>

                <h3>Privacy and Security:</h3>
                <p>Your privacy is our priority. Our Health Analyzer adheres to the highest standards of data security, ensuring that your personal information is handled with the utmost care and confidentiality. Trust is the foundation of our platform, and we take every measure to maintain it.</p>

                <h3>Explore and Empower:</h3>
                <p>Beyond the symptom checker tool, Our Health Analyzer offers an extensive medical information database. Explore and educate yourself about different health conditions, treatments, and preventive measures. Knowledge is a powerful tool in the journey toward a healthier life.</p>

                <h4>Thank you for trusting Our Health Analyzer. Together, let's navigate the path to a healthier, more informed future.</h4>

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