<?php

require('connect.php');
require('session.php');
if (isset($_POST['btnlogin'])) {


$email = trim($_POST['email']);
$password = trim($_POST['password']);
$h_upass = sha1($password);

if ($password == ''){
    ?>  
    <script type="text/javascript">
        alert("Password is missing!");
        window.location = "login.php";
    </script>
    <?php
}else {
    $sql = "SELECT * FROM  `users` WHERE  `email` =  '" . $email . "' AND  `password` =  '" . $h_upass . "'";
    $result = mysqli_query($conn, $sql);

    if ($result){
        //get the number of results based n the sql statement
        $numrows = mysqli_num_rows($result);

        if ($numrows == 1) {
            //store the result to a array and passed to variable found_user
            $found_user  = mysqli_fetch_array($result);

            //fill the result to session variable
            $_SESSION['MEMBER_ID']  = $found_user['id']; 
            $_SESSION['FIRST_NAME'] = $found_user['firstname']; 
            $_SESSION['LAST_NAME']  =  $found_user['lastname']; 
            ?>    
            <script type="text/javascript">
                window.location = "index.php";
            </script>
            <?php        
        
        
        } else {
            ?>    
            <script type="text/javascript">
                alert("Username or Password Not Registered! Contact Your administrator.");
                window.location = "index.php";
            </script>
            <?php

        }

    } else {
        die("Table Query failed: " );
    }
}       
} 

?>