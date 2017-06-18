<?php

/* @GoGreen/dam/galery.html.twig */
class __TwigTemplate_ba51e68241c5411a01fd7ed14638acede8b356426267092c2e7815ccade2c915 extends Twig_Template
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
        $__internal_bcbbf87f78cae874f3e35228e8c8a9f12bf0dc19b4a50c0fcc54d8bd7338834c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbbf87f78cae874f3e35228e8c8a9f12bf0dc19b4a50c0fcc54d8bd7338834c->enter($__internal_bcbbf87f78cae874f3e35228e8c8a9f12bf0dc19b4a50c0fcc54d8bd7338834c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/galery.html.twig"));

        $__internal_d8ce89931e9d544ca858c93dd6271dedee381c02558244b1cb857c27c3c73498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ce89931e9d544ca858c93dd6271dedee381c02558244b1cb857c27c3c73498->enter($__internal_d8ce89931e9d544ca858c93dd6271dedee381c02558244b1cb857c27c3c73498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/galery.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div id=\"main_area\">
        <!-- Slider -->
        <div class=\"row\">
            <div class=\"col-xs-12\" id=\"slider\">
                <!-- Top part of the slider -->
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"carousel-bounding-box\">
                        <div class=\"carousel slide\" id=\"myCarousel\">
                            <!-- Carousel items -->

                            <div class=\"carousel-inner\">
                                ";
        // line 13
        $context["counter"] = 0;
        // line 14
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "imageCollection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["damImage"]) {
            // line 15
            echo "                                    ";
            if ((($context["counter"] ?? $this->getContext($context, "counter")) == 0)) {
                // line 16
                echo "                                <div class=\"active item\" data-slide-number=\"";
                echo twig_escape_filter($this->env, ($context["counter"] ?? $this->getContext($context, "counter")), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\"></div>
                                    ";
            } else {
                // line 19
                echo "                                        <div class=\"item\" data-slide-number=\"";
                echo twig_escape_filter($this->env, ($context["counter"] ?? $this->getContext($context, "counter")), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\"></div>
                                ";
            }
            // line 22
            echo "                                    ";
            $context["counter"] = (($context["counter"] ?? $this->getContext($context, "counter")) + 1);
            // line 23
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['damImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                            </div>

                            <!-- Carousel nav -->
                            <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--/Slider-->

        <div class=\"row hidden-xs\" id=\"slider-thumbs\">
            <!-- Bottom switcher of slider -->
            <ul class=\"hide-bullets\">
                ";
        // line 43
        $context["counter"] = 0;
        // line 44
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "imageCollection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["damImage"]) {
            // line 45
            echo "                ";
            if ((($context["counter"] ?? $this->getContext($context, "counter")) == 0)) {
                // line 46
                echo "                <li class=\"col-sm-2\">
                    <a class=\"thumbnail\" id=\"carousel-selector-";
                // line 47
                echo twig_escape_filter($this->env, ($context["counter"] ?? $this->getContext($context, "counter")), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\"></a>
                </li>
                ";
            } else {
                // line 50
                echo "                <li class=\"col-sm-2\">
                    <a class=\"thumbnail\" id=\"carousel-selector-";
                // line 51
                echo twig_escape_filter($this->env, ($context["counter"] ?? $this->getContext($context, "counter")), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\"></a>
                </li>
                ";
            }
            // line 54
            echo "                    ";
            $context["counter"] = (($context["counter"] ?? $this->getContext($context, "counter")) + 1);
            // line 55
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['damImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </ul>
        </div>
    </div>
</div>

";
        // line 61
        $this->displayBlock('styles', $context, $blocks);
        
        $__internal_bcbbf87f78cae874f3e35228e8c8a9f12bf0dc19b4a50c0fcc54d8bd7338834c->leave($__internal_bcbbf87f78cae874f3e35228e8c8a9f12bf0dc19b4a50c0fcc54d8bd7338834c_prof);

        
        $__internal_d8ce89931e9d544ca858c93dd6271dedee381c02558244b1cb857c27c3c73498->leave($__internal_d8ce89931e9d544ca858c93dd6271dedee381c02558244b1cb857c27c3c73498_prof);

    }

    public function block_styles($context, array $blocks = array())
    {
        $__internal_611120c92afeb546eb0850c2cbae54262bc83f24f30cf83a0293d15ae18da6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611120c92afeb546eb0850c2cbae54262bc83f24f30cf83a0293d15ae18da6f8->enter($__internal_611120c92afeb546eb0850c2cbae54262bc83f24f30cf83a0293d15ae18da6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_a7b049392507a29e54bd22f6b5b7db30280a1835be88bc9d3cad1846f4b9452d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b049392507a29e54bd22f6b5b7db30280a1835be88bc9d3cad1846f4b9452d->enter($__internal_a7b049392507a29e54bd22f6b5b7db30280a1835be88bc9d3cad1846f4b9452d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 62
        echo "    <style>
        .hide-bullets {
            list-style: none;
            margin-left: -40px;
            margin-top: 20px;
        }
    </style>
";
        
        $__internal_a7b049392507a29e54bd22f6b5b7db30280a1835be88bc9d3cad1846f4b9452d->leave($__internal_a7b049392507a29e54bd22f6b5b7db30280a1835be88bc9d3cad1846f4b9452d_prof);

        
        $__internal_611120c92afeb546eb0850c2cbae54262bc83f24f30cf83a0293d15ae18da6f8->leave($__internal_611120c92afeb546eb0850c2cbae54262bc83f24f30cf83a0293d15ae18da6f8_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/galery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 62,  148 => 61,  141 => 56,  135 => 55,  132 => 54,  124 => 51,  121 => 50,  113 => 47,  110 => 46,  107 => 45,  102 => 44,  100 => 43,  79 => 24,  73 => 23,  70 => 22,  65 => 20,  60 => 19,  55 => 17,  50 => 16,  47 => 15,  42 => 14,  40 => 13,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div id=\"main_area\">
        <!-- Slider -->
        <div class=\"row\">
            <div class=\"col-xs-12\" id=\"slider\">
                <!-- Top part of the slider -->
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"carousel-bounding-box\">
                        <div class=\"carousel slide\" id=\"myCarousel\">
                            <!-- Carousel items -->

                            <div class=\"carousel-inner\">
                                {% set counter = 0 %}
                                {% for damImage in dam.imageCollection %}
                                    {% if counter == 0 %}
                                <div class=\"active item\" data-slide-number=\"{{ counter }}\">
                                    <img src=\"{{ damImage.webPath }}\"></div>
                                    {% else %}
                                        <div class=\"item\" data-slide-number=\"{{ counter }}\">
                                            <img src=\"{{ damImage.webPath }}\"></div>
                                {% endif %}
                                    {% set counter = counter + 1 %}
                                {% endfor %}
                            </div>

                            <!-- Carousel nav -->
                            <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--/Slider-->

        <div class=\"row hidden-xs\" id=\"slider-thumbs\">
            <!-- Bottom switcher of slider -->
            <ul class=\"hide-bullets\">
                {% set counter = 0 %}
                {% for damImage in dam.imageCollection %}
                {% if counter == 0 %}
                <li class=\"col-sm-2\">
                    <a class=\"thumbnail\" id=\"carousel-selector-{{ counter }}\"><img src=\"{{ damImage.webPath }}\"></a>
                </li>
                {% else %}
                <li class=\"col-sm-2\">
                    <a class=\"thumbnail\" id=\"carousel-selector-{{ counter }}\"><img src=\"{{ damImage.webPath }}\"></a>
                </li>
                {% endif %}
                    {% set counter = counter + 1 %}
                {% endfor %}
            </ul>
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
    </style>
{% endblock %}
", "@GoGreen/dam/galery.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/galery.html.twig");
    }
}
