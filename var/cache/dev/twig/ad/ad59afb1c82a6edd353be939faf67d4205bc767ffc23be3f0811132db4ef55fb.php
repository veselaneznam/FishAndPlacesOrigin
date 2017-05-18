<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6d1ff9c155277378f88ea33816d30c58427321f280edff160801d165d4b7860e extends Twig_Template
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
        $__internal_24d5bf86a2db3b2001098db3dcdf037f6f1dbc9e1f5648d8a4b8669e26a6da00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d5bf86a2db3b2001098db3dcdf037f6f1dbc9e1f5648d8a4b8669e26a6da00->enter($__internal_24d5bf86a2db3b2001098db3dcdf037f6f1dbc9e1f5648d8a4b8669e26a6da00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_130f899713fe07a01c96abf5d2ac70ce0911ad4677aabf209504baeddaa87794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130f899713fe07a01c96abf5d2ac70ce0911ad4677aabf209504baeddaa87794->enter($__internal_130f899713fe07a01c96abf5d2ac70ce0911ad4677aabf209504baeddaa87794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_24d5bf86a2db3b2001098db3dcdf037f6f1dbc9e1f5648d8a4b8669e26a6da00->leave($__internal_24d5bf86a2db3b2001098db3dcdf037f6f1dbc9e1f5648d8a4b8669e26a6da00_prof);

        
        $__internal_130f899713fe07a01c96abf5d2ac70ce0911ad4677aabf209504baeddaa87794->leave($__internal_130f899713fe07a01c96abf5d2ac70ce0911ad4677aabf209504baeddaa87794_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
