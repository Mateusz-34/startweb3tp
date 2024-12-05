<?php

if (!empty($_POST['id']))
{

	fieldRequired('Imię', $_POST['name']);
	fieldRequired('Nazwisko', $_POST['surname']);
	fieldRequired('E-mail', $_POST['email']);
	if(!$isError)
	{
		isEmail('E-mail', $_POST['email']);
	}

	if (!$isError)
	{    
        $id = (int) $_POST['id'];
        $query = "UPDATE users SET user_name = '{$_POST['name']}', user_surname = '{$_POST['surname']}', user_email = '{$_POST['email']}' WHERE id = $id";
        
        if ($db->query($query))
        {
            $_SESSION['message']['success'] = 'Data has been saved successfully';
        }
        else
        {
            $_SESSION['message']['warning'] = 'Data has not been saved!';
        }
    }
}

if (isset($_GET['id']))
{
    $id = (int) $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = $id";
    $res = $db->query($sql);
    $row = $res->fetch_assoc();

    if (isset($row) && !empty($row))
    {
        $form['id'] = $row['id'];
        $form['name'] =  $row['user_name'];
        $form['surname'] = $row['user_surname'];
        $form['email'] = $row['user_email'];        
    }    
}