<?php

/* security/login.html.twig */
class __TwigTemplate_c0e6a1b67cd738dafce77cf9b37a1551e56338ecc8b5fdd20ad2615f54c47602 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "Accedi!";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-lg-4 col-lg-offset-4\">
        <form method=\"post\">
            ";
        // line 9
        if (($context["error"] ?? null)) {
            // line 10
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 12
        echo "            <br><br>
            <div class=\"form-group\">
                <label for=\"inputEmail\" class=\"sr-only\">Email</label>
                <input type=\"email\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>
            </div>
            <div class=\"form-group\">
                <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\"value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <div class=\"form-group\">
                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Ricorda i dati
                    </label>
                </div>
            </div>
            <div class=\"form-group\">
                <button class=\"btn btn-xs btn-primary\" type=\"submit\">
                    Accedi
                </button>
            </div>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  60 => 15,  55 => 12,  49 => 10,  47 => 9,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.html.twig", "/home/fabio/greengrey/templates/security/login.html.twig");
    }
}
