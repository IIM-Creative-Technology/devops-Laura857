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

/* security/connexion.html.twig */
class __TwigTemplate_aa2e22be591b6cc449cd0c1ef10c23a32c58c01b675a95ac4bf1924e5cf03655 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/connexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/connexion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/connexion.html.twig", 1);
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
        echo "<form class=\"formulaire\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\" method=\"post\">
    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    <div class=\"alert alert-danger\">Mail ou mot de passe incorrect.<br>Veuillez réessayer.</div>
    ";
        }
        // line 9
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "      <div class=\"mb-3\">
        Vous ête déjà connecté en tant que ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "pseudo", [], "any", false, false, false, 11), "html", null, true);
            echo " <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            echo "\">Déconnexion</a>
      </div>
    ";
        } else {
            // line 14
            echo "      <h1>Connexion</h1>
      <input type=\"email\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" placeholder=\"Entrer votre email\" required autofocus>
      <input type=\"password\" name=\"password\" placeholder=\"Entrer votre mot de passe\" required>
      <input type=\"hidden\" name=\"_csrf_token\"value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
      <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
      <label for=\"remember_me\">Remember me</label>
      <br>
      <center><a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mdpOublie");
            echo "\">Mot de passe oublié</a></center>
      <button type=\"submit\" class=\"btn btn-dark btn-lg btn-block\" style=\"margin-top:10px; margin-bottom:10px\">
        Connexion
      </button>
      <center><a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">Pas de compte ? Inscrit toi !</a></center>
    ";
        }
        // line 27
        echo "</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  115 => 25,  108 => 21,  101 => 17,  96 => 15,  93 => 14,  85 => 11,  82 => 10,  79 => 9,  75 => 7,  73 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
<form class=\"formulaire\" action=\"{{ path('connexion')}}\" method=\"post\">
    {% if error %}
    <div class=\"alert alert-danger\">Mail ou mot de passe incorrect.<br>Veuillez réessayer.</div>
    {% endif %}
    {% if app.user %}
      <div class=\"mb-3\">
        Vous ête déjà connecté en tant que {{ app.user.pseudo }} <a href=\"{{ path('deconnexion') }}\">Déconnexion</a>
      </div>
    {% else %}
      <h1>Connexion</h1>
      <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" placeholder=\"Entrer votre email\" required autofocus>
      <input type=\"password\" name=\"password\" placeholder=\"Entrer votre mot de passe\" required>
      <input type=\"hidden\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
      <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
      <label for=\"remember_me\">Remember me</label>
      <br>
      <center><a href=\"{{path('mdpOublie')}}\">Mot de passe oublié</a></center>
      <button type=\"submit\" class=\"btn btn-dark btn-lg btn-block\" style=\"margin-top:10px; margin-bottom:10px\">
        Connexion
      </button>
      <center><a href=\"{{path('inscription')}}\">Pas de compte ? Inscrit toi !</a></center>
    {% endif %}
</form>
{% endblock %}
", "security/connexion.html.twig", "/Users/laura/Desktop/wishlist/templates/security/connexion.html.twig");
    }
}
