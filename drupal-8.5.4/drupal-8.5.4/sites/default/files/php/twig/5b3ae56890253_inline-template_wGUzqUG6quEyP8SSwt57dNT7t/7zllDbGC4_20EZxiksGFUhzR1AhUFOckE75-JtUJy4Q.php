<?php

/* {# inline_template_start #}{% spaceless %}
{% autoescape false %}
  {{ link_flag|replace( {'Bookmark this': '<img src="/modules/flag-8.x-4.0-alpha3/flag/images/bookmart.png" />',
'Remove bookmark' : '<img src="/modules/flag-8.x-4.0-alpha3/flag/images/GiveUpBookMart.png" />'}
 ) }}
 {% endautoescape %}
{% endspaceless %} */
class __TwigTemplate_445746e8b8ad692583d616107a67ec19d45c63e6b078ef6fb9b51bfda6075630 extends Twig_Template
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
        $tags = array("spaceless" => 1, "autoescape" => 2);
        $filters = array("replace" => 3);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'autoescape'),
                array('replace'),
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
        ob_start();
        // line 3
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_replace_filter(($context["link_flag"] ?? null), array("Bookmark this" => "<img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/bookmart.png\" />", "Remove bookmark" => "<img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/GiveUpBookMart.png\" />"))));
        // line 5
        echo "
 ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% spaceless %}
{% autoescape false %}
  {{ link_flag|replace( {'Bookmark this': '<img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/bookmart.png\" />',
'Remove bookmark' : '<img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/GiveUpBookMart.png\" />'}
 ) }}
 {% endautoescape %}
{% endspaceless %}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  51 => 3,  49 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}{% spaceless %}
{% autoescape false %}
  {{ link_flag|replace( {'Bookmark this': '<img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/bookmart.png\" />',
'Remove bookmark' : '<img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/GiveUpBookMart.png\" />'}
 ) }}
 {% endautoescape %}
{% endspaceless %}", "{# inline_template_start #}{% spaceless %}
{% autoescape false %}
  {{ link_flag|replace( {'Bookmark this': '<img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/bookmart.png\" />',
'Remove bookmark' : '<img src=\"/modules/flag-8.x-4.0-alpha3/flag/images/GiveUpBookMart.png\" />'}
 ) }}
 {% endautoescape %}
{% endspaceless %}", "");
    }
}
