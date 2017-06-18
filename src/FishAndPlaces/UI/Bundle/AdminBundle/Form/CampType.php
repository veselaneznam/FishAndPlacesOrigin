<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolver;

class CampType extends GreenObjectType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FishAndPlaces\GreenObject\Application\GreenObject\Camp\CampRepresentation'
        ));
    }
}
