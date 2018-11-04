<?php

/* default/index.html.twig */
class __TwigTemplate_d111f06e7cedf16d583ebe2a7c20bc9c5527df383ca6b542771614cbd5a9b20b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ((($context["username"] ?? null) != null)) {
            // line 5
            echo "\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\tCiao, ";
            // line 7
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "! Cosa vuoi fare oggi?
\t\t</div>\t
\t</div> 
\t<div class=\"row\">
\t\t<div class=\"col-lg-4\">1</div>
\t\t<div class=\"col-lg-4\">2</div>
\t\t<div class=\"col-lg-4\">3</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-4\">4</div>
\t\t<div class=\"col-lg-4\">5</div>
\t\t<div class=\"col-lg-4\">6</div>
\t</div>\t
\t";
        }
        // line 21
        echo "

\t";
        // line 23
        if ((($context["username"] ?? null) == null)) {
            // line 24
            echo "\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">\t
\t\t\t<a href=\"/login\" class=\"btn btn-info\">Accedi</a>\t
\t\t</div>\t
\t</div> \t\t\t
\t";
        }
        
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
        return array (  74 => 24,  72 => 23,  68 => 21,  51 => 7,  47 => 5,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/home/fabio/greengrey/templates/default/index.html.twig");
    }
}
