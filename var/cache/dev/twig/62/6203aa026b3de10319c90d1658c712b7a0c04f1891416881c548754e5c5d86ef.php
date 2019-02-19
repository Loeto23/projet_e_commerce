<?php

/* @JeremyCommande/Default/index.html.twig */
class __TwigTemplate_61ff0c1acd6851d6c68f13525b61c89a7bb8bb3129e90b23d98b7b28a3e62cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JeremyCommande/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyCommande/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyCommande/Default/index.html.twig"));

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
        echo "Backoffice Commande
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

<h1>Bienvenue dans le Back Office Commande</h1>

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

<table border=\"1\">

  <tr>
    <th>Numéro de commande</th>
    <th>Utilisateur</th>
    <th>Produit</th>
    <th>Photo</th>
    <th>Prix total</th>
    <th>Date de commande</th>
    <th>Modification</th>
    <th>Suppression</th>
  </tr>

  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 34
            echo "
    <tr>
      <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "username", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "titre", array()), "html", null, true);
            echo "</td>
      <td><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["commande"], "photo", array()))), "html", null, true);
            echo "\" width=\"100\" height=\"100\"></td>
      <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prixTotal", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateEnregistrement", array()), "Y-m-d"), "html", null, true);
            echo "</td>
      <td><a href=\"backoffice=commande/action=modif";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
            echo "\">Modifier</a></td>
      <td><a href=\"backoffice=commande/action=suppr";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
            echo "\">Supprimer</a></td>
    </tr>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
</table>






</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeremyCommande/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 47,  145 => 43,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 34,  109 => 33,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
Backoffice Commande
{% endblock %}

{% block section %}

<div class=\"container\">

<h1>Bienvenue dans le Back Office Commande</h1>

<a href=\"{{ path('jeremy_produit_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
<a href=\"{{ path('jeremy_user_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des membres |</a>
<a href=\"{{ path('jeremy_commande_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des commandes |</a>
<a href=\"{{ path('jeremy_avis_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des avis</a>

<br><br>

<table border=\"1\">

  <tr>
    <th>Numéro de commande</th>
    <th>Utilisateur</th>
    <th>Produit</th>
    <th>Photo</th>
    <th>Prix total</th>
    <th>Date de commande</th>
    <th>Modification</th>
    <th>Suppression</th>
  </tr>

  {% for commande in myResults %}

    <tr>
      <td>{{ commande.id }}</td>
      <td>{{ commande.username }}</td>
      <td>{{ commande.titre }}</td>
      <td><img src=\"{{ asset('uploads/photos/' ~ commande.photo ) }}\" width=\"100\" height=\"100\"></td>
      <td>{{ commande.prixTotal }}</td>
      <td>{{ commande.dateEnregistrement|date('Y-m-d') }}</td>
      <td><a href=\"backoffice=commande/action=modif{{ commande.id }}\">Modifier</a></td>
      <td><a href=\"backoffice=commande/action=suppr{{ commande.id }}\">Supprimer</a></td>
    </tr>

  {% endfor %}

</table>






</div>

{% endblock %}
", "@JeremyCommande/Default/index.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\CommandeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
