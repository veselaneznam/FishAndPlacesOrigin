<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_7f68c45ab86d303794e48fde0794afb3b9c78715edc60826faea3035e7032305 extends Twig_Template
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
        $__internal_7b2d458b41a75a05bcc608e75353b9fd8fa9695feffba28874221d9401787764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2d458b41a75a05bcc608e75353b9fd8fa9695feffba28874221d9401787764->enter($__internal_7b2d458b41a75a05bcc608e75353b9fd8fa9695feffba28874221d9401787764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b61a545943c2b1eb967dca1464faf91e062a6dda302974e298d516584556e416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61a545943c2b1eb967dca1464faf91e062a6dda302974e298d516584556e416->enter($__internal_b61a545943c2b1eb967dca1464faf91e062a6dda302974e298d516584556e416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7b2d458b41a75a05bcc608e75353b9fd8fa9695feffba28874221d9401787764->leave($__internal_7b2d458b41a75a05bcc608e75353b9fd8fa9695feffba28874221d9401787764_prof);

        
        $__internal_b61a545943c2b1eb967dca1464faf91e062a6dda302974e298d516584556e416->leave($__internal_b61a545943c2b1eb967dca1464faf91e062a6dda302974e298d516584556e416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
