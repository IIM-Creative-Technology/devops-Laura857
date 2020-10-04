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

/* wishlist/searchArticle.html.twig */
class __TwigTemplate_b6e3d5b67e8bb7131700d55440ad57c31824e4e8d1df53c0bbfe68ebe656f285 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/searchArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/searchArticle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/searchArticle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "

  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main.css"), "html", null, true);
        echo "\">


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "



  ";
        // line 16
        if (twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "    <div class = \"contenu\">
      <p>Aucun article ne correspond à votre recherche. Vous pouvez faire une recherche Cdiscount</p>
    </div>
  ";
        } else {
            // line 21
            echo "
    <div  class=\"card-deck\">
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 24
                echo "      <div style= \"padding-bottom: 25px;\" class=\"col-4 \">
        <div  style=\"width: 300px;\" class=\"card\">
          <h6 class=\"card-title\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 26), "html", null, true);
                echo "</h6>
      <div style=\"width: 250px;\">
          <a href=";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, false, 28), "html", null, true);
                echo " target=\"_blank\">
            ";
                // line 29
                if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 29)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http://") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                    // line 30
                    echo "              <img class=\"card-img-top\"  src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 30), "html", null, true);
                    echo "\"  alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 30), "html", null, true);
                    echo "\"/>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 31
$context["article"], "image", [], "any", false, false, false, 31) == null)) {
                    // line 32
                    echo "              <img class=\"card-img-top\"  src=\"/images/article.png\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 32), "html", null, true);
                    echo "\"/>
            ";
                } else {
                    // line 34
                    echo "              <img class=\"card-img-top\"  src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["article"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 34), "html", null, true);
                    echo "\"/>
            ";
                }
                // line 36
                echo "          </a>
          </div>
            ";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 38) != null)) {
                    // line 39
                    echo "              <p >";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 39), "html", null, true);
                    echo " €</p>
                ";
                }
                // line 41
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "
              <button onclick=\"getId\" class=\"btn btn-primary\" id=\"js-idA\" data-toggle=\"modal\" data-target=\"#message";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\">  Ajouter </button>
            </div>

          <div >

            ";
                }
                // line 49
                echo "            <div id=\"message";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" class=\"modal fade\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                  <p style =\"margin: 20px\">Séléctionnez la wishlist où vous souhaitez ajouter l'article ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 52), "html", null, true);
                echo " :</p>
                  <div class=\"modal-body\">
                    ";
                // line 54
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SearchBarController::wishlistsChoices", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54)]));
                echo "
                  </div>
                  <div class=\"modal-footer\">
                    ";
                // line 57
                if ( !twig_test_empty((isset($context["wishlists"]) || array_key_exists("wishlists", $context) ? $context["wishlists"] : (function () { throw new RuntimeError('Variable "wishlists" does not exist.', 57, $this->source); })()))) {
                    // line 58
                    echo "                      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formWishlist", ["a" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                    echo "\" class=\"btn btn-dark\">Créer une autre wishlist</a>
                    ";
                }
                // line 60
                echo "                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                  </div>
                </div>
                </div>
              </div>
              </div>
              </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
    ";
        }
        // line 70
        echo "  </div>
<div>
  <div style=\"text-align:center; padding:30px\">
  <h2>Vous n'avez pas trouvez ce que vous souhaitez : faites une recherche Cdiscount</h2>
  <form class=\"formalaire \"target=\"_blank\" action=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discount");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"mode\" value=\"blended\">
      <input type=\"hidden\" name=\"mode\" value=\"blended\">
      <input type=\"hidden\" name=\"tag\" value=\"insert associate tag\">
        <div class=\"container\">
          <div class=\"row justify-content-md-center\">
            <div class=\"col-sm-7\">
              <input  class=\"form-control\" placeholder=\"faites une recherche Cdiscount\" aria-label=\"Search\" type=\"search\" name=\"keyword\" size=\"10\" value=\"\">
            </div>
            <div class=\"col-sm-1\">
              <button class=\"btn btn-dark\" type=\"submit\">Rechercher</button>
            </div>
          </div>
        </div>
      </form>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/searchArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 74,  227 => 70,  223 => 68,  210 => 60,  204 => 58,  202 => 57,  196 => 54,  191 => 52,  184 => 49,  175 => 43,  172 => 42,  169 => 41,  163 => 39,  161 => 38,  157 => 36,  149 => 34,  143 => 32,  141 => 31,  134 => 30,  132 => 29,  128 => 28,  123 => 26,  119 => 24,  115 => 23,  111 => 21,  105 => 17,  103 => 16,  97 => 12,  87 => 11,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}


  <link rel=\"stylesheet\" href=\"{{ asset('main.css') }}\">


