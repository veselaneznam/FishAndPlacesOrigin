<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_4a9a4063bdd20729f9b9f6404145351f6ecbc1577015794145110fca1d81c3d2 extends Twig_Template
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
        $__internal_60e3e40df27df2125bd6353b89380f0a2e1da361661dc02f3ef4c08808352869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e3e40df27df2125bd6353b89380f0a2e1da361661dc02f3ef4c08808352869->enter($__internal_60e3e40df27df2125bd6353b89380f0a2e1da361661dc02f3ef4c08808352869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5c4bace624788171fd8a0a6becaf183eba9ea7313ee955508d14cf849440f19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4bace624788171fd8a0a6becaf183eba9ea7313ee955508d14cf849440f19e->enter($__internal_5c4bace624788171fd8a0a6becaf183eba9ea7313ee955508d14cf849440f19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_60e3e40df27df2125bd6353b89380f0a2e1da361661dc02f3ef4c08808352869->leave($__internal_60e3e40df27df2125bd6353b89380f0a2e1da361661dc02f3ef4c08808352869_prof);

        
        $__internal_5c4bace624788171fd8a0a6becaf183eba9ea7313ee955508d14cf849440f19e->leave($__internal_5c4bace624788171fd8a0a6becaf183eba9ea7313ee955508d14cf849440f19e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
