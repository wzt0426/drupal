<?php

/* themes/custom/bootstrap_sass/bootstrap/templates/menu/menu--account.html.twig */
class __TwigTemplate_28ca2f93dea034f1f68f3d7acfaec30fb551068c06a25734f78e896452484dec extends Twig_Template
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
        $tags = array("set" => 62, "macro" => 18, "if" => 19, "for" => 30);
        $filters = array("clean_class" => 60);
        $functions = array("link" => 43);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'macro', 'if', 'for'),
                array('clean_class'),
                array('link')
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

        // line 54
        echo "
";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this, "menu_links", array(0 => ($context["user"] ?? null), 1 => ($context["items"] ?? null), 2 => ($context["attributes"] ?? null), 3 => 0, 4 => ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : (array(0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), 2 => "nav")))), "method")));
        echo "
";
        // line 62
        $context["classes"] = array(0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 64
($context["menu_name"] ?? null))), 2 => "nav", 3 => "navbar-nav", 4 => "navbar-right");
    }

    // line 18
    public function getmenu_links($__user__ = null, $__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 20
                echo "  <div class=\"dropdown\">
    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
      ";
                // line 22
                if ($this->getAttribute($this->getAttribute(($context["user"] ?? null), "account", array()), "name", array())) {
                    // line 23
                    echo "        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "account", array()), "name", array()), "html", null, true));
                    echo "
      ";
                } else {
                    // line 25
                    echo "        Log in
      ";
                }
                // line 27
                echo "      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 31
                    echo "      ";
                    // line 32
                    $context["item_classes"] = array(0 => ((($this->getAttribute(                    // line 33
$context["item"], "is_expanded", array()) && $this->getAttribute($context["item"], "below", array()))) ? ("expanded") : ("")), 1 => (((($this->getAttribute(                    // line 34
$context["item"], "is_expanded", array()) && (($context["menu_level"] ?? null) == 0)) && $this->getAttribute($context["item"], "below", array()))) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                    // line 35
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 38
                    echo "      ";
                    if ((((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", array())) && $this->getAttribute($context["item"], "below", array()))) {
                        // line 39
                        echo "        <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo ">
        <a href=\"";
                        // line 40
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo "  <span class=\"caret\"></span></a>
      ";
                    } else {
                        // line 42
                        echo "        <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo "> 
        ";
                        // line 43
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
      ";
                    }
                    // line 45
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 46
                        echo "        ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this, "menu_links", array(0 => $this->getAttribute($context["item"], "below", array()), 1 => $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => ($context["classes"] ?? null)), "method"), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["classes"] ?? null)), "method")));
                        echo "
      ";
                    }
                    // line 48
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "    </ul>
  </div>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/bootstrap_sass/bootstrap/templates/menu/menu--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  140 => 48,  134 => 46,  131 => 45,  126 => 43,  121 => 42,  114 => 40,  109 => 39,  106 => 38,  104 => 35,  103 => 34,  102 => 33,  101 => 32,  99 => 31,  95 => 30,  90 => 27,  86 => 25,  80 => 23,  78 => 22,  74 => 20,  71 => 19,  55 => 18,  51 => 64,  50 => 62,  46 => 60,  43 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 */
#}
{% macro menu_links(user, items, attributes, menu_level, classes) %}
  {% if items %}
  <div class=\"dropdown\">
    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
      {% if user.account.name %}
        {{user.account.name}}
      {% else %}
        Log in
      {% endif %}
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
    {% for item in items %}
      {%
        set item_classes = [
          item.is_expanded and item.below ? 'expanded',
          item.is_expanded and menu_level == 0 and item.below ? 'dropdown',
          item.in_active_trail ? 'active',
        ]
      %}
      {% if menu_level == 0 and item.is_expanded and item.below %}
        <li{{ item.attributes.addClass(item_classes) }}>
        <a href=\"{{ item.url }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ item.title }}  <span class=\"caret\"></span></a>
      {% else %}
        <li{{ item.attributes.addClass(item_classes) }}> 
        {{ link(item.title, item.url) }}
      {% endif %}
      {% if item.below %}
        {{ _self.menu_links(item.below, attributes.removeClass(classes), menu_level + 1, classes) }}
      {% endif %}
      </li>
    {% endfor %}
    </ul>
  </div>
  {% endif %}
{% endmacro %}

{#
  Invoke the custom macro defined above. If classes were provided, use them.
  This allows the template to be extended without having to also duplicate the
  code above. @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ _self.menu_links(user, items, attributes, 0, classes ? classes : ['menu', 'menu--' ~ menu_name|clean_class, 'nav']) }}
{%
  set classes = [
    'menu',
    'menu--' ~ menu_name|clean_class,
    'nav',
    'navbar-nav',
    'navbar-right',
  ]
%}
", "themes/custom/bootstrap_sass/bootstrap/templates/menu/menu--account.html.twig", "D:\\programUser\\drupal-8.5.4\\drupal-8.5.4\\themes\\custom\\bootstrap_sass\\bootstrap\\templates\\menu\\menu--account.html.twig");
    }
}
