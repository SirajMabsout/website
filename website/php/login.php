<?php
session_start();

function miss(){
    if (isset($_POST['user']) && isset($_POST['pass'])){
        return 0;
    } else {
        return 1;
    }
}

function findUser($user,$pass){
    if($file = fopen('../php/users.csv', "r")!=FALSE){
        $file = fopen('../php/users.csv', "r");
        while (($data = fgetcsv($file)) !== FALSE) {
            if ($data[0] == $user && $data[1] == $pass) {
                return 1;
            }
        }
    }
    return 0;
}

if (!miss()) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
} 

if(findUser($user,$pass)){
    $_SESSION['user'] = $user;
    echo '<script>window.location.href = "../pages/Home.php";</script>';
}
else{
    echo '<script>alert("Username or password incorrect")</script>'; 
    echo '<script>window.location.href = "../index.php";</script>';
}




 


?>