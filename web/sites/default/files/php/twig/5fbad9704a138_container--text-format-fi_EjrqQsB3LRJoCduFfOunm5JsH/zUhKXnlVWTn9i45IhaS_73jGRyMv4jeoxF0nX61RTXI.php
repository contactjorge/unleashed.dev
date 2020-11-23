<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/seven/templates/text_format/container--text-format-filter-help.html.twig */
class __TwigTemplate_1150f0b07c95b5a2886dcbd48745516052b03f9df7bdff643a70a5a96218b9ae extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 16);
        $filters = array("escape" => 22);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["classes"] = [0 => ((        // line 17
($context["has_parent"] ?? null)) ? ("js-form-wrapper") : ("")), 1 => ((        // line 18
($context["has_parent"] ?? null)) ? ("form-wrapper") : ("")), 2 => "filter-help"];
        // line 22
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 22, $this->source), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/text_format/container--text-format-filter-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  64 => 18,  63 => 17,  62 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme implementation for text filter help.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - children: The rendered child elements of the container.
 *
 * @see template_preprocess_container()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    has_parent ? 'js-form-wrapper',
    has_parent ? 'form-wrapper',
    'filter-help',
  ]
%}
<div{{ attributes.addClass(classes) }}>{{ children }}</div>
", "core/themes/seven/templates/text_format/container--text-format-filter-help.html.twig", "/var/www/html/web/core/themes/seven/templates/text_format/container--text-format-filter-help.html.twig");
    }
}
