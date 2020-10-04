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

/* theme/theme.html.twig */
class __TwigTemplate_03d2f9af31af6c7ab2aecac790b682cd7879a8a56e27bcfa316761ec545264a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theme/theme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theme/theme.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "theme/theme.html.twig", 1);
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
        echo "  <head>
      <link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\" />
  </head>

  <body class=\"theme\" style=\"background-image: url('/images/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 8, $this->source); })()), "imageFond", [], "any", false, false, false, 8), "html", null, true);
        echo "'); background-attachment: fixed\">
    <div class=\"header\" id=\"description\">
      <div class=\"container\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "          <div class=\"alert alert-success\">
              ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </div>
  \t<h1>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
    <div class=\"grid-container\">
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            echo "        <div style=\"display: inline-block;
          width: 100%;
          border: solid 2px black;
          box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
          border-radius: 5px;\">
            <h3>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</h3>
            <a target\"_blank\" href=";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, false, 26), "html", null, true);
            echo ">
               ";
            // line 27
            if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 27)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                // line 28
                echo "                 <img class='grid-item' src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 28), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 28), "html", null, true);
                echo "\"/>
               ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 29
$context["article"], "image", [], "any", false, false, false, 29) == null)) {
                // line 30
                echo "                 <img class='grid-item' src=\"/images/article.png\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 30), "html", null, true);
                echo "\"/>
              ";
            } else {
                // line 32
                echo "                  <img class='grid-item' src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["article"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 32), "html", null, true);
                echo "\"/>
              ";
            }
            // line 34
            echo "             </a>
             <p>";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 35);
            echo "</p>
             ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 36) != null)) {
                // line 37
                echo "         \t\t  <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 37), "html", null, true);
                echo " €</p>
             ";
            }
            // line 39
            echo "             ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 40
                echo "                <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formArticle_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\"><i class=\"fas fa-marker fa-1x\" style=\"color:#000000;\"></i></a>
                 &nbsp
                <a onclick=\"return confirm('Êtes-vous sûre de vouloir supprimer l\\'article ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 42), "html", null, true);
                echo "?')\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\"><i class= \"fas fa-trash fa-1x\" style=\"color:#000000;\"></i></a></p>
             ";
            }
            // line 44
            echo "          </div>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "     </div>
     <div id=\"admin\" class=\"text-center\">
         <h4>
           <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlistPrepara", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\" onclick=\"return confirm('Vous allez ajouter cette wishlist à vos wishlists en conservant tous les articles présents. Êtes-vous sûre de vouloir continuer ?')\" class=\"btn btn-dark\">Enregistrer cette wishlist</a>
         </h4>
     </div>
     ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 53
            echo "       <div id=\"admin\" class=\"text-center\">
          <h4>
           <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formArticle", ["idW" => twig_get_attribute($this->env, $this->source, (isset($context["wishlist"]) || array_key_exists("wishlist", $context) ? $context["wishlist"] : (function () { throw new RuntimeError('Variable "wishlist" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">Ajouter un article</a>
           </h4>
       </div>
     ";
        }
        // line 59
        echo "   </body>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "theme/theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 59,  203 => 55,  199 => 53,  197 => 52,  191 => 49,  186 => 46,  179 => 44,  172 => 42,  166 => 40,  163 => 39,  157 => 37,  155 => 36,  151 => 35,  148 => 34,  140 => 32,  134 => 30,  132 => 29,  125 => 28,  123 => 27,  119 => 26,  115 => 25,  108 => 20,  104 => 19,  99 => 17,  96 => 16,  87 => 13,  84 => 12,  80 => 11,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <head>
      <link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\" />
  </head>

  <body class=\"theme\" style=\"background-image: url('/images/{{theme.imageFond}}'); background-attachment: fixed\">
    <div class=\"header\" id=\"description\">
      <div class=\"container\">
        {% for message in app.flashes('success') %}
          <div class=\"alert alert-success\">
              {{ message }}
          </div>
        {% endfor %}
      </div>
  \t<h1>{{theme.name}}</h1>
    <div class=\"grid-container\">
      {% for article in articles %}
        <div style=\"display: inline-block;
          width: 100%;
          border: solid 2px black;
          box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
          border-radius: 5px;\">
            <h3>{{article.nom}}</h3>
            <a target\"_blank\" href={{article.url}}>
               {% if (article.image starts with 'http') %}
                 <img class='grid-item' src=\"{{article.image}}\" alt=\"{{ article.nom }}\"/>
               {% elseif article.image == NULL %}
                 <img class='grid-item' src=\"/images/article.png\" alt=\"{{ article.nom }}\"/>
              {% else %}
                  <img class='grid-item' src=\"{{ vich_uploader_asset(article, 'imageFile') }}\" alt=\"{{ article.nom }}\"/>
              {% endif %}
             </a>
             <p>{{article.description | raw}}</p>
             {% if article.prix != null %}
         \t\t  <p>{{article.prix }} €</p>
             {% endif %}
             {% if is_granted('ROLE_ADMIN') %}
                <p><a href=\"{{path('formArticle_modif',{id: article.id})}}\"><i class=\"fas fa-marker fa-1x\" style=\"color:#000000;\"></i></a>
                 &nbsp
                <a onclick=\"return confirm('Êtes-vous sûre de vouloir supprimer l\\'article {{article.nom}}?')\" href=\"{{path('deleteArticle',{id: article.id})}}\"><i class= \"fas fa-trash fa-1x\" style=\"color:#000000;\"></i></a></p>
             {% endif %}
          </div>
       {% endfor %}
     </div>
     <div id=\"admin\" class=\"text-center\">
         <h4>
           <a href=\"{{path('formWishlistPrepara',{id: theme.id})}}\" onclick=\"return confirm('Vous allez ajouter cette wishlist à vos wishlists en conservant tous les articles présents. Êtes-vous sûre de vouloir continuer ?')\" class=\"btn btn-dark\">Enregistrer cette wishlist</a>
         </h4>
     </div>
     {% if is_granted('ROLE_ADMIN') %}
       <div id=\"admin\" class=\"text-center\">
          <h4>
           <a href=\"{{path('formArticle',{idW: wishlist.id})}}\" class=\"btn btn-dark\">Ajouter un article</a>
           </h4>
       </div>
     {% endif %}
   </body>
 {% endblock %}
", "theme/theme.html.twig", "/Users/laura/Desktop/wishlist/templates/theme/theme.html.twig");
    }
}
