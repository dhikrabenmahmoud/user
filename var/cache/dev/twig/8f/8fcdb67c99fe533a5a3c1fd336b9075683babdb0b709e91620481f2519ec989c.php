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

/* navbar.html.twig */
class __TwigTemplate_cfeb551d59fdb2a2782b5ad641f3512bf94a112ddbe086da490262722bd52330 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">BABYJOY</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-purple\">
<nav class=\"navbar navbar-expand-lg navbar-dark navbar-purple\">

    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "    
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15), "html", null, true);
            echo "
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/profile\">Modifier profil</a>
              <a class=\"dropdown-item\" href=\"/quizz/history/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">Historique des quizz</a>
            </div>
          </li>
          
           <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Admin
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/admin/user/\">Utilisateurs</a>
              <a class=\"dropdown-item\" href=\"/admin/categorie/\">Catégories</a>
              <a class=\"dropdown-item\" href=\"/admin/question/\">Questions</a>
              <a class=\"dropdown-item\" href=\"/admin/reponse/\">Réponses</a>
              <a class=\"dropdown-item\" href=\"/admin/quizz/history\">Historique des quizz</a>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/quizz\">Quizz</a>
          </li>
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 43
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            echo "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46), "html", null, true);
            echo "
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/profile\">Modifier profil</a>
              <a class=\"dropdown-item\" href=\"/quizz/history/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">Historique des quizz</a>
            </div>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/quizz\">Quizz</a>
          </li>
        ";
        } else {
            // line 62
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/register\">Inscription</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/login\">Connexion</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Quizz
          </a>

          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <a class=\"dropdown-item\" href=\"/quizz\">Quizz</a>
            <a class=\"dropdown-item\" href=\"/quizz/session/history\">Historique</a>
          </div>
        </li>
        ";
        }
        // line 79
        echo "      </ul>
    </div>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 79,  130 => 62,  121 => 56,  113 => 51,  105 => 46,  101 => 44,  99 => 43,  91 => 38,  70 => 20,  62 => 15,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">BABYJOY</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-purple\">
<nav class=\"navbar navbar-expand-lg navbar-dark navbar-purple\">

    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        {% if is_granted('ROLE_ADMIN') %}    
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              {{ app.user.email }}
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/profile\">Modifier profil</a>
              <a class=\"dropdown-item\" href=\"/quizz/history/{{ app.user.id }}\">Historique des quizz</a>
            </div>
          </li>
          
           <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Admin
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/admin/user/\">Utilisateurs</a>
              <a class=\"dropdown-item\" href=\"/admin/categorie/\">Catégories</a>
              <a class=\"dropdown-item\" href=\"/admin/question/\">Questions</a>
              <a class=\"dropdown-item\" href=\"/admin/reponse/\">Réponses</a>
              <a class=\"dropdown-item\" href=\"/admin/quizz/history\">Historique des quizz</a>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/quizz\">Quizz</a>
          </li>
        {% elseif app.user %}
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              {{ app.user.email }}
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/profile\">Modifier profil</a>
              <a class=\"dropdown-item\" href=\"/quizz/history/{{ app.user.id }}\">Historique des quizz</a>
            </div>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/quizz\">Quizz</a>
          </li>
        {% else %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/register\">Inscription</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/login\">Connexion</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Quizz
          </a>

          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <a class=\"dropdown-item\" href=\"/quizz\">Quizz</a>
            <a class=\"dropdown-item\" href=\"/quizz/session/history\">Historique</a>
          </div>
        </li>
        {% endif %}
      </ul>
    </div>
  </div>
</nav>", "navbar.html.twig", "C:\\wamp\\www\\user\\templates\\navbar.html.twig");
    }
}
