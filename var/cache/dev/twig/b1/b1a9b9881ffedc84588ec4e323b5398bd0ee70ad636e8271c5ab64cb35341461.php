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
        $__internal_9615d6402ef796f5c179b5a43a8d76a0ec9ed4c1534e955d0a35cbc66936e003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9615d6402ef796f5c179b5a43a8d76a0ec9ed4c1534e955d0a35cbc66936e003->enter($__internal_9615d6402ef796f5c179b5a43a8d76a0ec9ed4c1534e955d0a35cbc66936e003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_4e1996d0ca5dfabc8f0232bbd9c9d31dbd0749fc04f9eb0cdef966227022ae74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1996d0ca5dfabc8f0232bbd9c9d31dbd0749fc04f9eb0cdef966227022ae74->enter($__internal_4e1996d0ca5dfabc8f0232bbd9c9d31dbd0749fc04f9eb0cdef966227022ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_9615d6402ef796f5c179b5a43a8d76a0ec9ed4c1534e955d0a35cbc66936e003->leave($__internal_9615d6402ef796f5c179b5a43a8d76a0ec9ed4c1534e955d0a35cbc66936e003_prof);

        
        $__internal_4e1996d0ca5dfabc8f0232bbd9c9d31dbd0749fc04f9eb0cdef966227022ae74->leave($__internal_4e1996d0ca5dfabc8f0232bbd9c9d31dbd0749fc04f9eb0cdef966227022ae74_prof);

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
