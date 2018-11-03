<?php

/* trees/t.html.twig */
class __TwigTemplate_5b9dde8c0e2b14f9843c07910e406cb59ec3b59c74470ca692537fabac780218 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trees/t.html.twig", 1);
        $this->blocks = array(
            'map' => array($this, 'block_map'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trees/t.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_map($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 4
        echo "    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-lg-12\">
    \t\t\tStai visualizzando il codice ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["codice"]) || array_key_exists("codice", $context) ? $context["codice"] : (function () { throw new Twig_Error_Runtime('Variable "codice" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "
    \t\t</div>
\t\t</div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "trees/t.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block map %}
    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-lg-12\">
    \t\t\tStai visualizzando il codice {{ codice }}
    \t\t</div>
\t\t</div>
    </div>
{% endblock %}", "trees/t.html.twig", "/home/fabio/greengrey/templates/trees/t.html.twig");
    }
}
