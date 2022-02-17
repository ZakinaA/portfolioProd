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

/* etudiant/home.html.twig */
class __TwigTemplate_3b9903f919981210e2a4ae2367e931053b945581dfe974963d806fbca537c04a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titreContenu' => [$this, 'block_titreContenu'],
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseEtudiant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/home.html.twig"));

        $this->parent = $this->loadTemplate("baseEtudiant.html.twig", "etudiant/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titreContenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        echo "Accueil ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "</br>
   <div class=\"col-lg-10\">
      <div class=\"card\">


        <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Mes dernières réalisations professionnelles </h3>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">   
                <table class=\"table table-striped table-sm\">
                    <thead>
                      <tr>
                              <th>Source <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Libelle<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Nombre d'activités<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Date<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Statut<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Action<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- on n'affiche que 7 rp -->
                      ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 29), "etudiant", [], "any", false, true, false, 29), "rps", [], "any", false, true, false, 29), $context["i"], [], "array", true, true, false, 29) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "etudiant", [], "any", false, false, false, 29), "rps", [], "any", false, false, false, 29), $context["i"], [], "array", false, false, false, 29), "archivage", [], "any", false, false, false, 29), 0)))) {
                // line 30
                echo "                          <tr>
                            <th scope=\"row\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "etudiant", [], "any", false, false, false, 31), "rps", [], "any", false, false, false, 31), $context["i"], [], "array", false, false, false, 31), "source", [], "any", false, false, false, 31), "libelle", [], "any", false, false, false, 31), "html", null, true);
                echo " </th>
                            <td><a class=\"text\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpShowEditAdd", ["idRp" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "etudiant", [], "any", false, false, false, 32), "rps", [], "any", false, false, false, 32), $context["i"], [], "array", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "etudiant", [], "any", false, false, false, 32), "rps", [], "any", false, false, false, 32), $context["i"], [], "array", false, false, false, 32), "libcourt", [], "any", false, false, false, 32), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "etudiant", [], "any", false, false, false, 33), "rps", [], "any", false, false, false, 33), $context["i"], [], "array", false, false, false, 33), "activites", [], "any", false, false, false, 33), "count", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "etudiant", [], "any", false, false, false, 34), "rps", [], "any", false, false, false, 34), $context["i"], [], "array", false, false, false, 34), "dateDebut", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "etudiant", [], "any", false, false, false, 35), "rps", [], "any", false, false, false, 35), $context["i"], [], "array", false, false, false, 35), "statut", [], "any", false, false, false, 35), "libelle", [], "any", false, false, false, 35), "html", null, true);
                echo " ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "etudiant", [], "any", false, false, false, 35), "rps", [], "any", false, false, false, 35), $context["i"], [], "array", false, false, false, 35), "statut", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), 2))) {
                    echo " de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "etudiant", [], "any", false, false, false, 35), "rps", [], "any", false, false, false, 35), $context["i"], [], "array", false, false, false, 35), "enseignant", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "etudiant", [], "any", false, false, false, 35), "rps", [], "any", false, false, false, 35), $context["i"], [], "array", false, false, false, 35), "enseignant", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
                    echo " ";
                }
                echo "</td>
                            <td>";
                // line 36
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "etudiant", [], "any", false, false, false, 36), "rps", [], "any", false, false, false, 36), $context["i"], [], "array", false, false, false, 36), "archivage", [], "any", false, false, false, 36), 0))) {
                    echo "<a class=\"text\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpArchiver", ["idRp" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "etudiant", [], "any", false, false, false, 36), "rps", [], "any", false, false, false, 36), $context["i"], [], "array", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                    echo "\">archiver ";
                } else {
                    echo "<a class=\"text\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpDesarchiver", ["idRp" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "etudiant", [], "any", false, false, false, 36), "rps", [], "any", false, false, false, 36), $context["i"], [], "array", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                    echo "\">désarchiver";
                }
                echo "</a></td>                          </tr>
                        ";
            }
            // line 38
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div>   


      <!!- tableau des stages--> 
  <div class=\"col-lg-10\">
    <div class=\"card\">   
      <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Mes stages </h3>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">

