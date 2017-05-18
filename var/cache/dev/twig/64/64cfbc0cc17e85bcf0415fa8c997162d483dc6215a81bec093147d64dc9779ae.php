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
        $__internal_43c216b25d379c8e39a4b08f762b37f2208c2121a7d1991623128c3153a74d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c216b25d379c8e39a4b08f762b37f2208c2121a7d1991623128c3153a74d6b->enter($__internal_43c216b25d379c8e39a4b08f762b37f2208c2121a7d1991623128c3153a74d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/Display/ratingDisplay.html.twig"));

        $__internal_07437b5f1e69679f52b4a730cacf68a6d0a35d74929a9b247c3436359b078476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07437b5f1e69679f52b4a730cacf68a6d0a35d74929a9b247c3436359b078476->enter($__internal_07437b5f1e69679f52b4a730cacf68a6d0a35d74929a9b247c3436359b078476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/Display/ratingDisplay.html.twig"));

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
        
        $__internal_43c216b25d379c8e39a4b08f762b37f2208c2121a7d1991623128c3153a74d6b->leave($__internal_43c216b25d379c8e39a4b08f762b37f2208c2121a7d1991623128c3153a74d6b_prof);

        
        $__internal_07437b5f1e69679f52b4a730cacf68a6d0a35d74929a9b247c3436359b078476->leave($__internal_07437b5f1e69679f52b4a730cacf68a6d0a35d74929a9b247c3436359b078476_prof);

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
