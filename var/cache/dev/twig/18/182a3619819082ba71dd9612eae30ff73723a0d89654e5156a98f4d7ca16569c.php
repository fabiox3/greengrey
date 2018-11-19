<?php

/* raccolta/index.html.twig */
class __TwigTemplate_1b7b9de25092dba5ba7aefab959c54399d55f8452ecf3ed3c25dd06bf929458d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "raccolta/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raccolta/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raccolta/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GreenGrey :: Raccolta ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-lg-12 col-lg-offset-4\">
\t\t\tSeleziona l'annata di interesse: 
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annata"]) || array_key_exists("annata", $context) ? $context["annata"] : (function () { throw new Twig_Error_Runtime('Variable "annata" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 11
            echo "\t\t\t\t<a href=\"/raccolta/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "annata", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "annata", array()), "html", null, true);
            echo "</a> | 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</div>
\t</div>

\t";
        // line 16
        if (( !(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()) == null)) {
            // line 17
            echo "
\t\t";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
            echo "
\t\t    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "year", array()), 'row');
            echo "
\t\t    ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "kg_olive", array()), 'row');
            echo "
\t\t    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "kg_olio", array()), 'row');
            echo "
\t\t    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "date", array()), 'row');
            echo "

\t\t    <button type=\"submit\">Salva</button>
\t\t";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
            echo "
\t";
        } else {
            // line 26
            echo "\t
\t\t";
            // line 27
            $this->displayBlock('javascripts', $context, $blocks);
            // line 50
            echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<br><br>
\t\t\t\t\t<table id=\"resalist\" class=\"table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">KG Olive</td>
\t\t\t\t\t\t\t\t<th scope=\"col\">KG Olio</td>
\t\t\t\t\t\t\t\t<th scope=\"col\">Resa Qt/Litri</td>
\t\t\t\t\t\t\t\t<th scope=\"col\">Litri Olio</td>
\t\t\t\t\t\t\t\t<th scope=\"col\">Data</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resa"]) || array_key_exists("resa", $context) ? $context["resa"] : (function () { throw new Twig_Error_Runtime('Variable "resa" does not exist.', 65, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 66
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "kg_olive", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "kg_olio", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 69
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, $context["r"], "kg_olio", array()) / twig_get_attribute($this->env, $this->source, $context["r"], "kg_olive", array())) * 100), 2, "floor"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 70
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["r"], "kg_olio", array()) * twig_round(0.916, 2, "floor")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo " \t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table> 
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div> 
\t";
        }
        // line 80
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "\t\t<script>
\t\t\t\$(document).ready( function () {
\t\t\t    \$('#resalist').DataTable({
\t\t\t    \tretrieve: true,
\t\t\t    \tpageLength: 30,
\t\t\t    \torder: [[ 4, \"asc\" ]],
\t\t\t    \tlanguage: {
\t\t\t    \t\tinfo: \"Mostra _START_ su _END_ di _TOTAL_ totali\",
\t\t\t    \t\tlengthMenu: \"Mostra _MENU_ elementi\",
\t\t\t    \t\tinfoFiltered: \"(filtrati su _MAX_ totali)\",
\t\t\t    \t\tsearch: \"Cerca\",
\t\t\t\t\t    paginate: {
\t\t\t\t\t        first:      \"Prima\",
\t\t\t\t\t        last:       \"Ultima\",
\t\t\t\t\t        next:       \"Avanti\",
\t\t\t\t\t        previous:   \"Indietro\"\t    \t\t
\t\t\t\t\t\t}
\t\t\t    \t}
\t\t\t    });
\t\t\t} );
\t\t</script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "raccolta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 28,  205 => 27,  194 => 80,  185 => 73,  176 => 71,  172 => 70,  168 => 69,  164 => 68,  160 => 67,  157 => 66,  153 => 65,  136 => 50,  134 => 27,  131 => 26,  126 => 25,  120 => 22,  116 => 21,  112 => 20,  108 => 19,  104 => 18,  101 => 17,  99 => 16,  94 => 13,  83 => 11,  79 => 10,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}GreenGrey :: Raccolta {% endblock %}

{% block body %}

\t<div class=\"row\">
\t\t<div class=\"col-lg-12 col-lg-offset-4\">
\t\t\tSeleziona l'annata di interesse: 
\t\t\t{% for a in annata %}
\t\t\t\t<a href=\"/raccolta/{{ a.annata }}\">{{ a.annata }}</a> | 
\t\t\t{% endfor %}
\t\t</div>
\t</div>

\t{% if not form == null %}

\t\t{{ form_start(form) }}
\t\t    {{ form_row(form.year) }}
\t\t    {{ form_row(form.kg_olive) }}
\t\t    {{ form_row(form.kg_olio) }}
\t\t    {{ form_row(form.date) }}

\t\t    <button type=\"submit\">Salva</button>
\t\t{{ form_end(form) }}
\t{% else %}\t
\t\t{% block javascripts %}
\t\t<script>
\t\t\t\$(document).ready( function () {
\t\t\t    \$('#resalist').DataTable({
\t\t\t    \tretrieve: true,
\t\t\t    \tpageLength: 30,
\t\t\t    \torder: [[ 4, \"asc\" ]],
\t\t\t    \tlanguage: {
\t\t\t    \t\tinfo: \"Mostra _START_ su _END_ di _TOTAL_ totali\",
\t\t\t    \t\tlengthMenu: \"Mostra _MENU_ elementi\",
\t\t\t    \t\tinfoFiltered: \"(filtrati su _MAX_ totali)\",
\t\t\t    \t\tsearch: \"Cerca\",
\t\t\t\t\t    paginate: {
\t\t\t\t\t        first:      \"Prima\",
\t\t\t\t\t        last:       \"Ultima\",
\t\t\t\t\t        next:       \"Avanti\",
\t\t\t\t\t        previous:   \"Indietro\"\t    \t\t
\t\t\t\t\t\t}
\t\t\t    \t}
\t\t\t    });
\t\t\t} );
\t\t</script>
\t\t{% endblock %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<br><br>
\t\t\t\t\t<table id=\"resalist\" class=\"table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">KG Olive</td>
\t\t\t\t\t\t\t\t<th scope=\"col\">KG Olio</td>
\t\t\t\t\t\t\t\t<th scope=\"col\">Resa Qt/Litri</td>
\t\t\t\t\t\t\t\t<th scope=\"col\">Litri Olio</td>
\t\t\t\t\t\t\t\t<th scope=\"col\">Data</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for r in resa %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ r.kg_olive }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.kg_olio }}</td>
\t\t\t\t\t\t\t\t<td>{{ (r.kg_olio/r.kg_olive*100)|round(2, 'floor') }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.kg_olio*0.916|round(2, 'floor') }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.date|date(\"d/m/Y\") }}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %} \t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table> 
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div> 
\t{% endif %}

{% endblock %}
", "raccolta/index.html.twig", "/home/fabio/greengrey/templates/raccolta/index.html.twig");
    }
}
