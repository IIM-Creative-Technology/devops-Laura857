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
class __TwigTemplate_c20feb0345e8f1426a98138f1df1d32d091c79d4283e37b445d4bc9a17d58029 extends \Twig\Template
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
\t<link href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
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
        echo "
<head>
\t<meta property=\"og:url\" content=\"https://www.your-domain.com/your-page.html\"/>
\t<meta property=\"og:type\" content=\"website\"/>
\t<meta property=\"og:title\" content=\"Your Website Title\"/>
\t<meta property=\"og:description\" content=\"Your description\"/>
\t<meta property=\"og:image\" content=\"https://www.your-domain.com/path/image.jpg\"/>
</head>
\t<body style=\"background-image: url('/images/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 20, $this->source); })()), "imageFond", [], "any", false, false, false, 20), "html", null, true);
        echo "'); background-attachment:fixed\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [0 => "alert"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "\t\t      <div class=\"alert alert-danger\">
\t\t          ";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t      </div>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</div>
\t\t<div class=\"theme-container\">
\t\t\t<h1 style=\"text-align: center; padding:30px\"> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishlist"]) || array_key_exists("wishlist", $context) ? $context["wishlist"] : (function () { throw new RuntimeError('Variable "wishlist" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), "html", null, true);
        echo " </h1>
\t\t\t<div class=\"grid-container\">
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 37
            echo "\t\t\t\t<div style=\" display: inline-block;
\t\t\t\t\twidth: 100%;
\t\t\t \t\tborder: solid 2px black;
\t\t\t\t\tbox-shadow: 5px 5px 5px rgba(0,0,0,0.5);
\t\t\t\t\tborder-radius: 5px;\">
\t\t\t\t\t\t<a href=";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, false, 42), "html", null, true);
            echo " target=\"_blank\" >
\t\t\t\t\t\t\t<i class=\"fas fa-eye fa-1x\" style=\"color:#000000; float: right; margin:10px\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h3>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 45), "html", null, true);
            echo "</h3>

\t\t\t\t\t\t<a style=\"text-decoration:none; color:black\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" >
\t\t\t\t\t\t\t";
            // line 48
            if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 48)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<img class='grid-item' src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 49), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 50
$context["article"], "image", [], "any", false, false, false, 50) == null)) {
                // line 51
                echo "\t\t\t\t\t\t\t\t<img class='grid-item' src=\"/images/article.png\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 51), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t\t\t<img class='grid-item' src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["article"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 53), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t<p>";
            echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 55);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 56) != null)) {
                // line 57
                echo "\t\t\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 57), "html", null, true);
                echo " €</p>
\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div style=\"text-align: center; margin-left:40px\">
\t\t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 62
                echo "\t\t\t\t\t\t";
                if (($context["i"] < twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 62))) {
                    // line 63
                    echo "\t\t\t\t\t\t\t<i class=\"fa fa-star\" style=\"color:#fff000; float: center;\"></i>
\t\t\t\t\t\t";
                } else {
                    // line 65
                    echo "\t\t\t\t\t\t\t<i class=\"fa fa-star\" style=\"color:#000000; float: center;\"></i>
\t\t\t\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "</div>

\t\t\t\t\t\t";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70) === (isset($context["userWishlist"]) || array_key_exists("userWishlist", $context) ? $context["userWishlist"] : (function () { throw new RuntimeError('Variable "userWishlist" does not exist.', 70, $this->source); })()))) {
                // line 71
                echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\" onclick=\"return confirm('Êtes vous sûre de vouloir supprimer l\\'article ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 72), "html", null, true);
                echo " ?');\"><i class= \"fa fa-trash fa-1x\" style=\"color:#000000;\"></i></a>
\t\t\t\t\t\t\t\t&nbsp
\t\t\t\t\t\t\t\t<a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formArticle_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\" ><i class=\"fas fa-marker fa-1x\" \tstyle=\"color:#000000;\"></i></a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t</div>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t </div>
\t </div>
\t\t";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81) === (isset($context["userWishlist"]) || array_key_exists("userWishlist", $context) ? $context["userWishlist"] : (function () { throw new RuntimeError('Variable "userWishlist" does not exist.', 81, $this->source); })()))) {
            // line 82
            echo "\t\t\t<div class=\"text-center\">
\t\t\t\t<h4 style=\"margin:2px\">
\t\t\t\t\t<a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mywishlist");
            echo "\" class=\"btn btn-dark\">Mes wishlists</a>
\t\t\t\t\t<a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formArticle", ["idW" => twig_get_attribute($this->env, $this->source, (isset($context["wishlist"]) || array_key_exists("wishlist", $context) ? $context["wishlist"] : (function () { throw new RuntimeError('Variable "wishlist" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">Ajouter un article</a>
\t\t\t\t\t<a onclick=\"share()\" href=\"#\" class=\"btn btn-dark\">Partager cette wishlist</a>
\t\t\t\t\t<p id=\"autre\"></p>
\t\t\t\t</h4>
\t\t\t</div>

\t\t<!-- partage sur les reseaux -->
\t\t<div class=\"text-center\"\">
\t\t\t<div id=\"fb-root\"></div>
\t\t\t\t<div class=\"fb-share-button\" data-layout=\"button_count\"></div>
\t\t\t\t<a href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\" data-show-count=\"false\">Tweet</a>
\t\t</div>
\t";
        }
        // line 98
        echo "


