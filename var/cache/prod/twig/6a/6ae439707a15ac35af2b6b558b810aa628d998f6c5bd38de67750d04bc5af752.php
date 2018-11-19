<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a8f597e946d6ec6dda4bef8c6ed695bed1d39321d9232a1450be4bdd9f82d3e8 extends Twig_Template
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
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/button_row.html.php", "/home/fabio/greengrey/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
