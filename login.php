<?php

require ('app/config/session.php');
header('Content-Type: text/html; charset=UTF-8');

require('app/config/config.php');
require('app/config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!empty($_POST['email']) && !empty($_POST['password']))
    {

    }
    else
    {
        $_SESSION['message']['error'] = 'Musisz wprowadzić login i hasło';
    }
}

header("Location: index.php");