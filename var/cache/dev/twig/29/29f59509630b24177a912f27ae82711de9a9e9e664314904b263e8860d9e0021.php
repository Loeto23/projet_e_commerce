<?php

/* @JeremyFront/Mention/mention.html.twig */
class __TwigTemplate_8b6732eda93167f90a42c982e8124e13b2f2083ce68f63f64e3049db33739c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JeremyFront/Mention/mention.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyFront/Mention/mention.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeremyFront/Mention/mention.html.twig"));

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
        echo "Mentions légales
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_mention");
        echo "\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Mentions légales</li>
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

        <p style=\"text-align:center\"><span style=\"color:#FF0000\"><span style=\"background-color:#D3D3D3\">Si vous utilisez nos Mentions Légales, vous vous engagez à laisser les liens </span><strong><span style=\"background-color:#D3D3D3\">Crédit sans en modifier ni les liens ni les ancres.</span></strong><span style=\"background-color:#D3D3D3\"> </span></span><br />
        <span style=\"color:#FF0000\"><span style=\"background-color:#D3D3D3\">Par avance merci pour votre compréhension et le respect du travail effectué par toute l'équipe</span></span></p>

        <p style=\"text-align:center\">MENTIONS LEGALES :</p>

        <p style=\"text-align:justify\">Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : <a href=\"http://www.loeto-webproject.fr/ela\" target=\"_blank\">www.loeto-webproject.fr/ela</a> les informations suivantes :</p>

        <p style=\"text-align:justify\"><strong>1. Informations légales :</strong></p>

        <p style=\"text-align:justify\">Statut du propriétaire : <strong>particulier</strong><br />
        Le Propriétaire est : <strong>Jérémy BATILLIOT</strong><br />
        Adresse postale du propriétaire : <strong>73 Avenue Gambetta, Batiment 7 Apt 712 94100 Saint-Maur des fossés</strong><br />
         <br />
        Le Créateur du site est : <strong>loeto-webproject/ela</strong><br />
        Le Responsable de la  publication est : <strong>BATILLIOT Jérémy</strong><br />
        Contacter le responsable de la publication : <strong>jeremy.batilliot23@gmail.com</strong><br />
        Le responsable de la publication est une<strong> personne physique</strong><br />
        <br />
        Le Webmaster est  : <strong>BATILLIOT Jérémy</strong><br />
        Contacter le Webmaster :  <strong><a href=\"mailto:jeremy.batilliot23@gmail.com?subject=Contact a partir des mentions lÃ©gales via le site www.loeto-webproject.fr/ela\">jeremy.batilliot23@gmail.com</a></strong><br />
        L’hebergeur du site est : <strong>BATILLIOT Jérémy 73 avenue Gambetta 94100 ST MAUR DES FOSSES</strong><br />
        <strong><u>CREDIT :</u> </strong> Les mentions légales ont étés générées par<strong> <a href=\"https://www.generer-mentions-legales.com/generateur-mentions-legales.html\" target=\"_blank\">générateur de mentions legales</a></strong><br />
        Une eau toujours potable avec les <strong><a href=\"https://www.chamarrel.com/perles-de-ceramique-em-pxl-29_37.html\">perles de céramique</a></strong></p>

        <p style=\"text-align:justify\"> </p>

        <p style=\"text-align:justify\"><strong>2. Présentation et principe :</strong></p>

        <p style=\"text-align:justify\">Est désigné ci-après : <strong>Utilisateur</strong>, tout internaute se connectant et utilisant le site susnommé : <a href=\"http://www.loeto-webproject.fr/ela\" target=\"_blank\">www.loeto-webproject.fr/ela</a>.<br />
        Le site <strong>www.loeto-webproject.fr/ela</strong><strong> </strong>regroupe un ensemble de services, dans l'état,  mis à la disposition des utilisateurs. Il est ici précisé que ces derniers doivent rester courtois et faire preuve de bonne foi tant envers les autres utilisateurs qu'envers le webmaster du site www.loeto-webproject.fr/ela. Le site www.loeto-webproject.fr/ela est mis à jour régulièrement par BATILLIOT Jérémy.<br />
        Jérémy BATILLIOT s’efforce de fournir sur le site www.loeto-webproject.fr/ela des informations les plus précises possibles (sous réserve de modifications apportées depuis leur mise en ligne), mais ne saurait garantir l'exactitude, la complétude et l'actualité des informations diffusées sur son site, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations. En conséquence, l'utilisateur reconnaît utiliser ces informations données (à titre indicatif, non exhaustives et susceptibles d'évoluer) sous sa responsabilité exclusive.</p>

        <p style=\"text-align:justify\"> </p>

        <p style=\"text-align:justify\"><strong>3. Accessibilité :</strong><br />
        <br />
        Le site www.loeto-webproject.fr/ela est par principe accessible aux utilisateurs 24/24h, 7/7j, sauf interruption, programmée ou non, pour les besoins de sa maintenance ou en cas de force majeure. En cas d’impossibilité d’accès au service, www.loeto-webproject.fr/ela s’engage à faire son maximum afin de rétablir l’accès au service et s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.  N’étant soumis qu’à une obligation de moyen, www.loeto-webproject.fr/ela ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant d’une indisponibilité du service.</p>

        <p style=\"text-align:justify\"> </p>

        <p style=\"text-align:justify\"><strong>4. Propriété intellectuelle :</strong></p>

        <p style=\"text-align:justify\"><br />
        Jérémy BATILLIOT est propriétaire exclusif de tous les droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, tant sur la structure que sur les textes, images, graphismes, logo, icônes, sons, logiciels…<br />
        Toute reproduction totale ou partielle du site www.loeto-webproject.fr/ela, représentation, modification, publication, adaptation totale ou partielle de l'un quelconque de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Jérémy BATILLIOT, propriétaire du site à l'email : jeremy.batilliot23@gmail.com, à défaut elle sera considérée comme constitutive d’une contrefaçon et passible de poursuite conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

        <p style=\"text-align:justify\"><br />
        <strong>5. Liens hypertextes et cookies :</strong><br />
        <br />
        Le site www.loeto-webproject.fr/ela contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation de Jérémy BATILLIOT. Cependant, Jérémy BATILLIOT n’a pas la possibilité de vérifier l'ensemble du contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quand aux risques éventuels de contenus illicites.<br />
        L’utilisateur est informé que lors de ses visites sur le site www.loeto-webproject.fr/ela, un ou des cookies sont susceptibles de s’installer automatiquement sur son ordinateur par l'intermédiaire de son logiciel de navigation. Un cookie est un bloc de données qui ne permet pas d'identifier l'utilisateur, mais qui enregistre des informations relatives à la navigation de celui-ci sur le site. <br />
        Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de la refuser de la manière décrite à l’adresse suivante : <a href=\"http://www.cnil.fr\">www.cnil.fr</a>. L’utilisateur peut toutefois configurer le navigateur de son ordinateur pour refuser l’installation des cookies, sachant que le refus d'installation d'un cookie peut entraîner l’impossibilité d’accéder à certains services. Pour tout bloquage des cookies, tapez dans votre moteur de recherche : bloquage des cookies sous IE ou firefox et suivez les instructions en fonction de votre version.</p>

        <p style=\"text-align:justify\"><br />
        <strong>6. Protection des biens et des personnes - gestion des données personnelles :</strong><br />
        <br />
        En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>

        <p style=\"text-align:justify\">Sur le site www.loeto-webproject.fr/ela, Jérémy BATILLIOT ne collecte des informations personnelles ( suivant l'article 4 loi n°78-17 du 06 janvier 1978) relatives à l'utilisateur que pour le besoin de certains services proposés par le site www.loeto-webproject.fr/ela. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site www.loeto-webproject.fr/ela l’obligation ou non de fournir ces informations.<br />
        Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à www.loeto-webproject.fr/ela par email : <strong><a href=\"mailto:jeremy.batilliot23@gmail.com?subject=Contact ï¿½ partir des mentions lï¿½gales via le site www.loeto-webproject.fr/ela\">jeremy.batilliot23@gmail.com</a></strong> ou par écrit dûment signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>

        <p style=\"text-align:justify\">Aucune information personnelle de l'utilisateur du site www.loeto-webproject.fr/ela n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat du site www.loeto-webproject.fr/ela et de ses droits autorise Jérémy BATILLIOT à transmettre les dites informations à l'éventuel acquéreur qui serait à son tour tenu à la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site www.loeto-webproject.fr/ela.<br />
        Le site www.loeto-webproject.fr/ela est en conformité avec le RGPD voir notre politique RGPD  loeto-webproject.</p>

        <p style=\"text-align:justify\">Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>


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
        return "@JeremyFront/Mention/mention.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  80 => 16,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
