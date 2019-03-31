<?php

/* @JeremyCommande/Commande/commande.html.twig */
class __TwigTemplate_1aaddeeeea6296434a4125fb240dec418aaf61587141930b74ef67433e8dcb2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JeremyCommande/Commande/commande.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyCommande/Commande/commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyCommande/Commande/commande.html.twig"));

        // line 7
        $context["totalHT"] = 0;
        // line 8
        $context["totalTTC"] = 4.99;
        // line 1
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
        echo "Commande
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 11
        echo "
<div id=\"all\">
  <div id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <!-- breadcrumb-->
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_passage_commande");
        echo "\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Adresse de livraison</li>
            </ol>
          </nav>
        </div>
        <div id=\"checkout\" class=\"col-lg-9 mL12\">
          <div class=\"box textAlign\">
            <form method=\"get\" action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_commande_paiement");
        echo "\">
              <h1>Adresse de livraison</h1>
              <div class=\"nav flex-column flex-md-row nav-pills text-center\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_passage_commande");
        echo "\" class=\"nav-link flex-sm-fill text-sm-center active\"> <i class=\"fa fa-map-marker\">                  </i>Adresse</a>

              </div>
              <div class=\"content py-3\">
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"nom\">Nom</label>
                      <input id=\"nom\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"prenom\">Prénom</label>
                      <input id=\"prenom\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"adresse\">Adresse</label>
                      <input id=\"adresse\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"ville\">Ville</label>
                      <input id=\"ville\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class=\"row\">
                  <div class=\"col-md-6 col-lg-3\">
                    <div class=\"form-group\">
                      <label for=\"cp\">Code Postal</label>
                      <input id=\"cp\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3\">
                    <div class=\"form-group\">
                      <label for=\"code\">Code d'accès résidence</label>
                      <input id=\"code\" type=\"text\" class=\"form-control\" placeholder=\"Facultatif\">
                    </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3\">
                    <div class=\"form-group\">
                    <label for=\"region\">Région</label>
                    <input id=\"region\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3\">
                    <div class=\"form-group\">
                    <label for=\"pays\">Pays</label>
                    <select id=\"pays\" class=\"form-control\">
                      <option>FRANCE</option>
                      <option>BELGIQUE</option>
                      <option>SUISSE</option>
                    </select>
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"telephone\">Téléphone</label>
                      <input id=\"telephone\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"email\">Email</label>
                      <input id=\"email\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
              </div>
              <div class=\"box-footer d-flex justify-content-between\"><a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_panier_homepage");
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i>Retour au panier</a>
                <button type=\"submit\"  class=\"btn btn-primary\" >Continuer vers le paiement<i class=\"fa fa-chevron-right\"></i></button>
              </div>
            </form>
          </div>
          <!-- /.box-->
        </div>
        <!-- /.col-lg-9-->






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
        return "@JeremyCommande/Commande/commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 107,  101 => 29,  96 => 27,  86 => 20,  75 => 11,  66 => 10,  55 => 4,  46 => 3,  36 => 1,  34 => 8,  32 => 7,  11 => 1,);
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
Commande
{% endblock %}

{% set totalHT = 0 %}
{% set totalTTC = 4.99 %}

{% block section%}

<div id=\"all\">
  <div id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <!-- breadcrumb-->
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"{{ path('jeremy_passage_commande') }}\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Adresse de livraison</li>
            </ol>
          </nav>
        </div>
        <div id=\"checkout\" class=\"col-lg-9 mL12\">
          <div class=\"box textAlign\">
            <form method=\"get\" action=\"{{ path('jeremy_commande_paiement') }}\">
              <h1>Adresse de livraison</h1>
              <div class=\"nav flex-column flex-md-row nav-pills text-center\"><a href=\"{{ path('jeremy_passage_commande') }}\" class=\"nav-link flex-sm-fill text-sm-center active\"> <i class=\"fa fa-map-marker\">                  </i>Adresse</a>

              </div>
              <div class=\"content py-3\">
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"nom\">Nom</label>
                      <input id=\"nom\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"prenom\">Prénom</label>
                      <input id=\"prenom\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"adresse\">Adresse</label>
                      <input id=\"adresse\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"ville\">Ville</label>
                      <input id=\"ville\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class=\"row\">
                  <div class=\"col-md-6 col-lg-3\">
                    <div class=\"form-group\">
                      <label for=\"cp\">Code Postal</label>
                      <input id=\"cp\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3\">
                    <div class=\"form-group\">
                      <label for=\"code\">Code d'accès résidence</label>
                      <input id=\"code\" type=\"text\" class=\"form-control\" placeholder=\"Facultatif\">
                    </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3\">
                    <div class=\"form-group\">
                    <label for=\"region\">Région</label>
                    <input id=\"region\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3\">
                    <div class=\"form-group\">
                    <label for=\"pays\">Pays</label>
                    <select id=\"pays\" class=\"form-control\">
                      <option>FRANCE</option>
                      <option>BELGIQUE</option>
                      <option>SUISSE</option>
                    </select>
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"telephone\">Téléphone</label>
                      <input id=\"telephone\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"email\">Email</label>
                      <input id=\"email\" type=\"text\" class=\"form-control\">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
              </div>
              <div class=\"box-footer d-flex justify-content-between\"><a href=\"{{ path('jeremy_panier_homepage') }}\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i>Retour au panier</a>
                <button type=\"submit\"  class=\"btn btn-primary\" >Continuer vers le paiement<i class=\"fa fa-chevron-right\"></i></button>
              </div>
            </form>
          </div>
          <!-- /.box-->
        </div>
        <!-- /.col-lg-9-->






      </div>
    </div>
  </div>
</div>


{% endblock %}
", "@JeremyCommande/Commande/commande.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\CommandeBundle\\Resources\\views\\Commande\\commande.html.twig");
    }
}
