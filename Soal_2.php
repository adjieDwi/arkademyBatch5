<?php 

// Function
function is_username_valid($username) {
    if(preg_match("/^[a-zA-Z][a-zA-Z0-9]{4,8}$/", $username)) {
        echo $username . " True";
    } else {
        echo $username . " False";
    }
    
}

function is_password_valid($password) {
    if(preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[=])[0-9A-Za-z=!@#$%]{8,}$/", $password)) {
        echo $password . " True";
    } else {
        echo $password . " False";
    }
}


// View
echo "Username<br>";
is_username_valid("Xrutaf888");
echo "<br>";
is_username_valid("1Diana");
echo "<br>";
echo "<br>";

echo "Password<br>";
is_password_valid("passW0rd=");
echo "<br>";
is_password_valid("C0d3YourFuture!#");
echo "<br>";
echo "<br>";


?>