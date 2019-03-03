<?php

/* nav.html.twig */
class __TwigTemplate_7a58133daf21d7930e984c413642eb3694b80ec08d7676fcef15501c3173be69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 2
        echo "
<nav class=\"navbar navbar-expand-lg\">
  <div class=\"container\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php"), "html", null, true);
        echo "\" class=\"navbar-brand home\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/img/ela.png"), "html", null, true);
        echo "\" alt=\"Ela logo\" class=\"d-none d-md-inline-block\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/img/ela-small.png"), "html", null, true);
        echo "\" alt=\"Ela logo\" class=\"d-inline-block d-md-none\"><span class=\"sr-only\">Ela - go to homepage</span></a>
    <div class=\"navbar-buttons\">
      <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle navigation</span><i class=\"fa fa-align-justify\"></i></button>
      <button type=\"button\" data-toggle=\"collapse\" data-target=\"#search\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle search</span><i class=\"fa fa-search\"></i></button><a href=\"basket.html\" class=\"btn btn-outline-secondary navbar-toggler\"><i class=\"fa fa-shopping-cart\"></i></a>
    </div>
    <div id=\"navigation\" class=\"collapse navbar-collapse\" style=\"color:blue;\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\" class=\"dropdown-toggle nav-link\">Vêtements<b class=\"caret\"\"></b></a>
          <ul class=\"dropdown-menu megamenuVet megamenu\">
            <li>
              <div class=\"row\">
                <div class=\"col-md-6 col-lg-3\">
                  <ul class=\"list-unstyled mb-2\">
                    <li class=\"nav-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_tops");
        echo "\" class=\"nav-link\">Tops</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_robe");
        echo "\" class=\"nav-link\">Robes</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_pantalon");
        echo "\" class=\"nav-link\">Pantalons</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_jupe");
        echo "\" class=\"nav-link\">Jupes</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_veste");
        echo "\" class=\"nav-link\">Vestes/Manteaux</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </li>
        <li class=\"nav-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\" class=\"dropdown-toggle nav-link\">Chaussures<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu megamenu megamenuChau\">
            <li>
              <div class=\"row\">
                <div class=\"col-md-6 col-lg-3\">
                  <ul class=\"list-unstyled mb-3\">
                    <li class=\"nav-item\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_botte");
        echo "\" class=\"nav-link\">Bottes</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_sandale");
        echo "\" class=\"nav-link\">Sandales</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_basket");
        echo "\" class=\"nav-link\">Baskets</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_escarpin");
        echo "\" class=\"nav-link\">Escarpins</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_chausson");
        echo "\" class=\"nav-link\">Chaussons</a></li>
                  </ul>
                </div>
            </li>
          </ul>
        </li>
        <li class=\"nav-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\" class=\"dropdown-toggle nav-link\">Accessoires<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu megamenu megamenuAcces\">
            <li>
              <div class=\"row\">
                <div class=\"col-md-6 col-lg-3\">
                  <ul class=\"list-unstyled mb-3\">
                    <li class=\"nav-item\"><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_sac");
        echo "\" class=\"nav-link\">Sacs</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_echarpe");
        echo "\" class=\"nav-link\">Foulards/Echarpes</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_ceinture");
        echo "\" class=\"nav-link\">Ceintures</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_chapeau");
        echo "\" class=\"nav-link\">Couvre/chef</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_bijou");
        echo "\" class=\"nav-link\">Bijoux</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </li>
      </ul>

      <div class=\"navbar-buttons d-flex justify-content-end w120 pR10\" style=\"display:none;\">
        <form role=\"search\" class=\"ml-auto mR20\" style=\"display:none;>
          <div class=\"input-group w140\">
            <input type=\"text\" placeholder=\"Search\" class=\"form-control\">
            <div class=\"input-group-append\" style=\"display:none;\">
              <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
            </div>
          </div>
        </form>
      </div>

      <div class=\"panier\">
        <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\"><a href=\"\" class=\"btn btn-primary navbar-btn\"><i class=\"fa fa-shopping-cart\"></i><span>Panier vide</span></a></div>
      </div>
    </div>
  </div>
