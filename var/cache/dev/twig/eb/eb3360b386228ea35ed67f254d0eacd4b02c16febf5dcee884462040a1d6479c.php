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

/* etudiant/listRPs.html.twig */
class __TwigTemplate_5583ccaa5aea7d89256e1bf99401f579dec7923e883ab185d6ba4c109ba9a237 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/listRPs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/listRPs.html.twig"));

        $this->parent = $this->loadTemplate("baseEtudiant.html.twig", "etudiant/listRPs.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantRps");
        echo "\">Réalisations professionnelles  </a>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "            <div class=\"alert alert-success\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</br>
     <div class=\"col-lg-10\">
                  <div class=\"card\">
                    <div class=\"card-close\">
                      <div class=\"dropdown\">
                        <button type=\"button\" id=\"closeCard3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
                        <div aria-labelledby=\"closeCard3\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
                      </div>
                    </div>\t

                    \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste des rp
                              ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["lesRps"] ?? null), 0, [], "array", true, true, false, 24)) {
            // line 25
            echo "                                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesRps"]) || array_key_exists("lesRps", $context) ? $context["lesRps"] : (function () { throw new RuntimeError('Variable "lesRps" does not exist.', 25, $this->source); })()), 0, [], "array", false, false, false, 25), "archivage", [], "any", false, false, false, 25), 1))) {
                // line 26
                echo "                                  archivées
                                  ";
            } else {
                // line 28
                echo "                                  en cours
                                ";
            }
            // line 30
            echo "                              ";
        }
        // line 31
        echo "                        </h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                         ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["lesRps"] ?? null), 0, [], "array", true, true, false, 36)) {
            // line 37
            echo "                          <thead>
                            <tr>
                              <th>Source <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Libelle<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Nombre d'activités<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Date<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                               <th>Statut<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                               <th>
                                
                                  ";
            // line 46
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesRps"]) || array_key_exists("lesRps", $context) ? $context["lesRps"] : (function () { throw new RuntimeError('Variable "lesRps" does not exist.', 46, $this->source); })()), 0, [], "array", false, false, false, 46), "archivage", [], "any", false, false, false, 46), 0))) {
                // line 47
                echo "                                    Archiver
                                  ";
            } else {
                // line 49
                echo "                                    Désarchiver
                                  ";
            }
            // line 51
            echo "                              

                                </th>

                                   ";
            // line 55
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesRps"]) || array_key_exists("lesRps", $context) ? $context["lesRps"] : (function () { throw new RuntimeError('Variable "lesRps" does not exist.', 55, $this->source); })()), 0, [], "array", false, false, false, 55), "archivage", [], "any", false, false, false, 55), 1))) {
                // line 56
                echo "                                   <th>
                                    Supprimer
                                   </th>
                                    ";
            }
            // line 60
            echo "                            </tr>
                          </thead>
                          ";
        } else {
            // line 63
            echo "                            Pas de rp
                          ";
        }
        // line 65
        echo "                          <tbody>
                          ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesRps"]) || array_key_exists("lesRps", $context) ? $context["lesRps"] : (function () { throw new RuntimeError('Variable "lesRps" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rp"]) {
            // line 67
            echo "                            <tr>
                              <th scope=\"row\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "source", [], "any", false, false, false, 68), "libelle", [], "any", false, false, false, 68), "html", null, true);
            echo " </th>
                              <td><a class=\"text\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpShowEditAdd", ["idRp" => twig_get_attribute($this->env, $this->source, $context["rp"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rp"], "libcourt", [], "any", false, false, false, 69), "html", null, true);
            echo "</a></td>
                              <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "activites", [], "any", false, false, false, 70), "count", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                              <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rp"], "dateDebut", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
            echo "</td>
                              <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "statut", [], "any", false, false, false, 72), "libelle", [], "any", false, false, false, 72), "html", null, true);
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "statut", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), 2))) {
                echo " de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "enseignant", [], "any", false, false, false, 72), "prenom", [], "any", false, false, false, 72), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "enseignant", [], "any", false, false, false, 72), "nom", [], "any", false, false, false, 72), "html", null, true);
                echo " ";
            }
            echo "</td>
                              <td>";
            // line 73
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rp"], "archivage", [], "any", false, false, false, 73), 0))) {
                echo "<a class=\"text\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpArchiver", ["idRp" => twig_get_attribute($this->env, $this->source, $context["rp"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\"><span title=\"Cliquer pour archiver\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("images/delete.png")), "html", null, true);
                echo "\" class=\"mr-2\"></span> ";
            } else {
                echo "<a class=\"text\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpDesarchiver", ["idRp" => twig_get_attribute($this->env, $this->source, $context["rp"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\"><span title=\"Cliquer pour désarchiver\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("images/restore.png")), "html", null, true);
                echo "\" alt=\"désarchiver\" class=\"mr-2\">";
            }
            echo "</span></a></td>
                              ";
            // line 74
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rp"], "archivage", [], "any", false, false, false, 74), 1))) {
                // line 75
                echo "                                <td><a class=\"text\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpRemove", ["idRp" => twig_get_attribute($this->env, $this->source, $context["rp"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\"><span title=\"Cliquer pour supprimer\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("images/bin.png")), "html", null, true);
                echo "\" class=\"mr-2\"  onclick=\"return confirm('Confirmer la suppression ?')\"></span> </a></td>
                                ";
            }
            // line 77
            echo "                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return "etudiant/listRPs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 79,  256 => 77,  248 => 75,  246 => 74,  230 => 73,  218 => 72,  214 => 71,  210 => 70,  204 => 69,  200 => 68,  197 => 67,  193 => 66,  190 => 65,  186 => 63,  181 => 60,  175 => 56,  173 => 55,  167 => 51,  163 => 49,  159 => 47,  157 => 46,  146 => 37,  144 => 36,  137 => 31,  134 => 30,  130 => 28,  126 => 26,  123 => 25,  121 => 24,  106 => 11,  97 => 8,  94 => 7,  90 => 6,  80 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEtudiant.html.twig\" %}
{% block titreContenu %}<a href=\"{{ path('etudiantRps')}}\">Réalisations professionnelles  </a>{% endblock %}


{% block contenu%}
{% for message in app.flashes('success') %}{# affichera un message de succès si l'action est réussie #}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
{% endfor %}
</br>
     <div class=\"col-lg-10\">
                  <div class=\"card\">
                    <div class=\"card-close\">
                      <div class=\"dropdown\">
                        <button type=\"button\" id=\"closeCard3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
                        <div aria-labelledby=\"closeCard3\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
                      </div>
                    </div>\t

                    \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste des rp
                              {% if lesRps[0] is defined %}
                                {% if lesRps[0].archivage == 1 %}
                                  archivées
                                  {% else %}
                                  en cours
                                {% endif %}
                              {% endif %}
                        </h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                         {% if lesRps[0] is defined %}
                          <thead>
                            <tr>
                              <th>Source <span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Libelle<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Nombre d'activités<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                              <th>Date<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                               <th>Statut<span onclick=TableOrder(event,1)>&#9660;</span><span onclick=TableOrder(event,0)>&#9650;</span></th>
                               <th>
                                
                                  {% if lesRps[0].archivage == 0 %}
                                    Archiver
                                  {% else %}
                                    Désarchiver
                                  {% endif %}
                              

                                </th>

                                   {% if lesRps[0].archivage == 1 %}
                                   <th>
                                    Supprimer
                                   </th>
                                    {% endif %}
                            </tr>
                          </thead>
                          {% else %}
                            Pas de rp
                          {% endif %}
                          <tbody>
                          {% for rp in lesRps  %}
                            <tr>
                              <th scope=\"row\">{{rp.source.libelle}} </th>
                              <td><a class=\"text\" href=\"{{ path('rpShowEditAdd', { 'idRp': rp.id }) }}\">{{rp.libcourt}}</a></td>
                              <td>{{rp.activites.count}}</td>
                              <td>{{rp.dateDebut | date(\"d/m/Y\")}}</td>
                              <td>{{rp.statut.libelle}} {% if rp.statut.id == 2%} de {{rp.enseignant.prenom}} {{rp.enseignant.nom}} {% endif %}</td>
                              <td>{% if rp.archivage == 0 %}<a class=\"text\" href=\"{{ path('rpArchiver', { 'idRp': rp.id }) }}\"><span title=\"Cliquer pour archiver\"><img src=\"{{ asset('images/delete.png' | trans)}}\" class=\"mr-2\"></span> {% else %}<a class=\"text\" href=\"{{ path('rpDesarchiver', { 'idRp': rp.id }) }}\"><span title=\"Cliquer pour désarchiver\"><img src=\"{{ asset('images/restore.png' | trans)}}\" alt=\"désarchiver\" class=\"mr-2\">{% endif %}</span></a></td>
                              {% if rp.archivage == 1 %}
                                <td><a class=\"text\" href=\"{{ path('rpRemove', { 'idRp': rp.id }) }}\"><span title=\"Cliquer pour supprimer\"><img src=\"{{ asset('images/bin.png' | trans)}}\" class=\"mr-2\"  onclick=\"return confirm('Confirmer la suppression ?')\"></span> </a></td>
                                {% endif %}
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>      
{% endblock %}
", "etudiant/listRPs.html.twig", "C:\\wamp64\\www\\portfolioV2\\templates\\etudiant\\listRPs.html.twig");
    }
}
