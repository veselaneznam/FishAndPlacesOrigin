<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_bec8bb01abf477c82ac8dd44166eff169140ed648e2b5804fdbf524606f8f983 extends Twig_Template
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
        $__internal_95efacd1dfeaaf0d46247817bc3b27ce6688c5ca4a0f63b3236b5e464eb72204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95efacd1dfeaaf0d46247817bc3b27ce6688c5ca4a0f63b3236b5e464eb72204->enter($__internal_95efacd1dfeaaf0d46247817bc3b27ce6688c5ca4a0f63b3236b5e464eb72204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_cec2529c19a80c1de6e1c466d930164b8c2124d0a04089a369c800f2f375216e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec2529c19a80c1de6e1c466d930164b8c2124d0a04089a369c800f2f375216e->enter($__internal_cec2529c19a80c1de6e1c466d930164b8c2124d0a04089a369c800f2f375216e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_95efacd1dfeaaf0d46247817bc3b27ce6688c5ca4a0f63b3236b5e464eb72204->leave($__internal_95efacd1dfeaaf0d46247817bc3b27ce6688c5ca4a0f63b3236b5e464eb72204_prof);

        
        $__internal_cec2529c19a80c1de6e1c466d930164b8c2124d0a04089a369c800f2f375216e->leave($__internal_cec2529c19a80c1de6e1c466d930164b8c2124d0a04089a369c800f2f375216e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
