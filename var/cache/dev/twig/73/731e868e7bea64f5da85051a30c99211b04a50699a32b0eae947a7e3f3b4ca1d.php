<?php

/* JeremyPanierBundle:Panier/modulesUsed:panier.html.twig */
class __TwigTemplate_c91ecd3f06d803765d9c5f61e24fb7cf4d251b6b8192cb1a4de931569fc49c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panier' => array($this, 'block_panier'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyPanierBundle:Panier/modulesUsed:panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyPanierBundle:Panier/modulesUsed:panier.html.twig"));

        // line 1
        $this->displayBlock('panier', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_panier($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panier"));

        // line 2
        echo "
<div class=\"panier\">
  <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\">
  <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_panier_homepage");
        echo "\" class=\"btn btn-primary navbar-btn\">
  <i class=\"fa fa-shopping-cart\"></i>
  ";
        // line 7
        if ((($context["article"] ?? $this->getContext($context, "article")) == 0)) {
            // line 8
            echo "    Panier vide
  ";
        } elseif ((        // line 9
($context["article"] ?? $this->getContext($context, "article")) == 1)) {
            // line 10
            echo "    Panier (1)
  ";
        } else {
            // line 12
            echo "    Panier (";
            echo twig_escape_filter($this->env, ($context["article"] ?? $this->getContext($context, "article")), "html", null, true);
            echo ")
  ";
        }
        // line 14
        echo "  <span>Panier vide</span></a>
  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeremyPanierBundle:Panier/modulesUsed:panier.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  65 => 12,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  49 => 5,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panier %}

<div class=\"panier\">
  <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\">
  <a href=\"{{ path('jeremy_panier_homepage') }}\" class=\"btn btn-primary navbar-btn\">
  <i class=\"fa fa-shopping-cart\"></i>
  {% if article == 0 %}
    Panier vide
  {% elseif article == 1 %}
    Panier (1)
  {% else %}
    Panier ({{ article }})
  {% endif %}
  <span>Panier vide</span></a>
  </div>
</div>

{% endblock %}
", "JeremyPanierBundle:Panier/modulesUsed:panier.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\PanierBundle/Resources/views/Panier/modulesUsed/panier.html.twig");
    }
}
