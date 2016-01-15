<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ApplicationBundle\Entity\Child;
use ApplicationBundle\Form\ChildType;
require_once 'connection.php';
/**
 * Child controller.
 *
 * @Route("/child")
 */
class ChildController extends Controller
{
    /**
     * Lists all Child entities.
     *
     * @Route("/", name="child_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();

        $children = $em->getRepository('ApplicationBundle:Child')->findAll();*/
        $result = get_all_children();
        $children = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($children, $row);
        }

        return $this->render('child/index.html.twig', array(
            'children' => $children,
        ));
    }

    /**
     * Creates a new Child entity.
     *
     * @Route("/new", name="child_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $child = new Child();
        $form = $this->createForm(new ChildType(), $child);
        $form->handleRequest($request);

        $id = $request->get('id');
        $applicant = $this->getDoctrine()->getRepository('ApplicationBundle:Applicant')->find($id);
        $child->setApplicant($applicant);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($child);
            $em->flush();
            $Ap = $applicant;
            return $this->redirectToRoute('child_preferrence',array('id' => $id, 'child_id' => $child->getId()));
        }

        return $this->render('child/new.html.twig', array(
            'child' => $child,
            'applicant' => $applicant,
            'form' => $form->createView(),
        ));
    }

    public function preffAction(Request $request)
    {
        $Applicant_id = $request->get('id');
        $child_id = $request->get('child_id');
        $result = get_all_schools();
        $schools = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($schools, $row);
        }

        $postData = $request->request->all();
        if (isset($postData['submit']) && isset($postData['school'])) {
            $count = 1;
            foreach ($postData['school'] as $school) {
                if(isset($school['sid'])){
                    $connection = connect();
                    dump($school);
                    $no = $count;
                    $distance = $school['distance'];
                    $sch_id = $school['sid'];
                    $query = "insert into child_has_school (";
                    $query .= " child_id, school_id, preferrence_no, distance";
                    $query .= ") values( ";
                    $query .= " '{$child_id}','{$sch_id}','{$no}',{$distance}";
                    $query .= ")";
                    $result = mysqli_query($connection,$query);
                    colse_connection($connection);
            
        }
        $count++;
        }
        return $this->redirectToRoute('applicant_child_show', array('id' => $Applicant_id));
        }

        
        return $this->render('child/prefer.html.twig', array(
            'schools' => $schools,
            'id' => $Applicant_id,
            'child_id' => $child_id
        ));
        

    }

    /**
     * Finds and displays a Child entity.
     *
     * @Route("/{id}", name="child_show")
     * @Method("GET")
     */
    public function showAction(Child $child)
    {
        $deleteForm = $this->createDeleteForm($child);

        return $this->render('child/show.html.twig', array(
            'child' => $child,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function showACAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $applicant = $em->getRepository('ApplicationBundle:Applicant')->findById($id);
        $children = $em->getRepository('ApplicationBundle:Child')->findByApplicant($applicant);

        return $this->render('child/app_child_show.html.twig', array(
            'children' => $children,
            'id' => $id,
        ));
    }


    public function showAllAction(Child $child)
    {
        $id = $child->getId();
        $applicant_id = $child->getApplicant()->getId();
        $connection = connect();

        $query = "SELECT * from children_of_staff where applicant_id = '{$applicant_id}'";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $childrenOfStaff = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($childrenOfStaff, $row);
        }

        $query = "SELECT * from childern_of_studying_at_present where applicant_id = '{$applicant_id}'";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $childernOfStudyingAtPresent = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($childernOfStudyingAtPresent, $row);
        }

        $query = "SELECT * from children_of_otoeos where applicant_id = '{$applicant_id}'";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $childrenOfOtoeo = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($childrenOfOtoeo, $row);
        }

        $query = "SELECT * from children_of_past_pupils where applicant_id = '{$applicant_id}'";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $childrenOfPastPupil = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($childrenOfPastPupil, $row);
        }
        colse_connection($connection);
        
        //$childrenOfPastPupil = $this->getDoctrine()->getRepository('ApplicationBundle:ChildrenOfPastPupils')->find($applicant);

        return $this->render('child/showall.html.twig', array(
            'child' => $child,
            'childrenOfStaff' => $childrenOfStaff,
            'childernOfStudyingAtPresent' => $childernOfStudyingAtPresent,
            'childrenOfOtoeo' => $childrenOfOtoeo,
            'childrenOfPastPupil' => $childrenOfPastPupil,

        ));
    }

    /**
     * Displays a form to edit an existing Child entity.
     *
     * @Route("/{id}/edit", name="child_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Child $child)
    {
        $deleteForm = $this->createDeleteForm($child);
        $editForm = $this->createForm(new ChildType(), $child);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($child);
            $em->flush();

            return $this->redirectToRoute('child_index');
        }

        return $this->render('child/edit.html.twig', array(
            'child' => $child,
            'applicant' => $child->getApplicant(),
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Child entity.
     *
     * @Route("/{id}", name="child_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Child $child)
    {
        $form = $this->createDeleteForm($child);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($child);
            $em->flush();
        }

        return $this->redirectToRoute('child_index');
    }

    /**
     * Creates a form to delete a Child entity.
     *
     * @param Child $child The Child entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Child $child)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('child_delete', array('id' => $child->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
function get_all_children(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from child";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}
function get_all_schools(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from school";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}

