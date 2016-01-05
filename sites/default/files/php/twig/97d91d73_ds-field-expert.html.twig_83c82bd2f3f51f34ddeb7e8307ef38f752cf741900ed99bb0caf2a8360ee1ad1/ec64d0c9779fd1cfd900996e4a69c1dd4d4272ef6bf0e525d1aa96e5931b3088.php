<?php

/* modules/ds/templates/ds-field-expert.html.twig */
class __TwigTemplate_29692ed89f410f4355ac44571bae6db167ca713d54aed037184b2a4702b44d47 extends Twig_Template
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
        $tags = array("if" => 17, "macro" => 32, "set" => 35, "for" => 62);
        $filters = array("clean_class" => 36, "default" => 40);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'macro', 'set', 'for'),
                array('clean_class', 'default'),
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "prefix", array(), "array"), "html", null, true));
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "ow", array())) {
            // line 18
            echo "  ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "ow-def-at", array(), "array")) {
                // line 19
                echo "    <";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "ow-el", array(), "array"), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "html", null, true));
                echo ">
  ";
            } elseif ($this->getAttribute(            // line 20
(isset($context["settings"]) ? $context["settings"] : null), "ow-def-cl", array(), "array")) {
                // line 21
                echo "    <";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "ow-el", array(), "array"), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attribute_classes"]) ? $context["attribute_classes"] : null), "offsetGet", array(0 => "class"), "method"), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "html", null, true));
                echo ">
  ";
            } else {
                // line 23
                echo "    <";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "ow-el", array(), "array"), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "html", null, true));
                echo ">
  ";
            }
            // line 25
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this, "field", array(0 => (isset($context["items"]) ? $context["items"] : null), 1 => (isset($context["settings"]) ? $context["settings"] : null), 2 => (isset($context["label"]) ? $context["label"] : null), 3 => (isset($context["content_attributes"]) ? $context["content_attributes"] : null), 4 => (isset($context["field_item_wrapper_attributes"]) ? $context["field_item_wrapper_attributes"] : null), 5 => (isset($context["field_wrapper_attributes"]) ? $context["field_wrapper_attributes"] : null), 6 => (isset($context["label_attributes"]) ? $context["label_attributes"] : null), 7 => (isset($context["label_hidden"]) ? $context["label_hidden"] : null), 8 => (isset($context["element"]) ? $context["element"] : null)), "method")));
            echo "
    </";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "ow-el", array(), "array"), "html", null, true));
            echo ">
";
        } else {
            // line 28
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this, "field", array(0 => (isset($context["items"]) ? $context["items"] : null), 1 => (isset($context["settings"]) ? $context["settings"] : null), 2 => (isset($context["label"]) ? $context["label"] : null), 3 => (isset($context["content_attributes"]) ? $context["content_attributes"] : null), 4 => (isset($context["field_item_wrapper_attributes"]) ? $context["field_item_wrapper_attributes"] : null), 5 => (isset($context["field_wrapper_attributes"]) ? $context["field_wrapper_attributes"] : null), 6 => (isset($context["label_attributes"]) ? $context["label_attributes"] : null), 7 => (isset($context["label_hidden"]) ? $context["label_hidden"] : null), 8 => (isset($context["element"]) ? $context["element"] : null)), "method")));
            echo "
";
        }
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "suffix", array(), "array"), "html", null, true));
        // line 60
        echo "
