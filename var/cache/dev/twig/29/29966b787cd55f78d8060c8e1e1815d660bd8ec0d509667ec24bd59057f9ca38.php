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
        $__internal_773ab4b1b16b8d61e86d00a093ee4f9c8b1e51e9a04bb34e258154b778c48d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773ab4b1b16b8d61e86d00a093ee4f9c8b1e51e9a04bb34e258154b778c48d0b->enter($__internal_773ab4b1b16b8d61e86d00a093ee4f9c8b1e51e9a04bb34e258154b778c48d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ebc361ab15ce8b994561fda6642607e7915fd30863e51192919f1d71caa14d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc361ab15ce8b994561fda6642607e7915fd30863e51192919f1d71caa14d90->enter($__internal_ebc361ab15ce8b994561fda6642607e7915fd30863e51192919f1d71caa14d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_773ab4b1b16b8d61e86d00a093ee4f9c8b1e51e9a04bb34e258154b778c48d0b->leave($__internal_773ab4b1b16b8d61e86d00a093ee4f9c8b1e51e9a04bb34e258154b778c48d0b_prof);

        
        $__internal_ebc361ab15ce8b994561fda6642607e7915fd30863e51192919f1d71caa14d90->leave($__internal_ebc361ab15ce8b994561fda6642607e7915fd30863e51192919f1d71caa14d90_prof);

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