\t";
        // line 101
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) {
            // line 102
            echo "
\t<h1 style=\"text-align: center;\">Ces articles pourraient vous intéresser</h1>
<div style =\"padding-top:25px\"  class=\"card-deck\">
<div class=\"scrolling-wrapper-flexbox\">
\t\t\t";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 106, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["suggestion"]) {
                // line 107
                echo "\t\t\t<div class=\"row\">
\t\t\t <div  class=\"col-3 \">
\t\t\t\t<div style=\"width: 300px;\" class=\"card\">
\t\t\t\t\t<h3 class=\"card-title\">";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suggestion"], "nom", [], "any", false, false, false, 110), "html", null, true);
                echo "</h3>
\t\t\t\t\t<a target\"_blank\" href=";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suggestion"], "url", [], "any", false, false, false, 111), "html", null, true);
                echo ">
\t\t\t\t\t\t";
                // line 112
                if (((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["suggestion"], "image", [], "any", false, false, false, 112)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "https://") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))) || (is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["suggestion"], "image", [], "any", false, false, false, 112)) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = "http://") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666))))) {
                    // line 113
                    echo "\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suggestion"], "image", [], "any", false, false, false, 113), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suggestion"], "nom", [], "any", false, false, false, 113), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t";
                } else {
                    // line 115
                    echo "\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["suggestion"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suggestion"], "nom", [], "any", false, false, false, 115), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t\t</a>

\t\t\t\t\t\t";
                // line 119
                if ((twig_get_attribute($this->env, $this->source, $context["suggestion"], "prix", [], "any", false, false, false, 119) != null)) {
                    // line 120
                    echo "\t\t\t\t\t\t\t<p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suggestion"], "prix", [], "any", false, false, false, 120), "html", null, true);
                    echo " €</p>
\t\t\t\t\t\t<button onclick=\"getId\" class=\"btn btn-primary\" id=\"js-idA\" data-toggle=\"modal\" data-target=\"#message";
                    // line 121
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suggestion"], "id", [], "any", false, false, false, 121), "html", null, true);
                    echo "\">  Ajouter </button>

\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"message";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suggestion"], "id", [], "any", false, false, false, 125), "html", null, true);
                echo "\" class=\"modal fade\" role=\"dialog\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<p style =\"margin: 20px\">Séléctionnez la wishlist où vous souhaitez ajouter l'article ";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suggestion"], "nom", [], "any", false, false, false, 128), "html", null, true);
                echo " :</p>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t";
                // line 130
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SearchBarController::wishlistsChoices", ["id" => twig_get_attribute($this->env, $this->source, $context["suggestion"], "id", [], "any", false, false, false, 130)]));
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
                      <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlist", ["a" => twig_get_attribute($this->env, $this->source, $context["suggestion"], "id", [], "any", false, false, false, 133)]), "html", null, true);
                echo "\" class=\"btn btn-dark\">Créer une autre wishlist</a>

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suggestion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "
\t\t";
        }
        // line 145
        echo "\t</div>
\t</div>
\t</body>
\t<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
\t<script>
\t\t(function (d, s, id) {
\t\t\tvar js,
\t\t\tfjs = d.getElementsByTagName(s)[0];
\t\t\tif (d.getElementById(id))
\t\t\treturn;
\t\t\tjs = d.createElement(s);
\t\t\tjs.id = id;
\t\t\tjs.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t}(document, 'script', 'facebook-jssdk'));

