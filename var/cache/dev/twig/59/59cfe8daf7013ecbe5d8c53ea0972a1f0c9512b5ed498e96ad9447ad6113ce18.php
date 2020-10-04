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

/* wishlist/myWishlist.html.twig */
class __TwigTemplate_cf7809b9b931532f20d6bb8ceefed1e95007ca871f7e68c3b5746ac803611b19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/myWishlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/myWishlist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/myWishlist.html.twig", 1);
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
        echo " <link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\" />
 \t<body>
 \t<h1 style=\"text-align: center;\">Mes Wishlists</h1>
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "    <div class=\"alert alert-success\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  ";
        if (twig_test_empty((isset($context["wishlists"]) || array_key_exists("wishlists", $context) ? $context["wishlists"] : (function () { throw new RuntimeError('Variable "wishlists" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "    <div class = \"contenu\">
      <p>Vous n'avez pas encore crée de wishlist !!! Cliquez sur le bouton ci-dessous pour créer
        votre première wishlist.</p>
      <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlist");
            echo "\" class=\"btn btn-dark\">Créer ma première wishlist</a>
    </div>
    ";
        } else {
            // line 18
            echo "    <div class=\"card-deck\">
      ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["wishlists"]) || array_key_exists("wishlists", $context) ? $context["wishlists"] : (function () { throw new RuntimeError('Variable "wishlists" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["wishlist"]) {
                // line 20
                echo "     \t\t<div class=\"col-4\">
     \t\t\t<div class=\"card\">
            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myArticles", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">
     \t  \t\t<img class=\"card-img-top\" src=\"model_wshl.png\" alt=\"Card image cap\"></a>
     \t\t\t\t<div class=\"card-body\">
     \t  \t\t\t<h3 class=\"card-title\">Nom de la wishlist : ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "nom", [], "any", false, false, false, 25), "html", null, true);
                echo "</h3>
     \t  \t\t\t<h5 class=\"card-text\" >Owner :";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["wishlist"], "user", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</h5>
     \t   \t\t\t<p class=\"card-text\"> Description : ";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["wishlist"], "description", [], "any", false, false, false, 27);
                echo " </p>
            \t<div class=\"modifWshl\"><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlist_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\" ><i class=\"fas fa-marker fa-2x\"></i></a></div>
       \t\t\t\t\t<div class=\"card-footer\" id=\"trash\">
                  <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myArticles", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Aperçu</a>
      \t\t        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Ajouter un article</a>
              <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletWshl", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" onclick=\"return confirm('Êtes vous sûre de vouloir supprimer cette wishlist ?');\"><i class= \"fa fa-trash fa-2x\"></i></a>
     \t\t  \t\t  </div>
     \t\t\t\t </div>
     \t\t\t</div>
          </div>

      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wishlist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/myWishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 39,  145 => 32,  141 => 31,  137 => 30,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  114 => 22,  110 => 20,  106 => 19,  103 => 18,  97 => 15,  92 => 12,  89 => 11,  80 => 8,  77 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
 <link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\" />
 \t<body>
 \t<h1 style=\"text-align: center;\">Mes Wishlists</h1>
  {% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
  {% endfor %}
  {% if wishlists is empty %}
    <div class = \"contenu\">
      <p>Vous n'avez pas encore crée de wishlist !!! Cliquez sur le bouton ci-dessous pour créer
        votre première wishlist.</p>
      <a href=\"{{path('formWishlist')}}\" class=\"btn btn-dark\">Créer ma première wishlist</a>
    </div>
    {% else %}
    <div class=\"card-deck\">
      {% for wishlist in wishlists %}
     \t\t<div class=\"col-4\">
     \t\t\t<div class=\"card\">
            <a href=\"{{path('myArticles',{id: wishlist.id})}}\">
     \t  \t\t<img class=\"card-img-top\" src=\"model_wshl.png\" alt=\"Card image cap\"></a>
     \t\t\t\t<div class=\"card-body\">
     \t  \t\t\t<h3 class=\"card-title\">Nom de la wishlist : {{wishlist.nom}}</h3>
     \t  \t\t\t<h5 class=\"card-text\" >Owner :{{wishlist.user.name}}</h5>
     \t   \t\t\t<p class=\"card-text\"> Description : {{wishlist.description| raw}} </p>
            \t<div class=\"modifWshl\"><a href=\"{{path('formWishlist_modif',{id: wishlist.id})}}\" ><i class=\"fas fa-marker fa-2x\"></i></a></div>
       \t\t\t\t\t<div class=\"card-footer\" id=\"trash\">
                  <a href=\"{{path('myArticles',{id: wishlist.id})}}\" class=\"btn btn-primary\">Aperçu</a>
      \t\t        <a href=\"{{path('formArticle',{id: wishlist.id})}}\" class=\"btn btn-primary\">Ajouter un article</a>
              <a href=\"{{path('deletWshl',{id: wishlist.id})}}\" onclick=\"return confirm('Êtes vous sûre de vouloir supprimer cette wishlist ?');\"><i class= \"fa fa-trash fa-2x\"></i></a>
     \t\t  \t\t  </div>
     \t\t\t\t </div>
     \t\t\t</div>
          </div>

      {% endfor %}
    </div>
    {% endif %}
{% endblock %}
", "wishlist/myWishlist.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/myWishlist.html.twig");
    }
}