<table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>nom entreprise</th>
                              <th>Sujet </th>
                              <th>nom tuteur </th>
                              <th>date début</th>
                              <th>date fin</th>
                                <th>Suivi</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "etudiant", [], "any", false, false, false, 68), "stages", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 69
            echo "                            <tr>
                              <th scope=\"row\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nomEntreprise", [], "any", false, false, false, 70), "html", null, true);
            echo " </th>
                              <td><a class=\"text\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stageAddEdit", ["idStage" => twig_get_attribute($this->env, $this->source, $context["stage"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "sujet", [], "any", false, false, false, 71), "html", null, true);
            echo "</a></td>
                              <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nomTuteur", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                              <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "dateDebut", [], "any", false, false, false, 73), "d/m/Y"), "html", null, true);
            echo "</td>
                              <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "dateFin", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
            echo "</td>
                              <td>";
            // line 75
            if ((null === twig_get_attribute($this->env, $this->source, $context["stage"], "enseignant", [], "any", false, false, false, 75))) {
                echo " A définir ";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stage"], "enseignant", [], "any", false, false, false, 75), "prenom", [], "any", false, false, false, 75), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stage"], "enseignant", [], "any", false, false, false, 75), "nom", [], "any", false, false, false, 75), "html", null, true);
            }
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                         </tbody>
                        </table>
            </div>
          </div>
    </div>
  </div>   


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 78,  232 => 75,  228 => 74,  224 => 73,  220 => 72,  214 => 71,  210 => 70,  207 => 69,  203 => 68,  172 => 39,  166 => 38,  153 => 36,  141 => 35,  137 => 34,  133 => 33,  127 => 32,  123 => 31,  120 => 30,  117 => 29,  113 => 28,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEtudiant.html.twig\" %}
{% block titreContenu %}Accueil {% endblock %}

{% block contenu%}
</br>
   <div class=\"col-lg-10\">
      <div class=\"card\">


        <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Mes dernières réalisations professionnelles </h3>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">   
                <table class=\"table table-striped table-sm\">
                    <thead>
                      <tr>
                              <th>Source <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Libelle<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Nombre d'activités<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Date<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Statut<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Action<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- on n'affiche que 7 rp -->
                      {% for i in 0..7 %}
                        {% if (app.user.etudiant.rps[i] is defined) and (app.user.etudiant.rps[i].archivage == 0) %}
                          <tr>
                            <th scope=\"row\">{{app.user.etudiant.rps[i].source.libelle}} </th>
                            <td><a class=\"text\" href=\"{{ path('rpShowEditAdd', { 'idRp': app.user.etudiant.rps[i].id }) }}\">{{app.user.etudiant.rps[i].libcourt}}</a></td>
                            <td>{{app.user.etudiant.rps[i].activites.count}}</td>
                            <td>{{app.user.etudiant.rps[i].dateDebut | date(\"d/m/Y\")}}</td>
                            <td>{{app.user.etudiant.rps[i].statut.libelle}} {% if app.user.etudiant.rps[i].statut.id == 2%} de {{app.user.etudiant.rps[i].enseignant.prenom}} {{app.user.etudiant.rps[i].enseignant.nom}} {% endif %}</td>
                            <td>{% if app.user.etudiant.rps[i].archivage == 0 %}<a class=\"text\" href=\"{{ path('rpArchiver', { 'idRp': app.user.etudiant.rps[i].id }) }}\">archiver {% else %}<a class=\"text\" href=\"{{ path('rpDesarchiver', { 'idRp': app.user.etudiant.rps[i].id }) }}\">désarchiver{% endif %}</a></td>                          </tr>
                        {% endif %}
                      {% endfor %}
                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div>   


      <!!- tableau des stages--> 
  <div class=\"col-lg-10\">
    <div class=\"card\">   
      <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Mes stages </h3>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">

<table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>nom entreprise</th>
                              <th>Sujet </th>
                              <th>nom tuteur </th>
                              <th>date début</th>
                              <th>date fin</th>
                                <th>Suivi</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for stage in app.user.etudiant.stages  %}
                            <tr>
                              <th scope=\"row\">{{stage.nomEntreprise}} </th>
                              <td><a class=\"text\" href=\"{{ path('stageAddEdit', { 'idStage': stage.id }) }}\">{{stage.sujet}}</a></td>
                              <td>{{stage.nomTuteur}}</td>
                              <td>{{stage.dateDebut | date(\"d/m/Y\")}}</td>
                              <td>{{stage.dateFin| date(\"d/m/Y\")}}</td>
                              <td>{% if stage.enseignant is null%} A définir {% else %}{{stage.enseignant.prenom}} {{stage.enseignant.nom}}{% endif %}</td>
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
            </div>
          </div>
    </div>
  </div>   


{% endblock %}", "etudiant/home.html.twig", "C:\\wamp64\\www\\portfolioV2\\templates\\etudiant\\home.html.twig");
    }
}
