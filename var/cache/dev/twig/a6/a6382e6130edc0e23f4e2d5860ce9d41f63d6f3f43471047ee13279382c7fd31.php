<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_759c60cabe0a1d9b77600151124b27827e46525f945bda7dae32f6b7bc36708e extends Twig_Template
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
        $__internal_0a2f7eb35cd306ad1ef519008042c2d753aaac019f328739305b97f737037050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2f7eb35cd306ad1ef519008042c2d753aaac019f328739305b97f737037050->enter($__internal_0a2f7eb35cd306ad1ef519008042c2d753aaac019f328739305b97f737037050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_6a21b7209ef69a8d36f9abf1d8f41daf5f82d91a7591c6a96269b09fbb116b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a21b7209ef69a8d36f9abf1d8f41daf5f82d91a7591c6a96269b09fbb116b39->enter($__internal_6a21b7209ef69a8d36f9abf1d8f41daf5f82d91a7591c6a96269b09fbb116b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_0a2f7eb35cd306ad1ef519008042c2d753aaac019f328739305b97f737037050->leave($__internal_0a2f7eb35cd306ad1ef519008042c2d753aaac019f328739305b97f737037050_prof);

        
        $__internal_6a21b7209ef69a8d36f9abf1d8f41daf5f82d91a7591c6a96269b09fbb116b39->leave($__internal_6a21b7209ef69a8d36f9abf1d8f41daf5f82d91a7591c6a96269b09fbb116b39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
