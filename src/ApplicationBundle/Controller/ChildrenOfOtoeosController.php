<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ApplicationBundle\Entity\ChildrenOfOtoeos;
use ApplicationBundle\Form\ChildrenOfOtoeosType;
include 'connection.php';

/**
 * ChildrenOfOtoeos controller.
 *
 */
class ChildrenOfOtoeosController extends Controller
{
    /**
     * Lists all ChildrenOfOtoeos entities.
     *
     */
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();

        $childrenOfOtoeos = $em->getRepository('ApplicationBundle:ChildrenOfOtoeos')->findAll();*/
        $result = get_all_childrenOfOtoeos();
        $childrenOfOtoeos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($childrenOfOtoeos, $row);
        }

        return $this->render('childrenofotoeos/index.html.twig', array(
            'childrenOfOtoeos' => $childrenOfOtoeos,
        ));
    }

    /**
     * Creates a new ChildrenOfOtoeos entity.
     *
     */
    public function newAction(Request $request)
    {
        $childrenOfOtoeo = new ChildrenOfOtoeos();
        $form = $this->createForm(new ChildrenOfOtoeosType(), $childrenOfOtoeo);
        $form->handleRequest($request);
        $Applicant_id = $request->get('id');
        /*$applicant = $this->getDoctrine()->getRepository('ApplicationBundle:Applicant')->find($id);
        $childrenOfOtoeo->setApplicant($applicant);*/

        if ($form->isSubmitted() && $form->isValid()) {
            /*$em = $this->getDoctrine()->getManager();
            $em->persist($childrenOfOtoeo);
            $em->flush();*/
            $postData = $request->request->all();
            $id = insertotoes($postData,$Applicant_id);

            return $this->redirectToRoute('applicant_index');
        }

        return $this->render('childrenofotoeos/new.html.twig', array(
            'childrenOfOtoeo' => $childrenOfOtoeo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ChildrenOfOtoeos entity.
     *
     */
    public function showAction(ChildrenOfOtoeos $childrenOfOtoeo)
    {
        $deleteForm = $this->createDeleteForm($childrenOfOtoeo);

        return $this->render('childrenofotoeos/show.html.twig', array(
            'childrenOfOtoeo' => $childrenOfOtoeo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ChildrenOfOtoeos entity.
     *
     */
    public function editAction(Request $request, ChildrenOfOtoeos $childrenOfOtoeo)
    {
        $deleteForm = $this->createDeleteForm($childrenOfOtoeo);
        $editForm = $this->createForm(new ChildrenOfOtoeosType(), $childrenOfOtoeo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $postData = $request->request->all();
            updateChildrenofotoeos($postData,$childrenOfOtoeo);

            return $this->redirectToRoute('childrenofotoeos_edit', array('id' => $childrenOfOtoeo->getId()));
        }

        return $this->render('childrenofotoeos/edit.html.twig', array(
            'childrenOfOtoeo' => $childrenOfOtoeo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ChildrenOfOtoeos entity.
     *
     */
    public function deleteAction(Request $request, ChildrenOfOtoeos $childrenOfOtoeo)
    {
        $form = $this->createDeleteForm($childrenOfOtoeo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id = $childrenOfOtoeo->getId();
            $connection = connect();
            $query = "delete from children_of_otoeos where id = {$id} limit 1";
            $result = mysqli_query($connection,$query);
            confirm_query($result);
            colse_connection($connection);
        }

        return $this->redirectToRoute('childrenofotoeos_index');
    }

    /**
     * Creates a form to delete a ChildrenOfOtoeos entity.
     *
     * @param ChildrenOfOtoeos $childrenOfOtoeo The ChildrenOfOtoeos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ChildrenOfOtoeos $childrenOfOtoeo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('childrenofotoeos_delete', array('id' => $childrenOfOtoeo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
/*function connect(){
    $connection = mysqli_connect("localhost","root","bit","db_project");
    if(mysqli_connect_errno()){
        die("Connection failed".mysqli_connect_error()." ".mysqli_connect_errno());
    }
    return $connection;
}

function colse_connection($connection){
    if(isset($connection)){mysqli_close($connection);}
}
function confirm_query($result){
    if (!$result) {
    die("Database query failed");
    }
}*/

function get_all_childrenOfOtoeos(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from children_of_otoeos";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}
function insertotoes($postData,$Applicant_id){
    
    echo dump($postData);
    $connection = connect();
    echo dump($postData['Applicationbundle_childrenOfOtoeosType']);
    $childrenofotoeos = new ChildrenOfOtoeos();
    $data = $postData['Applicationbundle_childrenOfOtoeosType'];
    $childrenofotoeos->setLastTransferReceived($data['lastTransferReceived']);
    $childrenofotoeos->setBeforeAddressWrkPlace(mysqli_real_escape_string($connection,$data['beforeAddressWrkPlace']));
    $childrenofotoeos->setAfterAddressWrkPlace(mysqli_real_escape_string($connection,$data['afterAddressWrkPlace']));
    $childrenofotoeos->setDistance(mysqli_real_escape_string($connection,$data['distance']));
    $childrenofotoeos->setNoSclAddmitted(mysqli_real_escape_string($connection,$data['noSclAddmitted']));
    $query = "insert into children_of_otoeos (";
    $query .= " last_transfer_received,before_address_wrk_place, after_address_wrk_place, distance,no_scl_addmitted,Applicant_id";
    $query .= ") values( ";
    $query .= " '{$childrenofotoeos->getLastTransferReceived()}','{$childrenofotoeos->getBeforeAddressWrkPlace()}','{$childrenofotoeos->getAfterAddressWrkPlace()}',{$childrenofotoeos->getDistance()},{$childrenofotoeos->getNoSclAddmitted()},{$Applicant_id}";
    $query .= ")";
    $result = mysqli_query($connection,$query);
    if ($result) {
       // echo dump($result);
        $query = "select id from children_of_otoeos where last_transfer_received= '{$childrenofotoeos->getLastTransferReceived()}' and before_address_wrk_place = '{$childrenofotoeos->getBeforeAddressWrkPlace()}' and after_address_wrk_place = '{$childrenofotoeos->getAfterAddressWrkPlace()}' LIMIT 1";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $row = mysqli_fetch_assoc($result);
        colse_connection($connection);
        //echo dump($row);
        return $row['id'];
    }
    colse_connection($connection);
    return null;
}
function updateChildrenofotoeos($postData,$childrenofotoeos){
    $connection = connect();
    $data = $postData['Applicationbundle_childrenOfOtoeosType'];
    $id = $childrenofotoeos->getId();
    $childrenofotoeos->setLastTransferReceived($data['lastTransferReceived']);
    $childrenofotoeos->setBeforeAddressWrkPlace(mysqli_real_escape_string($connection,$data['beforeAddressWrkPlace']));
    $childrenofotoeos->setAfterAddressWrkPlace(mysqli_real_escape_string($connection,$data['afterAddressWrkPlace']));
    $childrenofotoeos->setDistance(mysqli_real_escape_string($connection,$data['distance']));
    $childrenofotoeos->setNoSclAddmitted(mysqli_real_escape_string($connection,$data['noSclAddmitted']));
    
    
    $query = "UPDATE children_of_otoeos SET ";
    $query .= "last_transfer_received = '{$childrenofotoeos->getLastTransferReceived()}', ";
    $query .= "before_address_wrk_place = '{$childrenofotoeos->getBeforeAddressWrkPlace()}', ";
    $query .= "after_address_wrk_place = '{$childrenofotoeos->getAfterAddressWrkPlace()}', ";
    $query .= "distance = {$childrenofotoeos->getDistance()}, ";
    $query .= "no_scl_addmitted = {$childrenofotoeos->getNoSclAddmitted()} ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);

}

