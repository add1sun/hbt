<?php

/* modules/ds/templates/ds-field-minimal.html.twig */
class __TwigTemplate_0be030634f77142fc3664eff02c4a961a8693283ad808deb054ca421e3b29d7f extends Twig_Template
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
        $tags = array("set" => 16, "if" => 22, "for" => 28);
        $filters = array("clean_class" => 18);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

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
        $context["classes"] = array(0 => "field", 1 => ("field-name-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 18
(isset($context["element"]) ? $context["element"] : null), "#field_name", array(), "array"))));
        // line 21
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 22
        if ( !(isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 23
            echo "    <div class=\"field-label-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "#label_display", array(), "array")), "html", null, true));
            echo "\">";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lb", array()) - (isset($context["col"]) ? $context["col"] : null))) {
                echo ":";
            }
            // line 25
            echo "</div>
  ";
        }
        // line 27
        echo "
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-field-minimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  73 => 29,  69 => 28,  66 => 27,  62 => 25,  57 => 24,  53 => 23,  51 => 22,  46 => 21,  44 => 18,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to provide minimal HTML for the field.*/
/*  **/
/*  * Available variables:*/
/*  * - element: The field element.*/
/*  * - label: The label of the field.*/
/*  * - settings: The settings for the field.*/
/*  * - items: List of all the field items. Each item contains:*/
/*  *   - attributes: List of HTML attributes for each item.*/
/*  *   - content: The field item's content.*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'field',*/
/*     'field-name-' ~ element['#field_name']|clean_class,*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% if not label_hidden %}*/
/*     <div class="field-label-{{ element['#label_display']|clean_class }}">*/
/*       {{- label }}{% if settings.lb-col %}:{% endif -%}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% for item in items %}*/
/*     {{ item.content }}*/
/*   {% endfor %}*/
/* </div>*/
/* */
