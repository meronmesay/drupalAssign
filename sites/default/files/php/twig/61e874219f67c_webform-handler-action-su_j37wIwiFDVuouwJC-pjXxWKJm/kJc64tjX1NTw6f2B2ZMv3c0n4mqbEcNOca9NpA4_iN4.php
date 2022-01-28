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

/* modules/webform/templates/webform-handler-action-summary.html.twig */
class __TwigTemplate_23da1e1d15c3c6e9faf3cf67383e0cc7f91c7a9d8962dd81ae4e785cbd7c50b4 extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "debug", [], "any", false, false, true, 13)) {
            echo "<strong class=\"color-error\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Debugging is enabled"));
            echo "</strong><br />";
        }
        // line 14
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sticky", [], "any", false, false, true, 14))) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Status:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sticky", [], "any", false, false, true, 14)) ? (t("Flag/Star")) : (t("Unflag/Unstar"))));
            echo "<br />";
        }
        // line 15
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "locked", [], "any", false, false, true, 15))) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Lock:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "locked", [], "any", false, false, true, 15)) ? (t("Locked")) : (t("Unlocked"))));
            echo "<br />";
        }
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "notes", [], "any", false, false, true, 16)) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Notes:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "notes", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "<br />";
        }
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "message", [], "any", false, false, true, 17)) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Message:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "message", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo " (";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "message_type", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo ")<br />";
        }
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "data", [], "any", false, false, true, 18)) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Data (keys):"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "data", [], "any", false, false, true, 18), 18, $this->source), "; "), "html", null, true);
            echo "<br />";
        }
        // line 19
        echo "<b>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Execute when:"));
        echo "</b> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "states", [], "any", false, false, true, 19), 19, $this->source), "; "), "html", null, true);
        echo "<br />

";
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-handler-action-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  79 => 18,  69 => 17,  61 => 16,  53 => 15,  45 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/webform/templates/webform-handler-action-summary.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\webform\\templates\\webform-handler-action-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("t" => 13, "escape" => 16, "join" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'join'],
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
}
