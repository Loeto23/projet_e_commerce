<?php

/* top.html.twig */
class __TwigTemplate_b05c3ebc4f5eb6f496d7f734dce74ec2b98d908207b11aa5445e4cf60c1d2435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "top.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "top.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "
<header class=\"header mb-5\">

<div id=\"top\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offer mb-3 mb-lg-0 \"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_homepage");
        echo "\" class=\"btn btn-success btn-sm\">Offre du jour</a><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_homepage");
        echo "\" class=\"ml-1\">10% de réduction dés 50€ d'achat</a></div>
      <div class=\"col-lg-6 text-center text-lg-right\">
        <ul class=\"menu list-inline mb-0\">

          ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "            <li class=\"list-inline-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Voir mon profil</a></li>
            <li class=\"list-inline-item\"><a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
            <li class=\"list-inline-item\"><a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_backoffice");
            echo "\">Backoffice</a></li>
          ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 17
            echo "            <li class=\"list-inline-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
            <li class=\"list-inline-item\"><a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
          ";
        } else {
            // line 20
            echo "            <li class=\"list-inline-item\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
            <li class=\"list-inline-item\"><a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>
            <li class=\"list-inline-item\"><a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_contact");
            echo "\">Nous contacter</a></li>
          ";
        }
        // line 24
        echo "
        </ul>
      </div>
    </div>
  </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "top.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  96 => 22,  92 => 21,  87 => 20,  82 => 18,  77 => 17,  72 => 15,  68 => 14,  63 => 13,  61 => 12,  52 => 8,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}

<header class=\"header mb-5\">

<div id=\"top\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offer mb-3 mb-lg-0 \"><a href=\"{{ path('jeremy_front_homepage') }}\" class=\"btn btn-success btn-sm\">Offre du jour</a><a href=\"{{ path('jeremy_front_homepage') }}\" class=\"ml-1\">10% de réduction dés 50€ d'achat</a></div>
      <div class=\"col-lg-6 text-center text-lg-right\">
        <ul class=\"menu list-inline mb-0\">

          {% if is_granted('ROLE_ADMIN') %}
            <li class=\"list-inline-item\"><a href=\"{{ path('fos_user_profile_show') }}\">Voir mon profil</a></li>
            <li class=\"list-inline-item\"><a href=\"{{ path('fos_user_security_logout') }}\">Se déconnecter</a></li>
            <li class=\"list-inline-item\"><a href=\"{{ path('jeremy_front_backoffice') }}\">Backoffice</a></li>
          {% elseif is_granted('ROLE_USER') %}
            <li class=\"list-inline-item\"><a href=\"{{ path('fos_user_profile_show') }}\">Profil</a></li>
            <li class=\"list-inline-item\"><a href=\"{{ path('fos_user_security_logout') }}\">Se déconnecter</a></li>
          {% else %}
            <li class=\"list-inline-item\"><a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a></li>
            <li class=\"list-inline-item\"><a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a></li>
            <li class=\"list-inline-item\"><a href=\"{{ path('jeremy_front_contact') }}\">Nous contacter</a></li>
          {% endif %}

        </ul>
      </div>
    </div>
  </div>

</div>

{% endblock %}
", "top.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\app\\Resources\\views\\top.html.twig");
    }
}
