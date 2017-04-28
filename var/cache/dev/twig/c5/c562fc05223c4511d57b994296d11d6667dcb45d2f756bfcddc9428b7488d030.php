<?php

/* productos/edit.html.twig */
class __TwigTemplate_d1dc824d8d127d0821d7730f638edc3253fae421e7448c909b728461a29ba07b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "productos/edit.html.twig", 1);
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
        $__internal_afaea4b21431ae0b3418484c234e4af79a68e3dc5688cb885409d9ed99b6f576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afaea4b21431ae0b3418484c234e4af79a68e3dc5688cb885409d9ed99b6f576->enter($__internal_afaea4b21431ae0b3418484c234e4af79a68e3dc5688cb885409d9ed99b6f576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/edit.html.twig"));

        $__internal_3d350835b22b3faf8f7d7d7213a5ea08145502d966006a252dd5e920408ac742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d350835b22b3faf8f7d7d7213a5ea08145502d966006a252dd5e920408ac742->enter($__internal_3d350835b22b3faf8f7d7d7213a5ea08145502d966006a252dd5e920408ac742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afaea4b21431ae0b3418484c234e4af79a68e3dc5688cb885409d9ed99b6f576->leave($__internal_afaea4b21431ae0b3418484c234e4af79a68e3dc5688cb885409d9ed99b6f576_prof);

        
        $__internal_3d350835b22b3faf8f7d7d7213a5ea08145502d966006a252dd5e920408ac742->leave($__internal_3d350835b22b3faf8f7d7d7213a5ea08145502d966006a252dd5e920408ac742_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_e269203749f613e361542e8e0da6ec27b7228bada6e09aa745ca580f3a25dbb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e269203749f613e361542e8e0da6ec27b7228bada6e09aa745ca580f3a25dbb9->enter($__internal_e269203749f613e361542e8e0da6ec27b7228bada6e09aa745ca580f3a25dbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_d711c8f819547a08ab235fa4b76b01717e2d5d2876b06f9b7213165e0e150528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d711c8f819547a08ab235fa4b76b01717e2d5d2876b06f9b7213165e0e150528->enter($__internal_d711c8f819547a08ab235fa4b76b01717e2d5d2876b06f9b7213165e0e150528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        echo "<h1>Mantenimiento de Producto</h1>";
        
        $__internal_d711c8f819547a08ab235fa4b76b01717e2d5d2876b06f9b7213165e0e150528->leave($__internal_d711c8f819547a08ab235fa4b76b01717e2d5d2876b06f9b7213165e0e150528_prof);

        
        $__internal_e269203749f613e361542e8e0da6ec27b7228bada6e09aa745ca580f3a25dbb9->leave($__internal_e269203749f613e361542e8e0da6ec27b7228bada6e09aa745ca580f3a25dbb9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1b96f8a2c975c8e1e81ce836b055fe93005ae6525e5b01756e44479d20b0fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b96f8a2c975c8e1e81ce836b055fe93005ae6525e5b01756e44479d20b0fea->enter($__internal_e1b96f8a2c975c8e1e81ce836b055fe93005ae6525e5b01756e44479d20b0fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ad37eda8dae10cae5fe2f2239095b1ca7f3d162f7c65742cc7fee1dee6c7948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad37eda8dae10cae5fe2f2239095b1ca7f3d162f7c65742cc7fee1dee6c7948->enter($__internal_3ad37eda8dae10cae5fe2f2239095b1ca7f3d162f7c65742cc7fee1dee6c7948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3ad37eda8dae10cae5fe2f2239095b1ca7f3d162f7c65742cc7fee1dee6c7948->leave($__internal_3ad37eda8dae10cae5fe2f2239095b1ca7f3d162f7c65742cc7fee1dee6c7948_prof);

        
        $__internal_e1b96f8a2c975c8e1e81ce836b055fe93005ae6525e5b01756e44479d20b0fea->leave($__internal_e1b96f8a2c975c8e1e81ce836b055fe93005ae6525e5b01756e44479d20b0fea_prof);

    }

    public function getTemplateName()
    {
        return "productos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  93 => 17,  87 => 14,  80 => 10,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block jumbotron %}<h1>Mantenimiento de Producto</h1>{% endblock %}

{% block body %}

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('productos_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "productos/edit.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\app\\Resources\\views\\productos\\edit.html.twig");
    }
}
