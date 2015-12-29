<?php

namespace ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChildType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameInFull')
            ->add('nameInIntials')
            ->add('sex', 'choice', array(
                'expanded'     => true,
                'choices'      => array('1' => 'Male', '2' => 'Female'),
            ))
            ->add('religion')
            ->add('mediumOfLearning', 'choice', array(
                'expanded'     => true,
                'choices'      => array('1' => 'Sinhala', '2' => 'English' , '3' => 'Tamil'),
            ))
            ->add('dob','date',array('widget' => 'single_text'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ApplicationBundle\Entity\Child'
        ));
    }
}
