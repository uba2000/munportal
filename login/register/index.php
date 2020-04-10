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
    <title>MunPortal - Register</title>
</head>
<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <div class="navbar-brand" href="#">MunPortal - <small>Register</small></div>
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
                <span>
                    <a href="../index.html" class="btn btn-outline-success my-2 my-sm-0">Log In</a>
                    |
                    <a href="reginde.php" class="text-success">Register</a>
                </span>
            </div>
        </div>
    </nav>
    <!-- end of nav bar -->

    <form action="../inde.php" class="bd-form" method="POST">
        <div class="container">
            <!-- first name -->
            <div class="form-group">
                <label for="inputfirstname">First Name</label>
                <input name="firstname" placeholder="First Name" type="text" class="form-control" id="inputfirstname" required>
            </div>
            <!-- last name -->
            <div class="form-group">
                <label for="inputlastname">Last Name</label>
                <input name="lastname" placeholder="Last Name" type="text" class="form-control" id="inputlastname" required>
            </div>
            <!-- username -->
            <div class="form-group">
                <label for="inputusername">UserName</label>
                <input name="username" placeholder="UserName" type="text" class="form-control" id="inputusername" required>
            </div>
            <!-- E-mail -->
            <div class="form-group">
                <label for="inputemail">E-mail</label>
                <input type="email" placeholder="E-mail" name="email" id="inputemail" class="form-control" required>
            </div>
            <!-- Password -->
            <div class="form-group">
                <label for="inputpassword">Password</label>
                <input type="password" placeholder="Password" name="password" id="inputpassword" class="form-control" required>

                <!-- confirm password-->
                <label for="inputconfirmpassword">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" name="confirmpassword" id="inputconfirmpassword" class="form-control" required>
            </div>
            <!-- Phone -->
            <div class="form-row">
                <!-- home phone -->
                <div class="col">
                    <label for="inputhomephone">Home Phone</label>
                    <input name="homephone" type="tel" class="form-control" id="inputhomephone" required>
                </div>
                <!-- cell phone -->
                <div class="col">
                    <label for="inputcellphone">Cell Phone</label>
                    <input name="cellphone" type="tel" class="form-control" id="inputcellphone">
                </div>
            </div>     
            <!-- Address -->
            <div class="form-row">
                <div class="col">
                    <label for="inputaddr1">Address 1</label>
                    <input type="text" name="address1" id="inputaddr1" class="form-control" required>
                </div>
                <!-- second address -->
                <div class="col">
                    <label for="inputaddr2">Address 2</label>
                    <input type="text" name="address2" id="inputaddr2" class="form-control">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <!-- City -->
                <div class="form-group col-md-6">
                    <label for="inputcity">City</label>
                    <input name="city" type="text" class="form-control" id="inputcity" required>
                </div>
                <!-- Country -->
                <div class="form-group col-md-4">
                    <label for="inputstate">State</label>
                    <select name="state" id="inputstate" class="form-control" required>
                        <option selected value="nill"></option>
                        <option value="nig">Nigeria</option>
                        <option value="gha">Ghana</option>
                        <option value="uk">United Kingdom</option>
                        <option value="us">United States</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <!-- Zip -->
                <div class="form-group col-md-2">
                    <label for="inputzip">Zip</label>
                    <input type="text" name="zip" class="form-control" id="inputzip">
                </div>
            </div>
            <input type="submit" value="Submit" class="btn btn-outline-success my-2 my-sm-0">
        </div>
    </form>
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