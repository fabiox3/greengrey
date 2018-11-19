<?php

/* default/index.html.twig */
class __TwigTemplate_5f522a414695f6f86cd277f4deaa8bead3c5f7472b24cc78dfac7ce65745923e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "GreenGrey :: Home";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        if ((($context["username"] ?? null) != null)) {
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
        if ((($context["username"] ?? null) == null)) {
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
        return array (  104 => 61,  102 => 60,  98 => 58,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/home/fabio/greengrey/templates/default/index.html.twig");
    }
}
