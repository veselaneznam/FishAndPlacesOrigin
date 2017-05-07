<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e40801c2a5e29c188a7d9ce454e12ddd421b3a37693820cf6aa89c4ece696010 extends Twig_Template
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
        $__internal_7b91df4ad8d529670b598858923a73098beb74e6bc60bc9bfc8c6ba616707167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b91df4ad8d529670b598858923a73098beb74e6bc60bc9bfc8c6ba616707167->enter($__internal_7b91df4ad8d529670b598858923a73098beb74e6bc60bc9bfc8c6ba616707167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fe816b23e9ce79f47554ffa1c1a5d1034726c2a444ecf92abfb6ab7c114bde33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe816b23e9ce79f47554ffa1c1a5d1034726c2a444ecf92abfb6ab7c114bde33->enter($__internal_fe816b23e9ce79f47554ffa1c1a5d1034726c2a444ecf92abfb6ab7c114bde33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7b91df4ad8d529670b598858923a73098beb74e6bc60bc9bfc8c6ba616707167->leave($__internal_7b91df4ad8d529670b598858923a73098beb74e6bc60bc9bfc8c6ba616707167_prof);

        
        $__internal_fe816b23e9ce79f47554ffa1c1a5d1034726c2a444ecf92abfb6ab7c114bde33->leave($__internal_fe816b23e9ce79f47554ffa1c1a5d1034726c2a444ecf92abfb6ab7c114bde33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
