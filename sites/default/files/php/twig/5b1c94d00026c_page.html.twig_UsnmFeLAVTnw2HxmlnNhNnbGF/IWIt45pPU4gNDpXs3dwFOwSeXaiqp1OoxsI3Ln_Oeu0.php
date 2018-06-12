<?php

/* themes/belgrade/templates/system/page.html.twig */
class __TwigTemplate_e373305f26cb55cd07e980c77d2a4bfa891022ab074157a5daf424a4a589bf01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 67, "t" => 82);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "top_navigation", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 97
        echo "
";
        // line 99
        $this->displayBlock('main', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 189
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 67
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 70
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 71
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 72
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 74
        echo "      <div class=\"navbar-header\">
        ";
        // line 76
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
            // line 77
            echo "          <button type=\"button\" class=\"toggle-btn\"  data-toggle=\"collapse\" data-target=\"#off-canvas\">
              <div class=\"toggle-btn--bars\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </div>
              <span class=\"toggle-btn--name hidden-xs\">";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Menu")));
            echo "</span>
          </button>
        ";
        }
        // line 85
        echo "      </div>

      ";
        // line 88
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "top_navigation", array())) {
            // line 89
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_navigation", array()), "html", null, true));
            echo "
      ";
        }
        // line 91
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 92
            echo "        </div>
      ";
        }
        // line 94
        echo "    </header>
  ";
    }

    // line 99
    public function block_main($context, array $blocks = array())
    {
        // line 100
        echo "  <div role=\"main\" class=\"main-container js-quickedit-main-content\">
      ";
        // line 102
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
            // line 103
            echo "        <div id=\"off-canvas\" class=\"side-flyout collapse left\">
          ";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 107
        echo "
      ";
        // line 109
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 110
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 113
            echo "      ";
        }
        // line 114
        echo "


    <div class=\"container\">
      ";
        // line 119
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 120
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 123
            echo "      ";
        }
        // line 124
        echo "
      ";
        // line 126
        echo "      ";
        if (($context["breadcrumb"] ?? null)) {
            // line 127
            echo "        ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 130
            echo "      ";
        }
        // line 131
        echo "
      <div class=\"row\">

        ";
        // line 135
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 136
            echo "          ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 141
            echo "        ";
        }
        // line 142
        echo "
        ";
        // line 144
        echo "        ";
        // line 145
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 146
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 147
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 148
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")));
        // line 151
        echo "
        <section";
        // line 152
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

          ";
        // line 155
        echo "          ";
        if (($context["action_links"] ?? null)) {
            // line 156
            echo "            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 159
            echo "          ";
        }
        // line 160
        echo "
          ";
        // line 162
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 163
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 166
            echo "          ";
        }
        // line 167
        echo "
          ";
        // line 169
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 173
        echo "        </section>

        ";
        // line 176
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 177
            echo "          ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 182
            echo "        ";
        }
        // line 183
        echo "      </div>
    </div>
  </div>
";
    }

    // line 110
    public function block_header($context, array $blocks = array())
    {
        // line 111
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
        ";
    }

    // line 120
    public function block_highlighted($context, array $blocks = array())
    {
        // line 121
        echo "          <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 127
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 128
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "
        ";
    }

    // line 136
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 137
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 138
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 156
    public function block_action_links($context, array $blocks = array())
    {
        // line 157
        echo "              <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
            ";
    }

    // line 163
    public function block_help($context, array $blocks = array())
    {
        // line 164
        echo "              ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
            ";
    }

    // line 169
    public function block_content($context, array $blocks = array())
    {
        // line 170
        echo "            <a id=\"main-content\"></a>
            ";
        // line 171
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
          ";
    }

    // line 177
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 178
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 189
    public function block_footer($context, array $blocks = array())
    {
        // line 190
        echo "    <footer class=\"footer\" role=\"contentinfo\">
      ";
        // line 191
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/belgrade/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 191,  371 => 190,  368 => 189,  361 => 179,  358 => 178,  355 => 177,  349 => 171,  346 => 170,  343 => 169,  336 => 164,  333 => 163,  326 => 157,  323 => 156,  316 => 138,  313 => 137,  310 => 136,  303 => 128,  300 => 127,  293 => 121,  290 => 120,  283 => 111,  280 => 110,  273 => 183,  270 => 182,  267 => 177,  264 => 176,  260 => 173,  257 => 169,  254 => 167,  251 => 166,  248 => 163,  245 => 162,  242 => 160,  239 => 159,  236 => 156,  233 => 155,  228 => 152,  225 => 151,  223 => 148,  222 => 147,  221 => 146,  220 => 145,  218 => 144,  215 => 142,  212 => 141,  209 => 136,  206 => 135,  201 => 131,  198 => 130,  195 => 127,  192 => 126,  189 => 124,  186 => 123,  183 => 120,  180 => 119,  174 => 114,  171 => 113,  168 => 110,  165 => 109,  162 => 107,  156 => 104,  153 => 103,  150 => 102,  147 => 100,  144 => 99,  139 => 94,  135 => 92,  132 => 91,  126 => 89,  123 => 88,  119 => 85,  113 => 82,  106 => 77,  103 => 76,  100 => 74,  94 => 72,  92 => 71,  87 => 70,  85 => 67,  84 => 66,  83 => 64,  81 => 63,  78 => 62,  72 => 189,  70 => 188,  67 => 187,  65 => 99,  62 => 97,  58 => 62,  56 => 61,  54 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/belgrade/templates/system/page.html.twig", "C:\\wamp64\\www\\drupalProyecto\\themes\\belgrade\\templates\\system\\page.html.twig");
    }
}
