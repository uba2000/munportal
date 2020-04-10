<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../../Bootstrap-4.4.1/css/bootstrap.css" type="text/css">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>MunPortal - Payments</title>
</head>
<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">MunPortal - <small>Payments</small></a>
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
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Application Slip</a>
                            <a class="dropdown-item" href="../baseData/index.php">Base Data</a>
                            <a class="dropdown-item" href="#">Clearance Data</a>
                            <a class="dropdown-item" href="../index.php">Personal Data</a>
                            <a class="dropdown-item" href="#">Course</a>
                            <a class="dropdown-item" href="index.php">Payments</a>
                            <a class="dropdown-item" href="#">Accomodation Data</a>
                            <a class="dropdown-item" href="index.php">History</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>

                </ul>
                <a href="../../index.html" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
            </div>
        </div>
    </nav>
    <!-- end of nav bar -->
    <!-- nav oversight -->
    <div class="bg-head-spacing"></div>
    <!-- end of nav oversight -->
    <div class="container">
        <h2>Payments</h2>
        <br>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>payment id</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Amount(#)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>Lorem</td>
                        <td>ipsum</td>
                        <td>dolor</td>
                        <td>sit</td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>amet</td>
                        <td>consectetur</td>
                        <td>adipiscing</td>
                        <td>elit</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>Integer</td>
                        <td>nec</td>
                        <td>odio</td>
                        <td>Praesent</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>libero</td>
                        <td>Sed</td>
                        <td>cursus</td>
                        <td>ante</td>
                    </tr>
                    <tr>
                        <td>1,004</td>
                        <td>dapibus</td>
                        <td>diam</td>
                        <td>Sed</td>
                        <td>nisi</td>
                    </tr>
                </tbody>
            </table>
        </div>

        
    </div>
    <br>
    <!-- footer -->
    <footer class="bd-footer">
        <div class="container">
            <span class="text-muted">Copyright &copy; MUNPORTAL Group 2020</span>
        </div>
    </footer>
    <!-- end of footer -->
    <!-- JQUERY Script -->
    <script src="../../jquery/jquery-3.2.1.min.js"></script>
    <!-- <script src="Bootstrap-4.4.1/js/popper.js"></script> -->
    <!-- Bootstrap Js -->
    <script src="../../Bootstrap-4.4.1/js/bootstrap.js"></script>
    <!-- Custom Js -->
    <script src="script.js"></script>
</body>
</html>