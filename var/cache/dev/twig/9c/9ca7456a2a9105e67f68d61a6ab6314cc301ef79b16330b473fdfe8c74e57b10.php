<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
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
        $__internal_07312ce46156008453df3d49c88e7550834404eef802164a9db780a3bbafbee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07312ce46156008453df3d49c88e7550834404eef802164a9db780a3bbafbee7->enter($__internal_07312ce46156008453df3d49c88e7550834404eef802164a9db780a3bbafbee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_539520c29f1b58ded46393788e7740d1f2fa5ae532bb5519537a6142724f0de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539520c29f1b58ded46393788e7740d1f2fa5ae532bb5519537a6142724f0de8->enter($__internal_539520c29f1b58ded46393788e7740d1f2fa5ae532bb5519537a6142724f0de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_07312ce46156008453df3d49c88e7550834404eef802164a9db780a3bbafbee7->leave($__internal_07312ce46156008453df3d49c88e7550834404eef802164a9db780a3bbafbee7_prof);

        
        $__internal_539520c29f1b58ded46393788e7740d1f2fa5ae532bb5519537a6142724f0de8->leave($__internal_539520c29f1b58ded46393788e7740d1f2fa5ae532bb5519537a6142724f0de8_prof);

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
", "@Framework/Form/form_enctype.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
