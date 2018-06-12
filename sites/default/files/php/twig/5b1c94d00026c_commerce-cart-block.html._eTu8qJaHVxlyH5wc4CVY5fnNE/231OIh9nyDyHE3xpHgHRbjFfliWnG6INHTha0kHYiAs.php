<?php

/* themes/belgrade/templates/commerce/cart/commerce-cart-block.html.twig */
class __TwigTemplate_66288f643a72b2c2b7a90f45f9821caf53af6a9ce27c472716bfa8d1ddd82e65 extends Twig_Template
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
        $tags = array("trans" => 8, "if" => 11);
        $filters = array("t" => 14);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans', 'if'),
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

        // line 1
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "navbar-right"), "method"), "html", null, true));
        echo ">
  <div class=\"cart-block--summary\">
    <a class=\"cart-block--link__expand\" href=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\">
      <span class=\"cart-block--summary__icon\">
        <i class=\"glyph glyph-cart\"></i>
        <span class=\"sr-only\"></span>
      </span>
      <span class=\"cart-block--summary__count\">";
        // line 8
        echo t("Cart", array());
        echo " / ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["count_text"] ?? null), "html", null, true));
        echo "</span>
    </a>
  </div>
  ";
        // line 11
        if (($context["content"] ?? null)) {
            // line 12
            echo "  <div class=\"cart-block--contents\">
    <button type=\"button\" class=\"close-btn\">
      <span class=\"sr-only\">";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close cart contents")));
            echo "</span>
    </button>
    <div class=\"cart-block--contents__inner\">
      <div class=\"cart-block--contents__items\">
        ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
      </div>
      <div class=\"cart-block--contents__links\">
        ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["links"] ?? null), "html", null, true));
            echo "
      </div>
    </div>
  </div>
  ";
        }
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/belgrade/templates/commerce/cart/commerce-cart-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 26,  84 => 21,  78 => 18,  71 => 14,  67 => 12,  65 => 11,  57 => 8,  49 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/belgrade/templates/commerce/cart/commerce-cart-block.html.twig", "C:\\wamp64\\www\\drupalProyecto\\themes\\belgrade\\templates\\commerce\\cart\\commerce-cart-block.html.twig");
    }
}
