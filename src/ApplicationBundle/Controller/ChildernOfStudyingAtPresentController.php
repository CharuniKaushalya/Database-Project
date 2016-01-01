<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ApplicationBundle\Entity\ChildernOfStudyingAtPresent;
use ApplicationBundle\Form\ChildernOfStudyingAtPresentType;
include 'connection.php';

/**
 * ChildernOfStudyingAtPresent controller.
 *
 */
class ChildernOfStudyingAtPresentController extends Controller
{
    /**
     * Lists all ChildernOfStudyingAtPresent entities.
     *
     */
    public function indexAction()
    {
        $result = get_all_children_of_studying_at_present();
        $childernOfStudyingAtPresents = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($childernOfStudyingAtPresents, $row);
        }
        return $this->render('childernofstudyingatpresent/index.html.twig', array(
            'childernOfStudyingAtPresents' => $childernOfStudyingAtPresents,
        ));
    }

    /**
     * Creates a new ChildernOfStudyingAtPresent entity.
     *
     */
    public function newAction(Request $request)
    {
        $childernOfStudyingAtPresent = new ChildernOfStudyingAtPresent();
        $form = $this->createForm(new ChildernOfStudyingAtPresentType(), $childernOfStudyingAtPresent);
        $form->handleRequest($request);
        $Applicant_id = $request->get('id');
        $postData = $request->request->all();
        if (isset($postData['submit'])) {
            $id = insert_children_of_studying_at_present($postData,$Applicant_id);
            return $this->redirectToRoute('childernofstudyingatpresent_new', array('id' => $Applicant_id));
        }

        $result = get_schools();
        $schools = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($schools, $row);
        }


        return $this->render('childernofstudyingatpresent/new.html.twig', array(
            'childernOfStudyingAtPresent' => $childernOfStudyingAtPresent,
            'form' => $form->createView(),
            'schools' => $schools,
        ));
    }

    /**
     * Finds and displays a ChildernOfStudyingAtPresent entity.
     *
     */
    public function showAction(ChildernOfStudyingAtPresent $childernOfStudyingAtPresent)
    {
        $deleteForm = $this->createDeleteForm($childernOfStudyingAtPresent);

        return $this->render('childernofstudyingatpresent/show.html.twig', array(
            'childernOfStudyingAtPresent' => $childernOfStudyingAtPresent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ChildernOfStudyingAtPresent entity.
     *
     */
    public function editAction(Request $request, ChildernOfStudyingAtPresent $childernOfStudyingAtPresent)
    {
        $deleteForm = $this->createDeleteForm($childernOfStudyingAtPresent);
        $editForm = $this->createForm(new ChildernOfStudyingAtPresentType(), $childernOfStudyingAtPresent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $postData = $request->request->all();
            update_children_of_studying_at_present($postData,$childernOfStudyingAtPresent);

            return $this->redirectToRoute('childernofstudyingatpresent_edit', array('id' => $childernOfStudyingAtPresent->getId()));
        }

        return $this->render('childernofstudyingatpresent/edit.html.twig', array(
            'childernOfStudyingAtPresent' => $childernOfStudyingAtPresent,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ChildernOfStudyingAtPresent entity.
     *
     */
    public function deleteAction(Request $request, ChildernOfStudyingAtPresent $childernOfStudyingAtPresent)
    {
        $form = $this->createDeleteForm($childernOfStudyingAtPresent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id = $childrenOfOtoeo->getId();
            $connection = connect();
            $query = "delete from childern_of_studying_at_present where id = {$id} limit 1";
            $result = mysqli_query($connection,$query);
            confirm_query($result);
            colse_connection($connection);
        }

        return $this->redirectToRoute('childernofstudyingatpresent_index');
    }

    /**
     * Creates a form to delete a ChildernOfStudyingAtPresent entity.
     *
     * @param ChildernOfStudyingAtPresent $childernOfStudyingAtPresent The ChildernOfStudyingAtPresent entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ChildernOfStudyingAtPresent $childernOfStudyingAtPresent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('childernofstudyingatpresent_delete', array('id' => $childernOfStudyingAtPresent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

function get_all_children_of_studying_at_present(){
    $connection = connect();
     $query = "SELECT * from childern_of_studying_at_present";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}

function insert_children_of_studying_at_present($postData,$Applicant_id){

    $connection = connect();
    $childrenofstudyingatpresent = new ChildernOfStudyingAtPresent();
    $form = $postData['Applicationbundle_ChildernOfStudyingAtPresent'];
    $childrenofstudyingatpresent->setNameInFull($form['nameInFull']);
    $childrenofstudyingatpresent->setNameInInitial($form['nameInInitial']);
    $childrenofstudyingatpresent->setGrade($form['grade']);
    $childrenofstudyingatpresent->setAddmissionGrade($form['addmissionGrade']);
    $childrenofstudyingatpresent->setAddmissionNo($form['addmissionNo']);
    $childrenofstudyingatpresent->setGradesSpent($form['gradesSpent']);
    //$childrenofstudyingatpresent->setSchool($form['school']);
    
    $query = "insert into childern_of_studying_at_present (";
    $query .= " name_in_full,name_in_initial,grade,addmission_grade,addmission_no,grades_spent,school_id,applicant_id";
    $query .= ") values( ";
    $query .= " '{$childrenofstudyingatpresent->getNameInFull()}','{$childrenofstudyingatpresent->getNameInInitial()}',{$childrenofstudyingatpresent->getGrade()},{$childrenofstudyingatpresent->getAddmissionGrade()},'{$childrenofstudyingatpresent->getAddmissionNo()}','{$childrenofstudyingatpresent->getGradesSpent()}',1,{$Applicant_id}";
    $query .= ")";
    echo  $query;
    $result = mysqli_query($connection,$query);
    if ($result) {
        $query = "select id from childern_of_studying_at_present where name_in_full= '{$childrenofstudyingatpresent->getNameInFull()}' LIMIT 1";
        echo  $query;
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $row = mysqli_fetch_assoc($result);
        colse_connection($connection);
        return $row['id'];
    }
    return null;

}

function update_children_of_studying_at_present($postData,$childrenofstudyingatpresent){

    $connection = connect();
    $form = $postData['Applicationbundle_ChildernOfStudyingAtPresent'];
    $childrenofstudyingatpresent->setNameInFull($form['nameInFull']);
    $childrenofstudyingatpresent->setNameInInitial($form['nameInInitial']);
    $childrenofstudyingatpresent->setGrade($form['grade']);
    $childrenofstudyingatpresent->setAddmissionGrade($form['addmissionGrade']);
    $childrenofstudyingatpresent->setAddmissionNo($form['addmissionNo']);
    $childrenofstudyingatpresent->setGradesSpent($form['gradesSpent']);
    
    $query = "UPDATE childern_of_studying_at_present SET ";
    $query .= " name_in_full =  '{$childrenofstudyingatpresent->getNameInFull()}',name_in_initial='{$childrenofstudyingatpresent->getNameInInitial()}',grade='{$childrenofstudyingatpresent->getGrade()}',addmission_grade = '{$childrenofstudyingatpresent->getAddmissionGrade()}',addmission_no = '{$childrenofstudyingatpresent->getAddmissionNo()}',grades_spent = '{$childrenofstudyingatpresent->getGradesSpent()}' ";
    $query .= "WHERE id = {$childrenofstudyingatpresent->getId()} ";
    $query .= "LIMIT 1";
    echo $query;
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);

}
