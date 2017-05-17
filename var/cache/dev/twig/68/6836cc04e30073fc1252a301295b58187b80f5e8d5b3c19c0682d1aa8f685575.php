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
        $__internal_30a2b58f400c6d02bc524bac2f103c745281e2dd6379fab54bb3a26864d48260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a2b58f400c6d02bc524bac2f103c745281e2dd6379fab54bb3a26864d48260->enter($__internal_30a2b58f400c6d02bc524bac2f103c745281e2dd6379fab54bb3a26864d48260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_03898a8931a3a42955ad210f466f5311cfcd366ca6dc008b928c38eaa1d4d31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03898a8931a3a42955ad210f466f5311cfcd366ca6dc008b928c38eaa1d4d31b->enter($__internal_03898a8931a3a42955ad210f466f5311cfcd366ca6dc008b928c38eaa1d4d31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_30a2b58f400c6d02bc524bac2f103c745281e2dd6379fab54bb3a26864d48260->leave($__internal_30a2b58f400c6d02bc524bac2f103c745281e2dd6379fab54bb3a26864d48260_prof);

        
        $__internal_03898a8931a3a42955ad210f466f5311cfcd366ca6dc008b928c38eaa1d4d31b->leave($__internal_03898a8931a3a42955ad210f466f5311cfcd366ca6dc008b928c38eaa1d4d31b_prof);

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
