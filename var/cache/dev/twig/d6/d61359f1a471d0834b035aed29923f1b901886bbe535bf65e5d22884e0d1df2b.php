<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_54c523397b0d09a3cd9cd4c331ef388b18b7d3d688f7888478f44574ac72b912 extends Twig_Template
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
        $__internal_4ede23562babe24aea7da61a2b7916f93d820f8ecbe78311f5f3d93bf7f26815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ede23562babe24aea7da61a2b7916f93d820f8ecbe78311f5f3d93bf7f26815->enter($__internal_4ede23562babe24aea7da61a2b7916f93d820f8ecbe78311f5f3d93bf7f26815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7bb6aefde58cbc860d2e2a4d691a426fd9e9f65f0e4928c8a0d5284ebd590e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb6aefde58cbc860d2e2a4d691a426fd9e9f65f0e4928c8a0d5284ebd590e19->enter($__internal_7bb6aefde58cbc860d2e2a4d691a426fd9e9f65f0e4928c8a0d5284ebd590e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4ede23562babe24aea7da61a2b7916f93d820f8ecbe78311f5f3d93bf7f26815->leave($__internal_4ede23562babe24aea7da61a2b7916f93d820f8ecbe78311f5f3d93bf7f26815_prof);

        
        $__internal_7bb6aefde58cbc860d2e2a4d691a426fd9e9f65f0e4928c8a0d5284ebd590e19->leave($__internal_7bb6aefde58cbc860d2e2a4d691a426fd9e9f65f0e4928c8a0d5284ebd590e19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
