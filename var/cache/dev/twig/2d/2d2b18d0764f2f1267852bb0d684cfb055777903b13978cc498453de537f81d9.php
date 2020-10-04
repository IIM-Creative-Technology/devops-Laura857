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

/* emails/emailMdpOublie.html.twig */
class __TwigTemplate_97dd22c635e3bf85ed191d8914eac4c609a401d2862d0c060caa93d36d8a0952 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/emailMdpOublie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/emailMdpOublie.html.twig"));

        // line 1
        echo "<head>
  <meta charset=\"utf-8\" content=\"text/html\">
  <meta name=\"viewport\" content=\"width-device-width; initial-scale=1.0; maximum-scale=1.0;\">
</head>
<body style=\"background-image:url('t/public/titre2.png');\">
  <table>
    <tbody>
      <tr>
        <td>Bonjour ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["pseudo"]) || array_key_exists("pseudo", $context) ? $context["pseudo"] : (function () { throw new RuntimeError('Variable "pseudo" does not exist.', 9, $this->source); })()), "html", null, true);
        echo ".</td>
      </tr>
      <tr>
        <td>Nous avons reçu une demande de réinitialisation de votre mot de passe. Pour ce faire cliquez sur le lien ci-dessous.</td>
      </tr>
    </tbody>
  </table>

  <table>
    <tbody>
      <tr align=\"center\">
        <td align=\"center\" height=\"30\" align=\"center\">
          <a href='";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "' style=\"color:orange; text-align:center;\">Réinitialiser mon mot de passe</a>
          <br>
        </td>
      </tr>
    </tbody>
  </table>
  &nbsp
 <table>
   <tbody>
     <tr>
       <td>L'équipe we wish vous souhaite une bonne journée !</td>
      </tr>
    </tbody>
  </table>
  &nbsp
  <table>
    <tbody>
      <tr>
        <td><a href=\"http://127.0.0.1:8001\" style=\"color: #000000; text-decoration: none;\"><h1 class =\"titre\">We Wish</h1><a></td>
        <td rowspan=\"2\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" alt=\"logo\" style=\"width: 110px;\"></td>
      </tr>
      <tr>
        <td><a href=\"mailto:wishlist.wewish@gmail.com\">wishlist.wewish@gmail.com</a></td>
      </tr>
    </tbody>
  </table>
</body>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/emailMdpOublie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 40,  68 => 21,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
  <meta charset=\"utf-8\" content=\"text/html\">
  <meta name=\"viewport\" content=\"width-device-width; initial-scale=1.0; maximum-scale=1.0;\">
</head>
<body style=\"background-image:url('t/public/titre2.png');\">
  <table>
    <tbody>
      <tr>
        <td>Bonjour {{pseudo}}.</td>
      </tr>
      <tr>
        <td>Nous avons reçu une demande de réinitialisation de votre mot de passe. Pour ce faire cliquez sur le lien ci-dessous.</td>
      </tr>
    </tbody>
  </table>

  <table>
    <tbody>
      <tr align=\"center\">
        <td align=\"center\" height=\"30\" align=\"center\">
          <a href='{{url}}' style=\"color:orange; text-align:center;\">Réinitialiser mon mot de passe</a>
          <br>
        </td>
      </tr>
    </tbody>
  </table>
  &nbsp
 <table>
   <tbody>
     <tr>
       <td>L'équipe we wish vous souhaite une bonne journée !</td>
      </tr>
    </tbody>
  </table>
  &nbsp
  <table>
    <tbody>
      <tr>
        <td><a href=\"http://127.0.0.1:8001\" style=\"color: #000000; text-decoration: none;\"><h1 class =\"titre\">We Wish</h1><a></td>
        <td rowspan=\"2\"><img src=\"{{logo}}\" alt=\"logo\" style=\"width: 110px;\"></td>
      </tr>
      <tr>
        <td><a href=\"mailto:wishlist.wewish@gmail.com\">wishlist.wewish@gmail.com</a></td>
      </tr>
    </tbody>
  </table>
</body>
", "emails/emailMdpOublie.html.twig", "/Users/laura/Desktop/wishlist/templates/emails/emailMdpOublie.html.twig");
    }
}
