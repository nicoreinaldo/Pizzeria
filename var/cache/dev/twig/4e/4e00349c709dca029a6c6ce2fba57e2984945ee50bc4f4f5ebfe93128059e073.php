<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_f3a1b1668704238be3b5c94cd8cd5cf8417ee84d09767284e67ceea576dbbb2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b8cc759a3af1ad40d2842df66940ec05aaa05b3694fceee3a7d31e6d0cbf46f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8cc759a3af1ad40d2842df66940ec05aaa05b3694fceee3a7d31e6d0cbf46f->enter($__internal_0b8cc759a3af1ad40d2842df66940ec05aaa05b3694fceee3a7d31e6d0cbf46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_ef1a7349d76020629c7e3659ae51c6d5278c6f6c9d53e83800d1b404569d2e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1a7349d76020629c7e3659ae51c6d5278c6f6c9d53e83800d1b404569d2e25->enter($__internal_ef1a7349d76020629c7e3659ae51c6d5278c6f6c9d53e83800d1b404569d2e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_0b8cc759a3af1ad40d2842df66940ec05aaa05b3694fceee3a7d31e6d0cbf46f->leave($__internal_0b8cc759a3af1ad40d2842df66940ec05aaa05b3694fceee3a7d31e6d0cbf46f_prof);

        
        $__internal_ef1a7349d76020629c7e3659ae51c6d5278c6f6c9d53e83800d1b404569d2e25->leave($__internal_ef1a7349d76020629c7e3659ae51c6d5278c6f6c9d53e83800d1b404569d2e25_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_d54547d16ece827d939d3385bae39a9ce7314e8e82242a422fd07d489f2cea09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54547d16ece827d939d3385bae39a9ce7314e8e82242a422fd07d489f2cea09->enter($__internal_d54547d16ece827d939d3385bae39a9ce7314e8e82242a422fd07d489f2cea09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_f74b512642676b9c7e26ad8ad2cfec2410454a5ee9fadc71e8207c247d3023a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74b512642676b9c7e26ad8ad2cfec2410454a5ee9fadc71e8207c247d3023a0->enter($__internal_f74b512642676b9c7e26ad8ad2cfec2410454a5ee9fadc71e8207c247d3023a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_f74b512642676b9c7e26ad8ad2cfec2410454a5ee9fadc71e8207c247d3023a0->leave($__internal_f74b512642676b9c7e26ad8ad2cfec2410454a5ee9fadc71e8207c247d3023a0_prof);

        
        $__internal_d54547d16ece827d939d3385bae39a9ce7314e8e82242a422fd07d489f2cea09->leave($__internal_d54547d16ece827d939d3385bae39a9ce7314e8e82242a422fd07d489f2cea09_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_13bf87e631aa8455ccfc5cf1b2985563a2a5cb57589f44b11990e8c1df206047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13bf87e631aa8455ccfc5cf1b2985563a2a5cb57589f44b11990e8c1df206047->enter($__internal_13bf87e631aa8455ccfc5cf1b2985563a2a5cb57589f44b11990e8c1df206047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_17e577c58e3150fe3d8a16afc75eedeabe319a4dbf468c05477b46ebf8335bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e577c58e3150fe3d8a16afc75eedeabe319a4dbf468c05477b46ebf8335bf5->enter($__internal_17e577c58e3150fe3d8a16afc75eedeabe319a4dbf468c05477b46ebf8335bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_17e577c58e3150fe3d8a16afc75eedeabe319a4dbf468c05477b46ebf8335bf5->leave($__internal_17e577c58e3150fe3d8a16afc75eedeabe319a4dbf468c05477b46ebf8335bf5_prof);

        
        $__internal_13bf87e631aa8455ccfc5cf1b2985563a2a5cb57589f44b11990e8c1df206047->leave($__internal_13bf87e631aa8455ccfc5cf1b2985563a2a5cb57589f44b11990e8c1df206047_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_1e342458e2b91a4fa42ec87e724baf7b9faa702fcd61a88026665ead144cb708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e342458e2b91a4fa42ec87e724baf7b9faa702fcd61a88026665ead144cb708->enter($__internal_1e342458e2b91a4fa42ec87e724baf7b9faa702fcd61a88026665ead144cb708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_9ea0452e5ce1a6702e861696beb7eb1d3e1b49d2a9c2a815927f5c48edfec9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea0452e5ce1a6702e861696beb7eb1d3e1b49d2a9c2a815927f5c48edfec9fc->enter($__internal_9ea0452e5ce1a6702e861696beb7eb1d3e1b49d2a9c2a815927f5c48edfec9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_9ea0452e5ce1a6702e861696beb7eb1d3e1b49d2a9c2a815927f5c48edfec9fc->leave($__internal_9ea0452e5ce1a6702e861696beb7eb1d3e1b49d2a9c2a815927f5c48edfec9fc_prof);

        
        $__internal_1e342458e2b91a4fa42ec87e724baf7b9faa702fcd61a88026665ead144cb708->leave($__internal_1e342458e2b91a4fa42ec87e724baf7b9faa702fcd61a88026665ead144cb708_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_17c03defa768be8cad49ad3d99634d9b1df8d2862fe9f4f070140dd359ddf3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c03defa768be8cad49ad3d99634d9b1df8d2862fe9f4f070140dd359ddf3a1->enter($__internal_17c03defa768be8cad49ad3d99634d9b1df8d2862fe9f4f070140dd359ddf3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c4fb825fea4fde6e14b6ca87b1d0253b70fb05ec8728fb28d9877d26e69017e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fb825fea4fde6e14b6ca87b1d0253b70fb05ec8728fb28d9877d26e69017e7->enter($__internal_c4fb825fea4fde6e14b6ca87b1d0253b70fb05ec8728fb28d9877d26e69017e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_c4fb825fea4fde6e14b6ca87b1d0253b70fb05ec8728fb28d9877d26e69017e7->leave($__internal_c4fb825fea4fde6e14b6ca87b1d0253b70fb05ec8728fb28d9877d26e69017e7_prof);

        
        $__internal_17c03defa768be8cad49ad3d99634d9b1df8d2862fe9f4f070140dd359ddf3a1->leave($__internal_17c03defa768be8cad49ad3d99634d9b1df8d2862fe9f4f070140dd359ddf3a1_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_eb55617a346b5af811d5fc606e79547d353166ec7afed12d5bd992fbb7c230a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb55617a346b5af811d5fc606e79547d353166ec7afed12d5bd992fbb7c230a8->enter($__internal_eb55617a346b5af811d5fc606e79547d353166ec7afed12d5bd992fbb7c230a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d776097491015bad2cb191b14bc64b0f05895aae24883476f5e69a4b97f68df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d776097491015bad2cb191b14bc64b0f05895aae24883476f5e69a4b97f68df5->enter($__internal_d776097491015bad2cb191b14bc64b0f05895aae24883476f5e69a4b97f68df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d776097491015bad2cb191b14bc64b0f05895aae24883476f5e69a4b97f68df5->leave($__internal_d776097491015bad2cb191b14bc64b0f05895aae24883476f5e69a4b97f68df5_prof);

        
        $__internal_eb55617a346b5af811d5fc606e79547d353166ec7afed12d5bd992fbb7c230a8->leave($__internal_eb55617a346b5af811d5fc606e79547d353166ec7afed12d5bd992fbb7c230a8_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e1ad2daf26b1c25845d58eca78c7e9cf288d9ebd40f8db727d958b5f524f0d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ad2daf26b1c25845d58eca78c7e9cf288d9ebd40f8db727d958b5f524f0d91->enter($__internal_e1ad2daf26b1c25845d58eca78c7e9cf288d9ebd40f8db727d958b5f524f0d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ceeb87d2b57ef4295f3a8717f5b74f0cb4961bb8e9e15a649b32b703da851b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceeb87d2b57ef4295f3a8717f5b74f0cb4961bb8e9e15a649b32b703da851b51->enter($__internal_ceeb87d2b57ef4295f3a8717f5b74f0cb4961bb8e9e15a649b32b703da851b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_ceeb87d2b57ef4295f3a8717f5b74f0cb4961bb8e9e15a649b32b703da851b51->leave($__internal_ceeb87d2b57ef4295f3a8717f5b74f0cb4961bb8e9e15a649b32b703da851b51_prof);

        
        $__internal_e1ad2daf26b1c25845d58eca78c7e9cf288d9ebd40f8db727d958b5f524f0d91->leave($__internal_e1ad2daf26b1c25845d58eca78c7e9cf288d9ebd40f8db727d958b5f524f0d91_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_90723a90b669adcb53c4eb55e79ab636329ad92af68a689b0c738430e6b740aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90723a90b669adcb53c4eb55e79ab636329ad92af68a689b0c738430e6b740aa->enter($__internal_90723a90b669adcb53c4eb55e79ab636329ad92af68a689b0c738430e6b740aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_8ed8cc2d7f366ef8c751def95204fe1abea639860e597aa673fbd9463a5729b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed8cc2d7f366ef8c751def95204fe1abea639860e597aa673fbd9463a5729b2->enter($__internal_8ed8cc2d7f366ef8c751def95204fe1abea639860e597aa673fbd9463a5729b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8ed8cc2d7f366ef8c751def95204fe1abea639860e597aa673fbd9463a5729b2->leave($__internal_8ed8cc2d7f366ef8c751def95204fe1abea639860e597aa673fbd9463a5729b2_prof);

        
        $__internal_90723a90b669adcb53c4eb55e79ab636329ad92af68a689b0c738430e6b740aa->leave($__internal_90723a90b669adcb53c4eb55e79ab636329ad92af68a689b0c738430e6b740aa_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a1b33546390fe833d14f157607d16457974f2a2b30fcd9256ccdd53603aa0032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b33546390fe833d14f157607d16457974f2a2b30fcd9256ccdd53603aa0032->enter($__internal_a1b33546390fe833d14f157607d16457974f2a2b30fcd9256ccdd53603aa0032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_abda2ecd1e7671f5935c0f761e458c3302c77ea6f21597235eff931bb3754529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abda2ecd1e7671f5935c0f761e458c3302c77ea6f21597235eff931bb3754529->enter($__internal_abda2ecd1e7671f5935c0f761e458c3302c77ea6f21597235eff931bb3754529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_abda2ecd1e7671f5935c0f761e458c3302c77ea6f21597235eff931bb3754529->leave($__internal_abda2ecd1e7671f5935c0f761e458c3302c77ea6f21597235eff931bb3754529_prof);

        
        $__internal_a1b33546390fe833d14f157607d16457974f2a2b30fcd9256ccdd53603aa0032->leave($__internal_a1b33546390fe833d14f157607d16457974f2a2b30fcd9256ccdd53603aa0032_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_0ae07c94d1d7fd4e01bcb42608b61042491903f1849c210a0797e279ad4bde27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae07c94d1d7fd4e01bcb42608b61042491903f1849c210a0797e279ad4bde27->enter($__internal_0ae07c94d1d7fd4e01bcb42608b61042491903f1849c210a0797e279ad4bde27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_660b6a737932cdc093d95faa3d5fff4558824024e310aea6f4010b45dc1bea5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660b6a737932cdc093d95faa3d5fff4558824024e310aea6f4010b45dc1bea5a->enter($__internal_660b6a737932cdc093d95faa3d5fff4558824024e310aea6f4010b45dc1bea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_660b6a737932cdc093d95faa3d5fff4558824024e310aea6f4010b45dc1bea5a->leave($__internal_660b6a737932cdc093d95faa3d5fff4558824024e310aea6f4010b45dc1bea5a_prof);

        
        $__internal_0ae07c94d1d7fd4e01bcb42608b61042491903f1849c210a0797e279ad4bde27->leave($__internal_0ae07c94d1d7fd4e01bcb42608b61042491903f1849c210a0797e279ad4bde27_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a8da8b419cb8128922530413142669fc716b837a5c5b1df2ebdf6f8e7dc2ccad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8da8b419cb8128922530413142669fc716b837a5c5b1df2ebdf6f8e7dc2ccad->enter($__internal_a8da8b419cb8128922530413142669fc716b837a5c5b1df2ebdf6f8e7dc2ccad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_dd04ba75bef93ab6464f7226530f9a5c6b23a3fbf2eabc067361a91976840fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd04ba75bef93ab6464f7226530f9a5c6b23a3fbf2eabc067361a91976840fab->enter($__internal_dd04ba75bef93ab6464f7226530f9a5c6b23a3fbf2eabc067361a91976840fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_dd04ba75bef93ab6464f7226530f9a5c6b23a3fbf2eabc067361a91976840fab->leave($__internal_dd04ba75bef93ab6464f7226530f9a5c6b23a3fbf2eabc067361a91976840fab_prof);

        
        $__internal_a8da8b419cb8128922530413142669fc716b837a5c5b1df2ebdf6f8e7dc2ccad->leave($__internal_a8da8b419cb8128922530413142669fc716b837a5c5b1df2ebdf6f8e7dc2ccad_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
