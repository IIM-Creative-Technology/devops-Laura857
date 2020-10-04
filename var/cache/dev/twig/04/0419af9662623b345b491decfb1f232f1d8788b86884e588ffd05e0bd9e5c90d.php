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

/* wishlist/article.html.twig */
class __TwigTemplate_25119e13b71c396d2e49cd0e6050251b194f534cf7e42e9281ab57e735442c3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/article.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/article.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main.css"), "html", null, true);
        echo "\">
    <link href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <link href=\"../star-rating.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\"/>
    <!--script -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
<body>
 \t<h1 style=\"text-align: center;\">Nom de la Wishlist : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "wishlist", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
 \t<h1 style=\"text-align: center;\">Thème : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "wishlist", [], "any", false, false, false, 18), "theme", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
    <div class=\"card\" style=\"padding: 20px; margin: 70px\">
      ";
        // line 20
        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            // line 21
            echo "      <img class='grid-item' src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "\"/>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22) == null)) {
            // line 23
            echo "      <img class='grid-item' src=\"/images/article.png\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "\"/>
   ";
        } else {
            // line 25
            echo "       <img class='grid-item' src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "\"/>
   ";
        }
        // line 27
        echo "        <h3 class=\"card-title\"><b>Objet : </b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), "html", null, true);
        echo "</h3>
        <form method=\"post\" >
          <div class=\"row\">
            <input id=\"input-21d\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "rating", [], "any", false, false, false, 30), "html", null, true);
        echo "\" type=\"text\" class=\"rating\" data-min=0 data-max=5 data-step=0.5 data-size=\"sm\" name=\"rating\">
            <button type=\"submit\" id=\"completed-task\" style=\"background: none; border: none;\">
               <i class=\"fa fa-check fa-2x\"></i>
            </button>
          </div>
        </form>
      ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36)) {
            // line 37
            echo "        <h4 class=\"card-text\" ><b>Prix : </b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), "html", null, true);
            echo "</h4>
       ";
        }
        // line 39
        echo "       ";
        if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 39, $this->source); })()), "url", [], "any", false, false, false, 39)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "http") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
            // line 40
            echo "          <h4 class=\"card-text\" ><b>Lien URL : </b><a href=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40), "html", null, true);
            echo " target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></h4>
       ";
        } else {
            // line 42
            echo "          <h4 class=\"card-text\"><b>Lien URL : </b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 42, $this->source); })()), "url", [], "any", false, false, false, 42), "html", null, true);
            echo "</h4>
\t\t\t ";
        }
        // line 44
        echo "       ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44)) {
            // line 45
            echo "        <h4 class=\"card-text\"><b>Description : </b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</h4>
      ";
        }
        // line 47
        echo "    </div>

    <script src=\"../star-rating.js\" type=\"text/javascript\"></script>
    <script src=\"../rating.js\" type=\"text/javascript\"></script>
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 47,  179 => 45,  176 => 44,  170 => 42,  162 => 40,  159 => 39,  153 => 37,  151 => 36,  142 => 30,  135 => 27,  127 => 25,  121 => 23,  119 => 22,  112 => 21,  110 => 20,  105 => 18,  101 => 17,  97 => 15,  87 => 14,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('main.css') }}\">
    <link href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <link href=\"../star-rating.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\"/>
    <!--script -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
{% endblock %}


{% block body %}

<body>
 \t<h1 style=\"text-align: center;\">Nom de la Wishlist : {{article.wishlist.nom}}</h1>
 \t<h1 style=\"text-align: center;\">Thème : {{article.wishlist.theme}}</h1>
    <div class=\"card\" style=\"padding: 20px; margin: 70px\">
      {% if (article.image starts with 'http') %}
      <img class='grid-item' src=\"{{article.image}}\" alt=\"{{ article.nom }}\"/>
    {% elseif article.image == NULL %}
      <img class='grid-item' src=\"/images/article.png\" alt=\"{{ article.nom }}\"/>
   {% else %}
       <img class='grid-item' src=\"{{ vich_uploader_asset(article, 'imageFile') }}\" alt=\"{{ article.nom }}\"/>
   {% endif %}
        <h3 class=\"card-title\"><b>Objet : </b>{{article.nom}}</h3>
        <form method=\"post\" >
          <div class=\"row\">
            <input id=\"input-21d\" value=\"{{article.rating}}\" type=\"text\" class=\"rating\" data-min=0 data-max=5 data-step=0.5 data-size=\"sm\" name=\"rating\">
            <button type=\"submit\" id=\"completed-task\" style=\"background: none; border: none;\">
               <i class=\"fa fa-check fa-2x\"></i>
            </button>
          </div>
        </form>
      {% if article.prix %}
        <h4 class=\"card-text\" ><b>Prix : </b>{{article.prix}}</h4>
       {% endif %}
       {% if (article.url starts with 'http') %}
          <h4 class=\"card-text\" ><b>Lien URL : </b><a href={{article.url}} target=\"_blank\">{{article.url}}</a></h4>
       {% else %}
          <h4 class=\"card-text\"><b>Lien URL : </b>{{article.url}}</h4>
\t\t\t {% endif %}
       {% if article.description %}
        <h4 class=\"card-text\"><b>Description : </b>{{article.description}}</h4>
      {% endif %}
    </div>

    <script src=\"../star-rating.js\" type=\"text/javascript\"></script>
    <script src=\"../rating.js\" type=\"text/javascript\"></script>
</body>

{% endblock %}
", "wishlist/article.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/article.html.twig");
    }
}
