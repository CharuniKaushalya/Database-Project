<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ApplicationBundle\Entity\User;
use ApplicationBundle\Form\UserType;
use ApplicationBundle\Modal\Login;
require_once 'connection.php';

/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('ApplicationBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new User entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);
        $form->handleRequest($request);

$postData = $request->request->all();
            echo dump($postData);
        if (isset($postData['submit'])) {
            
            insertuser($postData);
            echo $postData['role'] ;

            return $this->redirectToRoute('user_index');
        }
        $result = get_all_roles();
        $roles = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push ($roles, $row);
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'roles' => $roles,
        ));
    }
    public function successAction($name)
    {
        return $this->render('user/logss.html.twig', array('name' => $name));
    }
    public function loginAction(Request $request)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('ApplicationBundle:User');
        if ($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('username');
            $password = sha1($request->get('password'));
            $remember = $request->get('remember');
            $user = $repository->findOneBy(array('userName' => $username, 'password' => $password));
            if ($user) {
                if ($remember == 'remember-me') {
                    
                }
                $login = new Login();
                $login->setUsername($username);
                $login->setPassword($password);
                $login->setEmpNo($user->getEmpNo());
                $session->set('login', $login);
                return $this->render('user/welcome.html.twig', array('name' => $user->getEmpNo()));
            } else {
                return $this->render('user/login.html.twig', array('name' => 'Login Error'));
            }
        }else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('userName' => $username, 'password' => $password));
                if ($user) {
                    return $this->render('user/welcome.html.twig', array('name' => $user->getEmpNo()));
                }
            }
        }
        return $this->render('user/login.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('user/login.html.twig');
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm(new UserType(), $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param User $user The User entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
function insertuser($postData){
    
    echo dump($postData);
    $connection = connect();
    echo dump($postData);
    //$gardian = new Applicant();
    $applicant = $postData;
    $NameInFull = mysqli_real_escape_string($connection,$applicant['name_full']);
    $NameInInitials = mysqli_real_escape_string($connection,$applicant['name_initials']);
    $username= mysqli_real_escape_string($connection,$applicant['username']);
    $password = sha1(mysqli_real_escape_string($connection,$applicant['password']));
    $emp_no = mysqli_real_escape_string($connection,$applicant['emp_no']);
    $role_id = $applicant['role'];
    $query = "insert into user (";
    $query .= " name_in_full,name_in_intials, user_name,password, emp_no,role_id";
    $query .= ") values( ";
    $query .= " '{$NameInFull}','{$NameInInitials}','{$username}','{$password}','{$emp_no}',{$role_id}";
    $query .= ")";
    $result = mysqli_query($connection,$query);
    if ($result) {
    }
    colse_connection($connection);
    return null;
}
function get_all_roles(){
     $connection = connect();
    //2.perform query
    $query = "SELECT * from role";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    colse_connection($connection);
    return $result;

}