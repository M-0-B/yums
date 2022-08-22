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

/* themes/custom/yummy/templates/layout/page--front.html.twig */
class __TwigTemplate_e1fd0bf502ab9890a8c1fc5a6e72f06c189b11bf673f8c5a7ac0b8685a0090d2 extends \Twig\Template
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
        // line 45
        echo "<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
  <div class=\"container d-flex align-items-center justify-content-between\">
    <div class=\"logo d-flex align-items-center me-auto me-lg-0\">
        ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "<span>.</span>
    </div>
    <nav id=\"navbar\" class=\"navbar\">
        ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
    </nav><!-- .navbar -->
\t<button class=\"btn-book-a-table\">
      ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
\t</button>
    <i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
    <i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>
  </div>
</header><!-- End Header -->
<!-- Hero Section -->
<section class=\"service_sec\">
\t<div class=\"container\">
\t\t";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/yummy/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 63,  56 => 54,  50 => 51,  44 => 48,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/yummy/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\yummy\\themes\\custom\\yummy\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
