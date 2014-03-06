<?php

namespace Administrador\AdjBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AtributoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('atributo')
            ->add('tipoestado')
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
            'data_class' => 'Administrador\AdjBundle\Entity\Atributo'
        ));
    }

    public function getName()
    {
        return 'administrador_adjbundle_atributotype';
    }
}
