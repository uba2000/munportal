<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../Bootstrap-4.4.1/css/bootstrap.css" type="text/css">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>MunPortal - Personal Data</title>
    <style>
        
    </style>
</head>
<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">MunPortal - <small>Personal Data</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Academics <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Application Slip</a>
                            <a class="dropdown-item" href="baseData/index.php">Base Data</a>
                            <a class="dropdown-item" href="#">Clearance Data</a>
                            <a class="dropdown-item" href="index.php">Personal Data</a>
                            <a class="dropdown-item" href="#">Course</a>
                            <a class="dropdown-item" href="payment/index.php">Payments</a>
                            <a class="dropdown-item" href="#">Accomodation Data</a>
                            <a class="dropdown-item" href="history/index.php">History</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>

                </ul>
                <a href="../index.html" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
            </div>
        </div>
    </nav>
    <!-- end of nav bar -->
    <!-- nav oversight -->
    <div class="bg-head-spacing"></div>
    <!-- end of nav oversight -->
    <div class="container">
        <div class="alert alert-success" role="alert">
            You logged in.
        </div>
        <div class="alert alert-warning" role="alert">
            Your personal data needs to be updated!
        </div>
    </div>
    <div class="container">
        <!-- <h2 id="">Welcome, <?php echo $_POST["username"] ?></h2> -->
        <h2>Edit Personal Data</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="inputpersonalAddr">Personal Address</label>
                <textarea class="form-control" name="personalAddr" id="inputpersonalAddr" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="inputkinName">Next of Kin Name</label>
                <input type="text" class="form-control" id="inputkinName" name="kinName">
            </div>
            <div class="form-group">
                <label for="inputkinRel">Next of Kin Relationship</label>
                <input type="text" class="form-control" id="inputkinRel" name="kinRel">
            </div>
            <div class="form-group">
                <label for="inputkinAddr">Next of Kin Address</label>
                <textarea class="form-control" name="kinAddr" id="inputkinAddr" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="inputkinPhone">Next of Kin Phone</label>
                <input type="tel" class="form-control" id="inputkinPhone" name="kinPhone">
            </div>
            <div class="form-group">
                <label for="inputmaritalStatus">Marital Status</label>
                <select name="maritalStatus" id="inputmaritalStatus" class="form-control" required>
                    <option selected value="nill"></option>
                    <option value="marr">Married</option>
                    <option value="unmarr">Unmarried</option>
                </select>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input name="disabled" class="form-check-input" type="checkbox" value="disabled">
                    Disabled
                </label>
            </div>
            <div class="form-group">
                <label for="parEmail">Parent Email</label>
                <input type="email" class="form-control" name="parentEmail" id="parEmail">
            </div>
            <input type="submit" value="Save" class="btn btn-outline-success my-2 my-sm-0">
        </form>
    </div>
    <br>
    <!-- <div class="margin-spacing"></div> -->
    <!-- footer -->
    <footer class="bd-footer">
        <div class="container">
            <span class="text-muted">Copyright &copy; MUNPORTAL Group 2020</span>
        </div>
    </footer>
    <!-- end of footer -->
    <!-- JQUERY -->
    <script src="../jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="../Bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <!-- custom Js -->
    <script src="script.js"></script>
</body>
</html>