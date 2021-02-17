<?php

/**
 * @file : usersManager.php
 * @brief : This model is designed to implements users business logic
 * @author : Created by Pascal.BENZONANA
 * @author : Updated by Nicolas.GLASSEY
 * @version : 13-04-2020
 */

// Returns an array with users
function getUsers()
{
    $tab = json_decode(file_get_contents("data/users.json"), true); // by default, return everything as an associative array
    return $tab; //renvoi du tableau
}

// Writes in json file from array
function updateUsers($users)
{
    file_put_contents("data/users.json", json_encode($users));
}

// Controls if login informations are correct
function isLoginCorrect($userEmailAddress, $userPsw)
{
    $result = false;
    $users = getUsers();

    foreach ($users as $user) {
        if ($user["userEmailAddress"] == $userEmailAddress) {
            $result = password_verify($userPsw, $user["userHashPsw"]);
        }
    }
    return $result;
}

/**
 * @brief This function is designed to register a new account
 * @param $userEmailAddress : must be meet RFC 5321/5322
 * @param $userPsw : user's password
 * @return bool : "true" only if the user doesn't already exist. In all other cases will be "false".
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function registerNewAccount($userEmailAddress, $userPsw)
{
    $result = false;
    $users = getUsers();
    $userHashPsw = password_hash($userPsw, PASSWORD_DEFAULT);

    // Adds email address
    $users[] = array('userEmailAddress' => $userEmailAddress, "userHashPsw" => $userHashPsw);

    // Rewrites users file
    updateUsers($users);
    return true;
}
function menu(){
    $top='     <li><a href="../index.php?action=home">Home</a></li>
              <li><a href="../index.php?action=all">All</a></li>
              <li><a href="../index.php?action=about">About</a></li>
              ';

    if (isset($_SESSION['UserEmailAddress'])) {
        $bot='
        <li>
                        <a href="../index.php?action=articlesAdmin">Gestion</a>
                    </li>

                    <li>
                        <a href="../index.php?action=logout">Logout</a>
                    </li>';

    }else{
        $bot = '<li>
                        <a href="../index.php?action=login">Login</a>
                    </li>
                    <li>
                        <a href="../index.php?action=register">Register</a>
                    </li>';
    }

    return $top.$bot;
}
