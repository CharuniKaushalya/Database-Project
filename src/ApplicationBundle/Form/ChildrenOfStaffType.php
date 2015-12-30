<?php

namespace ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChildrenOfStaffType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('empId')
            ->add('periodOfDifficultSchoolService')
            ->add('periodOfService')
            ->add('diffFromYear','date',array('widget' => 'single_text'))
            ->add('diffToYear','date',array('widget' => 'single_text'))
            ->add('unUtilizedLeave','date',array('widget' => 'single_text'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ApplicationBundle\Entity\ChildrenOfStaff'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Applicationbundle_ChildrenOfStaff';
    }
}
