<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_52bc5ebd3164b3bd3b88cab5a50547c47f0786246c3dcc77913e719525eb7e8e extends Twig_Template
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
        $__internal_fc9bdede05e452570ae94bd7dbf242d42dce415cb12eb5b426c3cec679e403e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9bdede05e452570ae94bd7dbf242d42dce415cb12eb5b426c3cec679e403e2->enter($__internal_fc9bdede05e452570ae94bd7dbf242d42dce415cb12eb5b426c3cec679e403e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_5cc0047cc60ee69bd149376e6e8a32c9ea2b7fb0b2167ef72b07c16fcec8d8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc0047cc60ee69bd149376e6e8a32c9ea2b7fb0b2167ef72b07c16fcec8d8aa->enter($__internal_5cc0047cc60ee69bd149376e6e8a32c9ea2b7fb0b2167ef72b07c16fcec8d8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_fc9bdede05e452570ae94bd7dbf242d42dce415cb12eb5b426c3cec679e403e2->leave($__internal_fc9bdede05e452570ae94bd7dbf242d42dce415cb12eb5b426c3cec679e403e2_prof);

        
        $__internal_5cc0047cc60ee69bd149376e6e8a32c9ea2b7fb0b2167ef72b07c16fcec8d8aa->leave($__internal_5cc0047cc60ee69bd149376e6e8a32c9ea2b7fb0b2167ef72b07c16fcec8d8aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
