<?php

/* JeremyProduitBundle:Default:modifierProduit.html.twig */
class __TwigTemplate_9d030bd5991c955be0a44e3d09ddfec92cc4ecf945d244aa0eba8e47d62a449a extends Twig_Template
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
        echo "<h1>Modifier un produit</h1>

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["view"] ?? null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "JeremyProduitBundle:Default:modifierProduit.html.twig";
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
        return new Twig_Source("", "JeremyProduitBundle:Default:modifierProduit.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\ProduitBundle/Resources/views/Default/modifierProduit.html.twig");
    }
}
