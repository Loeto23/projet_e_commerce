<?php

namespace Jeremy\PanierBundle\Twig\Extension;

class TvaExtension extends \Twig_Extension
{

  public fnction getFilters()
  {
    return array(new \Twig_SimpleFilter('tva', array($this, 'calculTva')));
  }

  function calculTva($prixHt, $tva)
  {
    return round($prixHT / $tva,2);
  }

  public function getName()
  {
    return 'tva_extension';
  }

}
