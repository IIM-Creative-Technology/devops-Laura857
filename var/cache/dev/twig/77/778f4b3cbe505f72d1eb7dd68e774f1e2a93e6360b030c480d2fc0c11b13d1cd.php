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

/* wishlist/modifierTheme.html.twig */
class __TwigTemplate_9ae1de0e90ff54c95c1a462b82d16e847e60a645e86c7460e6f8170aa42c4a01 extends \Twig\Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/modifierTheme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/modifierTheme.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/modifierTheme.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5)) {
            // line 6
            echo "<head>
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

              <div class = \"col-sm-6 control-label\">
                <h1>Modification du thème ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</h1>
                ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), 'row', ["label" => "Nom", "attr" => ["placeholder" => "nom", "autofocus" => "true"]]);
            echo "
              </div>
            </div>
            <div class=\"row justify-content-md-center\">
              <div class = \"col-sm-6 control-label\">
                ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "url_img", [], "any", false, false, false, 27), 'row', ["label" => "Logo", "attr" => ["placeholder" => "prénom"]]);
            echo "
              </div>
            </div>


            <div class=\"col-md-12 offset-md-8\">
                <br>
                <button type=\"submit\" class=\"btn btn-dark\">Valider</button>
              </div>
              ";
            // line 36
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
            echo "
        </div>

</body>

";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/modifierTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  102 => 27,  94 => 22,  90 => 21,  82 => 16,  70 => 6,  68 => 5,  58 => 4,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.html.twig' %}
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

              <div class = \"col-sm-6 control-label\">
                <h1>Modification du thème {{theme.name}}</h1>
                {{ form_row(form.name, {'label': 'Nom', 'attr':{'placeholder': 'nom', 'autofocus': 'true'}}) }}
              </div>
            </div>
            <div class=\"row justify-content-md-center\">
              <div class = \"col-sm-6 control-label\">
                {{ form_row(form.url_img, {'label': 'Logo', 'attr':{'placeholder': 'prénom'}}) }}
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
{% endblock %}
", "wishlist/modifierTheme.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/modifierTheme.html.twig");
    }
}
