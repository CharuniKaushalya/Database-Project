<?php

namespace ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApplicantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameInFull')
            ->add('nameInInitials')  
            ->add('nic') 
            ->add('religion')        
            ->add('wetherSrilankan', 'choice', array(
                'expanded'     => true,
                'choices'      => array('1' => 'Yes', '2' => 'No'),
            ))
            ->add('permanentAddress', 'textarea', array(
                'attr' => array(
                'class' => 'input-large',
                'placeholder' => 'Permanent Address',
                )
            ))
            ->add('district')
            ->add('divsionalScretaryArea')
            ->add('gramaNiladariDivion')
            ->add('noYearsInElectoralRegister')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ApplicationBundle\Entity\Applicant'
        ));
    }
}
