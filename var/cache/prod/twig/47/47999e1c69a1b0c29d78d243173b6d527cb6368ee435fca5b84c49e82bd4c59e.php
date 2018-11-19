<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_707019c1734f93723409528abb524ffc56e00fd26374c0a2357aa467fc317426 extends Twig_Template
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
        echo "<tr>
    <?php \$widgetAttr = empty(\$help) ? array() : array('attr' => array('aria-describedby' => \$id.'_help')); ?>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form, \$widgetAttr); ?>
        <?php echo \$view['form']->help(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/form_row.html.php", "/home/fabio/greengrey/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
