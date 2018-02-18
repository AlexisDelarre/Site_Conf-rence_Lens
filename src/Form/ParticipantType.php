<?php
namespace App\Form;


use App\Entity\Participant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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

class ParticipantType extends AbstractType
{
    protected $token;

    public function __construct(TokenStorageInterface $storage)
    {
        $this->token = $storage;
    }

    public function buildForm(FormBuilderInterface $builder, array $option)
    {
        $builder
            ->add('name',TextType::class)
            ->add("email",TextType::class)
            ->add("speaker",ChoiceType::class, array('choices'  => array( "No" => "0", "Yes" => "1",)))
            ->add("institution",TextType::class)
            ->add("nationality",TextType::class)
            ->addEventListener(FormEvents::PRE_SET_DATA, [$this, 'onPreSetData'])->getForm();
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Participant::class,
        ]);
    }

    public function onPreSetData(FormEvent $formEvent)
    {
        $form = $formEvent->getForm();
        $participant = $formEvent->getData();

        if($participant->getId() === null){
            $form->add("save", SubmitType::class, ["label" => "Create"]);
        } else{
            $form->add("save", SubmitType::class, ["label" => "Edit"]);
        }
    }
}