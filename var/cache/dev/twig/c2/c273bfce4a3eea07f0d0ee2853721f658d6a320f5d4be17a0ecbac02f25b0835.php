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

/* wishlist/faq.html.twig */
class __TwigTemplate_8b3ed8c47cc43f314a18402fea4310481a0de0983e26a9704644c9a319fa3b33 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wishlist/faq.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wishlist/faq.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<head>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\" />

</head>
<body>

    <div class=\"panel-group\" id=\"accordion\">


        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\">
              Comment modifier mon mot de passe</a>
            </h4>
          </div>
          <div id=\"collapse1\" class=\"panel-collapse collapse in\">
            <div class=\"panel-body\">Cliquez sur le profil du bonhomme en haut à droite de la barre de navigation
                et cliquer dessus, cliquer ensuite sur modifier mon mot de passe,
                une fois sur la page de modification : entrer votre ancien mot de passe puis votre nouveau mot de passe
            </div>
          </div>
        </div>


        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\">
              Comment s'inscrire</a>
            </h4>
          </div>
          <div id=\"collapse2\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">Vous pouvez vous inscrire en cliquant sur le bouton inscription en haut à droite
                ensuite remplissez les informations personnelles et cliquez sur valider
            </div>
          </div>
        </div>
        

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\">
                Modifier son profil</a>
              </h4>
            </div>
            <div id=\"collapse3\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">cliquez sur le bonhomme en haut a droite et cliquer sur mes informations personnelles
              </div>
            </div>
          </div>


        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse4\">
             Comment créer une wishlist</a>
            </h4>
          </div>
          <div id=\"collapse4\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">Cliquez sur le bouton plus en haut de la barre de navigation
                vous serez rediriger vers la page de création.
                Vous pouvez également créer une liste avec un thème préfait : dans ce cas rendez vous sur la page d'accueil
                et faites votre choix.
                ATTENTION : afin d'enregistrer votre wishlist vous devez vous inscrire ou vous connecter.
            </div>
          </div>

        </div>

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse5\">
              Je souhaite supprimer mon compte</a>
              </h4>
            </div>
            <div id=\"collapse5\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">cliquez sur le bonhomme en haut a droite et cliquer sur mes informations personnelles
                  cliquer sur supprimer mon compte, valider l'alerte de sécurité.

              </div>
            </div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse6\">
                Je ne trouve pas la réponse à ma question</a>
              </h4>
            </div>
            <div id=\"collapse6\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">
                  cliquez sur nous contacter en bas de la barre de navigation et remplissez le formulaire de contact
                  vous pouvez également nous envoyer un mail à l'adresse : nelly.ung@hotmail.fr
              </div>
            </div>
          </div>
      </div>
    <section>
        
        


</body>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wishlist/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<head>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"/main.css\" media=\"screen\" type=\"text/css\" />

</head>
<body>

    <div class=\"panel-group\" id=\"accordion\">


        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\">
              Comment modifier mon mot de passe</a>
            </h4>
          </div>
          <div id=\"collapse1\" class=\"panel-collapse collapse in\">
            <div class=\"panel-body\">Cliquez sur le profil du bonhomme en haut à droite de la barre de navigation
                et cliquer dessus, cliquer ensuite sur modifier mon mot de passe,
                une fois sur la page de modification : entrer votre ancien mot de passe puis votre nouveau mot de passe
            </div>
          </div>
        </div>


        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\">
              Comment s'inscrire</a>
            </h4>
          </div>
          <div id=\"collapse2\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">Vous pouvez vous inscrire en cliquant sur le bouton inscription en haut à droite
                ensuite remplissez les informations personnelles et cliquez sur valider
            </div>
          </div>
        </div>
        

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\">
                Modifier son profil</a>
              </h4>
            </div>
            <div id=\"collapse3\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">cliquez sur le bonhomme en haut a droite et cliquer sur mes informations personnelles
              </div>
            </div>
          </div>


        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse4\">
             Comment créer une wishlist</a>
            </h4>
          </div>
          <div id=\"collapse4\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">Cliquez sur le bouton plus en haut de la barre de navigation
                vous serez rediriger vers la page de création.
                Vous pouvez également créer une liste avec un thème préfait : dans ce cas rendez vous sur la page d'accueil
                et faites votre choix.
                ATTENTION : afin d'enregistrer votre wishlist vous devez vous inscrire ou vous connecter.
            </div>
          </div>

        </div>

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse5\">
              Je souhaite supprimer mon compte</a>
              </h4>
            </div>
            <div id=\"collapse5\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">cliquez sur le bonhomme en haut a droite et cliquer sur mes informations personnelles
                  cliquer sur supprimer mon compte, valider l'alerte de sécurité.

              </div>
            </div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse6\">
                Je ne trouve pas la réponse à ma question</a>
              </h4>
            </div>
            <div id=\"collapse6\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">
                  cliquez sur nous contacter en bas de la barre de navigation et remplissez le formulaire de contact
                  vous pouvez également nous envoyer un mail à l'adresse : nelly.ung@hotmail.fr
              </div>
            </div>
          </div>
      </div>
    <section>
        
        


</body>


{% endblock %}", "wishlist/faq.html.twig", "/Users/laura/Desktop/wishlist/templates/wishlist/faq.html.twig");
    }
}
