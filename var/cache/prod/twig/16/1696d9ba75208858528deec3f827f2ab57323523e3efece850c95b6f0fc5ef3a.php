<?php

/* ::top.html.twig */
class __TwigTemplate_1acaf30e3cce5807b271f1c122cf43c9726f8ff4330e1e5aa35693f75f1a7124 extends Twig_Template
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
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "
<header class=\"header mb-5\">

<div id=\"top\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offer mb-3 mb-lg-0 \"><a href=\"#\" class=\"btn btn-success btn-sm\">Offre du jour</a><a href=\"\" class=\"ml-1\">10% de réduction dés 50€ d'achat</a></div>
      <div class=\"col-lg-6 text-center text-lg-right\">
        <ul class=\"menu list-inline mb-0\">
          <li class=\"list-inline-item\"><a href=\"login\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a></li>
          <li class=\"list-inline-item\"><a href=\"register\">Register</a></li>
          <li class=\"list-inline-item\"><a href=\"contact.html\">Contact</a></li>
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

";
    }

    public function getTemplateName()
    {
        return "::top.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::top.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\app/Resources\\views/top.html.twig");
    }
}
