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
        $__internal_18b0fc7ae4ac93eb3f9e37a6a9c11cdd3b25fb858abfb3794e98b4c9ea1df29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b0fc7ae4ac93eb3f9e37a6a9c11cdd3b25fb858abfb3794e98b4c9ea1df29d->enter($__internal_18b0fc7ae4ac93eb3f9e37a6a9c11cdd3b25fb858abfb3794e98b4c9ea1df29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3e0f02a3ed97d33ed2344947a978802b65209036e4390d3e1a5ab9f595c8a311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0f02a3ed97d33ed2344947a978802b65209036e4390d3e1a5ab9f595c8a311->enter($__internal_3e0f02a3ed97d33ed2344947a978802b65209036e4390d3e1a5ab9f595c8a311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_18b0fc7ae4ac93eb3f9e37a6a9c11cdd3b25fb858abfb3794e98b4c9ea1df29d->leave($__internal_18b0fc7ae4ac93eb3f9e37a6a9c11cdd3b25fb858abfb3794e98b4c9ea1df29d_prof);

        
        $__internal_3e0f02a3ed97d33ed2344947a978802b65209036e4390d3e1a5ab9f595c8a311->leave($__internal_3e0f02a3ed97d33ed2344947a978802b65209036e4390d3e1a5ab9f595c8a311_prof);

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