\t\tfunction share() {
\t\t\tdocument.getElementById(\"autre\").innerHTML = \"copier le lien ci-dessous<br>\" + window.location.href;
\t\t}
\t</script>
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
        return array (  404 => 145,  400 => 143,  384 => 133,  378 => 130,  373 => 128,  367 => 125,  364 => 124,  358 => 121,  353 => 120,  351 => 119,  347 => 117,  339 => 115,  331 => 113,  329 => 112,  325 => 111,  321 => 110,  316 => 107,  312 => 106,  306 => 102,  304 => 101,  299 => 98,  283 => 85,  279 => 84,  275 => 82,  273 => 81,  269 => 79,  262 => 77,  256 => 74,  249 => 72,  246 => 71,  244 => 70,  240 => 68,  234 => 67,  230 => 65,  226 => 63,  223 => 62,  219 => 61,  215 => 59,  209 => 57,  207 => 56,  202 => 55,  194 => 53,  188 => 51,  186 => 50,  179 => 49,  177 => 48,  173 => 47,  168 => 45,  162 => 42,  155 => 37,  151 => 36,  146 => 34,  142 => 32,  133 => 29,  130 => 28,  125 => 27,  116 => 24,  113 => 23,  109 => 22,  104 => 20,  94 => 12,  84 => 11,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('main.css') }}\">
\t<link href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
{% endblock %}


{% block body %}

<head>
\t<meta property=\"og:url\" content=\"https://www.your-domain.com/your-page.html\"/>
\t<meta property=\"og:type\" content=\"website\"/>
\t<meta property=\"og:title\" content=\"Your Website Title\"/>
\t<meta property=\"og:description\" content=\"Your description\"/>
\t<meta property=\"og:image\" content=\"https://www.your-domain.com/path/image.jpg\"/>
</head>
\t<body style=\"background-image: url('/images/{{theme.imageFond}}'); background-attachment:fixed\">
\t\t\t<div class=\"container\">
\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t{% for message in app.flashes('alert') %}
\t\t      <div class=\"alert alert-danger\">
\t\t          {{ message }}
\t\t      </div>
\t\t    {% endfor %}
\t\t\t</div>
\t\t<div class=\"theme-container\">
\t\t\t<h1 style=\"text-align: center; padding:30px\"> {{wishlist.nom}} </h1>
\t\t\t<div class=\"grid-container\">
\t\t\t{% for article in articles %}
\t\t\t\t<div style=\" display: inline-block;
\t\t\t\t\twidth: 100%;
\t\t\t \t\tborder: solid 2px black;
\t\t\t\t\tbox-shadow: 5px 5px 5px rgba(0,0,0,0.5);
\t\t\t\t\tborder-radius: 5px;\">
\t\t\t\t\t\t<a href={{article.url}} target=\"_blank\" >
\t\t\t\t\t\t\t<i class=\"fas fa-eye fa-1x\" style=\"color:#000000; float: right; margin:10px\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h3>{{article.nom}}</h3>

\t\t\t\t\t\t<a style=\"text-decoration:none; color:black\" href=\"{{path('article',{id: article.id})}}\" >
\t\t\t\t\t\t\t{% if (article.image starts with 'http') %}
\t\t\t\t\t\t\t\t<img class='grid-item' src=\"{{article.image}}\" alt=\"{{ article.nom }}\"/>
\t\t\t\t\t\t\t{% elseif article.image == NULL %}
\t\t\t\t\t\t\t\t<img class='grid-item' src=\"/images/article.png\" alt=\"{{ article.nom }}\"/>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img class='grid-item' src=\"{{ vich_uploader_asset(article, 'imageFile') }}\" alt=\"{{ article.nom }}\"/>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<p>{{article.description | raw}}</p>
\t\t\t\t\t\t\t{% if article.prix != null %}
\t\t\t\t\t\t\t\t<p>{{article.prix }} €</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div style=\"text-align: center; margin-left:40px\">
\t\t\t\t\t{% for i in range(0, 4) %}
\t\t\t\t\t\t{% if i < article.rating %}
\t\t\t\t\t\t\t<i class=\"fa fa-star\" style=\"color:#fff000; float: center;\"></i>
\t\t\t\t\t\t{% else%}
\t\t\t\t\t\t\t<i class=\"fa fa-star\" style=\"color:#000000; float: center;\"></i>
\t\t\t\t\t\t\t{% endif%}
\t\t\t\t\t{% endfor%}
</div>

