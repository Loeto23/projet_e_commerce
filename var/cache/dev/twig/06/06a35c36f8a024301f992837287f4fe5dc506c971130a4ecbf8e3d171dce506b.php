<?php

/* ::top.html.twig */
class __TwigTemplate_fa95efd126fd5a1b879157abe98bee9710ee1bdf3616852ce202836d483e16c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::top.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::top.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "
<header class=\"header mb-5\">

<div id=\"top\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offer mb-3 mb-lg-0 \"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php"), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm\">Offre du jour</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php"), "html", null, true);
        echo "\" class=\"ml-1\">10% de réduction dés 50€ d'achat</a></div>
      <div class=\"col-lg-6 text-center text-lg-right\">
        <ul class=\"menu list-inline mb-0\">

          ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "            <li class=\"list-inline-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/profile"), "html", null, true);
            echo "\">Voir mon profil</a></li>
            <li class=\"list-inline-item\"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/logout"), "html", null, true);
            echo "\">Se déconnecter</a></li>
            <li class=\"list-inline-item\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/backoffice"), "html", null, true);
            echo "\">Backoffice</a></li>
          ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 17
            echo "            <li class=\"list-inline-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/profile"), "html", null, true);
            echo "\">Profil</a></li>
            <li class=\"list-inline-item\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/logout"), "html", null, true);
            echo "\">Se déconnecter</a></li>
          ";
        } else {
            // line 20
            echo "            <li class=\"list-inline-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/login"), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#login-modal\">Se connecter</a></li>
            <li class=\"list-inline-item\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/register"), "html", null, true);
            echo "\">S'inscrire</a></li>
            <li class=\"list-inline-item\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/contact"), "html", null, true);
            echo "\">Nous contacter</a></li>
          ";
        }
        // line 24
        echo "
        </ul>
      </div>
    </div>
  </div>
  <div id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Login\" aria-hidden=\"true\" class=\"modal fade\">
    <div class=\"modal-dialog modal-sm\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">Customer login</h5>
          <button type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\">×</span></button>
        </div>
        <div class=\"modal-body\">
          <form action=\"customer-orders.html\" method=\"post\">
            <div class=\"form-group\">
              <input id=\"email-modal\" type=\"text\" placeholder=\"email\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
              <input id=\"password-modal\" type=\"password\" placeholder=\"password\" class=\"form-control\">
            </div>
            <p class=\"text-center\">
              <button class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Log in</button>
            </p>
          </form>
          <p class=\"text-center text-muted\">Not registered yet?</p>
          <p class=\"text-center text-muted\"><a href=\"register.html\"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
        </div>
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
        return "::top.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  96 => 22,  92 => 21,  87 => 20,  82 => 18,  77 => 17,  72 => 15,  68 => 14,  63 => 13,  61 => 12,  52 => 8,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}

<header class=\"header mb-5\">

<div id=\"top\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offer mb-3 mb-lg-0 \"><a href=\"{{ asset('app_dev.php')}}\" class=\"btn btn-success btn-sm\">Offre du jour</a><a href=\"{{ asset('app_dev.php')}}\" class=\"ml-1\">10% de réduction dés 50€ d'achat</a></div>
      <div class=\"col-lg-6 text-center text-lg-right\">
        <ul class=\"menu list-inline mb-0\">

          {% if is_granted('ROLE_ADMIN') %}
            <li class=\"list-inline-item\"><a href=\"{{ asset('app_dev.php/profile')}}\">Voir mon profil</a></li>
            <li class=\"list-inline-item\"><a href=\"{{ asset('app_dev.php/logout')}}\">Se déconnecter</a></li>
            <li class=\"list-inline-item\"><a href=\"{{ asset('app_dev.php/backoffice')}}\">Backoffice</a></li>
          {% elseif is_granted('ROLE_USER') %}
            <li class=\"list-inline-item\"><a href=\"{{ asset('app_dev.php/profile')}}\">Profil</a></li>
            <li class=\"list-inline-item\"><a href=\"{{ asset('app_dev.php/logout')}}\">Se déconnecter</a></li>
          {% else %}
            <li class=\"list-inline-item\"><a href=\"{{ asset('app_dev.php/login')}}\" data-toggle=\"modal\" data-target=\"#login-modal\">Se connecter</a></li>
            <li class=\"list-inline-item\"><a href=\"{{ asset('app_dev.php/register')}}\">S'inscrire</a></li>
            <li class=\"list-inline-item\"><a href=\"{{ asset('app_dev.php/contact')}}\">Nous contacter</a></li>
          {% endif %}

        </ul>
      </div>
    </div>
  </div>
  <div id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Login\" aria-hidden=\"true\" class=\"modal fade\">
    <div class=\"modal-dialog modal-sm\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">Customer login</h5>
          <button type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\">×</span></button>
        </div>
        <div class=\"modal-body\">
          <form action=\"customer-orders.html\" method=\"post\">
            <div class=\"form-group\">
              <input id=\"email-modal\" type=\"text\" placeholder=\"email\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
              <input id=\"password-modal\" type=\"password\" placeholder=\"password\" class=\"form-control\">
            </div>
            <p class=\"text-center\">
              <button class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Log in</button>
            </p>
          </form>
          <p class=\"text-center text-muted\">Not registered yet?</p>
          <p class=\"text-center text-muted\"><a href=\"register.html\"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
        </div>
      </div>
    </div>
  </div>
</div>

{% endblock %}
", "::top.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\app/Resources\\views/top.html.twig");
    }
}
