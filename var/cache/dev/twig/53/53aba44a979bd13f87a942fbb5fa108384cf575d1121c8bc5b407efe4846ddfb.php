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

    // line 7
    public function block_section($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 8
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
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_panier_homepage");
        echo "\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Panier</li>
            </ol>
          </nav>
        </div>
        <div id=\"basket\" class=\"col-lg-9\">
          <div class=\"box\">
            <form method=\"post\" action=\"\">
              <h1>Panier</h1>
              <p class=\"text-muted\">Vous avez actuellement 3 objet(s) dans votre panier.</p>
              <div class=\"table-responsive\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th colspan=\"2\">Produit</th>
                      <th>Quantité</th>
                      <th>Prix unitaire</th>
                      <th colspan=\"1\">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"delBord\"><a href=\"#\"><img src=\"\" alt=\"\"></a></td>
                      <td class=\"delBord\"><a href=\"#\">White Blouse Armani</a></td>
                      <td class=\"delBord\">
                        <input type=\"number\" value=\"2\" class=\"form-control\">
                      </td>
                      <td class=\"delBord\">\$123.00</td>
                      <td class=\"delBord\">\$246.00</td>
                      <td class=\"delBord\"><a href=\"#\"><i class=\"fas fa-trash-alt\"></i></a></td>
                    </tr>
                    <tr>
                      <td class=\"delBord\"><a href=\"#\"><img src=\"\" alt=\"Black Blouse Armani\"></a></td>
                      <td class=\"delBord\"><a href=\"#\">Black Blouse Armani</a></td>
                      <td class=\"delBord\">
                        <input type=\"number\" value=\"1\" class=\"form-control\">
                      </td>
                      <td class=\"delBord\">\$200.00</td>
                      <td class=\"delBord\">\$200.00</td>
                      <td class=\"delBord\"><a href=\"#\"><i class=\"fa fa-trash-o\"></i></a></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan=\"5\" style=\"text-align:left\">Total</th>
                      <th colspan=\"2\">\$446.00</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.table-responsive-->
              <div class=\"box-footer d-flex justify-content-between flex-column flex-lg-row\">
                <div class=\"left\"><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_homepage");
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i> Continuer vos achats</a></div>
                <div class=\"right\">
                  <button type=\"submit\" class=\"btn btn-primary\">Passer la commande <i class=\"fa fa-chevron-right\"></i></button>
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
                    <th>\$446.00</th>
                  </tr>
                  <tr>
                    <td class=\"delBord\">Frais de port</td>
                    <th>\$10.00</th>
                  </tr>
                  <tr>
                    <td class=\"delBord\">TVA</td>
                    <th>\$0.00</th>
                  </tr>
                  <tr class=\"total\">
                    <td class=\"delBord\">Total</td>
                    <th>\$456.00</th>
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
        return array (  136 => 69,  81 => 17,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
            <form method=\"post\" action=\"\">
              <h1>Panier</h1>
              <p class=\"text-muted\">Vous avez actuellement 3 objet(s) dans votre panier.</p>
              <div class=\"table-responsive\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th colspan=\"2\">Produit</th>
                      <th>Quantité</th>
                      <th>Prix unitaire</th>
                      <th colspan=\"1\">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"delBord\"><a href=\"#\"><img src=\"\" alt=\"\"></a></td>
                      <td class=\"delBord\"><a href=\"#\">White Blouse Armani</a></td>
                      <td class=\"delBord\">
                        <input type=\"number\" value=\"2\" class=\"form-control\">
                      </td>
                      <td class=\"delBord\">\$123.00</td>
                      <td class=\"delBord\">\$246.00</td>
                      <td class=\"delBord\"><a href=\"#\"><i class=\"fas fa-trash-alt\"></i></a></td>
                    </tr>
                    <tr>
                      <td class=\"delBord\"><a href=\"#\"><img src=\"\" alt=\"Black Blouse Armani\"></a></td>
                      <td class=\"delBord\"><a href=\"#\">Black Blouse Armani</a></td>
                      <td class=\"delBord\">
                        <input type=\"number\" value=\"1\" class=\"form-control\">
                      </td>
                      <td class=\"delBord\">\$200.00</td>
                      <td class=\"delBord\">\$200.00</td>
                      <td class=\"delBord\"><a href=\"#\"><i class=\"fa fa-trash-o\"></i></a></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan=\"5\" style=\"text-align:left\">Total</th>
                      <th colspan=\"2\">\$446.00</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.table-responsive-->
              <div class=\"box-footer d-flex justify-content-between flex-column flex-lg-row\">
                <div class=\"left\"><a href=\"{{ path('jeremy_front_homepage') }}\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i> Continuer vos achats</a></div>
                <div class=\"right\">
                  <button type=\"submit\" class=\"btn btn-primary\">Passer la commande <i class=\"fa fa-chevron-right\"></i></button>
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
                    <th>\$446.00</th>
                  </tr>
                  <tr>
                    <td class=\"delBord\">Frais de port</td>
                    <th>\$10.00</th>
                  </tr>
                  <tr>
                    <td class=\"delBord\">TVA</td>
                    <th>\$0.00</th>
                  </tr>
                  <tr class=\"total\">
                    <td class=\"delBord\">Total</td>
                    <th>\$456.00</th>
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
