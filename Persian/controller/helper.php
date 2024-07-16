<?php

@include '../config/config.php';

/*
Developed by Hero Expert 
Telegram channel: @HeroExpert_ir 
*/

# Save The Message In The DataBase
function seveMessage($name, $phone, $email, $message)
{
    global $connect;
    $sql = "INSERT INTO contacts (name,phone,email,message) VALUES (:name,:phone,:email,:message);";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':name', $name,PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone,PDO::PARAM_STR);
    $stmt->bindParam(':email', $email,PDO::PARAM_STR);
    $stmt->bindParam(':message', $message,PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->rowCount();
    return $result;
}

# Admin Page Pagination
function pagination()
{
    global $connect;
    $pagination = 9;
    $sql = "SELECT * FROM contacts ;";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $res = $stmt->rowCount();
    $result = ceil($res / $pagination);
    return $result;
}

# Getting All The Messages From The DataBase
function allContacts($page)
{
    global $connect;
    $pagination = 9;
    $page_first_result = ($page - 1) * $pagination;
    $sql = "SELECT * FROM contacts LIMIT  $page_first_result , $pagination;";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_OBJ);
    return $result;
}

# Receive Messages From The DataBase
function contact($id)
{
    global $connect;
    $sql = "SELECT * FROM contacts WHERE id = :id;";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $id,PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    return $result;
}

# Change The Viewed Status Of The Message
function updateStatus($id)
{
    global $connect;
    $sql = "UPDATE contacts SET status = 'read' WHERE id = :id;";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $id,PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->rowCount();
    return $result;
}

# Redirect The User
function redirect($Url)
{
    if (!headers_sent()) {
        header("Location: $Url");
    } else {
        echo "<script type='text/javascript'>window.location.href='$Url'</script>";
        echo "<noscript><meta http-equiv='refresh' content='0;url=$Url'/></noscript>";
    }
    exit;
}

/*
Developed by Hero Expert 
Telegram channel: @HeroExpert_ir 
*/
?>