<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_ff6c84c4da37963d18cfe900065a5fdff7d9787c4df754de8cdf160f1c69ae8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_6297c558086fec41e3d4137515969613465999927109a0ec76d88be6e78c8212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6297c558086fec41e3d4137515969613465999927109a0ec76d88be6e78c8212->enter($__internal_6297c558086fec41e3d4137515969613465999927109a0ec76d88be6e78c8212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_4e94ae2b8b9aee2e290b6e1cc82a78e6addaad83b50aa5904236ff367a0a0e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e94ae2b8b9aee2e290b6e1cc82a78e6addaad83b50aa5904236ff367a0a0e2d->enter($__internal_4e94ae2b8b9aee2e290b6e1cc82a78e6addaad83b50aa5904236ff367a0a0e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6297c558086fec41e3d4137515969613465999927109a0ec76d88be6e78c8212->leave($__internal_6297c558086fec41e3d4137515969613465999927109a0ec76d88be6e78c8212_prof);

        
        $__internal_4e94ae2b8b9aee2e290b6e1cc82a78e6addaad83b50aa5904236ff367a0a0e2d->leave($__internal_4e94ae2b8b9aee2e290b6e1cc82a78e6addaad83b50aa5904236ff367a0a0e2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98b3a97a510866f589c8787c69500687b1dbb29bbb3f364014b58e277d75f15e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b3a97a510866f589c8787c69500687b1dbb29bbb3f364014b58e277d75f15e->enter($__internal_98b3a97a510866f589c8787c69500687b1dbb29bbb3f364014b58e277d75f15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_804ffbb3312e717ccb31d126c3e9e69c8432ab525b49d690e3c992874d8a5fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804ffbb3312e717ccb31d126c3e9e69c8432ab525b49d690e3c992874d8a5fd8->enter($__internal_804ffbb3312e717ccb31d126c3e9e69c8432ab525b49d690e3c992874d8a5fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_804ffbb3312e717ccb31d126c3e9e69c8432ab525b49d690e3c992874d8a5fd8->leave($__internal_804ffbb3312e717ccb31d126c3e9e69c8432ab525b49d690e3c992874d8a5fd8_prof);

        
        $__internal_98b3a97a510866f589c8787c69500687b1dbb29bbb3f364014b58e277d75f15e->leave($__internal_98b3a97a510866f589c8787c69500687b1dbb29bbb3f364014b58e277d75f15e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
