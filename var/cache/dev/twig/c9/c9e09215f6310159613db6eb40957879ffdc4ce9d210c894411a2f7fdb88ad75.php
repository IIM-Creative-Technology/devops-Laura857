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

/* base.html.twig */
class __TwigTemplate_c5455cd18affc30b55c640902fe775cbfc12b0f9c0fcaed20f43e5dfe402918a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<!-- template de base barre de navigation -->
<html>
    <head>
        <meta charset=\"UTF-8\">
         <script src=\"https://kit.fontawesome.com/ebc72dbf59.js\" crossorigin=\"anonymous\"></script>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
         <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

         ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    </head>
    <body>
<!-- le header -->


<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a href=";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist");
        echo ">  <img src=\"/cadeau.png\"  alt=\"...\" ></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"titre\">
        <h1 class =\"titre\">We Wish</h1>
      </li>
      <li class=\"recherche\">

          <form target=\"_blank\" class=\"form-inline my-2 my-lg-0\" action=\"http://www.amazon.com/exec/obidos/external-search\"[RETURN]
            method=\"get\">
            <input type=\"hidden\" name=\"mode\" value=\"blended\">
              <input type=\"hidden\" name=\"tag\" value=\"insert associate tag\">
              <input  class=\"form-control mr-sm-2\" placeholder=\"Amazon\" aria-label=\"Search\" type=\"search\" name=\"keyword\" size=\"10\" value=\"\">
      <button  class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">recherche</button>
    </form>

      </li>

      <li class=\"icone\">
      <a href=";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlist");
        echo "> <i class=\"fas fa-plus-circle\"></i></a>
      </li>
      ";
        // line 49
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "        <li class=\"connexion\">
          <a class=\"btn btn-primary\" href=";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            echo " role=\"button\">Se connecter</a>
        </li>
        <li class=\"inscription\">
          <a class=\"btn btn-primary\" href=";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo " role=\"button\">Inscription</a>
        </li>
      ";
        } else {
            // line 57
            echo "        <li class=\"icone\">
          <a href=";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            echo "> <i class=\"fas fa-power-off\"></i></a>
        </li>
       <li class=\"icone\">
        <div class=\"dropdown\">
          <a  href=\"#\" id= \"myBtn\"><i class=\"far fa-user\"></i> </a>
          <div id=\"myDropdown\" class=\"dropdown-content\">
            <a href=";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier");
            echo " ><i class=\"fas fa-user-circle\">Modifier profil</i></a>
            <a href=";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "><i class=\"far fa-id-card\">Mes infos personnelles</i></a>
            <a href=";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mywishlist");
            echo "><i class=\"fas fa-list\">Mes Wishlists</i></a>
            <a href=";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mdp");
            echo "><i class=\"fas fa-unlock\">Modifier mot de passe</i></a>
          </div>
          <li class=\"icone\">
            <p>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "pseudo", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
          </li>
        </div>
      </li>
      ";
        }
        // line 75
        echo "    </ul>
  </div>
</nav>



  ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "
<!-- fonction javascript qui créée un dropdown lorqu'on clique sur le profil/bonhomme -->
        ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "    </body>




<!--Bas de page-->
<footer class=\"footer\">

  <nav class=\"navbar navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propos");
        echo "\">A propos de nous</a>
    <a class=\"navbar-brand\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a>
    <a class=\"navbar-brand\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">FAQ</a>
    <div class=\"facebook\">
      <a style=\"margin-right: 20px;\" href =\"https://fr-fr.facebook.com/\" <i class=\"fab fa-facebook-square\"></i>



    <a href =\"https://twitter.com/?lang=fr\"><i  class=\"fab fa-twitter-square\"></i></a>
  </div>

  </nav>
  </footer>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "We Wish";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "         <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "


        <script>

