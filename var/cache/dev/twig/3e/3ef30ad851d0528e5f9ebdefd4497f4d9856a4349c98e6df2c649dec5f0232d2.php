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
        $__internal_5795d5425f211b56947cfe88ae82aaa10a51795754cd34d7e86206c1f89d8087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5795d5425f211b56947cfe88ae82aaa10a51795754cd34d7e86206c1f89d8087->enter($__internal_5795d5425f211b56947cfe88ae82aaa10a51795754cd34d7e86206c1f89d8087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_1eddf43b68a1db0d4cd2b88faf28e7ecfcd404d41cc78d1d2740219be530914c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eddf43b68a1db0d4cd2b88faf28e7ecfcd404d41cc78d1d2740219be530914c->enter($__internal_1eddf43b68a1db0d4cd2b88faf28e7ecfcd404d41cc78d1d2740219be530914c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5795d5425f211b56947cfe88ae82aaa10a51795754cd34d7e86206c1f89d8087->leave($__internal_5795d5425f211b56947cfe88ae82aaa10a51795754cd34d7e86206c1f89d8087_prof);

        
        $__internal_1eddf43b68a1db0d4cd2b88faf28e7ecfcd404d41cc78d1d2740219be530914c->leave($__internal_1eddf43b68a1db0d4cd2b88faf28e7ecfcd404d41cc78d1d2740219be530914c_prof);

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
