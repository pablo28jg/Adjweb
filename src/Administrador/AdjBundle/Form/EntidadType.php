<?php

namespace Administrador\AdjBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EntidadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidopaterno')
            ->add('apellidomaterno')
            ->add('email')
            ->add('telefono1')
            ->add('telefono2')
            ->add('telefono3')
            ->add('usuario')
            ->add('esusuario')
            ->add('esabogado')
            ->add('escliente')
            ->add('escontrario')
            ->add('esinstancia')
            ->add('esotro')
            ->add('direccionId')
            ->add('perfilId')
            ->add('esrepresentante')
            ->add('tipopersona')
            ->add('rfc')
            ->add('curp')
            ->add('tipoestado')
            ->add('tipoestadoborrado')
            ->add('creadoporId')
            ->add('creadoel')
            ->add('actualizadoporId')
            ->add('actualizadoel')
            ->add('empresa')
            ->add('lenguaje')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Administrador\AdjBundle\Entity\Entidad'
        ));
    }

    public function getName()
    {
        return 'administrador_adjbundle_entidadtype';
    }
}