\t\t\t\t\t\t{% if app.user is same as (userWishlist) %}
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"{{path('deleteArticle',{id: article.id})}}\" onclick=\"return confirm('Êtes vous sûre de vouloir supprimer l\\'article {{article.nom}} ?');\"><i class= \"fa fa-trash fa-1x\" style=\"color:#000000;\"></i></a>
\t\t\t\t\t\t\t\t&nbsp
\t\t\t\t\t\t\t\t<a href=\"{{path('formArticle_modif',{id: article.id})}}\" ><i class=\"fas fa-marker fa-1x\" \tstyle=\"color:#000000;\"></i></a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t {% endfor %}
\t\t </div>
\t </div>
\t\t{% if app.user is same as (userWishlist) %}
\t\t\t<div class=\"text-center\">
\t\t\t\t<h4 style=\"margin:2px\">
\t\t\t\t\t<a href=\"{{path('mywishlist')}}\" class=\"btn btn-dark\">Mes wishlists</a>
\t\t\t\t\t<a href=\"{{path('formArticle',{idW:wishlist.id})}}\" class=\"btn btn-dark\">Ajouter un article</a>
\t\t\t\t\t<a onclick=\"share()\" href=\"#\" class=\"btn btn-dark\">Partager cette wishlist</a>
\t\t\t\t\t<p id=\"autre\"></p>
\t\t\t\t</h4>
\t\t\t</div>

\t\t<!-- partage sur les reseaux -->
\t\t<div class=\"text-center\"\">
\t\t\t<div id=\"fb-root\"></div>
\t\t\t\t<div class=\"fb-share-button\" data-layout=\"button_count\"></div>
\t\t\t\t<a href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\" data-show-count=\"false\">Tweet</a>
\t\t</div>
\t{% endif %}



\t{% if app.user %}

\t<h1 style=\"text-align: center;\">Ces articles pourraient vous intéresser</h1>
<div style =\"padding-top:25px\"  class=\"card-deck\">
<div class=\"scrolling-wrapper-flexbox\">
\t\t\t{% for suggestion in suggestions %}
\t\t\t<div class=\"row\">
\t\t\t <div  class=\"col-3 \">
\t\t\t\t<div style=\"width: 300px;\" class=\"card\">
\t\t\t\t\t<h3 class=\"card-title\">{{suggestion.nom}}</h3>
\t\t\t\t\t<a target\"_blank\" href={{suggestion.url}}>
\t\t\t\t\t\t{% if (suggestion.image starts with 'https://' or suggestion.image starts with 'http://') %}
\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"{{suggestion.image}}\" alt=\"{{ suggestion.nom }}\"/>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"{{ vich_uploader_asset(suggestion, 'imageFile') }}\" alt=\"{{ suggestion.nom }}\"/>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>

\t\t\t\t\t\t{% if suggestion.prix != null %}
\t\t\t\t\t\t\t<p>{{suggestion.prix }} €</p>
\t\t\t\t\t\t<button onclick=\"getId\" class=\"btn btn-primary\" id=\"js-idA\" data-toggle=\"modal\" data-target=\"#message{{suggestion.id}}\">  Ajouter </button>

\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"message{{suggestion.id}}\" class=\"modal fade\" role=\"dialog\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<p style =\"margin: 20px\">Séléctionnez la wishlist où vous souhaitez ajouter l'article {{suggestion.nom}} :</p>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t{{ render(controller('App\\\\Controller\\\\SearchBarController::wishlistsChoices',{'id':suggestion.id}))}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
                      <a href=\"{{path('formWishlist',{'a':suggestion.id})}}\" class=\"btn btn-dark\">Créer une autre wishlist</a>

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
</div>
\t\t\t{% endfor %}

\t\t{% endif %}
\t</div>
\t</div>
\t</body>
\t<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
\t<script>
\t\t(function (d, s, id) {
\t\t\tvar js,
\t\t\tfjs = d.getElementsByTagName(s)[0];
\t\t\tif (d.getElementById(id))
\t\t\treturn;
\t\t\tjs = d.createElement(s);
\t\t\tjs.id = id;
\t\t\tjs.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t}(document, 'script', 'facebook-jssdk'));

\t\tfunction share() {
\t\t\tdocument.getElementById(\"autre\").innerHTML = \"copier le lien ci-dessous<br>\" + window.location.href;
\t\t}
\t</script>
{% endblock %}
", "wishlist/myArticles.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/myArticles.html.twig");
    }
}
