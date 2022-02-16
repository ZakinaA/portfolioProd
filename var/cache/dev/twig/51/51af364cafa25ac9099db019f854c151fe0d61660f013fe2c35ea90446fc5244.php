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

/* rp/showEdit.html.twig */
class __TwigTemplate_4567555caaea2a5b1e07ab94343b3ad4a4c8b7b2646c9f66b76a8f9821a02075 extends Template
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
        // line 3
        return $this->loadTemplate((isset($context["templateTwigParent"]) || array_key_exists("templateTwigParent", $context) ? $context["templateTwigParent"] : (function () { throw new RuntimeError('Variable "templateTwigParent" does not exist.', 3, $this->source); })()), "rp/showEdit.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/showEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/showEdit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titreContenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "./titreRp.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "            <div class=\"alert alert-success\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</br>

 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">

                    <!-- Breadcrumb-->                 
                    <div class=\"breadcrumb-holder container-fluid\">
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item active\">Description</li>
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpActiviteList", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\">Activités</a></li>
                            <li class=\"breadcrumb-item active\"><a  href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpProductionList", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">Productions</a></li>  
                            <li class=\"breadcrumb-item active\"><a  ";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENSEIGNANT")) {
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCommentaireRp", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" ";
        } else {
            echo "  href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpCommentaireNotifierEnseignant", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" ";
        }
        echo ">Commentaires</a></li>   
                            ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENSEIGNANT")) {
            echo "<li class=\"breadcrumb-item active\"><a   href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validerRp", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"  >Valider</a></li>     ";
        }
        echo "   
                        </ul>
                    </div>

                    <!--h3 class=\"h4\">Ajouter ou modifier</h3-->                
                    </div>
                    <div class=\"card-body\">  
                        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        echo "

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "libcourt", [], "any", false, false, false, 46), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "besoin", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "localisation", [], "any", false, false, false, 66), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "source", [], "any", false, false, false, 69), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "cadre", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "niveauRP", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "dateDebut", [], "any", false, false, false, 85), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-6\">
                                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "dateFin", [], "any", false, false, false, 88), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "environnement", [], "any", false, false, false, 98), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-6\">
                                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "moyen", [], "any", false, false, false, 101), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>                             
                            </div>

                            <!--  ligne de  boutons-->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-4 offset-sm-4\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                           ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "cancel", [], "any", false, false, false, 112), 'row', ["attr" => ["class" => "btn btn-secondary"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-3\">
                                             ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "submit", [], "any", false, false, false, 115), 'row', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                                        </div>
                                    </div>
                                </div>                             
                            </div>

                        ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'form_end');
        echo "
                     
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
        return "rp/showEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 121,  271 => 115,  265 => 112,  251 => 101,  245 => 98,  232 => 88,  226 => 85,  213 => 75,  207 => 72,  201 => 69,  195 => 66,  182 => 56,  169 => 46,  160 => 40,  146 => 33,  134 => 32,  130 => 31,  126 => 30,  110 => 16,  101 => 13,  98 => 12,  94 => 11,  91 => 10,  81 => 9,  68 => 6,  58 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/rp/showEdit.html.twig #}

{% extends templateTwigParent %}

{% block titreContenu %}
    {{ include('./titreRp.html.twig') }}
{% endblock %}

{% block contenu%}

{% for message in app.flashes('success') %}{# affichera un message de succès si l'action est réussie #}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
{% endfor %}
</br>

 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">

                    <!-- Breadcrumb-->                 
                    <div class=\"breadcrumb-holder container-fluid\">
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item active\">Description</li>
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('rpActiviteList', { 'idRp': rp.id }) }}\">Activités</a></li>
                            <li class=\"breadcrumb-item active\"><a  href=\"{{ path('rpProductionList', { 'idRp': rp.id }) }}\">Productions</a></li>  
                            <li class=\"breadcrumb-item active\"><a  {% if is_granted('ROLE_ENSEIGNANT') %} href=\"{{ path('addCommentaireRp', { 'idRp': rp.id  }) }}\" {% else %}  href=\"{{ path('rpCommentaireNotifierEnseignant', { 'idRp': rp.id }) }}\" {% endif %}>Commentaires</a></li>   
                            {% if is_granted('ROLE_ENSEIGNANT') %}<li class=\"breadcrumb-item active\"><a   href=\"{{ path('validerRp', { 'idRp': rp.id  }) }}\"  >Valider</a></li>     {% endif %}   
                        </ul>
                    </div>

                    <!--h3 class=\"h4\">Ajouter ou modifier</h3-->                
                    </div>
                    <div class=\"card-body\">  
                        {{ form_start(form)}}

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            {{ form_row(form.libcourt, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            {{ form_row(form.besoin, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.localisation, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.source, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.cadre, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.niveauRP, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.dateDebut, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.dateFin, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.environnement, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.moyen, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>                             
                            </div>

                            <!--  ligne de  boutons-->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-4 offset-sm-4\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                           {{ form_row(form.cancel, {'attr' : {'class' : 'btn btn-secondary'}}) }}
                                        </div>
                                        <div class=\"col-md-3\">
                                             {{ form_row(form.submit, {'attr' : {'class' : 'btn btn-primary'}}) }}
                                        </div>
                                    </div>
                                </div>                             
                            </div>

                        {{ form_end(form) }}
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/section-->

{% endblock %}", "rp/showEdit.html.twig", "C:\\wamp64\\www\\portfolioV2\\templates\\rp\\showEdit.html.twig");
    }
}
