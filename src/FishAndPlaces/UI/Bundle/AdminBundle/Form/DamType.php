<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Form;

use FishAndPlaces\GreenObject\Application\Fish\FishQueryService;
use Symfony\Component\Form\ChoiceList\Loader\CallbackChoiceLoader;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DamType extends GreenObjectType
{
    /** @var FishQueryService */
    protected $fishQueryService;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $this->fishQueryService = $options['fishQueryService'];
        $fishSelect = $this->fishQueryService->getFishSelect();

        $builder->add('fishCollection', ChoiceType::class, array(
            'choice_loader' => new CallbackChoiceLoader(function() use ($fishSelect){
                return $fishSelect;
            }
            ),
            'multiple' => true,
            'expanded' => true,
            'mapped' => true
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamRepresentation',
            'fishQueryService' => null
        ));
    }
}
