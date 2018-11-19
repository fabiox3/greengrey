<?php

/* meteo/index.html.twig */
class __TwigTemplate_1d9e32a92434769e9b221c67900a8098ec7e3d761ebd27a15fc0cda6ae397a43 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "meteo/index.html.twig", 1);
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
        echo "GreenGrey :: Previsioni Meteo Sestu";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container text-center\">
\t<br><br>
\t<h2 class=\"welcome\">PREVISIONI METEO SESTU</h2>
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<iframe width=\"100%\" height=\"600\" scrolling=\"no\" frameborder=\"no\" noresize=\"noresize\" src=\"https://www.ilmeteo.it/box/previsioni.php?citta=6868&type=tri1&width=600&ico=3&lang=ita&days=6&font=Verdana&fontsize=14&bg=FFFFFF&fg=111111&bgtitle=ACA935&fgtitle=FFFFFF&bgtab=FAFAFA&fglink=ACA935\"></iframe>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "meteo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "meteo/index.html.twig", "/home/fabio/greengrey/templates/meteo/index.html.twig");
    }
}
