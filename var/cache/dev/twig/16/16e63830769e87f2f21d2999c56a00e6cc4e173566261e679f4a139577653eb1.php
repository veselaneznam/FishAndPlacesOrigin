<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f87d6bcbad03a53b0a2aeb860081ea6c171adfa98e8adc335536389fbe1f9a2e extends Twig_Template
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
        $__internal_81d7b395ec37c2f000beea37e1624775027db8e367a3f97f379bbdcadd2574bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d7b395ec37c2f000beea37e1624775027db8e367a3f97f379bbdcadd2574bc->enter($__internal_81d7b395ec37c2f000beea37e1624775027db8e367a3f97f379bbdcadd2574bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_0706cf0b3b3407b0157c81d1fd4464bc07ced68fb41eb4c7794d696b41b27b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0706cf0b3b3407b0157c81d1fd4464bc07ced68fb41eb4c7794d696b41b27b5a->enter($__internal_0706cf0b3b3407b0157c81d1fd4464bc07ced68fb41eb4c7794d696b41b27b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_81d7b395ec37c2f000beea37e1624775027db8e367a3f97f379bbdcadd2574bc->leave($__internal_81d7b395ec37c2f000beea37e1624775027db8e367a3f97f379bbdcadd2574bc_prof);

        
        $__internal_0706cf0b3b3407b0157c81d1fd4464bc07ced68fb41eb4c7794d696b41b27b5a->leave($__internal_0706cf0b3b3407b0157c81d1fd4464bc07ced68fb41eb4c7794d696b41b27b5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
