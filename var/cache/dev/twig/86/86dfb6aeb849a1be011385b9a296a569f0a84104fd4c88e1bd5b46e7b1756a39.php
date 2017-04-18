<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_233bee39452427896fd736ad3b5bacba11d2af978ff15f427491b798ef8a8dde extends Twig_Template
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
        $__internal_cff2f84007719878836898a5caf7bfb7eaba5be617c37a8bb6a88f9cbede33d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff2f84007719878836898a5caf7bfb7eaba5be617c37a8bb6a88f9cbede33d5->enter($__internal_cff2f84007719878836898a5caf7bfb7eaba5be617c37a8bb6a88f9cbede33d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f2f0fe5600c28b97138cdf3daf999b3d30cf8f2e0005571f2c8493c6f6068c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f0fe5600c28b97138cdf3daf999b3d30cf8f2e0005571f2c8493c6f6068c3e->enter($__internal_f2f0fe5600c28b97138cdf3daf999b3d30cf8f2e0005571f2c8493c6f6068c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cff2f84007719878836898a5caf7bfb7eaba5be617c37a8bb6a88f9cbede33d5->leave($__internal_cff2f84007719878836898a5caf7bfb7eaba5be617c37a8bb6a88f9cbede33d5_prof);

        
        $__internal_f2f0fe5600c28b97138cdf3daf999b3d30cf8f2e0005571f2c8493c6f6068c3e->leave($__internal_f2f0fe5600c28b97138cdf3daf999b3d30cf8f2e0005571f2c8493c6f6068c3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
