<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_14efcfc11b51acec85bd80e78bb241ee11ba0b1342cef4351565e1c4cfddb35c extends Twig_Template
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
        $__internal_96bb59030d8fdaec672b7e2388100a51210c5276af4a770d9dccfb18827f4cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96bb59030d8fdaec672b7e2388100a51210c5276af4a770d9dccfb18827f4cf6->enter($__internal_96bb59030d8fdaec672b7e2388100a51210c5276af4a770d9dccfb18827f4cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_66608756d339677e1724aa92da08022cf657da22ce4faf9e6265e78eed8d0453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66608756d339677e1724aa92da08022cf657da22ce4faf9e6265e78eed8d0453->enter($__internal_66608756d339677e1724aa92da08022cf657da22ce4faf9e6265e78eed8d0453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_96bb59030d8fdaec672b7e2388100a51210c5276af4a770d9dccfb18827f4cf6->leave($__internal_96bb59030d8fdaec672b7e2388100a51210c5276af4a770d9dccfb18827f4cf6_prof);

        
        $__internal_66608756d339677e1724aa92da08022cf657da22ce4faf9e6265e78eed8d0453->leave($__internal_66608756d339677e1724aa92da08022cf657da22ce4faf9e6265e78eed8d0453_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
