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

/* core/modules/layout_builder/layouts/threecol_section/layout--threecol-section.html.twig */
class __TwigTemplate_ecfca8eac7787138fef1962d929fa212fb7bd8cda647e159faeeff8339b92afc extends \Twig\Template
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
        if (($context["content"] ?? null)) {
            // line 14
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 14), 14, $this->source), "html", null, true);
            echo ">

    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 16)) {
                // line 17
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first", [], "any", false, false, true, 17), "addClass", [0 => "layout__region", 1 => "layout__region--first"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
                echo ">
        ";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 21
            echo "
    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 22)) {
                // line 23
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second", [], "any", false, false, true, 23), "addClass", [0 => "layout__region", 1 => "layout__region--second"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                echo ">
        ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 28)) {
                // line 29
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "third", [], "any", false, false, true, 29), "addClass", [0 => "layout__region", 1 => "layout__region--third"], "method", false, false, true, 29), 29, $this->source), "html", null, true);
                echo ">
        ";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 33
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/layout_builder/layouts/threecol_section/layout--threecol-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  86 => 30,  81 => 29,  79 => 28,  76 => 27,  70 => 24,  65 => 23,  63 => 22,  60 => 21,  54 => 18,  49 => 17,  47 => 16,  41 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/layout_builder/layouts/threecol_section/layout--threecol-section.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\modules\\layout_builder\\layouts\\threecol_section\\layout--threecol-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
}