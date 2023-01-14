<?php
    // session_start();
    if (isset($_SESSION['status'])) 
    {
    ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status']?>",
            text: "<?php echo $_SESSION['status_text']?>",
            icon: "<?php echo $_SESSION['status_code'];?>",
        });

    </script>

    <?php include 'main/includes/header.php';?>

    <?php include 'main/includes/scripts.php';?>
    
    <?php
    unset($_SESSION['status']);
    }
?>