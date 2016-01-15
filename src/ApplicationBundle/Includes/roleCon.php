<?php 
namespace ApplicationBundle\Includes;
class roleCon{

function getUserById($username,$password){
    $connection = connect();
    $query = "SELECT * from user where user_name = '{$username}' and password = '{$password}' limit 1";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    $user=mysqli_fetch_assoc($result);
    return $user;
}
function insertRole($data){

        $connection = connect();
        $role = new Role();
        echo dump($data);
        $role->setRole(mysqli_real_escape_string($connection,$data['role']));
        $role->setDescription(mysqli_real_escape_string($connection,$data['description']));
        $query = "insert into role (";
        $query .= " role,description ";
        $query .= ") values( ";
        $query .= " '{$role->getRole()}','{$role->getDescription()}'";
        $query .= ")";
        $result = mysqli_query($connection,$query);
        if ($result) {
            $id = mysqli_insert_id($connection);
            return $id;
        }
        colse_connection($connection);
        return null;
}
function get_all_roles(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from role";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    $roles = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push ($roles, $row);
    } 
    colse_connection($connection);
    return $roles;

}

function get_preveliges_by_role($role){
     $connection = connect();
    //2.perform query
    $query = "SELECT previlege.id,previlege,previlege.description from ";
    $query .= "(role left outer join role_has_previlege on role.id = role_has_previlege.role_id)";
    $query .= " left outer join previlege on role_has_previlege.previlege_id = previlege.id";
    $query .= " where role.id='{$role->getId()}'";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    $previleges  = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push ($previleges, $row);
    }
    colse_connection($connection);
    return $result;

}

function get_preveliges_by_role_id($role_id){
     $connection = connect();
    //2.perform query
    $query = "SELECT previlege.id,previlege from ";
    $query .= "(role left outer join role_has_previlege on role.id = role_has_previlege.role_id)";
    $query .= " left outer join previlege on role_has_previlege.previlege_id = previlege.id";
    $query .= " where role.id='{$role_id}'";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    $previleges  = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push ($previleges, $row);
    }
    colse_connection($connection);
    return $previleges;

}

function get_other_previlegs($role){
     $connection = connect();
    //2.perform query
    $query = "SELECT * FROM previlege where id not in ";
    $query .= "(select id from previlege left outer join role_has_previlege on previlege.id = role_has_previlege.previlege_id ";
    $query .= "where role_has_previlege.role_id='{$role->getId()}')";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}

function insert_pre_for_role($role_id,$previlege_id){
    $connection = connect();
    $query = "insert into role_has_previlege (";
    $query .= " role_id, previlege_id";
    $query .= ") values( ";
    $query .= " '{$role_id}','{$previlege_id}'";
    $query .= ")";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}

function updateRole($data,$role){
    $connection = connect();
    $id = $role->getId();;
    $role->setRole(mysqli_real_escape_string($connection,$data['role']));
    $role->setDescription(mysqli_real_escape_string($connection,$data['description']));
    
    $query = "UPDATE role SET ";
    $query .= "role = '{$role->getRole()}', ";
    $query .= "description = '{$role->getDescription()}' ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    echo $query;
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);

}

}

?>