<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b1cf2f354ded845abb0c48c1a511458c3180716d4100ec5edfedf86428170a34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1de89e2795461d01e55d283e2b4474a6f6d9c7bab07fc8674a04a395df6c0fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de89e2795461d01e55d283e2b4474a6f6d9c7bab07fc8674a04a395df6c0fc2->enter($__internal_1de89e2795461d01e55d283e2b4474a6f6d9c7bab07fc8674a04a395df6c0fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_d7b9f48a62a6b96aa80ab7f2be517547bde0016ebc8f18da2e50c01c9202677b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b9f48a62a6b96aa80ab7f2be517547bde0016ebc8f18da2e50c01c9202677b->enter($__internal_d7b9f48a62a6b96aa80ab7f2be517547bde0016ebc8f18da2e50c01c9202677b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1de89e2795461d01e55d283e2b4474a6f6d9c7bab07fc8674a04a395df6c0fc2->leave($__internal_1de89e2795461d01e55d283e2b4474a6f6d9c7bab07fc8674a04a395df6c0fc2_prof);

        
        $__internal_d7b9f48a62a6b96aa80ab7f2be517547bde0016ebc8f18da2e50c01c9202677b->leave($__internal_d7b9f48a62a6b96aa80ab7f2be517547bde0016ebc8f18da2e50c01c9202677b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f8fe1975b40cb28f7dc648d9dfffc4d4e27c1734753e968d513492994ed7d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8fe1975b40cb28f7dc648d9dfffc4d4e27c1734753e968d513492994ed7d9e->enter($__internal_4f8fe1975b40cb28f7dc648d9dfffc4d4e27c1734753e968d513492994ed7d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3fe85da60449dab907cac4c4f9bd8a2a5283e17560e0dd3495f893b8d002d8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe85da60449dab907cac4c4f9bd8a2a5283e17560e0dd3495f893b8d002d8cd->enter($__internal_3fe85da60449dab907cac4c4f9bd8a2a5283e17560e0dd3495f893b8d002d8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3fe85da60449dab907cac4c4f9bd8a2a5283e17560e0dd3495f893b8d002d8cd->leave($__internal_3fe85da60449dab907cac4c4f9bd8a2a5283e17560e0dd3495f893b8d002d8cd_prof);

        
        $__internal_4f8fe1975b40cb28f7dc648d9dfffc4d4e27c1734753e968d513492994ed7d9e->leave($__internal_4f8fe1975b40cb28f7dc648d9dfffc4d4e27c1734753e968d513492994ed7d9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
