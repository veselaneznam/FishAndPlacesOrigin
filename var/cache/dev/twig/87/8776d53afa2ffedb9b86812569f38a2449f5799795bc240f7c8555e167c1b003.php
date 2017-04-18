<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_2560045784761d78b2542d229be38390fd159259a3a6229f28e5a3cca5cf3f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_04aa303d54c7a6fba193f4bad375016f75b0bede8c56732347b41bbad246b711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04aa303d54c7a6fba193f4bad375016f75b0bede8c56732347b41bbad246b711->enter($__internal_04aa303d54c7a6fba193f4bad375016f75b0bede8c56732347b41bbad246b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_c14bfb8409f78e5542c31cfe9d1f5ba79f95607da5813a63614da941ca63eeab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14bfb8409f78e5542c31cfe9d1f5ba79f95607da5813a63614da941ca63eeab->enter($__internal_c14bfb8409f78e5542c31cfe9d1f5ba79f95607da5813a63614da941ca63eeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04aa303d54c7a6fba193f4bad375016f75b0bede8c56732347b41bbad246b711->leave($__internal_04aa303d54c7a6fba193f4bad375016f75b0bede8c56732347b41bbad246b711_prof);

        
        $__internal_c14bfb8409f78e5542c31cfe9d1f5ba79f95607da5813a63614da941ca63eeab->leave($__internal_c14bfb8409f78e5542c31cfe9d1f5ba79f95607da5813a63614da941ca63eeab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c94480db0bc2f832655d604963a2e2108646314cbf4fba4305acbca3a0ff3dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c94480db0bc2f832655d604963a2e2108646314cbf4fba4305acbca3a0ff3dd9->enter($__internal_c94480db0bc2f832655d604963a2e2108646314cbf4fba4305acbca3a0ff3dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_be328dde5677315c22338cd2d2b6ac0fdb7f72771f08de77e26090d53c7f578f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be328dde5677315c22338cd2d2b6ac0fdb7f72771f08de77e26090d53c7f578f->enter($__internal_be328dde5677315c22338cd2d2b6ac0fdb7f72771f08de77e26090d53c7f578f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_be328dde5677315c22338cd2d2b6ac0fdb7f72771f08de77e26090d53c7f578f->leave($__internal_be328dde5677315c22338cd2d2b6ac0fdb7f72771f08de77e26090d53c7f578f_prof);

        
        $__internal_c94480db0bc2f832655d604963a2e2108646314cbf4fba4305acbca3a0ff3dd9->leave($__internal_c94480db0bc2f832655d604963a2e2108646314cbf4fba4305acbca3a0ff3dd9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
