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
        $__internal_ab0d616f0bfa6b725419b14ed710a59e228496647d98c90eb623fe0fc7180a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0d616f0bfa6b725419b14ed710a59e228496647d98c90eb623fe0fc7180a85->enter($__internal_ab0d616f0bfa6b725419b14ed710a59e228496647d98c90eb623fe0fc7180a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_7c6c9d0e26305af79c7c80cc87377d9c5c33b2cc3b175316aeec8448f50c0d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6c9d0e26305af79c7c80cc87377d9c5c33b2cc3b175316aeec8448f50c0d40->enter($__internal_7c6c9d0e26305af79c7c80cc87377d9c5c33b2cc3b175316aeec8448f50c0d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab0d616f0bfa6b725419b14ed710a59e228496647d98c90eb623fe0fc7180a85->leave($__internal_ab0d616f0bfa6b725419b14ed710a59e228496647d98c90eb623fe0fc7180a85_prof);

        
        $__internal_7c6c9d0e26305af79c7c80cc87377d9c5c33b2cc3b175316aeec8448f50c0d40->leave($__internal_7c6c9d0e26305af79c7c80cc87377d9c5c33b2cc3b175316aeec8448f50c0d40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_224503236f21cda53577d339afba92405e71de2d21036c5c56cdfcc163ac5b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224503236f21cda53577d339afba92405e71de2d21036c5c56cdfcc163ac5b70->enter($__internal_224503236f21cda53577d339afba92405e71de2d21036c5c56cdfcc163ac5b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54b71e8f17bb46698c303f7b2bbe8e54f2dc2c2876ad3a0e64b683319fd8a9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b71e8f17bb46698c303f7b2bbe8e54f2dc2c2876ad3a0e64b683319fd8a9f2->enter($__internal_54b71e8f17bb46698c303f7b2bbe8e54f2dc2c2876ad3a0e64b683319fd8a9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54b71e8f17bb46698c303f7b2bbe8e54f2dc2c2876ad3a0e64b683319fd8a9f2->leave($__internal_54b71e8f17bb46698c303f7b2bbe8e54f2dc2c2876ad3a0e64b683319fd8a9f2_prof);

        
        $__internal_224503236f21cda53577d339afba92405e71de2d21036c5c56cdfcc163ac5b70->leave($__internal_224503236f21cda53577d339afba92405e71de2d21036c5c56cdfcc163ac5b70_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_161bbac2ad048176aa4cd8e7d1ecc4fb6744f2bf7cde9d6f89bb71ac3d983ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161bbac2ad048176aa4cd8e7d1ecc4fb6744f2bf7cde9d6f89bb71ac3d983ae1->enter($__internal_161bbac2ad048176aa4cd8e7d1ecc4fb6744f2bf7cde9d6f89bb71ac3d983ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_726d057fe038988cb20ea8c4147997d9b4409ff56287d8ba90a46ea1fa8df673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726d057fe038988cb20ea8c4147997d9b4409ff56287d8ba90a46ea1fa8df673->enter($__internal_726d057fe038988cb20ea8c4147997d9b4409ff56287d8ba90a46ea1fa8df673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "        ";
        
        $__internal_726d057fe038988cb20ea8c4147997d9b4409ff56287d8ba90a46ea1fa8df673->leave($__internal_726d057fe038988cb20ea8c4147997d9b4409ff56287d8ba90a46ea1fa8df673_prof);

        
        $__internal_161bbac2ad048176aa4cd8e7d1ecc4fb6744f2bf7cde9d6f89bb71ac3d983ae1->leave($__internal_161bbac2ad048176aa4cd8e7d1ecc4fb6744f2bf7cde9d6f89bb71ac3d983ae1_prof);

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
{% endblock %}", "@FOSUser/layout.html.twig", "/home/nico/pizzeria/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
