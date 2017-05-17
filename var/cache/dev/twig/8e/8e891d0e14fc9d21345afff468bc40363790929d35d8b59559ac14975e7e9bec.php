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
        $__internal_6163e2f73d18cbf5621c801701d8bce865f6ac11948cf8b263cee9ed4927cf3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6163e2f73d18cbf5621c801701d8bce865f6ac11948cf8b263cee9ed4927cf3b->enter($__internal_6163e2f73d18cbf5621c801701d8bce865f6ac11948cf8b263cee9ed4927cf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4fe49d41b2f22fb61fab59747d24aea4c18d8021f337c22e4a15c3fffacf3dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe49d41b2f22fb61fab59747d24aea4c18d8021f337c22e4a15c3fffacf3dd6->enter($__internal_4fe49d41b2f22fb61fab59747d24aea4c18d8021f337c22e4a15c3fffacf3dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6163e2f73d18cbf5621c801701d8bce865f6ac11948cf8b263cee9ed4927cf3b->leave($__internal_6163e2f73d18cbf5621c801701d8bce865f6ac11948cf8b263cee9ed4927cf3b_prof);

        
        $__internal_4fe49d41b2f22fb61fab59747d24aea4c18d8021f337c22e4a15c3fffacf3dd6->leave($__internal_4fe49d41b2f22fb61fab59747d24aea4c18d8021f337c22e4a15c3fffacf3dd6_prof);

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
