<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3aa5249a757e46690c9592ebefd5d7a321321a7032ac6d1eb1e501c602306073 extends Twig_Template
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
        $__internal_db28f15dc716f7e948e4f37bdb466aac8faf74eef9be3aaa2395b135526f5b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db28f15dc716f7e948e4f37bdb466aac8faf74eef9be3aaa2395b135526f5b5c->enter($__internal_db28f15dc716f7e948e4f37bdb466aac8faf74eef9be3aaa2395b135526f5b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2533567b4b103c22447383754e9754f67ecd2c35fbe4b0621c6d0717642391c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2533567b4b103c22447383754e9754f67ecd2c35fbe4b0621c6d0717642391c4->enter($__internal_2533567b4b103c22447383754e9754f67ecd2c35fbe4b0621c6d0717642391c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_db28f15dc716f7e948e4f37bdb466aac8faf74eef9be3aaa2395b135526f5b5c->leave($__internal_db28f15dc716f7e948e4f37bdb466aac8faf74eef9be3aaa2395b135526f5b5c_prof);

        
        $__internal_2533567b4b103c22447383754e9754f67ecd2c35fbe4b0621c6d0717642391c4->leave($__internal_2533567b4b103c22447383754e9754f67ecd2c35fbe4b0621c6d0717642391c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
