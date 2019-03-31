<?php

/* @JeremyAvis/Default/index.html.twig */
class __TwigTemplate_3deddf4a5f6d682c4333cf242f282c164f15634f5cff2586475de97ad8e36d52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JeremyAvis/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyAvis/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyAvis/Default/index.html.twig"));

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
        echo "Backoffice Avis
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

  <h1>Bienvenue dans le Back Office Avis</h1>

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

<br>
<br>

<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Utilisateur</th>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Photo</th>
      <th scope=\"col\">Commentaire</th>
      <th scope=\"col\">Note</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 34
            echo "    <tr>
      <th scope=\"row\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "id", array()), "html", null, true);
            echo "</th>
      <td class=\"delBord\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "username", array()), "html", null, true);
            echo "</td>
      <td class=\"delBord\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "titre", array()), "html", null, true);
            echo "</td>
      <td class=\"delBord\"><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["avis"], "photo", array()))), "html", null, true);
            echo "\" width=\"100\" height=\"100\"></td>
      <td class=\"delBord\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "commentaire", array()), "html", null, true);
            echo "</td>
      <td class=\"delBord\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "note", array()), "html", null, true);
            echo "/5</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </tbody>


</table>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeremyAvis/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  113 => 34,  109 => 33,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
Backoffice Avis
{% endblock %}

{% block section %}

<div class=\"container\">

  <h1>Bienvenue dans le Back Office Avis</h1>

  <a href=\"{{ path('jeremy_produit_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
  <a href=\"{{ path('jeremy_user_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des membres |</a>
  <a href=\"{{ path('jeremy_commande_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des commandes |</a>
  <a href=\"{{ path('jeremy_avis_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des avis</a>

<br>
<br>

<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Utilisateur</th>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Photo</th>
      <th scope=\"col\">Commentaire</th>
      <th scope=\"col\">Note</th>
    </tr>
  </thead>
  <tbody>
    {% for avis in myResults %}
    <tr>
      <th scope=\"row\">{{ avis.id }}</th>
      <td class=\"delBord\">{{ avis.username }}</td>
      <td class=\"delBord\">{{ avis.titre }}</td>
      <td class=\"delBord\"><img src=\"{{ asset('uploads/photos/' ~ avis.photo ) }}\" width=\"100\" height=\"100\"></td>
      <td class=\"delBord\">{{ avis.commentaire }}</td>
      <td class=\"delBord\">{{ avis.note }}/5</td>
    </tr>
    {% endfor %}
  </tbody>


</table>

</div>

{% endblock %}
", "@JeremyAvis/Default/index.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\AvisBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
