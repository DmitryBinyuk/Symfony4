<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            // ->add('roles')
            // ->addModelTransformer(new CallbackTransformer(
            //     function ($user) {
            //         // var_dump($user->getRoles());die;
            //         // transform the array to a string
            //         return implode(', ', $user->getRoles());
            //     },
            //     function ($tagsAsString) {
            //         // transform the string back to an array
            //         return explode(', ', $user->getRoles());
            //     }
            // ))
            // ->add('roles', ChoiceType::class, [
            //     'choices'  => [
            //         'Admin' => 'ROLE_ADMIN',
            //         'User' => 'ROLE_USER',
            //     ],
            // ])
            ->add('password')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
