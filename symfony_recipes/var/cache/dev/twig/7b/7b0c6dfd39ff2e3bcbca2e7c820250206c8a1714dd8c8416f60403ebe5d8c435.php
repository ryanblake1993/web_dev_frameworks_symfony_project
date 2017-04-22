<?php

/* security/login.html.twig */
class __TwigTemplate_e20a76f497929fb49298f03c5f8256a9a2380b307b185e6c06dc8751b802849f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe0f50201d33ca72cdca669e098e4a053fbfd091c2ad33d5333b0778384e7493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0f50201d33ca72cdca669e098e4a053fbfd091c2ad33d5333b0778384e7493->enter($__internal_fe0f50201d33ca72cdca669e098e4a053fbfd091c2ad33d5333b0778384e7493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_5425bf2d331e1d25910bc104c97c35e1bb05f060ed05ab429090bf950e52bedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5425bf2d331e1d25910bc104c97c35e1bb05f060ed05ab429090bf950e52bedb->enter($__internal_5425bf2d331e1d25910bc104c97c35e1bb05f060ed05ab429090bf950e52bedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe0f50201d33ca72cdca669e098e4a053fbfd091c2ad33d5333b0778384e7493->leave($__internal_fe0f50201d33ca72cdca669e098e4a053fbfd091c2ad33d5333b0778384e7493_prof);

        
        $__internal_5425bf2d331e1d25910bc104c97c35e1bb05f060ed05ab429090bf950e52bedb->leave($__internal_5425bf2d331e1d25910bc104c97c35e1bb05f060ed05ab429090bf950e52bedb_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_23e7aa19d1687bd3f97c5512f1b153aaa79287500e61810916204f375977a7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e7aa19d1687bd3f97c5512f1b153aaa79287500e61810916204f375977a7e8->enter($__internal_23e7aa19d1687bd3f97c5512f1b153aaa79287500e61810916204f375977a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_b2510e7bf03cccacd8d0891c39ffc6c66e18af33bedb70769965d12d24d6c4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2510e7bf03cccacd8d0891c39ffc6c66e18af33bedb70769965d12d24d6c4f2->enter($__internal_b2510e7bf03cccacd8d0891c39ffc6c66e18af33bedb70769965d12d24d6c4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "login";
        
        $__internal_b2510e7bf03cccacd8d0891c39ffc6c66e18af33bedb70769965d12d24d6c4f2->leave($__internal_b2510e7bf03cccacd8d0891c39ffc6c66e18af33bedb70769965d12d24d6c4f2_prof);

        
        $__internal_23e7aa19d1687bd3f97c5512f1b153aaa79287500e61810916204f375977a7e8->leave($__internal_23e7aa19d1687bd3f97c5512f1b153aaa79287500e61810916204f375977a7e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f5f01ab178f721dd7c0ef550707cd300ee9e115a989c02e56db1448066ef93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f5f01ab178f721dd7c0ef550707cd300ee9e115a989c02e56db1448066ef93->enter($__internal_20f5f01ab178f721dd7c0ef550707cd300ee9e115a989c02e56db1448066ef93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ab6b4de15f0ba18b9c6530ce157230e80d7419f44f54f54991665c17020c6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab6b4de15f0ba18b9c6530ce157230e80d7419f44f54f54991665c17020c6a7->enter($__internal_4ab6b4de15f0ba18b9c6530ce157230e80d7419f44f54f54991665c17020c6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Login</h1>

    ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "
        <div>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>

    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

        <p>

            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <p>

            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        <p>

            <button type=\"submit\">login</button>
    </form>

";
        
        $__internal_4ab6b4de15f0ba18b9c6530ce157230e80d7419f44f54f54991665c17020c6a7->leave($__internal_4ab6b4de15f0ba18b9c6530ce157230e80d7419f44f54f54991665c17020c6a7_prof);

        
        $__internal_20f5f01ab178f721dd7c0ef550707cd300ee9e115a989c02e56db1448066ef93->leave($__internal_20f5f01ab178f721dd7c0ef550707cd300ee9e115a989c02e56db1448066ef93_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  91 => 16,  86 => 14,  83 => 13,  77 => 10,  74 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block pageTitle %}login{% endblock %}

{% block body %}
    <h1>Login</h1>

    {% if error %}

        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>

    {% endif %}

    <form action=\"{{ path('login') }}\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\">

        <p>

            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <p>

            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        <p>

            <button type=\"submit\">login</button>
    </form>

{% endblock %}













{#
{% extends '../base.html.twig' %}
{% block body %}
    <h1>Login</h1>
    {% if app.session.flashBag.has('error') %}
        <div class=\"flash-error\">
            {% for msg in app.session.flashBag.get('error') %}
                {{ msg }}
            {% endfor %}
        </div>
    {% endif %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Login\" />
    {{ form_end(form) }}
    <li>
        <a href=\"{{ path('login') }}\">Admin Index, Only here to test if can lookat admin without Authentication Delete</a>
    </li>
{% endblock %}


#}



", "security/login.html.twig", "C:\\Users\\ryan\\web3\\symfony_recipes\\app\\Resources\\views\\security\\login.html.twig");
    }
}
