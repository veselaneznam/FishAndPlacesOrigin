<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Form;

use FishAndPlaces\GreenObject\Domain\Model\Fish;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FishCollectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fishCollection', EntityType::class, [
            'class' => Fish::class, 'choice_label' => 'Fish list']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    }
}
