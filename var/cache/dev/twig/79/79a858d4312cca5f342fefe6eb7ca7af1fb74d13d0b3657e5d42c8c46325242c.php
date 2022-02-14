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

/* enseignant/home.html.twig */
class __TwigTemplate_c60ef51663f217dc631b3346142312f530f72c4d046036379d89dc51352430b9 extends Template
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
        return "baseEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/home.html.twig"));

        $this->parent = $this->loadTemplate("baseEnseignant.html.twig", "enseignant/home.html.twig", 1);
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

        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enseignantHome");
        echo "\">Accueil </a>";
        
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
        echo twig_include($this->env, $context, "./promotion/listPromos.html.twig");
        echo "
</br>

   <div class=\"col-lg-12\">
      <div class=\"card\">
                    
        <div class=\"card-close\">
          <div class=\"dropdown\">
            <button type=\"button\" id=\"closeCard3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
            <div aria-labelledby=\"closeCard3\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
          </div>
        </div>\t 

        <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"> Réalisations professionnelles à viser </h3>
            
            <div>
              <input style=\"width: 50%; margin: 3vh 0;\" class=\"form-control\" onkeyup=\"search_rp()\" id=\"search_rp\" type=\"text\" placeholder=\"Rechercher rp\">
            </div>

        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">   
                <table class=\"table table-striped table-sm\" id=\"table_rp\" >
                    <thead>
                      <tr>
                        <th>Etudiant <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Source <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Libellé <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Nombre d'activités <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Date <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Statut <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Action <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                      </tr>
                    </thead>
                    <tbody id=\"tbody_rp\">
                      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "enseignant", [], "any", false, false, false, 41), "rps", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["rp"]) {
            // line 42
            echo "                        ";
            // line 43
            echo "                          <tr>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "etudiant", [], "any", false, false, false, 44), "prenom", [], "any", false, false, false, 44), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "etudiant", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
            echo " </td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "source", [], "any", false, false, false, 45), "libelle", [], "any", false, false, false, 45), "html", null, true);
            echo " </td>
                            <td><a class=\"text\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showRp", ["idRp" => twig_get_attribute($this->env, $this->source, $context["rp"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rp"], "libcourt", [], "any", false, false, false, 46), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "activites", [], "any", false, false, false, 47), "count", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rp"], "dateDebut", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "statut", [], "any", false, false, false, 49), "libelle", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td><a class=\"text\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validerRp", ["idRp" => twig_get_attribute($this->env, $this->source, $context["rp"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">Valider</a></td>
                          </tr>
                        ";
            // line 53
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div>   


      <!!- tableau des stages--> 
  <div class=\"col-lg-12\">
    <div class=\"card\">   
      <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Stages suivis </h3>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">   
                <table class=\"table table-striped table-sm\">
                    <thead>
                     
                      <tr>
                        <th>Entreprise</th>
                        <th>Lieu</th>
                        <th>Nom tuteur</th>
                        <th>Mail tuteur</th>
                        <th>Tel tuteur</th>
                        <th>sujet </th>
                      </tr>
                    </thead>
                    <tbody>
          
                      ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "enseignant", [], "any", false, false, false, 84), "stages", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 85
            echo "                          <tr>
                            <td><a class=\"text\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showStage", ["idStage" => twig_get_attribute($this->env, $this->source, $context["stage"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nomEntreprise", [], "any", false, false, false, 86), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "lieu", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                            <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nomTuteur", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                            <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "mailTuteur", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                            <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "telTuteur", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                            <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "sujet", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                          </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                    </tbody>
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
        return "enseignant/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 94,  238 => 91,  234 => 90,  230 => 89,  226 => 88,  222 => 87,  216 => 86,  213 => 85,  209 => 84,  177 => 54,  171 => 53,  166 => 50,  162 => 49,  158 => 48,  154 => 47,  148 => 46,  144 => 45,  138 => 44,  135 => 43,  133 => 42,  129 => 41,  90 => 5,  80 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEnseignant.html.twig\" %}
{% block titreContenu %}<a href=\"{{ path('enseignantHome')}}\">Accueil </a>{% endblock %}

{% block contenu%}
{{ include('./promotion/listPromos.html.twig') }}
</br>

   <div class=\"col-lg-12\">
      <div class=\"card\">
                    
        <div class=\"card-close\">
          <div class=\"dropdown\">
            <button type=\"button\" id=\"closeCard3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
            <div aria-labelledby=\"closeCard3\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
          </div>
        </div>\t 

        <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"> Réalisations professionnelles à viser </h3>
            
            <div>
              <input style=\"width: 50%; margin: 3vh 0;\" class=\"form-control\" onkeyup=\"search_rp()\" id=\"search_rp\" type=\"text\" placeholder=\"Rechercher rp\">
            </div>

        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">   
                <table class=\"table table-striped table-sm\" id=\"table_rp\" >
                    <thead>
                      <tr>
                        <th>Etudiant <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Source <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Libellé <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Nombre d'activités <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Date <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Statut <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                        <th>Action <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                      </tr>
                    </thead>
                    <tbody id=\"tbody_rp\">
                      {% for rp in app.user.enseignant.rps%}
                        {#% if app.user.etudiant.rps[i] is defined %#}
                          <tr>
                            <td>{{rp.etudiant.prenom}} {{rp.etudiant.nom}} </td>
                            <td>{{rp.source.libelle}} </td>
                            <td><a class=\"text\" href=\"{{ path('showRp', { 'idRp': rp.id }) }}\">{{rp.libcourt}}</a></td>
                            <td>{{rp.activites.count}}</td>
                            <td>{{rp.dateDebut | date(\"d/m/Y\")}}</td>
                            <td>{{rp.statut.libelle}}</td>
                            <td><a class=\"text\" href=\"{{ path('validerRp', { 'idRp': rp.id }) }}\">Valider</a></td>
                          </tr>
                        {#% endif %#}
                      {% endfor %}
                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div>   


      <!!- tableau des stages--> 
  <div class=\"col-lg-12\">
    <div class=\"card\">   
      <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Stages suivis </h3>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">   
                <table class=\"table table-striped table-sm\">
                    <thead>
                     
                      <tr>
                        <th>Entreprise</th>
                        <th>Lieu</th>
                        <th>Nom tuteur</th>
                        <th>Mail tuteur</th>
                        <th>Tel tuteur</th>
                        <th>sujet </th>
                      </tr>
                    </thead>
                    <tbody>
          
                      {% for stage in app.user.enseignant.stages %}
                          <tr>
                            <td><a class=\"text\" href=\"{{ path('showStage', { 'idStage': stage.id }) }}\">{{stage.nomEntreprise}}</a></td>
                            <td>{{stage.lieu}}</td>
                            <td>{{stage.nomTuteur}}</td>
                            <td>{{stage.mailTuteur}}</td>
                            <td>{{stage.telTuteur}}</td>
                            <td>{{stage.sujet}}</td>
                          </tr>
                      {% endfor %}
                    </tbody>
                </table>
            </div>
          </div>
    </div>
  </div>   

{% endblock %}", "enseignant/home.html.twig", "C:\\wamp64\\www\\portfolioV2\\templates\\enseignant\\home.html.twig");
    }
}
