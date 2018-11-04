<?php

/* trees/item.html.twig */
class __TwigTemplate_0228ab48b0f844da8db3ab9200f2733efa6d7261ee853c5351a266d25b10c377 extends Twig_Template
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-lg-12\">
    \t\t\t<br><br>
\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t  \t<div class=\"panel-heading\"><h2 class=\"welcome\">SCHEDA OLIVO <span class=\"colour-orange\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["codice"] ?? null), "html", null, true);
        echo "</span></h2></div>
\t\t\t\t  \t<div class=\"panel-body\">
\t\t\t\t  \t\t<div class=\"row\">
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tLATITUDINE: <strong>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infotree"] ?? null), "latitude", array()), "html", null, true);
        echo "</strong>
\t\t\t\t\t    \t</div>
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tSEZIONE: <strong>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infotree"] ?? null), "section", array()), "html", null, true);
        echo "</strong>
\t\t\t\t\t    \t</div>
\t\t\t\t\t    </div>\t
\t\t\t\t\t    <div class=\"row\">\t
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tLONGITUDINE: <strong>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infotree"] ?? null), "longitude", array()), "html", null, true);
        echo "</strong>
\t\t\t\t\t    \t</div>\t\t\t\t\t    \t\t\t\t    \t
\t\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t\t    \t\tFILA: <strong>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infotree"] ?? null), "row", array()), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form")));
        echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", array()), 'row', array("label" => "Codice", "attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col\">
\t\t\t\t    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", array()), 'row', array("label" => "Nome", "attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div> \t\t\t\t\t   
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">   
\t\t\t\t\t<div class=\"col\"> 
\t\t\t\t    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'row', array("label" => "Data e ora", "attr" => array("class" => "form-control h-auto")));
        echo "
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col\"> 
\t\t\t\t    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", array()), 'row', array("label" => "Nota", "attr" => array("class" => "form-control", "rows" => "6")));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable(($context["datatree"] ?? null));
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
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<div class=\"whiteempty\"></div>

\t\t\t\t\t\t\t<div class=\"comment-box\">
\t\t\t\t\t\t\t\t<div class=\"comment-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tpost\">\t
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "note", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"deteletask\"><a rel=\"nofollow\" class=\"comment-reply-login\" href=\"/trees/delete/";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", array()), "html", null, true);
            echo "\">Elimina</a></span>
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
        return array (  196 => 86,  185 => 81,  179 => 78,  168 => 70,  162 => 69,  154 => 65,  150 => 64,  140 => 57,  129 => 49,  123 => 46,  115 => 41,  109 => 38,  103 => 35,  91 => 26,  85 => 23,  77 => 18,  71 => 15,  64 => 11,  57 => 6,  51 => 5,  36 => 1,  18 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "trees/item.html.twig", "/home/fabio/greengrey/templates/trees/item.html.twig");
    }
}
