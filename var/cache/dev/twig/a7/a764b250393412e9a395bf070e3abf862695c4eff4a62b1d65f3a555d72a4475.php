<?php

/* @JeremyFront/Faq/faq.html.twig */
class __TwigTemplate_e3d9612a7cabd9014fac6b6d5f69f697b2ddbc1a47e2e88a5a659a01f5879c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JeremyFront/Faq/faq.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyFront/Faq/faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyFront/Faq/faq.html.twig"));

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
        echo "FAQ
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
<div id=\"all\">
  <div id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_faq");
        echo "\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">FAQ</li>
            </ol>
          </nav>
        </div>
        <div class=\"col-lg-3\">
          <!--
          *** PAGES MENU ***
          _________________________________________________________
          -->
          <div class=\"card sidebar-menu mb-4\">
            <div class=\"card-header\">
              <h3 class=\"h4 card-title\">Informations</h3>
            </div>
            <div class=\"card-body\">
            <ul class=\"nav nav-pills flex-column\">
              <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_noussommes");
        echo "\" class=\"nav-link\">Qui sommes-nous ?</a></li>
              <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_contact");
        echo "\" class=\"nav-link\">Nous contacter</a></li>
              <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_faq");
        echo "\" class=\"nav-link\">FAQ</a></li>
              <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_mention");
        echo "\" class=\"nav-link\">Mentions légales</a></li>
              <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_cgv");
        echo "\" class=\"nav-link\">Conditions générales de vente</a></li>
            </ul>
            </div>
          </div>
        </div>
        <div class=\"col-lg-9\">
          <div id=\"contact\" class=\"box\">
            <h1>Foire aux questions</h1>
            <p class=\"lead\">La foire aux questions répondra aux questions génériques les plus posées afin des réponses qui nous l'espérons répondent à un maximum de vos interrogations.</p>
            <hr>
            <div id=\"accordion\">
              <div class=\"card border-primary mb-3\">
                <div id=\"headingOne\" class=\"card-header p-0 border-0\">
                  <h4 class=\"mb-0\"><a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\" class=\"btn btn-primary d-block text-left rounded-0\">1. Retour et remboursement</a></h4>
                </div>
                <div id=\"collapseOne\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\" class=\"collapse show\">
                  <div class=\"card-body\">
                    <p>Si vous souhaitez nous retourner un produit pour une quelconque raison.</p>
                    <ul>
                      <li>Article abimé.</li>
                      <li>Article ne correspondant pas à votre commande.</li>
                      <li>Mauvaise couleur.</li>
                      <li>Problème de taille.</li>
                    </ul>
                    <p>Contactez nous via le <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_contact");
        echo "\">formulaire de contact</a>.</p>
                  </div>
                </div>
              </div>
              <div class=\"card border-primary mb-3\">
                <div id=\"headingTwo\" class=\"card-header p-0 border-0\">
                  <h4 class=\"mb-0\"><a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\" class=\"btn btn-primary d-block text-left rounded-0\">2. J'ai oublié mon mot de passe</a></h4>
                </div>
                <div id=\"collapseTwo\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\" class=\"collapse\">

                  <div class=\"card-body\">Veuillez cliquer sur <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">mot de passe oublié</a> et inscrivez votre adresse email, ainsi un mot de passe provisoire vous sera attribué.</div>
                </div>
              </div>
              <div class=\"card border-primary\">
                <div id=\"headingThree\" class=\"card-header p-0 border-0\">
                  <h4 class=\"mb-0\"><a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\" class=\"btn btn-primary d-block text-left rounded-0\">3. Besoin d'aide supplémentaire</a></h4>
                </div>
                <div id=\"collapseThree\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\" class=\"collapse\">
                  <div class=\"card-body\">Si vous avez besoin d'aide supplémentaire ou d'information quelconque, n'hésitez pas à nous contacter via notre <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_contact");
        echo "\">formulaire de contact</a> , nous vous répondrons dans les meilleurs délais.</div>
                </div>
              </div>
            </div>
            <!-- /.accordion-->
          </div>
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
        return "@JeremyFront/Faq/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 78,  155 => 70,  142 => 60,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  80 => 16,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
