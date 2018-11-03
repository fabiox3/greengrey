<?php

/* menu.html.twig */
class __TwigTemplate_8b42e592d64048373125cec5643329d7f29c8195153656534f9898a087261773 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        if (((isset($context["username"]) || array_key_exists("username", $context)) && ((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 1, $this->source); })()) != null))) {
            // line 2
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
        }
        // line 19
        if (((isset($context["username"]) || array_key_exists("username", $context)) && ((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 19, $this->source); })()) != null))) {
            // line 20
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
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  50 => 19,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if username is defined and username != null %}
<div class=\"row\">
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
{% endif %}
{% if username is defined and username != null %}
<div class=\"row\">
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
{% endif %}", "menu.html.twig", "/home/fabio/greengrey/templates/menu.html.twig");
    }
}
