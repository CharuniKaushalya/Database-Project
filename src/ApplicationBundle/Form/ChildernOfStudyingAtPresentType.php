<?php

namespace ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChildernOfStudyingAtPresentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameInFull')
            ->add('nameInInitial')  
            ->add('grade')
            ->add('addmissionGrade')
            ->add('addmissionNo')
            ->add('gradesSpent')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ApplicationBundle\Entity\ChildernOfStudyingAtPresent'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Applicationbundle_ChildernOfStudyingAtPresent';
    }
}
