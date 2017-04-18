<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_906110ff2277d3b8f7803393585d0bf50d854eeee2d38240765a8b251a726754 extends Twig_Template
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
        $__internal_36af549a7536eaf105b81a5c3e773dfe2e8f7eca6ec695dc0d9e747ed39addf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36af549a7536eaf105b81a5c3e773dfe2e8f7eca6ec695dc0d9e747ed39addf6->enter($__internal_36af549a7536eaf105b81a5c3e773dfe2e8f7eca6ec695dc0d9e747ed39addf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b3a867b883d178800401091b6ceeef1015f2d9391ead8d9a6896ba1d4737a967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a867b883d178800401091b6ceeef1015f2d9391ead8d9a6896ba1d4737a967->enter($__internal_b3a867b883d178800401091b6ceeef1015f2d9391ead8d9a6896ba1d4737a967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_36af549a7536eaf105b81a5c3e773dfe2e8f7eca6ec695dc0d9e747ed39addf6->leave($__internal_36af549a7536eaf105b81a5c3e773dfe2e8f7eca6ec695dc0d9e747ed39addf6_prof);

        
        $__internal_b3a867b883d178800401091b6ceeef1015f2d9391ead8d9a6896ba1d4737a967->leave($__internal_b3a867b883d178800401091b6ceeef1015f2d9391ead8d9a6896ba1d4737a967_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
