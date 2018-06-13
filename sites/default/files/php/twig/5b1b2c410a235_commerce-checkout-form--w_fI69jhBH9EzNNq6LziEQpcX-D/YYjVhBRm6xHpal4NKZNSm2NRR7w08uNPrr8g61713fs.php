<?php

/* themes/commerce_bootstrap/templates/commerce/commerce-checkout-form--with-sidebar.html.twig */
class __TwigTemplate_c5ab1b3e7653cdeadbcc32eff85bf26346a95578cc0fa7d89a332af749e0fa59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("trans" => 18);
        $filters = array("without" => 15);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
                array('without'),
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

        // line 12
        echo "<div class=\"layout-checkout-form container-fluid clearfix\">
  <div class=\"row\">
    <div class=\"layout-region layout-region-checkout-main col-xs-12 col-md-8\">
      ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["form"] ?? null), "sidebar", "actions"), "html", null, true));
        echo "
    </div>
    <div class=\"layout-region layout-region-checkout-secondary col-xs-12 col-md-4\">
      <h3>";
        // line 18
        echo t("Order Summary", array());
        echo "</h3>
      ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "sidebar", array()), "html", null, true));
        echo "
    </div>
  </div>
  <div class=\"row\">
    <div class=\"layout-region layout-region-checkout-footer col-xs-12\">
      ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "actions", array()), "html", null, true));
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/commerce_bootstrap/templates/commerce/commerce-checkout-form--with-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  58 => 19,  54 => 18,  48 => 15,  43 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/commerce_bootstrap/templates/commerce/commerce-checkout-form--with-sidebar.html.twig", "C:\\wamp64\\www\\drupalProyecto\\themes\\commerce_bootstrap\\templates\\commerce\\commerce-checkout-form--with-sidebar.html.twig");
    }
}
