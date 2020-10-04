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

/* security/mdpOublie.html.twig */
class __TwigTemplate_8cb896bf1dbb26e520458fbb8e8aa8d32aece189c7ccd1128c846ae5fe47ff3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/mdpOublie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/mdpOublie.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/mdpOublie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\"/>
\t</head>
\t<div>
\t\t<form class=\"formulaire\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mdpOublie");
        echo "\" method=\"post\">
\t\t <h1>Mot de passe oublié</h1>
\t\t <div class=\"container\">
\t\t\t ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "\t\t\t\t <div class=\"alert alert-danger\">
\t\t\t\t\t\t ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t </div>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t </div>
\t\t <p>Entrer votre adresse mail. Vous allez recevoir un email avec un mot de passe provisoire.</p>
\t\t\t<div class=\"form_group\">
\t \t\t\t ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
\t \t\t\t\t <div class=\"row justify-content-md-center\">
\t \t\t\t\t\t\t ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'form', ["attr" => ["placeholder" => "Votre email", "autofocus" => "true", "type" => "email"]]);
        echo "
\t \t\t\t\t\t</div>
\t \t\t\t ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t <br>
\t\t\t\t\t <button type=\"submit\" class=\"btn btn-dark\">Valider</button>
\t\t\t\t</div>
\t\t </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/mdpOublie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  110 => 23,  105 => 21,  100 => 18,  91 => 15,  88 => 14,  84 => 13,  78 => 10,  71 => 5,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}

{% block body %}
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\"/>
\t</head>
\t<div>
\t\t<form class=\"formulaire\" action=\"{{ path('mdpOublie')}}\" method=\"post\">
\t\t <h1>Mot de passe oublié</h1>
\t\t <div class=\"container\">
\t\t\t {% for message in app.flashes('warning') %}
\t\t\t\t <div class=\"alert alert-danger\">
\t\t\t\t\t\t {{ message }}
\t\t\t\t </div>
\t\t\t {% endfor %}
\t\t </div>
\t\t <p>Entrer votre adresse mail. Vous allez recevoir un email avec un mot de passe provisoire.</p>
\t\t\t<div class=\"form_group\">
\t \t\t\t {{ form_start(form) }}
\t \t\t\t\t <div class=\"row justify-content-md-center\">
\t \t\t\t\t\t\t {{ form(form.email, {'attr':{'placeholder': 'Votre email', 'autofocus': 'true', type:'email'}}) }}
\t \t\t\t\t\t</div>
\t \t\t\t {{ form_end(form) }}
\t\t\t\t\t <br>
\t\t\t\t\t <button type=\"submit\" class=\"btn btn-dark\">Valider</button>
\t\t\t\t</div>
\t\t </form>
</div>
{% endblock %}
", "security/mdpOublie.html.twig", "/Users/laura/Desktop/wishlist/templates/security/mdpOublie.html.twig");
    }
}
