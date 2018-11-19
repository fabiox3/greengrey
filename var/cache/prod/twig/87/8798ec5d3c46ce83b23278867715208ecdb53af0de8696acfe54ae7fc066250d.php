<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_180418f6dcebbbbd971d25b1de6a25a64612b53d55e3d7230157d1b1094a2a5d extends Twig_Template
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
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/hidden_row.html.php", "/home/fabio/greengrey/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
