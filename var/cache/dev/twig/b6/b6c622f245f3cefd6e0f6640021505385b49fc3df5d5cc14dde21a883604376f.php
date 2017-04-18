<?php

/* @Dam/dam/galery.html.twig */
class __TwigTemplate_bcb0c005c1ece21b797a0a5735e0e6d6043a3621bf8f3b11aac2540ef0d53149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efe175637e6c36d075255fa26462560238c992cdd20d7141476ecbfcdb50ec9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe175637e6c36d075255fa26462560238c992cdd20d7141476ecbfcdb50ec9a->enter($__internal_efe175637e6c36d075255fa26462560238c992cdd20d7141476ecbfcdb50ec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/galery.html.twig"));

        $__internal_c085d62bd6a905be47cc33a792a31b0799b74769271b0b8c2ab24e5fe706b9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c085d62bd6a905be47cc33a792a31b0799b74769271b0b8c2ab24e5fe706b9ef->enter($__internal_c085d62bd6a905be47cc33a792a31b0799b74769271b0b8c2ab24e5fe706b9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/galery.html.twig"));

        // line 1
        echo "<div class=\"main_area\">
    <div class=\"row\">
        <div class=\"col-sm-6\" id=\"slider-thumbs\">
            <ul class=\"hide-bullets\">
                ";
        // line 5
        $context["counter"] = 1;
        // line 6
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "imageCollection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["damImage"]) {
            // line 7
            echo "                ";
            if (((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) == twig_length_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "imageCollection", array())))) {
                // line 8
                echo "                <li class=\"col-sm-3\">
                    <a class=\"thumbnail\" id=\"carousel-selector-";
                // line 9
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "imageCollection", array())), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\">
                    </a>
                </li>
                ";
            } else {
                // line 14
                echo "                <li class=\"col-sm-3\">
                    <a class=\"thumbnail\" id=\"carousel-selector-";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\"></a>
                </li>
                    ";
            }
            // line 18
            echo "                    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 19
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['damImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                ";
        $context["counter"] = 1;
        // line 21
        echo "            </ul>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"col-xs-12\" id=\"slider\">
                <!-- Top part of the slider -->
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"carousel-bounding-box\">
                        <div class=\"carousel slide\" id=\"myCarousel\">
                            <div class=\"carousel-inner\">

                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "imageCollection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["damImage"]) {
            // line 32
            echo "                                ";
            if (((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) == twig_length_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "imageCollection", array())))) {
                // line 33
                echo "                                <div class=\"active item\" data-slide-number=\"";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "imageCollection", array())), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\"></div>
                            ";
            } else {
                // line 36
                echo "                            <div class=\"item\" data-slide-number=\"";
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\"></div>
                                ";
            }
            // line 39
            echo "                                ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 40
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['damImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            ";
        $context["counter"] = 1;
        // line 42
        echo "                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 51
        $this->displayBlock('styles', $context, $blocks);
        
        $__internal_efe175637e6c36d075255fa26462560238c992cdd20d7141476ecbfcdb50ec9a->leave($__internal_efe175637e6c36d075255fa26462560238c992cdd20d7141476ecbfcdb50ec9a_prof);

        
        $__internal_c085d62bd6a905be47cc33a792a31b0799b74769271b0b8c2ab24e5fe706b9ef->leave($__internal_c085d62bd6a905be47cc33a792a31b0799b74769271b0b8c2ab24e5fe706b9ef_prof);

    }

    public function block_styles($context, array $blocks = array())
    {
        $__internal_a1d9ebe25ae41993f912948c17846e1d730f3db4061bf5b28aa45430687a9533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d9ebe25ae41993f912948c17846e1d730f3db4061bf5b28aa45430687a9533->enter($__internal_a1d9ebe25ae41993f912948c17846e1d730f3db4061bf5b28aa45430687a9533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_152d958fabdec81650df05e23c1c9a5f78d7894f24418f42bef3266434e8fa96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152d958fabdec81650df05e23c1c9a5f78d7894f24418f42bef3266434e8fa96->enter($__internal_152d958fabdec81650df05e23c1c9a5f78d7894f24418f42bef3266434e8fa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 52
        echo "    <style>
        .hide-bullets {
            list-style: none;
            margin-left: -40px;
            margin-top: 20px;
        }

        .thumbnail {
            padding: 0;
        }

        .carousel-inner > .item > img, .carousel-inner > .item > a > img {
            width: 100%;
        }

        .col-sm-3 a {
            border: 1px solid transparent;
            border-radius: 0;
            transition: all 3s ease;
        }

        .col-sm-3 a:hover {
            border: 1px solid #ff4647;
            border-radius: 100% 60% / 30% 10%;
            background: linear-gradient(rgba(56, 123, 131, 0.7), rgba(56, 123, 131, 0.7));
        }
    </style>
";
        
        $__internal_152d958fabdec81650df05e23c1c9a5f78d7894f24418f42bef3266434e8fa96->leave($__internal_152d958fabdec81650df05e23c1c9a5f78d7894f24418f42bef3266434e8fa96_prof);

        
        $__internal_a1d9ebe25ae41993f912948c17846e1d730f3db4061bf5b28aa45430687a9533->leave($__internal_a1d9ebe25ae41993f912948c17846e1d730f3db4061bf5b28aa45430687a9533_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/galery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 52,  141 => 51,  130 => 42,  127 => 41,  121 => 40,  118 => 39,  113 => 37,  108 => 36,  103 => 34,  98 => 33,  95 => 32,  91 => 31,  79 => 21,  76 => 20,  70 => 19,  67 => 18,  59 => 15,  56 => 14,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  34 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"main_area\">
    <div class=\"row\">
        <div class=\"col-sm-6\" id=\"slider-thumbs\">
            <ul class=\"hide-bullets\">
                {% set counter = 1 %}
                {% for damImage in dam.imageCollection %}
                {% if counter == dam.imageCollection|length %}
                <li class=\"col-sm-3\">
                    <a class=\"thumbnail\" id=\"carousel-selector-{{ dam.imageCollection|length }}\">
                        <img src=\"{{ damImage.webPath }}\">
                    </a>
                </li>
                {% else %}
                <li class=\"col-sm-3\">
                    <a class=\"thumbnail\" id=\"carousel-selector-{{ counter }}\"><img src=\"{{ damImage.webPath }}\"></a>
                </li>
                    {% endif %}
                    {% set counter = counter + 1 %}
                {% endfor %}
                {% set counter = 1 %}
            </ul>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"col-xs-12\" id=\"slider\">
                <!-- Top part of the slider -->
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"carousel-bounding-box\">
                        <div class=\"carousel slide\" id=\"myCarousel\">
                            <div class=\"carousel-inner\">

                            {% for damImage in dam.imageCollection %}
                                {% if counter == dam.imageCollection|length %}
                                <div class=\"active item\" data-slide-number=\"{{ dam.imageCollection|length }}\">
                                <img src=\"{{ damImage.webPath }}\"></div>
                            {% else %}
                            <div class=\"item\" data-slide-number=\"{{ counter }}\">
                                <img src=\"{{ damImage.webPath }}\"></div>
                                {% endif %}
                                {% set counter = counter + 1 %}
                            {% endfor %}
                            {% set counter = 1 %}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% block styles %}
    <style>
        .hide-bullets {
            list-style: none;
            margin-left: -40px;
            margin-top: 20px;
        }

        .thumbnail {
            padding: 0;
        }

        .carousel-inner > .item > img, .carousel-inner > .item > a > img {
            width: 100%;
        }

        .col-sm-3 a {
            border: 1px solid transparent;
            border-radius: 0;
            transition: all 3s ease;
        }

        .col-sm-3 a:hover {
            border: 1px solid #ff4647;
            border-radius: 100% 60% / 30% 10%;
            background: linear-gradient(rgba(56, 123, 131, 0.7), rgba(56, 123, 131, 0.7));
        }
    </style>
{% endblock %}
", "@Dam/dam/galery.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/galery.html.twig");
    }
}
