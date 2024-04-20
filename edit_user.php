<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', Age='$age', Password='$password' WHERE Id=$id ") or die("Error occurred");

    if ($edit_query) {
        $_SESSION['success'] = "Profile Updated!";
        header("Location: adminusers.php");
    }
}

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id ");

$result = mysqli_fetch_assoc($query);
$username = $result['Username'];
$email = $result['Email'];
$age = $result['Age'];
$password = $result['Password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Edit User</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Edit User</header>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $username; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" value="<?php echo $age; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="<?php echo $password; ?>" autocomplete="off" required>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
