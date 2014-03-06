<?php

namespace Administrador\AdjBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExpedienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroexpedienteKy')
            ->add('titulojuicio')
            ->add('estadoprocesal')
            ->add('fechainicio')
            ->add('fechatermino')
            ->add('cuantia')
            ->add('tipoestado')
            ->add('tipoestadoborrado')
            ->add('creadoporId')
            ->add('creadoel')
            ->add('actualizadoporId')
            ->add('actualizadoel')
            ->add('abogado')
            ->add('cliente')
            ->add('contrario')
            ->add('empresa')
            ->add('instanciaactual')
            ->add('juzgado')
            ->add('tipoexpediente')
            ->add('tipojuicio')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Administrador\AdjBundle\Entity\Expediente'
        ));
    }

    public function getName()
    {
        return 'administrador_adjbundle_expedientetype';
    }
}
