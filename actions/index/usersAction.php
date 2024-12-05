<?php
/*
if (isset($_GET['deleted']))
{
    if ($_GET['deleted'] == true)
        showMessage('info', 'Selected record was deleted from DB');
    else
        showMessage('warning', 'Record has not been deleted');
}
*/
$sql = "SELECT * FROM users";
$res = $db->query($sql);