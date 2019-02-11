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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/backoffice=avis"), "html", null, true);
        echo "\" class=\"tdecoNone blue\">Voir la liste des avis |</a>

<br>



<table>
  <tr>
    <th>ID</th>
    <th>Nom d'utilisateur</th>
    <th>Email</th>
    <th>Status</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Dernière connexion</th>

  </tr>

  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myResults"] ?? $this->getContext($context, "myResults")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 35
            echo "  <tr>
    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "id", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "username", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "email", array()), "html", null, true);
            echo "</td>

    <td>

    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["membre"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 43
                echo "
      ";
                // line 44
                if (($context["status"] == "ROLE_SUPER_ADMIN")) {
                    // line 45
                    echo "      | SUPER ADMIN |

      ";
                } elseif ((                // line 47
$context["status"] == "ROLE_ADMIN")) {
                    // line 48
                    echo "      | ADMIN |

      ";
                } elseif ((                // line 50
$context["status"] == "ROLE_USER")) {
                    // line 51
                    echo "      | MEMBRE |

      ";
                }
                // line 54
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
    </td>

    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nom", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenom", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["membre"], "lastLogin", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    <td><a href=\"backoffice=membre/action=suppr";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "id", array()), "html", null, true);
            echo "\">Supprimer</a></td>
    <td><a href=\"backoffice=membre/action=modif";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "id", array()), "html", null, true);
            echo "\">Modifier</a></td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
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
        return array (  195 => 66,  186 => 63,  182 => 62,  178 => 61,  174 => 60,  170 => 59,  165 => 56,  158 => 54,  153 => 51,  151 => 50,  147 => 48,  145 => 47,  141 => 45,  139 => 44,  136 => 43,  132 => 42,  125 => 38,  121 => 37,  117 => 36,  114 => 35,  110 => 34,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

  <a href=\"{{ asset('app_dev.php/backoffice=produit') }}\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
  <a href=\"{{ asset('app_dev.php/backoffice=membre') }}\" class=\"tdecoNone blue\">Voir la liste des membres |</a>
  <a href=\"{{ asset('app_dev.php/produit') }}\" class=\"tdecoNone blue\">Voir la liste des produits |</a>
  <a href=\"{{ asset('app_dev.php/backoffice=avis') }}\" class=\"tdecoNone blue\">Voir la liste des avis |</a>

<br>



<table>
  <tr>
    <th>ID</th>
    <th>Nom d'utilisateur</th>
    <th>Email</th>
    <th>Status</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Dernière connexion</th>

  </tr>

  {% for membre in myResults %}
  <tr>
    <td>{{ membre.id }}</td>
    <td>{{ membre.username }}</td>
    <td>{{ membre.email }}</td>

    <td>

    {% for status in membre.roles %}

      {% if status == 'ROLE_SUPER_ADMIN' %}
      | SUPER ADMIN |

      {% elseif status == 'ROLE_ADMIN' %}
      | ADMIN |

      {% elseif status == 'ROLE_USER' %}
      | MEMBRE |

      {% endif %}

    {% endfor %}

    </td>

    <td>{{ membre.nom }}</td>
    <td>{{ membre.prenom }}</td>
    <td>{{ membre.lastLogin|date('Y-m-d') }}</td>
    <td><a href=\"backoffice=membre/action=suppr{{ membre.id }}\">Supprimer</a></td>
    <td><a href=\"backoffice=membre/action=modif{{ membre.id }}\">Modifier</a></td>
  </tr>
  {% endfor %}

</table>


</div>

{% endblock %}
", "@JeremyUser/Default/index.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\UserBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
