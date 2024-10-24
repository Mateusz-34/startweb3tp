<?php

$deleted = false;

if (isset($_REQUEST['id']) && !empty($_REQUEST['id']))
{
    $id = (int) $_REQUEST['id'];
    if ($db->query("DELETE FROM users WHERE id = $id"))
    {
        $deleted = true;
    }
    else
    {
        $deleted = false;
    }
}

redirect('?page=index&action=users&deleted=' . $deleted);