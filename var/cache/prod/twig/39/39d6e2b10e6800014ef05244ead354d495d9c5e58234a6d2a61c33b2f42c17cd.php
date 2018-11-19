<?php

/* base.html.twig */
class __TwigTemplate_9cc9fd8ea62931eeec3a1d7c1cba7b21a73e8496e95bb120af9bb8e21ca6aedc extends Twig_Template
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
        <link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
        <link rel=\"stylesheet\" href=\"/css/stile.css\">
        <link rel=\"stylesheet\" href=\"/css/datatables.min.css\">
        <link rel=\"stylesheet\" href=\"/css/all.css\">       
        <link href=\"https://fonts.googleapis.com/css?family=Muli\" rel=\"stylesheet\">
        <script src=\"/js/gmaps.js\"></script> 
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBl_yz16C7FS39VRFG5R98d4Yb5Yd7hFN8&callback=initMap\" async defer></script>
\t\t<script src=\"/js/jquery-3.3.1.min.js\"></script>
\t\t<script src=\"/js/popper.min.js\"></script>
\t\t<script src=\"/js/bootstrap.js\"></script>   
        <script src=\"/js/datatables.min.js\"></script>
        <script src=\"/js/all.js\"></script>
        <script src=\"/js/functions.js\"></script>
        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div id=\"logo\">
                    <div class=\"logo-place\">
                        <h1><span class=\"greenlogo\">Green</span><span class=\"greylogo\">Gre</span><img class=\"img-logo\" src=\"/images/oliva.png\"></h1>
                    </div>
                    <div class=\"info-place\">
                        ";
        // line 30
        if (((isset($context["username"]) || array_key_exists("username", $context)) && (($context["username"] ?? null) != null))) {
            // line 31
            echo "                        <p>Ciao, ";
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "&nbsp;&nbsp;[<a href=\"/logout\">Esci</a>]</p>
                        ";
        }
        // line 33
        echo "                    </div>
                </div>
            </div>
        </div>
        ";
        // line 37
        if (((isset($context["username"]) || array_key_exists("username", $context)) && (($context["username"] ?? null) != null))) {
            // line 38
            echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div id=\"topmenu\">   
                    <nav class=\"navbar navbar-default\">
                        <div class=\"container-fluid\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                                <a class=\"navbar-brand\" href=\"/home\">Home</a>
                            </div>
                            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                <ul class=\"nav navbar-nav\">
                                    <li><a href=\"/trees\">Geolocalizzazione<span class=\"sr-only\">(current)</span></a></li>
                                    <li><a href=\"/treeslist\">Lista Olivi</a></li>
                                    <li><a href=\"/calendario\">Calendario</a></li>
                                    <li><a href=\"/meteo\">Meteo</a></li>
                                    <li class=\"dropdown\">
                                      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Altre <span class=\"caret\"></span></a>
                                      <ul class=\"dropdown-menu\">
                                        <li><a href=\"/raccolta\">Raccolta</a></li>
                                        <li><a href=\"#\">link</a></li>
                                        <li><a href=\"#\">link</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"#\">Sep. link</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"#\">altro link</a></li>
                                      </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
        ";
        }
        // line 77
        echo "        
    
        ";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "        ";
        $this->displayBlock('map', $context, $blocks);
        // line 81
        echo "        
        <div id=\"siteinfo\" role=\"contentinfo\">
            <address>
                <div class=\"thinline\"></div>
                Designed and coded in Sardinia by <a href=\"#\">RnCStudio</a>
            </address>  
        </div>        
        ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        echo "        
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "GreenGrey Olv Test";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
    }

    // line 80
    public function block_map($context, array $blocks = array())
    {
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  170 => 88,  165 => 80,  160 => 79,  155 => 20,  149 => 6,  141 => 88,  132 => 81,  129 => 80,  127 => 79,  123 => 77,  81 => 38,  79 => 37,  73 => 33,  67 => 31,  65 => 30,  54 => 21,  52 => 20,  35 => 6,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/fabio/greengrey/templates/base.html.twig");
    }
}
