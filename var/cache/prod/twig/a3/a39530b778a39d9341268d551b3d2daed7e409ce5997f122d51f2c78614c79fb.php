<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_21f1f9d5b6f2218159639be85df91ebaee782f5533632643bafa0fdddaf9867c extends Twig_Template
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
        echo "<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/money_widget.html.php", "/home/fabio/greengrey/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
