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

/* themes/yg_agency/templates/page.html.twig */
class __TwigTemplate_9ebd1b4c2da5ca6df66aca040470f311e69076ea8f58723bcb52c800c68b7890 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "fluid_container", [], "any", false, false, true, 59)) ? ("container-fluid") : (""));
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 60) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 60))) {
            // line 61
            echo "  
  ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 62)) {
                // line 63
                echo "     <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
      <div class=\"container\">
        ";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fa fa-bars\"></i>
        </button>
        ";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "
      </div>
    </nav>
      ";
            }
            // line 73
            echo "  
";
        }
        // line 75
        echo "
";
        // line 77
        $this->displayBlock('main', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 158)) {
            // line 159
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 193
        echo "

";
    }

    // line 77
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "  <div role=\"main\" class=\"js-quickedit-main-content\">
    <div class=\"\">


      ";
        // line 83
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 83)) {
            // line 84
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 89
            echo "      ";
        }
        // line 90
        echo "
      ";
        // line 92
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 92)) {
            // line 93
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 98
            echo "      ";
        }
        // line 99
        echo "
      ";
        // line 101
        echo "      ";
        // line 102
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 103
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 103) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 103))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 104
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 104) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 104)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 105
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 105) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 105)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 106
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 106)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 106)))) ? ("") : (""))];
        // line 109
        echo "      <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 109), 109, $this->source), "html", null, true);
        echo ">

        ";
        // line 112
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 112)) {
            // line 113
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 116
            echo "        ";
        }
        // line 117
        echo "
        ";
        // line 119
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 120
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 123
            echo "        ";
        }
        // line 124
        echo "
        ";
        // line 126
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 127
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 130
            echo "        ";
        }
        // line 131
        echo "
        ";
        // line 133
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 133)) {
            // line 134
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 137
            echo "        ";
        }
        // line 138
        echo "
        ";
        // line 140
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 144
        echo "      </div>

      ";
        // line 147
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 147)) {
            // line 148
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 153
            echo "      ";
        }
        // line 154
        echo "   </div>
   </div>
";
    }

    // line 84
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            
          </div>
        ";
    }

    // line 93
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 113
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 120
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 121, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 127
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 128, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 134
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 140
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "          <a id=\"main-content\"></a>
          ";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 148
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 159
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "  <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            ";
        // line 164
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
        echo "
          </div>
          <div class=\"col-md-4\">
            <ul class=\"list-inline social-buttons\">
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 169
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 169, $this->source), "html", null, true);
        echo "\">
                  <i class=\"fa fa-twitter\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 174, $this->source), "html", null, true);
        echo "\">
                  <i class=\"fa fa-facebook\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 179, $this->source), "html", null, true);
        echo "\">
                  <i class=\"fa fa-linkedin\"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class=\"col-md-4\">
            ";
        // line 186
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_1", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/yg_agency/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 186,  349 => 179,  341 => 174,  333 => 169,  325 => 164,  319 => 160,  315 => 159,  308 => 150,  305 => 149,  301 => 148,  295 => 142,  292 => 141,  288 => 140,  281 => 135,  277 => 134,  270 => 128,  266 => 127,  259 => 121,  255 => 120,  248 => 114,  244 => 113,  237 => 95,  234 => 94,  230 => 93,  223 => 85,  219 => 84,  213 => 154,  210 => 153,  207 => 148,  204 => 147,  200 => 144,  197 => 140,  194 => 138,  191 => 137,  188 => 134,  185 => 133,  182 => 131,  179 => 130,  176 => 127,  173 => 126,  170 => 124,  167 => 123,  164 => 120,  161 => 119,  158 => 117,  155 => 116,  152 => 113,  149 => 112,  143 => 109,  141 => 106,  140 => 105,  139 => 104,  138 => 103,  137 => 102,  135 => 101,  132 => 99,  129 => 98,  126 => 93,  123 => 92,  120 => 90,  117 => 89,  114 => 84,  111 => 83,  105 => 78,  101 => 77,  95 => 193,  91 => 159,  89 => 158,  86 => 157,  84 => 77,  81 => 75,  77 => 73,  70 => 70,  62 => 65,  58 => 63,  56 => 62,  53 => 61,  51 => 60,  49 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_agency/templates/page.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\yg_agency\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 59, "if" => 60, "block" => 77);
        static $filters = array("escape" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
