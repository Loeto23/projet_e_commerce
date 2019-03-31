<?php

/* JeremyFrontBundle:Chaussure:baskets.html.twig */
class __TwigTemplate_32ae4491cd812939964e502f6a24751f9c55ce63a75640ab68769dfd9fa29ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JeremyFrontBundle:Chaussure:baskets.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'vetement' => array($this, 'block_vetement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyFrontBundle:Chaussure:baskets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyFrontBundle:Chaussure:baskets.html.twig"));

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
        echo "Baskets
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_vetement($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vetement"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vetement"));

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
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_botte");
        echo "\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Baskets</li>
            </ol>
          </nav>
        </div>
        <div class=\"col-lg-3\">
          <!--
          *** MENUS AND FILTERS ***
          _________________________________________________________
          -->
          <div class=\"card sidebar-menu mb-4\">
            <div class=\"card-header\">
              <h3 class=\"h4 card-title\">Catégories</h3>
            </div>
            <div class=\"card-body\">
              <ul class=\"nav nav-pills flex-column category-menu\">
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_botte");
        echo "\" class=\"nav-link\">Chaussure <span class=\"badge badge-secondary\"></span></a>
                <ul class=\"list-unstyled\">
                  <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_botte");
        echo "\" class=\"nav-link\">Bottes</a></li>
                  <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_sandale");
        echo "\" class=\"nav-link\">Sandales</a></li>
                  <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_basket");
        echo "\" class=\"nav-link\">Baskets</a></li>
                  <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_escarpin");
        echo "\" class=\"nav-link\">Escarpins</a></li>
                  <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_chausson");
        echo "\" class=\"nav-link\">Chaussons</a></li>
                </ul>
                </li>
              </ul>
            </div>
          </div>

          <div class=\"card sidebar-menu mb-4\">
            <div class=\"card-header\">
              <h3 class=\"h4 card-title\">Couleurs <a href=\"#\" class=\"btn btn-sm btn-danger pull-right\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
            </div>
            <div class=\"card-body\">
              <form>
                <div class=\"form-group\">
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"><span class=\"colour white\"></span> Blanc (14)
                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"><span class=\"colour blue\"></span> Bleu (10)
                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"><span class=\"colour green\"></span>  Vert (20)
                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"><span class=\"colour yellow\"></span>  Jaune (13)
                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"><span class=\"colour red\"></span>  Rouge (10)
                    </label>
                  </div>
                </div>
                <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i>Appliquer</button>
              </form>
            </div>
          </div>
          <!-- *** MENUS AND FILTERS END ***-->
        </div>
        <div class=\"col-lg-9\">
          <div class=\"box\">
            <h1>Baskets</h1>
            <p>Dans la partie Baskets, nous proposons une large sélection des meilleurs produits que nous avons trouvés et sélectionnés avec soin pour vous.</p>
          </div>

          <div class=\"row products\">

          ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 95
            echo "
            <div class=\"col-lg-4 col-md-6\">

            <div class=\"product\">
            <div class=\"flip-container\">
              <div class=\"flipper\">
                <div class=\"front\"><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["produit"], "photo", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\"></a></div>
              </div>
            </div><a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\" class=\"invisible\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["produit"], "photo", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\"></a>
            <div class=\"text\">
              <h3><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "</a></h3>
              <p class=\"price\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "€</p>
              <p class=\"buttons\"><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">Voir détail</a>

              <form style=\"text-align:center;\" action=";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_panier_ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo " method=\"get\">
                <button style=\"margin-bottom:10px;\"class=\"btn btn-primary\">
                <i class=\"fa fa-shopping-cart\"></i>Ajouter au panier</button</p>
              </form>
            </div>
              <!-- /.text-->
            </div>
            <!-- /.product-->
            </div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "

          <!--
          <div class=\"pages\">
            <nav aria-label=\"Page navigation example\" class=\"d-flex justify-content-center\">
              <ul class=\"pagination\">

                <li class=\"page-item\"><a href=\"#\" aria-label=\"Previous\" class=\"page-link\"><span aria-hidden=\"true\">«</span><span class=\"sr-only\">Previous</span></a></li>
                <li class=\"page-item active\"><a href=\"#\" class=\"page-link\">1</a></li>
                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">3</a></li>
                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a></li>
                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a></li>
                <li class=\"page-item\"><a href=\"#\" aria-label=\"Next\" class=\"page-link\"><span aria-hidden=\"true\">»</span><span class=\"sr-only\">Next</span></a></li>
              </ul>
            </nav>
          </div>
        -->
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
        return "JeremyFrontBundle:Chaussure:baskets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 120,  220 => 109,  215 => 107,  211 => 106,  205 => 105,  198 => 103,  191 => 101,  183 => 95,  179 => 94,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  101 => 34,  82 => 18,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
Baskets
{% endblock %}

{% block vetement%}


