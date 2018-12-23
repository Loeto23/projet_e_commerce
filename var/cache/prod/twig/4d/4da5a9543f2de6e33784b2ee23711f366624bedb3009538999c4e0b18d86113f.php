<?php

/* JeremyBackBundle:Produit:ajout_produit.html.twig */
class __TwigTemplate_5ba89e32060656bdb30fdfb97df1846ac53188c390704060275386832369205a extends Twig_Template
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
        echo "<h1>Ajouter Produit</h1>

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["view"] ?? null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "JeremyBackBundle:Produit:ajout_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeremyBackBundle:Produit:ajout_produit.html.twig", "C:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\BackBundle/Resources/views/Produit/ajout_produit.html.twig");
    }
}
