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

/* wishlist/propos.html.twig */
class __TwigTemplate_14b1bbdab5da678bcec5bec9c300e314e0f0caf19b407aca945ac6f86533ac87 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/propos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/propos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/propos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<!-- page d'information concernant le projet -->
\t<body>
\t\t<head>
\t\t\t<meta charset=\"utf-8\">
\t\t\t<link rel=\"stylesheet\" href=\"/index.css\" media=\"screen\" type=\"text/css\"/>
\t\t</head>
\t\t<div id=\"description\">
\t\t\t<div>
\t\t\t\t<h3>A propos de nous
\t\t\t\t</h3>
\t\t\t\t<p>Nous sommes un groupe de 4 étudiantes à l'université Paris Descartes
\t\t\t\t\tnotre but est de développer un site web de gestion de wishlists.
\t\t\t\t\tLe projet dure quatre mois et sera aussi disponible sur smartphone
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"grid-container-propos\">
\t\t\t\t<div>
\t\t\t\t\t<h1>Nelly</h1>
\t\t\t\t\t<img src=\"/nelly.png\" alt=\"...\"></p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h1>Chirel</h1>
\t\t\t\t<img src=\"/chirel.png\" alt=\"...\"></p>
\t\t</div>
\t\t<div>
\t\t\t<h1>Laura</h1>
\t\t\t<img src=\"/laura.png\" alt=\"...\"></p>
\t</body>
</div>
<div>
\t<h1>Nouhaila</h1>
\t<img src=\"/nouhaila.png\" alt=\"...\"></p></div></div></body>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/propos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<!-- page d'information concernant le projet -->
\t<body>
\t\t<head>
\t\t\t<meta charset=\"utf-8\">
\t\t\t<link rel=\"stylesheet\" href=\"/index.css\" media=\"screen\" type=\"text/css\"/>
\t\t</head>
\t\t<div id=\"description\">
\t\t\t<div>
\t\t\t\t<h3>A propos de nous
\t\t\t\t</h3>
\t\t\t\t<p>Nous sommes un groupe de 4 étudiantes à l'université Paris Descartes
\t\t\t\t\tnotre but est de développer un site web de gestion de wishlists.
\t\t\t\t\tLe projet dure quatre mois et sera aussi disponible sur smartphone
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"grid-container-propos\">
\t\t\t\t<div>
\t\t\t\t\t<h1>Nelly</h1>
\t\t\t\t\t<img src=\"/nelly.png\" alt=\"...\"></p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h1>Chirel</h1>
\t\t\t\t<img src=\"/chirel.png\" alt=\"...\"></p>
\t\t</div>
\t\t<div>
\t\t\t<h1>Laura</h1>
\t\t\t<img src=\"/laura.png\" alt=\"...\"></p>
\t</body>
</div>
<div>
\t<h1>Nouhaila</h1>
\t<img src=\"/nouhaila.png\" alt=\"...\"></p></div></div></body>{% endblock %}
", "wishlist/propos.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/propos.html.twig");
    }
}
