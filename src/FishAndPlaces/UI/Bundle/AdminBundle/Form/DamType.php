<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Form;

use FishAndPlaces\Dam\Applicaiton\Fish\FishQueryService;
use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\Loader\CallbackChoiceLoader;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DamType extends AbstractType
{
    /** @var DamRepresentation */
    private $damRepresentation;
    /** @var FishQueryService */
    private $fishQueryService;

    /**
     * @param DamRepresentation $param
     * @param FishQueryService  $fishQueryService
     */
    public function __construct(DamRepresentation $param, FishQueryService $fishQueryService)
    {
        $this->damRepresentation = $param;
        $this->fishQueryService = $fishQueryService;
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolverInterface $resolver The resolver for the options
     *
     * @deprecated since version 2.7, to be renamed in 3.0.
     *             Use the method configureOptions instead. This method will be
     *             added to the FormTypeInterface with Symfony 3.0.
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        // TODO: Implement setDefaultOptions() method.
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     *
     * @deprecated Deprecated since Symfony 2.8, to be removed in Symfony 3.0.
     *             Use the fully-qualified class name of the type instead.
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $fishSelect = $this->fishQueryService->getFishSelect();
        $builder
            ->add('is_active', ChoiceType::class, array(
                'required' => true,
                'choises' => [0 => 'No', 1 => 'Yes'],
                'data' => $this->damRepresentation->isActive()))
            ->add('name', TextType::class, array('required' => true, 'data' => $this->damRepresentation->getName()))
            ->add('price_pro_person', NumberType::class, array('required' => true, 'data' => $this->damRepresentation->getPriceProPerson()))
            ->add('location', TextType::class, array('required' => true))
            ->add('contact_information', TextareaType::class, array('required' => false))
            ->add('fishCollection', ChoiceType::class, array(
                'choice_loader' => new CallbackChoiceLoader(function() use ($fishSelect){
                    return $fishSelect;
                }
            ),
                'multiple' => true,
                'expanded' => true,
                'data' => $this->damRepresentation->getFishCollection()
            ))

        ;
    }
}
