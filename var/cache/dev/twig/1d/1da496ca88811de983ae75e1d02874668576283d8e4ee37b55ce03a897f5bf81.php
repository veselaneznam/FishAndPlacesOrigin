<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4a1eda53d227a3953bc1a8e3f17dc4b378a2510d717726e4154575314baa186b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc40197c39f51a9679ef1608274caec7fd681302a60bb66423e2babee7344e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc40197c39f51a9679ef1608274caec7fd681302a60bb66423e2babee7344e8d->enter($__internal_bc40197c39f51a9679ef1608274caec7fd681302a60bb66423e2babee7344e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d34e9a11c2bce42428f660153e52ed0f34323b6c77029783d60670f69ba4777d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34e9a11c2bce42428f660153e52ed0f34323b6c77029783d60670f69ba4777d->enter($__internal_d34e9a11c2bce42428f660153e52ed0f34323b6c77029783d60670f69ba4777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc40197c39f51a9679ef1608274caec7fd681302a60bb66423e2babee7344e8d->leave($__internal_bc40197c39f51a9679ef1608274caec7fd681302a60bb66423e2babee7344e8d_prof);

        
        $__internal_d34e9a11c2bce42428f660153e52ed0f34323b6c77029783d60670f69ba4777d->leave($__internal_d34e9a11c2bce42428f660153e52ed0f34323b6c77029783d60670f69ba4777d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94b17e2e6c02415e5feba0acf4588856d348ff412f40481a7a88154e464360fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b17e2e6c02415e5feba0acf4588856d348ff412f40481a7a88154e464360fd->enter($__internal_94b17e2e6c02415e5feba0acf4588856d348ff412f40481a7a88154e464360fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75730d2b34d8da2453ad42c3ac52893b4aa5744790856826f152d7c2ed9c5549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75730d2b34d8da2453ad42c3ac52893b4aa5744790856826f152d7c2ed9c5549->enter($__internal_75730d2b34d8da2453ad42c3ac52893b4aa5744790856826f152d7c2ed9c5549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_75730d2b34d8da2453ad42c3ac52893b4aa5744790856826f152d7c2ed9c5549->leave($__internal_75730d2b34d8da2453ad42c3ac52893b4aa5744790856826f152d7c2ed9c5549_prof);

        
        $__internal_94b17e2e6c02415e5feba0acf4588856d348ff412f40481a7a88154e464360fd->leave($__internal_94b17e2e6c02415e5feba0acf4588856d348ff412f40481a7a88154e464360fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_95eb519ebeb8c54e87320da2c151fb86457146c77510efd5284b135daf178080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95eb519ebeb8c54e87320da2c151fb86457146c77510efd5284b135daf178080->enter($__internal_95eb519ebeb8c54e87320da2c151fb86457146c77510efd5284b135daf178080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90e3ce86c0363a4922752cf410e2396060d6e6d57b7a00cc8945c9b3b0d0a535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e3ce86c0363a4922752cf410e2396060d6e6d57b7a00cc8945c9b3b0d0a535->enter($__internal_90e3ce86c0363a4922752cf410e2396060d6e6d57b7a00cc8945c9b3b0d0a535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_90e3ce86c0363a4922752cf410e2396060d6e6d57b7a00cc8945c9b3b0d0a535->leave($__internal_90e3ce86c0363a4922752cf410e2396060d6e6d57b7a00cc8945c9b3b0d0a535_prof);

        
        $__internal_95eb519ebeb8c54e87320da2c151fb86457146c77510efd5284b135daf178080->leave($__internal_95eb519ebeb8c54e87320da2c151fb86457146c77510efd5284b135daf178080_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
