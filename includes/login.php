<?php include("db.php"); ?>

<?php session_start(); //starts a PHP session ?> 

<?php 

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username); //cleans the username
    $password = mysqli_real_escape_string($connection, $password); //cleans the passoword

    $query = "SELECT * FROM users WHERE username = '{$username}' "; //finds the username in DB
    $select_user_query = mysqli_query($connection, $query);

    if(!$select_user_query){ 

        die("QUERY FAILED " . mysqli_error($connection)); //checks to see if connection is okay

    }

    while($row = mysqli_fetch_array($select_user_query)){ //pulls data from DB

    $db_user_id = $row['user_id'];
    $db_username = $row['username'];
    $db_user_password = $row['user_password'];
    $db_user_firstname = $row['user_firstname'];
    $db_user_lastname = $row['user_lastname'];
    $db_user_role = $row['user_role'];

    }

    // $password = crypt($password, $db_user_password); //decrypts password

    if(password_verify($password, $db_user_password)){ //checks username and password if exactly identical

        $_SESSION['username'] = $db_username; //sets session variables for admin_header
        $_SESSION['firstname'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['user_role'] = $db_user_role;

        header("Location: ../admin"); //redirects to admin area if username and password is correct
        

    } else {
        
        header("Location: ../index.php"); //redirects to index in any other situation

    }

}
?>