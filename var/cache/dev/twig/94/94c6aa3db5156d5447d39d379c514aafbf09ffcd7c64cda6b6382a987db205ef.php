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
        $__internal_fbcfac1e071da62542d84361bcca5666839b154e793ac756763e486807f27e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcfac1e071da62542d84361bcca5666839b154e793ac756763e486807f27e72->enter($__internal_fbcfac1e071da62542d84361bcca5666839b154e793ac756763e486807f27e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_da94f6d92fc1cf019672862c0f4d6c67c43db39244c2b6c5a11291012bb6c91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da94f6d92fc1cf019672862c0f4d6c67c43db39244c2b6c5a11291012bb6c91c->enter($__internal_da94f6d92fc1cf019672862c0f4d6c67c43db39244c2b6c5a11291012bb6c91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fbcfac1e071da62542d84361bcca5666839b154e793ac756763e486807f27e72->leave($__internal_fbcfac1e071da62542d84361bcca5666839b154e793ac756763e486807f27e72_prof);

        
        $__internal_da94f6d92fc1cf019672862c0f4d6c67c43db39244c2b6c5a11291012bb6c91c->leave($__internal_da94f6d92fc1cf019672862c0f4d6c67c43db39244c2b6c5a11291012bb6c91c_prof);

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
