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

/* wishlist/formWishlistPrepara.html.twig */
class __TwigTemplate_00bd25f8875069328244b75fe729eefd2e3c3a339f6c5ce379c291467da4c5c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/formWishlistPrepara.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/formWishlistPrepara.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/formWishlistPrepara.html.twig", 1);
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
    <h1>Créer une wishlist avec pour thème ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo " :</h1>
    <br>
  </div>
  <div class = \"form_horizontal\">
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'row', ["label" => "Nom *", "attr" => ["placeholder" => "nom de la wishlist"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 19, $this->source); })()), "destinataire", [], "any", false, false, false, 19), 'row', ["label" => "Destinataire", "attr" => ["placeholder" => "destinataire de la wishlist"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 24, $this->source); })()), "budget", [], "any", false, false, false, 24), 'row', ["label" => "Budget *", "attr" => ["placeholder" => "budget"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 29, $this->source); })()), "dateexpiration", [], "any", false, false, false, 29), 'row', ["label" => "Expire le: *"]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'row', ["label" => "Description: *", "attr" => ["placeholder" => "description"]]);
        echo "
        </div>
      </div>
      <div class=\"col-md-12 offset-md-8\">
        <br>
        <button type=\"submit\" class=\"btn btn-dark\">

            Créer la wishlist

        </button>
      </div>
      ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/formWishlistPrepara.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 45,  121 => 34,  113 => 29,  105 => 24,  97 => 19,  89 => 14,  83 => 11,  76 => 7,  71 => 4,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{%form_theme formWishlist 'bootstrap_4_layout.html.twig'%}
{% block body %}

<div class = \"container\">
  <div class=\"offset-md-2\">
    <h1>Créer une wishlist avec pour thème {{theme.name}} :</h1>
    <br>
  </div>
  <div class = \"form_horizontal\">
    {{ form_start(formWishlist) }}
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.nom, {'label': 'Nom *', 'attr':{'placeholder': 'nom de la wishlist'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.destinataire, {'label': 'Destinataire', 'attr':{'placeholder': 'destinataire de la wishlist'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.budget, {'label': 'Budget *', 'attr':{'placeholder': 'budget'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.dateexpiration,{'label': 'Expire le: *'} )}}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
            {{ form_row(formWishlist.description, {'label': 'Description: *', 'attr':{'placeholder': 'description'}}) }}
        </div>
      </div>
      <div class=\"col-md-12 offset-md-8\">
        <br>
        <button type=\"submit\" class=\"btn btn-dark\">

            Créer la wishlist

        </button>
      </div>
      {{form_end(formWishlist)}}
    </div>
  </div>
{% endblock %}
", "wishlist/formWishlistPrepara.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/formWishlistPrepara.html.twig");
    }
}
