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
class __TwigTemplate_0f805095f54c82550ac9dc9531dab2d7181df07092b934e2317975a9536ae499 extends \Twig\Template
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

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <head>
      <link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\" />
  </head>

  <body class=\"theme\">
    <div class=\"header\" id=\"description\">
      <div class=\"container\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "          <div class=\"alert alert-success\">
              ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </div>
  \t<h1>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
    <div class=\"grid-container\">
  \t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "      <div class=\"bordure\">
  \t    <h3>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 20), "html", null, true);
            echo "</h3>
  \t     <a  href=";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, false, 21), "html", null, true);
            echo "> <img class='grid-item'  src=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 21), "html", null, true);
            echo " alt=''></a>
         <p>";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 22);
            echo "</p>
         ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 23) != null)) {
                // line 24
                echo "     \t\t  <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 24), "html", null, true);
                echo " €</p>
     \t  ";
            }
            // line 26
            echo "         ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 27
                echo "           <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formArticle_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\"><i class=\"fas fa-marker fa-1x\" style=\"color:#000000;\"></i></a>
             &nbsp
           <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\"><i class= \"fas fa-trash fa-1x\" style=\"color:#000000;\"></i></a></p>
         ";
            }
            // line 31
            echo "       </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  </div>
  <div id=\"admin\" class=\"text-center\">
\t\t\t<h4>
\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlist");
        echo "\" class=\"btn btn-dark\">Créer cette wishlist</a>
\t\t\t</h4>
\t</div>
  ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "  <div id=\"admin\" class=\"text-center\">
      <h4>
        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formArticle", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">Ajouter un article</a>
      </h4>
  </div>
  ";
        }
        // line 46
        echo "</body>
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
        return array (  175 => 46,  168 => 42,  164 => 40,  162 => 39,  156 => 36,  151 => 33,  144 => 31,  139 => 29,  133 => 27,  130 => 26,  124 => 24,  122 => 23,  118 => 22,  112 => 21,  108 => 20,  105 => 19,  101 => 18,  96 => 16,  93 => 15,  84 => 12,  81 => 11,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <head>
      <link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\" />
  </head>

  <body class=\"theme\">
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
  \t{% for article in articles %}
      <div class=\"bordure\">
  \t    <h3>{{article.nom}}</h3>
  \t     <a  href={{article.url}}> <img class='grid-item'  src={{article.image}} alt=''></a>
         <p>{{article.description | raw}}</p>
         {% if article.prix != null %}
     \t\t  <p>{{article.prix }} €</p>
     \t  {% endif %}
         {% if is_granted('ROLE_ADMIN') %}
           <p><a href=\"{{path('formArticle_modif',{id: article.id})}}\"><i class=\"fas fa-marker fa-1x\" style=\"color:#000000;\"></i></a>
             &nbsp
           <a href=\"{{path('deleteArticle',{id: article.id})}}\"><i class= \"fas fa-trash fa-1x\" style=\"color:#000000;\"></i></a></p>
         {% endif %}
       </div>
    {% endfor %}
  </div>
  <div id=\"admin\" class=\"text-center\">
\t\t\t<h4>
\t\t\t\t<a href=\"{{path('formWishlist')}}\" class=\"btn btn-dark\">Créer cette wishlist</a>
\t\t\t</h4>
\t</div>
  {% if is_granted('ROLE_ADMIN') %}
  <div id=\"admin\" class=\"text-center\">
      <h4>
        <a href=\"{{path('formArticle',{id: theme.id})}}\" class=\"btn btn-dark\">Ajouter un article</a>
      </h4>
  </div>
  {% endif %}
</body>
{% endblock %}
", "theme/theme.html.twig", "/Users/laura/Desktop/wishlist/templates/theme/theme.html.twig");
    }
}
