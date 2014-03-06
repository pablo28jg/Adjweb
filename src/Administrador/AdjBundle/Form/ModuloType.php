<?php

namespace Administrador\AdjBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModuloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('modulo')
            ->add('controller')
            ->add('orden')
            ->add('tipoestado')
            ->add('tipomodulo')
            ->add('tipoestadoborrado')
            ->add('creadoporId')
            ->add('creadoel')
            ->add('actualizadoporId')
            ->add('actualizadoel')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Administrador\AdjBundle\Entity\Modulo'
        ));
    }

    public function getName()
    {
        return 'administrador_adjbundle_modulotype';
    }
}
