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
class __TwigTemplate_54121d2510a7e73c5a236445638d93c347f8816b53ae10e0c3db40e8cfd3d083 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!-- template de base barre de navigation -->
<html>
    <head>
        <meta charset=\"UTF-8\">
         <script src=\"https://kit.fontawesome.com/ebc72dbf59.js\" crossorigin=\"anonymous\"></script>
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
         <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>



        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
<!-- le header -->
<nav style= \"margin-bottom: 50px\"class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"recherche\">
    <form  class=\"form-inline my-2 my-lg-0\" role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("research");
        echo "\">
      <input style=\"border-radius:30px\" type=\"text\" class=\"form-control\" placeholder=\"Search\" name =\"search\">
      <span class=\"input-group-btn\">
        <button style=\"border-radius:50px\" type=\"submit\" class=\"btn btn-dark\"><i class=\"fas fa-search\"></i></button>
      </span>
    </form>
  </div>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
  <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <div class=\"titre\">
          <a href=";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist");
        echo ">  <img src=\"/cadeau.png\"  alt=\"...\" ></a>
          <a style= \"text-decoration:none; color:orange\" href=";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist");
        echo ">WeWish</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <div class=\"icone\">
          <a href=";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlist");
        echo "> <i  style=\"color:black\" class=\"fas fa-plus-circle\"></i></a>
        </div>
        ";
        // line 46
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "          <div class=\"connexion\">
            <a class=\"btn btn-dark\" href=";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            echo " role=\"button\">Se connecter</a>
          </div>
          <div class=\"inscription\">
            <a class=\"btn btn-dark\" href=";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo " role=\"button\">Inscription</a>
          </div>
        ";
        } else {
            // line 54
            echo "          <div  class=\"autre_icone\">
            <a href=";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            echo "> <i style=\"color:black\" class=\"fas fa-power-off\"></i></a>
          </div>
          <div  class=\"autre_icone\">
            <div  class=\"dropdown\">
              <a style=\"color:black\" href=\"#\" id= \"myBtn\"><i class=\"far fa-user\"></i> </a>
              <div  id=\"myDropdown\" class=\"dropdown-content\">
                <a style=\"color:black\" href=";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier");
            echo " ><i class=\"fas fa-user-circle\">Modifier profil</i></a>
                <a style=\"color:black\" href=";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "><i class=\"far fa-id-card\">Mes infos personnelles</i></a>
                <a style=\"color:black\" href=";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mywishlist");
            echo "><i class=\"fas fa-list\">Mes Wishlists</i></a>
                <a style=\"color:black\" href=";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mdp");
            echo "><i class=\"fas fa-unlock\">Modifier mot de passe</i></a>
              </div>
            </div>
          </div>
          <div class=\"autre_icone\">
            <p style=\"font-family: AboutLove; font-size:40px\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "pseudo", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
          </div>
        </li>
      </ul>
    </div>
  ";
        }
        // line 75
        echo "</nav>
