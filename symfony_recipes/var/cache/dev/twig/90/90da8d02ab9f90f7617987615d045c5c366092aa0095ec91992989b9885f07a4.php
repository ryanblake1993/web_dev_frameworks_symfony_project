<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0fd258d5cd90e6569d1ab61f7a8b5064101977573920a7e0c68993aed9a371c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a41080497b178776c9d645332a20fde47c53da1334af1e0c557593eb78a4c712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41080497b178776c9d645332a20fde47c53da1334af1e0c557593eb78a4c712->enter($__internal_a41080497b178776c9d645332a20fde47c53da1334af1e0c557593eb78a4c712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3b3cfc6d668d4c499ca064828cf953ea497c362857f29ba8c83ddd9a5e3a9bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3cfc6d668d4c499ca064828cf953ea497c362857f29ba8c83ddd9a5e3a9bc8->enter($__internal_3b3cfc6d668d4c499ca064828cf953ea497c362857f29ba8c83ddd9a5e3a9bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a41080497b178776c9d645332a20fde47c53da1334af1e0c557593eb78a4c712->leave($__internal_a41080497b178776c9d645332a20fde47c53da1334af1e0c557593eb78a4c712_prof);

        
        $__internal_3b3cfc6d668d4c499ca064828cf953ea497c362857f29ba8c83ddd9a5e3a9bc8->leave($__internal_3b3cfc6d668d4c499ca064828cf953ea497c362857f29ba8c83ddd9a5e3a9bc8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db9c86fdca1b3f1a3de9deac89ef260e3c25fae0d7df890f0a8052c9ac39d71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9c86fdca1b3f1a3de9deac89ef260e3c25fae0d7df890f0a8052c9ac39d71d->enter($__internal_db9c86fdca1b3f1a3de9deac89ef260e3c25fae0d7df890f0a8052c9ac39d71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58a509697af52fb20d894710bd8d3c258d504c7cef4f31f8806bb26049cbe25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a509697af52fb20d894710bd8d3c258d504c7cef4f31f8806bb26049cbe25f->enter($__internal_58a509697af52fb20d894710bd8d3c258d504c7cef4f31f8806bb26049cbe25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58a509697af52fb20d894710bd8d3c258d504c7cef4f31f8806bb26049cbe25f->leave($__internal_58a509697af52fb20d894710bd8d3c258d504c7cef4f31f8806bb26049cbe25f_prof);

        
        $__internal_db9c86fdca1b3f1a3de9deac89ef260e3c25fae0d7df890f0a8052c9ac39d71d->leave($__internal_db9c86fdca1b3f1a3de9deac89ef260e3c25fae0d7df890f0a8052c9ac39d71d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68bc5ebd2971f83207c3b8e57f271554199864ab7dc048e231458d2200463308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68bc5ebd2971f83207c3b8e57f271554199864ab7dc048e231458d2200463308->enter($__internal_68bc5ebd2971f83207c3b8e57f271554199864ab7dc048e231458d2200463308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_39f41de5b0a1308c820c6a5ef0448fd802e164174c89090de9da2439d85a906a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f41de5b0a1308c820c6a5ef0448fd802e164174c89090de9da2439d85a906a->enter($__internal_39f41de5b0a1308c820c6a5ef0448fd802e164174c89090de9da2439d85a906a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_39f41de5b0a1308c820c6a5ef0448fd802e164174c89090de9da2439d85a906a->leave($__internal_39f41de5b0a1308c820c6a5ef0448fd802e164174c89090de9da2439d85a906a_prof);

        
        $__internal_68bc5ebd2971f83207c3b8e57f271554199864ab7dc048e231458d2200463308->leave($__internal_68bc5ebd2971f83207c3b8e57f271554199864ab7dc048e231458d2200463308_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_455463e65a7f9c71021be7b42be597e874233c46e094b206bd36fe1181b9ef8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455463e65a7f9c71021be7b42be597e874233c46e094b206bd36fe1181b9ef8b->enter($__internal_455463e65a7f9c71021be7b42be597e874233c46e094b206bd36fe1181b9ef8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f738655e9294595cff716901d22538092f0b2fa872307bb4339939a24fb0791e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f738655e9294595cff716901d22538092f0b2fa872307bb4339939a24fb0791e->enter($__internal_f738655e9294595cff716901d22538092f0b2fa872307bb4339939a24fb0791e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f738655e9294595cff716901d22538092f0b2fa872307bb4339939a24fb0791e->leave($__internal_f738655e9294595cff716901d22538092f0b2fa872307bb4339939a24fb0791e_prof);

        
        $__internal_455463e65a7f9c71021be7b42be597e874233c46e094b206bd36fe1181b9ef8b->leave($__internal_455463e65a7f9c71021be7b42be597e874233c46e094b206bd36fe1181b9ef8b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\ryan\\web3\\symfony_recipes\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
