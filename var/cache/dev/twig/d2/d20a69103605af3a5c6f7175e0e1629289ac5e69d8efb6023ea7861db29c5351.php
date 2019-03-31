<?php

/* JeremyCommandeBundle:Commande:commande.html.twig */
class __TwigTemplate_81218464bd9a87d128ce59512c8f32908a9603f2a4867e605b39c42ea97e8ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JeremyCommandeBundle:Commande:commande.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyCommandeBundle:Commande:commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyCommandeBundle:Commande:commande.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_passage_commande");
        echo "\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Adresse de livraison</li>
            </ol>
          </nav>
        </div>
        <div id=\"checkout\" class=\"col-lg-9\">
          <div class=\"box\">
            <form method=\"get\" action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_commande_paiement");
        echo "\">
              <h1>Checkout - Address</h1>
              <div class=\"nav flex-column flex-md-row nav-pills text-center\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_passage_commande");
        echo "\" class=\"nav-link flex-sm-fill text-sm-center active\"> <i class=\"fa fa-map-marker\">                  </i>Adresse</a>

              <a href=\"#\" class=\"nav-link flex-sm-fill text-sm-center disabled\"> <i class=\"fa fa-money\">                      </i>Paiement</a>
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
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_panier_homepage");
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i>Retour au panier</a>
                <button type=\"submit\"  class=\"btn btn-primary\" >Continuer vers le paiement<i class=\"fa fa-chevron-right\"></i></button>
              </div>
            </form>
          </div>
          <!-- /.box-->
        </div>
        <!-- /.col-lg-9-->
        <div class=\"col-lg-3\">
          <div id=\"order-summary\" class=\"card\">
            <div class=\"card-header\">
              <h3 class=\"mt-4 mb-4\">Total</h3>
            </div>
            <div class=\"card-body\">
              <p class=\"text-muted\">Les frais d’expédition et les taxes sont calculés en fonction des produits que vous voulez achetés.</p>
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
                      <td class=\"delBord\">Taxe</td>
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
          </div>
        </div>
        <!-- /.col-lg-3-->
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
        return "JeremyCommandeBundle:Commande:commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 105,  96 => 26,  91 => 24,  81 => 17,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
        <div id=\"checkout\" class=\"col-lg-9\">
          <div class=\"box\">
            <form method=\"get\" action=\"{{ path('jeremy_commande_paiement') }}\">
              <h1>Checkout - Address</h1>
              <div class=\"nav flex-column flex-md-row nav-pills text-center\"><a href=\"{{ path('jeremy_passage_commande') }}\" class=\"nav-link flex-sm-fill text-sm-center active\"> <i class=\"fa fa-map-marker\">                  </i>Adresse</a>

              <a href=\"#\" class=\"nav-link flex-sm-fill text-sm-center disabled\"> <i class=\"fa fa-money\">                      </i>Paiement</a>
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
        <div class=\"col-lg-3\">
          <div id=\"order-summary\" class=\"card\">
            <div class=\"card-header\">
              <h3 class=\"mt-4 mb-4\">Total</h3>
            </div>
            <div class=\"card-body\">
              <p class=\"text-muted\">Les frais d’expédition et les taxes sont calculés en fonction des produits que vous voulez achetés.</p>
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
                      <td class=\"delBord\">Taxe</td>
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
          </div>
        </div>
        <!-- /.col-lg-3-->
      </div>
    </div>
  </div>
</div>


{% endblock %}
", "JeremyCommandeBundle:Commande:commande.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\CommandeBundle/Resources/views/Commande/commande.html.twig");
    }
}
