<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Form;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FishType extends AbstractType
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
            ->add('name', TextType::class, array('required' => true))
            ->add('description', CKEditorType::class)
            ->add('image', FileType::class, array('required' => false, 'data_class' => null))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FishAndPlaces\GreenObject\Application\Fish\FishRepresentation',
        ));
    }
}
