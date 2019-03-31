<?php

/* JeremyCommandeBundle:Paiement:paiement.html.twig */
class __TwigTemplate_62c41ad6fa6a084e4dd480b0ee17e503f6a272c0636b4e283f38f441ec29d0a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JeremyCommandeBundle:Paiement:paiement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyCommandeBundle:Paiement:paiement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyCommandeBundle:Paiement:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Paiement
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 8
        echo "


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading mL40\">
                    <h3 class=\"panel-title\">Carte de Paiement</h3>
                </div>
                <br>
                <div class=\"panel-body\">
                    <form role=\"form\">
                    <div class=\"form-group\">
                        <label for=\"nomprenom\">Nom et Prénom</label>
                        <div class=\"input-group pL15\">
                            <input type=\"text\" class=\"form-control\" style=\"width:70%\" id=\"nomprenom\" disabled required autofocus />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"numCart\">Numéro de Carte</label>
                        <div class=\"input-group pL15\">
                            <input type=\"text\" class=\"form-control\" style=\"width:70%\" id=\"numCart\" disabled required autofocus />
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"dateexpi\">Date d'expiration</label>
                                <div class=\"col-xs-6 col-lg-6 pl-ziro\">
                                    <input type=\"text\" class=\"form-control\" id=\"moisexpi\" disabled placeholder=\"MM\" required />
                                </div>
                                <br>
                                <div class=\"col-xs-6 col-lg-6 pl-ziro\">
                                    <input type=\"text\" class=\"form-control\" id=\"anneexpi\" disabled placeholder=\"YY\" required />
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-6 col-md-6 pull-right\">
                            <div class=\"form-group\">
                              <label for=\"cvCode\">CVV</label>
                                <div class=\"pL15\">
                                  <input type=\"password\" class=\"form-control\" id=\"cvCode\" placeholder=\"CVV\" disabled required />
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <a href=\"\" class=\"btn btn-success btn-lg btn-block\" style=\"width:140%;\" role=\"button\">Payer</a>
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeremyCommandeBundle:Paiement:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
Paiement
{% endblock %}

{% block section%}



<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading mL40\">
                    <h3 class=\"panel-title\">Carte de Paiement</h3>
                </div>
                <br>
                <div class=\"panel-body\">
                    <form role=\"form\">
                    <div class=\"form-group\">
                        <label for=\"nomprenom\">Nom et Prénom</label>
                        <div class=\"input-group pL15\">
                            <input type=\"text\" class=\"form-control\" style=\"width:70%\" id=\"nomprenom\" disabled required autofocus />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"numCart\">Numéro de Carte</label>
                        <div class=\"input-group pL15\">
                            <input type=\"text\" class=\"form-control\" style=\"width:70%\" id=\"numCart\" disabled required autofocus />
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"dateexpi\">Date d'expiration</label>
                                <div class=\"col-xs-6 col-lg-6 pl-ziro\">
                                    <input type=\"text\" class=\"form-control\" id=\"moisexpi\" disabled placeholder=\"MM\" required />
                                </div>
                                <br>
                                <div class=\"col-xs-6 col-lg-6 pl-ziro\">
                                    <input type=\"text\" class=\"form-control\" id=\"anneexpi\" disabled placeholder=\"YY\" required />
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-6 col-md-6 pull-right\">
                            <div class=\"form-group\">
                              <label for=\"cvCode\">CVV</label>
                                <div class=\"pL15\">
                                  <input type=\"password\" class=\"form-control\" id=\"cvCode\" placeholder=\"CVV\" disabled required />
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <a href=\"\" class=\"btn btn-success btn-lg btn-block\" style=\"width:140%;\" role=\"button\">Payer</a>
        </div>
    </div>
</div>


{% endblock %}
", "JeremyCommandeBundle:Paiement:paiement.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\CommandeBundle/Resources/views/Paiement/paiement.html.twig");
    }
}
