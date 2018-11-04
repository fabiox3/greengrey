<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_def6c65e21bf33ed394d61e54194ebf01fd16fadc3ebf2877c10d3f1b1adc4cd extends Twig_Template
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
