<?php

/* themes/custom/bootstrap_sass/bootstrap/templates/videojs.html.twig */
class __TwigTemplate_1fe32b50b874cfdbbd8285e1abd063770e6fb590ff4c99e0f074086c810db916 extends Twig_Template
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
        $tags = array("for" => 16, "if" => 17);
        $filters = array("slice" => 17);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array('slice'),
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

        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "  ";
            if ((twig_slice($this->env, $this->getAttribute($context["user"], "uri", array()), ($this->getAttribute($this->getAttribute($context["user"], "uri", array()), "length", array()) - 3), $this->getAttribute($this->getAttribute($context["user"], "uri", array()), "length", array())) == "mp4")) {
                // line 18
                echo "    <video data-setup=\"{}\" class=\"video-js vjs-default-skin\" preload=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["player_attributes"] ?? null), "preload", array()), "html", null, true));
                echo "\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "controls", array())) ? ("controls") : (""))));
                echo " style=\"width:";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["player_attributes"] ?? null), "width", array()), "html", null, true));
                echo "px;height:";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["player_attributes"] ?? null), "height", array()), "html", null, true));
                echo "px;\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "autoplay", array())) ? ("autoplay") : (""))));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "loop", array())) ? ("loop") : (""))));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "muted", array())) ? ("muted") : (""))));
                echo ">
      <source src=\"";
                // line 19
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["user"], "html", null, true));
                echo "\"/>
    </video>";
            } else {
                // line 22
                echo "<img  width=\"400\" height=\"200\"  typeof=\"foaf:Image\" class=\"img-responsive\" id=\"img-responsive\" src= \"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["user"], "html", null, true));
                echo "\" />";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/custom/bootstrap_sass/bootstrap/templates/videojs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  67 => 19,  50 => 18,  47 => 17,  43 => 16,);
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
 * Default theme implementation to display a formatted video field.
 *
 * Available variables:
 * - items: A collection of videos.
 * - player_attributes: Player options including the following:
 *   - width: The width of the video (if known).
 *   - height: The height of the video (if known).
 *   - autoplay: Autoplay on or off
 *
 * @ingroup themeable
 */
#}
{% for user in items %}
  {% if user.uri[user.uri.length-3:user.uri.length] == 'mp4' %}
    <video data-setup=\"{}\" class=\"video-js vjs-default-skin\" preload=\"{{ player_attributes.preload }}\" {{ player_attributes.controls ? 'controls' : '' }} style=\"width:{{ player_attributes.width }}px;height:{{ player_attributes.height }}px;\" {{ player_attributes.autoplay ? 'autoplay' : '' }} {{ player_attributes.loop ? 'loop' : '' }} {{ player_attributes.muted ? 'muted' : '' }}>
      <source src=\"{{ user }}\"/>
    </video>
  {%- else -%}
    <img  width=\"400\" height=\"200\"  typeof=\"foaf:Image\" class=\"img-responsive\" id=\"img-responsive\" src= \"{{ user }}\" />
  {%- endif %}
{% endfor %}", "themes/custom/bootstrap_sass/bootstrap/templates/videojs.html.twig", "D:\\programUser\\drupal-8.5.4\\drupal-8.5.4\\themes\\custom\\bootstrap_sass\\bootstrap\\templates\\videojs.html.twig");
    }
}
