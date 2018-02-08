<?php

namespace GUBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('telephone');
        $builder->add('address');
        $builder->add('codePostal');
            $builder->add('nom')->add('prenom')
                ->add('roles', ChoiceType::class, array(
                        'label' => 'Type',
                        'choices' => array(
                            'ADMIN' => 'ROLE_ADMIN',
                            'CLIENT' => 'ROLE_CLIENT',
                            'ETABLISSEMENT' => 'ROLE_ETAB',
                            'VENDOR' => 'ROLE_VENDOR',
                            'NUTRITIONNIST' => 'ROLE_NUTRI'),
                        'required' => true,
                        'multiple' => true,)
                );


    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'gubundle_registration_type';
    }
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
}
