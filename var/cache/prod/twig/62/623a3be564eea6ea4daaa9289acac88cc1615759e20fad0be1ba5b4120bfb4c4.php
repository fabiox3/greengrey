<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_22019c2c17e6263d2b9f9aadd27ae912aba6fc6de0208e3bce6b099690c5718a extends Twig_Template
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
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.rdf.twig", "/home/fabio/greengrey/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
