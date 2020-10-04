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

/* theme/ajoutTheme.html.twig */
class __TwigTemplate_6aabd78f548661ea28cc40f50b56cdf15fc64d0637f5c402e2279c7cbde3206f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theme/ajoutTheme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theme/ajoutTheme.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "theme/ajoutTheme.html.twig", 1);
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
        echo "  <div class = \"container\">
    <div class=\"offset-md-2\">
      <h1>Ajout d'un thème</h1>
      <br>
    </div>
    <div class = \"form_horizontal\">
      ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-8 control-label\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'row', ["label" => "Nom du thème *", "attr" => ["placeholder" => "nom", "autofocus" => "true"]]);
        echo "
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-8 control-label\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "url_img", [], "any", false, false, false, 20), 'row', ["label" => "Logo *", "attr" => ["placeholder" => "url"]]);
        echo "
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-8 control-label\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "imageFile", [], "any", false, false, false, 25), 'row', ["label" => "Image de fond *", "attr" => ["placeholder" => "choisir un fichier"]]);
        echo "
          </div>
        </div>
        <div class=\"col-md-12 offset-md-8\">
          <br>
          <button type=\"submit\" class=\"btn btn-dark\">Valider</button>
        </div>
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
      </div>
    </div>
  </div>
  <script>
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
        return "theme/ajoutTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  101 => 25,  93 => 20,  85 => 15,  79 => 12,  71 => 6,  61 => 5,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}


{% block body %}
  <div class = \"container\">
    <div class=\"offset-md-2\">
      <h1>Ajout d'un thème</h1>
      <br>
    </div>
    <div class = \"form_horizontal\">
      {{ form_start(form) }}
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-8 control-label\">
            {{ form_row(form.name, {'label': 'Nom du thème *', 'attr':{'placeholder': 'nom', 'autofocus': 'true'}}) }}
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-8 control-label\">
            {{ form_row(form.url_img, {'label': 'Logo *', 'attr':{'placeholder': 'url'}}) }}
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-8 control-label\">
            {{ form_row(form.imageFile, {'label': 'Image de fond *', 'attr':{'placeholder': 'choisir un fichier'}}) }}
          </div>
        </div>
        <div class=\"col-md-12 offset-md-8\">
          <br>
          <button type=\"submit\" class=\"btn btn-dark\">Valider</button>
        </div>
        {{ form_end(form) }}
      </div>
    </div>
  </div>
  <script>
      \$('.custom-file-input').on('change', function(event) {
        var inputFile = event.currentTarget;
        \$(inputFile).parent()
        .find('.custom-file-label')
        .html(inputFile.files[0].name);
     });
  </script>
{% endblock %}
", "theme/ajoutTheme.html.twig", "/Users/laura/Desktop/wishlist/templates/theme/ajoutTheme.html.twig");
    }
}
