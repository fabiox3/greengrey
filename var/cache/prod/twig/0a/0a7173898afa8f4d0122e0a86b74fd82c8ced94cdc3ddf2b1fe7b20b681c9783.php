<?php

/* trees/list.html.twig */
class __TwigTemplate_acc6e822bb69f78c839dc64929e2343faf5743bf1b3f96962db6bec52ea651ab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trees/list.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "GreenGrey :: Lista Olivi";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<br><br>
\t\t\t<table id=\"treelist\" class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">#</td>
\t\t\t\t\t\t<th scope=\"col\">Codice</td>
\t\t\t\t\t\t<th scope=\"col\">Latitudine</td>
\t\t\t\t\t\t<th scope=\"col\">Longitudine</td>
\t\t\t\t\t\t<th scope=\"col\">Sezione</td>
\t\t\t\t\t\t<th scope=\"col\">Fila</td>
\t\t\t\t\t\t<th scope=\"col\">Scheda</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 46
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "code", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "latitude", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "longitude", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "section", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "row", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a href=\"/trees/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "code", array()), "html", null, true);
            echo "\">Vedi</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo " \t\t
\t\t\t\t</tbody>
\t\t\t</table> 
\t\t</div>
\t</div>\t
</div> 
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "trees/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 7,  114 => 6,  104 => 55,  95 => 53,  91 => 52,  87 => 51,  83 => 50,  79 => 49,  75 => 48,  71 => 47,  68 => 46,  64 => 45,  45 => 28,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "trees/list.html.twig", "/home/fabio/greengrey/templates/trees/list.html.twig");
    }
}
