<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea04b0681df5be4f4372891dbf57cd265f736c45c771d50e480f083206011b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a8f8a85024e2558eb5c446d5cb63b6970d6ffdde291e5ac37cba91eb480f057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8f8a85024e2558eb5c446d5cb63b6970d6ffdde291e5ac37cba91eb480f057->enter($__internal_3a8f8a85024e2558eb5c446d5cb63b6970d6ffdde291e5ac37cba91eb480f057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4f1e3f9736785d5e50d2cee62d273790bbe37b0f39fb0dd17557a52352e07798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1e3f9736785d5e50d2cee62d273790bbe37b0f39fb0dd17557a52352e07798->enter($__internal_4f1e3f9736785d5e50d2cee62d273790bbe37b0f39fb0dd17557a52352e07798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a8f8a85024e2558eb5c446d5cb63b6970d6ffdde291e5ac37cba91eb480f057->leave($__internal_3a8f8a85024e2558eb5c446d5cb63b6970d6ffdde291e5ac37cba91eb480f057_prof);

        
        $__internal_4f1e3f9736785d5e50d2cee62d273790bbe37b0f39fb0dd17557a52352e07798->leave($__internal_4f1e3f9736785d5e50d2cee62d273790bbe37b0f39fb0dd17557a52352e07798_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cf2dbbbebcc56e8e0baaa3e0551dec078052184ecc4df1f61ded49c7d635cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf2dbbbebcc56e8e0baaa3e0551dec078052184ecc4df1f61ded49c7d635cb2->enter($__internal_6cf2dbbbebcc56e8e0baaa3e0551dec078052184ecc4df1f61ded49c7d635cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30f1f10c765072dcc5d38241216e93e5fc067e5c41fef3a629e74fb3835f77fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f1f10c765072dcc5d38241216e93e5fc067e5c41fef3a629e74fb3835f77fb->enter($__internal_30f1f10c765072dcc5d38241216e93e5fc067e5c41fef3a629e74fb3835f77fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_30f1f10c765072dcc5d38241216e93e5fc067e5c41fef3a629e74fb3835f77fb->leave($__internal_30f1f10c765072dcc5d38241216e93e5fc067e5c41fef3a629e74fb3835f77fb_prof);

        
        $__internal_6cf2dbbbebcc56e8e0baaa3e0551dec078052184ecc4df1f61ded49c7d635cb2->leave($__internal_6cf2dbbbebcc56e8e0baaa3e0551dec078052184ecc4df1f61ded49c7d635cb2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f078370eb1029b7415caafcbbe85134b0ce301ea22915c273b4be781a8d1a6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f078370eb1029b7415caafcbbe85134b0ce301ea22915c273b4be781a8d1a6ac->enter($__internal_f078370eb1029b7415caafcbbe85134b0ce301ea22915c273b4be781a8d1a6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e8697e320b2e802965094609d64ef65149ef8c58ff30a7cebb3b10d8f162a639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8697e320b2e802965094609d64ef65149ef8c58ff30a7cebb3b10d8f162a639->enter($__internal_e8697e320b2e802965094609d64ef65149ef8c58ff30a7cebb3b10d8f162a639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e8697e320b2e802965094609d64ef65149ef8c58ff30a7cebb3b10d8f162a639->leave($__internal_e8697e320b2e802965094609d64ef65149ef8c58ff30a7cebb3b10d8f162a639_prof);

        
        $__internal_f078370eb1029b7415caafcbbe85134b0ce301ea22915c273b4be781a8d1a6ac->leave($__internal_f078370eb1029b7415caafcbbe85134b0ce301ea22915c273b4be781a8d1a6ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e6b385a6a2ebc5de4c8e7cfabce3e3e9e27e7daf4d678847b3d973bb75c8af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6b385a6a2ebc5de4c8e7cfabce3e3e9e27e7daf4d678847b3d973bb75c8af3->enter($__internal_5e6b385a6a2ebc5de4c8e7cfabce3e3e9e27e7daf4d678847b3d973bb75c8af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1d6a3559252091eb0e74bd84fef58b81f7919cb7140454520a699fee7fd7eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d6a3559252091eb0e74bd84fef58b81f7919cb7140454520a699fee7fd7eb3->enter($__internal_a1d6a3559252091eb0e74bd84fef58b81f7919cb7140454520a699fee7fd7eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a1d6a3559252091eb0e74bd84fef58b81f7919cb7140454520a699fee7fd7eb3->leave($__internal_a1d6a3559252091eb0e74bd84fef58b81f7919cb7140454520a699fee7fd7eb3_prof);

        
        $__internal_5e6b385a6a2ebc5de4c8e7cfabce3e3e9e27e7daf4d678847b3d973bb75c8af3->leave($__internal_5e6b385a6a2ebc5de4c8e7cfabce3e3e9e27e7daf4d678847b3d973bb75c8af3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\ryan\\web3\\symfony_recipes\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
