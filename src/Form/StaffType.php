<?php

namespace App\Form;

use App\Entity\ChoiceON;
use App\Entity\Company;
use App\Entity\Service;
use App\Entity\Staff;
use App\Repository\CompanyRepository;
use App\Repository\ServiceRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StaffType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('birthdate')
            ->add('post')
            ->add('email')
            ->add('directline')
            ->add('mobileline')
            ->add('internalline')
            ->add('isvisible', EntityType::class, [
                'class' => ChoiceON::class,
                'query_builder' => function (CompanyRepository $company) {
                    return $company->createQueryBuilder('company')
                        ->orderBy('company.name', 'ASC');
                },
                'choice_label' => 'name'
            ])
            ->add('company', EntityType::class, [
                'class' => Company::class,
                'query_builder' => function (CompanyRepository $company) {
                    return $company->createQueryBuilder('company')
                        ->orderBy('company.name', 'ASC');
                },
                'choice_label' => 'name'
            ])
            ->add('service', EntityType::class, [
                'class' => Service::class,
                'query_builder' => function (ServiceRepository $service) {
                    return $service->createQueryBuilder('service')
                        ->orderBy('service.name', 'ASC');
                },
                'choice_label' => 'name'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Staff::class,
        ]);
    }
}
