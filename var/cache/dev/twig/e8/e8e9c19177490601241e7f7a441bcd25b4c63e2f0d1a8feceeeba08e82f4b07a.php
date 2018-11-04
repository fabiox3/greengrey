<?php

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_7248803de87eeea85077e6a79568e2771c9a796bb857041c79c112fc36dd96b7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["helper"] = $this;
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", array()));
        echo "
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", array())) {
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            ";
            echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", array()), "controller", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", array()), "route", array()), ((("GET" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", array()), "method", array()))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", array()), "method", array())) : ("")));
            echo "
        ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", array())) {
            // line 16
            echo "        ";
            $context["forward_profile"] = twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", array(0 => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", array())), "method");
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            echo $context["helper"]->macro_set_handler(((($context["forward_profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", array(0 => "request"), "method"), "controller", array())) : ("n/a")));
            echo "
        ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        $context["request_status_code_color"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", array()) >= 400)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", array()) >= 300)) ? ("yellow") : ("green"))));
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, ($context["request_status_code_color"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", array()), "html", null, true);
        echo "</span>
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", array())) {
            // line 27
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", array())) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/redirect.svg");
            }
            // line 28
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", array())) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/forward.svg");
            }
            // line 29
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, ((("GET" != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", array()))) ? (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", array())) : ("")), "html", null, true);
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    ";
        // line 34
        ob_start();
        // line 35
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statustext", array()), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 41
        if (("GET" != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", array()))) {
            // line 42
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 47
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 50
        echo twig_escape_filter($this->env, ($context["request_handler"] ?? null), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 55
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 60
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>

        ";
        // line 64
        if ((isset($context["redirect_handler"]) || array_key_exists("redirect_handler", $context))) {
            // line 65
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", array()), "status_code", array()), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
            // line 72
            echo twig_escape_filter($this->env, ($context["redirect_handler"] ?? null), "html", null, true);
            echo "
                        (<a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 78
        echo "
        ";
        // line 79
        if ((isset($context["forward_handler"]) || array_key_exists("forward_handler", $context))) {
            // line 80
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
            // line 84
            echo twig_escape_filter($this->env, ($context["forward_handler"] ?? null), "html", null, true);
            echo "
                        (<a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 90
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 91
        echo "
    ";
        // line 92
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null)));
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 96
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 97
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 103
        echo "    ";
        $context["helper"] = $this;
        // line 104
        echo "
    <h2>
        ";
        // line 106
        echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", array()));
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 116
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", array()), "all", array()))) {
            // line 117
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 121
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", array()), "maxDepth" => 1), false);
            echo "
                ";
        }
        // line 123
        echo "
                <h3>POST Parameters</h3>

                ";
        // line 126
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", array()), "all", array()))) {
            // line 127
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 131
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", array()), "maxDepth" => 1), false);
            echo "
                ";
        }
        // line 133
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 136
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", array()), "all", array()))) {
            // line 137
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 141
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", array())), false);
            echo "
                ";
        }
        // line 143
        echo "
                <h3>Request Headers</h3>
                ";
        // line 145
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestheaders", array()), "labels" => array(0 => "Header", 1 => "Value"), "maxDepth" => 1), false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "content", array()) == false)) {
            // line 150
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 153
($context["collector"] ?? null), "content", array())) {
            // line 154
            echo "                    <div class=\"card\">
                        <pre class=\"break-long-words\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "content", array()), "html", null, true);
            echo "</pre>
                    </div>
                ";
        } else {
            // line 158
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 162
        echo "
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 165
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", array())), false);
        echo "

                <h4>Defined as regular env variables</h4>
                ";
        // line 168
        $context["requestserver"] = array();
        // line 169
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestserver", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (!twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", array()), "keys", array()))) {
                // line 170
                echo "                    ";
                $context["requestserver"] = twig_array_merge(($context["requestserver"] ?? null), array($context["key"] => $context["value"]));
                // line 171
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => ($context["requestserver"] ?? null)), false);
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 182
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responseheaders", array()), "labels" => array(0 => "Header", 1 => "Value"), "maxDepth" => 1), false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 186
        echo (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", array()), "all", array())) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", array()), "all", array())))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 192
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", array()), "all", array()))) {
            // line 193
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 197
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", array())), false);
            echo "
                ";
        }
        // line 199
        echo "
                <h3>Response Cookies</h3>

                ";
        // line 202
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", array()), "all", array()))) {
            // line 203
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 207
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", array())), true);
            echo "
                ";
        }
        // line 209
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 212
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 218
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", array()))) {
            // line 219
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 223
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", array())), false);
            echo "
                ";
        }
        // line 225
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 228
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", array()))) {
            // line 229
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 233
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", array()), "labels" => array(0 => "Attribute", 1 => "Value")), false);
            echo "
                ";
        }
        // line 235
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 238
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 244
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", array()))) {
            // line 245
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 249
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", array())), false);
            echo "
                ";
        }
        // line 251
        echo "            </div>
        </div>

        ";
        // line 254
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", array())) {
            // line 255
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", array()), "token", array()))), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", array()), "token", array()), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 264
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
            echo "
            </div>
        </div>
        ";
        }
        // line 268
        echo "
        ";
        // line 269
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", array()))) {
            // line 270
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 271
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", array())), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 275
                echo "                    <h3>
                        ";
                // line 276
                echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", array(0 => "request"), "method"), "controller", array()));
                echo "
                        <small>(token = <a href=\"";
                // line 277
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "token", array()), "html", null, true);
                echo "</a>)</small>
                    </h3>

                    ";
                // line 280
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "            </div>
        </div>
        ";
        }
        // line 285
        echo "    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 288
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 289
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", array(), "any", true, true)) {
                // line 290
                if ((((isset($context["method"]) || array_key_exists("method", $context))) ? (_twig_default_filter(($context["method"] ?? null), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                    echo "</span>";
                }
                // line 291
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", array()), twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", array()));
                // line 292
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", array()), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", array()), "html", null, true);
                    echo "\">";
                }
                // line 294
                if ((((isset($context["route"]) || array_key_exists("route", $context))) ? (_twig_default_filter(($context["route"] ?? null), false)) : (false))) {
                    // line 295
                    echo "@";
                    echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
                } else {
                    // line 297
                    echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", array()))), "html", null, true);
                    // line 298
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", array())) ? ((" :: " . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", array()))) : ("")), "html", null, true);
                }
                // line 301
                if (($context["link"] ?? null)) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 303
                echo "<span>";
                echo twig_escape_filter($this->env, (((isset($context["route"]) || array_key_exists("route", $context))) ? (_twig_default_filter(($context["route"] ?? null), ($context["controller"] ?? null))) : (($context["controller"] ?? null))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 303,  702 => 301,  699 => 298,  697 => 297,  693 => 295,  691 => 294,  679 => 292,  677 => 291,  671 => 290,  668 => 289,  651 => 288,  643 => 285,  638 => 282,  630 => 280,  622 => 277,  618 => 276,  615 => 275,  611 => 274,  605 => 271,  602 => 270,  600 => 269,  597 => 268,  590 => 264,  584 => 261,  580 => 260,  573 => 255,  571 => 254,  566 => 251,  560 => 249,  554 => 245,  552 => 244,  543 => 238,  538 => 235,  532 => 233,  526 => 229,  524 => 228,  519 => 225,  513 => 223,  507 => 219,  505 => 218,  496 => 212,  491 => 209,  485 => 207,  479 => 203,  477 => 202,  472 => 199,  466 => 197,  460 => 193,  458 => 192,  449 => 186,  442 => 182,  428 => 172,  421 => 171,  418 => 170,  412 => 169,  410 => 168,  404 => 165,  399 => 162,  393 => 158,  387 => 155,  384 => 154,  382 => 153,  377 => 150,  375 => 149,  368 => 145,  364 => 143,  358 => 141,  352 => 137,  350 => 136,  345 => 133,  339 => 131,  333 => 127,  331 => 126,  326 => 123,  320 => 121,  314 => 117,  312 => 116,  299 => 106,  295 => 104,  292 => 103,  286 => 102,  275 => 97,  272 => 96,  266 => 95,  257 => 92,  254 => 91,  251 => 90,  241 => 85,  237 => 84,  231 => 80,  229 => 79,  226 => 78,  216 => 73,  212 => 72,  205 => 68,  200 => 65,  198 => 64,  187 => 60,  179 => 55,  171 => 50,  166 => 47,  161 => 44,  157 => 42,  155 => 41,  147 => 38,  142 => 35,  140 => 34,  137 => 33,  134 => 32,  129 => 30,  124 => 29,  119 => 28,  114 => 27,  112 => 26,  105 => 25,  103 => 24,  100 => 23,  98 => 22,  95 => 21,  92 => 20,  86 => 18,  83 => 17,  80 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 11,  63 => 10,  61 => 9,  58 => 8,  52 => 6,  49 => 5,  46 => 4,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/request.html.twig", "/home/fabio/greengrey/vendor/symfony/web-profiler-bundle/Resources/views/Collector/request.html.twig");
    }
}
