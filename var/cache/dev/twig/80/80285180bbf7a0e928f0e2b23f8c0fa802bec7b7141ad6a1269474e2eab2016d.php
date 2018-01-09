<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_42aecd02efa02d0f96db70b0a84a4a8eea02dfbd2dc3ae2f695dbb6468f6af8d extends Twig_Template
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
        $__internal_56f9a347669b03e97dc5ae8a8b8d888bcabf4c501bf1d342df1c33caccf108b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f9a347669b03e97dc5ae8a8b8d888bcabf4c501bf1d342df1c33caccf108b0->enter($__internal_56f9a347669b03e97dc5ae8a8b8d888bcabf4c501bf1d342df1c33caccf108b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_511a67e9411201716033034290be0cb6a2baca915a64f84bc977544d44cd0ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511a67e9411201716033034290be0cb6a2baca915a64f84bc977544d44cd0ccb->enter($__internal_511a67e9411201716033034290be0cb6a2baca915a64f84bc977544d44cd0ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_56f9a347669b03e97dc5ae8a8b8d888bcabf4c501bf1d342df1c33caccf108b0->leave($__internal_56f9a347669b03e97dc5ae8a8b8d888bcabf4c501bf1d342df1c33caccf108b0_prof);

        
        $__internal_511a67e9411201716033034290be0cb6a2baca915a64f84bc977544d44cd0ccb->leave($__internal_511a67e9411201716033034290be0cb6a2baca915a64f84bc977544d44cd0ccb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
