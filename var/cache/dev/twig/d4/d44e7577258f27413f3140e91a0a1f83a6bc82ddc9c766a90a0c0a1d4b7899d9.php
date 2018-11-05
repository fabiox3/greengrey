<?php

/* default/index.html.twig */
class __TwigTemplate_31104752f148223a0f4fc68ff9ee3f6fbae71d03882a2e63512db573c8e62c29 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GreenGrey :: Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        if (((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 6, $this->source); })()) != null)) {
            // line 7
            echo "\t<div class=\"container text-center\">
\t\t<br><br>
\t\t<h2 class=\"welcome\">COSA VUOI FARE OGGI?</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<i class=\"fas fa-map-marker-alt fa-3x\"></i>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<i class=\"fas fa-list-ol fa-3x\"></i>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<i class=\"fas fa-sun fa-3x\"></i>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<a href=\"/trees\">Geolocalizzati nell'oliveto</a>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<a href=\"/treeslist\">Consulta la mappatura degli alberi</a>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<a href=\"/meteo\">Consulta il meteo</a>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t
\t\t</div>\t
\t</div>
\t";
        }
        // line 58
        echo "

\t";
        // line 60
        if (((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 60, $this->source); })()) == null)) {
            // line 61
            echo "\t<div class=\"row\">
\t\t<div class=\"col-lg-8 col-lg-offset-2 text-center\">\t
\t\t\t<br><br>
\t\t\t<div class=\"panel panel-default\">
\t\t\t  \t<div class=\"panel-body\">
\t\t\t  \t\tPer visualizzare questa pagina, devi autenticarti<br><br>
\t\t\t  \t\t<a href=\"/login\" class=\"btn btn-info\">Accedi</a>
\t\t\t  \t</div>
\t\t\t</div>\t\t
\t\t\t\t
\t\t</div>\t
\t</div> \t\t\t
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 61,  132 => 60,  128 => 58,  75 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}GreenGrey :: Home{% endblock %}

{% block body %}
\t{% if username != null %}
\t<div class=\"container text-center\">
\t\t<br><br>
\t\t<h2 class=\"welcome\">COSA VUOI FARE OGGI?</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<i class=\"fas fa-map-marker-alt fa-3x\"></i>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<i class=\"fas fa-list-ol fa-3x\"></i>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<i class=\"fas fa-sun fa-3x\"></i>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<a href=\"/trees\">Geolocalizzati nell'oliveto</a>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<a href=\"/treeslist\">Consulta la mappatura degli alberi</a>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<a href=\"/meteo\">Consulta il meteo</a>
\t\t\t\t  \t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t
\t\t</div>\t
\t</div>
\t{% endif %}


\t{% if username == null %}
\t<div class=\"row\">
\t\t<div class=\"col-lg-8 col-lg-offset-2 text-center\">\t
\t\t\t<br><br>
\t\t\t<div class=\"panel panel-default\">
\t\t\t  \t<div class=\"panel-body\">
\t\t\t  \t\tPer visualizzare questa pagina, devi autenticarti<br><br>
\t\t\t  \t\t<a href=\"/login\" class=\"btn btn-info\">Accedi</a>
\t\t\t  \t</div>
\t\t\t</div>\t\t
\t\t\t\t
\t\t</div>\t
\t</div> \t\t\t
\t{% endif %}
{% endblock %}




", "default/index.html.twig", "/home/fabio/greengrey/templates/default/index.html.twig");
    }
}
