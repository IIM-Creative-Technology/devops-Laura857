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

/* wishlist/formWishlist.html.twig */
class __TwigTemplate_2774e13f1fa9759e738a4fe0dc7ddb50482d044ae220fdf0ab416f86df1b157c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/formWishlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/formWishlist.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/formWishlist.html.twig", 1);
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
        echo "
<div class = \"container\">
  <div class=\"offset-md-2\">
    <h1>";
        // line 7
        if ((isset($context["modifmode"]) || array_key_exists("modifmode", $context) ? $context["modifmode"] : (function () { throw new RuntimeError('Variable "modifmode" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "          Modifier une wishlist :
        ";
        } else {
            // line 10
            echo "          Créer une wishlist :
        ";
        }
        // line 12
        echo "    </h1>
    <br>
  </div>
  <div class = \"form_horizontal\">
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 19, $this->source); })()), "wishlist", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), 'row', ["label" => "Nom", "attr" => ["placeholder" => "nom de la wishlist"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 24, $this->source); })()), "theme", [], "any", false, false, false, 24), 'row', ["label" => " ", "attr" => ["placeholder" => "theme de la wishlist"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), 'row', ["label" => " ", "attr" => ["placeholder" => "theme de la wishlist"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 34, $this->source); })()), "wishlist", [], "any", false, false, false, 34), "destinataire", [], "any", false, false, false, 34), 'row', ["label" => "Destinataire", "attr" => ["placeholder" => "destinataire de la wishlist"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 39, $this->source); })()), "wishlist", [], "any", false, false, false, 39), "budget", [], "any", false, false, false, 39), 'row', ["label" => "Budget", "attr" => ["placeholder" => "budget"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 44, $this->source); })()), "wishlist", [], "any", false, false, false, 44), "dateexpiration", [], "any", false, false, false, 44), 'row', ["label" => "Expire le:"]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 49, $this->source); })()), "wishlist", [], "any", false, false, false, 49), "description", [], "any", false, false, false, 49), 'row', ["label" => "Description:", "attr" => ["placeholder" => "description"]]);
        echo "
        </div>
      </div>
      <div class=\"col-md-12 offset-md-8\">
        <br>
        <button type=\"submit\" class=\"btn btn-dark\">
          ";
        // line 55
        if ((isset($context["modifmode"]) || array_key_exists("modifmode", $context) ? $context["modifmode"] : (function () { throw new RuntimeError('Variable "modifmode" does not exist.', 55, $this->source); })())) {
            // line 56
            echo "            Modifier la wishlist
          ";
        } else {
            // line 58
            echo "            Créer la wishlist
          ";
        }
        // line 60
        echo "        </button>
      </div>
      ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/formWishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 62,  165 => 60,  161 => 58,  157 => 56,  155 => 55,  146 => 49,  138 => 44,  130 => 39,  122 => 34,  114 => 29,  106 => 24,  98 => 19,  92 => 16,  86 => 12,  82 => 10,  78 => 8,  76 => 7,  71 => 4,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{%form_theme formWishlist 'bootstrap_4_layout.html.twig'%}
{% block body %}

<div class = \"container\">
  <div class=\"offset-md-2\">
    <h1>{%if modifmode %}
          Modifier une wishlist :
        {%else%}
          Créer une wishlist :
        {%endif%}
    </h1>
    <br>
  </div>
  <div class = \"form_horizontal\">
    {{ form_start(formWishlist) }}
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.wishlist.nom, {'label': 'Nom', 'attr':{'placeholder': 'nom de la wishlist'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.theme, {'label': ' ', 'attr':{'placeholder': 'theme de la wishlist'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.name, {'label': ' ', 'attr':{'placeholder': 'theme de la wishlist'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.wishlist.destinataire, {'label': 'Destinataire', 'attr':{'placeholder': 'destinataire de la wishlist'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.wishlist.budget, {'label': 'Budget', 'attr':{'placeholder': 'budget'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.wishlist.dateexpiration,{'label': 'Expire le:'} )}}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
            {{ form_row(formWishlist.wishlist.description, {'label': 'Description:', 'attr':{'placeholder': 'description'}}) }}
        </div>
      </div>
      <div class=\"col-md-12 offset-md-8\">
        <br>
        <button type=\"submit\" class=\"btn btn-dark\">
          {% if modifmode %}
            Modifier la wishlist
          {%else%}
            Créer la wishlist
          {%endif%}
        </button>
      </div>
      {{form_end(formWishlist)}}
    </div>
  </div>
{% endblock %}
", "wishlist/formWishlist.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/formWishlist.html.twig");
    }
}