";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "<!-- fonction javascript qui créée un dropdown lorqu'on clique sur le profil/bonhomme -->
";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "</body>
<!--Bas de page-->
<footer class=\"footer\">
  <nav class=\"navbar navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propos");
        echo "\">A propos de nous</a>
    <a class=\"navbar-brand\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a>
    <a class=\"navbar-brand\" href=\"";
        // line 99
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

    // line 7
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

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "         <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    <script type=\"text/javascript\" src=\"./jquery.min.js\"></script>
    <script>
      document.getElementById(\"myBtn\").onclick = function() {myFunction()};
      function myFunction() {
        document.getElementById(\"myDropdown\").classList.toggle(\"show\");
      }
     document.getElementById(\"submitForm\").onclick = function() {myFunctionFormWshl()};
     function myFunctionFormWshl() {
      if(document.getElementById(\"forme_wishlist_theme_name\").value && document.getElementById(\"forme_wishlist_name_name\").value ){
        return alert('Le thème pris en compte sera le non préparametré');
  }else return  submit();
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
        return array (  281 => 79,  271 => 78,  253 => 76,  240 => 17,  230 => 16,  211 => 7,  192 => 99,  188 => 98,  184 => 97,  178 => 93,  176 => 78,  173 => 77,  171 => 76,  168 => 75,  159 => 69,  151 => 64,  147 => 63,  143 => 62,  139 => 61,  130 => 55,  127 => 54,  121 => 51,  115 => 48,  112 => 47,  110 => 46,  105 => 44,  97 => 39,  93 => 38,  76 => 24,  69 => 19,  67 => 16,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!-- template de base barre de navigation -->
<html>
    <head>
        <meta charset=\"UTF-8\">
         <script src=\"https://kit.fontawesome.com/ebc72dbf59.js\" crossorigin=\"anonymous\"></script>
        <title>{% block title %}We Wish{% endblock %}</title>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
         <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>



        {% block stylesheets %}
         <link rel=\"stylesheet\" href=\"{{ asset('main.css') }}\">
        {% endblock %}
    </head>
    <body>
<!-- le header -->
<nav style= \"margin-bottom: 50px\"class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"recherche\">
    <form  class=\"form-inline my-2 my-lg-0\" role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{{ path('research') }}\">
      <input style=\"border-radius:30px\" type=\"text\" class=\"form-control\" placeholder=\"Search\" name =\"search\">
      <span class=\"input-group-btn\">
        <button style=\"border-radius:50px\" type=\"submit\" class=\"btn btn-dark\"><i class=\"fas fa-search\"></i></button>
      </span>
    </form>
  </div>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
  <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <div class=\"titre\">
          <a href={{path('wishlist')}}>  <img src=\"/cadeau.png\"  alt=\"...\" ></a>
          <a style= \"text-decoration:none; color:orange\" href={{path('wishlist')}}>WeWish</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <div class=\"icone\">
          <a href={{path('formWishlist')}}> <i  style=\"color:black\" class=\"fas fa-plus-circle\"></i></a>
        </div>
        {%if not app.user %}
          <div class=\"connexion\">
            <a class=\"btn btn-dark\" href={{path('connexion')}} role=\"button\">Se connecter</a>
          </div>
          <div class=\"inscription\">
            <a class=\"btn btn-dark\" href={{path('inscription')}} role=\"button\">Inscription</a>
          </div>
        {% else %}
          <div  class=\"autre_icone\">
            <a href={{path('deconnexion')}}> <i style=\"color:black\" class=\"fas fa-power-off\"></i></a>
          </div>
          <div  class=\"autre_icone\">
            <div  class=\"dropdown\">
              <a style=\"color:black\" href=\"#\" id= \"myBtn\"><i class=\"far fa-user\"></i> </a>
              <div  id=\"myDropdown\" class=\"dropdown-content\">
                <a style=\"color:black\" href={{path('modifier')}} ><i class=\"fas fa-user-circle\">Modifier profil</i></a>
                <a style=\"color:black\" href={{path('profil')}}><i class=\"far fa-id-card\">Mes infos personnelles</i></a>
                <a style=\"color:black\" href={{path('mywishlist')}}><i class=\"fas fa-list\">Mes Wishlists</i></a>
                <a style=\"color:black\" href={{path('mdp')}}><i class=\"fas fa-unlock\">Modifier mot de passe</i></a>
              </div>
            </div>
          </div>
          <div class=\"autre_icone\">
            <p style=\"font-family: AboutLove; font-size:40px\">{{app.user.pseudo}}</p>
          </div>
        </li>
      </ul>
    </div>
  {% endif %}
</nav>
{% block body %}{% endblock %}
<!-- fonction javascript qui créée un dropdown lorqu'on clique sur le profil/bonhomme -->
{% block javascripts %}
    <script type=\"text/javascript\" src=\"./jquery.min.js\"></script>
    <script>
      document.getElementById(\"myBtn\").onclick = function() {myFunction()};
      function myFunction() {
        document.getElementById(\"myDropdown\").classList.toggle(\"show\");
      }
     document.getElementById(\"submitForm\").onclick = function() {myFunctionFormWshl()};
     function myFunctionFormWshl() {
      if(document.getElementById(\"forme_wishlist_theme_name\").value && document.getElementById(\"forme_wishlist_name_name\").value ){
        return alert('Le thème pris en compte sera le non préparametré');
  }else return  submit();
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
