<?php

/* base.html.twig */
class __TwigTemplate_1a50ad3d9f21e108595e5e776857f14d5edbdd1f609ce9ef2ead9296c11946fa extends Twig_Template
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
        <link rel=\"stylesheet\" href=\"/css/jquery.dataTables.min.css\">        
        <link href=\"https://fonts.googleapis.com/css?family=Muli\" rel=\"stylesheet\">
        <script src=\"/js/gmaps.js\"></script> 
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBl_yz16C7FS39VRFG5R98d4Yb5Yd7hFN8&callback=initMap\" async defer></script>
\t\t<script src=\"/js/jquery-3.3.1.min.js\"></script>
\t\t<script src=\"/js/popper.min.js\"></script>
\t\t<script src=\"/js/bootstrap.min.js\"></script>   
        <script src=\"/js/jquery.dataTables.min.js\"></script>
        <script src=\"/js/dataTables.bootstrap4.min.js\"></script>
        <script src=\"/js/functions.js\"></script>
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
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
        // line 29
        if (((isset($context["username"]) || array_key_exists("username", $context)) && (($context["username"] ?? null) != null))) {
            // line 30
            echo "                        <p>Ciao, ";
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "&nbsp;&nbsp;[<a href=\"/logout\">Esci</a>]</p>
                        ";
        }
        // line 32
        echo "                    </div>
                </div>
            </div>
        </div>
        ";
        // line 36
        if (((isset($context["username"]) || array_key_exists("username", $context)) && (($context["username"] ?? null) != null))) {
            // line 37
            echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div id=\"menu\">
                    <nav class=\"nav-main\">  
                        <div class=\"menu-all-pages-container\">
                            <ul id=\"menu-all-pages\" class=\"menu\">
                                <li class=\"menu-item current-menu-item\"><a href=\"/home\">Home</a></li>
                                <li class=\"menu-item\"><a href=\"/trees\">Mappa</a>
                                <li class=\"menu-item\"><a href=\"/treeslist\">Oliveto</a>    
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
        // line 54
        echo "        
    
        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "        ";
        $this->displayBlock('map', $context, $blocks);
        // line 58
        echo "        
        <div id=\"siteinfo\" role=\"contentinfo\">
            <address>
                <div class=\"thinline\"></div>
                Designed and coded in Sardinia by <a href=\"#\">RnCStudio</a>
            </address>  
        </div>        
        ";
        // line 65
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

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
    }

    // line 57
    public function block_map($context, array $blocks = array())
    {
    }

    // line 65
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
        return array (  147 => 65,  142 => 57,  137 => 56,  132 => 19,  126 => 6,  118 => 65,  109 => 58,  106 => 57,  104 => 56,  100 => 54,  80 => 37,  78 => 36,  72 => 32,  66 => 30,  64 => 29,  53 => 20,  51 => 19,  35 => 6,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/fabio/greengrey/templates/base.html.twig");
    }
}
