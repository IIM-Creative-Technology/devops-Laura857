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

/* wishlist/anniversaire.html.twig */
class __TwigTemplate_6890bfc7ba8dcacf9c743c27a5f18f1b44dab9428c726fb8ded24a668c73142a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/anniversaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/anniversaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/anniversaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main.css"), "html", null, true);
        echo "\">


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<body>

\t\t
\t\t<div class=\"theme-container\">
\t\t\t
\t\t\t<h1 style=\"text-align: center; padding:30px\">anniversaire</h1>
\t\t\t<a href=";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist");
        echo " type=\"button\" class=\"btn btn-dark\">retour</a>
\t\t\t

\t\t\t<div class=\"grid-container\">
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "\t\t\t\t\t<article class=\"location-listing\">

\t\t\t\t\t\t<h1>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</h1>

\t\t\t\t\t\t<a class=\"location-title\" href=";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, false, 27), "html", null, true);
            echo ">
\t\t\t\t\t\t\t<p>";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 28);
            echo "</p>

\t\t\t\t\t\t</a>

\t\t\t\t\t\t";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 32) == null)) {
                // line 33
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tprix :
\t\t\t\t\t\t\t\t\t";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 36), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t";
            }
            // line 39
            echo "

\t\t\t\t\t\t<div class=\"location-image\">
\t\t\t\t\t\t\t<img src=";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 42), "html", null, true);
            echo " alt\"\">


\t\t\t\t\t\t</div>

\t\t\t\t\t</article>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
\t\t\t</div>

\t\t</div>
\t\t
\t
\t</body>
\t
\t<a href=";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("autre");
        echo " type=\"button\" class=\"btn btn-dark\">creer cette wishlist</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/anniversaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 58,  167 => 50,  153 => 42,  148 => 39,  142 => 36,  138 => 34,  135 => 33,  133 => 32,  126 => 28,  122 => 27,  117 => 25,  113 => 23,  109 => 22,  102 => 18,  94 => 12,  84 => 11,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('main.css') }}\">


{% endblock %}


{% block body %}
\t<body>

\t\t
\t\t<div class=\"theme-container\">
\t\t\t
\t\t\t<h1 style=\"text-align: center; padding:30px\">anniversaire</h1>
\t\t\t<a href={{path('wishlist')}} type=\"button\" class=\"btn btn-dark\">retour</a>
\t\t\t

\t\t\t<div class=\"grid-container\">
\t\t\t\t{% for article in articles %}
\t\t\t\t\t<article class=\"location-listing\">

\t\t\t\t\t\t<h1>{{article.nom}}</h1>

\t\t\t\t\t\t<a class=\"location-title\" href={{article.url}}>
\t\t\t\t\t\t\t<p>{{article.description | raw}}</p>

\t\t\t\t\t\t</a>

\t\t\t\t\t\t{% if article.prix == null %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tprix :
\t\t\t\t\t\t\t\t\t{{article.prix}}
\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t<div class=\"location-image\">
\t\t\t\t\t\t\t<img src={{article.image}} alt\"\">


\t\t\t\t\t\t</div>

\t\t\t\t\t</article>

\t\t\t\t{% endfor %}

\t\t\t</div>

\t\t</div>
\t\t
\t
\t</body>
\t
\t<a href={{path('autre')}} type=\"button\" class=\"btn btn-dark\">creer cette wishlist</a>
{% endblock %}
", "wishlist/anniversaire.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/anniversaire.html.twig");
    }
}
