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
    <link rel="stylesheet" href="style/style1.css">
    <title>Manage Users</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="admindash.php">🩺HDA</a> </p>
        </div>

        <div class="right-links">
            <a href='home.php'>View Site</a>
        </div>
    </div>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="admindash.php">Dashboard</a>
        <a href="adminusers.php">All Users</a>
        <a href="adminsettings.php">FAQs</a>
        <a href="adminhelp.php" class="active">About</a>
        <div class="side"><a href="#"><button class="btn" id="logout" onclick="simulateLoading()">Log Out</button></a></div>   
    </div>
    <div class="content">
    <h2 class="head">About</h2>
        <div class="container">
        <div class="box form-box">

        <header>About HDA</header>
        <p>The Human Disease Analyzer (HDA) project represents an innovative fusion of machine learning and artificial intelligence technologies aimed at revolutionizing healthcare diagnostics. Leveraging advanced algorithms and vast datasets, HDA endeavors to streamline the process of disease identification and diagnosis, ultimately enhancing patient outcomes and medical decision-making.

At its core, HDA utilizes sophisticated machine learning models trained on extensive medical data to analyze various symptoms, biomarkers, and patient information. Through continuous learning and refinement, these models can accurately predict and classify a wide range of human diseases, ranging from common ailments to rare disorders.

The integration of artificial intelligence enables HDA to adapt and evolve over time, continuously improving its diagnostic accuracy and expanding its knowledge base. By harnessing the power of AI, HDA not only offers rapid and precise diagnoses but also provides personalized treatment recommendations tailored to each individual patient's needs.</p>
        
        </div>
      </div>
    </div>
    
      <div class="loading-spinner" id="loadingSpinner"></div>
      <script>
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
