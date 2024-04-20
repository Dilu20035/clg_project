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
        <a href="admindash.php" class="active">Dashboard</a>
        <a href="adminusers.php">All Users</a>
        <a href="adminsettings.php">FAQs</a>
        <a href="adminhelp.php">About</a>
        <div class="side"><a href="#"><button class="btn" id="logout" onclick="simulateLoading()">Log Out</button></a></div>   
    </div>
    
    <div class="content">
        <h2 class="head">Dashboard</h2>
        <div class="container">
        <div class="box form-box">

        <header>Recent Login Details</header>
        
        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Age</th>
                <th>Status</th>
            </tr>
            <?php 
                $query = mysqli_query($con, "SELECT * FROM users");
                while($result = mysqli_fetch_assoc($query)){
                    $id = $result['Id'];
                    $username = $result['Username'];
                    $email = $result['Email'];
                    $age = $result['Age'];
            ?>
            <tr>
                <td><?php echo $username; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $age; ?></td>
                <td><a href="#" class="active"><?php echo "Active"; ?></a></td>
            </tr>
            <?php } ?>
        </table>
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
