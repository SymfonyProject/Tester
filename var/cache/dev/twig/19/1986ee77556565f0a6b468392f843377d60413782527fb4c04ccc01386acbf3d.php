<?php

/* clientes/edit.html.twig */
class __TwigTemplate_473ad9050952756ad1a3b6dbe32ce1a7e6568160777f2969bb362fe98739546c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clientes/edit.html.twig", 1);
        $this->blocks = array(
            'jumbotron' => array($this, 'block_jumbotron'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3a8fa3faf305d20f8bbda23f0ee1b96ac682df5c20bc2c7dc7f541f5a3bd8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a8fa3faf305d20f8bbda23f0ee1b96ac682df5c20bc2c7dc7f541f5a3bd8b4->enter($__internal_d3a8fa3faf305d20f8bbda23f0ee1b96ac682df5c20bc2c7dc7f541f5a3bd8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/edit.html.twig"));

        $__internal_b8338fdd8c4fa65d3cd8070671a2b5d48a23810b2fc00cb64e41ee73ab6ae7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8338fdd8c4fa65d3cd8070671a2b5d48a23810b2fc00cb64e41ee73ab6ae7e9->enter($__internal_b8338fdd8c4fa65d3cd8070671a2b5d48a23810b2fc00cb64e41ee73ab6ae7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3a8fa3faf305d20f8bbda23f0ee1b96ac682df5c20bc2c7dc7f541f5a3bd8b4->leave($__internal_d3a8fa3faf305d20f8bbda23f0ee1b96ac682df5c20bc2c7dc7f541f5a3bd8b4_prof);

        
        $__internal_b8338fdd8c4fa65d3cd8070671a2b5d48a23810b2fc00cb64e41ee73ab6ae7e9->leave($__internal_b8338fdd8c4fa65d3cd8070671a2b5d48a23810b2fc00cb64e41ee73ab6ae7e9_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_6eb46a6c9db9b6c78f98e492fa35ca4be652ccb790e696c1e83ce4cba1968046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb46a6c9db9b6c78f98e492fa35ca4be652ccb790e696c1e83ce4cba1968046->enter($__internal_6eb46a6c9db9b6c78f98e492fa35ca4be652ccb790e696c1e83ce4cba1968046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_45b39dd8cd2d53a1e40c0f70bfc445f67e7e4d0bc10465a41acf65c504e12aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b39dd8cd2d53a1e40c0f70bfc445f67e7e4d0bc10465a41acf65c504e12aa2->enter($__internal_45b39dd8cd2d53a1e40c0f70bfc445f67e7e4d0bc10465a41acf65c504e12aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        echo "<h1>Mantenimiento de Cliente</h1>";
        
        $__internal_45b39dd8cd2d53a1e40c0f70bfc445f67e7e4d0bc10465a41acf65c504e12aa2->leave($__internal_45b39dd8cd2d53a1e40c0f70bfc445f67e7e4d0bc10465a41acf65c504e12aa2_prof);

        
        $__internal_6eb46a6c9db9b6c78f98e492fa35ca4be652ccb790e696c1e83ce4cba1968046->leave($__internal_6eb46a6c9db9b6c78f98e492fa35ca4be652ccb790e696c1e83ce4cba1968046_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_86be1d8266dfd5d068f4b95dff22ddd74d12df661749301f817ad1a7ccb929d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86be1d8266dfd5d068f4b95dff22ddd74d12df661749301f817ad1a7ccb929d2->enter($__internal_86be1d8266dfd5d068f4b95dff22ddd74d12df661749301f817ad1a7ccb929d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3d3d7f71bef77f59bdb6a17e0d15c7a4ce598589e15b2a818591defafb59cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d3d7f71bef77f59bdb6a17e0d15c7a4ce598589e15b2a818591defafb59cc3->enter($__internal_b3d3d7f71bef77f59bdb6a17e0d15c7a4ce598589e15b2a818591defafb59cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b3d3d7f71bef77f59bdb6a17e0d15c7a4ce598589e15b2a818591defafb59cc3->leave($__internal_b3d3d7f71bef77f59bdb6a17e0d15c7a4ce598589e15b2a818591defafb59cc3_prof);

        
        $__internal_86be1d8266dfd5d068f4b95dff22ddd74d12df661749301f817ad1a7ccb929d2->leave($__internal_86be1d8266dfd5d068f4b95dff22ddd74d12df661749301f817ad1a7ccb929d2_prof);

    }

    public function getTemplateName()
    {
        return "clientes/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  91 => 16,  85 => 13,  78 => 9,  73 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block jumbotron %}<h1>Mantenimiento de Cliente</h1>{% endblock %}

{% block body %}
        {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('clientes_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "clientes/edit.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\app\\Resources\\views\\clientes\\edit.html.twig");
    }
}
