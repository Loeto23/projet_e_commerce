<?php

/* JeremyProduitBundle:Default:index.html.twig */
class __TwigTemplate_46e703fb88057c296bb836a59d6577aa8d8a7602e233e75029b53034d84e104f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JeremyProduitBundle:Default:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyProduitBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyProduitBundle:Default:index.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/backoffice=produit"), "html", null, true);
        echo "\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/backoffice=membre"), "html", null, true);
        echo "\" class=\"tdecoNone blue\">Voir la liste des membres |</a>
<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/produit"), "html", null, true);
        echo "\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/produit"), "html", null, true);
        echo "\" class=\"tdecoNone blue\">Voir la liste des produits |</a>

<br><br>

<a href=\"backoffice=produit/action=ajouter\">Ajouter un produit</a>

  <table>
    <tr>
      <th>ID</th>
      <th>Référence</th>
      <th>Catégorie</th>
      <th>Titre</th>
      <th>Description</th>
      <th>Couleur</th>
      <th>Taille</th>
      <th>Photo</th>
      <th>Prix</th>
      <th>Stock</th>
    </tr>

    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 37
            echo "    <tr>
      <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "categorie", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "couleur", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "taille", array()), "html", null, true);
            echo "</td>
      <td>

      <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["produit"], "photo", array()))), "html", null, true);
            echo "\" width=\"100\" height=\"100\">

      </td>
      <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "stock", array()), "html", null, true);
            echo "</td>
      <td><a href=\"action=modif";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\">Modifier</a></td>
      <td><a href=\"action=suppr";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\">Supprimer</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
  </table>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeremyProduitBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 56,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  149 => 47,  143 => 44,  139 => 43,  135 => 42,  131 => 41,  127 => 40,  123 => 39,  119 => 38,  116 => 37,  112 => 36,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

<a href=\"{{ asset('app_dev.php/backoffice=produit') }}\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
<a href=\"{{ asset('app_dev.php/backoffice=membre') }}\" class=\"tdecoNone blue\">Voir la liste des membres |</a>
<a href=\"{{ asset('app_dev.php/produit') }}\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
<a href=\"{{ asset('app_dev.php/produit') }}\" class=\"tdecoNone blue\">Voir la liste des produits |</a>

<br><br>

<a href=\"backoffice=produit/action=ajouter\">Ajouter un produit</a>

  <table>
    <tr>
      <th>ID</th>
      <th>Référence</th>
      <th>Catégorie</th>
      <th>Titre</th>
      <th>Description</th>
      <th>Couleur</th>
      <th>Taille</th>
      <th>Photo</th>
      <th>Prix</th>
      <th>Stock</th>
    </tr>

    {% for produit in myResults %}
    <tr>
      <td>{{ produit.id }}</td>
      <td>{{ produit.reference }}</td>
      <td>{{ produit.categorie }}</td>
      <td>{{ produit.titre }}</td>
      <td>{{ produit.description }}</td>
      <td>{{ produit.couleur }}</td>
      <td>{{ produit.taille }}</td>
      <td>

      <img src=\"{{ asset('uploads/photos/' ~ produit.photo ) }}\" width=\"100\" height=\"100\">

      </td>
      <td>{{ produit.prix }}</td>
      <td>{{ produit.stock }}</td>
      <td><a href=\"action=modif{{ produit.id }}\">Modifier</a></td>
      <td><a href=\"action=suppr{{ produit.id }}\">Supprimer</a></td>
    </tr>
    {% endfor %}

  </table>

</div>

{% endblock %}
", "JeremyProduitBundle:Default:index.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\ProduitBundle/Resources/views/Default/index.html.twig");
    }
}
