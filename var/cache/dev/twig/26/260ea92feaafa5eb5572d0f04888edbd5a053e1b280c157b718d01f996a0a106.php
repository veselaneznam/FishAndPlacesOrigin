<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8f59778a4a38334bcb2505d919215169e7692ca3d02a1980f7a7ab89c2208144 extends Twig_Template
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
        $__internal_a2e5a6d05cbcfb6d87ae53263e9b5b662ee9d08d13e2857fda1ab8b81e2789f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e5a6d05cbcfb6d87ae53263e9b5b662ee9d08d13e2857fda1ab8b81e2789f4->enter($__internal_a2e5a6d05cbcfb6d87ae53263e9b5b662ee9d08d13e2857fda1ab8b81e2789f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0144c0ef1c3f9db5692158ed664e6635710ecb169a23505f3ea03db3c2eb3027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0144c0ef1c3f9db5692158ed664e6635710ecb169a23505f3ea03db3c2eb3027->enter($__internal_0144c0ef1c3f9db5692158ed664e6635710ecb169a23505f3ea03db3c2eb3027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a2e5a6d05cbcfb6d87ae53263e9b5b662ee9d08d13e2857fda1ab8b81e2789f4->leave($__internal_a2e5a6d05cbcfb6d87ae53263e9b5b662ee9d08d13e2857fda1ab8b81e2789f4_prof);

        
        $__internal_0144c0ef1c3f9db5692158ed664e6635710ecb169a23505f3ea03db3c2eb3027->leave($__internal_0144c0ef1c3f9db5692158ed664e6635710ecb169a23505f3ea03db3c2eb3027_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
