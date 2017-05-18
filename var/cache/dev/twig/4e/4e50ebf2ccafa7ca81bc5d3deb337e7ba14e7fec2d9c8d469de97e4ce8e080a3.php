<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8e3728b7867b472a9653db4a3624c4ff706ae05a4cecbb66507ea031435914ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_804a21a446bbcf1f01193489fadeda3bc22f9185d2f34ae60dc621d62498c111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804a21a446bbcf1f01193489fadeda3bc22f9185d2f34ae60dc621d62498c111->enter($__internal_804a21a446bbcf1f01193489fadeda3bc22f9185d2f34ae60dc621d62498c111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bb9d6ef9792ec815176d7d61c3df8917c1c6f10308380c86c962683435b4ec40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9d6ef9792ec815176d7d61c3df8917c1c6f10308380c86c962683435b4ec40->enter($__internal_bb9d6ef9792ec815176d7d61c3df8917c1c6f10308380c86c962683435b4ec40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_804a21a446bbcf1f01193489fadeda3bc22f9185d2f34ae60dc621d62498c111->leave($__internal_804a21a446bbcf1f01193489fadeda3bc22f9185d2f34ae60dc621d62498c111_prof);

        
        $__internal_bb9d6ef9792ec815176d7d61c3df8917c1c6f10308380c86c962683435b4ec40->leave($__internal_bb9d6ef9792ec815176d7d61c3df8917c1c6f10308380c86c962683435b4ec40_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa64c3909bb17dfbacbb7f7113d8d8cbb5e2710560a3a9923504b8a7aed8b8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa64c3909bb17dfbacbb7f7113d8d8cbb5e2710560a3a9923504b8a7aed8b8fa->enter($__internal_aa64c3909bb17dfbacbb7f7113d8d8cbb5e2710560a3a9923504b8a7aed8b8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_007ccbdfa0fff63aecb755bd9f761ff7d0a85d7da945de36b506854d3dcae31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007ccbdfa0fff63aecb755bd9f761ff7d0a85d7da945de36b506854d3dcae31d->enter($__internal_007ccbdfa0fff63aecb755bd9f761ff7d0a85d7da945de36b506854d3dcae31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_007ccbdfa0fff63aecb755bd9f761ff7d0a85d7da945de36b506854d3dcae31d->leave($__internal_007ccbdfa0fff63aecb755bd9f761ff7d0a85d7da945de36b506854d3dcae31d_prof);

        
        $__internal_aa64c3909bb17dfbacbb7f7113d8d8cbb5e2710560a3a9923504b8a7aed8b8fa->leave($__internal_aa64c3909bb17dfbacbb7f7113d8d8cbb5e2710560a3a9923504b8a7aed8b8fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7940cf123b279eac23969d1169b712a0a189af5f46cde2e9cbe242605f7e2ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7940cf123b279eac23969d1169b712a0a189af5f46cde2e9cbe242605f7e2ad0->enter($__internal_7940cf123b279eac23969d1169b712a0a189af5f46cde2e9cbe242605f7e2ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95a1015115c717f2a7b45dc6369dbdec409a06aca87bac2b26fec4e156b32ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a1015115c717f2a7b45dc6369dbdec409a06aca87bac2b26fec4e156b32ecd->enter($__internal_95a1015115c717f2a7b45dc6369dbdec409a06aca87bac2b26fec4e156b32ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_95a1015115c717f2a7b45dc6369dbdec409a06aca87bac2b26fec4e156b32ecd->leave($__internal_95a1015115c717f2a7b45dc6369dbdec409a06aca87bac2b26fec4e156b32ecd_prof);

        
        $__internal_7940cf123b279eac23969d1169b712a0a189af5f46cde2e9cbe242605f7e2ad0->leave($__internal_7940cf123b279eac23969d1169b712a0a189af5f46cde2e9cbe242605f7e2ad0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e52c766fcee6998c56d1b16b533530ad52cd50b0ef14bad77552bf6f0050358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e52c766fcee6998c56d1b16b533530ad52cd50b0ef14bad77552bf6f0050358->enter($__internal_0e52c766fcee6998c56d1b16b533530ad52cd50b0ef14bad77552bf6f0050358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4924414c3f870812d25ed1e8a09533773d0015f4f3370de10d9f6c7ed380c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4924414c3f870812d25ed1e8a09533773d0015f4f3370de10d9f6c7ed380c66->enter($__internal_f4924414c3f870812d25ed1e8a09533773d0015f4f3370de10d9f6c7ed380c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4924414c3f870812d25ed1e8a09533773d0015f4f3370de10d9f6c7ed380c66->leave($__internal_f4924414c3f870812d25ed1e8a09533773d0015f4f3370de10d9f6c7ed380c66_prof);

        
        $__internal_0e52c766fcee6998c56d1b16b533530ad52cd50b0ef14bad77552bf6f0050358->leave($__internal_0e52c766fcee6998c56d1b16b533530ad52cd50b0ef14bad77552bf6f0050358_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
