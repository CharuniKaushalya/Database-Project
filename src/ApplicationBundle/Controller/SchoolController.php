<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ApplicationBundle\Entity\School;
use ApplicationBundle\Form\SchoolType;
require_once 'connection.php';

/**
 * School controller.
 *
 */
class SchoolController extends Controller
{
    /**
     * Lists all School entities.
     *
     */
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();

        $schools = $em->getRepository('ApplicationBundle:School')->findAll();*/
        $result = get_schools();
        $schools = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($schools, $row);
        }

        return $this->render('school/index.html.twig', array(
            'schools' => $schools,
        ));
    }

    /**
     * Creates a new School entity.
     *
     */
    public function newAction(Request $request)
    {
        $school = new School();
        $form = $this->createForm(new SchoolType(), $school);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /*$em = $this->getDoctrine()->getManager();
            $em->persist($school);
            $em->flush();*/
            $postData = $request->request->all();
            $id = insertSchool($postData);

            return $this->redirectToRoute('school_show', array('id' => $id));
        }

        return $this->render('school/new.html.twig', array(
            'school' => $school,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a School entity.
     *
     */
    public function showAction(School $school)
    {
        $deleteForm = $this->createDeleteForm($school);

        return $this->render('school/show.html.twig', array(
            'school' => $school,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing School entity.
     *
     */
    public function editAction(Request $request, School $school)
    {
        $deleteForm = $this->createDeleteForm($school);
        $editForm = $this->createForm(new SchoolType(), $school);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            /*$em = $this->getDoctrine()->getManager();
            $em->persist($school);
            $em->flush();*/
            $postData = $request->request->all();
            //echo $applicant->getId();
            updateSchol($postData,$school);

            return $this->redirectToRoute('school_edit', array('id' => $school->getId()));
        }

        return $this->render('school/edit.html.twig', array(
            'school' => $school,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a School entity.
     *
     */
    public function deleteAction(Request $request, School $school)
    {
        $form = $this->createDeleteForm($school);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /*$em = $this->getDoctrine()->getManager();
            $em->remove($school);
            $em->flush();*/
            $id = $school->getId();
            $connection = connect();
            $query = "delete from school where id = {$id} limit 1";
            $result = mysqli_query($connection,$query);
            confirm_query($result);
            colse_connection($connection);
        }

        return $this->redirectToRoute('school_index');
    }

    /**
     * Creates a form to delete a School entity.
     *
     * @param School $school The School entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(School $school)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('school_delete', array('id' => $school->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
function connect_school(){
    $connection = mysqli_connect("localhost","root","bit","db_project");
    if(mysqli_connect_errno()){
        die("Connection failed".mysqli_connect_error()." ".mysqli_connect_errno());
    }
    return $connection;
}

function colse_connection_school($connection){
    if(isset($connection)){mysqli_close($connection);}
}
function confirm_query_school($result){
    if (!$result) {
    die("Database query failed");
    }
}


function get_schools(){
    // $connection = connect();
    $connection = mysqli_connect("localhost","root","bit","db_project");
    if(mysqli_connect_errno()){
        die("Connection failed".mysqli_connect_error()." ".mysqli_connect_errno());
    }
    //2.perform query
    $query = "SELECT * from school";
    $result = mysqli_query($connection,$query);
    //confirm_query($result);
    if (!$result) {
    die("Database query failed");
    }
    //colse_connection($connection);
    if(isset($connection)){mysqli_close($connection);}
    return $result;

}
function insertSchool($postData){
    
    echo dump($postData);
    $connection = connect();
    echo dump($postData['Applicationbundle_school']);
    $school = new School();
    $data = $postData['Applicationbundle_school'];
    $school->setName(mysqli_real_escape_string($connection,$data['name']));
    $school->setAddress(mysqli_real_escape_string($connection,$data['address']));
    $school->setTotStudents(mysqli_real_escape_string($connection,$data['totStudents']));
    $school->setTotVacancies(mysqli_real_escape_string($connection,$data['totVacancies']));
    $school->setStartDate(mysqli_real_escape_string($connection,$data['startDate']));
    $query = "insert into school (";
    $query .= " name,address, tot_students, tot_vacancies,start_date ";
    $query .= ") values( ";
    $query .= " '{$school->getName()}','{$school->getAddress()}','{$school->getTotStudents()}','{$school->getTotVacancies()}','{$school->getStartDate()}'";
    $query .= ")";
    $result = mysqli_query($connection,$query);
    if ($result) {
       // echo dump($result);
        $query = "select id from school where name = '{$school->getName()}' LIMIT 1";
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
function updateSchol($postData,$school){
    $connection = connect();
    $id = $school->getId();
    $data = $postData['Applicationbundle_school'];
    $school->setName(mysqli_real_escape_string($connection,$data['name']));
    $school->setAddress(mysqli_real_escape_string($connection,$data['address']));
    $school->setTotStudents(mysqli_real_escape_string($connection,$data['totStudents']));
    $school->setTotVacancies(mysqli_real_escape_string($connection,$data['totVacancies']));
    $school->setStartDate(mysqli_real_escape_string($connection,$data['startDate']));
    
    $query = "UPDATE school SET ";
    $query .= "name = '{$school->getName()}', ";
    $query .= "address = '{$school->getAddress()}', ";
    $query .= "tot_students = {$school->getTotStudents()}, ";
    $query .= "tot_vacancies = {$school->getTotVacancies()}, ";
    $query .= "start_date = '{$school->getStartDate()}' ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    echo $query;
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);

}
