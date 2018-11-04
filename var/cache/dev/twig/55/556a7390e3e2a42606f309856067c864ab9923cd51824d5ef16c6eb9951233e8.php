<?php

/* base.html.twig */
class __TwigTemplate_70a3400c94cbe7ac26bdf6a63e78b17219a050dc697b129c26562f055ebe2e12 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if (((isset($context["username"]) || array_key_exists("username", $context)) && ((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 29, $this->source); })()) != null))) {
            // line 30
            echo "                        <p>Ciao, ";
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 30, $this->source); })()), "html", null, true);
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
        if (((isset($context["username"]) || array_key_exists("username", $context)) && ((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 36, $this->source); })()) != null))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GreenGrey Olv Test";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_map($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  207 => 65,  190 => 57,  173 => 56,  156 => 19,  138 => 6,  124 => 65,  115 => 58,  112 => 57,  110 => 56,  106 => 54,  86 => 37,  84 => 36,  78 => 32,  72 => 30,  70 => 29,  59 => 20,  57 => 19,  41 => 6,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"it\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}GreenGrey Olv Test{% endblock %}</title>
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
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div id=\"logo\">
                    <div class=\"logo-place\">
                        <h1><span class=\"greenlogo\">Green</span><span class=\"greylogo\">Gre</span><img class=\"img-logo\" src=\"/images/oliva.png\"></h1>
                    </div>
                    <div class=\"info-place\">
                        {% if username is defined and username != null %}
                        <p>Ciao, {{ username }}&nbsp;&nbsp;[<a href=\"/logout\">Esci</a>]</p>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        {% if username is defined and username != null %}
        <div class=\"row\">
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
        {% endif %}        
    
        {% block body %}{% endblock %}
        {% block map %}{% endblock %}
        
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
