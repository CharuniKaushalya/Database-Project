<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ApplicationBundle\Entity\Previlege;
require_once 'connection.php';

class PrevilegeController extends Controller
{

    public function indexAction()
    {
        $result = get_previleges();
        $previleges = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($previleges, $row);
        }

        return $this->render('previlege/index.html.twig', array(
            'previleges' => $previleges,
        ));
    }

    public function showAction(Previlege $previlege)
    {
        $deleteForm = $this->createDeleteForm($previlege);

        return $this->render('previlege/show.html.twig', array(
            'previlege' => $previlege,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    
    public function newAction(Request $request)
    {
        $postData = $request->request->all();
        if (isset($postData['submit'])) {
            
            $id = insertPrevilege($postData);

            return $this->redirectToRoute('previlege_show', array('id' => $id));
        }

        return $this->render('previlege/new.html.twig');
    }

    public function editAction(Request $request, Previlege $previlege)
    {
        $deleteForm = $this->createDeleteForm($previlege);
        $postData = $request->request->all();
        if (isset($postData['submit'])) {
            updatePrevilege($postData,$previlege);

            return $this->redirectToRoute('previlege_show', array('id' => $previlege->getId()));
        }

        return $this->render('previlege/edit.html.twig', array(
            'previlege' => $previlege,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Previlege $previlege)
    {
        $form = $this->createDeleteForm($previlege);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id = $previlege->getId();
            $connection = connect();
            $query = "delete from previlege where id = {$id} limit 1";
            $result = mysqli_query($connection,$query);
            confirm_query($result);
            colse_connection($connection);
        }

        return $this->redirectToRoute('previlege_index');
    }

    private function createDeleteForm(Previlege $previlege)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('previlege_delete', array('id' => $previlege->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}

function insertPrevilege($data){

        $connection = connect();
        $previlege = new Previlege();
        echo dump($data);
        $previlege->setPrevilege(mysqli_real_escape_string($connection,$data['previlege']));
        $previlege->setDescription(mysqli_real_escape_string($connection,$data['description']));
        $query = "insert into previlege (";
        $query .= " previlege,description ";
        $query .= ") values( ";
        $query .= " '{$previlege->getPrevilege()}','{$previlege->getDescription()}'";
        $query .= ")";
        $result = mysqli_query($connection,$query);
        if ($result) {
           // echo dump($result);
            $query = "select id from previlege where previlege = '{$previlege->getPrevilege()}' LIMIT 1";
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
function get_previleges(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from previlege";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}
function updatePrevilege($data,$previlege){
    $connection = connect();
    $id = $previlege->getId();;
    $previlege->setPrevilege(mysqli_real_escape_string($connection,$data['previlege']));
    $previlege->setDescription(mysqli_real_escape_string($connection,$data['description']));
    
    $query = "UPDATE previlege SET ";
    $query .= "previlege = '{$previlege->getPrevilege()}', ";
    $query .= "description = '{$previlege->getDescription()}' ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    echo $query;
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);

}