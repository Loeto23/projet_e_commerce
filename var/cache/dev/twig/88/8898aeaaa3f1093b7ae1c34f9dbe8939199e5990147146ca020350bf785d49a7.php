<?php

/* @JeremyFront/Chaussure/detail.html.twig */
class __TwigTemplate_175fd6d4a4d8622387434a4a8214d51b455fe30e2f3f8815d09ba84b3239dd63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JeremyFront/Chaussure/detail.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyFront/Chaussure/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyFront/Chaussure/detail.html.twig"));

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 5
            echo "
  ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
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
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_botte");
        echo "\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_botte");
        echo "\">Chaussure</a></li>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 24
            echo "              <li aria-current=\"page\" class=\"breadcrumb-item active\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </ol>
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
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_botte");
        echo "\" class=\"nav-link\">Chaussure <span class=\"badge badge-secondary\"></span></a>
                <ul class=\"list-unstyled\">
                  <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_botte");
        echo "\" class=\"nav-link\">Bottes</a></li>
                  <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_sandale");
        echo "\" class=\"nav-link\">Sandales</a></li>
                  <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_basket");
        echo "\" class=\"nav-link\">Baskets</a></li>
                  <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_escarpin");
        echo "\" class=\"nav-link\">Escarpins</a></li>
                  <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_chausson");
        echo "\" class=\"nav-link\">Chaussons</a></li>
                </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 55
            echo "
        <div class=\"col-lg-9\">
          <div id=\"productMain\" class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"item\"> <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["produit"], "photo", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\"></div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"box\">
                <h1 class=\"text-center\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "</h1>
                <p class=\"price\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "€</p>
                <p class=\"text-center buttons\"><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_panier_ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i> Ajouter au panier</a></p>
              </div>
            </div>
          </div>
          <div id=\"details\" class=\"box\">
            <p></p>
            <h4>Détail du produit</h4>
            <p>";
            // line 72
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true));
            echo "</p>
            <h4>Couleur</h4>
            <p>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "couleur", array()), "html", null, true);
            echo "</p>
            <h4>Taille unique</h4>
            <p>38</p>
        </div>
        <!-- /.col-md-9-->
        </div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "

    <!--
      <div>
        <button onclick=\"myFunction()\">Voir les avis</button>


        <table id=\"on-off\" style=\"display:none;\">

        <tr>
        <th>Nom</th>
        <th>Commentaire</th>
        <th>Note</th>
        </tr>

        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResultat"] ?? $this->getContext($context, "myResultat")));
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 98
            echo "
        <tr>
        <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "username", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "commentaire", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "note", array()), "html", null, true);
            echo "</td>
        </tr>

        </table>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
        </div>
        <br>
        <br>

        <button onclick=\"affichageFunction()\">Ajouter un commentaire</button>
        <br>
        <br>
        <div id=\"commentaire\" style=\"display:none;\">
          <textarea name=\"commentaire\" rows=\"5\" cols=\"60\" placeholder=\"Ajouter un commentaire à ce produit\"></textarea>
          <br>
          <label for=\"note\">Ajouter une note à ce produit</label>
          <br>
          <input type=\"number\" min=\"0\" max=\"5\">
          <br>
          <br>
          <input type=\"submit\" value=\"Enregistrer\">
        </div>
      </div>
    -->

      </div>
    </div>
  </div>


  <script>

  function myFunction() {
    var x = document.getElementById(\"on-off\");
    if (x.style.display === \"none\") {
      x.style.display = \"block\";
    } else {
      x.style.display = \"none\";
    }
  }

  function affichageFunction() {
    var x = document.getElementById(\"commentaire\");
    if (x.style.display === \"none\") {
      x.style.display = \"block\";
    } else {
      x.style.display = \"none\";
    }
  }


  </script>






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
        return "@JeremyFront/Chaussure/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 108,  250 => 102,  246 => 101,  242 => 100,  238 => 98,  234 => 97,  217 => 82,  203 => 74,  198 => 72,  188 => 65,  184 => 64,  180 => 63,  173 => 59,  167 => 55,  163 => 54,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  136 => 42,  131 => 40,  115 => 26,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  83 => 12,  74 => 11,  57 => 6,  54 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
{% for produit in myResults %}

  {{ produit.titre }}

{% endfor %}
{% endblock %}

{% block section %}

<div id=\"all\">
  <div id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <!-- breadcrumb-->
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"{{ path('jeremy_front_botte') }}\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\"><a href=\"{{ path('jeremy_front_botte') }}\">Chaussure</a></li>
            {% for produit in myResults %}
              <li aria-current=\"page\" class=\"breadcrumb-item active\">{{ produit.titre }}</li>
            {% endfor %}
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
        </div>

        {% for produit in myResults %}

        <div class=\"col-lg-9\">
          <div id=\"productMain\" class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"item\"> <img src=\"{{ asset('uploads/photos/' ~ produit.photo ) }}\" alt=\"\" class=\"img-fluid\"></div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"box\">
                <h1 class=\"text-center\">{{ produit.titre }}</h1>
                <p class=\"price\">{{ produit.prix }}€</p>
                <p class=\"text-center buttons\"><a href=\"{{ path('jeremy_panier_ajouter', {'id' : produit.id }) }}\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i> Ajouter au panier</a></p>
              </div>
            </div>
          </div>
          <div id=\"details\" class=\"box\">
            <p></p>
            <h4>Détail du produit</h4>
            <p>{{ produit.description|nl2br }}</p>
            <h4>Couleur</h4>
            <p>{{ produit.couleur }}</p>
            <h4>Taille unique</h4>
            <p>38</p>
        </div>
        <!-- /.col-md-9-->
        </div>

      {% endfor %}


    <!--
      <div>
        <button onclick=\"myFunction()\">Voir les avis</button>


        <table id=\"on-off\" style=\"display:none;\">

        <tr>
        <th>Nom</th>
        <th>Commentaire</th>
        <th>Note</th>
        </tr>

        {% for avis in myResultat %}

        <tr>
        <td>{{ avis.username }}</td>
        <td>{{ avis.commentaire }}</td>
        <td>{{ avis.note }}</td>
        </tr>

        </table>

        {% endfor %}

        </div>
        <br>
        <br>

        <button onclick=\"affichageFunction()\">Ajouter un commentaire</button>
        <br>
        <br>
        <div id=\"commentaire\" style=\"display:none;\">
          <textarea name=\"commentaire\" rows=\"5\" cols=\"60\" placeholder=\"Ajouter un commentaire à ce produit\"></textarea>
          <br>
          <label for=\"note\">Ajouter une note à ce produit</label>
          <br>
          <input type=\"number\" min=\"0\" max=\"5\">
          <br>
          <br>
          <input type=\"submit\" value=\"Enregistrer\">
        </div>
      </div>
    -->

      </div>
    </div>
  </div>


  <script>

  function myFunction() {
    var x = document.getElementById(\"on-off\");
    if (x.style.display === \"none\") {
      x.style.display = \"block\";
    } else {
      x.style.display = \"none\";
    }
  }

  function affichageFunction() {
    var x = document.getElementById(\"commentaire\");
    if (x.style.display === \"none\") {
      x.style.display = \"block\";
    } else {
      x.style.display = \"none\";
    }
  }


  </script>






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
", "@JeremyFront/Chaussure/detail.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\FrontBundle\\Resources\\views\\Chaussure\\detail.html.twig");
    }
}
