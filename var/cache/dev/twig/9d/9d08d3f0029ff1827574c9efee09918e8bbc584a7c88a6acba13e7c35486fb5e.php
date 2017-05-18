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
        $__internal_63ac9a1ca7962a45f5eec023fe9ad1d71b96382f174172095fbdca964e5a531f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ac9a1ca7962a45f5eec023fe9ad1d71b96382f174172095fbdca964e5a531f->enter($__internal_63ac9a1ca7962a45f5eec023fe9ad1d71b96382f174172095fbdca964e5a531f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b5b27217490174a66a41632633400e57da7c2dbdfc2547cf4767154369059445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b27217490174a66a41632633400e57da7c2dbdfc2547cf4767154369059445->enter($__internal_b5b27217490174a66a41632633400e57da7c2dbdfc2547cf4767154369059445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_63ac9a1ca7962a45f5eec023fe9ad1d71b96382f174172095fbdca964e5a531f->leave($__internal_63ac9a1ca7962a45f5eec023fe9ad1d71b96382f174172095fbdca964e5a531f_prof);

        
        $__internal_b5b27217490174a66a41632633400e57da7c2dbdfc2547cf4767154369059445->leave($__internal_b5b27217490174a66a41632633400e57da7c2dbdfc2547cf4767154369059445_prof);

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
