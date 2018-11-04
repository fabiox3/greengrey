<?php

/* trees/item.html.twig */
class __TwigTemplate_9ad01179ec6f6c5bad33702af45aa4bb9cdfd07da116604c20fe69633bd46b66 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trees/item.html.twig", 1);
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "trees/item.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'body' => array($this, 'block_body'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trees/item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trees/item.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-lg-12\">
    \t\t\t<br><br>
\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t  \t<div class=\"panel-heading\"><h2 class=\"welcome\">SCHEDA OLIVO <span class=\"colour-orange\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["codice"]) || array_key_exists("codice", $context) ? $context["codice"] : (function () { throw new Twig_Error_Runtime('Variable "codice" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</span></h2></div>
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<div class=\"row\">
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tLATITUDINE: <strong>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infotree"]) || array_key_exists("infotree", $context) ? $context["infotree"] : (function () { throw new Twig_Error_Runtime('Variable "infotree" does not exist.', 15, $this->source); })()), "latitude", array()), "html", null, true);
        echo "</strong>
\t\t\t\t\t    \t</div>
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tSEZIONE: <strong>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infotree"]) || array_key_exists("infotree", $context) ? $context["infotree"] : (function () { throw new Twig_Error_Runtime('Variable "infotree" does not exist.', 18, $this->source); })()), "section", array()), "html", null, true);
        echo "</strong>
\t\t\t\t\t    \t</div>
\t\t\t\t\t    </div>\t
\t\t\t\t\t    <div class=\"row\">\t
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tLONGITUDINE: <strong>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infotree"]) || array_key_exists("infotree", $context) ? $context["infotree"] : (function () { throw new Twig_Error_Runtime('Variable "infotree" does not exist.', 23, $this->source); })()), "longitude", array()), "html", null, true);
        echo "</strong>
\t\t\t\t\t    \t</div>\t\t\t\t\t    \t\t\t\t    \t
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tFILA: <strong>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infotree"]) || array_key_exists("infotree", $context) ? $context["infotree"] : (function () { throw new Twig_Error_Runtime('Variable "infotree" does not exist.', 26, $this->source); })()), "row", array()), "html", null, true);
        echo "</strong>
\t\t\t\t\t    \t</div>\t
\t\t\t\t    \t</div>\t\t\t    \t\t\t\t    \t
\t\t\t\t  \t</div>
\t\t\t\t</div>
    \t\t</div>
    \t</div>\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 new-comment hidden\">
\t\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', array("attr" => array("class" => "form")));
        echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "code", array()), 'row', array("label" => "Codice", "attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col\">
\t\t\t\t    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "username", array()), 'row', array("label" => "Nome", "attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div> \t\t\t\t\t   
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">   
\t\t\t\t\t<div class=\"col\"> 
\t\t\t\t    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "date", array()), 'row', array("label" => "Data e ora", "attr" => array("class" => "form-control h-auto")));
        echo "
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col\"> 
\t\t\t\t    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "note", array()), 'row', array("label" => "Nota", "attr" => array("class" => "form-control", "rows" => "6")));
        echo "
\t\t\t\t    </div> \t\t\t\t    
\t\t\t\t</div>    
\t\t\t\t<div class=\"row\"> 
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t    \t<button type=\"submit\" class=\"btn btn-primary mb-4 float-right\">Salva</button>
\t\t\t\t    </div>
\t\t\t\t</div>    
\t\t\t\t";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
    \t</div>\t    \t
    \t<div class=\"row\">
    \t\t<div id=\"comment-wrap\">
\t    \t\t<h4><button class=\"show-form-task\">Nuova nota</button></h4>
\t\t\t\t<ol class=\"commentslist\"> \t\t 
\t\t\t\t    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datatree"]) || array_key_exists("datatree", $context) ? $context["datatree"] : (function () { throw new Twig_Error_Runtime('Variable "datatree" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 65
            echo "\t\t\t\t\t<li id=\"comment-";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">
\t\t\t\t\t\t<article class=\"comment comment-body\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<div class=\"c-left\">
\t\t\t\t\t\t\t\t\t<h5>Il ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "date", array()), "m/d/Y"), "html", null, true);
            echo " alle ore ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "date", array()), "H:i"), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<span class=\"comment-date\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "username", array()), "html", null, true);
            echo " ha scritto:</span>
