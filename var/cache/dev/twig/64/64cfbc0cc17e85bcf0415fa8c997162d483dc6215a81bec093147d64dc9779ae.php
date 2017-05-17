<?php

/* @StarRating/Display/ratingDisplay.html.twig */
class __TwigTemplate_19c2c570ff935d1cdf501f2ab341b071930d96b784153f10dd8dad932d2bb67c extends Twig_Template
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
        $__internal_a371cc8823248c8e38a0759541ceafff4f544daeb15cbaec09d7385e964c70e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a371cc8823248c8e38a0759541ceafff4f544daeb15cbaec09d7385e964c70e3->enter($__internal_a371cc8823248c8e38a0759541ceafff4f544daeb15cbaec09d7385e964c70e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/Display/ratingDisplay.html.twig"));

        $__internal_f7a8c2635ee5849ff5936edc633def8c6a8b3a17668c8b68f1e6e095bc66c7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a8c2635ee5849ff5936edc633def8c6a8b3a17668c8b68f1e6e095bc66c7fd->enter($__internal_f7a8c2635ee5849ff5936edc633def8c6a8b3a17668c8b68f1e6e095bc66c7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/Display/ratingDisplay.html.twig"));

        // line 1
        echo "<div class=\"rating\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    <div class=\"";
            if (($context["i"] <= (isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")))) {
                echo "star-full";
            } else {
                echo "star-empty";
            }
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["starSize"]) ? $context["starSize"] : $this->getContext($context, "starSize")), "html", null, true);
            echo "\"></div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
        
        $__internal_a371cc8823248c8e38a0759541ceafff4f544daeb15cbaec09d7385e964c70e3->leave($__internal_a371cc8823248c8e38a0759541ceafff4f544daeb15cbaec09d7385e964c70e3_prof);

        
        $__internal_f7a8c2635ee5849ff5936edc633def8c6a8b3a17668c8b68f1e6e095bc66c7fd->leave($__internal_f7a8c2635ee5849ff5936edc633def8c6a8b3a17668c8b68f1e6e095bc66c7fd_prof);

    }

    public function getTemplateName()
    {
        return "@StarRating/Display/ratingDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"rating\">
  {% for i in 1..max %}
    <div class=\"{% if i <= stars %}star-full{% else %}star-empty{% endif %} {{ starSize }}\"></div>
  {% endfor %}
</div>", "@StarRating/Display/ratingDisplay.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views/Display/ratingDisplay.html.twig");
    }
}
