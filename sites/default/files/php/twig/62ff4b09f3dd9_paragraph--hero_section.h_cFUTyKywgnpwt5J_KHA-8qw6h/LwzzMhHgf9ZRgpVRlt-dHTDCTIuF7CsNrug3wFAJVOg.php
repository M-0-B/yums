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

/* themes/custom/yummy/paragraph/templates/paragraph--hero_section.html.twig */
class __TwigTemplate_27101ac35dbcd6829d05a4fcdb23ab62f5cc439b8666927dcd33f3522994a05d extends \Twig\Template
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
        // line 1
        echo "<!-- ======= Hero Section ======= -->
<section id=\"hero\" class=\"hero d-flex align-items-center section-bg\">
  <div class=\"container\">
    <div class=\"row justify-content-between gy-5\">
      <div
        class=\"col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start\">
        <h2 data-aos=\"fade-up\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h2>
        <p data-aos=\"fade-up\" data-aos-delay=\"100\">
          ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
        </p>
        <div class=\"d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <a href=\"#book-a-table\" class=\"btn-book-a-table\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_links_", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</a>
          <a class=\"glightbox btn-watch-video d-flex align-items-center\"><i class=\"bi bi-play-circle\"></i><span>
</span>
          </a>
        </div>
      </div>
      <div class=\"col-lg-5 order-1 order-lg-2 text-center text-lg-start\">
        ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</section><!-- End Hero Section -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/yummy/paragraph/templates/paragraph--hero_section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  58 => 12,  52 => 9,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/yummy/paragraph/templates/paragraph--hero_section.html.twig", "C:\\xampp\\htdocs\\yummy\\themes\\custom\\yummy\\paragraph\\templates\\paragraph--hero_section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7);
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