</nav>








";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  143 => 53,  139 => 52,  135 => 51,  131 => 50,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  48 => 4,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block nav %}

<nav class=\"navbar navbar-expand-lg\">
  <div class=\"container\"><a href=\"{{ asset('app_dev.php')}}\" class=\"navbar-brand home\"><img src=\"{{ asset('../vendor/img/ela.png') }}\" alt=\"Ela logo\" class=\"d-none d-md-inline-block\"><img src=\"{{ asset('../vendor/img/ela-small.png') }}\" alt=\"Ela logo\" class=\"d-inline-block d-md-none\"><span class=\"sr-only\">Ela - go to homepage</span></a>
    <div class=\"navbar-buttons\">
      <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle navigation</span><i class=\"fa fa-align-justify\"></i></button>
      <button type=\"button\" data-toggle=\"collapse\" data-target=\"#search\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle search</span><i class=\"fa fa-search\"></i></button><a href=\"basket.html\" class=\"btn btn-outline-secondary navbar-toggler\"><i class=\"fa fa-shopping-cart\"></i></a>
    </div>
    <div id=\"navigation\" class=\"collapse navbar-collapse\" style=\"color:blue;\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\" class=\"dropdown-toggle nav-link\">Vêtements<b class=\"caret\"\"></b></a>
          <ul class=\"dropdown-menu megamenuVet megamenu\">
            <li>
              <div class=\"row\">
                <div class=\"col-md-6 col-lg-3\">
                  <ul class=\"list-unstyled mb-2\">
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_tops') }}\" class=\"nav-link\">Tops</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_robe') }}\" class=\"nav-link\">Robes</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_pantalon') }}\" class=\"nav-link\">Pantalons</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_jupe') }}\" class=\"nav-link\">Jupes</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_veste') }}\" class=\"nav-link\">Vestes/Manteaux</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </li>
        <li class=\"nav-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\" class=\"dropdown-toggle nav-link\">Chaussures<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu megamenu megamenuChau\">
            <li>
              <div class=\"row\">
                <div class=\"col-md-6 col-lg-3\">
                  <ul class=\"list-unstyled mb-3\">
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_botte') }}\" class=\"nav-link\">Bottes</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_sandale') }}\" class=\"nav-link\">Sandales</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_basket') }}\" class=\"nav-link\">Baskets</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_escarpin') }}\" class=\"nav-link\">Escarpins</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_chausson') }}\" class=\"nav-link\">Chaussons</a></li>
                  </ul>
                </div>
            </li>
          </ul>
        </li>
        <li class=\"nav-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\" class=\"dropdown-toggle nav-link\">Accessoires<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu megamenu megamenuAcces\">
            <li>
              <div class=\"row\">
                <div class=\"col-md-6 col-lg-3\">
                  <ul class=\"list-unstyled mb-3\">
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_sac') }}\" class=\"nav-link\">Sacs</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_echarpe') }}\" class=\"nav-link\">Foulards/Echarpes</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_ceinture') }}\" class=\"nav-link\">Ceintures</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_chapeau') }}\" class=\"nav-link\">Couvre/chef</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('jeremy_front_bijou') }}\" class=\"nav-link\">Bijoux</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </li>
      </ul>

      <div class=\"navbar-buttons d-flex justify-content-end w120 pR10\" style=\"display:none;\">
        <form role=\"search\" class=\"ml-auto mR20\" style=\"display:none;>
          <div class=\"input-group w140\">
            <input type=\"text\" placeholder=\"Search\" class=\"form-control\">
            <div class=\"input-group-append\" style=\"display:none;\">
              <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
            </div>
          </div>
        </form>
      </div>

      <div class=\"panier\">
        <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\"><a href=\"\" class=\"btn btn-primary navbar-btn\"><i class=\"fa fa-shopping-cart\"></i><span>Panier vide</span></a></div>
      </div>
    </div>
  </div>
</nav>








{% endblock %}
", "nav.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\app\\Resources\\views\\nav.html.twig");
    }
}
