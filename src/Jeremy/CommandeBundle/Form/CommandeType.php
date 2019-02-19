<?php

namespace Jeremy\CommandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        // $builder->add('produit', \Symfony\Component\Form\Extension\Core\Type\TextType::class,
        // [
        //   'label' => 'produit',
        // ]);
        //
        // $builder->add('produit',\Symfony\Component\Form\Extension\Core\Type\FileType::class, array(
        //   // 'data_class' => '',
        //   'required' => true,
        //   'data_class' => null
        // ));

        $builder->add('prixTotal', \Symfony\Component\Form\Extension\Core\Type\MoneyType::class,
        [
          'label' => 'Prix total',
        ]);

        $builder->add('save', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class,
        [
          'label' => 'Enregistrer',
        ]);
    }

}
