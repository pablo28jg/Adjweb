<?php

namespace Administrador\AdjBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OpcionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('opcion')
            ->add('controller')
            ->add('function')
            ->add('orden')
            ->add('tipoestado')
            ->add('tipoestadoborrado')
            ->add('creadoporId')
            ->add('creadoel')
            ->add('actualizadoporId')
            ->add('actualizadoel')
            ->add('moduloId')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Administrador\AdjBundle\Entity\Opcion'
        ));
    }

    public function getName()
    {
        return 'administrador_adjbundle_opciontype';
    }
}
