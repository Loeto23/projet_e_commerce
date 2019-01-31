<?php

namespace Jeremy\NewsletterBundle\Form;

use Jeremy\NewsletterBundle\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\AFormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(child 'titre')
            ->add(child "contenu")
            ->add(child "email")
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
      $resolver->setDefaults([
          "date_class" => Contact::class
      ]);
    }
}
