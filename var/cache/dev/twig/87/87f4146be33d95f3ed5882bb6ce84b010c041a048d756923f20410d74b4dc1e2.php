<?php

/* menu.html.twig */
class __TwigTemplate_b46953ea1a30554a8f78670cd90a17565be8d2d0b6cd0e68b3a94fb911cbd43f extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-12\">
        <div id=\"menu\">
            <nav class=\"nav-main\">  
                <div class=\"menu-all-pages-container\">
                    <ul id=\"menu-all-pages\" class=\"menu\">
                        <li class=\"menu-item current-menu-item\"><a href=\"/\">Home</a></li>
                        <li class=\"menu-item\"><a href=\"/trees\">Mappa</a>
                        <li class=\"menu-item\"><a href=\"/calendario\">Calendario</a>
                        <li class=\"menu-item\"><a href=\"/meteo\">Meteo</a>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-lg-12\">
        <div id=\"menu\">
            <nav class=\"nav-main\">  
                <div class=\"menu-all-pages-container\">
                    <ul id=\"menu-all-pages\" class=\"menu\">
                        <li class=\"menu-item current-menu-item\"><a href=\"/\">Home</a></li>
                        <li class=\"menu-item\"><a href=\"/trees\">Mappa</a>
                        <li class=\"menu-item\"><a href=\"/calendario\">Calendario</a>
                        <li class=\"menu-item\"><a href=\"/meteo\">Meteo</a>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div> 
", "menu.html.twig", "/home/fabio/greengrey/templates/menu.html.twig");
    }
}
