<?php
include "../config.php";
if (isset($_POST['functionName'])) {
    login_user();
}

function login_user()
{
    $user_input_username = $_POST['username'];
    $user_input_password = $_POST['password'];
    $sql = "Select * from user";

    $result = mysqli_query($GLOBALS['conn'], $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $db_username = $row['username'];
        $db_password = $row['password'];
        $user_group = $row['group_id'];
        $status = $row['status'];

        if ($db_username == $user_input_username) {
            if (password_verify($user_input_password, $db_password) == 1) {
                if ($user_group == '1') {
                    echo ("success_admin");
                    session_start();
                    $_SESSION['username'] = $user_input_username;
                    $_SESSION['usergroup'] = $user_group;
                    break;
                } else if ($user_group == '2') {
                    echo ("success_supervisor");
                    session_start();
                    $_SESSION['username'] = $user_input_username;
                    $_SESSION['usergroup'] = $user_group;
                } else if ($user_group == '3') {
                    echo ("success_teller");
                    session_start();
                    $_SESSION['username'] = $user_input_username;
                    $_SESSION['usergroup'] = $user_group;
                } else {
                    echo ('Failed');
                }
            }
        }
    }
}
