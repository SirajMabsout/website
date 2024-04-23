<?php

function miss(){
    if (isset($_POST['user']) && isset($_POST['fname']) && isset($_POST['lname'])
        && isset($_POST['fpass']) && isset($_POST['dob']) && isset($_POST['sex'])) {
        return 0;
    } else {
        return 1;
    }
}



function findUser2($username){
    if (($file = fopen("users.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
            $existingUser = empty($data[0]) ? "&nbsp;" : $data[0];
            if($existingUser == $username){
                fclose($file);
                return true;
            }
        }
        fclose($file);
    }
    return false;
}

if (!miss()) {
    $user = $_POST['user'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fpass = $_POST['fpass'];
    $dob = $_POST['dob'];
    $sex = $_POST['sex'];
}

$Data = [
    'Name' => $user,
    'Password' => $fpass,
    'FirstName' => $fname,
    'LastName' => $lname,
    'DateOfBirth' => $dob,
    'Sex' => $sex
];



if(file_exists('users.csv')){
    if(findUser2($user)){
        echo '<script>alert("User exists, you can log in")</script>'; 
        echo '<script>window.location.href = "../signup.html";</script>';
    }
    else{
        $file = fopen('users.csv', 'a+');
        fputcsv($file, $Data);
        fclose($file);
        echo '<script>alert("Signed up")</script>'; 
        echo '<script>window.location.href = "../index.php";</script>';
    }
}
else{
    $file = fopen('users.csv', 'a+');
    fputcsv($file, array_keys($Data));
    fputcsv($file, $Data);
    fclose($file);
    echo '<script>alert("Signed up")</script>'; 
    echo '<script>window.location.href = "../index.php";</script>';
}



?>
