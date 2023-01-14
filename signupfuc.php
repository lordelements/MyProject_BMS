<?php 

    include 'conn.php';
    session_start();
    error_reporting(0);

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        // $filename = $_FILES['image']['name'];
        // $img_size = $_FILES['image']['size'];
        // $tmp_name = $_FILES['image']['tmp_name'];

        $firstName = $conn->real_escape_string($_POST['firstName']);
        $middleName = $conn->real_escape_string($_POST['middleName']);
        $lastName = $conn->real_escape_string($_POST['lastName']);
        $password = $conn->real_escape_string($_POST['password']);
        $cpassword = $conn->real_escape_string($_POST['cpassword']);
        $email = $conn->real_escape_string($_POST['email']);
        // $usertype = $conn->real_escape_string($_POST['usertype']);

      
        // if ($img_size > 10000) {
        //     $sql = "SELECT image FROM accounts WHERE id = $id";
        //     $result = $conn->query($sql);
        //     echo "<script>alert('Ops! Your picture is too large');</script>";

            if ($password == $cpassword) {
                $sql = "SELECT * FROM accounts WHERE email='$email'";
                $result = $conn->query($sql);
                if (!$result->num_rows > 0) {
                    $sql = "INSERT INTO accounts (`image`, `firstName`, `middleName`, `lastName`, `email`, `password`)
                    VALUES ('$filename','$firstName','$middleName','$lastName','$email','$password')";
                    $result = $conn->query($sql);
                    if ($result == true) {
                        // move_uploaded_file($_FILES['image']['tmp_name'], "uploaded/userimage/$filename");
                        // $_SESSION['status'] = "Good job";
                        // $_SESSION['status_text'] = "Wow! User Registration Completed.";
                        // $_SESSION['status_code'] = "success";
                        $_SESSION['success'] = "Wow! User Registration Completed.";
                        header('Location: signup.php');
                        $firstName = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['cpassword'] = "";

                    } else {
                        // $_SESSION['status'] = "Warning";
                        // $_SESSION['status_text'] = "Woops! Something Went Wrong";
                        // $_SESSION['status_code'] = "warning";
                        $_SESSION['success'] = "Woops! Something Went Wrong";
                        header('Location: signup.php');
                    }

                } else {
                    // $_SESSION['status'] = "Warning";
                    // $_SESSION['status_text'] = "Woops! Email Already Exists";
                    // $_SESSION['status_code'] = "warning";
                    $_SESSION['success'] = "Woops! Email Already Exists";
                    header('Location: signup.php');;
                }	
                
            } else {
                // $_SESSION['status'] = "Error";
                // $_SESSION['status_text'] = "Password Did Not Matched.";
                // $_SESSION['status_code'] = "error";
                $_SESSION['success'] = "Password Did Not Matched.";
                header('Location: signup.php');
            }
        } 
        
    // }
?>
