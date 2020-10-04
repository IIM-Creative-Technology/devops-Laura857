<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* wishlist/modifier.html.twig */
class __TwigTemplate_e8d4a749ea9f1d60cc5bb6cbffb354f22f61c1f6233871031d1ba5ac28975606 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/modifier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/modifier.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/modifier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "

\t\t<!-- formulaire de modification des informations personnelles de l'utilisateur -->

\t\t<head>
\t\t\t<meta charset=\"utf-8\">
\t\t\t<link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\"/>
\t\t</head>
\t\t<body>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"col-md-3 offset-md-2\"></div>
\t\t\t\t<div class=\"form_horizontal\">

\t\t\t\t\t";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 18, $this->source); })()), 'form_start');
            echo "

\t\t\t\t\t<div class=\"row justify-content-md-center\">

\t\t\t\t\t\t<div class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t<h1>Modifier votre profil</h1>
\t\t\t\t\t\t\t";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'row', ["label" => "Nom", "attr" => ["placeholder" => "nom", "autofocus" => "true"]]);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row justify-content-md-center\">
\t\t\t\t\t\t<div class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'row', ["label" => "Prénom", "attr" => ["placeholder" => "prénom"]]);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row justify-content-md-center\">
\t\t\t\t\t\t<div class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 34, $this->source); })()), "pseudo", [], "any", false, false, false, 34), 'row', ["label" => "Pseudo", "attr" => ["placeholder" => "pseudo"]]);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row justify-content-md-center\">
\t\t\t\t\t\t<div class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'row', ["label" => "Email", "attr" => ["placeholder" => "email"]]);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-12 offset-md-8\">
\t\t\t\t\t<br>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark\">Valider</button>
\t\t\t\t</div>
\t\t\t\t";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 48, $this->source); })()), 'form_end');
            echo "
\t\t\t</div>

\t\t</body>

\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 48,  122 => 39,  114 => 34,  106 => 29,  98 => 24,  89 => 18,  74 => 5,  71 => 4,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{%form_theme our_form 'bootstrap_4_layout.html.twig'%}
{% block body %}
\t{% if app.user %}


\t\t<!-- formulaire de modification des informations personnelles de l'utilisateur -->

\t\t<head>
\t\t\t<meta charset=\"utf-8\">
\t\t\t<link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\"/>
\t\t</head>
\t\t<body>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"col-md-3 offset-md-2\"></div>
\t\t\t\t<div class=\"form_horizontal\">

\t\t\t\t\t{{ form_start(our_form) }}

\t\t\t\t\t<div class=\"row justify-content-md-center\">

\t\t\t\t\t\t<div class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t<h1>Modifier votre profil</h1>
\t\t\t\t\t\t\t{{ form_row(our_form.name, {'label': 'Nom', 'attr':{'placeholder': 'nom', 'autofocus': 'true'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row justify-content-md-center\">
\t\t\t\t\t\t<div class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t{{ form_row(our_form.prenom, {'label': 'Prénom', 'attr':{'placeholder': 'prénom'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row justify-content-md-center\">
\t\t\t\t\t\t<div class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t{{ form_row(our_form.pseudo, {'label': 'Pseudo', 'attr':{'placeholder': 'pseudo'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row justify-content-md-center\">
\t\t\t\t\t\t<div class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t{{ form_row(our_form.email, {'label': 'Email', 'attr':{'placeholder': 'email'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-12 offset-md-8\">
\t\t\t\t\t<br>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark\">Valider</button>
\t\t\t\t</div>
\t\t\t\t{{ form_end(our_form) }}
\t\t\t</div>

\t\t</body>

\t{% endif %}
{% endblock %}
", "wishlist/modifier.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/modifier.html.twig");
    }
}
