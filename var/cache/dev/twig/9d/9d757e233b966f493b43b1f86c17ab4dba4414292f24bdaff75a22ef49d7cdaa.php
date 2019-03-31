<?php

/* @JeremyProduit/Default/index.html.twig */
class __TwigTemplate_5d28038a28357fed2c03dbe467cb04494e25f724d67c3e36948bc39a10f4cbd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JeremyProduit/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyProduit/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyProduit/Default/index.html.twig"));

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
        echo "Backoffice Produit
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

<h1>Bienvenue dans le Back Office Produit</h1>

<a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_produit_homepage");
        echo "\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_user_homepage");
        echo "\" class=\"tdecoNone blue\">Voir la liste des membres |</a>
<a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_commande_homepage");
        echo "\" class=\"tdecoNone blue\">Voir la liste des commandes |</a>
<a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_avis_homepage");
        echo "\" class=\"tdecoNone blue\">Voir la liste des avis</a>

<br><br>

<a href=\"backoffice=produit/action=ajouter\">Ajouter un produit</a>

  <table class=\"table\">
    <thead>
      <tr>
        <th scope=\"col\">ID</th>
        <th scope=\"col\">Référence</th>
        <th scope=\"col\">Catégorie</th>
        <th scope=\"col\">Titre</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Couleur</th>
        <th scope=\"col\">Taille</th>
        <th scope=\"col\">Photo</th>
        <th scope=\"col\">Prix</th>
        <th scope=\"col\">Stock</th>
      </tr>
    </thead>
    <tbody>

      ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 40
            echo "
      <tr>
        <td class=\"delBord\" scope=\"row\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "categorie", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "couleur", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "taille", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">

        <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["produit"], "photo", array()))), "html", null, true);
            echo "\" width=\"100\" height=\"100\">

        </td>
        <td class=\"delBord\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "stock", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\"><a href=\"backoffice=produit/action=modif";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\">Modifier</a></td>
        <td class=\"delBord\"><a href=\"backoffice=produit/action=suppr";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\">Supprimer</a></td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
    </tbody>
  </table>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeremyProduit/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 60,  171 => 57,  167 => 56,  163 => 55,  159 => 54,  153 => 51,  147 => 48,  143 => 47,  139 => 46,  135 => 45,  131 => 44,  127 => 43,  123 => 42,  119 => 40,  115 => 39,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
Backoffice Produit
{% endblock %}

{% block section %}

<div class=\"container\">

<h1>Bienvenue dans le Back Office Produit</h1>

<a href=\"{{ path('jeremy_produit_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
<a href=\"{{ path('jeremy_user_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des membres |</a>
<a href=\"{{ path('jeremy_commande_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des commandes |</a>
<a href=\"{{ path('jeremy_avis_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des avis</a>

<br><br>

<a href=\"backoffice=produit/action=ajouter\">Ajouter un produit</a>

  <table class=\"table\">
    <thead>
      <tr>
        <th scope=\"col\">ID</th>
        <th scope=\"col\">Référence</th>
        <th scope=\"col\">Catégorie</th>
        <th scope=\"col\">Titre</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Couleur</th>
        <th scope=\"col\">Taille</th>
        <th scope=\"col\">Photo</th>
        <th scope=\"col\">Prix</th>
        <th scope=\"col\">Stock</th>
      </tr>
    </thead>
    <tbody>

      {% for produit in myResults %}

      <tr>
        <td class=\"delBord\" scope=\"row\">{{ produit.id }}</td>
        <td class=\"delBord\">{{ produit.reference }}</td>
        <td class=\"delBord\">{{ produit.categorie }}</td>
        <td class=\"delBord\">{{ produit.titre }}</td>
        <td class=\"delBord\">{{ produit.description }}</td>
        <td class=\"delBord\">{{ produit.couleur }}</td>
        <td class=\"delBord\">{{ produit.taille }}</td>
        <td class=\"delBord\">

        <img src=\"{{ asset('uploads/photos/' ~ produit.photo ) }}\" width=\"100\" height=\"100\">

        </td>
        <td class=\"delBord\">{{ produit.prix }}</td>
        <td class=\"delBord\">{{ produit.stock }}</td>
        <td class=\"delBord\"><a href=\"backoffice=produit/action=modif{{ produit.id }}\">Modifier</a></td>
        <td class=\"delBord\"><a href=\"backoffice=produit/action=suppr{{ produit.id }}\">Supprimer</a></td>
      </tr>
      {% endfor %}

    </tbody>
  </table>

</div>

{% endblock %}
", "@JeremyProduit/Default/index.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\ProduitBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