{% endblock %}

{% block body %}




  {% if articles is empty %}
    <div class = \"contenu\">
      <p>Aucun article ne correspond à votre recherche. Vous pouvez faire une recherche Cdiscount</p>
    </div>
  {% else %}

    <div  class=\"card-deck\">
      {% for article in articles %}
      <div style= \"padding-bottom: 25px;\" class=\"col-4 \">
        <div  style=\"width: 300px;\" class=\"card\">
          <h6 class=\"card-title\">{{article.nom}}</h6>
      <div style=\"width: 250px;\">
          <a href={{article.url}} target=\"_blank\">
            {% if article.image starts with 'http://' %}
              <img class=\"card-img-top\"  src=\"{{article.image}}\"  alt=\"{{ article.nom }}\"/>
            {% elseif article.image == NULL %}
              <img class=\"card-img-top\"  src=\"/images/article.png\" alt=\"{{ article.nom }}\"/>
            {% else %}
              <img class=\"card-img-top\"  src=\"{{vich_uploader_asset(article, 'imageFile') }}\" alt=\"{{ article.nom }}\"/>
            {% endif %}
          </a>
          </div>
            {% if article.prix != null %}
              <p >{{article.prix }} €</p>
                {% endif %}
              {%if app.user %}

              <button onclick=\"getId\" class=\"btn btn-primary\" id=\"js-idA\" data-toggle=\"modal\" data-target=\"#message{{article.id}}\">  Ajouter </button>
            </div>

          <div >

            {% endif %}
            <div id=\"message{{article.id}}\" class=\"modal fade\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                  <p style =\"margin: 20px\">Séléctionnez la wishlist où vous souhaitez ajouter l'article {{article.nom}} :</p>
                  <div class=\"modal-body\">
                    {{ render(controller('App\\\\Controller\\\\SearchBarController::wishlistsChoices',{'id':article.id}))}}
                  </div>
                  <div class=\"modal-footer\">
                    {% if wishlists is not empty %}
                      <a href=\"{{path('formWishlist',{'a':article.id})}}\" class=\"btn btn-dark\">Créer une autre wishlist</a>
                    {% endif %}
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                  </div>
                </div>
                </div>
              </div>
              </div>
              </div>
      {% endfor %}

    {% endif %}
  </div>
<div>
  <div style=\"text-align:center; padding:30px\">
  <h2>Vous n'avez pas trouvez ce que vous souhaitez : faites une recherche Cdiscount</h2>
  <form class=\"formalaire \"target=\"_blank\" action=\"{{path('discount')}}\" method=\"post\">
    <input type=\"hidden\" name=\"mode\" value=\"blended\">
      <input type=\"hidden\" name=\"mode\" value=\"blended\">
      <input type=\"hidden\" name=\"tag\" value=\"insert associate tag\">
        <div class=\"container\">
          <div class=\"row justify-content-md-center\">
            <div class=\"col-sm-7\">
              <input  class=\"form-control\" placeholder=\"faites une recherche Cdiscount\" aria-label=\"Search\" type=\"search\" name=\"keyword\" size=\"10\" value=\"\">
            </div>
            <div class=\"col-sm-1\">
              <button class=\"btn btn-dark\" type=\"submit\">Rechercher</button>
            </div>
          </div>
        </div>
      </form>
    </div>

{% endblock %}
", "wishlist/searchArticle.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/searchArticle.html.twig");
    }
}
