<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a1cfa07c9579e527a6b2cb86e51773cf1be9a3dce326a96ab69f3eb45b858d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_c61be24461aef5703592364027bcb32f1e41268d667b1856919437a939dbd1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61be24461aef5703592364027bcb32f1e41268d667b1856919437a939dbd1d5->enter($__internal_c61be24461aef5703592364027bcb32f1e41268d667b1856919437a939dbd1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_67fb9826f30f233fe889a39c8c6824e3be76e2271891075def274afeaefccd70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fb9826f30f233fe889a39c8c6824e3be76e2271891075def274afeaefccd70->enter($__internal_67fb9826f30f233fe889a39c8c6824e3be76e2271891075def274afeaefccd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c61be24461aef5703592364027bcb32f1e41268d667b1856919437a939dbd1d5->leave($__internal_c61be24461aef5703592364027bcb32f1e41268d667b1856919437a939dbd1d5_prof);

        
        $__internal_67fb9826f30f233fe889a39c8c6824e3be76e2271891075def274afeaefccd70->leave($__internal_67fb9826f30f233fe889a39c8c6824e3be76e2271891075def274afeaefccd70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_139eb4d1fdac0e91904b173a6d1bb4f541d9172e92fea4dbbcc6fe2eb56b313f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139eb4d1fdac0e91904b173a6d1bb4f541d9172e92fea4dbbcc6fe2eb56b313f->enter($__internal_139eb4d1fdac0e91904b173a6d1bb4f541d9172e92fea4dbbcc6fe2eb56b313f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fbd5f37900f76dc73ba2037aef2e21778f1cbe806abf7f86019aacee2fad8cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd5f37900f76dc73ba2037aef2e21778f1cbe806abf7f86019aacee2fad8cb3->enter($__internal_fbd5f37900f76dc73ba2037aef2e21778f1cbe806abf7f86019aacee2fad8cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_fbd5f37900f76dc73ba2037aef2e21778f1cbe806abf7f86019aacee2fad8cb3->leave($__internal_fbd5f37900f76dc73ba2037aef2e21778f1cbe806abf7f86019aacee2fad8cb3_prof);

        
        $__internal_139eb4d1fdac0e91904b173a6d1bb4f541d9172e92fea4dbbcc6fe2eb56b313f->leave($__internal_139eb4d1fdac0e91904b173a6d1bb4f541d9172e92fea4dbbcc6fe2eb56b313f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
