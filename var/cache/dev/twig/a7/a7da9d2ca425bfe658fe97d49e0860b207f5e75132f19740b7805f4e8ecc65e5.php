<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_1a37618efb58b6bb9b230a34a82180c27dab6d046af4d0bbd1d9b6b5f0adf055 extends Twig_Template
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
        $__internal_3eff31572a94940646b28800e330851abb07246a2f74e178dfab9dffd7ffae18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eff31572a94940646b28800e330851abb07246a2f74e178dfab9dffd7ffae18->enter($__internal_3eff31572a94940646b28800e330851abb07246a2f74e178dfab9dffd7ffae18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_26f50320ffdc39cdcc9faf3976b6005c95dc02502b77d763c288d5ca9939a8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f50320ffdc39cdcc9faf3976b6005c95dc02502b77d763c288d5ca9939a8f5->enter($__internal_26f50320ffdc39cdcc9faf3976b6005c95dc02502b77d763c288d5ca9939a8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3eff31572a94940646b28800e330851abb07246a2f74e178dfab9dffd7ffae18->leave($__internal_3eff31572a94940646b28800e330851abb07246a2f74e178dfab9dffd7ffae18_prof);

        
        $__internal_26f50320ffdc39cdcc9faf3976b6005c95dc02502b77d763c288d5ca9939a8f5->leave($__internal_26f50320ffdc39cdcc9faf3976b6005c95dc02502b77d763c288d5ca9939a8f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
