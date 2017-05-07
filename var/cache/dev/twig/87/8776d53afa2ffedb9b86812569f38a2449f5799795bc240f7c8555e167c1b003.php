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
        $__internal_f25e5637e76e269396abd3ba801a58d9b244015d222fba5e23ea2b18eccf90f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25e5637e76e269396abd3ba801a58d9b244015d222fba5e23ea2b18eccf90f8->enter($__internal_f25e5637e76e269396abd3ba801a58d9b244015d222fba5e23ea2b18eccf90f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_b8403c9d14cce22014f330119befcb1a2b1fde3dc9344511a43a4271dd50abcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8403c9d14cce22014f330119befcb1a2b1fde3dc9344511a43a4271dd50abcc->enter($__internal_b8403c9d14cce22014f330119befcb1a2b1fde3dc9344511a43a4271dd50abcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25e5637e76e269396abd3ba801a58d9b244015d222fba5e23ea2b18eccf90f8->leave($__internal_f25e5637e76e269396abd3ba801a58d9b244015d222fba5e23ea2b18eccf90f8_prof);

        
        $__internal_b8403c9d14cce22014f330119befcb1a2b1fde3dc9344511a43a4271dd50abcc->leave($__internal_b8403c9d14cce22014f330119befcb1a2b1fde3dc9344511a43a4271dd50abcc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df20e206e95e5f648c94b5be6047c3f497b7a09a4543cced994ffa279779c0b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df20e206e95e5f648c94b5be6047c3f497b7a09a4543cced994ffa279779c0b9->enter($__internal_df20e206e95e5f648c94b5be6047c3f497b7a09a4543cced994ffa279779c0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e004771a10306c1cb94650cd7b65bcbed571429e46645b15d813fa10e170222b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e004771a10306c1cb94650cd7b65bcbed571429e46645b15d813fa10e170222b->enter($__internal_e004771a10306c1cb94650cd7b65bcbed571429e46645b15d813fa10e170222b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_e004771a10306c1cb94650cd7b65bcbed571429e46645b15d813fa10e170222b->leave($__internal_e004771a10306c1cb94650cd7b65bcbed571429e46645b15d813fa10e170222b_prof);

        
        $__internal_df20e206e95e5f648c94b5be6047c3f497b7a09a4543cced994ffa279779c0b9->leave($__internal_df20e206e95e5f648c94b5be6047c3f497b7a09a4543cced994ffa279779c0b9_prof);

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
