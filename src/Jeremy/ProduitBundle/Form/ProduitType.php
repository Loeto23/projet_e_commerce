<?php

namespace Jeremy\ProduitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProduitType extends AbstractType
{
  public function buildForm(FormBuilderInterface $aFormBuilder, array $options)
  {
    $aFormBuilder->add('reference',\Symfony\Component\Form\Extension\Core\Type\NumberType::class,
    [
      'label' => 'Référence',
    ]);

   $aFormBuilder->add('categorie',\Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
       'choices' => array(
         'Top' => 'tops',
         'Robe' => 'robe',
         'Jupe' => 'jupe',
         'Veste/Manteau' => 'veste/manteau',
         'Botte' => 'botte',
         'Sandale' => 'sandale',
         'Basket' => 'basket',
         'Escarpin' => 'escarpin',
         'Chausson' => 'chausson',
         'Sac' => 'sac',
         'Foulard/Echarpe' => 'foulard/echarpe',
         'Ceinture' => 'ceinture',
         'Bonnet/Casquette/Chapeau' => 'bonnet/casquette/chapeau',
         'Bijou' => 'bijou',
       ),
   ));

   $aFormBuilder->add('titre',\Symfony\Component\Form\Extension\Core\Type\TextType::class,
   [
     'label' => 'Titre',
   ]);

   $aFormBuilder->add('description',\Symfony\Component\Form\Extension\Core\Type\TextareaType::class,
   [
     'label' => 'Description',
   ]);

   $aFormBuilder->add('couleur',\Symfony\Component\Form\Extension\Core\Type\TextType::class,
   [
     'label' => 'Couleur',
   ]);

   $aFormBuilder->add('taille',\Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
      'choices' => array(
        'S' => 'S',
        'M' => 'M',
        'L' => 'L',
        'XL' => 'XL',
      ),
    ));

    $aFormBuilder->add('photo',\Symfony\Component\Form\Extension\Core\Type\FileType::class, array(
      // 'data_class' => '',
      'required' => true,
      'data_class' => null

    ));

    $aFormBuilder->add('prix',\Symfony\Component\Form\Extension\Core\Type\NumberType::class,
    [
      'label' => 'Prix',
    ]);

    $aFormBuilder->add('stock',\Symfony\Component\Form\Extension\Core\Type\TextType::class,
    [
      'label' => 'Stock',
    ]);

    $aFormBuilder->add('save', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class,
    [
      'label' => 'Enregistrer',
    ]);
  }

  // public function photo(FormBuilderInterface $photo, array $options)
  // {
  //   $photo->add('string', TextType::class);
  // }
  //
  // public function configureOptions(OptionsResolver $resolver)
  // {
  //   $resolver->setDefaults(array(
  //     'data_class' => Task::class,
  //   ));
  // }
}
