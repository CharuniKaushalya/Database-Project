<?php
namespace ApplicationBundle\Includes;
class userConnection{

function insertuser($postData){
    
    echo dump($postData);
    $connection = connect();
    echo dump($postData);
    //$gardian = new Applicant();
    $applicant = $postData;
    $NameInFull = mysqli_real_escape_string($connection,$applicant['name_full']);
    $NameInInitials = mysqli_real_escape_string($connection,$applicant['name_initials']);
    $username= mysqli_real_escape_string($connection,$applicant['username']);
    $password = sha1(mysqli_real_escape_string($connection,$applicant['password']));
    $emp_no = mysqli_real_escape_string($connection,$applicant['emp_no']);
    $role_id = $applicant['role'];
    $query = "insert into user (";
    $query .= " name_in_full,name_in_intials, user_name,password, emp_no,role_id";
    $query .= ") values( ";
    $query .= " '{$NameInFull}','{$NameInInitials}','{$username}','{$password}','{$emp_no}',{$role_id}";
    $query .= ")";
    $result = mysqli_query($connection,$query);
    if ($result) {
    }
    colse_connection($connection);
    return null;
}

function getUserById($username,$password){
    $connection = connect();
    $query = "SELECT * from user where user_name = '{$username}' and password = '{$password}' limit 1";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    $user=mysqli_fetch_assoc($result);
    return $user;
}
}
?>