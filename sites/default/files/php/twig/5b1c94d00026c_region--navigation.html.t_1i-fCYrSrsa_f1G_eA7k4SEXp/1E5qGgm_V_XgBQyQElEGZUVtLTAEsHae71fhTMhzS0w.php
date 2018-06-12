<?php

/* themes/belgrade/templates/system/region--navigation.html.twig */
class __TwigTemplate_ec94b9aa12781f987fdad2097042933874a3975940c9a543de72506f248e0f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("region.html.twig", "themes/belgrade/templates/system/region--navigation.html.twig", 1);
        $this->blocks = array(
            'region_content' => array($this, 'block_region_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "region.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array("t" => 5);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_region_content($context, array $blocks = array())
    {
        // line 4
        echo "    <button type=\"button\" class=\"close-btn\" data-toggle=\"collapse\" data-target=\"#off-canvas\" aria-expanded=\"false\">
      <span class=\"sr-only\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close navigation")));
        echo "</span>
    </button>
    ";
        // line 7
        $this->displayParentBlock("region_content", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/belgrade/templates/system/region--navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/belgrade/templates/system/region--navigation.html.twig", "C:\\wamp64\\www\\drupalProyecto\\themes\\belgrade\\templates\\system\\region--navigation.html.twig");
    }
}
