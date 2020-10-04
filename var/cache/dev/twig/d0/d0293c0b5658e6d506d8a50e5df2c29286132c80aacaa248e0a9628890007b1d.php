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

/* wishlist/index.html.twig */
class __TwigTemplate_a7e3ec56d13786782301484ee9d90f0fe1769dc6140b9622e6a9dcd736566fa3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/index.html.twig", 1);
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
        echo "<!-- page d'accueil-->
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\"/>
\t</head>
\t<!-- section de description du site -->
\t<div class=\"header\" id=\"description\">
\t\t<div class=\"container\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h3 style=\"font-family:AboutLove; font-size:50px\">Créez des wishlists gratuitement et à l'infini !</h3>
\t\t\t\t\t<p >
\t\t\t\t\t\tDes anniversaires ? des mariages ? Un cadeau pour votre collègue ? plus la peine de se prendre la tête</p>
\t\t\t\t\t<p>Confectionnez des wishlists - partagez avec vos amis - trouvez des idées de cadeaux
\t\t\t\t\t</p>
\t\t\t\t\t<img style=\" width : 600px; border :solid\" src=\"/aide.png\" alt=\"...\">
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!--liste préparamétrée-->
<div id=\"Competences\" class=\"text-center\">
\t<div class=\"container\">
\t\t<div class=\"section-title center\">
\t\t\t<h2>Quelques suggestions de cadeaux</h2>
\t\t\t<div class=\"line\">
\t\t\t\t<hr>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"space\"></div>
\t\t<div class=\"row\">
\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 41
            echo "\t\t\t<div class=\"col-md-3 col-sm-6 service\">
\t\t\t\t<a style=\"color: #000000\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myTheme", ["id" => twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "urlimg", [], "any", false, false, false, 42), "html", null, true);
            echo "\"></i></a>
\t\t\t\t<h4>
\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myTheme", ["id" => twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>
\t\t\t\t</h4>
\t\t\t\t";
            // line 46
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 47
                echo "\t\t\t\t\t<p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierTheme", ["id" => twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\"><i class=\"fas fa-marker fa-1x\" style=\"color:#000000;\"></i></a>
\t\t\t\t\t\t&nbsp
\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerTheme", ["id" => twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\"><i class= \"fas fa-trash fa-1x\" style=\"color:#000000;\"></i></a></p>
\t\t\t\t";
            }
            // line 51
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t</div>
\t</div>
\t";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "\t<div id=\"admin\" class=\"text-center\">
\t\t\t<a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutTheme");
            echo "\" style=\"color: #000000;\"<i class=\"fa fa-plus-circle fa-3x\"></i></a>
\t\t\t<h4>
\t\t\t\t<a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutTheme");
            echo "\" class=\"btn btn-dark\">Ajouter un thème</a>
\t\t\t</h4>
\t</div>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 59,  169 => 57,  166 => 56,  164 => 55,  160 => 53,  153 => 51,  148 => 49,  142 => 47,  140 => 46,  133 => 44,  126 => 42,  123 => 41,  119 => 40,  94 => 17,  85 => 14,  82 => 13,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- page d'accueil-->
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\"/>
\t</head>
\t<!-- section de description du site -->
\t<div class=\"header\" id=\"description\">
\t\t<div class=\"container\">
\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h3 style=\"font-family:AboutLove; font-size:50px\">Créez des wishlists gratuitement et à l'infini !</h3>
\t\t\t\t\t<p >
\t\t\t\t\t\tDes anniversaires ? des mariages ? Un cadeau pour votre collègue ? plus la peine de se prendre la tête</p>
\t\t\t\t\t<p>Confectionnez des wishlists - partagez avec vos amis - trouvez des idées de cadeaux
\t\t\t\t\t</p>
\t\t\t\t\t<img style=\" width : 600px; border :solid\" src=\"/aide.png\" alt=\"...\">
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!--liste préparamétrée-->
<div id=\"Competences\" class=\"text-center\">
\t<div class=\"container\">
\t\t<div class=\"section-title center\">
\t\t\t<h2>Quelques suggestions de cadeaux</h2>
\t\t\t<div class=\"line\">
\t\t\t\t<hr>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"space\"></div>
\t\t<div class=\"row\">
\t\t{% for theme in themes %}
\t\t\t<div class=\"col-md-3 col-sm-6 service\">
\t\t\t\t<a style=\"color: #000000\" href=\"{{path('myTheme',{id: theme.id})}}\"><i class=\"{{theme.urlimg}}\"></i></a>
\t\t\t\t<h4>
\t\t\t\t\t<a href=\"{{path('myTheme',{id: theme.id})}}\" class=\"btn btn-dark\">{{theme.name}}</a>
\t\t\t\t</h4>
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<p><a href=\"{{path('modifierTheme',{id: theme.id})}}\"><i class=\"fas fa-marker fa-1x\" style=\"color:#000000;\"></i></a>
\t\t\t\t\t\t&nbsp
\t\t\t\t\t<a href=\"{{path('supprimerTheme',{id: theme.id})}}\"><i class= \"fas fa-trash fa-1x\" style=\"color:#000000;\"></i></a></p>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endfor %}
\t\t</div>
\t</div>
\t{% if is_granted('ROLE_ADMIN') %}
\t<div id=\"admin\" class=\"text-center\">
\t\t\t<a href=\"{{path('ajoutTheme')}}\" style=\"color: #000000;\"<i class=\"fa fa-plus-circle fa-3x\"></i></a>
\t\t\t<h4>
\t\t\t\t<a href=\"{{path('ajoutTheme')}}\" class=\"btn btn-dark\">Ajouter un thème</a>
\t\t\t</h4>
\t</div>
\t{% endif %}
{% endblock %}
", "wishlist/index.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/index.html.twig");
    }
}
