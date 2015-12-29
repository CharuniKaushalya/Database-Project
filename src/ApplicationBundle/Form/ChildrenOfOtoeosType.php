<?php

namespace ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChildrenOfOtoeosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('beforeAddressWrkPlace')
            ->add('afterAddressWrkPlace')
            ->add('distance')
            ->add('noSclAddmitted')
            ->add('lastTransferReceived','date',array('widget' => 'single_text'))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ApplicationBundle\Entity\ChildrenOfOtoeos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Applicationbundle_childrenOfOtoeosType';
    }
}