FAQ
{% endblock %}

{% block section %}

<div id=\"all\">
  <div id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"{{ path('jeremy_front_faq') }}\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">FAQ</li>
            </ol>
          </nav>
        </div>
        <div class=\"col-lg-3\">
          <!--
          *** PAGES MENU ***
          _________________________________________________________
          -->
          <div class=\"card sidebar-menu mb-4\">
            <div class=\"card-header\">
              <h3 class=\"h4 card-title\">Informations</h3>
            </div>
            <div class=\"card-body\">
            <ul class=\"nav nav-pills flex-column\">
              <li><a href=\"{{ path('jeremy_front_noussommes') }}\" class=\"nav-link\">Qui sommes-nous ?</a></li>
              <li><a href=\"{{ path('jeremy_front_contact') }}\" class=\"nav-link\">Nous contacter</a></li>
              <li><a href=\"{{ path('jeremy_front_faq') }}\" class=\"nav-link\">FAQ</a></li>
              <li><a href=\"{{ path('jeremy_front_mention') }}\" class=\"nav-link\">Mentions légales</a></li>
              <li><a href=\"{{ path('jeremy_front_cgv') }}\" class=\"nav-link\">Conditions générales de vente</a></li>
            </ul>
            </div>
          </div>
        </div>
        <div class=\"col-lg-9\">
          <div id=\"contact\" class=\"box\">
            <h1>Foire aux questions</h1>
            <p class=\"lead\">La foire aux questions répondra aux questions génériques les plus posées afin des réponses qui nous l'espérons répondent à un maximum de vos interrogations.</p>
            <hr>
            <div id=\"accordion\">
              <div class=\"card border-primary mb-3\">
                <div id=\"headingOne\" class=\"card-header p-0 border-0\">
                  <h4 class=\"mb-0\"><a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\" class=\"btn btn-primary d-block text-left rounded-0\">1. Retour et remboursement</a></h4>
                </div>
                <div id=\"collapseOne\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\" class=\"collapse show\">
                  <div class=\"card-body\">
                    <p>Si vous souhaitez nous retourner un produit pour une quelconque raison.</p>
                    <ul>
                      <li>Article abimé.</li>
                      <li>Article ne correspondant pas à votre commande.</li>
                      <li>Mauvaise couleur.</li>
                      <li>Problème de taille.</li>
                    </ul>
                    <p>Contactez nous via le <a href=\"{{ path('jeremy_front_contact') }}\">formulaire de contact</a>.</p>
                  </div>
                </div>
              </div>
              <div class=\"card border-primary mb-3\">
                <div id=\"headingTwo\" class=\"card-header p-0 border-0\">
                  <h4 class=\"mb-0\"><a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\" class=\"btn btn-primary d-block text-left rounded-0\">2. J'ai oublié mon mot de passe</a></h4>
                </div>
                <div id=\"collapseTwo\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\" class=\"collapse\">

                  <div class=\"card-body\">Veuillez cliquer sur <a href=\"{{ path('fos_user_resetting_request') }}\">mot de passe oublié</a> et inscrivez votre adresse email, ainsi un mot de passe provisoire vous sera attribué.</div>
                </div>
              </div>
              <div class=\"card border-primary\">
                <div id=\"headingThree\" class=\"card-header p-0 border-0\">
                  <h4 class=\"mb-0\"><a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\" class=\"btn btn-primary d-block text-left rounded-0\">3. Besoin d'aide supplémentaire</a></h4>
                </div>
                <div id=\"collapseThree\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\" class=\"collapse\">
                  <div class=\"card-body\">Si vous avez besoin d'aide supplémentaire ou d'information quelconque, n'hésitez pas à nous contacter via notre <a href=\"{{ path('jeremy_front_contact') }}\">formulaire de contact</a> , nous vous répondrons dans les meilleurs délais.</div>
                </div>
              </div>
            </div>
            <!-- /.accordion-->
          </div>
        </div>
        <!-- /.col-lg-9-->
      </div>
    </div>
  </div>
</div>



{% endblock %}
", "@JeremyFront/Faq/faq.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\FrontBundle\\Resources\\views\\Faq\\faq.html.twig");
    }
}
