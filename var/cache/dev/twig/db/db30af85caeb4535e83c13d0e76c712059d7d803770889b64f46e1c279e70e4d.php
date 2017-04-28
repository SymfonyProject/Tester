<?php

/* clientes/show.html.twig */
class __TwigTemplate_2057ecc6a6fdfed62fc737abae57a1738caeaefaa9ac71642947b73bbe6b2ad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clientes/show.html.twig", 1);
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
        $__internal_595562e209636e5d5ebe53af9b3378ac6aee795a546e2a325499afeb700ee90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595562e209636e5d5ebe53af9b3378ac6aee795a546e2a325499afeb700ee90c->enter($__internal_595562e209636e5d5ebe53af9b3378ac6aee795a546e2a325499afeb700ee90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/show.html.twig"));

        $__internal_42efbdf16d24440e3daad7abd8676d6750ce5cd80f806a552e539ad4b3786c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42efbdf16d24440e3daad7abd8676d6750ce5cd80f806a552e539ad4b3786c0a->enter($__internal_42efbdf16d24440e3daad7abd8676d6750ce5cd80f806a552e539ad4b3786c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595562e209636e5d5ebe53af9b3378ac6aee795a546e2a325499afeb700ee90c->leave($__internal_595562e209636e5d5ebe53af9b3378ac6aee795a546e2a325499afeb700ee90c_prof);

        
        $__internal_42efbdf16d24440e3daad7abd8676d6750ce5cd80f806a552e539ad4b3786c0a->leave($__internal_42efbdf16d24440e3daad7abd8676d6750ce5cd80f806a552e539ad4b3786c0a_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_de56cc822346d0efce2a4c0cf81485d9ffdb6ad587b434e912db9d755e786f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de56cc822346d0efce2a4c0cf81485d9ffdb6ad587b434e912db9d755e786f4b->enter($__internal_de56cc822346d0efce2a4c0cf81485d9ffdb6ad587b434e912db9d755e786f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_66d5ae5860cbffbf37269d3b3ad0d6b598b8eb12f4df6a61e0e27d60a7cb0b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d5ae5860cbffbf37269d3b3ad0d6b598b8eb12f4df6a61e0e27d60a7cb0b33->enter($__internal_66d5ae5860cbffbf37269d3b3ad0d6b598b8eb12f4df6a61e0e27d60a7cb0b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        echo "<h1>Datos de Cliente</h1>";
        
        $__internal_66d5ae5860cbffbf37269d3b3ad0d6b598b8eb12f4df6a61e0e27d60a7cb0b33->leave($__internal_66d5ae5860cbffbf37269d3b3ad0d6b598b8eb12f4df6a61e0e27d60a7cb0b33_prof);

        
        $__internal_de56cc822346d0efce2a4c0cf81485d9ffdb6ad587b434e912db9d755e786f4b->leave($__internal_de56cc822346d0efce2a4c0cf81485d9ffdb6ad587b434e912db9d755e786f4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1096be9d37cebd29f040fcab7befead809125aa5b87e11a5e792a3f1548a708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1096be9d37cebd29f040fcab7befead809125aa5b87e11a5e792a3f1548a708->enter($__internal_c1096be9d37cebd29f040fcab7befead809125aa5b87e11a5e792a3f1548a708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8407c52d50ad4cea405d29f773565f009bae2d7367c54f2e4e7314cf71fc2e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8407c52d50ad4cea405d29f773565f009bae2d7367c54f2e4e7314cf71fc2e0e->enter($__internal_8407c52d50ad4cea405d29f773565f009bae2d7367c54f2e4e7314cf71fc2e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <table>
        <tbody>
            <tr>
                <th>Mail</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cpostal</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "cpostal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "ciudad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idclientes</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "idclientes", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientes_edit", array("idclientes" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "idclientes", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8407c52d50ad4cea405d29f773565f009bae2d7367c54f2e4e7314cf71fc2e0e->leave($__internal_8407c52d50ad4cea405d29f773565f009bae2d7367c54f2e4e7314cf71fc2e0e_prof);

        
        $__internal_c1096be9d37cebd29f040fcab7befead809125aa5b87e11a5e792a3f1548a708->leave($__internal_c1096be9d37cebd29f040fcab7befead809125aa5b87e11a5e792a3f1548a708_prof);

    }

    public function getTemplateName()
    {
        return "clientes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 46,  132 => 44,  126 => 41,  120 => 38,  110 => 31,  103 => 27,  96 => 23,  89 => 19,  82 => 15,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block jumbotron %}<h1>Datos de Cliente</h1>{% endblock %}

{% block body %}

    <table>
        <tbody>
            <tr>
                <th>Mail</th>
                <td>{{ cliente.mail }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ cliente.password }}</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>{{ cliente.direccion }}</td>
            </tr>
            <tr>
                <th>Cpostal</th>
                <td>{{ cliente.cpostal }}</td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <td>{{ cliente.ciudad }}</td>
            </tr>
            <tr>
                <th>Idclientes</th>
                <td>{{ cliente.idclientes }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('clientes_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('clientes_edit', { 'idclientes': cliente.idclientes }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "clientes/show.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\app\\Resources\\views\\clientes\\show.html.twig");
    }
}
