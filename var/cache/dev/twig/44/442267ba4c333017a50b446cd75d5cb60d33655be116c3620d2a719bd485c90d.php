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
        $__internal_c025844b8b8c048a8ba078a5d8bfd0ed158aa4da1474a69bab8a1c2c1314ef26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c025844b8b8c048a8ba078a5d8bfd0ed158aa4da1474a69bab8a1c2c1314ef26->enter($__internal_c025844b8b8c048a8ba078a5d8bfd0ed158aa4da1474a69bab8a1c2c1314ef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_58435e7689f424deca037d5ac010f8b4afdca6750daf030f7cb3ba543a8b02d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58435e7689f424deca037d5ac010f8b4afdca6750daf030f7cb3ba543a8b02d7->enter($__internal_58435e7689f424deca037d5ac010f8b4afdca6750daf030f7cb3ba543a8b02d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c025844b8b8c048a8ba078a5d8bfd0ed158aa4da1474a69bab8a1c2c1314ef26->leave($__internal_c025844b8b8c048a8ba078a5d8bfd0ed158aa4da1474a69bab8a1c2c1314ef26_prof);

        
        $__internal_58435e7689f424deca037d5ac010f8b4afdca6750daf030f7cb3ba543a8b02d7->leave($__internal_58435e7689f424deca037d5ac010f8b4afdca6750daf030f7cb3ba543a8b02d7_prof);

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
