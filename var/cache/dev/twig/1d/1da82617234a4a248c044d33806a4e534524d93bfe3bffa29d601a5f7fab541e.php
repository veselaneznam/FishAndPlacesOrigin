<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_4ca865f66c2cd260b40aaaf239495a9155f69f97615bf843da03f1525fba62f3 extends Twig_Template
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
        $__internal_0685a0fc54c85f61cfe187eb760db026178c395e09975e3af7d3689ac48ff785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0685a0fc54c85f61cfe187eb760db026178c395e09975e3af7d3689ac48ff785->enter($__internal_0685a0fc54c85f61cfe187eb760db026178c395e09975e3af7d3689ac48ff785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_561f989cafe15d5973d896c2b49d60978f42775b32bd42a06d7912e1ed7dd0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561f989cafe15d5973d896c2b49d60978f42775b32bd42a06d7912e1ed7dd0a5->enter($__internal_561f989cafe15d5973d896c2b49d60978f42775b32bd42a06d7912e1ed7dd0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0685a0fc54c85f61cfe187eb760db026178c395e09975e3af7d3689ac48ff785->leave($__internal_0685a0fc54c85f61cfe187eb760db026178c395e09975e3af7d3689ac48ff785_prof);

        
        $__internal_561f989cafe15d5973d896c2b49d60978f42775b32bd42a06d7912e1ed7dd0a5->leave($__internal_561f989cafe15d5973d896c2b49d60978f42775b32bd42a06d7912e1ed7dd0a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
