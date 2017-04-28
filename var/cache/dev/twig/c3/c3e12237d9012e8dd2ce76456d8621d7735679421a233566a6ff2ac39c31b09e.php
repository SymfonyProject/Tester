<?php

/* productos/new.html.twig */
class __TwigTemplate_449b329a224ed2dd5403060786fec640071d52631e0ca5a6c3c8528ef225a9d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "productos/new.html.twig", 1);
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
        $__internal_b8d4bc6815be651baff0d8222e6c4a584f6e7a4f657f094ca400d49840765788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d4bc6815be651baff0d8222e6c4a584f6e7a4f657f094ca400d49840765788->enter($__internal_b8d4bc6815be651baff0d8222e6c4a584f6e7a4f657f094ca400d49840765788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/new.html.twig"));

        $__internal_1ee1128e46e24057f26abe83a6f331960c27691949f780b7d12553743c0ab47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee1128e46e24057f26abe83a6f331960c27691949f780b7d12553743c0ab47c->enter($__internal_1ee1128e46e24057f26abe83a6f331960c27691949f780b7d12553743c0ab47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d4bc6815be651baff0d8222e6c4a584f6e7a4f657f094ca400d49840765788->leave($__internal_b8d4bc6815be651baff0d8222e6c4a584f6e7a4f657f094ca400d49840765788_prof);

        
        $__internal_1ee1128e46e24057f26abe83a6f331960c27691949f780b7d12553743c0ab47c->leave($__internal_1ee1128e46e24057f26abe83a6f331960c27691949f780b7d12553743c0ab47c_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_73197b9aba27315eab80ad3c04780490069b6e51fd983da459ea0ca70ac8c07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73197b9aba27315eab80ad3c04780490069b6e51fd983da459ea0ca70ac8c07b->enter($__internal_73197b9aba27315eab80ad3c04780490069b6e51fd983da459ea0ca70ac8c07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_181dd7df1f40726bcd9a94d2af1a07c17f4c7cf22993ad6d58c52e14f0a40057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181dd7df1f40726bcd9a94d2af1a07c17f4c7cf22993ad6d58c52e14f0a40057->enter($__internal_181dd7df1f40726bcd9a94d2af1a07c17f4c7cf22993ad6d58c52e14f0a40057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        echo "<h1>Alta Productos Nuevos</h1>";
        
        $__internal_181dd7df1f40726bcd9a94d2af1a07c17f4c7cf22993ad6d58c52e14f0a40057->leave($__internal_181dd7df1f40726bcd9a94d2af1a07c17f4c7cf22993ad6d58c52e14f0a40057_prof);

        
        $__internal_73197b9aba27315eab80ad3c04780490069b6e51fd983da459ea0ca70ac8c07b->leave($__internal_73197b9aba27315eab80ad3c04780490069b6e51fd983da459ea0ca70ac8c07b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e346ea5cef61b8060a53abb4da33b39ec9b88bff2c9a9d540f65f356fb1fe5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e346ea5cef61b8060a53abb4da33b39ec9b88bff2c9a9d540f65f356fb1fe5d->enter($__internal_4e346ea5cef61b8060a53abb4da33b39ec9b88bff2c9a9d540f65f356fb1fe5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19f2fec0d832fa26b8049fbf1d3585ec052c29a3a479e92a7f4c2a32fdde20d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f2fec0d832fa26b8049fbf1d3585ec052c29a3a479e92a7f4c2a32fdde20d2->enter($__internal_19f2fec0d832fa26b8049fbf1d3585ec052c29a3a479e92a7f4c2a32fdde20d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_19f2fec0d832fa26b8049fbf1d3585ec052c29a3a479e92a7f4c2a32fdde20d2->leave($__internal_19f2fec0d832fa26b8049fbf1d3585ec052c29a3a479e92a7f4c2a32fdde20d2_prof);

        
        $__internal_4e346ea5cef61b8060a53abb4da33b39ec9b88bff2c9a9d540f65f356fb1fe5d->leave($__internal_4e346ea5cef61b8060a53abb4da33b39ec9b88bff2c9a9d540f65f356fb1fe5d_prof);

    }

    public function getTemplateName()
    {
        return "productos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 14,  80 => 10,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block jumbotron %}<h1>Alta Productos Nuevos</h1>{% endblock %}

{% block body %}

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('productos_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "productos/new.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\app\\Resources\\views\\productos\\new.html.twig");
    }
}
