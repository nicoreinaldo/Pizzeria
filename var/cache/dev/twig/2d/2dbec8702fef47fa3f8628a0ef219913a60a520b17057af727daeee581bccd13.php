<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c8524662da54c258e4fa8c0ab555450466bf4ca71db21872576dfd8f573cca04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base2.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6212f005889666abba242ce22a4fb4584be1f776e6f5af3ed57537c13930dc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6212f005889666abba242ce22a4fb4584be1f776e6f5af3ed57537c13930dc4c->enter($__internal_6212f005889666abba242ce22a4fb4584be1f776e6f5af3ed57537c13930dc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_d8486085bc4aa885743a1296b49b2cb1abf5826407ae50051f12bc557c2b6d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8486085bc4aa885743a1296b49b2cb1abf5826407ae50051f12bc557c2b6d4b->enter($__internal_d8486085bc4aa885743a1296b49b2cb1abf5826407ae50051f12bc557c2b6d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6212f005889666abba242ce22a4fb4584be1f776e6f5af3ed57537c13930dc4c->leave($__internal_6212f005889666abba242ce22a4fb4584be1f776e6f5af3ed57537c13930dc4c_prof);

        
        $__internal_d8486085bc4aa885743a1296b49b2cb1abf5826407ae50051f12bc557c2b6d4b->leave($__internal_d8486085bc4aa885743a1296b49b2cb1abf5826407ae50051f12bc557c2b6d4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12665de96d5bb4b30dc552e384c96f5a8c5356667798aaea0c8f45688d182f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12665de96d5bb4b30dc552e384c96f5a8c5356667798aaea0c8f45688d182f23->enter($__internal_12665de96d5bb4b30dc552e384c96f5a8c5356667798aaea0c8f45688d182f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8d740678af9df0ffe4b867218e531dc06b9cc819e9f5c1537b42f93dd888335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d740678af9df0ffe4b867218e531dc06b9cc819e9f5c1537b42f93dd888335->enter($__internal_c8d740678af9df0ffe4b867218e531dc06b9cc819e9f5c1537b42f93dd888335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 11
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 13
        echo "    </div>

    ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <div>
        ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "    </div>
";
        
        $__internal_c8d740678af9df0ffe4b867218e531dc06b9cc819e9f5c1537b42f93dd888335->leave($__internal_c8d740678af9df0ffe4b867218e531dc06b9cc819e9f5c1537b42f93dd888335_prof);

        
        $__internal_12665de96d5bb4b30dc552e384c96f5a8c5356667798aaea0c8f45688d182f23->leave($__internal_12665de96d5bb4b30dc552e384c96f5a8c5356667798aaea0c8f45688d182f23_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d181f9b9ec512baf83f097431a8f86c9286772f49b129c53957fafea44c54cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d181f9b9ec512baf83f097431a8f86c9286772f49b129c53957fafea44c54cf1->enter($__internal_d181f9b9ec512baf83f097431a8f86c9286772f49b129c53957fafea44c54cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bf3e058dd6c2db75fb96707da708e53a98b600e8283154b92525c11a1234127e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3e058dd6c2db75fb96707da708e53a98b600e8283154b92525c11a1234127e->enter($__internal_bf3e058dd6c2db75fb96707da708e53a98b600e8283154b92525c11a1234127e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "        ";
        
        $__internal_bf3e058dd6c2db75fb96707da708e53a98b600e8283154b92525c11a1234127e->leave($__internal_bf3e058dd6c2db75fb96707da708e53a98b600e8283154b92525c11a1234127e_prof);

        
        $__internal_d181f9b9ec512baf83f097431a8f86c9286772f49b129c53957fafea44c54cf1->leave($__internal_d181f9b9ec512baf83f097431a8f86c9286772f49b129c53957fafea44c54cf1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 27,  134 => 26,  123 => 28,  121 => 26,  117 => 24,  114 => 23,  108 => 22,  99 => 19,  94 => 18,  89 => 17,  84 => 16,  82 => 15,  78 => 13,  70 => 11,  64 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base2.html.twig' %}

{% block  body %}
    <div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
            </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
        {% endif %}
    </div>

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}", "@FOSUser/layout.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
