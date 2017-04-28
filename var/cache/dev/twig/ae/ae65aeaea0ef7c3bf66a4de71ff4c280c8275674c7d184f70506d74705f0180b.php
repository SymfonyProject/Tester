<?php

/* productos/show.html.twig */
class __TwigTemplate_b4a819da7db4980bc16958a4a003e4a70b4ac1fd5c1d84178c588655bae5cc8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "productos/show.html.twig", 1);
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
        $__internal_cedac83e6a191b587781d13e3c35eadb5a7a9949f5762cb7b4586a31e11ff26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedac83e6a191b587781d13e3c35eadb5a7a9949f5762cb7b4586a31e11ff26f->enter($__internal_cedac83e6a191b587781d13e3c35eadb5a7a9949f5762cb7b4586a31e11ff26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/show.html.twig"));

        $__internal_38693e5aee0499ca30c5ebca8c6cc7bb6f53a77207ef1c89ab140047f7d967f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38693e5aee0499ca30c5ebca8c6cc7bb6f53a77207ef1c89ab140047f7d967f1->enter($__internal_38693e5aee0499ca30c5ebca8c6cc7bb6f53a77207ef1c89ab140047f7d967f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cedac83e6a191b587781d13e3c35eadb5a7a9949f5762cb7b4586a31e11ff26f->leave($__internal_cedac83e6a191b587781d13e3c35eadb5a7a9949f5762cb7b4586a31e11ff26f_prof);

        
        $__internal_38693e5aee0499ca30c5ebca8c6cc7bb6f53a77207ef1c89ab140047f7d967f1->leave($__internal_38693e5aee0499ca30c5ebca8c6cc7bb6f53a77207ef1c89ab140047f7d967f1_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_42e4397843b84cbcae334bdb2f9ffa528a0035009067b3923f51947cbcf78e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e4397843b84cbcae334bdb2f9ffa528a0035009067b3923f51947cbcf78e0e->enter($__internal_42e4397843b84cbcae334bdb2f9ffa528a0035009067b3923f51947cbcf78e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_5bd8096218ad76d961cceef2a00856ea20ca6a12191015d39f48bcc887b3e9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd8096218ad76d961cceef2a00856ea20ca6a12191015d39f48bcc887b3e9cb->enter($__internal_5bd8096218ad76d961cceef2a00856ea20ca6a12191015d39f48bcc887b3e9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        echo "<h1>Detalles de Producto</h1>";
        
        $__internal_5bd8096218ad76d961cceef2a00856ea20ca6a12191015d39f48bcc887b3e9cb->leave($__internal_5bd8096218ad76d961cceef2a00856ea20ca6a12191015d39f48bcc887b3e9cb_prof);

        
        $__internal_42e4397843b84cbcae334bdb2f9ffa528a0035009067b3923f51947cbcf78e0e->leave($__internal_42e4397843b84cbcae334bdb2f9ffa528a0035009067b3923f51947cbcf78e0e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc8913af34c1739fcd32366eb813917079072c9f626c7a78703c2babee7fbfd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8913af34c1739fcd32366eb813917079072c9f626c7a78703c2babee7fbfd8->enter($__internal_cc8913af34c1739fcd32366eb813917079072c9f626c7a78703c2babee7fbfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da150bc357a04609a7a18c8e0efd600905d7321638916f79e86a78790b40fda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da150bc357a04609a7a18c8e0efd600905d7321638916f79e86a78790b40fda4->enter($__internal_da150bc357a04609a7a18c8e0efd600905d7321638916f79e86a78790b40fda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <table>
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "precio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idproducto</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "idproducto", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productos_edit", array("idproducto" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "idproducto", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_da150bc357a04609a7a18c8e0efd600905d7321638916f79e86a78790b40fda4->leave($__internal_da150bc357a04609a7a18c8e0efd600905d7321638916f79e86a78790b40fda4_prof);

        
        $__internal_cc8913af34c1739fcd32366eb813917079072c9f626c7a78703c2babee7fbfd8->leave($__internal_cc8913af34c1739fcd32366eb813917079072c9f626c7a78703c2babee7fbfd8_prof);

    }

    public function getTemplateName()
    {
        return "productos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  118 => 36,  112 => 33,  106 => 30,  96 => 23,  89 => 19,  82 => 15,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block jumbotron %}<h1>Detalles de Producto</h1>{% endblock %}

{% block body %}

    <table>
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>{{ producto.nombre }}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{ producto.precio }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ producto.descripcion }}</td>
            </tr>
            <tr>
                <th>Idproducto</th>
                <td>{{ producto.idproducto }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('productos_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('productos_edit', { 'idproducto': producto.idproducto }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "productos/show.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\app\\Resources\\views\\productos\\show.html.twig");
    }
}
