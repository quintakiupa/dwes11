<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('precio')
            ->add('descripcion')
            //'entity', array('label'=> 'Categoria: ', 'class'=> 'AppBundle:Categoria', 'choice_label'=> 'nombre' )
            // Todo esto hace que no se tenga que poner el método mágico __toString en el modelo de Categoría
            ->add('categoria', 'entity', array('label'=> 'Categoria: ', 'class'=> 'AppBundle:Categoria', 'choice_label'=> 'nombre' ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Producto'
        ));
    }
}
