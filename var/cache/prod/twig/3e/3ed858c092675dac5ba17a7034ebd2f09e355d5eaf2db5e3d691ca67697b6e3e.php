<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_7f04efcec4d1181f21872a0f8786157eb08cbc1a34b6e9e30f68ba8d8e05def7 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/container_attributes.html.php", "/home/fabio/greengrey/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
