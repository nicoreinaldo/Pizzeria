<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9052d7f9db30066c789c082a4178b5916a3062aa30506a21ec752c2ec61306d7 extends Twig_Template
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
        $__internal_03e454458b4389c65048125417479f8b8921b3ee6bcc0f4ced916fddcc518463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e454458b4389c65048125417479f8b8921b3ee6bcc0f4ced916fddcc518463->enter($__internal_03e454458b4389c65048125417479f8b8921b3ee6bcc0f4ced916fddcc518463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_882485193f94732a5444d850f281efcf6537b19f5c1fd035d94a6732e1e617ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882485193f94732a5444d850f281efcf6537b19f5c1fd035d94a6732e1e617ae->enter($__internal_882485193f94732a5444d850f281efcf6537b19f5c1fd035d94a6732e1e617ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_03e454458b4389c65048125417479f8b8921b3ee6bcc0f4ced916fddcc518463->leave($__internal_03e454458b4389c65048125417479f8b8921b3ee6bcc0f4ced916fddcc518463_prof);

        
        $__internal_882485193f94732a5444d850f281efcf6537b19f5c1fd035d94a6732e1e617ae->leave($__internal_882485193f94732a5444d850f281efcf6537b19f5c1fd035d94a6732e1e617ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
