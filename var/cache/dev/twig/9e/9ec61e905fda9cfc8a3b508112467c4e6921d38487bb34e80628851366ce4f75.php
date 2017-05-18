<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.twig */
class __TwigTemplate_bc419afc8ec2c39d38b85e133cd2747ca539983ac3984f20e1aae7046032f913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
            'ckeditor_javascript' => array($this, 'block_ckeditor_javascript'),
            '_ckeditor_javascript' => array($this, 'block__ckeditor_javascript'),
            'ckeditor_widget_extra' => array($this, 'block_ckeditor_widget_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29bc8c20542fb21f74aaca74b16e942f4bbe0ae119835219346a43afeae426b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29bc8c20542fb21f74aaca74b16e942f4bbe0ae119835219346a43afeae426b2->enter($__internal_29bc8c20542fb21f74aaca74b16e942f4bbe0ae119835219346a43afeae426b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.twig"));

        $__internal_4fb9f551c104020317abd21d48af82dcf7813a4b7f0753cb41392d41ae97aed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb9f551c104020317abd21d48af82dcf7813a4b7f0753cb41392d41ae97aed9->enter($__internal_4fb9f551c104020317abd21d48af82dcf7813a4b7f0753cb41392d41ae97aed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('ckeditor_javascript', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_ckeditor_javascript', $context, $blocks);
        
        $__internal_29bc8c20542fb21f74aaca74b16e942f4bbe0ae119835219346a43afeae426b2->leave($__internal_29bc8c20542fb21f74aaca74b16e942f4bbe0ae119835219346a43afeae426b2_prof);

        
        $__internal_4fb9f551c104020317abd21d48af82dcf7813a4b7f0753cb41392d41ae97aed9->leave($__internal_4fb9f551c104020317abd21d48af82dcf7813a4b7f0753cb41392d41ae97aed9_prof);

    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_aae594ebef2177be8fb1e166849e43f919a37db63de561399d5ad2cb9b4f958c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae594ebef2177be8fb1e166849e43f919a37db63de561399d5ad2cb9b4f958c->enter($__internal_aae594ebef2177be8fb1e166849e43f919a37db63de561399d5ad2cb9b4f958c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        $__internal_c719492f6841d2c3d6430db480e0f65dfa08b7250c040f46d4c06fe003b5fe35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c719492f6841d2c3d6430db480e0f65dfa08b7250c040f46d4c06fe003b5fe35->enter($__internal_c719492f6841d2c3d6430db480e0f65dfa08b7250c040f46d4c06fe003b5fe35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) &&  !(isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 5
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_c719492f6841d2c3d6430db480e0f65dfa08b7250c040f46d4c06fe003b5fe35->leave($__internal_c719492f6841d2c3d6430db480e0f65dfa08b7250c040f46d4c06fe003b5fe35_prof);

        
        $__internal_aae594ebef2177be8fb1e166849e43f919a37db63de561399d5ad2cb9b4f958c->leave($__internal_aae594ebef2177be8fb1e166849e43f919a37db63de561399d5ad2cb9b4f958c_prof);

    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_429c232f57e06bd1ebb9ee7a6dad8aaed0b55508783389002afec9b179dbcd18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429c232f57e06bd1ebb9ee7a6dad8aaed0b55508783389002afec9b179dbcd18->enter($__internal_429c232f57e06bd1ebb9ee7a6dad8aaed0b55508783389002afec9b179dbcd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        $__internal_103f1a4fc02b6f7cab35fe9dc9f635bf1519ab81102935e5a09f25c9e2748b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103f1a4fc02b6f7cab35fe9dc9f635bf1519ab81102935e5a09f25c9e2748b2c->enter($__internal_103f1a4fc02b6f7cab35fe9dc9f635bf1519ab81102935e5a09f25c9e2748b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        // line 10
        echo "    ";
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) && (isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 11
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_103f1a4fc02b6f7cab35fe9dc9f635bf1519ab81102935e5a09f25c9e2748b2c->leave($__internal_103f1a4fc02b6f7cab35fe9dc9f635bf1519ab81102935e5a09f25c9e2748b2c_prof);

        
        $__internal_429c232f57e06bd1ebb9ee7a6dad8aaed0b55508783389002afec9b179dbcd18->leave($__internal_429c232f57e06bd1ebb9ee7a6dad8aaed0b55508783389002afec9b179dbcd18_prof);

    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_7077c679abf535099a0beceed74cefdc5fb9042a5ce8f57bbe67e849ea0bc1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7077c679abf535099a0beceed74cefdc5fb9042a5ce8f57bbe67e849ea0bc1ec->enter($__internal_7077c679abf535099a0beceed74cefdc5fb9042a5ce8f57bbe67e849ea0bc1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        $__internal_f96f7d8d461b020981a52084ef34f7c3dd05a12519925995ab7643409c5f71d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96f7d8d461b020981a52084ef34f7c3dd05a12519925995ab7643409c5f71d0->enter($__internal_f96f7d8d461b020981a52084ef34f7c3dd05a12519925995ab7643409c5f71d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        // line 16
        echo "    ";
        if ((isset($context["autoload"]) ? $context["autoload"] : $this->getContext($context, "autoload"))) {
            // line 17
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 18
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderBasePath((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")));
            echo "\";
        </script>
        <script type=\"text/javascript\" src=\"";
            // line 20
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path")));
            echo "\"></script>
        ";
            // line 21
            if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
                // line 22
                echo "            <script type=\"text/javascript\" src=\"";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath((isset($context["jquery_path"]) ? $context["jquery_path"] : $this->getContext($context, "jquery_path")));
                echo "\"></script>
        ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <script type=\"text/javascript\">
        ";
        // line 26
        if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
            // line 27
            echo "            \$(function () {
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        if ((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js"))) {
            // line 31
            echo "            require(['ckeditor'], function() {
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        echo "

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 37
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
        foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
            // line 41
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderStylesSet($context["style_name"], $context["style"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 45
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderTemplate($context["template_name"], $context["template"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('ckeditor_widget_extra', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), array("auto_inline" =>         // line 51
(isset($context["auto_inline"]) ? $context["auto_inline"] : $this->getContext($context, "auto_inline")), "inline" =>         // line 52
(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "input_sync" =>         // line 53
(isset($context["input_sync"]) ? $context["input_sync"] : $this->getContext($context, "input_sync")), "filebrowsers" =>         // line 54
(isset($context["filebrowsers"]) ? $context["filebrowsers"] : $this->getContext($context, "filebrowsers"))));
        // line 55
        echo "

        ";
        // line 57
        if ((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js"))) {
            // line 58
            echo "            });
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
            // line 62
            echo "            });
        ";
        }
        // line 64
        echo "    </script>
";
        
        $__internal_f96f7d8d461b020981a52084ef34f7c3dd05a12519925995ab7643409c5f71d0->leave($__internal_f96f7d8d461b020981a52084ef34f7c3dd05a12519925995ab7643409c5f71d0_prof);

        
        $__internal_7077c679abf535099a0beceed74cefdc5fb9042a5ce8f57bbe67e849ea0bc1ec->leave($__internal_7077c679abf535099a0beceed74cefdc5fb9042a5ce8f57bbe67e849ea0bc1ec_prof);

    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = array())
    {
        $__internal_dfbab8dc0eac9b0f20c41678489fd4219b187816ff658ab0b42bd05968745123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbab8dc0eac9b0f20c41678489fd4219b187816ff658ab0b42bd05968745123->enter($__internal_dfbab8dc0eac9b0f20c41678489fd4219b187816ff658ab0b42bd05968745123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        $__internal_84084ca735238de413eef01668229b0b76d709031792d1f80e4ec88b6febb87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84084ca735238de413eef01668229b0b76d709031792d1f80e4ec88b6febb87b->enter($__internal_84084ca735238de413eef01668229b0b76d709031792d1f80e4ec88b6febb87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        
        $__internal_84084ca735238de413eef01668229b0b76d709031792d1f80e4ec88b6febb87b->leave($__internal_84084ca735238de413eef01668229b0b76d709031792d1f80e4ec88b6febb87b_prof);

        
        $__internal_dfbab8dc0eac9b0f20c41678489fd4219b187816ff658ab0b42bd05968745123->leave($__internal_dfbab8dc0eac9b0f20c41678489fd4219b187816ff658ab0b42bd05968745123_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 48,  247 => 64,  243 => 62,  241 => 61,  238 => 60,  234 => 58,  232 => 57,  228 => 55,  226 => 54,  225 => 53,  224 => 52,  223 => 51,  222 => 50,  219 => 49,  217 => 48,  214 => 47,  205 => 45,  201 => 44,  198 => 43,  189 => 41,  185 => 40,  182 => 39,  173 => 37,  169 => 36,  164 => 34,  161 => 33,  157 => 31,  155 => 30,  152 => 29,  148 => 27,  146 => 26,  143 => 25,  140 => 24,  134 => 22,  132 => 21,  128 => 20,  123 => 18,  120 => 17,  117 => 16,  108 => 15,  94 => 11,  91 => 10,  82 => 9,  68 => 5,  66 => 4,  58 => 2,  49 => 1,  39 => 15,  36 => 14,  34 => 9,  31 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ckeditor_widget %}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

    {% if enable and not async %}
        {{ block('_ckeditor_javascript') }}
    {% endif %}
{% endblock %}

{% block ckeditor_javascript %}
    {% if enable and async %}
        {{ block('_ckeditor_javascript') }}
    {% endif %}
{% endblock %}

{% block _ckeditor_javascript %}
    {% if autoload %}
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"{{ ckeditor_base_path(base_path) }}\";
        </script>
        <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(js_path) }}\"></script>
        {% if jquery %}
            <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(jquery_path) }}\"></script>
        {% endif %}
    {% endif %}
    <script type=\"text/javascript\">
        {% if jquery %}
            \$(function () {
        {% endif %}

        {% if require_js %}
            require(['ckeditor'], function() {
        {% endif %}

        {{ ckeditor_destroy(id) }}

        {% for plugin_name, plugin in plugins %}
            {{ ckeditor_plugin(plugin_name, plugin) }}
        {% endfor %}

        {% for style_name, style in styles %}
            {{ ckeditor_styles_set(style_name, style) }}
        {% endfor %}

        {% for template_name, template in templates %}
            {{ ckeditor_template(template_name, template) }}
        {% endfor %}

        {% block ckeditor_widget_extra %}{% endblock ckeditor_widget_extra %}

        {{ ckeditor_widget(id, config, {
            auto_inline: auto_inline,
            inline: inline,
            input_sync: input_sync,
            filebrowsers: filebrowsers
        }) }}

        {% if require_js %}
            });
        {% endif %}

        {% if jquery %}
            });
        {% endif %}
    </script>
{% endblock %}
", "@IvoryCKEditor/Form/ckeditor_widget.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
