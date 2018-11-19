<?php

/* raccolta/index.html.twig */
class __TwigTemplate_8f0606e63cdcdcf56dd8206e8bd593acedb6f96046acf99dfbcf2df9e90add85 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "GreenGrey :: Raccolta ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

\t";
        // line 8
        if (( !($context["form"] ?? null) == null)) {
            // line 9
            echo "\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
\t\t    ";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'row');
            echo "
\t\t    ";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kg_olive", array()), 'row');
            echo "
\t\t    ";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kg_olio", array()), 'row');
            echo "
\t\t    ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "resa", array()), 'row');
            echo "
\t\t    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "litri", array()), 'row');
            echo "
\t\t    ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'row');
            echo "

\t\t    <button type=\"submit\">Salva</button>
\t\t";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
\t";
        } else {
            // line 19
            echo "\t
\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["annata"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 21
                echo "\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "annata", array()), "html", null, true);
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
\t\t";
            // line 24
            $this->displayBlock('javascripts', $context, $blocks);
            // line 47
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
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["resa"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 63
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "kg_olive", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "kg_olio", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 66
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, $context["r"], "kg_olio", array()) / twig_get_attribute($this->env, $this->source, $context["r"], "kg_olive", array())) * 100), 2, "floor"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 67
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["r"], "kg_olio", array()) * twig_round(0.916, 2, "floor")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo " \t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table> 
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div> 
\t";
        }
        // line 77
        echo "
";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
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
        return array (  172 => 25,  169 => 24,  164 => 77,  155 => 70,  146 => 68,  142 => 67,  138 => 66,  134 => 65,  130 => 64,  127 => 63,  123 => 62,  106 => 47,  104 => 24,  101 => 23,  92 => 21,  88 => 20,  85 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  49 => 9,  47 => 8,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "raccolta/index.html.twig", "/home/fabio/greengrey/templates/raccolta/index.html.twig");
    }
}
