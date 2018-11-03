<?php

/* trees_list/index.html.twig */
class __TwigTemplate_bf22b5b0772c8d3edceabe272b61f806dd406d840cd4d0b26415acc04d3fc8d7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trees_list/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trees_list/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trees_list/index.html.twig"));

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

        echo "Lista alberi - GreenGrey";
        
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
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<br><br>
\t\t<table id=\"treelist\" class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">#</td>
\t\t\t\t\t<th scope=\"col\">Codice</td>
\t\t\t\t\t<th scope=\"col\">Latitudine</td>
\t\t\t\t\t<th scope=\"col\">Longitudine</td>
\t\t\t\t\t<th scope=\"col\">Sezione</td>
\t\t\t\t\t<th scope=\"col\">Fila</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trees"]) || array_key_exists("trees", $context) ? $context["trees"] : (function () { throw new Twig_Error_Runtime('Variable "trees" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 44
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "code", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "latitude", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "longitude", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "section", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "row", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo " \t\t
\t\t\t</tbody>
\t\t</table> 
\t</div>
</div>\t
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "<script>
\t\$(document).ready( function () {
\t    \$('#treelist').DataTable({
\t    \tretrieve: true,
\t    \tpageLength: 30,
\t    \tlanguage: {
\t    \t\tinfo: \"Mostra _START_ su _END_ di _TOTAL_ totali\",
\t    \t\tlengthMenu: \"Mostra _MENU_ elementi\",
\t    \t\tinfoFiltered: \"(filtrati su _MAX_ totali)\",
\t    \t\tsearch: \"Cerca\",
\t\t\t    paginate: {
\t\t\t        first:      \"Prima\",
\t\t\t        last:       \"Ultima\",
\t\t\t        next:       \"Avanti\",
\t\t\t        previous:   \"Indietro\"\t    \t\t
\t\t\t\t}
\t    \t}
\t    });
\t} );
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trees_list/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 7,  144 => 6,  128 => 52,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 45,  96 => 44,  92 => 43,  75 => 28,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Lista alberi - GreenGrey{% endblock %}

{% block body %}
{% block javascripts %}
<script>
\t\$(document).ready( function () {
\t    \$('#treelist').DataTable({
\t    \tretrieve: true,
\t    \tpageLength: 30,
\t    \tlanguage: {
\t    \t\tinfo: \"Mostra _START_ su _END_ di _TOTAL_ totali\",
\t    \t\tlengthMenu: \"Mostra _MENU_ elementi\",
\t    \t\tinfoFiltered: \"(filtrati su _MAX_ totali)\",
\t    \t\tsearch: \"Cerca\",
\t\t\t    paginate: {
\t\t\t        first:      \"Prima\",
\t\t\t        last:       \"Ultima\",
\t\t\t        next:       \"Avanti\",
\t\t\t        previous:   \"Indietro\"\t    \t\t
\t\t\t\t}
\t    \t}
\t    });
\t} );
</script>
{% endblock %}
<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<br><br>
\t\t<table id=\"treelist\" class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">#</td>
\t\t\t\t\t<th scope=\"col\">Codice</td>
\t\t\t\t\t<th scope=\"col\">Latitudine</td>
\t\t\t\t\t<th scope=\"col\">Longitudine</td>
\t\t\t\t\t<th scope=\"col\">Sezione</td>
\t\t\t\t\t<th scope=\"col\">Fila</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t{% for t in trees %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ t.id }}</td>
\t\t\t\t\t<td>{{ t.code }}</td>
\t\t\t\t\t<td>{{ t.latitude }}</td>
\t\t\t\t\t<td>{{ t.longitude }}</td>
\t\t\t\t\t<td>{{ t.section }}</td>
\t\t\t\t\t<td>{{ t.row }}</td>
\t\t\t\t</tr>
\t\t\t{% endfor %} \t\t
\t\t\t</tbody>
\t\t</table> 
\t</div>
</div>\t
 
{% endblock %}
", "trees_list/index.html.twig", "/home/fabio/greengrey/templates/trees_list/index.html.twig");
    }
}
