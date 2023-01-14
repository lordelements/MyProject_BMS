<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;200;1000;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="./main/css/mdb.min.css" />
</head>
<style>
    .card form input{
        border-color: black;
    }
</style>
<body  style="background-color: #eee;">

    <section class="mt-5">

    <?php include_once 'sweetalert_msg.php'?>
    
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-10 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5 bg-grey">
                <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    
                        <!-- notification message -->
                        <?php if (isset($_SESSION['success'])) : ?>
                            <div class="error success" >
                                <h3>
                                    <?php 
                                        echo $_SESSION['success']; 
                                        unset($_SESSION['success']);
                                    ?>
                                </h3>
                            </div>
                        <?php endif ?>
                

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-2 mt-2">Sign up</p>

                 <form action="signupfuc.php" method="POST" enctype="multipart/form-data">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-2">
                        <div class="col">
                        <div class="form-outline">
                            <input type="text" id="firstName" class="form-control mb-2" name="firstName" required
                            style="border-bottom: 1px solid #000;" />
                            <span>First name</span>
                            <!-- <label class="form-label" for="form3Example1">First name</label> -->
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-outline">
                            <input type="text" class="form-control mb-2" name="middleName" required 
                            style="border-bottom: 1px solid #000;" />
                            <span>Middle name</span>
                            <!-- <label class="form-label" for="">Middle name</label> -->
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-outline">
                            <input type="text"  class="form-control mb-2" name="lastName"  required
                            style="border-bottom: 1px solid #000;" />
                            <span>Last name</span>
                            <!-- <label class="form-label" for="form3Example3">Last name</label> -->
                        </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-2">
                        <input type="email"  class="form-control mb-2" name="email"  required
                        style="border-bottom: 1px solid #000;" />
                        <span>Email address</span>
                        <!-- <label class="form-label" for="form3Example3">Email address</label> -->
                    </div>
                    <!-- <div class="form-outline mb-2">
                        <input type="file" class="form-control mb-2" name="image"  accept=".jpg, .jpeg, .png" 
                        style="border-bottom: 1px solid #000;" />
                        <span>image</span>
                    </div> -->

                    <!-- Password input -->
                    <div class="form-outline mb-2">
                        <input type="password" class="form-control mb-2" name="password"  required
                        style="border-bottom: 1px solid #000;" />
                        <span>Password</span>
                        <!-- <label class="form-label" for="">Password</label> -->
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-2">
                        <input type="password" class="form-control mb-2" name="cpassword"  required
                        style="border-bottom: 1px solid #000;" />
                        <span>Confirm Password</span>
                        <!-- <label class="form-label" for="">Conmfirm Password</label> -->
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-2">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                        <label class="form-check-label" for="form2Example33">
                        Already have an account? <a href="login.php">login here</a>
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary btn-block mb-2">Sign up</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>or sign up with:</p>
                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-github"></i>
                        </button>
                    </div>
                </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                    <img src="main\img\bg1.jpg"
                    class="img-fluid h-100" alt="Sample image">

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <?php include 'main/includes/scripts.php';?>
    
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="main/js/jquery-3.6.0.min.js"></script>
    <script src="main/js/sweetalert2.min.js"></script>
</body>
</html> -->
