<?php

/* trees/map.html.twig */
class __TwigTemplate_abc9132c96f47ce63efd8c478a977565c3ab2f6eabeedc2143567cd699c06039 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trees/map.html.twig", 1);
        $this->blocks = array(
            'map' => array($this, 'block_map'),
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
    public function block_map($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"map\"></div>
";
    }

    public function getTemplateName()
    {
        return "trees/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "trees/map.html.twig", "/home/fabio/greengrey/templates/trees/map.html.twig");
    }
}
