<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_5eceace2b7bd45c269778acd1a9ed3f5b19ca888dd21b31efede7247b2a34468 extends Twig_Template
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
        $__internal_d69f684ec5f25423aea58c8cae9e733b8fb92d62b8ef1bc99e6492498e558d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69f684ec5f25423aea58c8cae9e733b8fb92d62b8ef1bc99e6492498e558d69->enter($__internal_d69f684ec5f25423aea58c8cae9e733b8fb92d62b8ef1bc99e6492498e558d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_3f4aab30d4afaca3996ad2744fe506ee0f8e6f4bdeaf05816e2dd331768bddb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4aab30d4afaca3996ad2744fe506ee0f8e6f4bdeaf05816e2dd331768bddb2->enter($__internal_3f4aab30d4afaca3996ad2744fe506ee0f8e6f4bdeaf05816e2dd331768bddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d69f684ec5f25423aea58c8cae9e733b8fb92d62b8ef1bc99e6492498e558d69->leave($__internal_d69f684ec5f25423aea58c8cae9e733b8fb92d62b8ef1bc99e6492498e558d69_prof);

        
        $__internal_3f4aab30d4afaca3996ad2744fe506ee0f8e6f4bdeaf05816e2dd331768bddb2->leave($__internal_3f4aab30d4afaca3996ad2744fe506ee0f8e6f4bdeaf05816e2dd331768bddb2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