<div id=\"all\">
  <div id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <!-- breadcrumb-->
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"{{ path('jeremy_front_botte') }}\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Baskets</li>
            </ol>
          </nav>
        </div>
        <div class=\"col-lg-3\">
          <!--
          *** MENUS AND FILTERS ***
          _________________________________________________________
          -->
          <div class=\"card sidebar-menu mb-4\">
            <div class=\"card-header\">
              <h3 class=\"h4 card-title\">Catégories</h3>
            </div>
            <div class=\"card-body\">
              <ul class=\"nav nav-pills flex-column category-menu\">
                <li><a href=\"{{ path('jeremy_front_botte') }}\" class=\"nav-link\">Chaussure <span class=\"badge badge-secondary\"></span></a>
                <ul class=\"list-unstyled\">
                  <li><a href=\"{{ path('jeremy_front_botte') }}\" class=\"nav-link\">Bottes</a></li>
                  <li><a href=\"{{ path('jeremy_front_sandale') }}\" class=\"nav-link\">Sandales</a></li>
                  <li><a href=\"{{ path('jeremy_front_basket') }}\" class=\"nav-link\">Baskets</a></li>
                  <li><a href=\"{{ path('jeremy_front_escarpin') }}\" class=\"nav-link\">Escarpins</a></li>
                  <li><a href=\"{{ path('jeremy_front_chausson') }}\" class=\"nav-link\">Chaussons</a></li>
                </ul>
                </li>
              </ul>
            </div>
          </div>

          <div class=\"card sidebar-menu mb-4\">
            <div class=\"card-header\">
              <h3 class=\"h4 card-title\">Couleurs <a href=\"#\" class=\"btn btn-sm btn-danger pull-right\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
            </div>
            <div class=\"card-body\">
              <form>
                <div class=\"form-group\">
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"><span class=\"colour white\"></span> Blanc (14)
                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"><span class=\"colour blue\"></span> Bleu (10)
                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"><span class=\"colour green\"></span>  Vert (20)
                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"><span class=\"colour yellow\"></span>  Jaune (13)
                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"><span class=\"colour red\"></span>  Rouge (10)
                    </label>
                  </div>
                </div>
                <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i>Appliquer</button>
              </form>
            </div>
          </div>
          <!-- *** MENUS AND FILTERS END ***-->
        </div>
        <div class=\"col-lg-9\">
          <div class=\"box\">
            <h1>Baskets</h1>
            <p>Dans la partie Baskets, nous proposons une large sélection des meilleurs produits que nous avons trouvés et sélectionnés avec soin pour vous.</p>
          </div>

          <div class=\"row products\">

          {% for produit in myResults %}

            <div class=\"col-lg-4 col-md-6\">

            <div class=\"product\">
            <div class=\"flip-container\">
              <div class=\"flipper\">
                <div class=\"front\"><a href=\"{{ produit.id }}\"><img src=\"{{ asset('uploads/photos/' ~ produit.photo ) }}\" alt=\"\" class=\"img-fluid\"></a></div>
              </div>
            </div><a href=\"{{ produit.id }}\" class=\"invisible\"><img src=\"{{ asset('uploads/photos/' ~ produit.photo ) }}\" alt=\"\" class=\"img-fluid\"></a>
            <div class=\"text\">
              <h3><a href=\"{{ produit.id }}\">{{ produit.titre }}</a></h3>
              <p class=\"price\">{{ produit.prix }}€</p>
              <p class=\"buttons\"><a href=\"{{ produit.id }}\" class=\"btn btn-outline-secondary\">Voir détail</a>

              <form style=\"text-align:center;\" action={{ path('jeremy_panier_ajouter', { 'id' : produit.id }) }} method=\"get\">
                <button style=\"margin-bottom:10px;\"class=\"btn btn-primary\">
                <i class=\"fa fa-shopping-cart\"></i>Ajouter au panier</button</p>
              </form>
            </div>
              <!-- /.text-->
            </div>
            <!-- /.product-->
            </div>

          {% endfor %}


          <!--
          <div class=\"pages\">
            <nav aria-label=\"Page navigation example\" class=\"d-flex justify-content-center\">
              <ul class=\"pagination\">

                <li class=\"page-item\"><a href=\"#\" aria-label=\"Previous\" class=\"page-link\"><span aria-hidden=\"true\">«</span><span class=\"sr-only\">Previous</span></a></li>
                <li class=\"page-item active\"><a href=\"#\" class=\"page-link\">1</a></li>
                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">3</a></li>
                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a></li>
                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a></li>
                <li class=\"page-item\"><a href=\"#\" aria-label=\"Next\" class=\"page-link\"><span aria-hidden=\"true\">»</span><span class=\"sr-only\">Next</span></a></li>
              </ul>
            </nav>
          </div>
        -->
        </div>
        <!-- /.col-lg-9-->
      </div>
    </div>
  </div>
</div>


{% endblock %}
", "JeremyFrontBundle:Chaussure:baskets.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\FrontBundle/Resources/views/Chaussure/baskets.html.twig");
    }
}
