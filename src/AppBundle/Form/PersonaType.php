<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;

class PersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class,array(
                    'label' => 'Nombre: ',
                    'required' => true
            ))

            ->add('edad', IntegerType::class,array(
                    'label'=>'Edad: ',
                    'required' => false
            ))

            ->add('natalidad', BirthdayType::class, array(
                    'label'=>'Fecha nacimiento: ',
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',                    
                    'invalid_message' => 'La fecha introducida no es válida (dd-mm-yyyy)',
                    'attr' => array('size' => '20'),
                    'required' => true
            ))

            ->add('estatura', TextType::class, array(
                    'label'=>'Estatura: ',
                    'required' => false
            ))

            ->add('email', EmailType::class, array(
                    'label'=>'E-mail: ',
                    'required' => true
            ))

            ->add('telefono', TextType::class,array(
                    'label' => 'Teléfono: ',
                    'required' => true
            ))

            ->add('genero', ChoiceType::class, array(
                'label'=>'Género: ',
                'choices'  => array('m' => 'Masculino', 'f' => 'Femenino', 'mx' => 'Maricón', 'fx' => 'Lesbianorra'),
                'required' => false,                
                'required' => true
            ))

            ->add('descendientes', IntegerType::class,array(
                    'label' => 'Nº de hijos: ',
                    'required' => false
            ))

            ->add('vehiculo', CheckboxType::class, array(
                    'label'    => '¿Vehículo propio?',
                    'required' => false,
            ))

            ->add('lengua', LanguageType::class,array(
                    'label' => 'Lengua: ',
                    'required' => false
            ))

            ->add('ingles', ChoiceType::class, array(
                    'label' => 'Nivel de inglés: ',
                    'choices'  => array(1 => 'A1', 2 => 'A2', 3 => 'B1', 4 => 'B2', 5 => 'C1', 6 => 'C2'),
                    'expanded' => true,  // esto hace que salga un select o no
                    'multiple' => false, // esto pone las cosas en checkbox                    
                    'required'=> false, // Esto saca la opción NONE en radiobutton
                    'preferred_choices' => Array(2) // Esto solo va en modo Select                
             ))

            ->add('web', UrlType::class,array(
                    'label' => 'Website: ',
                    'required' => false
             ))

            ->add('tarjeta', TextType::class,array(
                    'label' => 'Tarjeta de Pago: ',
                    'required' => false
             ))

            ->add('iban', TextType::class,array(
                    'label' => 'código IBAN: ',
                    'required' => false
             ))

            ->add('foto', TextType::class,array(
                    'label' => 'Foto: ',
                    'required' => true
             )); // Esta es una líne muy larga y aquçi cierra con 'Punto y coma'
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Persona'
        ));
    }
}
