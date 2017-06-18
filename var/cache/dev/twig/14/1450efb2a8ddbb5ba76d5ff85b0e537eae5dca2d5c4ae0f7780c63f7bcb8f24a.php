<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_c4896cfff779b1674272c55817726238d5a79271866aac02a7f128ac8e1461a0 extends Twig_Template
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
        $__internal_013925fc72175f279b2be92d351146c2b6a148c5e455f9522d12b804d4602600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013925fc72175f279b2be92d351146c2b6a148c5e455f9522d12b804d4602600->enter($__internal_013925fc72175f279b2be92d351146c2b6a148c5e455f9522d12b804d4602600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_233f04aa77123add1af6f50c60412823b8f149f31d3198b48158f63c052e7fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233f04aa77123add1af6f50c60412823b8f149f31d3198b48158f63c052e7fbe->enter($__internal_233f04aa77123add1af6f50c60412823b8f149f31d3198b48158f63c052e7fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_013925fc72175f279b2be92d351146c2b6a148c5e455f9522d12b804d4602600->leave($__internal_013925fc72175f279b2be92d351146c2b6a148c5e455f9522d12b804d4602600_prof);

        
        $__internal_233f04aa77123add1af6f50c60412823b8f149f31d3198b48158f63c052e7fbe->leave($__internal_233f04aa77123add1af6f50c60412823b8f149f31d3198b48158f63c052e7fbe_prof);

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
", "@Twig/Exception/error.txt.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
