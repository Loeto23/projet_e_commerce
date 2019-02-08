<?php

/* JeremyProduitBundle:Default:index.html.twig */
class __TwigTemplate_8ce62e0b81742848dbb56fdfcbc8f4bd62fa88f25cb4dd23720f76297a386ef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JeremyProduitBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Liste des Produits</h1>

<a href=\"action=ajouter\">Ajouter un produit</a>



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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 26
            echo "    <tr>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "categorie", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "couleur", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "taille", array()), "html", null, true);
            echo "</td>
      <td>

      <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["produit"], "photo", array()))), "html", null, true);
            echo "\" width=\"100\" height=\"100\">

      </td>
      <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "stock", array()), "html", null, true);
            echo "</td>
      <td><a href=\"action=modif";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\">Modifier</a></td>
      <td><a href=\"action=suppr";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\">Supprimer</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
  </table>

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
        return array (  136 => 45,  127 => 42,  123 => 41,  119 => 40,  115 => 39,  109 => 36,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  76 => 26,  72 => 25,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}

<h1>Liste des Produits</h1>

<a href=\"action=ajouter\">Ajouter un produit</a>



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

{% endblock %}
", "JeremyProduitBundle:Default:index.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\ProduitBundle/Resources/views/Default/index.html.twig");
    }
}
