<?php

namespace App\Form;
use App\Form\ApplicationType;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends ApplicationType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',TextType::class,$this->getConfiguration("Prénom","Votre prénom"))
            ->add('lastName',TextType::class,$this->getConfiguration("Nom","Votre nom"))
            ->add('email',EmailType::class,$this->getConfiguration("Email","Votre email"))
            ->add('picture',UrlType::class,$this->getConfiguration("Photo de profil","Url de votre avatar"))
            ->add('hash',PasswordType::class,$this->getConfiguration("Mot de passe","choisissez un mot de passe"))
            ->add('passwordConfirm',PasswordType::class,$this->getConfiguration("Confirmer votre mot de passe","Veuillez confirmer votre mot de passe"))
            ->add('introduction',TextType::class,$this->getConfiguration("Introduction","Présentez vous"))
            ->add('description',TextareaType::class,$this->getConfiguration("Description","c'est le moment de vous d'écrire"))
       
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
