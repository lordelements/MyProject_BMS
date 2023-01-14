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
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;1000;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="./main/css/mdb.min.css" />
</head>
<body>
      <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
        height: 100vh;
        background-repeat: no-repeat;
        background-size: cover;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>
        
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
      <div class="container mt-lg-4">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="bg-white  rounded-5 shadow-5-strong p-5" action="loginfuc.php" method="post">
                <h2>Sign In</h2>
                    <!-- Email input -->
                    <div class="form-outline mb-4 mt-4">
                        <input type="email" id="form3Example3" class="form-control mb-1" name="email" placeholder="email"
                        autocomplete="off" required style="border-bottom: 1px solid #000;" />
                        <span>Email address</span>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="form-control mb-1" name="password" placeholder="password"
                         autocomplete="off" required
                         style="border-bottom: 1px solid #000;" />
                         <span>Password</span>
                    </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                      <label class="form-check-label" for="form1Example3">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class="col text-center">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary btn-block form-control-lg">Sign in</button>
                
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4 m-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                    Dont have an account? <a href="signup.php">signup here</a>
                    </label>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->

    <!-- <script>
      swal({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
      });
    </script> -->

    <script src="./main/js/sweetalert.min.js"></script>
    <script src="./main/js/jquery-3.6.0.min.js"></script>
    <?php include 'main/includes/scripts.php';?>
