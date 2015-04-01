<?php

namespace AngelesVida\DataBaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActividadType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('fecha')
            ->add('horaInicio')
            ->add('horaFin')
            ->add('descripcion')
            ->add('lugar')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AngelesVida\DataBaseBundle\Entity\Actividad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'angelesvida_databasebundle_actividad';
    }
}
