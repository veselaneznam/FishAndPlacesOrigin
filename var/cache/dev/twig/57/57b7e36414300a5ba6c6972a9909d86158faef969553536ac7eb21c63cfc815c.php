<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_095b016fe04cb6f01dc94f6e2b5abf6eff9653f2b56d5d01f2ec2ed44e434c1c extends Twig_Template
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
        $__internal_b00c6e10042f9e86527bec373f885acf30b1b30e481d3e381522f7d3b9c09b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00c6e10042f9e86527bec373f885acf30b1b30e481d3e381522f7d3b9c09b7c->enter($__internal_b00c6e10042f9e86527bec373f885acf30b1b30e481d3e381522f7d3b9c09b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_76a2a794f867e9d4f13927dcc5191ce4cffd423729c7ae2a232fd1848ebc6e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a2a794f867e9d4f13927dcc5191ce4cffd423729c7ae2a232fd1848ebc6e89->enter($__internal_76a2a794f867e9d4f13927dcc5191ce4cffd423729c7ae2a232fd1848ebc6e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b00c6e10042f9e86527bec373f885acf30b1b30e481d3e381522f7d3b9c09b7c->leave($__internal_b00c6e10042f9e86527bec373f885acf30b1b30e481d3e381522f7d3b9c09b7c_prof);

        
        $__internal_76a2a794f867e9d4f13927dcc5191ce4cffd423729c7ae2a232fd1848ebc6e89->leave($__internal_76a2a794f867e9d4f13927dcc5191ce4cffd423729c7ae2a232fd1848ebc6e89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
