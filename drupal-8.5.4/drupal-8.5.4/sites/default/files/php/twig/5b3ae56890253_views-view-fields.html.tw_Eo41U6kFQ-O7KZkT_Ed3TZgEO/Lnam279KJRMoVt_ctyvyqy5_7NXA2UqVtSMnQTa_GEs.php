<?php

/* themes/custom/bootstrap_sass/bootstrap/templates/views-view-fields.html.twig */
class __TwigTemplate_c738229cde863ac59f5d2abc4f41a3b27b5fae75e1633dd03485edab1817b77d extends Twig_Template
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
        $tags = array("for" => 34, "if" => 35, "set" => 36);
        $filters = array("split" => 36);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if', 'set'),
                array('split'),
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

        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 35
            if (($this->getAttribute($this->getAttribute($context["field"], "handler", array()), "field", array()) == "uid")) {
                // line 36
                echo "    ";
                $context["userList"] = twig_split_filter($this->env, $this->getAttribute($context["field"], "content", array()), "user/");
                // line 37
                echo "    ";
                $context["userId"] = twig_split_filter($this->env, $this->getAttribute(($context["userList"] ?? null), 1, array(), "array"), "\"");
                // line 38
                echo "    
    ";
                // line 39
                if (($this->getAttribute(($context["userId"] ?? null), 0, array(), "array") == $this->getAttribute($this->getAttribute(($context["user"] ?? null), "account", array()), "id", array()))) {
                    // line 40
                    echo "      <div class=\"myUpdate\">
        <button class=\"edit\"><a href=\"node/";
                    // line 41
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "row", array()), "nid", array()), "html", null, true));
                    echo "/edit\">edit</a></button>
        <button class=\"delete\"><a href=\"node/";
                    // line 42
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "row", array()), "nid", array()), "html", null, true));
                    echo "/delete\">delete</a></button>
      </div>
    ";
                }
                // line 45
                echo "  ";
            }
            // line 46
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "separator", array()), "html", null, true));
            // line 47
            if ($this->getAttribute($context["field"], "wrapper_element", array())) {
                // line 48
                echo "<";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_element", array()), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_attributes", array()), "html", null, true));
                echo ">";
            }
            // line 50
            if ($this->getAttribute($context["field"], "label", array())) {
                // line 51
                if ($this->getAttribute($context["field"], "label_element", array())) {
                    // line 52
                    echo "<";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_element", array()), "html", null, true));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_suffix", array()), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 54
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_suffix", array()), "html", null, true));
                }
            }
            // line 57
            if ($this->getAttribute($context["field"], "element_type", array())) {
                // line 58
                echo "<";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_type", array()), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_attributes", array()), "html", null, true));
                echo ">
      ";
                // line 59
                if (($this->getAttribute($context["field"], "class", array()) == "link-flag")) {
                    // line 60
                    echo "          ";
                    if (($context["logged_in"] ?? null)) {
                        // line 61
                        echo "            ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true));
                        echo "
          ";
                    } else {
                        // line 63
                        echo "            <div class=\"flag-bookmark\">
              <a";
                        // line 64
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                        echo " href=\"user/login\">
                <img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/bookmart.png\" class=\"bbs-icon like-icon\">
              </a></div>
          ";
                    }
                    // line 68
                    echo "        ";
                } elseif (($this->getAttribute($context["field"], "class", array()) == "link-flag-1")) {
                    // line 69
                    echo "          ";
                    if (($context["logged_in"] ?? null)) {
                        // line 70
                        echo "            ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true));
                        echo "
          ";
                    } else {
                        // line 72
                        echo "            <div class=\"flag-like\">
              <a";
                        // line 73
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                        echo " href=\"user/login\">
                <img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/like.png\" class=\"bbs-icon collect-icon collect-no-user\">
              </a></div>
          ";
                    }
                    // line 77
                    echo "        ";
                } else {
                    // line 78
                    echo "          ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true));
                    echo "
        ";
                }
                // line 80
                echo "    </";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_type", array()), "html", null, true));
                echo ">";
            } else {
                // line 82
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true));
            }
            // line 84
            if ($this->getAttribute($context["field"], "wrapper_element", array())) {
                // line 85
                echo "</";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_element", array()), "html", null, true));
                echo ">";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/custom/bootstrap_sass/bootstrap/templates/views-view-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 85,  188 => 84,  185 => 82,  180 => 80,  174 => 78,  171 => 77,  164 => 73,  161 => 72,  155 => 70,  152 => 69,  149 => 68,  142 => 64,  139 => 63,  133 => 61,  130 => 60,  128 => 59,  122 => 58,  120 => 57,  115 => 54,  104 => 52,  102 => 51,  100 => 50,  94 => 48,  92 => 47,  89 => 46,  86 => 45,  80 => 42,  76 => 41,  73 => 40,  71 => 39,  68 => 38,  65 => 37,  62 => 36,  60 => 35,  43 => 34,);
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
 * Default view template to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 *
 * @ingroup themeable
 */
#}
{% for field in fields -%}
  {% if field.handler.field == 'uid' %}
    {% set userList = field.content | split('user/') %}
    {% set userId = userList[1] | split('\"') %}
    
    {% if userId[0] == user.account.id %}
      <div class=\"myUpdate\">
        <button class=\"edit\"><a href=\"node/{{loop.parent.row.nid}}/edit\">edit</a></button>
        <button class=\"delete\"><a href=\"node/{{loop.parent.row.nid}}/delete\">delete</a></button>
      </div>
    {% endif %}
  {% endif %}
  {{ field.separator }}
  {%- if field.wrapper_element -%}
    <{{ field.wrapper_element }}{{ field.wrapper_attributes }}>
  {%- endif %}
  {%- if field.label -%}
    {%- if field.label_element -%}
      <{{ field.label_element }}{{ field.label_attributes }}>{{ field.label }}{{ field.label_suffix }}</{{ field.label_element }}>
    {%- else -%}
      {{ field.label }}{{ field.label_suffix }}
    {%- endif %}
  {%- endif %}
  {%- if field.element_type -%}
    <{{ field.element_type }}{{ field.element_attributes }}>
      {% if field.class == 'link-flag' %}
          {% if logged_in %}
            {{ field.content }}
          {% else %}
            <div class=\"flag-bookmark\">
              <a{{ attributes }} href=\"user/login\">
                <img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/bookmart.png\" class=\"bbs-icon like-icon\">
              </a></div>
          {% endif %}
        {% elseif field.class == 'link-flag-1' %}
          {% if logged_in %}
            {{ field.content }}
          {% else %}
            <div class=\"flag-like\">
              <a{{ attributes }} href=\"user/login\">
                <img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/like.png\" class=\"bbs-icon collect-icon collect-no-user\">
              </a></div>
          {% endif %}
        {% else %}
          {{ field.content }}
        {% endif %}
    </{{ field.element_type }}>
  {%- else -%}
    {{ field.content }}
  {%- endif %}
  {%- if field.wrapper_element -%}
    </{{ field.wrapper_element }}>
  {%- endif %}
{%- endfor %}
", "themes/custom/bootstrap_sass/bootstrap/templates/views-view-fields.html.twig", "D:\\programUser\\drupal-8.5.4\\drupal-8.5.4\\themes\\custom\\bootstrap_sass\\bootstrap\\templates\\views-view-fields.html.twig");
    }
}
