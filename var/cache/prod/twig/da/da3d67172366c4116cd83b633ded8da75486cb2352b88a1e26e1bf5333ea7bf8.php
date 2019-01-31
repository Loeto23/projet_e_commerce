<?php

/* nav2.html.twig */
class __TwigTemplate_acbfad770034cf23a20172e05bd14888e62815b2ebb0c03e39e11856ac34f2ce extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top navbar-default\">
 <div class=\"container\">
  <a class=\"navbar-brand\" href=\"#\">Ela</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <ul class=\"nav navbar-nav space\">
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_homepage");
        echo "\">Accueil</a></li>
  </ul>
  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
  </div>
  <ul class=\"nav navbar-nav\">
    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Créer un compte</a></li>
  </ul>
  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
  </div>
  <ul class=\"nav navbar-nav\">
    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a></li>
  </ul>




  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "nav2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  36 => 13,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "nav2.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\app\\Resources\\views\\nav2.html.twig");
    }
}
