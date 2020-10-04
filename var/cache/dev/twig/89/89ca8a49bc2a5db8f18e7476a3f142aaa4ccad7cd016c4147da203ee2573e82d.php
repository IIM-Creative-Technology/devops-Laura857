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

/* wishlist/myArticles.html.twig */
class __TwigTemplate_28877623ad815bce852d84f22ecfa617634308a6c58170002d88022c76370c32 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/myArticles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/myArticles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/myArticles.html.twig", 1);
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

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<head>
\t<meta property=\"og:url\" content=\"https://www.your-domain.com/your-page.html\"/>
\t<meta property=\"og:type\" content=\"website\"/>
\t<meta property=\"og:title\" content=\"Your Website Title\"/>
\t<meta property=\"og:description\" content=\"Your description\"/>
\t<meta property=\"og:image\" content=\"https://www.your-domain.com/path/image.jpg\"/>
</head>

\t<body>
\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
\t\t<div class=\"theme-container\">
\t\t\t<h1 style=\"text-align: center; padding:30px\"> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishlist"]) || array_key_exists("wishlist", $context) ? $context["wishlist"] : (function () { throw new RuntimeError('Variable "wishlist" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), "html", null, true);
        echo " </h1>
\t\t\t<div class=\"grid-container\">
\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "\t\t\t\t\t<div class=\"bordure\">
\t\t\t\t\t\t<h3>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<a href=";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, false, 32), "html", null, true);
            echo "> <img class='grid-item'  src=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 32), "html", null, true);
            echo " alt=''></a>
\t\t\t\t\t\t<p>";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 33);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 34) != null)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 35), "html", null, true);
                echo " €</p>
\t\t\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" ><i class= \"fa fa-trash fa-2x\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formArticle_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" ><i class=\"fas fa-marker fa-2x\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"text-center\">
\t\t\t\t<h4 style=\"margin:2px\">
\t\t\t\t\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mywishlist");
        echo "\" class=\"btn btn-dark\">Mes wishlists</a>
\t\t\t\t\t<a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formArticle", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["wishlist"]) || array_key_exists("wishlist", $context) ? $context["wishlist"] : (function () { throw new RuntimeError('Variable "wishlist" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"btn btn-dark\">Ajouter un article</a>
\t\t\t\t\t<a onclick=\"share()\" href=\"#\" class=\"btn btn-dark\">Partager cette wishlist</a>
\t\t\t\t\t<p id=\"autre\"></p>
\t\t\t\t</h4>
\t\t</div>
\t\t<!-- <a onclick=\"share()\" href=\"#\">
\t\t\t<i class=\"fas fa-share-alt fa-2x\"></i>
\t\t</a>
    <p id=\"autre\"></p>-->

\t\t<!-- partage sur les reseaux -->
\t\t<div class=\"text-center\"\">
\t\t\t<div id=\"fb-root\"></div>
\t\t\t\t<div class=\"fb-share-button\" data-layout=\"button_count\"></div>
\t\t\t\t<a href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\" data-show-count=\"false\">Tweet</a>
\t\t</div>

\t\t\t\t<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
\t\t\t\t<script>
          (function (d, s, id) {
\t\t\t\t\t\tvar js,
\t\t\t\t\t\tfjs = d.getElementsByTagName(s)[0];
\t\t\t\t\t\tif (d.getElementById(id))
\t\t\t\t\t\treturn;
\t\t\t\t\t\tjs = d.createElement(s);
\t\t\t\t\t\tjs.id = id;
\t\t\t\t\t\tjs.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
\t\t\t\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t\t\t\t}(document, 'script', 'facebook-jssdk'));

\t\t\t\t\tfunction share() {
\t\t\t\t\t\tdocument.getElementById(\"autre\").innerHTML = \"copier le lien ci-dessous<br>\" + window.location.href;
\t\t\t\t\t}
        </script>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/myArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 46,  178 => 45,  172 => 41,  163 => 38,  158 => 37,  152 => 35,  150 => 34,  146 => 33,  140 => 32,  136 => 31,  133 => 30,  129 => 29,  124 => 27,  120 => 25,  111 => 22,  108 => 21,  104 => 20,  92 => 10,  82 => 9,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('main.css') }}\">
{% endblock %}


{% block body %}

<head>
\t<meta property=\"og:url\" content=\"https://www.your-domain.com/your-page.html\"/>
\t<meta property=\"og:type\" content=\"website\"/>
\t<meta property=\"og:title\" content=\"Your Website Title\"/>
\t<meta property=\"og:description\" content=\"Your description\"/>
\t<meta property=\"og:image\" content=\"https://www.your-domain.com/path/image.jpg\"/>
</head>

\t<body>
\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t<div class=\"theme-container\">
\t\t\t<h1 style=\"text-align: center; padding:30px\"> {{wishlist.nom}} </h1>
\t\t\t<div class=\"grid-container\">
\t\t\t\t{% for article in articles %}
\t\t\t\t\t<div class=\"bordure\">
\t\t\t\t\t\t<h3>{{article.nom}}</h3>
\t\t\t\t\t\t<a href={{article.url}}> <img class='grid-item'  src={{article.image}} alt=''></a>
\t\t\t\t\t\t<p>{{article.description | raw}}</p>
\t\t\t\t\t\t\t{% if article.prix != null %}
\t\t\t\t\t\t\t\t<p>{{article.prix }} €</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<a href=\"{{path('deleteArticle',{id: article.id})}}\" ><i class= \"fa fa-trash fa-2x\"></i></a>
\t\t\t\t\t\t<a href=\"{{path('formArticle_modif',{id: article.id})}}\" ><i class=\"fas fa-marker fa-2x\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"text-center\">
\t\t\t\t<h4 style=\"margin:2px\">
\t\t\t\t\t<a href=\"{{path('mywishlist')}}\" class=\"btn btn-dark\">Mes wishlists</a>
\t\t\t\t\t<a href=\"{{path('formArticle',{id:wishlist.id})}}\" class=\"btn btn-dark\">Ajouter un article</a>
\t\t\t\t\t<a onclick=\"share()\" href=\"#\" class=\"btn btn-dark\">Partager cette wishlist</a>
\t\t\t\t\t<p id=\"autre\"></p>
\t\t\t\t</h4>
\t\t</div>
\t\t<!-- <a onclick=\"share()\" href=\"#\">
\t\t\t<i class=\"fas fa-share-alt fa-2x\"></i>
\t\t</a>
    <p id=\"autre\"></p>-->

\t\t<!-- partage sur les reseaux -->
\t\t<div class=\"text-center\"\">
\t\t\t<div id=\"fb-root\"></div>
\t\t\t\t<div class=\"fb-share-button\" data-layout=\"button_count\"></div>
\t\t\t\t<a href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\" data-show-count=\"false\">Tweet</a>
\t\t</div>

\t\t\t\t<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
\t\t\t\t<script>
          (function (d, s, id) {
\t\t\t\t\t\tvar js,
\t\t\t\t\t\tfjs = d.getElementsByTagName(s)[0];
\t\t\t\t\t\tif (d.getElementById(id))
\t\t\t\t\t\treturn;
\t\t\t\t\t\tjs = d.createElement(s);
\t\t\t\t\t\tjs.id = id;
\t\t\t\t\t\tjs.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
\t\t\t\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t\t\t\t}(document, 'script', 'facebook-jssdk'));

\t\t\t\t\tfunction share() {
\t\t\t\t\t\tdocument.getElementById(\"autre\").innerHTML = \"copier le lien ci-dessous<br>\" + window.location.href;
\t\t\t\t\t}
        </script>
    </body>
{% endblock %}
", "wishlist/myArticles.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/myArticles.html.twig");
    }
}
