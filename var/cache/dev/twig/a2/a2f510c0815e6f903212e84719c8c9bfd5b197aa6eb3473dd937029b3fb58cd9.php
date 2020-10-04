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

/* wishlist/modaleView.html.twig */
class __TwigTemplate_00e2a8ccac7ad55fddd07eeab79526097a4c5505f8db0cec36807aaa1174a6ec extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/modaleView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/modaleView.html.twig"));

        // line 1
        echo "<script src=\"https://kit.fontawesome.com/ebc72dbf59.js\" crossorigin=\"anonymous\"></script>
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
 <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>


";
        // line 6
        if (twig_test_empty((isset($context["wishlists"]) || array_key_exists("wishlists", $context) ? $context["wishlists"] : (function () { throw new RuntimeError('Variable "wishlists" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "  <div class = \"contenu\">
    <p>Vous n'avez pas encore crée de wishlist !!! Cliquez sur le bouton ci-dessous pour créer
      votre première wishlist et y ajoutere l'article choisi.</p>
    <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlist", ["a" => (isset($context["idA"]) || array_key_exists("idA", $context) ? $context["idA"] : (function () { throw new RuntimeError('Variable "idA" does not exist.', 10, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-dark\">Créer ma première wishlist</a>
  </div>
";
        } else {
            // line 13
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["wishlists"]) || array_key_exists("wishlists", $context) ? $context["wishlists"] : (function () { throw new RuntimeError('Variable "wishlists" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["wishlist"]) {
                // line 14
                echo "    <a class=\"list-group-item list-group-item\" id=\"list-home-list\"  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addArticles", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 14), "idA" => (isset($context["idA"]) || array_key_exists("idA", $context) ? $context["idA"] : (function () { throw new RuntimeError('Variable "idA" does not exist.', 14, $this->source); })())]), "html", null, true);
                echo "\" aria-controls=\"home\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "nom", [], "any", false, false, false, 14), "html", null, true);
                echo "</a>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wishlist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/modaleView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  63 => 13,  57 => 10,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://kit.fontawesome.com/ebc72dbf59.js\" crossorigin=\"anonymous\"></script>
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
 <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>


{% if wishlists is empty %}
  <div class = \"contenu\">
    <p>Vous n'avez pas encore crée de wishlist !!! Cliquez sur le bouton ci-dessous pour créer
      votre première wishlist et y ajoutere l'article choisi.</p>
    <a href=\"{{path('formWishlist',{a:idA})}}\" class=\"btn btn-dark\">Créer ma première wishlist</a>
  </div>
{% else %}
  {% for wishlist in wishlists %}
    <a class=\"list-group-item list-group-item\" id=\"list-home-list\"  href=\"{{path('addArticles',{id: wishlist.id, idA:idA})}}\" aria-controls=\"home\">{{wishlist.nom}}</a>
  {%endfor%}
{%endif%}
", "wishlist/modaleView.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/modaleView.html.twig");
    }
}
