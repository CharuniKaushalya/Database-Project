<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ApplicationBundle\Entity\ChildrenOfStaff;
use ApplicationBundle\Form\ChildrenOfStaffType;
include 'connection.php';

/**
 * ChildrenOfStaff controller.
 *
 * @Route("/childrenofstaff")
 */
class ChildrenOfStaffController extends Controller
{
    /**
     * Lists all ChildrenOfStaff entities.
     *
     * @Route("/", name="childrenofstaff_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();

        $childrenOfStaffs = $em->getRepository('ApplicationBundle:ChildrenOfStaff')->findAll();*/
        $result = get_all_childrenOfStaff();
        $childrenOfStaffs = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($childrenOfStaffs, $row);
        }

        return $this->render('childrenofstaff/index.html.twig', array(
            'childrenOfStaffs' => $childrenOfStaffs,
        ));
    }

    /**
     * Creates a new ChildrenOfStaff entity.
     *
     * @Route("/new", name="childrenofstaff_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $childrenOfStaff = new ChildrenOfStaff();
        $form = $this->createForm(new ChildrenOfStaffType(), $childrenOfStaff);
        $form->handleRequest($request);

        $Applicant_id = $request->get('id');
        /*$applicant = $this->getDoctrine()->getRepository('ApplicationBundle:Applicant')->find($id);
        $childrenOfStaff->setApplicant($applicant);*/

        if ($form->isSubmitted() && $form->isValid()) {
            /*$em = $this->getDoctrine()->getManager();
            $em->persist($childrenOfStaff);
            $em->flush();*/
            $postData = $request->request->all();
            $id = insert($postData,$Applicant_id);

            return $this->redirectToRoute('childrenofotoeos_new', array('id' => $Applicant_id));
        }

        return $this->render('childrenofstaff/new.html.twig', array(
            'childrenOfStaff' => $childrenOfStaff,
            'form' => $form->createView(),
            'Applicant_id' => $Applicant_id,
        ));
    }

    /**
     * Finds and displays a ChildrenOfStaff entity.
     *
     * @Route("/{id}", name="childrenofstaff_show")
     * @Method("GET")
     */
    public function showAction(ChildrenOfStaff $childrenOfStaff)
    {
        $deleteForm = $this->createDeleteForm($childrenOfStaff);

        return $this->render('childrenofstaff/show.html.twig', array(
            'childrenOfStaff' => $childrenOfStaff,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ChildrenOfStaff entity.
     *
     * @Route("/{id}/edit", name="childrenofstaff_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ChildrenOfStaff $childrenOfStaff)
    {
        $deleteForm = $this->createDeleteForm($childrenOfStaff);
        $editForm = $this->createForm(new ChildrenOfStaffType(), $childrenOfStaff);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $postData = $request->request->all();
            updateChildrenOfStaff($postData,$childrenOfStaff);

            return $this->redirectToRoute('childrenofstaff_edit', array('id' => $childrenOfStaff->getId()));
        }

        return $this->render('childrenofstaff/edit.html.twig', array(
            'childrenOfStaff' => $childrenOfStaff,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ChildrenOfStaff entity.
     *
     * @Route("/{id}", name="childrenofstaff_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ChildrenOfStaff $childrenOfStaff)
    {
        $form = $this->createDeleteForm($childrenOfStaff);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id = $childrenOfStaff->getId();
            $connection = connect();
            $query = "delete from children_of_staff where id = {$id} limit 1";
            $result = mysqli_query($connection,$query);
            confirm_query($result);
            colse_connection($connection);
        }

        return $this->redirectToRoute('childrenofstaff_index');
    }

    /**
     * Creates a form to delete a ChildrenOfStaff entity.
     *
     * @param ChildrenOfStaff $childrenOfStaff The ChildrenOfStaff entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ChildrenOfStaff $childrenOfStaff)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('childrenofstaff_delete', array('id' => $childrenOfStaff->getId())))
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

function get_all_childrenOfStaff(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from children_of_staff";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}
function insert($postData,$Applicant_id){
    
    echo dump($postData);
    $connection = connect();
    echo dump($postData['Applicationbundle_ChildrenOfStaff']);
    $childrenOfStaff = new ChildrenOfStaff();
    $data = $postData['Applicationbundle_ChildrenOfStaff'];
    $childrenOfStaff->setPeriodOfService(mysqli_real_escape_string($connection,$data['periodOfService']));
    $childrenOfStaff->setPeriodOfDifficultSchoolService(mysqli_real_escape_string($connection,$data['periodOfDifficultSchoolService']));
    $childrenOfStaff->setDiffFromYear($data['diffFromYear']);
    $childrenOfStaff->setDiffToYear($data['diffToYear']);
    $childrenOfStaff->setUnUtilizedLeave($data['unUtilizedLeave']);
    $childrenOfStaff->setEmpId(mysqli_real_escape_string($connection,$data['empId']));
    $query = "insert into children_of_staff (";
    $query .= " period_of_service,period_of_difficult_school_service, diff_from_year, diff_to_year,un_utilized_leave,emp_id,Applicant_id";
    $query .= ") values( ";
    $query .= " {$childrenOfStaff->getPeriodOfService()},{$childrenOfStaff->getPeriodOfDifficultSchoolService()},'{$childrenOfStaff->getDiffFromYear()}','{$childrenOfStaff->getDiffToYear()}','{$childrenOfStaff->getUnUtilizedLeave()}','{$childrenOfStaff->getEmpId()}',{$Applicant_id}";
    $query .= ")";
    $result = mysqli_query($connection,$query);
    if ($result) {
       // echo dump($result);
        $query = "select id from children_of_staff where emp_id= '{$childrenOfStaff->getEmpId()}' LIMIT 1";
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
function updateChildrenOfStaff($postData,$childrenOfStaff){
    $connection = connect();
    $id = $childrenOfStaff->getId();
    $data = $postData['Applicationbundle_ChildrenOfStaff'];
    $childrenOfStaff->setPeriodOfService(mysqli_real_escape_string($connection,$data['periodOfService']));
    $childrenOfStaff->setPeriodOfDifficultSchoolService(mysqli_real_escape_string($connection,$data['periodOfDifficultSchoolService']));
    $childrenOfStaff->setDiffFromYear($data['diffFromYear']);
    $childrenOfStaff->setDiffToYear($data['diffToYear']);
    $childrenOfStaff->setUnUtilizedLeave($data['unUtilizedLeave']);
    $childrenOfStaff->setEmpId(mysqli_real_escape_string($connection,$data['empId']));
    
    
    $query = "UPDATE children_of_staff SET ";
    $query .= "period_of_service = {$childrenOfStaff->getPeriodOfService()}, ";
    $query .= "period_of_difficult_school_service = {$childrenOfStaff->getPeriodOfDifficultSchoolService()}, ";
    $query .= "diff_from_year = '{$childrenOfStaff->getDiffFromYear()}', ";
    $query .= "diff_to_year = '{$childrenOfStaff->getDiffToYear()}', ";
    $query .= "un_utilized_leave = '{$childrenOfStaff->getUnUtilizedLeave()}', ";
    $query .= "emp_id = '{$childrenOfStaff->getEmpId()}' ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);

}
