<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_55e876929da658853d75fee6e9654d0f96582fced74935668eb0debe127dc1f3 extends Twig_Template
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
        $__internal_4743618df5fca861939b08335d5eae70f2b84c398c5664d39083253bc565f551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4743618df5fca861939b08335d5eae70f2b84c398c5664d39083253bc565f551->enter($__internal_4743618df5fca861939b08335d5eae70f2b84c398c5664d39083253bc565f551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_c46b5e1b77bb5c71136b52e37c1c56afdf60203c6133d31f12a6519fa50c59a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46b5e1b77bb5c71136b52e37c1c56afdf60203c6133d31f12a6519fa50c59a7->enter($__internal_c46b5e1b77bb5c71136b52e37c1c56afdf60203c6133d31f12a6519fa50c59a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4743618df5fca861939b08335d5eae70f2b84c398c5664d39083253bc565f551->leave($__internal_4743618df5fca861939b08335d5eae70f2b84c398c5664d39083253bc565f551_prof);

        
        $__internal_c46b5e1b77bb5c71136b52e37c1c56afdf60203c6133d31f12a6519fa50c59a7->leave($__internal_c46b5e1b77bb5c71136b52e37c1c56afdf60203c6133d31f12a6519fa50c59a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
