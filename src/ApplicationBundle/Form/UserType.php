<?php

namespace ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name_in_full','text', array(
            'label' => 'Name in Full',
            'attr' => array('placeholder' => 'Name in Full')
        ))
            ->add('name_in_intials','text', array(
            'label' => 'Name in Initials',
            'attr' => array('placeholder' => 'Name in Initials')
        ))
            ->add('user_name','text', array(
            'label' => 'User Name',
            'attr' => array('placeholder' => 'User Name')
        ))
            ->add('password','password', array(
            'label' => 'Password',
            'attr' => array('placeholder' => 'Password')
        ))
            ->add('sex', 'choice', array(
            'expanded'     => true,
            'choices'      => array('1' => 'Male', '2' => 'Female')
        ))
            ->add('dob','date',array(
            'widget' => 'single_text',
            'label' => 'Date of Birth'
        ))
            ->add('nic', 'text',array(
            'label' => 'NIC',
            'attr' => array('placeholder' => 'National Identity Card Number')
        ))
            ->add('emp_no', 'text',array(
            'label' => 'NIC',
            'attr' => array('placeholder' => 'Employee Id')
        ))
    ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ApplicationBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Webbundle_user';
    }
}
