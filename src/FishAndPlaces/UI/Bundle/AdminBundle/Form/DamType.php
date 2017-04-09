<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Form;

use FishAndPlaces\Dam\Application\Dam\DamImageRepresentation;
use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use FishAndPlaces\Dam\Application\Fish\FishQueryService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\ChoiceList\Loader\CallbackChoiceLoader;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DamType extends AbstractType
{
    /** @var FishQueryService */
    private $fishQueryService;

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $this->fishQueryService = $options['fishQueryService'];
        $fishSelect = $this->fishQueryService->getFishSelect();

        if ($options['data']->getFishCollection() === null) {
            $options['data']->getFishCollection(true);
        }
        $builder
            ->add('is_active', ChoiceType::class, array(
                'required' => true,
                'choices' => ['No' => 0, 'Yes' => 1]))
            ->add('show_on_first_page', ChoiceType::class, array(
                'required' => true,
                'choices' => ['No' => 0, 'Yes' => 1]))
            ->add('name', TextType::class, array('required' => true))
            ->add('price_pro_person', NumberType::class, array('required' => true))
            ->add('address', TextType::class, array('required' => true))
            ->add('contact_information', TextareaType::class, array('required' => false))
            ->add('mainImage', FileType::class, array('required' => true, 'data_class' => null))
            ->add('fishCollection', ChoiceType::class, array(
                'choice_loader' => new CallbackChoiceLoader(function() use ($fishSelect){
                    return $fishSelect;
                }
            ),
                'multiple' => true,
                'expanded' => true,
                'mapped' => true
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FishAndPlaces\Dam\Application\Dam\DamRepresentation',
            'fishQueryService' => null
        ));
    }
}
