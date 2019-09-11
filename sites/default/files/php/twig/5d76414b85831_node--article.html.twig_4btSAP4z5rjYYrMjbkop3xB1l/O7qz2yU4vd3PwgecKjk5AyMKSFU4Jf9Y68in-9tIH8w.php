<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/startupgrowth_lite/templates/node--article.html.twig */
class __TwigTemplate_fe18736b16d033a30e561b6af40737456f55e5463c5079eb7d85582879841399 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("node.html.twig", "themes/startupgrowth_lite/templates/node--article.html.twig", 8);
        $this->blocks = [
            'meta_area' => [$this, 'block_meta_area'],
            'node_side' => [$this, 'block_node_side'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10, "trans" => 14];
        $filters = ["escape" => 12, "format_date" => 28, "without" => 69];
        $functions = ["attach_library" => 40];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'format_date', 'without'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_meta_area($context, array $blocks = [])
    {
        // line 10
        echo "  ";
        if (($context["display_submitted"] ?? null)) {
            // line 11
            echo "    <div class=\"node__meta\">
      ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
      <span";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "submitted-info"], "method")), "html", null, true);
            echo ">
        ";
            // line 14
            echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            // line 15
            echo "      </span>
      ";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
    }

    // line 20
    public function block_node_side($context, array $blocks = [])
    {
        // line 21
        echo "  ";
        if ((((($context["display_submitted"] ?? null) || $this->getAttribute(($context["node"] ?? null), "comment", [])) || ((($context["view_mode"] ?? null) == "full") && $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", []))) || ((($context["view_mode"] ?? null) == "full") && $this->getAttribute(($context["mt_setting"] ?? null), "post_progress", [])))) {
            // line 22
            echo "    <div class=\"node--submitted-info
      ";
            // line 23
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_subtitle", []), "value", []) || $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_subheader_body", []), "value", []))) {
                echo " with-extra-top-space ";
            }
            // line 24
            echo "    \">
      ";
            // line 25
            if (($context["display_submitted"] ?? null)) {
                // line 26
                echo "        <div class=\"submitted-date\">
          <i class=\"fa fa-calendar hidden-lg hidden-md hidden-sm\"></i>
          <div class=\"month\">";
                // line 28
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "custom", "M"]), "html", null, true);
                echo "</div>
          <div class=\"day\">";
                // line 29
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "custom", "d"]), "html", null, true);
                echo "</div>
          <div class=\"year\">";
                // line 30
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "custom", "Y"]), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 33
            echo "      ";
            if ($this->getAttribute(($context["node"] ?? null), "comment", [])) {
                // line 34
                echo "        <div class=\"comments-count\">
          <i class=\"fa fa-comment\"></i>
          <div class=\"comment-counter\">";
                // line 36
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null)), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 39
            echo "      ";
            if (((($context["view_mode"] ?? null) == "full") && ($this->getAttribute(($context["mt_setting"] ?? null), "reading_time", []) || $this->getAttribute(($context["mt_setting"] ?? null), "post_progress", [])))) {
                // line 40
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("startupgrowth_lite/node-side-affix"), "html", null, true);
                echo "
        <div id=\"affix\">
          ";
                // line 42
                if ($this->getAttribute(($context["mt_setting"] ?? null), "reading_time", [])) {
                    // line 43
                    echo "            <div class=\"reading-time\">
              <div>";
                    // line 44
                    echo t("Time to read", array());
                    echo "</div>
              ";
                    // line 45
                    if ((($context["minutes"] ?? null) < 1)) {
                        // line 46
                        echo "                <span>";
                        echo t("less than <br class=\"hidden-xs\"> 1 minute", array());
                        echo "</span>
              ";
                    } elseif ((                    // line 47
($context["minutes"] ?? null) < 2)) {
                        // line 48
                        echo "                <span>";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["minutes"] ?? null)), "html", null, true);
                        echo " ";
                        echo t("minute", array());
                        echo "</span>
              ";
                    } else {
                        // line 50
                        echo "                <span>";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["minutes"] ?? null)), "html", null, true);
                        echo " ";
                        echo t("minutes", array());
                        echo "</span>
              ";
                    }
                    // line 52
                    echo "            </div>
          ";
                }
                // line 54
                echo "          ";
                if ($this->getAttribute(($context["mt_setting"] ?? null), "post_progress", [])) {
                    // line 55
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("startupgrowth_lite/post-progress"), "html", null, true);
                    echo "
            <div class=\"post-progress\">
              ";
                    // line 57
                    echo t("Read so far", array());
                    // line 58
                    echo "              <span class=\"post-progress-value\"></span>
              <div class=\"post-progressbar\"></div>
            </div>
          ";
                }
                // line 62
                echo "        </div>
      ";
            }
            // line 64
            echo "    </div>
  ";
        }
    }

    // line 67
    public function block_content($context, array $blocks = [])
    {
        // line 68
        echo "  <div class=\"node--main-content\">
    ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "comment"), "html", null, true);
        echo "
  </div>
  ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/startupgrowth_lite/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 71,  225 => 69,  222 => 68,  219 => 67,  213 => 64,  209 => 62,  203 => 58,  201 => 57,  195 => 55,  192 => 54,  188 => 52,  180 => 50,  172 => 48,  170 => 47,  165 => 46,  163 => 45,  159 => 44,  156 => 43,  154 => 42,  148 => 40,  145 => 39,  139 => 36,  135 => 34,  132 => 33,  126 => 30,  122 => 29,  118 => 28,  114 => 26,  112 => 25,  109 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  88 => 16,  85 => 15,  83 => 14,  79 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  22 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/startupgrowth_lite/templates/node--article.html.twig", "/var/www/html/Drupal/themes/startupgrowth_lite/templates/node--article.html.twig");
    }
}
