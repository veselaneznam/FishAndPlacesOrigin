<?php

/* @Admin/dam/search.html.twig */
class __TwigTemplate_f96e45d97c137552b90ca9a5c8fda0a6422c6f0b796ac1b857a21a68c41cf0dd extends Twig_Template
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
        $__internal_f2490e906a0c360a6e59307af4c96c82f475acde4fb94aaf7f45b617754706cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2490e906a0c360a6e59307af4c96c82f475acde4fb94aaf7f45b617754706cf->enter($__internal_f2490e906a0c360a6e59307af4c96c82f475acde4fb94aaf7f45b617754706cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/search.html.twig"));

        $__internal_972220a1012679605953ad69010d7ca83b3c6f3163a53903331d5a2a49ce5e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972220a1012679605953ad69010d7ca83b3c6f3163a53903331d5a2a49ce5e8a->enter($__internal_972220a1012679605953ad69010d7ca83b3c6f3163a53903331d5a2a49ce5e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/search.html.twig"));

        // line 1
        echo "<h3>Filters</h3>
<form class=\"form-inline\" method=\"post\">

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'widget');
        echo "

</form>
";
        
        $__internal_f2490e906a0c360a6e59307af4c96c82f475acde4fb94aaf7f45b617754706cf->leave($__internal_f2490e906a0c360a6e59307af4c96c82f475acde4fb94aaf7f45b617754706cf_prof);

        
        $__internal_972220a1012679605953ad69010d7ca83b3c6f3163a53903331d5a2a49ce5e8a->leave($__internal_972220a1012679605953ad69010d7ca83b3c6f3163a53903331d5a2a49ce5e8a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/dam/search.html.twig";
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
        return new Twig_Source("<h3>Filters</h3>
<form class=\"form-inline\" method=\"post\">

    {{ form_widget(searchForm) }}

</form>
", "@Admin/dam/search.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/dam/search.html.twig");
    }
}
