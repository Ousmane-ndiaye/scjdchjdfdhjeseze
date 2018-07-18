<?php

namespace App\Form;

use App\Entity\Jour;
use App\Form\BienType;
use App\Form\JourType;
use App\Entity\Ouvrable;
use App\Repository\JourRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class AjoutBienType extends AbstractType
{
    private $JourRepository;
    private $resultat;

    public function __construct(
        JourRepository $JourRepo
    )
    {
        $this->JourRepository = $JourRepo;

        $listesChoix = [];
        $jours = $this->JourRepository->findAll();
        /* foreach ($jours as $key => $value) {
            $listesChoix[strtoupper($value->getLibelle())] = $value->getId();
        } */
        foreach ($jours as $key => $value) {
            $this->resultat = array_merge($listesChoix, [$value->getId() => strtoupper($value->getLibelle())]);
        }
        $this->resultat = $listesChoix;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bien', BienType::class)
            ->add('disponible', ChoiceType::class, array(
                'choices'  => array(
                    'Oui' => true,
                    'Non' => false,
                ),
            ))
            ->add('ouverture', TimeType::class, array(
                'input'  => 'timestamp',
                'widget' => 'choice',
            ))
            ->add('fermeture', TimeType::class, array(
                'input'  => 'timestamp',
                'widget' => 'choice',
            ))
            ->add('jour')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ouvrable::class,
        ]);
    }
}
