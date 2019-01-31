<?php

/* @JeremyProduit/Default/supprimerProduit.html.twig */
class __TwigTemplate_428d2f1dd29771f72bfc05f0665b0075207b7b14b16174d67a82037de44986db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Supprimer un produit</h1>

Le produit a bien été supprimé.

<a href=\"\">Revenir à la liste des produits</a>
";
    }

    public function getTemplateName()
    {
        return "@JeremyProduit/Default/supprimerProduit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeremyProduit/Default/supprimerProduit.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\ProduitBundle\\Resources\\views\\Default\\supprimerProduit.html.twig");
    }
}
