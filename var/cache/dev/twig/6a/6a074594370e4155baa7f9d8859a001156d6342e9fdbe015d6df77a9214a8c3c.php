<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_98a5142c7d18e4f902cbf1560eca1411a549b89a1cba87dd4a7077cf49d7a975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94dd1e2f2a410e9660b623a786f54b700246508daf00671facba2b166eacacdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94dd1e2f2a410e9660b623a786f54b700246508daf00671facba2b166eacacdc->enter($__internal_94dd1e2f2a410e9660b623a786f54b700246508daf00671facba2b166eacacdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d6d6ddf72e4fc6873a3e54bd227c122bbdf84cacadb009e4a4297c963e9a2e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d6ddf72e4fc6873a3e54bd227c122bbdf84cacadb009e4a4297c963e9a2e01->enter($__internal_d6d6ddf72e4fc6873a3e54bd227c122bbdf84cacadb009e4a4297c963e9a2e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94dd1e2f2a410e9660b623a786f54b700246508daf00671facba2b166eacacdc->leave($__internal_94dd1e2f2a410e9660b623a786f54b700246508daf00671facba2b166eacacdc_prof);

        
        $__internal_d6d6ddf72e4fc6873a3e54bd227c122bbdf84cacadb009e4a4297c963e9a2e01->leave($__internal_d6d6ddf72e4fc6873a3e54bd227c122bbdf84cacadb009e4a4297c963e9a2e01_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12ce022890628d186fe5e4bd4a6159ab99917b2b253c03119e4f0708b850e865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ce022890628d186fe5e4bd4a6159ab99917b2b253c03119e4f0708b850e865->enter($__internal_12ce022890628d186fe5e4bd4a6159ab99917b2b253c03119e4f0708b850e865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b1cd3213aedfc6e2499ce262b60ca2912a861c37352a7f56c91aaeb7278d369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1cd3213aedfc6e2499ce262b60ca2912a861c37352a7f56c91aaeb7278d369->enter($__internal_6b1cd3213aedfc6e2499ce262b60ca2912a861c37352a7f56c91aaeb7278d369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6b1cd3213aedfc6e2499ce262b60ca2912a861c37352a7f56c91aaeb7278d369->leave($__internal_6b1cd3213aedfc6e2499ce262b60ca2912a861c37352a7f56c91aaeb7278d369_prof);

        
        $__internal_12ce022890628d186fe5e4bd4a6159ab99917b2b253c03119e4f0708b850e865->leave($__internal_12ce022890628d186fe5e4bd4a6159ab99917b2b253c03119e4f0708b850e865_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