document.getElementById(\"myBtn\").onclick = function() {myFunction()};


function myFunction() {
  document.getElementById(\"myDropdown\").classList.toggle(\"show\");
}
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 87,  284 => 86,  273 => 82,  263 => 81,  250 => 15,  240 => 14,  221 => 9,  197 => 112,  193 => 111,  189 => 110,  178 => 101,  176 => 86,  172 => 84,  170 => 81,  162 => 75,  154 => 70,  148 => 67,  144 => 66,  140 => 65,  136 => 64,  127 => 58,  124 => 57,  118 => 54,  112 => 51,  109 => 50,  107 => 49,  102 => 47,  76 => 24,  67 => 17,  65 => 14,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<!-- template de base barre de navigation -->
<html>
    <head>
        <meta charset=\"UTF-8\">
         <script src=\"https://kit.fontawesome.com/ebc72dbf59.js\" crossorigin=\"anonymous\"></script>
        <title>{% block title %}We Wish{% endblock %}</title>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
         <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

         {% block stylesheets %}
         <link rel=\"stylesheet\" href=\"{{ asset('main.css') }}\">
        {% endblock %}

    </head>
    <body>
<!-- le header -->


<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a href={{path('wishlist')}}>  <img src=\"/cadeau.png\"  alt=\"...\" ></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"titre\">
        <h1 class =\"titre\">We Wish</h1>
      </li>
      <li class=\"recherche\">

          <form target=\"_blank\" class=\"form-inline my-2 my-lg-0\" action=\"http://www.amazon.com/exec/obidos/external-search\"[RETURN]
            method=\"get\">
            <input type=\"hidden\" name=\"mode\" value=\"blended\">
              <input type=\"hidden\" name=\"tag\" value=\"insert associate tag\">
              <input  class=\"form-control mr-sm-2\" placeholder=\"Amazon\" aria-label=\"Search\" type=\"search\" name=\"keyword\" size=\"10\" value=\"\">
      <button  class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">recherche</button>
    </form>

      </li>

      <li class=\"icone\">
      <a href={{path('formWishlist')}}> <i class=\"fas fa-plus-circle\"></i></a>
      </li>
      {%if not app.user %}
        <li class=\"connexion\">
          <a class=\"btn btn-primary\" href={{path('connexion')}} role=\"button\">Se connecter</a>
        </li>
        <li class=\"inscription\">
          <a class=\"btn btn-primary\" href={{path('inscription')}} role=\"button\">Inscription</a>
        </li>
      {% else %}
        <li class=\"icone\">
          <a href={{path('deconnexion')}}> <i class=\"fas fa-power-off\"></i></a>
        </li>
       <li class=\"icone\">
        <div class=\"dropdown\">
          <a  href=\"#\" id= \"myBtn\"><i class=\"far fa-user\"></i> </a>
          <div id=\"myDropdown\" class=\"dropdown-content\">
            <a href={{path('modifier')}} ><i class=\"fas fa-user-circle\">Modifier profil</i></a>
            <a href={{path('profil')}}><i class=\"far fa-id-card\">Mes infos personnelles</i></a>
            <a href={{path('mywishlist')}}><i class=\"fas fa-list\">Mes Wishlists</i></a>
            <a href={{path('mdp')}}><i class=\"fas fa-unlock\">Modifier mot de passe</i></a>
          </div>
          <li class=\"icone\">
            <p>{{app.user.pseudo}}</p>
          </li>
        </div>
      </li>
      {% endif %}
    </ul>
  </div>
</nav>



  {% block body %}

  {% endblock %}

<!-- fonction javascript qui créée un dropdown lorqu'on clique sur le profil/bonhomme -->
        {% block javascripts %}



        <script>

document.getElementById(\"myBtn\").onclick = function() {myFunction()};


function myFunction() {
  document.getElementById(\"myDropdown\").classList.toggle(\"show\");
}
</script>

{% endblock %}
    </body>




<!--Bas de page-->
<footer class=\"footer\">

  <nav class=\"navbar navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"{{path('propos')}}\">A propos de nous</a>
    <a class=\"navbar-brand\" href=\"{{path('contact')}}\">Nous contacter</a>
    <a class=\"navbar-brand\" href=\"{{path('faq')}}\">FAQ</a>
    <div class=\"facebook\">
      <a style=\"margin-right: 20px;\" href =\"https://fr-fr.facebook.com/\" <i class=\"fab fa-facebook-square\"></i>



    <a href =\"https://twitter.com/?lang=fr\"><i  class=\"fab fa-twitter-square\"></i></a>
  </div>

  </nav>
  </footer>

</html>
", "base.html.twig", "/Users/laura/Desktop/wishlist/templates/base.html.twig");
    }
}
