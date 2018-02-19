<?php
namespace App\Form;

use App\Entity\Conference;
use App\Entity\Participant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * Created by PhpStorm.
 * User: alexis.delarre
 * Date: 09/02/18
 * Time: 14:36
 */

class ConferenceType extends AbstractType
{
    protected $token;

    public function __construct(TokenStorageInterface $storage)
    {
        $this->token = $storage;
    }

    public function buildForm(FormBuilderInterface $builder, array $option)
    {
        $builder
            ->add('title',TextType::class)
            ->add('content',TextareaType::class)
            ->add('date',DateType::class)
            ->add('heuredebut',TimeType::class)
            ->add('heurefin',TimeType::class)
            ->add('lieu',TextType::class)
            ->add("participant", EntityType::class, ['class'=> Participant::class,
                'choice_label'=> 'name', 'multiple' => false, 'expanded' => false,])

        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Conference::class,
        ]);
    }


}