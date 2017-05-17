<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c4ecaa5bfac709219189aec5c039a0ac2839e4676ed5932e1c3a19b33654d8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_bd0bbf837258e905a6b2956a5abb1eaa0710332ad3e0f2e443301bdfb46631c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0bbf837258e905a6b2956a5abb1eaa0710332ad3e0f2e443301bdfb46631c3->enter($__internal_bd0bbf837258e905a6b2956a5abb1eaa0710332ad3e0f2e443301bdfb46631c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_063f0489ff3be6f7c5e23e476857d9185710e21d64a53c1437e5dc7cb01d374c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063f0489ff3be6f7c5e23e476857d9185710e21d64a53c1437e5dc7cb01d374c->enter($__internal_063f0489ff3be6f7c5e23e476857d9185710e21d64a53c1437e5dc7cb01d374c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd0bbf837258e905a6b2956a5abb1eaa0710332ad3e0f2e443301bdfb46631c3->leave($__internal_bd0bbf837258e905a6b2956a5abb1eaa0710332ad3e0f2e443301bdfb46631c3_prof);

        
        $__internal_063f0489ff3be6f7c5e23e476857d9185710e21d64a53c1437e5dc7cb01d374c->leave($__internal_063f0489ff3be6f7c5e23e476857d9185710e21d64a53c1437e5dc7cb01d374c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5437838cc5e8d2d5d095175b4073dbe62280f75a19f11b4e3e488f47708dbaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5437838cc5e8d2d5d095175b4073dbe62280f75a19f11b4e3e488f47708dbaf->enter($__internal_f5437838cc5e8d2d5d095175b4073dbe62280f75a19f11b4e3e488f47708dbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_81b3707725a73dae29d6b1505733f69f6a5fec7c1ed6323024e0bb619f6559ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b3707725a73dae29d6b1505733f69f6a5fec7c1ed6323024e0bb619f6559ff->enter($__internal_81b3707725a73dae29d6b1505733f69f6a5fec7c1ed6323024e0bb619f6559ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_81b3707725a73dae29d6b1505733f69f6a5fec7c1ed6323024e0bb619f6559ff->leave($__internal_81b3707725a73dae29d6b1505733f69f6a5fec7c1ed6323024e0bb619f6559ff_prof);

        
        $__internal_f5437838cc5e8d2d5d095175b4073dbe62280f75a19f11b4e3e488f47708dbaf->leave($__internal_f5437838cc5e8d2d5d095175b4073dbe62280f75a19f11b4e3e488f47708dbaf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