";
    }

    // line 32
    public function getfield($__items__ = null, $__settings__ = null, $__label__ = null, $__content_attributes__ = null, $__field_item_wrapper_attributes__ = null, $__field_wrapper_attributes__ = null, $__label_attributes__ = null, $__label_hidden__ = null, $__element__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "settings" => $__settings__,
            "label" => $__label__,
            "content_attributes" => $__content_attributes__,
            "field_item_wrapper_attributes" => $__field_item_wrapper_attributes__,
            "field_wrapper_attributes" => $__field_wrapper_attributes__,
            "label_attributes" => $__label_attributes__,
            "label_hidden" => $__label_hidden__,
            "element" => $__element__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "  ";
            if ( !(isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
                // line 34
                echo "    ";
                // line 35
                $context["title_classes"] = array(0 => ("field-label-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(                // line 36
(isset($context["element"]) ? $context["element"] : null), "#label_display", array(), "array"))));
                // line 39
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lbw-def-at", array(), "array")) {
                    // line 40
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lbw-el", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lbw-el", array(), "array"), "div")) : ("div")), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["label_attributes"]) ? $context["label_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
                    echo ">";
                } else {
                    // line 42
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lbw-el", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lbw-el", array(), "array"), "div")) : ("div")), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["label_attributes"]) ? $context["label_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
                    echo ">";
                }
                // line 44
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lb-col", array(), "array")) {
                    echo ":";
                }
                // line 45
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lbw-el", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lbw-el", array(), "array"), "div")) : ("div")), "html", null, true));
                echo ">
  ";
            }
            // line 47
            echo "
  ";
            // line 48
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fis", array())) {
                // line 49
                echo "    ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fis-def-at", array(), "array")) {
                    // line 50
                    echo "      <";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fis-el", array(), "array"), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_wrapper_attributes"]) ? $context["field_wrapper_attributes"] : null), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 52
                    echo "      <";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fis-el", array(), "array"), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_wrapper_attributes"]) ? $context["field_wrapper_attributes"] : null), "html", null, true));
                    echo ">
    ";
                }
                // line 54
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this, "content", array(0 => (isset($context["items"]) ? $context["items"] : null), 1 => (isset($context["settings"]) ? $context["settings"] : null), 2 => (isset($context["field_item_wrapper_attributes"]) ? $context["field_item_wrapper_attributes"] : null), 3 => (isset($context["content_attributes"]) ? $context["content_attributes"] : null)), "method")));
                echo "
      </";
                // line 55
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fis-el", array(), "array"), "html", null, true));
                echo ">
  ";
            } else {
                // line 57
                echo "    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this, "content", array(0 => (isset($context["items"]) ? $context["items"] : null), 1 => (isset($context["settings"]) ? $context["settings"] : null), 2 => (isset($context["field_item_wrapper_attributes"]) ? $context["field_item_wrapper_attributes"] : null)), "method")));
                echo "
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 61
    public function getcontent($__items__ = null, $__settings__ = null, $__field_item_wrapper_attributes__ = null, $__content_attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "settings" => $__settings__,
            "field_item_wrapper_attributes" => $__field_item_wrapper_attributes__,
            "content_attributes" => $__content_attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 62
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 63
                echo "    ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fi", array())) {
                    // line 64
                    echo "      ";
                    if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fi-def-at", array(), "array")) {
                        // line 65
                        echo "        <";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fi-el", array(), "array"), "html", null, true));
                        echo " ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                        echo " ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_item_wrapper_attributes"]) ? $context["field_item_wrapper_attributes"] : null), "html", null, true));
                        echo " >
      ";
                    } else {
                        // line 67
                        echo "        <";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fi-el", array(), "array"), "html", null, true));
                        echo " ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_item_wrapper_attributes"]) ? $context["field_item_wrapper_attributes"] : null), "html", null, true));
                        echo " >
      ";
                    }
                    // line 69
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    // line 70
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fi-el", array(), "array"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 72
                    echo "      ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "
    ";
                }
                // line 74
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-field-expert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 74,  262 => 72,  256 => 70,  254 => 69,  246 => 67,  236 => 65,  233 => 64,  230 => 63,  225 => 62,  210 => 61,  195 => 57,  190 => 55,  185 => 54,  177 => 52,  167 => 50,  164 => 49,  162 => 48,  159 => 47,  153 => 45,  148 => 44,  141 => 42,  132 => 40,  130 => 39,  128 => 36,  127 => 35,  125 => 34,  122 => 33,  102 => 32,  97 => 60,  95 => 30,  89 => 28,  84 => 26,  79 => 25,  71 => 23,  61 => 21,  59 => 20,  50 => 19,  47 => 18,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to provide expert HTML for the field.*/
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
/* */
/* {{- settings['prefix'] -}}*/
/* {% if settings.ow %}*/
/*   {% if settings['ow-def-at'] %}*/
/*     <{{ settings['ow-el'] }} {{ attributes }} {{ wrapper_attributes }}>*/
/*   {% elseif settings['ow-def-cl'] %}*/
/*     <{{ settings['ow-el'] }} {{ attribute_classes.offsetGet('class') }} {{ wrapper_attributes }}>*/
/*   {% else %}*/
/*     <{{ settings['ow-el'] }} {{ wrapper_attributes }}>*/
/*   {% endif %}*/
/*     {{ _self.field(items, settings, label, content_attributes, field_item_wrapper_attributes, field_wrapper_attributes, label_attributes, label_hidden, element) }}*/
/*     </{{ settings['ow-el'] }}>*/
/* {% else %}*/
/*   {{ _self.field(items, settings, label, content_attributes, field_item_wrapper_attributes, field_wrapper_attributes, label_attributes, label_hidden, element) }}*/
/* {% endif %}*/
/* {{- settings['suffix'] -}}*/
/* */
/* {% macro field(items, settings, label, content_attributes, field_item_wrapper_attributes, field_wrapper_attributes, label_attributes, label_hidden, element) %}*/
/*   {% if not label_hidden %}*/
/*     {%*/
/*       set title_classes = [*/
/*         'field-label-' ~ element['#label_display']|clean_class,*/
/*       ]*/
/*     %}*/
/*     {%- if settings['lbw-def-at'] -%}*/
/*       <{{ settings['lbw-el']|default('div') }} {{ title_attributes }} {{ label_attributes.addClass(title_classes) }}>*/
/*     {%- else -%}*/
/*       <{{ settings['lbw-el']|default('div') }} {{ label_attributes.addClass(title_classes) }}>*/
/*     {%- endif -%}*/
/*         {{- label -}}{%- if settings['lb-col'] -%}:{%- endif -%}*/
/*       </{{ settings['lbw-el']|default('div') }}>*/
/*   {% endif %}*/
/* */
/*   {% if settings.fis %}*/
/*     {% if settings['fis-def-at'] %}*/
/*       <{{ settings['fis-el'] }} {{ content_attributes }} {{ field_wrapper_attributes }}>*/
/*     {% else %}*/
/*       <{{ settings['fis-el'] }} {{ field_wrapper_attributes }}>*/
/*     {% endif %}*/
/*         {{ _self.content(items, settings, field_item_wrapper_attributes, content_attributes) }}*/
/*       </{{ settings['fis-el'] }}>*/
/*   {% else %}*/
/*     {{ _self.content(items, settings, field_item_wrapper_attributes) }}*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro content(items, settings, field_item_wrapper_attributes, content_attributes) %}*/
/*   {% for item in items %}*/
/*     {% if settings.fi %}*/
/*       {% if settings['fi-def-at'] %}*/
/*         <{{ settings['fi-el'] }} {{ item.attributes }} {{ field_item_wrapper_attributes }} >*/
/*       {% else %}*/
/*         <{{ settings['fi-el'] }} {{ field_item_wrapper_attributes }} >*/
/*       {% endif %}*/
/*           {{- item.content -}}*/
/*         </{{ settings['fi-el'] }}>*/
/*     {% else %}*/
/*       {{ item.content }}*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* */
