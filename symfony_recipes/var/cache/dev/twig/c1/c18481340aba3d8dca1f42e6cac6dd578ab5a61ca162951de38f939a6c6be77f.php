<?php

/* default/index.html.twig */
class __TwigTemplate_a694d06dfc2713ce2ad0d33d8cb0f32ee1d79d8a1e2d37812dfc811d8ff907ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_531f09fd42cf736ad4a974611f0f6f202a5b2cb8c36b33752bd3cbd658c0b2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531f09fd42cf736ad4a974611f0f6f202a5b2cb8c36b33752bd3cbd658c0b2cc->enter($__internal_531f09fd42cf736ad4a974611f0f6f202a5b2cb8c36b33752bd3cbd658c0b2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_11bb59df21b0178418f43e7b7b4836a84bddd53e628ea0a41d7c430291f3f560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bb59df21b0178418f43e7b7b4836a84bddd53e628ea0a41d7c430291f3f560->enter($__internal_11bb59df21b0178418f43e7b7b4836a84bddd53e628ea0a41d7c430291f3f560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_531f09fd42cf736ad4a974611f0f6f202a5b2cb8c36b33752bd3cbd658c0b2cc->leave($__internal_531f09fd42cf736ad4a974611f0f6f202a5b2cb8c36b33752bd3cbd658c0b2cc_prof);

        
        $__internal_11bb59df21b0178418f43e7b7b4836a84bddd53e628ea0a41d7c430291f3f560->leave($__internal_11bb59df21b0178418f43e7b7b4836a84bddd53e628ea0a41d7c430291f3f560_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_30503983d0ebce93a8c4b09eaa1081c91a297ead1e0b59161af153b52f6879e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30503983d0ebce93a8c4b09eaa1081c91a297ead1e0b59161af153b52f6879e0->enter($__internal_30503983d0ebce93a8c4b09eaa1081c91a297ead1e0b59161af153b52f6879e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_606c563aa7ac15f813dfd53356f31ec155f243c83570e94d8ab30ce7da89bca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606c563aa7ac15f813dfd53356f31ec155f243c83570e94d8ab30ce7da89bca3->enter($__internal_606c563aa7ac15f813dfd53356f31ec155f243c83570e94d8ab30ce7da89bca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " Home Page ";
        
        $__internal_606c563aa7ac15f813dfd53356f31ec155f243c83570e94d8ab30ce7da89bca3->leave($__internal_606c563aa7ac15f813dfd53356f31ec155f243c83570e94d8ab30ce7da89bca3_prof);

        
        $__internal_30503983d0ebce93a8c4b09eaa1081c91a297ead1e0b59161af153b52f6879e0->leave($__internal_30503983d0ebce93a8c4b09eaa1081c91a297ead1e0b59161af153b52f6879e0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0cff19e64771649a0ec3fa747a2cf5a479f66625c57a5b219829b6ce61be86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0cff19e64771649a0ec3fa747a2cf5a479f66625c57a5b219829b6ce61be86e->enter($__internal_d0cff19e64771649a0ec3fa747a2cf5a479f66625c57a5b219829b6ce61be86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_618146b8d61b6978c777dc9079f7d6c050a9b568b7737a542ff1398240be14a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618146b8d61b6978c777dc9079f7d6c050a9b568b7737a542ff1398240be14a2->enter($__internal_618146b8d61b6978c777dc9079f7d6c050a9b568b7737a542ff1398240be14a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1> Welcome to the Home Page</h1>
    <ul>
        <li>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Homepage</a>
        </li>
        <br>
        <br>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Tags</a>
        </li>
        <br>
        <li>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Recipes</a>
        </li>
        <br>
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Admin Login</a>
        </li>
        <br>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">User Login</a>
        </li>
        <br>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">comment</a>
        </li>
    </ul>
";
        
        $__internal_618146b8d61b6978c777dc9079f7d6c050a9b568b7737a542ff1398240be14a2->leave($__internal_618146b8d61b6978c777dc9079f7d6c050a9b568b7737a542ff1398240be14a2_prof);

        
        $__internal_d0cff19e64771649a0ec3fa747a2cf5a479f66625c57a5b219829b6ce61be86e->leave($__internal_d0cff19e64771649a0ec3fa747a2cf5a479f66625c57a5b219829b6ce61be86e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  102 => 26,  95 => 22,  88 => 18,  81 => 14,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block pageTitle %} Home Page {% endblock %}

{% block body %}
    <h1> Welcome to the Home Page</h1>
    <ul>
        <li>
            <a href=\"{{ path('homepage') }}\">Homepage</a>
        </li>
        <br>
        <br>
        <li>
            <a href=\"{{ path('tag_index') }}\">Tags</a>
        </li>
        <br>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Recipes</a>
        </li>
        <br>
        <li>
            <a href=\"{{ path('admin_index') }}\">Admin Login</a>
        </li>
        <br>
        <li>
            <a href=\"{{ path('user_index') }}\">User Login</a>
        </li>
        <br>
        <li>
            <a href=\"{{ path('comment_index') }}\">comment</a>
        </li>
    </ul>
{% endblock %}", "default/index.html.twig", "C:\\Users\\ryan\\web3\\symfony_recipes\\app\\Resources\\views\\default\\index.html.twig");
    }
}
