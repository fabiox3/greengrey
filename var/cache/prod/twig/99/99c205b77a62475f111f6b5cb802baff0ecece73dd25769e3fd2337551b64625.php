<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1739916f0a55500227402342ee38efc1e952ead2cacb58f8cb96e3d5d43c01bc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/repeated_row.html.php", "/home/fabio/greengrey/vendor/symfony/framework-bundle/Resources/views/Form/repeated_row.html.php");
    }
}
