<?php

/* clientes/new.html.twig */
class __TwigTemplate_05b07a6c2d380947f5245abf5606072709a223c7341c20f284d27240f6a8a611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clientes/new.html.twig", 1);
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
        $__internal_3befdb6932030cce492e531df35100ce8903dfab34aa05f0d7e1d105b14c90f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3befdb6932030cce492e531df35100ce8903dfab34aa05f0d7e1d105b14c90f2->enter($__internal_3befdb6932030cce492e531df35100ce8903dfab34aa05f0d7e1d105b14c90f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/new.html.twig"));

        $__internal_b78b340d1c1dd0ff42b20267e1b5735df88447705b3820afcfcf8e8c9837a728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78b340d1c1dd0ff42b20267e1b5735df88447705b3820afcfcf8e8c9837a728->enter($__internal_b78b340d1c1dd0ff42b20267e1b5735df88447705b3820afcfcf8e8c9837a728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3befdb6932030cce492e531df35100ce8903dfab34aa05f0d7e1d105b14c90f2->leave($__internal_3befdb6932030cce492e531df35100ce8903dfab34aa05f0d7e1d105b14c90f2_prof);

        
        $__internal_b78b340d1c1dd0ff42b20267e1b5735df88447705b3820afcfcf8e8c9837a728->leave($__internal_b78b340d1c1dd0ff42b20267e1b5735df88447705b3820afcfcf8e8c9837a728_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_168586c717c590d7f94c18eac0dc770eac1f39ead3cb9b355431cf9f35e5b6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168586c717c590d7f94c18eac0dc770eac1f39ead3cb9b355431cf9f35e5b6e1->enter($__internal_168586c717c590d7f94c18eac0dc770eac1f39ead3cb9b355431cf9f35e5b6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_d7243aaa7fd50286bf2ecfca405a9ec3e678f4de866bd483ab229d608cc1f739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7243aaa7fd50286bf2ecfca405a9ec3e678f4de866bd483ab229d608cc1f739->enter($__internal_d7243aaa7fd50286bf2ecfca405a9ec3e678f4de866bd483ab229d608cc1f739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        echo "<h1>Alta Clientes Nuevos</h1>";
        
        $__internal_d7243aaa7fd50286bf2ecfca405a9ec3e678f4de866bd483ab229d608cc1f739->leave($__internal_d7243aaa7fd50286bf2ecfca405a9ec3e678f4de866bd483ab229d608cc1f739_prof);

        
        $__internal_168586c717c590d7f94c18eac0dc770eac1f39ead3cb9b355431cf9f35e5b6e1->leave($__internal_168586c717c590d7f94c18eac0dc770eac1f39ead3cb9b355431cf9f35e5b6e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ffce3cb63cf1fcc76df5e9a7453836810b8606ee0e1cc9adbd5b17cb6ef8f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffce3cb63cf1fcc76df5e9a7453836810b8606ee0e1cc9adbd5b17cb6ef8f4c->enter($__internal_1ffce3cb63cf1fcc76df5e9a7453836810b8606ee0e1cc9adbd5b17cb6ef8f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5f842a897a7a0d0b7246aec044e2153f08c3a0ce19f79fa487e505684ccf1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f842a897a7a0d0b7246aec044e2153f08c3a0ce19f79fa487e505684ccf1ca->enter($__internal_d5f842a897a7a0d0b7246aec044e2153f08c3a0ce19f79fa487e505684ccf1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d5f842a897a7a0d0b7246aec044e2153f08c3a0ce19f79fa487e505684ccf1ca->leave($__internal_d5f842a897a7a0d0b7246aec044e2153f08c3a0ce19f79fa487e505684ccf1ca_prof);

        
        $__internal_1ffce3cb63cf1fcc76df5e9a7453836810b8606ee0e1cc9adbd5b17cb6ef8f4c->leave($__internal_1ffce3cb63cf1fcc76df5e9a7453836810b8606ee0e1cc9adbd5b17cb6ef8f4c_prof);

    }

    public function getTemplateName()
    {
        return "clientes/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  78 => 9,  73 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block jumbotron %}<h1>Alta Clientes Nuevos</h1>{% endblock %}

{% block body %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('clientes_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "clientes/new.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\app\\Resources\\views\\clientes\\new.html.twig");
    }
}
