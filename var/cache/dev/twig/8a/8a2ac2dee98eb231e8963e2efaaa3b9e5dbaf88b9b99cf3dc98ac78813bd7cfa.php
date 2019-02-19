<?php

/* vetement.html.twig */
class __TwigTemplate_a5cf2f928aae8ee4796b503e0ec51825ac2e40924c8f33ffcdeef85d14d7796b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vetement' => array($this, 'block_vetement'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vetement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vetement.html.twig"));

        // line 1
        $this->displayBlock('vetement', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_vetement($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vetement"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vetement"));

        // line 2
        echo "
<div id=\"hot\">
  <div class=\"box py-4\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h2 class=\"mb-0\">Hot this week</h2>
        </div>
      </div>
    </div>
  </div>
  <div class=\"container\" style=\"border:1px solid;\">

    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_backoffice");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/img/rengar.jpg"), "html", null, true);
        echo "\" width=\"80%\" height=\"80%\" style=\"margin-left: 10%;\"></a>


  </div>

  <div class=\"container\" style=\"border:1px solid; margin-top:20px;\">


    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/img/zed.jpg"), "html", null, true);
        echo "\" width=\"80%\" height=\"80%\" style=\"margin-left: 10%;\">

  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vetement.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  59 => 15,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vetement %}

<div id=\"hot\">
  <div class=\"box py-4\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h2 class=\"mb-0\">Hot this week</h2>
        </div>
      </div>
    </div>
  </div>
  <div class=\"container\" style=\"border:1px solid;\">

    <a href=\"{{ path('jeremy_front_backoffice') }}\"><img src=\"{{ asset('../vendor/img/rengar.jpg') }}\" width=\"80%\" height=\"80%\" style=\"margin-left: 10%;\"></a>


  </div>

  <div class=\"container\" style=\"border:1px solid; margin-top:20px;\">


    <img src=\"{{ asset('../vendor/img/zed.jpg') }}\" width=\"80%\" height=\"80%\" style=\"margin-left: 10%;\">

  </div>

{% endblock %}
", "vetement.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\app\\Resources\\views\\vetement.html.twig");
    }
}
