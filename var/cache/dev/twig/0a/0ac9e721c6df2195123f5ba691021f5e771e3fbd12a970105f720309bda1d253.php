<?php

/* ::nav2.html.twig */
class __TwigTemplate_a71e10f016e26d489f027c4e6ff2a6508ee904a5635e9fe70a112a598b368bab extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav2.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::nav2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  42 => 13,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top navbar-default\">
 <div class=\"container\">
  <a class=\"navbar-brand\" href=\"#\">Ela</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <ul class=\"nav navbar-nav space\">
    <li><a href=\"{{ path('jeremy_front_homepage') }}\">Accueil</a></li>
  </ul>
  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
  </div>
  <ul class=\"nav navbar-nav\">
    <li><a href=\"{{ path('fos_user_registration_register') }}\">Créer un compte</a></li>
  </ul>
  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
  </div>
  <ul class=\"nav navbar-nav\">
    <li><a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a></li>
  </ul>




  </div>
</nav>
", "::nav2.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\app/Resources\\views/nav2.html.twig");
    }
}
