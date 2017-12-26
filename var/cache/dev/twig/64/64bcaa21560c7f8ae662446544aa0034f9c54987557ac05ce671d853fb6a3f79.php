<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b033fdbbbb4dab97b1aa6b45ce8db198a6e04fcc0fcd7d7cdcea29c33ae4d1ac extends Twig_Template
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
        $__internal_7dcb6ea39617fea7123a6ae858bf54d0c1b598921ae817decb108c2865100e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dcb6ea39617fea7123a6ae858bf54d0c1b598921ae817decb108c2865100e03->enter($__internal_7dcb6ea39617fea7123a6ae858bf54d0c1b598921ae817decb108c2865100e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_fedecbe2d0e35da5ec0c2e048f4692a36f3a60c3151e3f7ac7e37c001570247d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedecbe2d0e35da5ec0c2e048f4692a36f3a60c3151e3f7ac7e37c001570247d->enter($__internal_fedecbe2d0e35da5ec0c2e048f4692a36f3a60c3151e3f7ac7e37c001570247d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7dcb6ea39617fea7123a6ae858bf54d0c1b598921ae817decb108c2865100e03->leave($__internal_7dcb6ea39617fea7123a6ae858bf54d0c1b598921ae817decb108c2865100e03_prof);

        
        $__internal_fedecbe2d0e35da5ec0c2e048f4692a36f3a60c3151e3f7ac7e37c001570247d->leave($__internal_fedecbe2d0e35da5ec0c2e048f4692a36f3a60c3151e3f7ac7e37c001570247d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
