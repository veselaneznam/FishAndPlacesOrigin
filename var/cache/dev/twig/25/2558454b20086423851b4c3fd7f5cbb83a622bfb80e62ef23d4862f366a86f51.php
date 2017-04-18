<?php

/* @Dam/dam/galery.html.twig */
class __TwigTemplate_a4459a546dd3a971852b277d065ac7786984ff35c37965a4f610eb2781e58ff6 extends Twig_Template
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
        $__internal_cc21a45667a841664997472116ec199d6a8259069566b7c668cdef4c286d5018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc21a45667a841664997472116ec199d6a8259069566b7c668cdef4c286d5018->enter($__internal_cc21a45667a841664997472116ec199d6a8259069566b7c668cdef4c286d5018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/galery.html.twig"));

        $__internal_515d0514c9ee5b87bbd8a9467b2b40e31ca65a8649794df0eb2af420b8d69e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515d0514c9ee5b87bbd8a9467b2b40e31ca65a8649794df0eb2af420b8d69e6b->enter($__internal_515d0514c9ee5b87bbd8a9467b2b40e31ca65a8649794df0eb2af420b8d69e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/galery.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "imageCollection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["damImage"]) {
            // line 15
            echo "                                    ";
            if (((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) == 0)) {
                // line 16
                echo "                                <div class=\"active item\" data-slide-number=\"";
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\"></div>
                                    ";
            } else {
                // line 19
                echo "                                        <div class=\"item\" data-slide-number=\"";
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\"></div>
                                ";
            }
            // line 22
            echo "                                    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "imageCollection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["damImage"]) {
            // line 45
            echo "                ";
            if (((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) == 0)) {
                // line 46
                echo "                <li class=\"col-sm-2\">
                    <a class=\"thumbnail\" id=\"carousel-selector-";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                echo "\"></a>
                </li>
                ";
            }
            // line 54
            echo "                    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
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
        
        $__internal_cc21a45667a841664997472116ec199d6a8259069566b7c668cdef4c286d5018->leave($__internal_cc21a45667a841664997472116ec199d6a8259069566b7c668cdef4c286d5018_prof);

        
        $__internal_515d0514c9ee5b87bbd8a9467b2b40e31ca65a8649794df0eb2af420b8d69e6b->leave($__internal_515d0514c9ee5b87bbd8a9467b2b40e31ca65a8649794df0eb2af420b8d69e6b_prof);

    }

    public function block_styles($context, array $blocks = array())
    {
        $__internal_c97eadd0b4c941d0640110b6e1d1c9112f00469875ac89e1c36fb162ce56ec66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97eadd0b4c941d0640110b6e1d1c9112f00469875ac89e1c36fb162ce56ec66->enter($__internal_c97eadd0b4c941d0640110b6e1d1c9112f00469875ac89e1c36fb162ce56ec66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_fae3d2a42faea45feb01606d7a44cd923db0527402bcff6828e4075b88abd47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae3d2a42faea45feb01606d7a44cd923db0527402bcff6828e4075b88abd47d->enter($__internal_fae3d2a42faea45feb01606d7a44cd923db0527402bcff6828e4075b88abd47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 62
        echo "    <style>
        .hide-bullets {
            list-style: none;
            margin-left: -40px;
            margin-top: 20px;
        }
    </style>
";
        
        $__internal_fae3d2a42faea45feb01606d7a44cd923db0527402bcff6828e4075b88abd47d->leave($__internal_fae3d2a42faea45feb01606d7a44cd923db0527402bcff6828e4075b88abd47d_prof);

        
        $__internal_c97eadd0b4c941d0640110b6e1d1c9112f00469875ac89e1c36fb162ce56ec66->leave($__internal_c97eadd0b4c941d0640110b6e1d1c9112f00469875ac89e1c36fb162ce56ec66_prof);

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
", "@Dam/dam/galery.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/galery.html.twig");
    }
}
