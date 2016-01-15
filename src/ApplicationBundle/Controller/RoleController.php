<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ApplicationBundle\Entity\Role;
require_once 'connection.php';

class RoleController extends Controller
{
	public function indexAction()
    {
        $result = get_roles();
        $roles = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($roles, $row);
        }

        return $this->render('role/index.html.twig', array(
            'roles' => $roles,
        ));
    }

    public function showAction(Role $role)
    {
        $deleteForm = $this->createDeleteForm($role);

        return $this->render('role/show.html.twig', array(
            'role' => $role,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    
    public function newAction(Request $request)
    {
        $postData = $request->request->all();
        if (isset($postData['submit'])) {
            
            $id = insertRole($postData);

            return $this->redirectToRoute('role_show', array('id' => $id));
        }

        return $this->render('role/new.html.twig');
    }

    public function editAction(Request $request, Role $role)
    {
        $deleteForm = $this->createDeleteForm($role);
        $postData = $request->request->all();
        if (isset($postData['submit'])) {
            updateRole($postData,$role);

            return $this->redirectToRoute('role_show', array('id' => $role->getId()));
        }

        return $this->render('role/edit.html.twig', array(
            'role' => $role,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Role $role)
    {
        $form = $this->createDeleteForm($role);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id = $role->getId();
            $connection = connect();
            $query = "delete from role where id = {$id} limit 1";
            $result = mysqli_query($connection,$query);
            confirm_query($result);
            colse_connection($connection);
        }

        return $this->redirectToRoute('role_index');
    }

    private function createDeleteForm(Role $role)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('role_delete', array('id' => $role->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function previlegeAction(Request $request,Role $role)
    {
        $result = get_preveliges_by_role($role);
        $previleges = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($previleges, $row);
        }
        $postData = $request->request->all();

        $result2 = get_other_previlegs($role);
        $others = array();
        while ($row = mysqli_fetch_assoc($result2)) {
            array_push ($others, $row);
        }
            
        if(isset($postData['submit'])){
            dump($postData);
            insert_pre_for_role($role->getId(),$postData['previlege']);
            return $this->redirectToRoute('role_previlege',array('id' => $role->getId()));
        }
        
        return $this->render('role/previlege.html.twig', array(
            'previleges' => $previleges,
            'other_previleges' => $others,
            'role' => $role,
        ));
    }

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
           // echo dump($result);
            $query = "select id from role where role = '{$role->getRole()}' LIMIT 1";
            $result = mysqli_query($connection,$query);
            confirm_query($result);
            $row = mysqli_fetch_assoc($result);
            colse_connection($connection);
            //echo dump($row['id']);
            return $row['id'];
        }
        colse_connection($connection);
        return null;
}
function get_roles(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from role";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

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
    colse_connection($connection);
    return $result;

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