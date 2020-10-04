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

/* theme/modifierTheme.html.twig */
class __TwigTemplate_4bbb3b83662d33eb3885500029c6296255fe1b0bed6e7991462355395943fc43 extends \Twig\Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theme/modifierTheme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theme/modifierTheme.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "theme/modifierTheme.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "    <head>
      <meta charset=\"utf-8\">
      <link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\" />
    </head>
    <body>
      <div class = \"container\">
        <div class=\"col-md-3 offset-md-2\">
        </div>
        <div class = \"form_horizontal\">
        ";
            // line 16
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
            echo "
          <div class=\"row justify-content-md-center\">
            <div class = \"col-sm-8 control-label\">
              <h1>Modification du thème ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h1>
              ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'row', ["label" => "Nom", "attr" => ["placeholder" => "nom", "autofocus" => "true"]]);
            echo "
            </div>
          </div>
          <div class=\"row justify-content-md-center\">
            <div class = \"col-sm-8 control-label\">
              ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "url_img", [], "any", false, false, false, 25), 'row', ["label" => "Logo", "attr" => ["placeholder" => "prénom"]]);
            echo "
            </div>
          </div>
          <div class=\"row justify-content-md-center\">
            <div class = \"col-sm-8 control-label\">
              ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 30, $this->source); })()), "imageFond", [], "any", false, false, false, 30) == null)) {
                // line 31
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "imageFile", [], "any", false, false, false, 31), 'row', ["label" => "Image de fond", "attr" => ["placeholder" => "Choisir un fichier"]]);
                echo "
              ";
            } else {
                // line 33
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "imageFile", [], "any", false, false, false, 33), 'row', ["label" => "Image de fond", "attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 33, $this->source); })()), "imageFond", [], "any", false, false, false, 33)]]);
                echo "
              ";
            }
            // line 35
            echo "            </div>
          </div>
          <div class=\"col-md-12 offset-md-8\">
            <br>
            <button type=\"submit\" class=\"btn btn-dark\">Valider</button>
          </div>
          ";
            // line 41
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
            echo "
        </div>
    </body>
  ";
        }
        // line 45
        echo "  <script>
      \$('.custom-file-input').on('change', function(event) {
        var inputFile = event.currentTarget;
        \$(inputFile).parent()
        .find('.custom-file-label')
        .html(inputFile.files[0].name);
       });
  </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "theme/modifierTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  133 => 41,  125 => 35,  119 => 33,  113 => 31,  111 => 30,  103 => 25,  95 => 20,  91 => 19,  85 => 16,  74 => 7,  71 => 6,  61 => 5,  50 => 2,  48 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}

{% block body %}
  {% if app.user %}
    <head>
      <meta charset=\"utf-8\">
      <link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\" />
    </head>
    <body>
      <div class = \"container\">
        <div class=\"col-md-3 offset-md-2\">
        </div>
        <div class = \"form_horizontal\">
        {{ form_start(form) }}
          <div class=\"row justify-content-md-center\">
            <div class = \"col-sm-8 control-label\">
              <h1>Modification du thème {{theme.name}}</h1>
              {{ form_row(form.name, {'label': 'Nom', 'attr':{'placeholder': 'nom', 'autofocus': 'true'}}) }}
            </div>
          </div>
          <div class=\"row justify-content-md-center\">
            <div class = \"col-sm-8 control-label\">
              {{ form_row(form.url_img, {'label': 'Logo', 'attr':{'placeholder': 'prénom'}}) }}
            </div>
          </div>
          <div class=\"row justify-content-md-center\">
            <div class = \"col-sm-8 control-label\">
              {% if theme.imageFond == NULL %}
                {{ form_row(form.imageFile, {'label': 'Image de fond', 'attr':{'placeholder': 'Choisir un fichier'}}) }}
              {% else %}
                {{ form_row(form.imageFile, {'label': 'Image de fond', 'attr':{'placeholder': theme.imageFond}}) }}
              {% endif %}
            </div>
          </div>
          <div class=\"col-md-12 offset-md-8\">
            <br>
            <button type=\"submit\" class=\"btn btn-dark\">Valider</button>
          </div>
          {{ form_end(form) }}
        </div>
    </body>
  {% endif %}
  <script>
      \$('.custom-file-input').on('change', function(event) {
        var inputFile = event.currentTarget;
        \$(inputFile).parent()
        .find('.custom-file-label')
        .html(inputFile.files[0].name);
       });
  </script>
  {% endblock %}
", "theme/modifierTheme.html.twig", "/Users/laura/Desktop/wishlist/templates/theme/modifierTheme.html.twig");
    }
}
