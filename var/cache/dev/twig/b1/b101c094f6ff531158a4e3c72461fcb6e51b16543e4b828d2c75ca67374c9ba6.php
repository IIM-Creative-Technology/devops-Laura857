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
class __TwigTemplate_5c1369e77aa049870aae7c545681f2fa0f9bc95cf28e0db31dc1720f24de68e8 extends \Twig\Template
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
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 20, $this->source); })()), "wishlist", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), 'row', ["label" => "Nom *", "attr" => ["placeholder" => "nom de la wishlist", "autofocus" => "true"]]);
        echo "
        </div>
      </div>
      ";
        // line 23
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "      <div class=\"row justify-content-md-center\">
          <div class=\"col-sm-6 control-label\" >
            <small id=\"emailHelp\"   style=\"color:red;\" > ! Rentrer un thème</small>
            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 27, $this->source); })()), "theme", [], "any", false, false, false, 27), 'row', ["label" => " ", "attr" => ["class" => "form-control is-invalid", "placeholder" => "thème de la wishlist"]]);
            echo "
          </div>
        </div>
      ";
        } else {
            // line 31
            echo "        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 33, $this->source); })()), "theme", [], "any", false, false, false, 33), 'row', ["id" => "themeP", "label" => " ", "attr" => ["placeholder" => "theme de la wishlist"]]);
            echo "
          </div>
        </div>
      ";
        }
        // line 37
        echo "      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), 'row', ["label" => " ", "attr" => ["placeholder" => "theme de la wishlist"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 44, $this->source); })()), "wishlist", [], "any", false, false, false, 44), "destinataire", [], "any", false, false, false, 44), 'row', ["label" => "Destinataire", "attr" => ["placeholder" => "destinataire de la wishlist"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 49, $this->source); })()), "wishlist", [], "any", false, false, false, 49), "budget", [], "any", false, false, false, 49), 'row', ["label" => "Budget *", "attr" => ["placeholder" => "budget"]]);
        echo "
        </div>
      </div>
      ";
        // line 52
        if ((isset($context["errorDate"]) || array_key_exists("errorDate", $context) ? $context["errorDate"] : (function () { throw new RuntimeError('Variable "errorDate" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "      <div class=\"row justify-content-md-center\">
        <div class=\"col-sm-6 control-label\"  >
            <small id=\"emailHelp\"   style=\"color:red;\" > ! Date dépassée</small>
            ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 56, $this->source); })()), "wishlist", [], "any", false, false, false, 56), "dateexpiration", [], "any", false, false, false, 56), 'row', ["label" => "Expire le: *", "attr" => ["class" => "form-control is-invalid"]]);
            echo "
        </div>
      </div>
      ";
        } else {
            // line 60
            echo "      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 62, $this->source); })()), "wishlist", [], "any", false, false, false, 62), "dateexpiration", [], "any", false, false, false, 62), 'row', ["label" => "Expire le: *"]);
            echo "
        </div>
      </div>
      ";
        }
        // line 66
        echo "
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 69, $this->source); })()), "wishlist", [], "any", false, false, false, 69), "description", [], "any", false, false, false, 69), 'row', ["label" => "Description: *", "attr" => ["placeholder" => "description"]]);
        echo "
        </div>
      </div>
      <div class=\"col-md-12 offset-md-8\">
        <br>
        <button id=\"submitForm\" class=\"btn btn-dark\" >
          ";
        // line 75
        if ((isset($context["modifmode"]) || array_key_exists("modifmode", $context) ? $context["modifmode"] : (function () { throw new RuntimeError('Variable "modifmode" does not exist.', 75, $this->source); })())) {
            // line 76
            echo "            Modifier la wishlist
          ";
        } else {
            // line 78
            echo "            Créer la wishlist
          ";
        }
        // line 80
        echo "        </button>
      </div>
      ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formWishlist"]) || array_key_exists("formWishlist", $context) ? $context["formWishlist"] : (function () { throw new RuntimeError('Variable "formWishlist" does not exist.', 82, $this->source); })()), 'form_end');
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
        return array (  209 => 82,  205 => 80,  201 => 78,  197 => 76,  195 => 75,  186 => 69,  181 => 66,  174 => 62,  170 => 60,  163 => 56,  158 => 53,  156 => 52,  150 => 49,  142 => 44,  134 => 39,  130 => 37,  123 => 33,  119 => 31,  112 => 27,  107 => 24,  105 => 23,  99 => 20,  93 => 17,  86 => 12,  82 => 10,  78 => 8,  76 => 7,  71 => 4,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
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
          {{ form_row(formWishlist.wishlist.nom, {'label': 'Nom *', 'attr':{'placeholder': 'nom de la wishlist', 'autofocus': 'true'}}) }}
        </div>
      </div>
      {% if error %}
      <div class=\"row justify-content-md-center\">
          <div class=\"col-sm-6 control-label\" >
            <small id=\"emailHelp\"   style=\"color:red;\" > ! Rentrer un thème</small>
            {{ form_row(formWishlist.theme, {'label': ' ', 'attr':{  'class': 'form-control is-invalid','placeholder': 'thème de la wishlist'}}) }}
          </div>
        </div>
      {% else %}
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            {{ form_row(formWishlist.theme, {'id':'themeP','label': ' ', 'attr':{'placeholder': 'theme de la wishlist'}}) }}
          </div>
        </div>
      {% endif %}
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
          {{ form_row(formWishlist.wishlist.budget, {'label': 'Budget *', 'attr':{'placeholder': 'budget'}}) }}
        </div>
      </div>
      {% if errorDate %}
      <div class=\"row justify-content-md-center\">
        <div class=\"col-sm-6 control-label\"  >
            <small id=\"emailHelp\"   style=\"color:red;\" > ! Date dépassée</small>
            {{ form_row(formWishlist.wishlist.dateexpiration,{'label': 'Expire le: *','attr':{  'class': 'form-control is-invalid'}}) }}
        </div>
      </div>
      {% else %}
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formWishlist.wishlist.dateexpiration,{'label': 'Expire le: *'} )}}
        </div>
      </div>
      {% endif %}

      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
            {{ form_row(formWishlist.wishlist.description, {'label': 'Description: *', 'attr':{'placeholder': 'description'}}) }}
        </div>
      </div>
      <div class=\"col-md-12 offset-md-8\">
        <br>
        <button id=\"submitForm\" class=\"btn btn-dark\" >
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
