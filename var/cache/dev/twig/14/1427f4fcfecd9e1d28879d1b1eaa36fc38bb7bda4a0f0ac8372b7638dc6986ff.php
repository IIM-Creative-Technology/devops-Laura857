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

/* wishlist/contact.html.twig */
class __TwigTemplate_cc8d3cd30b01f28a87a7a149ffe3ad8bc9e4fdd523e51cac94fe70e759732f55 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/contact.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/contact.html.twig", 1);
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
        echo "
\t<!-- formulaire de contact
\t    contact par mail directement depuis une boite mail
\t    contact par le formulaire interne du site
\t    -->

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\"/>
\t</head>
\t<body>
\t\t<div id=\"container\">
\t\t\t<div class=\"formulaire\">
\t\t\t\t<h1 style=\"display:inline;\">Nous contacter</h1>
\t\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'row', ["label" => "Nom", "attr" => ["placeholder" => "nom", "autofocus" => "true"]]);
        echo "
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'row', ["label" => "Email", "attr" => ["placeholder" => "email"]]);
        echo "
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 22, $this->source); })()), "texte", [], "any", false, false, false, 22), 'row', ["label" => "Message", "attr" => ["placeholder" => "message"]]);
        echo "
\t\t\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
\t\t\t<input type=\"submit\" id=\"submit\" value=\"Valider\">
\t\t\t<p style=\"text-align:center; margin-top:30px\">Vous pouvez également nous contacter directement par mail en cliquant
\t\t\t\t<a href=\"mailto:wishlist.wewish@gmail.com\">ici</a>
\t\t\t</p>
\t\t</div>
\t\t</div>
\t</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  71 => 4,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{%form_theme our_form 'bootstrap_4_layout.html.twig'%}
{% block body %}

\t<!-- formulaire de contact
\t    contact par mail directement depuis une boite mail
\t    contact par le formulaire interne du site
\t    -->

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\"/>
\t</head>
\t<body>
\t\t<div id=\"container\">
\t\t\t<div class=\"formulaire\">
\t\t\t\t<h1 style=\"display:inline;\">Nous contacter</h1>
\t\t\t<div class=\"form-group\">
\t\t\t{{ form_start(our_form) }}
\t\t\t\t{{ form_row(our_form.name, {'label': 'Nom', 'attr':{'placeholder': 'nom', 'autofocus': 'true'}}) }}
\t\t\t\t{{ form_row(our_form.email, {'label': 'Email', 'attr':{'placeholder': 'email'}}) }}
\t\t\t\t{{ form_row(our_form.texte, {'label': 'Message', 'attr':{'placeholder': 'message'}}) }}
\t\t\t{{ form_end(our_form) }}
\t\t\t<input type=\"submit\" id=\"submit\" value=\"Valider\">
\t\t\t<p style=\"text-align:center; margin-top:30px\">Vous pouvez également nous contacter directement par mail en cliquant
\t\t\t\t<a href=\"mailto:wishlist.wewish@gmail.com\">ici</a>
\t\t\t</p>
\t\t</div>
\t\t</div>
\t</body>
{% endblock %}
", "wishlist/contact.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/contact.html.twig");
    }
}
