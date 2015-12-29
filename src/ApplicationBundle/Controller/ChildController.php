<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ApplicationBundle\Entity\Child;
use ApplicationBundle\Form\ChildType;
include 'connection.php';
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
            return $this->redirectToRoute('applicant_child_show', array('id' => $id));
        }

        return $this->render('child/new.html.twig', array(
            'child' => $child,
            'applicant' => $applicant,
            'form' => $form->createView(),
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

