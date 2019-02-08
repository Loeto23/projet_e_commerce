<?php

namespace Jeremy\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->add('nom',\Symfony\Component\Form\Extension\Core\Type\TextType::class,
      [
        'label' => false,
        'attr' => array(
          'placeholder' => 'Votre Nom',
        )
      ]);

      $builder->add('email',\Symfony\Component\Form\Extension\Core\Type\EmailType::class,
      [
        'label' => false,
        'attr' => array(
          'placeholder' => 'Votre Email',
        )
      ]);

      $builder->add('objet',\Symfony\Component\Form\Extension\Core\Type\TextType::class,
      [
        'label' => false,
        'attr' => array(
          'placeholder' => 'L\'objet du message',
        )
      ]);

      $builder->add('message',\Symfony\Component\Form\Extension\Core\Type\TextareaType::class,
      [
        'label' => false,
        'attr' => array(
          'placeholder' => 'Ecrivez votre message',
        )
      ]);

      $builder->add('save', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class,
      [
        'label' => 'Envoyer',
      ]);
    }
}
