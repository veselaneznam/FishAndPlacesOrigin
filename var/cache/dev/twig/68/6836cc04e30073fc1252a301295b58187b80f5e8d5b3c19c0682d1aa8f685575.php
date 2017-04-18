<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e1b4fc25ff77ecf1107a71466320a7b658311083842a75ba7b83c0d14467edfd extends Twig_Template
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
        $__internal_e4a68575af71097be02ad8e232ff72c8ff69d6a342d4e2bf5bdbd87d47ec2710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a68575af71097be02ad8e232ff72c8ff69d6a342d4e2bf5bdbd87d47ec2710->enter($__internal_e4a68575af71097be02ad8e232ff72c8ff69d6a342d4e2bf5bdbd87d47ec2710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2ad027a5f20d802c07b28c0e8ce53a879dfc3566b42d16a5e479d9a412c6b563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad027a5f20d802c07b28c0e8ce53a879dfc3566b42d16a5e479d9a412c6b563->enter($__internal_2ad027a5f20d802c07b28c0e8ce53a879dfc3566b42d16a5e479d9a412c6b563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e4a68575af71097be02ad8e232ff72c8ff69d6a342d4e2bf5bdbd87d47ec2710->leave($__internal_e4a68575af71097be02ad8e232ff72c8ff69d6a342d4e2bf5bdbd87d47ec2710_prof);

        
        $__internal_2ad027a5f20d802c07b28c0e8ce53a879dfc3566b42d16a5e479d9a412c6b563->leave($__internal_2ad027a5f20d802c07b28c0e8ce53a879dfc3566b42d16a5e479d9a412c6b563_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
