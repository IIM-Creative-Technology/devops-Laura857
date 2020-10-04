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

/* wishlist/myWishlist.html.twig */
class __TwigTemplate_b5247d41de4013ff6f9dead2d434c28caa5f96581435eaaf73af7b81583c4bc9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/myWishlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/myWishlist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/myWishlist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "   \t<body>
   \t<h1 style=\"text-align: center;\">Mes Wishlists</h1>
    <div class=\"container\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <div class=\"alert alert-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
    ";
        // line 15
        if (twig_test_empty((isset($context["wishlists"]) || array_key_exists("wishlists", $context) ? $context["wishlists"] : (function () { throw new RuntimeError('Variable "wishlists" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "      <div class = \"contenu\">
        <p>Vous n'avez pas encore crée de wishlist !!! Cliquez sur le bouton ci-dessous pour créer
          votre première wishlist.</p>
        <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlist");
            echo "\" class=\"btn btn-dark\">Créer ma première wishlist</a>
      </div>
      ";
        } else {
            // line 22
            echo "      <div class=\"card-deck\">
        ";
            // line 23
            $context["i"] = 0;
            // line 24
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["wishlists"]) || array_key_exists("wishlists", $context) ? $context["wishlists"] : (function () { throw new RuntimeError('Variable "wishlists" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["wishlist"]) {
                // line 25
                echo "       \t\t<div class=\"col-4\">
       \t\t\t<div class=\"card\" style='margin-top:30px'>
              <div class=\"card-img\" style=\"position:absolute; margin:10px;\">
                <a onclick=\"getId\"  id=\"js-idA\" data-toggle=\"modal\" data-target=\"#message";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                  <i class=\"fas fa-camera fa-2x\" style=\"color:#000000;\"></i>
                </a>
              </div>
              <div class=\"wishlistLien\">
               
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myArticles", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">
                  ";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, $context["wishlist"], "imageFond", [], "any", false, false, false, 35) == null)) {
                    // line 36
                    echo "                    <img class=\"card-img-top\" src=\"/model_wshl3.png\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "nom", [], "any", false, false, false, 36), "html", null, true);
                    echo "\"/>
                  ";
                } else {
                    // line 38
                    echo "                     <img class=\"card-img-top\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["wishlist"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "nom", [], "any", false, false, false, 38), "html", null, true);
                    echo "\"/>
                  ";
                }
                // line 40
                echo "                </a>
                 <div class=\"card-body\">
                  <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myArticles", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">
                    ";
                // line 43
                if ((twig_get_attribute($this->env, $this->source, (isset($context["budgets"]) || array_key_exists("budgets", $context) ? $context["budgets"] : (function () { throw new RuntimeError('Variable "budgets" does not exist.', 43, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 43, $this->source); })()), [], "array", false, false, false, 43) > twig_get_attribute($this->env, $this->source, $context["wishlist"], "budget", [], "any", false, false, false, 43))) {
                    // line 44
                    echo "                      <p style='color:red'>Le budget total est de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["budgets"]) || array_key_exists("budgets", $context) ? $context["budgets"] : (function () { throw new RuntimeError('Variable "budgets" does not exist.', 44, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 44, $this->source); })()), [], "array", false, false, false, 44), "html", null, true);
                    echo "€. Vous avez dépassé votre budget fixé !</p>
                    ";
                }
                // line 46
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["wishlist"], "dateexpiration", [], "any", false, false, false, 46) < twig_date_converter($this->env))) {
                    // line 47
                    echo "                      <p style='color:red'>La date d'expiration est dépassée !</p>
                    ";
                }
                // line 49
                echo "           \t  \t\t\t<h3 class=\"card-title\">Nom de la wishlist : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "</h3>
           \t  \t\t\t<h5 class=\"card-text\">Destinataire : ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "destinataire", [], "any", false, false, false, 50), "html", null, true);
                echo "</h5>
                    <h6 class=\"card-text\">Budget fixé : ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "budget", [], "any", false, false, false, 51), "html", null, true);
                echo "€</h6>
                    ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["wishlist"], "description", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "                      <p class=\"card-text\"> Description : ";
                    echo twig_get_attribute($this->env, $this->source, $context["wishlist"], "description", [], "any", false, false, false, 53);
                    echo " </p>
                    ";
                } else {
                    // line 55
                    echo "                     <p><br></p>
                    ";
                }
                // line 57
                echo "                  <a>
                  </div>
                 </div>
                  <div class=\"card-footer\" id=\"trash\">
                    <div class=\"sticky-top\">
                      <div class=\"row\">
                        <div class=\"col-sm\">
                          <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formArticle", ["idW" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\" class=\"btn btn-dark\">Ajouter un article</a>
                        </div>
                        <div class=\"col-sm\">
                          <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletWshl", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\" onclick=\"return confirm('Êtes vous sûre de vouloir supprimer la wishlist \\'";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "nom", [], "any", false, false, false, 67), "html", null, true);
                echo "\\' ?');\">
                            <i class= \"fa fa-trash fa-2x\" style=\"color:#000000;\"></i>
                          </a>
                        </div>
                        <div class=\"col-sm\">
                          <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlist_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\" ><i class=\"fas fa-marker fa-2x\" style=\"color:#000000;\"></i></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              ";
                // line 78
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 78, $this->source); })()) + 1);
                // line 79
                echo "              <div id=\"message";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 79), "html", null, true);
                echo "\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header card-header-title\">
                      <h4 class=\"modal-title card-element-title\">Séléctionnez une nouvelle image pour votre wishlist ";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wishlist"], "nom", [], "any", false, false, false, 83), "html", null, true);
                echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                      <div class=\"card-content clearfix\">
                        ";
                // line 87
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\WishlistController::imageChoice", ["id" => twig_get_attribute($this->env, $this->source, $context["wishlist"], "id", [], "any", false, false, false, 87)]));
                echo "
                      </div>
                    </div>
                    <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    </div>
                  </div>
                </div>
              </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wishlist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "      </div>
    ";
        }
        // line 99
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/myWishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 99,  288 => 97,  272 => 87,  265 => 83,  257 => 79,  255 => 78,  246 => 72,  236 => 67,  230 => 64,  221 => 57,  217 => 55,  211 => 53,  209 => 52,  205 => 51,  201 => 50,  196 => 49,  192 => 47,  189 => 46,  183 => 44,  181 => 43,  177 => 42,  173 => 40,  165 => 38,  159 => 36,  157 => 35,  153 => 34,  144 => 28,  139 => 25,  134 => 24,  132 => 23,  129 => 22,  123 => 19,  118 => 16,  116 => 15,  113 => 14,  104 => 11,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('main.css') }}\">
  {% endblock %}
  {% block body %}
   \t<body>
   \t<h1 style=\"text-align: center;\">Mes Wishlists</h1>
    <div class=\"container\">
      {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
      {% endfor %}
    </div>
    {% if wishlists is empty %}
      <div class = \"contenu\">
        <p>Vous n'avez pas encore crée de wishlist !!! Cliquez sur le bouton ci-dessous pour créer
          votre première wishlist.</p>
        <a href=\"{{path('formWishlist')}}\" class=\"btn btn-dark\">Créer ma première wishlist</a>
      </div>
      {% else %}
      <div class=\"card-deck\">
        {% set i = 0 %}
        {% for wishlist in wishlists %}
       \t\t<div class=\"col-4\">
       \t\t\t<div class=\"card\" style='margin-top:30px'>
              <div class=\"card-img\" style=\"position:absolute; margin:10px;\">
                <a onclick=\"getId\"  id=\"js-idA\" data-toggle=\"modal\" data-target=\"#message{{wishlist.id}}\">
                  <i class=\"fas fa-camera fa-2x\" style=\"color:#000000;\"></i>
                </a>
              </div>
              <div class=\"wishlistLien\">
               
                <a href=\"{{path('myArticles',{id: wishlist.id})}}\">
                  {% if wishlist.imageFond == NULL %}
                    <img class=\"card-img-top\" src=\"/model_wshl3.png\" alt=\"{{ wishlist.nom }}\"/>
                  {% else %}
                     <img class=\"card-img-top\" src=\"{{ vich_uploader_asset(wishlist, 'imageFile') }}\" alt=\"{{ wishlist.nom }}\"/>
                  {% endif %}
                </a>
                 <div class=\"card-body\">
                  <a href=\"{{path('myArticles',{id: wishlist.id})}}\">
                    {% if budgets[i] > wishlist.budget %}
                      <p style='color:red'>Le budget total est de {{budgets[i]}}€. Vous avez dépassé votre budget fixé !</p>
                    {% endif %}
                    {% if wishlist.dateexpiration < date() %}
                      <p style='color:red'>La date d'expiration est dépassée !</p>
                    {% endif %}
           \t  \t\t\t<h3 class=\"card-title\">Nom de la wishlist : {{wishlist.nom}}</h3>
           \t  \t\t\t<h5 class=\"card-text\">Destinataire : {{wishlist.destinataire}}</h5>
                    <h6 class=\"card-text\">Budget fixé : {{wishlist.budget}}€</h6>
                    {% if wishlist.description %}
                      <p class=\"card-text\"> Description : {{wishlist.description| raw}} </p>
                    {% else %}
                     <p><br></p>
                    {% endif %}
                  <a>
                  </div>
                 </div>
                  <div class=\"card-footer\" id=\"trash\">
                    <div class=\"sticky-top\">
                      <div class=\"row\">
                        <div class=\"col-sm\">
                          <a href=\"{{path('formArticle',{idW: wishlist.id})}}\" class=\"btn btn-dark\">Ajouter un article</a>
                        </div>
                        <div class=\"col-sm\">
                          <a href=\"{{path('deletWshl',{id: wishlist.id})}}\" onclick=\"return confirm('Êtes vous sûre de vouloir supprimer la wishlist \\'{{wishlist.nom}}\\' ?');\">
                            <i class= \"fa fa-trash fa-2x\" style=\"color:#000000;\"></i>
                          </a>
                        </div>
                        <div class=\"col-sm\">
                          <a href=\"{{path('formWishlist_modif',{id: wishlist.id})}}\" ><i class=\"fas fa-marker fa-2x\" style=\"color:#000000;\"></i></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              {% set i = i+1 %}
              <div id=\"message{{wishlist.id}}\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header card-header-title\">
                      <h4 class=\"modal-title card-element-title\">Séléctionnez une nouvelle image pour votre wishlist {{wishlist.nom}}</h4>
                    </div>
                    <div class=\"modal-body\">
                      <div class=\"card-content clearfix\">
                        {{ render(controller('App\\\\Controller\\\\WishlistController::imageChoice',{'id':wishlist.id}))}}
                      </div>
                    </div>
                    <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    </div>
                  </div>
                </div>
              </div>
          {% endfor %}
      </div>
    {% endif %}
  {% endblock %}", "wishlist/myWishlist.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/myWishlist.html.twig");
    }
}
