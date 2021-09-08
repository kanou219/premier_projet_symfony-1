<?php

namespace App\Form;

use App\Entity\Journal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JournalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,[
                'label' => 'Nom du journal',
                'attr' => [
                    'placeholder' => 'Nom du journal'
                ]
            ])
            ->add('prix',MoneyType::class,[
                'currency' => 'EUR',
                'divisor' => 100,
                'label' => 'Prix du journal',
                'attr' => [
                    'placeholder' => 'Prix du journal en euros'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Journal::class,
        ]);
    }
}
