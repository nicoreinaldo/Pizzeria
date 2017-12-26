<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_3a3ffd57baf7512f39a07a7f3d5dddf02638f22647a068edb2efda8d539ccfb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3ffd57baf7512f39a07a7f3d5dddf02638f22647a068edb2efda8d539ccfb2->enter($__internal_3a3ffd57baf7512f39a07a7f3d5dddf02638f22647a068edb2efda8d539ccfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_03303584fc945356e5df16784189937912591d1b31e746ea69c4847c7b66f93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03303584fc945356e5df16784189937912591d1b31e746ea69c4847c7b66f93c->enter($__internal_03303584fc945356e5df16784189937912591d1b31e746ea69c4847c7b66f93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3a3ffd57baf7512f39a07a7f3d5dddf02638f22647a068edb2efda8d539ccfb2->leave($__internal_3a3ffd57baf7512f39a07a7f3d5dddf02638f22647a068edb2efda8d539ccfb2_prof);

        
        $__internal_03303584fc945356e5df16784189937912591d1b31e746ea69c4847c7b66f93c->leave($__internal_03303584fc945356e5df16784189937912591d1b31e746ea69c4847c7b66f93c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
