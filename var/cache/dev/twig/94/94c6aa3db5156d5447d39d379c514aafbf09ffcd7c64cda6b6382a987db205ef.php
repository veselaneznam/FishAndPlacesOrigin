<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_28c32ee96decc7cb18740507acb10711f557c08ed0b39507de69e4756e132d6c extends Twig_Template
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
        $__internal_a767cfe65f0a983b3c4e8ab21fe6585fc82d218c0942a7b4534dbb0530043ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a767cfe65f0a983b3c4e8ab21fe6585fc82d218c0942a7b4534dbb0530043ada->enter($__internal_a767cfe65f0a983b3c4e8ab21fe6585fc82d218c0942a7b4534dbb0530043ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_070f66a8652bf955d8bd5802f98ee0e327785d94b30b46456c478ca39305b60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070f66a8652bf955d8bd5802f98ee0e327785d94b30b46456c478ca39305b60a->enter($__internal_070f66a8652bf955d8bd5802f98ee0e327785d94b30b46456c478ca39305b60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a767cfe65f0a983b3c4e8ab21fe6585fc82d218c0942a7b4534dbb0530043ada->leave($__internal_a767cfe65f0a983b3c4e8ab21fe6585fc82d218c0942a7b4534dbb0530043ada_prof);

        
        $__internal_070f66a8652bf955d8bd5802f98ee0e327785d94b30b46456c478ca39305b60a->leave($__internal_070f66a8652bf955d8bd5802f98ee0e327785d94b30b46456c478ca39305b60a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
