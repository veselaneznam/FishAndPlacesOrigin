<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_2fe6a8def64c8d9f19bc8a6f27a5a4f94ccf5c7b4eefa06e9c76265a3af3f80b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_2a977981881014775076cecd566b7cfe624e5dcf1f0975e98d13ea9bb9345d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a977981881014775076cecd566b7cfe624e5dcf1f0975e98d13ea9bb9345d78->enter($__internal_2a977981881014775076cecd566b7cfe624e5dcf1f0975e98d13ea9bb9345d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_3f94bd4fca56c469c92164d31ce91e6697f280c5961b33d378c5ea053189b178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f94bd4fca56c469c92164d31ce91e6697f280c5961b33d378c5ea053189b178->enter($__internal_3f94bd4fca56c469c92164d31ce91e6697f280c5961b33d378c5ea053189b178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a977981881014775076cecd566b7cfe624e5dcf1f0975e98d13ea9bb9345d78->leave($__internal_2a977981881014775076cecd566b7cfe624e5dcf1f0975e98d13ea9bb9345d78_prof);

        
        $__internal_3f94bd4fca56c469c92164d31ce91e6697f280c5961b33d378c5ea053189b178->leave($__internal_3f94bd4fca56c469c92164d31ce91e6697f280c5961b33d378c5ea053189b178_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a6a5e22bc96e93e79e29d73e1e83e3297d707e725df2ca91a16489e5036395a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6a5e22bc96e93e79e29d73e1e83e3297d707e725df2ca91a16489e5036395a->enter($__internal_5a6a5e22bc96e93e79e29d73e1e83e3297d707e725df2ca91a16489e5036395a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8414cc010451f2d46deb2ee008c80d2ec1b834f209eef4bc65bfcd1ac96a5fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8414cc010451f2d46deb2ee008c80d2ec1b834f209eef4bc65bfcd1ac96a5fbf->enter($__internal_8414cc010451f2d46deb2ee008c80d2ec1b834f209eef4bc65bfcd1ac96a5fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_8414cc010451f2d46deb2ee008c80d2ec1b834f209eef4bc65bfcd1ac96a5fbf->leave($__internal_8414cc010451f2d46deb2ee008c80d2ec1b834f209eef4bc65bfcd1ac96a5fbf_prof);

        
        $__internal_5a6a5e22bc96e93e79e29d73e1e83e3297d707e725df2ca91a16489e5036395a->leave($__internal_5a6a5e22bc96e93e79e29d73e1e83e3297d707e725df2ca91a16489e5036395a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
