<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d14898bd304dc1ee7d4c6c73ffadc9c93ccf0a453528bcac8bbb8f52c1840750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_43f5c5a9f4c1e4a1b7ac42050894f4e79aac8dc2a0b9a6066b5c38f0df103835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f5c5a9f4c1e4a1b7ac42050894f4e79aac8dc2a0b9a6066b5c38f0df103835->enter($__internal_43f5c5a9f4c1e4a1b7ac42050894f4e79aac8dc2a0b9a6066b5c38f0df103835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_ce9d7b523f5e539951b4674798c2f46c9bef2cae03b560679c120d17ed3107a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9d7b523f5e539951b4674798c2f46c9bef2cae03b560679c120d17ed3107a0->enter($__internal_ce9d7b523f5e539951b4674798c2f46c9bef2cae03b560679c120d17ed3107a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f5c5a9f4c1e4a1b7ac42050894f4e79aac8dc2a0b9a6066b5c38f0df103835->leave($__internal_43f5c5a9f4c1e4a1b7ac42050894f4e79aac8dc2a0b9a6066b5c38f0df103835_prof);

        
        $__internal_ce9d7b523f5e539951b4674798c2f46c9bef2cae03b560679c120d17ed3107a0->leave($__internal_ce9d7b523f5e539951b4674798c2f46c9bef2cae03b560679c120d17ed3107a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c46366b0148640f63a120d52aa681b7c690f3de5a01fa453c0b5d96093c1520b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46366b0148640f63a120d52aa681b7c690f3de5a01fa453c0b5d96093c1520b->enter($__internal_c46366b0148640f63a120d52aa681b7c690f3de5a01fa453c0b5d96093c1520b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8c8901d5d754602f324c43bd37cec9696cc4ec73ea870b6b2df65dcb9a41c71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8901d5d754602f324c43bd37cec9696cc4ec73ea870b6b2df65dcb9a41c71d->enter($__internal_8c8901d5d754602f324c43bd37cec9696cc4ec73ea870b6b2df65dcb9a41c71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8c8901d5d754602f324c43bd37cec9696cc4ec73ea870b6b2df65dcb9a41c71d->leave($__internal_8c8901d5d754602f324c43bd37cec9696cc4ec73ea870b6b2df65dcb9a41c71d_prof);

        
        $__internal_c46366b0148640f63a120d52aa681b7c690f3de5a01fa453c0b5d96093c1520b->leave($__internal_c46366b0148640f63a120d52aa681b7c690f3de5a01fa453c0b5d96093c1520b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
