<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_3349cf116aee5517fec1cf77fed80f08842266a770a1ef0ba0e99a2bea15e3ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_7854c6a0abf01ce252873ba1bb57146aada1cfb2d1ebd10f897c0c2b907d7e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7854c6a0abf01ce252873ba1bb57146aada1cfb2d1ebd10f897c0c2b907d7e81->enter($__internal_7854c6a0abf01ce252873ba1bb57146aada1cfb2d1ebd10f897c0c2b907d7e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_d9b09dee257c12ab783d840c9f9a12412b3c4069b14959ed644e0c15ed717d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b09dee257c12ab783d840c9f9a12412b3c4069b14959ed644e0c15ed717d7a->enter($__internal_d9b09dee257c12ab783d840c9f9a12412b3c4069b14959ed644e0c15ed717d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7854c6a0abf01ce252873ba1bb57146aada1cfb2d1ebd10f897c0c2b907d7e81->leave($__internal_7854c6a0abf01ce252873ba1bb57146aada1cfb2d1ebd10f897c0c2b907d7e81_prof);

        
        $__internal_d9b09dee257c12ab783d840c9f9a12412b3c4069b14959ed644e0c15ed717d7a->leave($__internal_d9b09dee257c12ab783d840c9f9a12412b3c4069b14959ed644e0c15ed717d7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b715dd86532161471f798e4ae4743ad110533b0a0c6cc7605d9bc830e3dc522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b715dd86532161471f798e4ae4743ad110533b0a0c6cc7605d9bc830e3dc522->enter($__internal_3b715dd86532161471f798e4ae4743ad110533b0a0c6cc7605d9bc830e3dc522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_608e6b47a3c2f2c58b6a680342cd2155d7d998ef12177ff00820c2b59ee423b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608e6b47a3c2f2c58b6a680342cd2155d7d998ef12177ff00820c2b59ee423b7->enter($__internal_608e6b47a3c2f2c58b6a680342cd2155d7d998ef12177ff00820c2b59ee423b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_608e6b47a3c2f2c58b6a680342cd2155d7d998ef12177ff00820c2b59ee423b7->leave($__internal_608e6b47a3c2f2c58b6a680342cd2155d7d998ef12177ff00820c2b59ee423b7_prof);

        
        $__internal_3b715dd86532161471f798e4ae4743ad110533b0a0c6cc7605d9bc830e3dc522->leave($__internal_3b715dd86532161471f798e4ae4743ad110533b0a0c6cc7605d9bc830e3dc522_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
