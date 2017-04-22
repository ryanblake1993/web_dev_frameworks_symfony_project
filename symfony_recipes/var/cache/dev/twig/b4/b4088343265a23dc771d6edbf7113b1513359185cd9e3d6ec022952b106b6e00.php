<?php

/* base.html.twig */
class __TwigTemplate_8b9af363f79570f54baa8c6ff66ed3fd291fa90ae054c39ca27af4c2c64f332b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c82eecea81c21801ffc6752ac63fa71cc22754d0d1c3a9932d3ab9dd9bf8491b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82eecea81c21801ffc6752ac63fa71cc22754d0d1c3a9932d3ab9dd9bf8491b->enter($__internal_c82eecea81c21801ffc6752ac63fa71cc22754d0d1c3a9932d3ab9dd9bf8491b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_79328b69a5d3802cdb8fddfe187f42c514619a5a5fe31610adfda5c89393ffbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79328b69a5d3802cdb8fddfe187f42c514619a5a5fe31610adfda5c89393ffbd->enter($__internal_79328b69a5d3802cdb8fddfe187f42c514619a5a5fe31610adfda5c89393ffbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 11
            echo "        <p>Username: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
        <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"> Click to Logout</a>
    ";
        }
        // line 14
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_c82eecea81c21801ffc6752ac63fa71cc22754d0d1c3a9932d3ab9dd9bf8491b->leave($__internal_c82eecea81c21801ffc6752ac63fa71cc22754d0d1c3a9932d3ab9dd9bf8491b_prof);

        
        $__internal_79328b69a5d3802cdb8fddfe187f42c514619a5a5fe31610adfda5c89393ffbd->leave($__internal_79328b69a5d3802cdb8fddfe187f42c514619a5a5fe31610adfda5c89393ffbd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6320aa3ccf1df92a0700113a24c890a200bfed06631ef8c79d0f0c4443a4ef75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6320aa3ccf1df92a0700113a24c890a200bfed06631ef8c79d0f0c4443a4ef75->enter($__internal_6320aa3ccf1df92a0700113a24c890a200bfed06631ef8c79d0f0c4443a4ef75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c36d8f2c9362422468e24391da978fdd8ebca2d5247056359e48e34ff0f7000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c36d8f2c9362422468e24391da978fdd8ebca2d5247056359e48e34ff0f7000->enter($__internal_0c36d8f2c9362422468e24391da978fdd8ebca2d5247056359e48e34ff0f7000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c36d8f2c9362422468e24391da978fdd8ebca2d5247056359e48e34ff0f7000->leave($__internal_0c36d8f2c9362422468e24391da978fdd8ebca2d5247056359e48e34ff0f7000_prof);

        
        $__internal_6320aa3ccf1df92a0700113a24c890a200bfed06631ef8c79d0f0c4443a4ef75->leave($__internal_6320aa3ccf1df92a0700113a24c890a200bfed06631ef8c79d0f0c4443a4ef75_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85df4217d8185942f589f80557d45d0b7fed820a42135dabb67eae09a57f5b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85df4217d8185942f589f80557d45d0b7fed820a42135dabb67eae09a57f5b42->enter($__internal_85df4217d8185942f589f80557d45d0b7fed820a42135dabb67eae09a57f5b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0feec894939eb404562382db810af77436f91670d8b34e8f16a084efa75776ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0feec894939eb404562382db810af77436f91670d8b34e8f16a084efa75776ff->enter($__internal_0feec894939eb404562382db810af77436f91670d8b34e8f16a084efa75776ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0feec894939eb404562382db810af77436f91670d8b34e8f16a084efa75776ff->leave($__internal_0feec894939eb404562382db810af77436f91670d8b34e8f16a084efa75776ff_prof);

        
        $__internal_85df4217d8185942f589f80557d45d0b7fed820a42135dabb67eae09a57f5b42->leave($__internal_85df4217d8185942f589f80557d45d0b7fed820a42135dabb67eae09a57f5b42_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_31fc2f30f55f11997448236632fbb56b7fc5253fd7f5e8b8e0bb017fa3a0c22a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31fc2f30f55f11997448236632fbb56b7fc5253fd7f5e8b8e0bb017fa3a0c22a->enter($__internal_31fc2f30f55f11997448236632fbb56b7fc5253fd7f5e8b8e0bb017fa3a0c22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_682dd357477d44151b45279a11957854641ee750576b791987e9fc4d3e0e9721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682dd357477d44151b45279a11957854641ee750576b791987e9fc4d3e0e9721->enter($__internal_682dd357477d44151b45279a11957854641ee750576b791987e9fc4d3e0e9721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_682dd357477d44151b45279a11957854641ee750576b791987e9fc4d3e0e9721->leave($__internal_682dd357477d44151b45279a11957854641ee750576b791987e9fc4d3e0e9721_prof);

        
        $__internal_31fc2f30f55f11997448236632fbb56b7fc5253fd7f5e8b8e0bb017fa3a0c22a->leave($__internal_31fc2f30f55f11997448236632fbb56b7fc5253fd7f5e8b8e0bb017fa3a0c22a_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04ce021fce93838f0a742f463864a9a4c40610aaa841f8453ed278eefbdd5dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ce021fce93838f0a742f463864a9a4c40610aaa841f8453ed278eefbdd5dbe->enter($__internal_04ce021fce93838f0a742f463864a9a4c40610aaa841f8453ed278eefbdd5dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_61c2af20f6a5f418af3438f63be78cc043e958eb4715a452309c62e2db4ae97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c2af20f6a5f418af3438f63be78cc043e958eb4715a452309c62e2db4ae97e->enter($__internal_61c2af20f6a5f418af3438f63be78cc043e958eb4715a452309c62e2db4ae97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_61c2af20f6a5f418af3438f63be78cc043e958eb4715a452309c62e2db4ae97e->leave($__internal_61c2af20f6a5f418af3438f63be78cc043e958eb4715a452309c62e2db4ae97e_prof);

        
        $__internal_04ce021fce93838f0a742f463864a9a4c40610aaa841f8453ed278eefbdd5dbe->leave($__internal_04ce021fce93838f0a742f463864a9a4c40610aaa841f8453ed278eefbdd5dbe_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 15,  113 => 14,  96 => 6,  78 => 5,  66 => 16,  63 => 15,  60 => 14,  55 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <p>Username: {{ app.user.username }}</p>
        <a href=\"{{ path('logout') }}\"> Click to Logout</a>
    {% endif %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\ryan\\web3\\symfony_recipes\\app\\Resources\\views\\base.html.twig");
    }
}
