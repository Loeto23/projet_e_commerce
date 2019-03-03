<?php

/* @JeremyFront/Noussommes/nousommes.html.twig */
class __TwigTemplate_ec2513e2330a20bfcd9f5e4db9da543e56b9b3f8a476af7384a91965fcf3beb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JeremyFront/Noussommes/nousommes.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyFront/Noussommes/nousommes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyFront/Noussommes/nousommes.html.twig"));

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
        echo "Qui sommes-nous ?
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_noussommes");
        echo "\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Qui sommes-nous ?</li>
            </ol>
          </nav>
        </div>
        <div class=\"col-lg-3\">

          <div class=\"card sidebar-menu mb-4\">
            <div class=\"card-header\">
              <h3 class=\"h4 card-title\">Informations</h3>
            </div>
            <div class=\"card-body\">
              <ul class=\"nav nav-pills flex-column\">
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_noussommes");
        echo "\" class=\"nav-link\">Qui sommes-nous ?</a></li>
                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_contact");
        echo "\" class=\"nav-link\">Nous contacter</a></li>
                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_faq");
        echo "\" class=\"nav-link\">FAQ</a></li>
                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_mention");
        echo "\" class=\"nav-link\">Mentions légales</a></li>
                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_cgv");
        echo "\" class=\"nav-link\">Conditions générales de vente</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"col-lg-9\">
          <div id=\"text-page\" class=\"box\">
            <h1>Qui Sommes-Nous ?</h1>
            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. In turpis pulvinar facilisis. Ut felis.</p>
            <h2>Lorem Ipsum</h2>
            <ol>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>
            <blockquote class=\"blockquote\">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
            </blockquote>
            <h3>Header Level 3</h3>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>
            <hr>
            <h2>Images</h2>
            <div class=\"row\">
              <div class=\"col-md-4\">
                <p class=\"text-center\"><img src=\"img/detailsquare.jpg\" alt=\"\" class=\"img-circle img-fluid\"></p>
                <p class=\"text-center\">circle</p>
              </div>
              <div class=\"col-md-4\">
                <p class=\"text-center\"><img src=\"img/detailsquare.jpg\" alt=\"\" class=\"img-thumbnail img-fluid\"></p>
                <p class=\"text-center\">thumbnail</p>
              </div>
              <div class=\"col-md-4\">
                <p class=\"text-center\"><img src=\"img/detailsquare.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"></p>
                <p class=\"text-center\">rounded</p>
              </div>
            </div>

          </div>
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
        return "@JeremyFront/Noussommes/nousommes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  80 => 16,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
Qui sommes-nous ?
{% endblock %}

{% block section %}

<div id=\"all\">
  <div id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"{{ path('jeremy_front_noussommes') }}\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Qui sommes-nous ?</li>
            </ol>
          </nav>
        </div>
        <div class=\"col-lg-3\">

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
          <div id=\"text-page\" class=\"box\">
            <h1>Qui Sommes-Nous ?</h1>
            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. In turpis pulvinar facilisis. Ut felis.</p>
            <h2>Lorem Ipsum</h2>
            <ol>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>
            <blockquote class=\"blockquote\">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
            </blockquote>
            <h3>Header Level 3</h3>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>
            <hr>
            <h2>Images</h2>
            <div class=\"row\">
              <div class=\"col-md-4\">
                <p class=\"text-center\"><img src=\"img/detailsquare.jpg\" alt=\"\" class=\"img-circle img-fluid\"></p>
                <p class=\"text-center\">circle</p>
              </div>
              <div class=\"col-md-4\">
                <p class=\"text-center\"><img src=\"img/detailsquare.jpg\" alt=\"\" class=\"img-thumbnail img-fluid\"></p>
                <p class=\"text-center\">thumbnail</p>
              </div>
              <div class=\"col-md-4\">
                <p class=\"text-center\"><img src=\"img/detailsquare.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"></p>
                <p class=\"text-center\">rounded</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>


{% endblock %}
", "@JeremyFront/Noussommes/nousommes.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\FrontBundle\\Resources\\views\\Noussommes\\nousommes.html.twig");
    }
}
