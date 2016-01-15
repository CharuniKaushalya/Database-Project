<?php
namespace ApplicationBundle\Includes;
class ChildConnection{

function get_all_children(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from child";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    $children = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push ($children, $row);
    }

    colse_connection($connection);
    return $children;

}

function get_all_children_by_role_id($id){
     $connection = connect();
    //2.perform query
    $query = "SELECT * FROM child left outer join child_has_school on id=child_id ";
    $query .= "where school_id in ";
    $query .= "(SELECT distinct school_id FROM user left outer join user_has_school on id=user_id ";
    $query .= "where user_id='{$id}')";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    $children = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push ($children, $row);
    }

    colse_connection($connection);
    return $children;

}

}
?>