Mentions légales
{% endblock %}

{% block section %}

<div id=\"all\">
  <div id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"{{ path('jeremy_front_mention') }}\">Accueil</a></li>
              <li aria-current=\"page\" class=\"breadcrumb-item active\">Mentions légales</li>
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

        <p style=\"text-align:center\"><span style=\"color:#FF0000\"><span style=\"background-color:#D3D3D3\">Si vous utilisez nos Mentions Légales, vous vous engagez à laisser les liens </span><strong><span style=\"background-color:#D3D3D3\">Crédit sans en modifier ni les liens ni les ancres.</span></strong><span style=\"background-color:#D3D3D3\"> </span></span><br />
        <span style=\"color:#FF0000\"><span style=\"background-color:#D3D3D3\">Par avance merci pour votre compréhension et le respect du travail effectué par toute l'équipe</span></span></p>

        <p style=\"text-align:center\">MENTIONS LEGALES :</p>

        <p style=\"text-align:justify\">Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : <a href=\"http://www.loeto-webproject.fr/ela\" target=\"_blank\">www.loeto-webproject.fr/ela</a> les informations suivantes :</p>

        <p style=\"text-align:justify\"><strong>1. Informations légales :</strong></p>

        <p style=\"text-align:justify\">Statut du propriétaire : <strong>particulier</strong><br />
        Le Propriétaire est : <strong>Jérémy BATILLIOT</strong><br />
        Adresse postale du propriétaire : <strong>73 Avenue Gambetta, Batiment 7 Apt 712 94100 Saint-Maur des fossés</strong><br />
         <br />
        Le Créateur du site est : <strong>loeto-webproject/ela</strong><br />
        Le Responsable de la  publication est : <strong>BATILLIOT Jérémy</strong><br />
        Contacter le responsable de la publication : <strong>jeremy.batilliot23@gmail.com</strong><br />
        Le responsable de la publication est une<strong> personne physique</strong><br />
        <br />
        Le Webmaster est  : <strong>BATILLIOT Jérémy</strong><br />
        Contacter le Webmaster :  <strong><a href=\"mailto:jeremy.batilliot23@gmail.com?subject=Contact a partir des mentions lÃ©gales via le site www.loeto-webproject.fr/ela\">jeremy.batilliot23@gmail.com</a></strong><br />
        L’hebergeur du site est : <strong>BATILLIOT Jérémy 73 avenue Gambetta 94100 ST MAUR DES FOSSES</strong><br />
        <strong><u>CREDIT :</u> </strong> Les mentions légales ont étés générées par<strong> <a href=\"https://www.generer-mentions-legales.com/generateur-mentions-legales.html\" target=\"_blank\">générateur de mentions legales</a></strong><br />
        Une eau toujours potable avec les <strong><a href=\"https://www.chamarrel.com/perles-de-ceramique-em-pxl-29_37.html\">perles de céramique</a></strong></p>

        <p style=\"text-align:justify\"> </p>

        <p style=\"text-align:justify\"><strong>2. Présentation et principe :</strong></p>

        <p style=\"text-align:justify\">Est désigné ci-après : <strong>Utilisateur</strong>, tout internaute se connectant et utilisant le site susnommé : <a href=\"http://www.loeto-webproject.fr/ela\" target=\"_blank\">www.loeto-webproject.fr/ela</a>.<br />
        Le site <strong>www.loeto-webproject.fr/ela</strong><strong> </strong>regroupe un ensemble de services, dans l'état,  mis à la disposition des utilisateurs. Il est ici précisé que ces derniers doivent rester courtois et faire preuve de bonne foi tant envers les autres utilisateurs qu'envers le webmaster du site www.loeto-webproject.fr/ela. Le site www.loeto-webproject.fr/ela est mis à jour régulièrement par BATILLIOT Jérémy.<br />
        Jérémy BATILLIOT s’efforce de fournir sur le site www.loeto-webproject.fr/ela des informations les plus précises possibles (sous réserve de modifications apportées depuis leur mise en ligne), mais ne saurait garantir l'exactitude, la complétude et l'actualité des informations diffusées sur son site, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations. En conséquence, l'utilisateur reconnaît utiliser ces informations données (à titre indicatif, non exhaustives et susceptibles d'évoluer) sous sa responsabilité exclusive.</p>

        <p style=\"text-align:justify\"> </p>

        <p style=\"text-align:justify\"><strong>3. Accessibilité :</strong><br />
        <br />
        Le site www.loeto-webproject.fr/ela est par principe accessible aux utilisateurs 24/24h, 7/7j, sauf interruption, programmée ou non, pour les besoins de sa maintenance ou en cas de force majeure. En cas d’impossibilité d’accès au service, www.loeto-webproject.fr/ela s’engage à faire son maximum afin de rétablir l’accès au service et s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.  N’étant soumis qu’à une obligation de moyen, www.loeto-webproject.fr/ela ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant d’une indisponibilité du service.</p>

        <p style=\"text-align:justify\"> </p>

        <p style=\"text-align:justify\"><strong>4. Propriété intellectuelle :</strong></p>

        <p style=\"text-align:justify\"><br />
        Jérémy BATILLIOT est propriétaire exclusif de tous les droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, tant sur la structure que sur les textes, images, graphismes, logo, icônes, sons, logiciels…<br />
        Toute reproduction totale ou partielle du site www.loeto-webproject.fr/ela, représentation, modification, publication, adaptation totale ou partielle de l'un quelconque de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Jérémy BATILLIOT, propriétaire du site à l'email : jeremy.batilliot23@gmail.com, à défaut elle sera considérée comme constitutive d’une contrefaçon et passible de poursuite conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

        <p style=\"text-align:justify\"><br />
        <strong>5. Liens hypertextes et cookies :</strong><br />
        <br />
        Le site www.loeto-webproject.fr/ela contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation de Jérémy BATILLIOT. Cependant, Jérémy BATILLIOT n’a pas la possibilité de vérifier l'ensemble du contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quand aux risques éventuels de contenus illicites.<br />
        L’utilisateur est informé que lors de ses visites sur le site www.loeto-webproject.fr/ela, un ou des cookies sont susceptibles de s’installer automatiquement sur son ordinateur par l'intermédiaire de son logiciel de navigation. Un cookie est un bloc de données qui ne permet pas d'identifier l'utilisateur, mais qui enregistre des informations relatives à la navigation de celui-ci sur le site. <br />
        Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de la refuser de la manière décrite à l’adresse suivante : <a href=\"http://www.cnil.fr\">www.cnil.fr</a>. L’utilisateur peut toutefois configurer le navigateur de son ordinateur pour refuser l’installation des cookies, sachant que le refus d'installation d'un cookie peut entraîner l’impossibilité d’accéder à certains services. Pour tout bloquage des cookies, tapez dans votre moteur de recherche : bloquage des cookies sous IE ou firefox et suivez les instructions en fonction de votre version.</p>

        <p style=\"text-align:justify\"><br />
        <strong>6. Protection des biens et des personnes - gestion des données personnelles :</strong><br />
        <br />
        En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>

        <p style=\"text-align:justify\">Sur le site www.loeto-webproject.fr/ela, Jérémy BATILLIOT ne collecte des informations personnelles ( suivant l'article 4 loi n°78-17 du 06 janvier 1978) relatives à l'utilisateur que pour le besoin de certains services proposés par le site www.loeto-webproject.fr/ela. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site www.loeto-webproject.fr/ela l’obligation ou non de fournir ces informations.<br />
        Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à www.loeto-webproject.fr/ela par email : <strong><a href=\"mailto:jeremy.batilliot23@gmail.com?subject=Contact ï¿½ partir des mentions lï¿½gales via le site www.loeto-webproject.fr/ela\">jeremy.batilliot23@gmail.com</a></strong> ou par écrit dûment signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>

        <p style=\"text-align:justify\">Aucune information personnelle de l'utilisateur du site www.loeto-webproject.fr/ela n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat du site www.loeto-webproject.fr/ela et de ses droits autorise Jérémy BATILLIOT à transmettre les dites informations à l'éventuel acquéreur qui serait à son tour tenu à la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site www.loeto-webproject.fr/ela.<br />
        Le site www.loeto-webproject.fr/ela est en conformité avec le RGPD voir notre politique RGPD  loeto-webproject.</p>

        <p style=\"text-align:justify\">Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>


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
", "@JeremyFront/Mention/mention.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\FrontBundle\\Resources\\views\\Mention\\mention.html.twig");
    }
}
