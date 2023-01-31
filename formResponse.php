<?php
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $minimum = 4;
    $maximum = 12;
    $names = array("qwer", "wert", "erty", "rtyu", "tyui", "yuio", "uiop");
    if (strlen($username) < $minimum || strlen($username) > $maximum) {
        echo "username must between 4 and 12 characters";
    } else {
        if (!in_array($username, $names)) {
            echo "you are not registered";
        } else {
            echo "welcome";
        }
    }
    // echo "Hey " . $username . ", your password is " . $password . ".";
}
