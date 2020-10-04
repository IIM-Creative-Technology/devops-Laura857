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

/* wishlist/formArticle.html.twig */
class __TwigTemplate_2d6ce6c2f30ac75e83fdd3d0d0096e676cf7b4d806a68a8c879174c189559e03 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/formArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/formArticle.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/formArticle.html.twig", 1);
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
            echo " Modifier un article: ";
        } else {
            echo "Ajout d'un article:";
        }
        echo " </h1>
    <br>
  </div>
  <div class = \"form_horizontal\">
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'row', ["label" => "Nom", "attr" => ["placeholder" => "nom de l'article"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 19, $this->source); })()), "prix", [], "any", false, false, false, 19), 'row', ["label" => "Prix", "attr" => ["placeholder" => "prix"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 24, $this->source); })()), "url", [], "any", false, false, false, 24), 'row', ["label" => "Url", "attr" => ["placeholder" => "url de l'article"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'row', ["label" => "Description:", "attr" => ["placeholder" => "description"]]);
        echo "
        </div>
      </div>
      <div class=\"col-md-12 offset-md-8\">
        <br>
        <button type=\"submit\" class=\"btn btn-dark\">
          ";
        // line 35
        if ((isset($context["modifmode"]) || array_key_exists("modifmode", $context) ? $context["modifmode"] : (function () { throw new RuntimeError('Variable "modifmode" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "            Modifier l'article
          ";
        } else {
            // line 38
            echo "            Ajouter l'article
          ";
        }
        // line 40
        echo "        </button>
      </div>
    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
  </div>
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/formArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  136 => 40,  132 => 38,  128 => 36,  126 => 35,  117 => 29,  109 => 24,  101 => 19,  93 => 14,  87 => 11,  76 => 7,  71 => 4,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{%form_theme formArticle 'bootstrap_4_layout.html.twig'%}
{% block body %}

<div class = \"container\">
  <div class=\"offset-md-2\">
    <h1>{% if modifmode %} Modifier un article: {% else %}Ajout d'un article:{% endif %} </h1>
    <br>
  </div>
  <div class = \"form_horizontal\">
    {{ form_start(formArticle) }}
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formArticle.nom, {'label': 'Nom', 'attr':{'placeholder': 'nom de l\\'article'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formArticle.prix, {'label': 'Prix', 'attr':{'placeholder': 'prix'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formArticle.url, {'label': 'Url', 'attr':{'placeholder': 'url de l\\'article'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
            {{ form_row(formArticle.description, {'label': 'Description:', 'attr':{'placeholder': 'description'}}) }}
        </div>
      </div>
      <div class=\"col-md-12 offset-md-8\">
        <br>
        <button type=\"submit\" class=\"btn btn-dark\">
          {% if modifmode %}
            Modifier l'article
          {% else %}
            Ajouter l'article
          {% endif %}
        </button>
      </div>
    {{form_end(formArticle)}}
  </div>
</div>
</div>

{% endblock %}
", "wishlist/formArticle.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/formArticle.html.twig");
    }
}
