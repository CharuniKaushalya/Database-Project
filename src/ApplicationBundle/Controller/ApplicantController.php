<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ApplicationBundle\Entity\Applicant;
use WebBundle\Entity\School;
use ApplicationBundle\Form\ApplicantType;
require_once 'connection.php';

/**
 * Applicant controller.
 *
 */
class ApplicantController extends Controller
{
    
    /**
     * Lists all Applicant entities.
     *
     */
    public function indexAction()
    {
        $result = get_all_applicants();
        $applicants = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($applicants, $row);
        }
        return $this->render('applicant/index2.html.twig', array(
            'applicants' => $applicants,
        ));
    }

   

    /**
     * Creates a new Applicant entity.
     *
     */
    public function newAction(Request $request)
    {
        $applicant = new Applicant();
        $form = $this->createForm(new ApplicantType(), $applicant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $postData = $request->request->all();
            $id = insert2($postData);
            return $this->redirectToRoute('childrenofstaff_new', array('id' => $id));
        }

        return $this->render('applicant/new.html.twig', array(
            'applicant' => $applicant,
            'form' => $form->createView(),
        ));
    }

    public function preffAction(Request $request)
    {
        $Applicant_id = $request->get('id');
        $result = gets_schools();
        $schools = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($schools, $row);
        }

        $postData = $request->request->all();
        if (isset($postData['submit']) && isset($postData['school'])) {
            $count = 0;
            foreach ($postData['school'] as $school) {
                if(isset($school['sid']) && $school['id'] != ""){
                    $connection = connect();
                    $no = $school['id'];
                    $sch_id = $school['sid'];
                    $query = "insert into applicant_has_school (";
                    $query .= " Applicant_id, school_id, preferrence_no";
                    $query .= ") values( ";
                    $query .= " '{$Applicant_id}','{$sch_id}','{$no}'";
                    $query .= ")";
                    $result = mysqli_query($connection,$query);
                    colse_connection($connection);
            
        }
        $count++;
        }
        return $this->redirectToRoute('childrenofstaff_new', array('id' => $Applicant_id));
        }

        
        return $this->render('applicant/preferrence.html.twig', array(
            'schools' => $schools,
            'id' => $Applicant_id,
        ));
        

    }

    /**
     * Finds and displays a Applicant entity.
     *
     */
    public function showAction(Applicant $applicant)
    {
        $deleteForm = $this->createDeleteForm($applicant);

        return $this->render('applicant/show.html.twig', array(
            'applicant' => $applicant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function showAllAction(Applicant $applicant)
    {
        $id = $applicant->getId();
        $connection = connect();

        $query = "SELECT * from child where applicant_id = '{$id}'";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $childs = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($childs, $row);
        }

        $query = "SELECT * from children_of_staff where applicant_id = '{$id}'";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $childrenOfStaff=mysqli_fetch_assoc($result);

        $query = "SELECT * from childern_of_studying_at_present where applicant_id = '{$id}'";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $childernOfStudyingAtPresent=mysqli_fetch_assoc($result);

        $query = "SELECT * from children_of_otoeos where applicant_id = '{$id}'";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $childrenOfOtoeo=mysqli_fetch_assoc($result);

        $query = "SELECT * from children_of_past_pupils where applicant_id = '{$id}'";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $childrenOfPastPupil=mysqli_fetch_assoc($result);
        colse_connection($connection);
        
        //$childrenOfPastPupil = $this->getDoctrine()->getRepository('ApplicationBundle:ChildrenOfPastPupils')->find($applicant);

        return $this->render('applicant/showall.html.twig', array(
           
            'applicant' => $applicant,
            'childs' => $childs,
            'childrenOfStaff' => $childrenOfStaff,
            'childernOfStudyingAtPresent' => $childernOfStudyingAtPresent,
            'childrenOfOtoeo' => $childrenOfOtoeo,
            'childrenOfPastPupil' => $childrenOfPastPupil,

        ));
    }

    /**
     * Displays a form to edit an existing Applicant entity.
     *
     */
    public function editAction(Request $request, Applicant $applicant)
    {
        $deleteForm = $this->createDeleteForm($applicant);
        $editForm = $this->createForm(new ApplicantType(), $applicant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $postData = $request->request->all();
            //echo $applicant->getId();
            update($postData,$applicant);
            return $this->redirectToRoute('applicant_edit', array('id' => $applicant->getId()));
        }

        return $this->render('applicant/edit.html.twig', array(
            'applicant' => $applicant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Applicant entity.
     *
     */
    public function deleteAction(Request $request, Applicant $applicant)
    {
        $form = $this->createDeleteForm($applicant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id = $applicant->getId();
            $connection = connect();
            $query = "delete from applicant where id = {$id} limit 1";
            $result = mysqli_query($connection,$query);
            confirm_query($result);
            colse_connection($connection);
        }

        return $this->redirectToRoute('applicant_index');
    }

    /**
     * Creates a form to delete a Applicant entity.
     *
     * @param Applicant $applicant The Applicant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Applicant $applicant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('applicant_delete', array('id' => $applicant->getId())))
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

function get_all_applicants(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from applicant";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}
function gets_schools(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from school";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}
function insert2($postData){
    
    echo dump($postData);
    $connection = connect();
    echo dump($postData['applicant']);
    $gardian = new Applicant();
    $applicant = $postData['applicant'];
    $gardian->setNameInFull(mysqli_real_escape_string($connection,$applicant['nameInFull']));
    $gardian->setNameInInitials(mysqli_real_escape_string($connection,$applicant['nameInInitials']));
    $gardian->setPermanentAddress(mysqli_real_escape_string($connection,$applicant['permanentAddress']));
    $gardian->setGramaNiladariDivion(mysqli_real_escape_string($connection,$applicant['gramaNiladariDivion']));
    $gardian->setDivsionalScretaryArea(mysqli_real_escape_string($connection,$applicant['divsionalScretaryArea']));
    $gardian->setDistrict(mysqli_real_escape_string($connection,$applicant['district']));
    $gardian->setNic(mysqli_real_escape_string($connection,$applicant['nic']));
    $gardian->setReligion(mysqli_real_escape_string($connection,$applicant['religion']));
    $gardian->setWetherSrilankan($applicant['wetherSrilankan']);
    $gardian->setNoYearsInElectoralRegister($applicant['noYearsInElectoralRegister']);
    $query = "insert into applicant (";
    $query .= " name_in_full,name_in_initials, permanent_address, grama_niladari_divion,divsional_scretary_area,district,nic,wether_srilankan,no_years_in_electoral_register,religion";
    $query .= ") values( ";
    $query .= " '{$gardian->getNameInFull()}','{$gardian->getNameInInitials()}','{$gardian->getPermanentAddress()}','{$gardian->getGramaNiladariDivion()}','{$gardian->getDivsionalScretaryArea()}','{$gardian->getDistrict()}','{$gardian->getNic()}','{$gardian->getWetherSrilankan()}','{$gardian->getNoYearsInElectoralRegister()}','{$gardian->getReligion()}'";
    $query .= ")";
    $result = mysqli_query($connection,$query);
    if ($result) {
       // echo dump($result);
        $query = "select id from applicant where name_in_full= '{$gardian->getNameInFull()}' and nic = '{$gardian->getNic()}' LIMIT 1";
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
function update($postData,$applicant){
    $connection = connect();
    $data = $postData['applicant'];
    $id = $applicant->getId();
    $applicant->setNameInFull(mysqli_real_escape_string($connection,$data['nameInFull']));
    $applicant->setNameInInitials(mysqli_real_escape_string($connection,$data['nameInInitials']));
    $applicant->setPermanentAddress(mysqli_real_escape_string($connection,$data['permanentAddress']));
    $applicant->setGramaNiladariDivion(mysqli_real_escape_string($connection,$data['gramaNiladariDivion']));
    $applicant->setDivsionalScretaryArea(mysqli_real_escape_string($connection,$data['divsionalScretaryArea']));
    $applicant->setDistrict(mysqli_real_escape_string($connection,$data['district']));
    $applicant->setNic(mysqli_real_escape_string($connection,$data['nic']));
    $applicant->setReligion(mysqli_real_escape_string($connection,$data['religion']));
    $applicant->setWetherSrilankan($data['wetherSrilankan']);
    $applicant->setNoYearsInElectoralRegister($data['noYearsInElectoralRegister']);
    
    $query = "UPDATE applicant SET ";
    $query .= "name_in_full = '{$applicant->getNameInFull()}', ";
    $query .= "name_in_initials = '{$applicant->getNameInInitials()}', ";
    $query .= "permanent_address = '{$applicant->getPermanentAddress()}', ";
    $query .= "grama_niladari_divion = '{$applicant->getGramaNiladariDivion()}', ";
    $query .= "divsional_scretary_area = '{$applicant->getDivsionalScretaryArea()}', ";
    $query .= "district = '{$applicant->getDistrict()}', ";
    $query .= "nic = '{$applicant->getNic()}', ";
    $query .= "wether_srilankan = {$applicant->getWetherSrilankan()}, ";
    $query .= "religion = '{$applicant->getReligion()}', ";
    $query .= "no_years_in_electoral_register = {$applicant->getNoYearsInElectoralRegister()} ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);

}