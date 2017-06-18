<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_fcae71dd865bd298a2dd8bd1274548d42cb9108bd3f1e48fc1bc1c755605e66d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10d72b17d572e3a19a9b2984575ce1b84c5c66b202f53a6c49de18e28c2b69e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d72b17d572e3a19a9b2984575ce1b84c5c66b202f53a6c49de18e28c2b69e1->enter($__internal_10d72b17d572e3a19a9b2984575ce1b84c5c66b202f53a6c49de18e28c2b69e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_6e06eba5cc512557ec5748c3dc2180151d105e2294efeda11b19e4e509d0c7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e06eba5cc512557ec5748c3dc2180151d105e2294efeda11b19e4e509d0c7ec->enter($__internal_6e06eba5cc512557ec5748c3dc2180151d105e2294efeda11b19e4e509d0c7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10d72b17d572e3a19a9b2984575ce1b84c5c66b202f53a6c49de18e28c2b69e1->leave($__internal_10d72b17d572e3a19a9b2984575ce1b84c5c66b202f53a6c49de18e28c2b69e1_prof);

        
        $__internal_6e06eba5cc512557ec5748c3dc2180151d105e2294efeda11b19e4e509d0c7ec->leave($__internal_6e06eba5cc512557ec5748c3dc2180151d105e2294efeda11b19e4e509d0c7ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e47f1d0cbcc10db36ef06732c287bc9ef7bdaf61c34bc86ab6f795bb68c70f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47f1d0cbcc10db36ef06732c287bc9ef7bdaf61c34bc86ab6f795bb68c70f9b->enter($__internal_e47f1d0cbcc10db36ef06732c287bc9ef7bdaf61c34bc86ab6f795bb68c70f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_52f1d300811a6fab4cd31d4e5edf8c16d2a545631d002f5cbcde3bd0f5f9c8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f1d300811a6fab4cd31d4e5edf8c16d2a545631d002f5cbcde3bd0f5f9c8b8->enter($__internal_52f1d300811a6fab4cd31d4e5edf8c16d2a545631d002f5cbcde3bd0f5f9c8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_52f1d300811a6fab4cd31d4e5edf8c16d2a545631d002f5cbcde3bd0f5f9c8b8->leave($__internal_52f1d300811a6fab4cd31d4e5edf8c16d2a545631d002f5cbcde3bd0f5f9c8b8_prof);

        
        $__internal_e47f1d0cbcc10db36ef06732c287bc9ef7bdaf61c34bc86ab6f795bb68c70f9b->leave($__internal_e47f1d0cbcc10db36ef06732c287bc9ef7bdaf61c34bc86ab6f795bb68c70f9b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
