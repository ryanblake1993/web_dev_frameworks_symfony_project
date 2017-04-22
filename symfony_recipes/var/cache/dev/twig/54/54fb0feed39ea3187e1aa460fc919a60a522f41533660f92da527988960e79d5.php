<?php

/* user/index.html.twig */
class __TwigTemplate_882df80d1e9e21e6b70eaae399320b13781956e0682c5f93232041aa3672fd65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_ee3691b8252ba3888784868024234e8a4a38dfdde0d10220fe5a216e8ee24e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3691b8252ba3888784868024234e8a4a38dfdde0d10220fe5a216e8ee24e59->enter($__internal_ee3691b8252ba3888784868024234e8a4a38dfdde0d10220fe5a216e8ee24e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_fed4f4e8a70939f28bf39e8a69a136f97db6c2ccb5a8254bae7a5ddfac26fe9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed4f4e8a70939f28bf39e8a69a136f97db6c2ccb5a8254bae7a5ddfac26fe9a->enter($__internal_fed4f4e8a70939f28bf39e8a69a136f97db6c2ccb5a8254bae7a5ddfac26fe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee3691b8252ba3888784868024234e8a4a38dfdde0d10220fe5a216e8ee24e59->leave($__internal_ee3691b8252ba3888784868024234e8a4a38dfdde0d10220fe5a216e8ee24e59_prof);

        
        $__internal_fed4f4e8a70939f28bf39e8a69a136f97db6c2ccb5a8254bae7a5ddfac26fe9a->leave($__internal_fed4f4e8a70939f28bf39e8a69a136f97db6c2ccb5a8254bae7a5ddfac26fe9a_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_4f7097efb615b8c717d46c35ec08bb72c1ba67285bec04d377b20529245a77c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7097efb615b8c717d46c35ec08bb72c1ba67285bec04d377b20529245a77c2->enter($__internal_4f7097efb615b8c717d46c35ec08bb72c1ba67285bec04d377b20529245a77c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_5d4895aad2a2c61fb853ef452ccd6b0a44ae983b33a5e315b8e3f312eb87b0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4895aad2a2c61fb853ef452ccd6b0a44ae983b33a5e315b8e3f312eb87b0bf->enter($__internal_5d4895aad2a2c61fb853ef452ccd6b0a44ae983b33a5e315b8e3f312eb87b0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " User HomePage ";
        
        $__internal_5d4895aad2a2c61fb853ef452ccd6b0a44ae983b33a5e315b8e3f312eb87b0bf->leave($__internal_5d4895aad2a2c61fb853ef452ccd6b0a44ae983b33a5e315b8e3f312eb87b0bf_prof);

        
        $__internal_4f7097efb615b8c717d46c35ec08bb72c1ba67285bec04d377b20529245a77c2->leave($__internal_4f7097efb615b8c717d46c35ec08bb72c1ba67285bec04d377b20529245a77c2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_06244fec3e9ef9b80b1d683d156313933fe2c1c16f17704fc437de9b0b9d0a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06244fec3e9ef9b80b1d683d156313933fe2c1c16f17704fc437de9b0b9d0a77->enter($__internal_06244fec3e9ef9b80b1d683d156313933fe2c1c16f17704fc437de9b0b9d0a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8933371572b8d77f74e4b2167f89578542b94a6f26659ec21551274ecd977690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8933371572b8d77f74e4b2167f89578542b94a6f26659ec21551274ecd977690->enter($__internal_8933371572b8d77f74e4b2167f89578542b94a6f26659ec21551274ecd977690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Users list</h1>

    <h2>Users list</h2>

    ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "        <p>Username: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
        <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"> Click to Logout</a>
    ";
        }
        // line 13
        echo "    <br>
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">Create New Tag</a>
    </li>
    <br>
    <li>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_new");
        echo "\">Create New Recipe</a>
    </li>
    <br>
    <li>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Recipes</a>
    </li>
    <br>
    <li>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Tags</a>
    </li>
    <br>
    <br>
    <li>
        <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_collection_index");
        echo "\">Collection of Recipes</a>
    </li>
    <li>
        <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Homepage</a>
    </li>
    <br>

";
        
        $__internal_8933371572b8d77f74e4b2167f89578542b94a6f26659ec21551274ecd977690->leave($__internal_8933371572b8d77f74e4b2167f89578542b94a6f26659ec21551274ecd977690_prof);

        
        $__internal_06244fec3e9ef9b80b1d683d156313933fe2c1c16f17704fc437de9b0b9d0a77->leave($__internal_06244fec3e9ef9b80b1d683d156313933fe2c1c16f17704fc437de9b0b9d0a77_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  119 => 32,  111 => 27,  104 => 23,  97 => 19,  90 => 15,  86 => 13,  81 => 11,  76 => 10,  74 => 9,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block pageTitle %} User HomePage {% endblock %}
{% block body %}
    <h1>Users list</h1>

    <h2>Users list</h2>

    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <p>Username: {{ app.user.username }}</p>
        <a href=\"{{ path('logout') }}\"> Click to Logout</a>
    {% endif %}
    <br>
    <li>
        <a href=\"{{ path('tag_new') }}\">Create New Tag</a>
    </li>
    <br>
    <li>
        <a href=\"{{ path('recipe_new') }}\">Create New Recipe</a>
    </li>
    <br>
    <li>
        <a href=\"{{ path('recipe_index') }}\">Recipes</a>
    </li>
    <br>
    <li>
        <a href=\"{{ path('tag_index') }}\">Tags</a>
    </li>
    <br>
    <br>
    <li>
        <a href=\"{{ path('recipe_collection_index') }}\">Collection of Recipes</a>
    </li>
    <li>
        <a href=\"{{ path('homepage') }}\">Homepage</a>
    </li>
    <br>

{% endblock %}
", "user/index.html.twig", "C:\\Users\\ryan\\web3\\symfony_recipes\\app\\Resources\\views\\user\\index.html.twig");
    }
}
