<?php

namespace ApplicationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ApplicationBundle\Entity\User;
use ApplicationBundle\Form\UserType;
use ApplicationBundle\Modal\Login;
use ApplicationBundle\Includes\roleCon;
use ApplicationBundle\Includes\userConnection;
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
    private $role_connection;
    private $user_connection;

    public function __construct(){
        $this->role_connection = new roleCon();
        $this->user_connection = new userConnection();
    }

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
        if (isset($postData['submit'])) {
            
            $this->user_connection->insertuser($postData);

            return $this->redirectToRoute('user_index');
        }
        $roles = $this->role_connection->get_all_roles();
        

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
       // $em = $this->getDoctrine()->getEntityManager();
        //$repository = $em->getRepository('ApplicationBundle:User');
        if ($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('username');
            $password = sha1($request->get('password'));
            $remember = $request->get('remember');
            $user = $this->user_connection->getUserById($username,$password);
            $emp_no = $user['emp_no'];
            $roleId = $user['role_id'];
            $id = $user['id'];
            //$user = $repository->findOneBy(array('userName' => $username, 'password' => $password));$user->getEmpNo()
            if ($user) {
                if ($remember == 'remember-me') {
                    
                }
                $login = new Login();
                $login->setUsername($username);
                $login->setPassword($password);
                $login->setEmpNo($emp_no);
                $login->setRoleId($roleId);
                $login->setId($id);
                $session->set('login', $login);

                $previleges = $this->role_connection->get_preveliges_by_role_id($roleId);

                
                return $this->render('user/welcome.html.twig', array(
                    'name' => $emp_no,
                    'previleges' => $previleges
                ));
            } else {
                return $this->render('user/login.html.twig', array('name' => 'Login Error'));
            }
        }else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $this->user_connection->getUserById($username,$password);
                $roleId = $user['role_id'];
                //$user = $repository->findOneBy(array('userName' => $username, 'password' => $password));

                $previleges = $this->role_connection->get_preveliges_by_role_id($roleId);

                if ($user) {
                    return $this->render('user/welcome.html.twig', array(
                        'name' => $login->getEmpNo(),
                        'previleges' => $previleges
                    ));
                }
            }
        }
        return $this->render('user/login.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('default/home.html.twig');
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