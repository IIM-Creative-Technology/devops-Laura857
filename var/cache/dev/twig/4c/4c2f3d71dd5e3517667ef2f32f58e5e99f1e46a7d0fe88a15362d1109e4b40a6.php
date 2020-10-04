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
class __TwigTemplate_f0b184c232d39296a212d469ece1067c324409e094629126f4a1215e677c20b0 extends \Twig\Template
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class = \"container\">
  <div class=\"offset-md-2\">
    <h1>";
        // line 9
        if ((isset($context["modifmode"]) || array_key_exists("modifmode", $context) ? $context["modifmode"] : (function () { throw new RuntimeError('Variable "modifmode" does not exist.', 9, $this->source); })())) {
            echo " Modifier un article: ";
        } else {
            echo "Ajout d'un article:";
        }
        echo " </h1>
    <br>
  </div>
  <div class = \"form_horizontal\">
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'row', ["label" => "Nom *", "attr" => ["placeholder" => "nom de l'article"]]);
        echo "
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 21, $this->source); })()), "prix", [], "any", false, false, false, 21), 'row', ["label" => "Prix", "attr" => ["placeholder" => "prix"]]);
        echo "
        </div>
      </div>
      ";
        // line 24
        if ((isset($context["errorUrl"]) || array_key_exists("errorUrl", $context) ? $context["errorUrl"] : (function () { throw new RuntimeError('Variable "errorUrl" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "      <div class=\"row justify-content-md-center\">
        <div class=\"col-sm-6 control-label\"  >
            <small id=\"emailHelp\"   style=\"color:red;\" >url invalide, veuillez entrer une adresse du type : http://exemple.fr</small>
            ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 28, $this->source); })()), "url", [], "any", false, false, false, 28), 'row', ["label" => "Url du site * ", "attr" => ["class" => "form-control is-invalid"]]);
            echo "
        </div>
      </div>


      ";
        } else {
            // line 34
            echo "      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 36, $this->source); })()), "url", [], "any", false, false, false, 36), 'row', ["label" => "Url du site * ", "attr" => ["placeholder" => "url du site"]]);
            echo "
        </div>
      </div>
      ";
        }
        // line 40
        echo "      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 42, $this->source); })()), "image", [], "any", false, false, false, 42) == null)) {
            // line 43
            echo "          ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 43, $this->source); })()), "imageFile", [], "any", false, false, false, 43), 'row', ["label" => "Image de l'article", "attr" => ["placeholder" => "Choisir un fichier"]]);
            echo "
          ";
        } else {
            // line 45
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 45, $this->source); })()), "imageFile", [], "any", false, false, false, 45), 'row', ["label" => "Image de fond", "attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 45, $this->source); })()), "image", [], "any", false, false, false, 45)]]);
            echo "
          ";
        }
        // line 47
        echo "        </div>
      </div>

      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'row', ["label" => "Description:", "attr" => ["placeholder" => "description"]]);
        echo "
        </div>
      </div>
      <div class=\"col-md-12 offset-md-8\">
        <br>
        <button type=\"submit\" class=\"btn btn-dark\">
          ";
        // line 58
        if ((isset($context["modifmode"]) || array_key_exists("modifmode", $context) ? $context["modifmode"] : (function () { throw new RuntimeError('Variable "modifmode" does not exist.', 58, $this->source); })())) {
            // line 59
            echo "            Modifier l'article
          ";
        } else {
            // line 61
            echo "            Ajouter l'article
          ";
        }
        // line 63
        echo "        </button>
      </div>
    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
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
        return "wishlist/formArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 65,  178 => 63,  174 => 61,  170 => 59,  168 => 58,  159 => 52,  152 => 47,  146 => 45,  140 => 43,  138 => 42,  134 => 40,  127 => 36,  123 => 34,  114 => 28,  109 => 25,  107 => 24,  101 => 21,  93 => 16,  87 => 13,  76 => 9,  71 => 6,  61 => 5,  50 => 1,  48 => 2,  35 => 1,);
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
          {{ form_row(formArticle.nom, {'label': 'Nom *', 'attr':{'placeholder': 'nom de l\\'article'}}) }}
        </div>
      </div>
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formArticle.prix, {'label': 'Prix', 'attr':{'placeholder': 'prix'}}) }}
        </div>
      </div>
      {% if errorUrl %}
      <div class=\"row justify-content-md-center\">
        <div class=\"col-sm-6 control-label\"  >
            <small id=\"emailHelp\"   style=\"color:red;\" >url invalide, veuillez entrer une adresse du type : http://exemple.fr</small>
            {{ form_row(formArticle.url,{'label': 'Url du site * ','attr':{  'class': 'form-control is-invalid'}}) }}
        </div>
      </div>


      {% else %}
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {{ form_row(formArticle.url, {'label': 'Url du site * ', 'attr':{'placeholder': 'url du site'}}) }}
        </div>
      </div>
      {% endif %}
      <div class=\"row justify-content-md-center\">
        <div class = \"col-sm-6 control-label\">
          {% if article.image == NULL %}
          {{ form_row(formArticle.imageFile, {'label': 'Image de l\\'article', 'attr':{'placeholder': 'Choisir un fichier'}}) }}
          {% else %}
            {{ form_row(formArticle.imageFile, {'label': 'Image de fond', 'attr':{'placeholder': article.image}}) }}
          {% endif %}
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
<script>
    \$('.custom-file-input').on('change', function(event) {
      var inputFile = event.currentTarget;
      \$(inputFile).parent()
      .find('.custom-file-label')
      .html(inputFile.files[0].name);
     });
</script>
{% endblock %}
", "wishlist/formArticle.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/formArticle.html.twig");
    }
}
