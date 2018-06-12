<?php

/* themes/belgrade/templates/system/region--footer.html.twig */
class __TwigTemplate_e490110f398f9ff79dd9dce77f4cf0d4876f6a9b2e803e837d50001dcea96974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 17
        $this->parent = $this->loadTemplate("region.html.twig", "themes/belgrade/templates/system/region--footer.html.twig", 17);
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
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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

    // line 19
    public function block_region_content($context, array $blocks = array())
    {
        // line 20
        echo "  <div class=\"footer--contents container\">
    ";
        // line 21
        $this->displayParentBlock("region_content", $context, $blocks);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/belgrade/templates/system/region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  55 => 20,  52 => 19,  11 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/belgrade/templates/system/region--footer.html.twig", "C:\\wamp64\\www\\drupalProyecto\\themes\\belgrade\\templates\\system\\region--footer.html.twig");
    }
}
