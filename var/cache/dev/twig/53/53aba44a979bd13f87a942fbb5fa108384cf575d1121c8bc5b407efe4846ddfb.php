<?php

/* @JeremyPanier/Panier/panier.html.twig */
class __TwigTemplate_8ab0195fedd0fd316317551fed7e29cf67a90d99e5189955ded27ac2aaee26ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JeremyPanier/Panier/panier.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyPanier/Panier/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyPanier/Panier/panier.html.twig"));

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
        echo "Panier
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_panier_homepage");
        echo "\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Panier</li>
            </ol>
          </nav>
        </div>
        <div id=\"basket\" class=\"col-lg-9\">
          <div class=\"box\">

          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "            <div class=\"alert alert-success\">
              ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
            <form method=\"post\" action=\"\">
              <h1>Panier</h1>
              <div class=\"table-responsive\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th colspan=\"3\">Produit</th>
                      <th colspan=\"3\">Prix de l'article</th>
                    </tr>

                    ";
        // line 44
        if ((twig_length_filter($this->env, ($context["produit"] ?? $this->getContext($context, "produit"))) == 0)) {
            // line 45
            echo "                      <tr>
                        <td class=\"delBord\" colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                      </tr>
                    ";
        }
        // line 49
        echo "
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["produit"]);
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 51
            echo "                  </thead>
                  <tbody>
                    <tr>
                    <form action=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_panier_ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                      <td class=\"delBord\" colspan=\"3\"><a href=\"#\"><img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["produit"], "photo", array()))), "html", null, true);
            echo "\" alt=\"\"></a></td>
                      <td class=\"delBord\" colspan=\"3\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "€</td>
                      <td class=\"delBord\"><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_panier_supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\"></i></a></td>
                    </tr>
                    </form>

                    ";
            // line 61
            $context["totalHT"] = (($context["totalHT"] ?? $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 62
            echo "                    ";
            $context["totalTTC"] = (($context["totalTTC"] ?? $this->getContext($context, "totalTTC")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 63
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive-->
              <div class=\"box-footer d-flex justify-content-between flex-column flex-lg-row\">
                <div class=\"left\"><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_homepage");
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i> Continuer vos achats</a></div>
                <div class=\"right\">
                  <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_passage_commande");
        echo "\" class=\"btn btn-primary\">Passer la commande <i class=\"fa fa-chevron-right\"></i></a>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box-->
        </div>
        <!-- /.col-lg-9-->
        <div class=\"col-lg-3\">
          <div id=\"order-summary\" class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"mb-0\">Total</h3>
            </div>
            <p class=\"text-muted\">Les frais d'expédition et les frais supplémentaires sont calculés en fonction des valeurs que vous avez entrées.</p>
            <div class=\"table-responsive\">
              <table class=\"table\">
                <tbody>
                  <tr>
                    <td class=\"delBord\">Sous-total</td>
                    <th>";
        // line 91
        echo twig_escape_filter($this->env, ($context["totalHT"] ?? $this->getContext($context, "totalHT")), "html", null, true);
        echo "€</th>
                  </tr>
                  <tr>
                    <td class=\"delBord\">Frais de port</td>
                    <th>4.99€</th>
                  </tr>
                  <tr class=\"total\">
                    <td class=\"delBord\">Total</td>
                    <th>";
        // line 99
        echo twig_escape_filter($this->env, ($context["totalTTC"] ?? $this->getContext($context, "totalTTC")), "html", null, true);
        echo "€</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class=\"box\">
            <div class=\"box-header\">
              <h4 class=\"mb-0\">Code promotion</h4>
            </div>
            <p class=\"text-muted\">Si vous avez un code promotion, entrez le ci-dessous.</p>
            <form>
              <div class=\"input-group\" style=\"width: 100% !important\">
                <input type=\"text\" class=\"form-control\"><span class=\"input-group-append\">
                  <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-gift\"></i></button></span>
              </div>
              <!-- /input-group-->
            </form>
          </div>
        </div>
        <!-- /.col-md-3-->
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
        return "@JeremyPanier/Panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 99,  211 => 91,  189 => 72,  184 => 70,  177 => 65,  170 => 63,  167 => 62,  165 => 61,  158 => 57,  154 => 56,  150 => 55,  146 => 54,  141 => 51,  137 => 50,  134 => 49,  128 => 45,  126 => 44,  113 => 33,  104 => 30,  101 => 29,  97 => 28,  86 => 20,  75 => 11,  66 => 10,  55 => 4,  46 => 3,  36 => 1,  34 => 8,  32 => 7,  11 => 1,);
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
Panier
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
              <li class=\"breadcrumb-item\"><a href=\"{{ path('jeremy_panier_homepage') }}\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Panier</li>
            </ol>
          </nav>
        </div>
        <div id=\"basket\" class=\"col-lg-9\">
          <div class=\"box\">

          {% for flashMessage in app.session.flashbag.get('success') %}
            <div class=\"alert alert-success\">
              {{ flashMessage }}
            </div>
          {% endfor %}

            <form method=\"post\" action=\"\">
              <h1>Panier</h1>
              <div class=\"table-responsive\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th colspan=\"3\">Produit</th>
                      <th colspan=\"3\">Prix de l'article</th>
                    </tr>

                    {% if produit|length == 0 %}
                      <tr>
                        <td class=\"delBord\" colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                      </tr>
                    {% endif %}

                    {% for produit in produit %}
                  </thead>
                  <tbody>
                    <tr>
                    <form action=\"{{ path('jeremy_panier_ajouter' , { 'id' : produit.id }) }}\" method=\"get\">
                      <td class=\"delBord\" colspan=\"3\"><a href=\"#\"><img src=\"{{ asset('uploads/photos/' ~ produit.photo ) }}\" alt=\"\"></a></td>
                      <td class=\"delBord\" colspan=\"3\">{{ produit.prix }}€</td>
                      <td class=\"delBord\"><a href=\"{{path('jeremy_panier_supprimer', { 'id' : produit.id }) }}\"><i class=\"fas fa-trash-alt\"></i></a></td>
                    </tr>
                    </form>

                    {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}
                    {% set totalTTC = totalTTC  + (produit.prix * panier[produit.id])  %}

                    {% endfor %}
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive-->
              <div class=\"box-footer d-flex justify-content-between flex-column flex-lg-row\">
                <div class=\"left\"><a href=\"{{ path('jeremy_front_homepage') }}\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i> Continuer vos achats</a></div>
                <div class=\"right\">
                  <a href=\"{{ path('jeremy_passage_commande') }}\" class=\"btn btn-primary\">Passer la commande <i class=\"fa fa-chevron-right\"></i></a>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box-->
        </div>
        <!-- /.col-lg-9-->
        <div class=\"col-lg-3\">
          <div id=\"order-summary\" class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"mb-0\">Total</h3>
            </div>
            <p class=\"text-muted\">Les frais d'expédition et les frais supplémentaires sont calculés en fonction des valeurs que vous avez entrées.</p>
            <div class=\"table-responsive\">
              <table class=\"table\">
                <tbody>
                  <tr>
                    <td class=\"delBord\">Sous-total</td>
                    <th>{{ totalHT }}€</th>
                  </tr>
                  <tr>
                    <td class=\"delBord\">Frais de port</td>
                    <th>4.99€</th>
                  </tr>
                  <tr class=\"total\">
                    <td class=\"delBord\">Total</td>
                    <th>{{ totalTTC }}€</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class=\"box\">
            <div class=\"box-header\">
              <h4 class=\"mb-0\">Code promotion</h4>
            </div>
            <p class=\"text-muted\">Si vous avez un code promotion, entrez le ci-dessous.</p>
            <form>
              <div class=\"input-group\" style=\"width: 100% !important\">
                <input type=\"text\" class=\"form-control\"><span class=\"input-group-append\">
                  <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-gift\"></i></button></span>
              </div>
              <!-- /input-group-->
            </form>
          </div>
        </div>
        <!-- /.col-md-3-->
      </div>
    </div>
  </div>
</div>





{% endblock %}
", "@JeremyPanier/Panier/panier.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\PanierBundle\\Resources\\views\\Panier\\panier.html.twig");
    }
}
