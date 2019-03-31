<?php

/* @JeremyUser/Default/index.html.twig */
class __TwigTemplate_b4383e54e6f99d1a9ee59578e2bd4b067e233fc45e270b5c3b524d8979d5137f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JeremyUser/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyUser/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyUser/Default/index.html.twig"));

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
        echo "Backoffice Membre
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

  <h1>Bienvenue dans le Back Office Membre</h1>

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
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Nom d'utilisateur</th>
      <th scope=\"col\">Email</th>
      <th scope=\"col\">Status</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Dernière connexion</th>
      <th scope=\"col\">Modification</th>
      <th scope=\"col\">Suppression</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 39
            echo "    <tr>
      <td class=\"delBord\" scope=\"row\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "id", array()), "html", null, true);
            echo "</td>
      <td class=\"delBord\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "username", array()), "html", null, true);
            echo "</td>
      <td class=\"delBord\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "email", array()), "html", null, true);
            echo "</td>

      <td class=\"delBord\">

      ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["membre"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 47
                echo "
        ";
                // line 48
                if (($context["status"] == "ROLE_SUPER_ADMIN")) {
                    // line 49
                    echo "        SUPER_ADMIN

        ";
                } elseif ((                // line 51
$context["status"] == "ROLE_ADMIN")) {
                    // line 52
                    echo "        ADMIN

        ";
                } elseif ((                // line 54
$context["status"] == "ROLE_USER")) {
                    // line 55
                    echo "        MEMBRE

        ";
                }
                // line 58
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "
      </td class=\"delBord\">

      <td class=\"delBord\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nom", array()), "html", null, true);
            echo "</td>
      <td class=\"delBord\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenom", array()), "html", null, true);
            echo "</td>
      <td class=\"delBord\">";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["membre"], "lastLogin", array()), "Y-m-d"), "html", null, true);
            echo "</td>
      <td class=\"delBord\"><a href=\"backoffice=membre/action=modif";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "id", array()), "html", null, true);
            echo "\">Modifier</a></td>
      <td class=\"delBord\"><a href=\"backoffice=membre/action=suppr";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "id", array()), "html", null, true);
            echo "\">Supprimer</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  </tbody>
</table>


</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeremyUser/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 70,  190 => 67,  186 => 66,  182 => 65,  178 => 64,  174 => 63,  169 => 60,  162 => 58,  157 => 55,  155 => 54,  151 => 52,  149 => 51,  145 => 49,  143 => 48,  140 => 47,  136 => 46,  129 => 42,  125 => 41,  121 => 40,  118 => 39,  114 => 38,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
Backoffice Membre
{% endblock %}

{% block section %}

<div class=\"container\">

  <h1>Bienvenue dans le Back Office Membre</h1>

  <a href=\"{{ path('jeremy_produit_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
  <a href=\"{{ path('jeremy_user_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des membres |</a>
  <a href=\"{{ path('jeremy_commande_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des commandes |</a>
  <a href=\"{{ path('jeremy_avis_homepage') }}\" class=\"tdecoNone blue\">Voir la liste des avis</a>

  <br>
<br>



<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Nom d'utilisateur</th>
      <th scope=\"col\">Email</th>
      <th scope=\"col\">Status</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Dernière connexion</th>
      <th scope=\"col\">Modification</th>
      <th scope=\"col\">Suppression</th>
    </tr>
  </thead>
  <tbody>
    {% for membre in myResults %}
    <tr>
      <td class=\"delBord\" scope=\"row\">{{ membre.id }}</td>
      <td class=\"delBord\">{{ membre.username }}</td>
      <td class=\"delBord\">{{ membre.email }}</td>

      <td class=\"delBord\">

      {% for status in membre.roles %}

        {% if status == 'ROLE_SUPER_ADMIN' %}
        SUPER_ADMIN

        {% elseif status == 'ROLE_ADMIN' %}
        ADMIN

        {% elseif status == 'ROLE_USER' %}
        MEMBRE

        {% endif %}

      {% endfor %}

      </td class=\"delBord\">

      <td class=\"delBord\">{{ membre.nom }}</td>
      <td class=\"delBord\">{{ membre.prenom }}</td>
      <td class=\"delBord\">{{ membre.lastLogin|date('Y-m-d') }}</td>
      <td class=\"delBord\"><a href=\"backoffice=membre/action=modif{{ membre.id }}\">Modifier</a></td>
      <td class=\"delBord\"><a href=\"backoffice=membre/action=suppr{{ membre.id }}\">Supprimer</a></td>
    </tr>
    {% endfor %}
  </tbody>
</table>


</div>

{% endblock %}
", "@JeremyUser/Default/index.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\UserBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
