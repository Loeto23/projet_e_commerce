<?php

/* ::nav.html.twig */
class __TwigTemplate_3ac1dfe087f633fa8a0fbd28d656051186069864e92786686866b8fd17a2141c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

        // line 1
        echo "<body>
<!-- Navigation -->
 <nav class=\"navbar-inverse\" role=\"navigation\">
 <div class=\"container-fluid\">

 <div class=\"navbar-header\">
 <button type=\"button\" class=\"navbar-toggle collapsed\" datatoggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
 <span class=\"sr-only\">Toggle navigation</span>
 <span class=\"icon-bar\"></span>
 <span class=\"icon-bar\"></span>
 <span class=\"icon-bar\"></span>
 </button>
 <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_homepage");
        echo "\">Ela | </a>
 </div>

 <div class=\"collapse navbar-collapse\" id=\"bs-example-navbarcollapse-1\">
 </div>
 </div>
 <ul class=\"nav\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"#\">Accueil</a>
  </li>
  <div class=\"dropdown-menu\">
  <a class=\"dropdown-item\" href=\"#\">Service 1</a>
  <a class=\"dropdown-item\" href=\"#\">Autre service</a>
  <a class=\"dropdown-item\" href=\"#\">Dernier service</a>
</div>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">A propos</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Services</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Contact</a>
  </li>
<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter </a></li>
<li class=\"nav-item\"><a class=\"nav-link href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire' </a></li>
 </ul>

 <div class=\"dropdown\">
   <button class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Services</button>
   <div class=\"dropdown-menu\">
     <button class=\"dropdown-item\" href=\"#\">Service 1</button>
     <button class=\"dropdown-item\" href=\"#\">Autre service</button>
     <button class=\"dropdown-item\" href=\"#\">Dernier Service</button>
   </div>
 </div>

</nav>





<div class=\"collapse navbar-collapse\" id=\"bs-example-navbarcollapse-1\">
<ul class=\"nav navbar-nav\">
 <li class=\"dropdown\">
 <a href=\"#\" class=\"active dropdown-toggle\" datatoggle=\"dropdown\">Categories <span class=\"caret\"></span></a>
 <ul class=\"dropdown-menu\" role=\"menu\">
 <li><a href=\"category.html\">Apparel &amp; Accessories</
a></li>
 <li><a href=\"category.html\">Baby Products</a></li>
 <li><a href=\"category.html\">Beauty &amp; Health</a></
li>
 <li><a href=\"category.html\">Electronics</a></li>
 <li><a href=\"category.html\">Furniture</a></li>
 <li><a href=\"category.html\">Home &amp; Garden</a></li>
 <li><a href=\"category.html\">Luggage &amp; Bags</a></li>
 <li><a href=\"category.html\">Shoes</a></li>
 <li><a href=\"category.html\">Sports &amp;
Entertainment</a></li>
 <li><a href=\"category.html\">Watches</a></li>
 <li class=\"divider\"></li>
 <li><a href=\"ecommerce.html\">All Categories</a></li>
 </ul>
 </li>
 <li><a href=\"#\">Link</a></li>
 <li><a href=\"#\">Link</a></li>
 </ul>

</body>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 38,  66 => 37,  39 => 13,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
<!-- Navigation -->
 <nav class=\"navbar-inverse\" role=\"navigation\">
 <div class=\"container-fluid\">

 <div class=\"navbar-header\">
 <button type=\"button\" class=\"navbar-toggle collapsed\" datatoggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
 <span class=\"sr-only\">Toggle navigation</span>
 <span class=\"icon-bar\"></span>
 <span class=\"icon-bar\"></span>
 <span class=\"icon-bar\"></span>
 </button>
 <a class=\"navbar-brand\" href=\"{{ path('jeremy_front_homepage') }}\">Ela | </a>
 </div>

 <div class=\"collapse navbar-collapse\" id=\"bs-example-navbarcollapse-1\">
 </div>
 </div>
 <ul class=\"nav\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"#\">Accueil</a>
  </li>
  <div class=\"dropdown-menu\">
  <a class=\"dropdown-item\" href=\"#\">Service 1</a>
  <a class=\"dropdown-item\" href=\"#\">Autre service</a>
  <a class=\"dropdown-item\" href=\"#\">Dernier service</a>
</div>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">A propos</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Services</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Contact</a>
  </li>
<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Se connecter </a></li>
<li class=\"nav-item\"><a class=\"nav-link href=\"{{ path('fos_user_registration_register') }}\">S'inscrire' </a></li>
 </ul>

 <div class=\"dropdown\">
   <button class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Services</button>
   <div class=\"dropdown-menu\">
     <button class=\"dropdown-item\" href=\"#\">Service 1</button>
     <button class=\"dropdown-item\" href=\"#\">Autre service</button>
     <button class=\"dropdown-item\" href=\"#\">Dernier Service</button>
   </div>
 </div>

</nav>





<div class=\"collapse navbar-collapse\" id=\"bs-example-navbarcollapse-1\">
<ul class=\"nav navbar-nav\">
 <li class=\"dropdown\">
 <a href=\"#\" class=\"active dropdown-toggle\" datatoggle=\"dropdown\">Categories <span class=\"caret\"></span></a>
 <ul class=\"dropdown-menu\" role=\"menu\">
 <li><a href=\"category.html\">Apparel &amp; Accessories</
a></li>
 <li><a href=\"category.html\">Baby Products</a></li>
 <li><a href=\"category.html\">Beauty &amp; Health</a></
li>
 <li><a href=\"category.html\">Electronics</a></li>
 <li><a href=\"category.html\">Furniture</a></li>
 <li><a href=\"category.html\">Home &amp; Garden</a></li>
 <li><a href=\"category.html\">Luggage &amp; Bags</a></li>
 <li><a href=\"category.html\">Shoes</a></li>
 <li><a href=\"category.html\">Sports &amp;
Entertainment</a></li>
 <li><a href=\"category.html\">Watches</a></li>
 <li class=\"divider\"></li>
 <li><a href=\"ecommerce.html\">All Categories</a></li>
 </ul>
 </li>
 <li><a href=\"#\">Link</a></li>
 <li><a href=\"#\">Link</a></li>
 </ul>

</body>
", "::nav.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\app/Resources\\views/nav.html.twig");
    }
}