\t\t\t\t\t\t\t\t\t<a href=\"/trees/delete/";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", array()), "html", null, true);
            echo "\">cancella</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<div class=\"whiteempty\"></div>

\t\t\t\t\t\t\t<div class=\"comment-box\">
\t\t\t\t\t\t\t\t<div class=\"comment-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tpost\">\t
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "note", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</li>\t\t\t
\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t</ol>  
\t\t\t</div>\t  \t\t
\t\t</div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trees/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 86,  192 => 79,  181 => 71,  177 => 70,  171 => 69,  163 => 65,  159 => 64,  149 => 57,  138 => 49,  132 => 46,  124 => 41,  118 => 38,  112 => 35,  100 => 26,  94 => 23,  86 => 18,  80 => 15,  73 => 11,  66 => 6,  57 => 5,  36 => 1,  18 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% use \"bootstrap_4_layout.html.twig\" %}

{% block body %}
    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-lg-12\">
    \t\t\t<br><br>
\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t  \t<div class=\"panel-heading\"><h2 class=\"welcome\">SCHEDA OLIVO <span class=\"colour-orange\">{{ codice }}</span></h2></div>
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<div class=\"row\">
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tLATITUDINE: <strong>{{ infotree.latitude }}</strong>
\t\t\t\t\t    \t</div>
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tSEZIONE: <strong>{{ infotree.section }}</strong>
\t\t\t\t\t    \t</div>
\t\t\t\t\t    </div>\t
\t\t\t\t\t    <div class=\"row\">\t
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tLONGITUDINE: <strong>{{ infotree.longitude }}</strong>
\t\t\t\t\t    \t</div>\t\t\t\t\t    \t\t\t\t    \t
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tFILA: <strong>{{ infotree.row }}</strong>
\t\t\t\t\t    \t</div>\t
\t\t\t\t    \t</div>\t\t\t    \t\t\t\t    \t
\t\t\t\t  \t</div>
\t\t\t\t</div>
    \t\t</div>
    \t</div>\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 new-comment hidden\">
\t\t\t\t{{ form_start(form, {'attr': {'class': 'form'}}) }}
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t    {{ form_row(form.code, {'label': 'Codice', 'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col\">
\t\t\t\t    {{ form_row(form.username, {'label': 'Nome', 'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</div> \t\t\t\t\t   
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">   
\t\t\t\t\t<div class=\"col\"> 
\t\t\t\t    {{ form_row(form.date, {'label': 'Data e ora', 'attr': {'class': 'form-control h-auto'}}) }}
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col\"> 
\t\t\t\t    {{ form_row(form.note, {'label': 'Nota', 'attr': {'class': 'form-control', 'rows': '6'}}) }}
\t\t\t\t    </div> \t\t\t\t    
\t\t\t\t</div>    
\t\t\t\t<div class=\"row\"> 
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t    \t<button type=\"submit\" class=\"btn btn-primary mb-4 float-right\">Salva</button>
\t\t\t\t    </div>
\t\t\t\t</div>    
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
    \t</div>\t    \t
    \t<div class=\"row\">
    \t\t<div id=\"comment-wrap\">
\t    \t\t<h4><button class=\"show-form-task\">Nuova nota</button></h4>
\t\t\t\t<ol class=\"commentslist\"> \t\t 
\t\t\t\t    {% for k, v in datatree %}
\t\t\t\t\t<li id=\"comment-{{k}}\">
\t\t\t\t\t\t<article class=\"comment comment-body\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<div class=\"c-left\">
\t\t\t\t\t\t\t\t\t<h5>Il {{ v.date|date(\"m/d/Y\") }} alle ore {{ v.date|date(\"H:i\") }}</h5>
\t\t\t\t\t\t\t\t\t<span class=\"comment-date\">{{ v.username }} ha scritto:</span>
\t\t\t\t\t\t\t\t\t<a href=\"/trees/delete/{{ v.id }}\">cancella</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<div class=\"whiteempty\"></div>

\t\t\t\t\t\t\t<div class=\"comment-box\">
\t\t\t\t\t\t\t\t<div class=\"comment-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tpost\">\t
\t\t\t\t\t\t\t\t\t\t<p>{{ v.note }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</li>\t\t\t
\t\t\t\t    {% endfor %}
\t\t\t\t</ol>  
\t\t\t</div>\t  \t\t
\t\t</div>
    </div>
{% endblock %}", "trees/item.html.twig", "/home/fabio/greengrey/templates/trees/item.html.twig");
    }
}
