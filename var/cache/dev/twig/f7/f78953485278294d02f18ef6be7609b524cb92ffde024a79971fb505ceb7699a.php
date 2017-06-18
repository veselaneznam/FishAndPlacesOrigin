<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_76746737a49e01debce8b5f1d85413c61466459ebd7624aa231e172236f0c354 extends Twig_Template
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
        $__internal_6b0698ea11745d4806655102156cfb72ee37f4c5878fd9db9dca22cba8ca4fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0698ea11745d4806655102156cfb72ee37f4c5878fd9db9dca22cba8ca4fc9->enter($__internal_6b0698ea11745d4806655102156cfb72ee37f4c5878fd9db9dca22cba8ca4fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_5ee3fd0929f4789d23cfa9309edd98dca5ba49d1c415cba1d191a3b90326ba61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee3fd0929f4789d23cfa9309edd98dca5ba49d1c415cba1d191a3b90326ba61->enter($__internal_5ee3fd0929f4789d23cfa9309edd98dca5ba49d1c415cba1d191a3b90326ba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_6b0698ea11745d4806655102156cfb72ee37f4c5878fd9db9dca22cba8ca4fc9->leave($__internal_6b0698ea11745d4806655102156cfb72ee37f4c5878fd9db9dca22cba8ca4fc9_prof);

        
        $__internal_5ee3fd0929f4789d23cfa9309edd98dca5ba49d1c415cba1d191a3b90326ba61->leave($__internal_5ee3fd0929f4789d23cfa9309edd98dca5ba49d1c415cba1d191a3b90326ba61_prof);

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
", "@Twig/Exception/exception.atom.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
