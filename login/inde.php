<?php 
$username = $passwordErr = "";
$usernameErr = $passwordErr = "";
$dashboard = "../dashboard/inde.php";
$self = htmlspecialchars($_SERVER['PHP_SELF']);
$link = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['username'])) {
        $link = "";
        $usernameErr = 'UserName is required';
    } else {
        $username = test_input($_POST["username"]);
        $link = $self;
        if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
            $link = $self;
            $usernameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST['password'])) {
        $link = "";
        $passwordErr = 'Password is required';
    }
    if ((!empty($_POST['password'])) and (!empty($_POST['username']))){
        $link = $dashboard;
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_POST["username"] == $username) {
    if (empty($_POST['password'])) {
        $passwordErr = 'Password is required';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../Bootstrap-4.4.1/css/bootstrap.css" type="text/css">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Lorem Portal - Log In</title>
</head>
<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">MunPortal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Applications <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enquiries</a>
                    </li>
                </ul>
                <a href="inde.php" class="btn btn-outline-success my-2 my-sm-0 disabled">Log In</a>
            </div>
        </div>
    </nav>
    <!-- end of nav bar -->
    <!-- nav oversight -->
    <div class="bg-head-spacing"></div>
    <!-- end of nav oversight -->
    <!-- admin message -->
    <div class="container">
        <div class="alert1 alert-warning alert-dismissible fade hide" role="alert" id="alert">
            <strong>Holy guacamole!</strong> You need the admin username and password or your correct username and password to sign in!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <!-- end admin message -->
    <!-- form -->
    <!-- <?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?> -->
    <form action="" method="POST" class="bd-form" id="lg-form">
        <div class="container">
            <h2 class="bd-heading">Login</h2>

            <div class="form-group">
                <label for="username">User Name</label>
                <input name="username" type="text" class="form-control" id="inputusername" placeholder="Username" value="<?php echo $_POST["username"]; ?>">
                <small class="text-danger"><?php //echo $usernameErr ?></small>
            </div>

            <div class="form-group">
                <label for="passwordinput">Password</label>
                <input name="password" type="password" class="form-control" id="inputpassword"
                    aria-describedby="passwordhelp" placeholder="Password">
                <small class="text-danger"><?php echo $passwordErr ?></small>
                    
                <small id="passwordhelp" class="form-text text-danger">Username and password are case sensitive</small>
            </div>
            <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Login" id="submitBtn">
        </div>
        
    </form>
    <!-- end of form -->
    <!-- login notice section -->
    <div class="container bd-section">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis magnam recusandae molestiae optio nisi omnis tenetur unde non porro, sed, qui vitae, maiores deleniti. Ratione perspiciatis repellat minima iste facilis?</p>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus a eveniet aliquid rerum culpa odit ipsum! Repudiandae, debitis dolorem sapiente ad, quas iusto numquam sed inventore suscipit, aperiam quisquam earum.</p>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora ab atque voluptatem eaque sunt, asperiores aliquam voluptatibus, eligendi blanditiis odio unde quos quis vero, sapiente at. Rerum obcaecati nam velit!</p>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis magnam recusandae molestiae optio nisi omnis tenetur unde</p>
    </div>
    <!-- end of login notice section -->
    <!-- footer -->
    <footer class="bd-footer">
        <div class="container">
            <span class="text-muted">Copyright &copy; LOREM Group 2020</span>
        </div>
    </footer>
    <!-- end of footer -->
    <!-- JQUERY Script -->
    <script src="../jquery/jquery-3.2.1.min.js"></script>
    <!-- <script src="Bootstrap-4.4.1/js/popper.js"></script> -->
    <!-- Bootstrap Js -->
    <script src="../Bootstrap-4.4.1/js/bootstrap.js"></script>
    <!-- Custom Js -->
    <script src="script.js"></script>
</body>

</html>