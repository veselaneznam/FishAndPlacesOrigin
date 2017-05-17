<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a5675288b72ee53838e83df0340ad0413103c52cf421ef21784db92ceb479904 extends Twig_Template
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
        $__internal_a0d36b589bfe55be67245bd4c0f85b6d6215dc5e9baac868dd9461d0d6a0340a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d36b589bfe55be67245bd4c0f85b6d6215dc5e9baac868dd9461d0d6a0340a->enter($__internal_a0d36b589bfe55be67245bd4c0f85b6d6215dc5e9baac868dd9461d0d6a0340a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_7497290c5af5c958fd36a61ea9223dac16b134228ea56c89b99fc367cbba63fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7497290c5af5c958fd36a61ea9223dac16b134228ea56c89b99fc367cbba63fe->enter($__internal_7497290c5af5c958fd36a61ea9223dac16b134228ea56c89b99fc367cbba63fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a0d36b589bfe55be67245bd4c0f85b6d6215dc5e9baac868dd9461d0d6a0340a->leave($__internal_a0d36b589bfe55be67245bd4c0f85b6d6215dc5e9baac868dd9461d0d6a0340a_prof);

        
        $__internal_7497290c5af5c958fd36a61ea9223dac16b134228ea56c89b99fc367cbba63fe->leave($__internal_7497290c5af5c958fd36a61ea9223dac16b134228ea56c89b99fc367cbba63fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
