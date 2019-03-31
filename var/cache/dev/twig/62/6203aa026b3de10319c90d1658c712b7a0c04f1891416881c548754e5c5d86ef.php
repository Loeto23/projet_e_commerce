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

<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">Numéro de commande</th>
      <th scope=\"col\">Utilisateur</th>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Photo</th>
      <th scope=\"col\">Prix total</th>
      <th scope=\"col\">Date de commande</th>
      <th scope=\"col\">Modification</th>
      <th scope=\"col\">Suppression</th>
    </tr>

  </thead>
  <tbody>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 36
            echo "
      <tr>
        <td class=\"delBord\" scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "username", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "titre", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\"><img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["commande"], "photo", array()))), "html", null, true);
            echo "\" width=\"100\" height=\"100\"></td>
        <td class=\"delBord\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prixTotal", array()), "html", null, true);
            echo "</td>
        <td class=\"delBord\">";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateEnregistrement", array()), "Y-m-d"), "html", null, true);
            echo "</td>
        <td class=\"delBord\"><a href=\"backoffice=commande/action=modif";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
            echo "\">Modifier</a></td>
        <td class=\"delBord\"><a href=\"backoffice=commande/action=suppr";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
            echo "\">Supprimer</a></td>
      </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        return array (  157 => 49,  147 => 45,  143 => 44,  139 => 43,  135 => 42,  131 => 41,  127 => 40,  123 => 39,  119 => 38,  115 => 36,  111 => 35,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">Numéro de commande</th>
      <th scope=\"col\">Utilisateur</th>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Photo</th>
      <th scope=\"col\">Prix total</th>
      <th scope=\"col\">Date de commande</th>
      <th scope=\"col\">Modification</th>
      <th scope=\"col\">Suppression</th>
    </tr>

  </thead>
  <tbody>
    {% for commande in myResults %}

      <tr>
        <td class=\"delBord\" scope=\"row\">{{ commande.id }}</td>
        <td class=\"delBord\">{{ commande.username }}</td>
        <td class=\"delBord\">{{ commande.titre }}</td>
        <td class=\"delBord\"><img src=\"{{ asset('uploads/photos/' ~ commande.photo ) }}\" width=\"100\" height=\"100\"></td>
        <td class=\"delBord\">{{ commande.prixTotal }}</td>
        <td class=\"delBord\">{{ commande.dateEnregistrement|date('Y-m-d') }}</td>
        <td class=\"delBord\"><a href=\"backoffice=commande/action=modif{{ commande.id }}\">Modifier</a></td>
        <td class=\"delBord\"><a href=\"backoffice=commande/action=suppr{{ commande.id }}\">Supprimer</a></td>
      </tr>

    {% endfor %}

</table>






</div>

{% endblock %}
", "@JeremyCommande/Default/index.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\CommandeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
