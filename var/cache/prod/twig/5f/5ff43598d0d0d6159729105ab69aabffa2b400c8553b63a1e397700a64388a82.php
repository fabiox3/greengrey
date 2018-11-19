<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_1b30ba8c5992d3550cbca875d759fa43678b7d947b3654b1ad840fb8b4df8a0d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
*/
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception.css.twig", "/home/fabio/greengrey/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
