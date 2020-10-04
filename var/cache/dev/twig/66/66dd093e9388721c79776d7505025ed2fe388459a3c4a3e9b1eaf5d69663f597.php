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

/* security/inscription.html.twig */
class __TwigTemplate_ccbb6295091dc2d0cc7a5cf9216cca484211b7e9925bd88e774cc43f05c79d4c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/inscription.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/inscription.html.twig", 1);
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
    <div class=\"col-md-3 offset-md-2\">
      <h1>Inscription</h1>
      <br>
    </div>
    <div class = \"form_horizontal\">
      ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'row', ["label" => "Nom", "attr" => ["placeholder" => "nom", "autofocus" => "true"]]);
        echo "
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'row', ["label" => "Prénom", "attr" => ["placeholder" => "prénom"]]);
        echo "
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "pseudo", [], "any", false, false, false, 25), 'row', ["label" => "Pseudo", "attr" => ["placeholder" => "pseudo"]]);
        echo "
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'row', ["label" => "Email", "attr" => ["placeholder" => "email"]]);
        echo "
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "password", [], "any", false, false, false, 35), 'row', ["label" => "Mot de passe", "attr" => ["placeholder" => "mot de passe"]]);
        echo "
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "confirm_password", [], "any", false, false, false, 40), 'row', ["label" => "Confirmation du mot de passe", "attr" => ["placeholder" => "mot de passe"]]);
        echo "
          </div>
        </div>
        <div class=\"col-md-12 offset-md-8\">
          <br>
          <button type=\"submit\" class=\"btn btn-dark\">Valider</button>
        </div>
        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
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
        return "security/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 47,  125 => 40,  117 => 35,  109 => 30,  101 => 25,  93 => 20,  85 => 15,  79 => 12,  71 => 6,  61 => 5,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}


{% block body %}
  <div class = \"container\">
    <div class=\"col-md-3 offset-md-2\">
      <h1>Inscription</h1>
      <br>
    </div>
    <div class = \"form_horizontal\">
      {{ form_start(form) }}
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            {{ form_row(form.name, {'label': 'Nom', 'attr':{'placeholder': 'nom', 'autofocus': 'true'}}) }}
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            {{ form_row(form.prenom, {'label': 'Prénom', 'attr':{'placeholder': 'prénom'}}) }}
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            {{ form_row(form.pseudo, {'label': 'Pseudo', 'attr':{'placeholder': 'pseudo'}}) }}
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            {{ form_row(form.email, {'label': 'Email', 'attr':{'placeholder': 'email'}}) }}
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            {{ form_row(form.password, {'label': 'Mot de passe', 'attr':{'placeholder': 'mot de passe'}}) }}
          </div>
        </div>
        <div class=\"row justify-content-md-center\">
          <div class = \"col-sm-6 control-label\">
            {{ form_row(form.confirm_password, {'label': 'Confirmation du mot de passe', 'attr':{'placeholder': 'mot de passe'}}) }}
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

{% endblock %}
", "security/inscription.html.twig", "/Users/laura/Desktop/wishlist/templates/security/inscription.html.twig");
    }
}
