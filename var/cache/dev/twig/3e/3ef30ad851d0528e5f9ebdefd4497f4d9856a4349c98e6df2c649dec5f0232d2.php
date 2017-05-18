<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ea1da8fe1d6b0740cba52de770635920984045ab240468f15ed6d57dc114f03d extends Twig_Template
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
        $__internal_27a0c63dffb07deb425bbc7c89c6121aa6fb481e7050ffadd74891e7c2709ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a0c63dffb07deb425bbc7c89c6121aa6fb481e7050ffadd74891e7c2709ce6->enter($__internal_27a0c63dffb07deb425bbc7c89c6121aa6fb481e7050ffadd74891e7c2709ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_6ae9445b7a069d82d93cf25014ad17653085274c81ef169cc8e0321f071c2477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae9445b7a069d82d93cf25014ad17653085274c81ef169cc8e0321f071c2477->enter($__internal_6ae9445b7a069d82d93cf25014ad17653085274c81ef169cc8e0321f071c2477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_27a0c63dffb07deb425bbc7c89c6121aa6fb481e7050ffadd74891e7c2709ce6->leave($__internal_27a0c63dffb07deb425bbc7c89c6121aa6fb481e7050ffadd74891e7c2709ce6_prof);

        
        $__internal_6ae9445b7a069d82d93cf25014ad17653085274c81ef169cc8e0321f071c2477->leave($__internal_6ae9445b7a069d82d93cf25014ad17653085274c81ef169cc8e0321f071c2477_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
