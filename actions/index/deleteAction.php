<?php

$deleted = false;

if (isset($_REQUEST['id']) && !empty($_REQUEST['id']))
{
    $id = (int) $_REQUEST['id'];
    if ($db->query("DELETE FROM users WHERE id = $id"))
    {
        //$deleted = true;
        $_SESSION['message']['info'] = 'Selected record was deleted from DB';
    }
    else
    {
        //$deleted = false;
        $_SESSION['message']['warning'] = 'Record has not been deleted';
    }
}

redirect('?page=index&action=users');