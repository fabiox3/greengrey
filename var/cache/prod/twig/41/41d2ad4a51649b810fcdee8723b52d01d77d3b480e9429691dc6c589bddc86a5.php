<?php

/* default/index.html.twig */
class __TwigTemplate_9f5ae79d6df7c0dd3a3df401c85422f8f86d0fb2858e7e420bf1ef6195f19403 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        return array (  65 => 24,  63 => 23,  59 => 21,  42 => 7,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/home/fabio/greengrey/templates/default/index.html.twig");
    }
}
