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
        $__internal_e5e5ddf877a1b1a7437792e2fa7cfaf85090c21176669f79c5bb8ea63e69fbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e5ddf877a1b1a7437792e2fa7cfaf85090c21176669f79c5bb8ea63e69fbfc->enter($__internal_e5e5ddf877a1b1a7437792e2fa7cfaf85090c21176669f79c5bb8ea63e69fbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a6d0cffbffe7cf708d24214ffb793a5495941710c73d442f95b0ddfdcbe51f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d0cffbffe7cf708d24214ffb793a5495941710c73d442f95b0ddfdcbe51f92->enter($__internal_a6d0cffbffe7cf708d24214ffb793a5495941710c73d442f95b0ddfdcbe51f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e5e5ddf877a1b1a7437792e2fa7cfaf85090c21176669f79c5bb8ea63e69fbfc->leave($__internal_e5e5ddf877a1b1a7437792e2fa7cfaf85090c21176669f79c5bb8ea63e69fbfc_prof);

        
        $__internal_a6d0cffbffe7cf708d24214ffb793a5495941710c73d442f95b0ddfdcbe51f92->leave($__internal_a6d0cffbffe7cf708d24214ffb793a5495941710c73d442f95b0ddfdcbe51f92_prof);

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
