<?php

/* base.html.twig */
class __TwigTemplate_c6ccb3bbfae42528e429f8ea4b1df2a8ecd0a59c07e0f0f42a2ca4614bdc1d75 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'map' => array($this, 'block_map'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"it\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/css/stile.css\">
        <script src=\"/js/gmaps.js\"></script> 
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBl_yz16C7FS39VRFG5R98d4Yb5Yd7hFN8&callback=initMap\" async defer></script>
                   
\t\t<script src=\"/js/jquery-3.3.1.slim.min.js\"></script>
\t\t<script src=\"/js/popper.min.js\"></script>
\t\t<script src=\"/js/bootstrap.min.js\"></script>   
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div id=\"logo\">
                        <div class=\"logo-place\">
                            <h1><span class=\"greenlogo\">Green</span><span class=\"greylogo\">Grey</span><img class=\"img-logo\" src=\"images/oliva.png\"></h1>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 28
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "          
        </div>
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('map', $context, $blocks);
        // line 34
        echo "        <div id=\"siteinfo\" role=\"contentinfo\">
            <address>
                <div class=\"thinline\"></div>
                Designed and coded in Sardinia by <a href=\"#\">RnCStudio</a>
            </address>  
        </div>        
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GreenGrey Olv Test";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_map($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 33
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 40,  137 => 33,  131 => 32,  124 => 31,  118 => 30,  107 => 15,  95 => 6,  86 => 41,  84 => 40,  76 => 34,  73 => 32,  71 => 30,  66 => 28,  52 => 16,  50 => 15,  38 => 6,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"it\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}GreenGrey Olv Test{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/css/stile.css\">
        <script src=\"/js/gmaps.js\"></script> 
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBl_yz16C7FS39VRFG5R98d4Yb5Yd7hFN8&callback=initMap\" async defer></script>
                   
\t\t<script src=\"/js/jquery-3.3.1.slim.min.js\"></script>
\t\t<script src=\"/js/popper.min.js\"></script>
\t\t<script src=\"/js/bootstrap.min.js\"></script>   
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div id=\"logo\">
                        <div class=\"logo-place\">
                            <h1><span class=\"greenlogo\">Green</span><span class=\"greylogo\">Grey</span><img class=\"img-logo\" src=\"images/oliva.png\"></h1>
                        </div>
                    </div>
                </div>
            </div>
            {{ include('menu.html.twig') }}          
        </div>
        {% block body %}
        {% endblock %}
        {% block map %}
        {% endblock %}
        <div id=\"siteinfo\" role=\"contentinfo\">
            <address>
                <div class=\"thinline\"></div>
                Designed and coded in Sardinia by <a href=\"#\">RnCStudio</a>
            </address>  
        </div>        
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/fabio/greengrey/templates/base.html.twig");
    }
}
