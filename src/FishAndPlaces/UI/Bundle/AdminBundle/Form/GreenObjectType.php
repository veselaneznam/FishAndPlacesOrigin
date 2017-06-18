<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Form;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

abstract class GreenObjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('is_active', ChoiceType::class, array(
                'required' => true,
                'choices' => ['No' => 0, 'Yes' => 1]))
            ->add('show_on_first_page', ChoiceType::class, array(
                'required' => true,
                'choices' => ['No' => 0, 'Yes' => 1]))
            ->add('name', TextType::class, array('required' => true))
            ->add('description', CKEditorType::class)
            ->add('price_pro_person', TextType::class, array('required' => true))
            ->add('address', TextType::class, array('required' => true))
            ->add('contact_information', TextareaType::class, array('required' => false))
            ->add('mainImage', FileType::class, array('required' => false, 'data_class' => null))
        ;
    }
}
