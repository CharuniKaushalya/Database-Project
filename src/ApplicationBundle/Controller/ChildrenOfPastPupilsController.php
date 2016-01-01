<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ApplicationBundle\Entity\ChildrenOfPastPupils;
use ApplicationBundle\Form\ChildrenOfPastPupilsType;
include 'connection.php';

/**
 * ChildrenOfPastPupils controller.
 *
 */
class ChildrenOfPastPupilsController extends Controller
{
    /**
     * Lists all ChildrenOfPastPupils entities.
     *
     */
    public function indexAction()
    {
        $result = get_all_children_of_past_pupils();
        $childrenOfPastPupils = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($childrenOfPastPupils, $row);
        }
        return $this->render('childrenofpastpupils/index.html.twig', array(
            'childrenOfPastPupils' => $childrenOfPastPupils,
        ));
    }

    /**
     * Creates a new ChildrenOfPastPupils entity.
     *
     */
    public function newAction(Request $request)
    {
        $childrenOfPastPupil = new ChildrenOfPastPupils();
        $form = $this->createForm(new ChildrenOfPastPupilsType(), $childrenOfPastPupil);
        $form->handleRequest($request);
        $Applicant_id = $request->get('id');
        $postData = $request->request->all();

        if (isset($postData['submit'])) {
            dump($postData);
            $id = insert_children_of_past_pupils($postData,$Applicant_id);
            return $this->redirectToRoute('childrenofpastpupils_show', array('id' => $id));
        }

        $result = get_schools();
        $schools = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($schools, $row);
        }


        return $this->render('childrenofpastpupils/new.html.twig', array(
            'childrenOfPastPupil' => $childrenOfPastPupil,
            'form' => $form->createView(),
            'schools' => $schools,
        ));
    }

    /**
     * Finds and displays a ChildrenOfPastPupils entity.
     *
     */
    public function showAction(ChildrenOfPastPupils $childrenOfPastPupil)
    {
        $deleteForm = $this->createDeleteForm($childrenOfPastPupil);

        return $this->render('childrenofpastpupils/show.html.twig', array(
            'childrenOfPastPupil' => $childrenOfPastPupil,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ChildrenOfPastPupils entity.
     *
     */
    public function editAction(Request $request, ChildrenOfPastPupils $childrenOfPastPupil)
    {
        $deleteForm = $this->createDeleteForm($childrenOfPastPupil);
        $editForm = $this->createForm(new ChildrenOfPastPupilsType(), $childrenOfPastPupil);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $postData = $request->request->all();
            update_children_of_past_pupils($postData,$childernOfStudyingAtPresent);

            return $this->redirectToRoute('childrenofpastpupils_edit', array('id' => $childrenOfPastPupil->getId()));
        }

        return $this->render('childrenofpastpupils/edit.html.twig', array(
            'childrenOfPastPupil' => $childrenOfPastPupil,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ChildrenOfPastPupils entity.
     *
     */
    public function deleteAction(Request $request, ChildrenOfPastPupils $childrenOfPastPupil)
    {
        $form = $this->createDeleteForm($childrenOfPastPupil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id = $childrenOfOtoeo->getId();
            $connection = connect();
            $query = "delete from children_of_past_pupils where id = {$id} limit 1";
            $result = mysqli_query($connection,$query);
            confirm_query($result);
            colse_connection($connection);
        }

        return $this->redirectToRoute('childrenofpastpupils_index');
    }

    /**
     * Creates a form to delete a ChildrenOfPastPupils entity.
     *
     * @param ChildrenOfPastPupils $childrenOfPastPupil The ChildrenOfPastPupils entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ChildrenOfPastPupils $childrenOfPastPupil)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('childrenofpastpupils_delete', array('id' => $childrenOfPastPupil->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

function get_all_children_of_past_pupils(){
    $connection = connect();
    $query = "SELECT * from children_of_past_pupils";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}

function insert_children_of_past_pupils($postData,$Applicant_id){
    $connection = connect();
    dump($postData);
    $childrenofpastpupils = new ChildrenOfPastPupils();
    $form = $postData['Applicationbundle_ChildrenOfPastPupils'];
    
    $childrenofpastpupils->setFromGrade($form['fromGrade']);
    $childrenofpastpupils->setToGrade($form['toGrade']);
    $childrenofpastpupils->setFromYear($form['fromYear']);
    $childrenofpastpupils->setToYear($form['toYear']);
    $childrenofpastpupils->setNameInFull($form['nameInFull']);
    $childrenofpastpupils->setNameInInitial($form['nameInInitial']);
    //$childrenofpastpupils->setSchool($form['school']);
    $school_id = $postData['school'];

    $query = "insert into children_of_past_pupils (";
    $query .= " from_grade,to_grade,from_year,to_year,name_in_full,name_in_initial,school_id,applicant_id";
    $query .= ") values( ";
    $query .= " {$childrenofpastpupils->getFromGrade()},{$childrenofpastpupils->getToGrade()},'{$childrenofpastpupils->getFromYear()}','{$childrenofpastpupils->getToYear()}','{$childrenofpastpupils->getNameInFull()}','{$childrenofpastpupils->getNameInInitial()}',{$school_id},{$Applicant_id}";
    $query .= ")";
    $result = mysqli_query($connection,$query);
    if ($result) {
        $query = "select id from children_of_past_pupils where name_in_full= '{$childrenofpastpupils->getNameInFull()}' LIMIT 1";
        $result = mysqli_query($connection,$query);
        if (!$result) {
            die("Database query failed");
        }
        $row = mysqli_fetch_assoc($result);
        return $row['id'];
    }
    return null;

}

function update_children_of_past_pupils($postData,$childernOfStudyingAtPresent){
    $connection = connect();
    $childrenofpastpupils = new ChildrenOfPastPupils();
    $form = $postData['Applicationbundle_ChildrenOfPastPupils'];
    
    $childrenofpastpupils->setFromGrade($form['fromGrade']);
    $childrenofpastpupils->setToGrade($form['toGrade']);
    $childrenofpastpupils->setFromYear($form['fromYear']);
    $childrenofpastpupils->setToYear($form['toYear']);
    $childrenofpastpupils->setNameInFull($form['nameInFull']);
    $childrenofpastpupils->setNameInInitial($form['nameInInitial']);
    //$childrenofpastpupils->setSchool($form['school']);

    $query = "UPDATE children_of_past_pupils SET ";
    $query .= " from_grade = '{$childrenofpastpupils->getFromGrade()}' ,to_grade = '{$childrenofpastpupils->getToGrade()}',from_year= '{$childrenofpastpupils->getFromYear()}',to_year = '{$childrenofpastpupils->getToYear()}' ,name_in_full = '{$childrenofpastpupils->getNameInFull()}',name_in_initial = '{$childrenofpastpupils->getNameInInitial()}',school_id=1";
    $query .= "WHERE id = {$childrenofpastpupils->getId()} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
}