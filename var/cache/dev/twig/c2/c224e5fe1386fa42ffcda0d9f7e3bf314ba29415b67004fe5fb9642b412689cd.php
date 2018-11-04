<?php

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_e774056fd3d798c3f1a6ff96edc36289771c7990e3adae760a315f0fa9d47904 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/messenger.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", array())) > 0)) {
            // line 7
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", array())) ? ("red") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/messenger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", array())), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "buses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 15
                echo "                ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", array(0 => $context["bus"]), "method");
                // line 16
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 17
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "</b>
                    <span
                        title=\"";
                // line 19
                echo twig_escape_filter($this->env, ($context["exceptionsCount"] ?? null), "html", null, true);
                echo " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                // line 20
                echo ((($context["exceptionsCount"] ?? null)) ? ("red") : (""));
                echo "\"
                    >
                        ";
                // line 22
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", array(0 => $context["bus"]), "method")), "html", null, true);
                echo "
                    </span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 27
            echo "
        ";
            // line 28
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => "messenger", "status" => ($context["status_color"] ?? null)));
            echo "
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 33
        echo "<span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", array())) ? ("label-status-error") : (""));
        echo "\">
    <span class=\"icon\">";
        // line 34
        echo twig_include($this->env, $context, "@WebProfiler/Icon/messenger.svg");
        echo "</span>
    <strong>Messages</strong>

    <span class=\"count\">
        <span>";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", array())), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_head($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 44
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 115px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item .sf-toggle-content.sf-toggle-visible { display: table-row-group; }
    </style>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 63
        echo "    ";
        $context["helper"] = $this;
        // line 64
        echo "
    <h2>Messages</h2>

    ";
        // line 67
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", array()))) {
            // line 68
            echo "        <div class=\"empty\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } else {
            // line 72
            echo "
    <div class=\"sf-tabs message-bus\">
        <div class=\"tab\">
            ";
            // line 75
            $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", array());
            // line 76
            echo "            ";
            $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", array());
            // line 77
            echo "            <h3 class=\"tab-title\">All<span class=\"badge ";
            echo ((($context["exceptionsCount"] ?? null)) ? ((((($context["exceptionsCount"] ?? null) == twig_length_filter($this->env, ($context["messages"] ?? null)))) ? ("status-error") : ("status-some-errors"))) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages"] ?? null)), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                ";
            // line 81
            echo $context["helper"]->macro_render_bus_messages(($context["messages"] ?? null), true);
            echo "
            </div>
        </div>

        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "buses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 86
                echo "        <div class=\"tab message-bus\">
            ";
                // line 87
                $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", array(0 => $context["bus"]), "method");
                // line 88
                echo "            ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", array(0 => $context["bus"]), "method");
                // line 89
                echo "            <h3 class=\"tab-title\">";
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "<span class=\"badge ";
                echo ((($context["exceptionsCount"] ?? null)) ? ((((($context["exceptionsCount"] ?? null) == twig_length_filter($this->env, ($context["messages"] ?? null)))) ? ("status-error") : ("status-some-errors"))) : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages"] ?? null)), "html", null, true);
                echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 92
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "</code> bus</p>
                ";
                // line 93
                echo $context["helper"]->macro_render_bus_messages(($context["messages"] ?? null));
                echo "
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "    ";
        }
        // line 98
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function macro_render_bus_messages($__messages__ = null, $__showBus__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "showBus" => $__showBus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            // line 102
            echo "    ";
            $context["discr"] = twig_random($this->env);
            // line 103
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["dispatchCall"]) {
                // line 104
                echo "    <table class=\"message-item\">
        <thead>
        <tr>
            <th colspan=\"2\" class=\"sf-toggle\"
                data-toggle-selector=\"#message-item-";
                // line 108
                echo twig_escape_filter($this->env, ($context["discr"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "-details\"
                data-toggle-initial=\"";
                // line 109
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) ? ("display") : (""));
                echo "\"
            >
                <span class=\"dump-inline\">";
                // line 111
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", array()), "type", array()));
                echo "</span>
                ";
                // line 112
                if (($context["showBus"] ?? null)) {
                    // line 113
                    echo "                    <span class=\"label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "bus", array()), "html", null, true);
                    echo "</span>
                ";
                }
                // line 115
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", array(), "any", true, true)) {
                    // line 116
                    echo "                    <span class=\"label status-error\">exception</span>
                ";
                }
                // line 118
                echo "                <a class=\"toggle-button\">
                    <span class=\"icon icon-close\">";
                // line 119
                echo twig_include($this->env, $context, "@Twig/images/icon-minus-square.svg");
                echo "</span>
                    <span class=\"icon icon-open\">";
                // line 120
                echo twig_include($this->env, $context, "@Twig/images/icon-plus-square.svg");
                echo "</span>
                </a>
            </th>
        </tr>
        </thead>
        <tbody id=\"message-item-";
                // line 125
                echo twig_escape_filter($this->env, ($context["discr"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "-details\" class=\"sf-toggle-content\">
            ";
                // line 126
                if (($context["showBus"] ?? null)) {
                    // line 127
                    echo "            <tr>
                <td class=\"text-bold\">Bus</td>
                <td>";
                    // line 129
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "bus", array()), "html", null, true);
                    echo "</td>
            </tr>
            ";
                }
                // line 132
                echo "            <tr>
                <td class=\"text-bold\">Message</td>
                <td>";
                // line 134
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", array()), "value", array()), 2);
                echo "</td>
            </tr>
            <tr>
                <td class=\"text-bold\">Envelope items</td>
                <td>
                    ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "envelopeItems", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 140
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                    echo "
                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 142
                    echo "                        <span class=\"text-muted\">No items</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                </td>
            </tr>
            <tr>
                <td class=\"text-bold\">Result</td>
                <td>
                    ";
                // line 149
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "result", array(), "any", true, true)) {
                    // line 150
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "result", array()), "seek", array(0 => "value"), "method"), 2);
                    echo "
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 151
$context["dispatchCall"], "exception", array(), "any", true, true)) {
                    // line 152
                    echo "                        <span class=\"text-danger\">No result as an exception occurred</span>
                    ";
                }
                // line 154
                echo "                </td>
            </tr>
            ";
                // line 156
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", array(), "any", true, true)) {
                    // line 157
                    echo "            <tr>
                <td class=\"text-bold\">Exception</td>
                <td>
                    ";
                    // line 160
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", array()), "value", array()), 1);
                    echo "
                </td>
            </tr>
            ";
                }
                // line 164
                echo "        </tbody>
    </table>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['dispatchCall'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/messenger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 164,  451 => 160,  446 => 157,  444 => 156,  440 => 154,  436 => 152,  434 => 151,  429 => 150,  427 => 149,  420 => 144,  413 => 142,  405 => 140,  400 => 139,  392 => 134,  388 => 132,  382 => 129,  378 => 127,  376 => 126,  370 => 125,  362 => 120,  358 => 119,  355 => 118,  351 => 116,  348 => 115,  342 => 113,  340 => 112,  336 => 111,  331 => 109,  325 => 108,  319 => 104,  301 => 103,  298 => 102,  282 => 101,  274 => 98,  271 => 97,  261 => 93,  257 => 92,  246 => 89,  243 => 88,  241 => 87,  238 => 86,  234 => 85,  227 => 81,  217 => 77,  214 => 76,  212 => 75,  207 => 72,  201 => 68,  199 => 67,  194 => 64,  191 => 63,  185 => 62,  160 => 44,  154 => 43,  143 => 38,  136 => 34,  131 => 33,  125 => 32,  115 => 28,  112 => 27,  109 => 26,  99 => 22,  94 => 20,  90 => 19,  85 => 17,  82 => 16,  79 => 15,  74 => 14,  72 => 13,  69 => 12,  64 => 10,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  44 => 5,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/messenger.html.twig", "/home/fabio/greengrey/vendor/symfony/web-profiler-bundle/Resources/views/Collector/messenger.html.twig");
    }
}
