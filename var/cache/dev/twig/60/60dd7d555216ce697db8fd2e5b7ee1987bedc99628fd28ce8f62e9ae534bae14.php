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

/* rp/activite/listActivitesRp.html.twig */
class __TwigTemplate_48b18b99260e497355917997d54ae58b5e88ae4fac4311e26aefc1224bccc5f2 extends Template
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
        return $this->loadTemplate((isset($context["templateTwigParent"]) || array_key_exists("templateTwigParent", $context) ? $context["templateTwigParent"] : (function () { throw new RuntimeError('Variable "templateTwigParent" does not exist.', 1, $this->source); })()), "rp/activite/listActivitesRp.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/activite/listActivitesRp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/activite/listActivitesRp.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titreContenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "././titreRp.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "</br>
 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header d-flex align-items-center\">  
                      <h3 class=\"h4\"> Intitulé  : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 16, $this->source); })()), "libcourt", [], "any", false, false, false, 16), "html", null, true);
        echo "</h3>                     
                        </div>
                    </div>

                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">            
                        
                        <!-- Breadcrumb-->
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                              <li class=\"breadcrumb-item active\"><a  ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENSEIGNANT")) {
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showRp", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" ";
        } else {
            echo "  href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpShowEditAdd", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" ";
        }
        echo ">Description</a></li>
                              <li class=\"breadcrumb-item\">Activités</a></li>
                              <li class=\"breadcrumb-item active\"><a  href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpProductionList", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\">Productions</a></li>                                
                              <li class=\"breadcrumb-item active\"><a ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENSEIGNANT")) {
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCommentaireRp", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" ";
        } else {
            echo "  href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpCommentaireNotifierEnseignant", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" ";
        }
        echo ">Commentaires</a></li>
                           </ul>                
                        </div>
                         ";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENSEIGNANT")) {
            echo " ";
        } else {
            echo "                               
                          <button class=\"btn btn-primary\" type=\"submit\" onclick=\"window.location.href='";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpActiviteAdd", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "'\">Nouvelle activité</button>
                        ";
        }
        // line 35
        echo "                    <!--h3 class=\"h4\">Ajouter ou modifier</h3-->                
                    </div>

                    <div class=\"card-body\">  
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>Description</th>
                              <th>Code</th>
                              <th>Libellé</th> 
                              ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENSEIGNANT")) {
        } else {
            echo "                            
                              <th>Action</th>
                              ";
        }
        // line 49
        echo "                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 52, $this->source); })()), "activites", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["rpAct"]) {
            // line 53
            echo "                            <tr>
                              <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rpAct"], "commentaire", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                              <th scope=\"row\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rpAct"], "activite", [], "any", false, false, false, 55), "code", [], "any", false, false, false, 55), "html", null, true);
            echo " </th>
                              <td><a ";
            // line 56
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENSEIGNANT")) {
            } else {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpActiviteEdit", ["idRpActivite" => twig_get_attribute($this->env, $this->source, $context["rpAct"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rpAct"], "activite", [], "any", false, false, false, 56), "libelle", [], "any", false, false, false, 56), "html", null, true);
            echo "</a></td>
                              ";
            // line 57
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENSEIGNANT")) {
            } else {
                // line 58
                echo "                                <td><a class=\"text\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpActiviteRemove", ["idRpActivite" => twig_get_attribute($this->env, $this->source, $context["rpAct"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\"  onclick=\"return confirm('Confirmer la suppression ?')\" >supprimer</a></td>
                              ";
            }
            // line 60
            echo "                            </tr>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rpAct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                         </tbody>
                        </table>

                      </div>
                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/section-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rp/activite/listActivitesRp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 62,  216 => 60,  210 => 58,  207 => 57,  196 => 56,  192 => 55,  188 => 54,  185 => 53,  181 => 52,  176 => 49,  169 => 46,  156 => 35,  151 => 33,  145 => 32,  131 => 29,  127 => 28,  114 => 26,  101 => 16,  91 => 8,  81 => 7,  68 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends templateTwigParent %}

{% block titreContenu %}
    {{ include('././titreRp.html.twig') }}
{% endblock %}

{% block contenu%}
</br>
 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header d-flex align-items-center\">  
                      <h3 class=\"h4\"> Intitulé  : {{rp.libcourt}}</h3>                     
                        </div>
                    </div>

                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">            
                        
                        <!-- Breadcrumb-->
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                              <li class=\"breadcrumb-item active\"><a  {% if is_granted('ROLE_ENSEIGNANT') %} href=\"{{ path('showRp', { 'idRp': rp.id  }) }}\" {% else %}  href=\"{{ path('rpShowEditAdd', { 'idRp': rp.id }) }}\" {% endif %}>Description</a></li>
                              <li class=\"breadcrumb-item\">Activités</a></li>
                              <li class=\"breadcrumb-item active\"><a  href=\"{{ path('rpProductionList', { 'idRp': rp.id }) }}\">Productions</a></li>                                
                              <li class=\"breadcrumb-item active\"><a {% if is_granted('ROLE_ENSEIGNANT') %} href=\"{{ path('addCommentaireRp', { 'idRp': rp.id  }) }}\" {% else %}  href=\"{{ path('rpCommentaireNotifierEnseignant', { 'idRp': rp.id }) }}\" {% endif %}>Commentaires</a></li>
                           </ul>                
                        </div>
                         {% if is_granted('ROLE_ENSEIGNANT') %} {% else %}                               
                          <button class=\"btn btn-primary\" type=\"submit\" onclick=\"window.location.href='{{ path('rpActiviteAdd', { 'idRp': rp.id  })  }}'\">Nouvelle activité</button>
                        {% endif%}
                    <!--h3 class=\"h4\">Ajouter ou modifier</h3-->                
                    </div>

                    <div class=\"card-body\">  
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>Description</th>
                              <th>Code</th>
                              <th>Libellé</th> 
                              {% if is_granted('ROLE_ENSEIGNANT') %}{% else %}                            
                              <th>Action</th>
                              {% endif%}
                            </tr>
                          </thead>
                          <tbody>
                          {% for rpAct in rp.activites  %}
                            <tr>
                              <td>{{rpAct.commentaire}}</td>
                              <th scope=\"row\">{{rpAct.activite.code}} </th>
                              <td><a {% if is_granted('ROLE_ENSEIGNANT') %}{% else %} href=\"{{ path('rpActiviteEdit', {'idRpActivite': rpAct.id }) }}\"{% endif %}>{{rpAct.activite.libelle}}</a></td>
                              {% if is_granted('ROLE_ENSEIGNANT') %}{% else %}
                                <td><a class=\"text\" href=\"{{ path('rpActiviteRemove', { 'idRpActivite': rpAct.id }) }}\"  onclick=\"return confirm('Confirmer la suppression ?')\" >supprimer</a></td>
                              {% endif %}
                            </tr>
                           {% endfor %}
                         </tbody>
                        </table>

                      </div>
                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/section-->

{% endblock %}", "rp/activite/listActivitesRp.html.twig", "C:\\wamp64\\www\\portfolioV2\\templates\\rp\\activite\\listActivitesRp.html.twig");
    }
}
