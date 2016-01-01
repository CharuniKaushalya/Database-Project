<?php

namespace ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChildrenOfPastPupilsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fromGrade')
            ->add('toGrade')
            ->add('fromYear','date',array('widget' => 'single_text'))
            ->add('toYear','date',array('widget' => 'single_text'))
            ->add('nameInFull')
            ->add('nameInInitial')  
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ApplicationBundle\Entity\ChildrenOfPastPupils'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Applicationbundle_ChildrenOfPastPupils';
    }
}
