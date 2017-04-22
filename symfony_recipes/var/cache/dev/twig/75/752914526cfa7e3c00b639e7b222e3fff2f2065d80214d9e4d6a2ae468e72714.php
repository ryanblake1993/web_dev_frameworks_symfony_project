<?php

/* recipe/index.html.twig */
class __TwigTemplate_e83c4c65f4285750e19d32c6fb4a640ac1eac477f7e80ccb0b39a1aea2e8868f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipe/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca5ac952b40b085aeea43e8447abebe5d9f26e41a4e289d4a417c25d15b645ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5ac952b40b085aeea43e8447abebe5d9f26e41a4e289d4a417c25d15b645ed->enter($__internal_ca5ac952b40b085aeea43e8447abebe5d9f26e41a4e289d4a417c25d15b645ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_ca9f494edb89874f1379d098c8e4ec3f23d79dbb9b7e0b6166d3c848e99a5966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9f494edb89874f1379d098c8e4ec3f23d79dbb9b7e0b6166d3c848e99a5966->enter($__internal_ca9f494edb89874f1379d098c8e4ec3f23d79dbb9b7e0b6166d3c848e99a5966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca5ac952b40b085aeea43e8447abebe5d9f26e41a4e289d4a417c25d15b645ed->leave($__internal_ca5ac952b40b085aeea43e8447abebe5d9f26e41a4e289d4a417c25d15b645ed_prof);

        
        $__internal_ca9f494edb89874f1379d098c8e4ec3f23d79dbb9b7e0b6166d3c848e99a5966->leave($__internal_ca9f494edb89874f1379d098c8e4ec3f23d79dbb9b7e0b6166d3c848e99a5966_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b2f616d06bd64bd3720e5ac7a36ab4657d046996e7263f0b46f5ab47f9b96f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2f616d06bd64bd3720e5ac7a36ab4657d046996e7263f0b46f5ab47f9b96f9->enter($__internal_6b2f616d06bd64bd3720e5ac7a36ab4657d046996e7263f0b46f5ab47f9b96f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0af75d90c01ed02c982913d13abdd75e671b9cd0d88fd08a3db14cfd373a2859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af75d90c01ed02c982913d13abdd75e671b9cd0d88fd08a3db14cfd373a2859->enter($__internal_0af75d90c01ed02c982913d13abdd75e671b9cd0d88fd08a3db14cfd373a2859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipes list</h1>
    <tbody>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) ? $context["recipes"] : $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 7
            echo "        <tr>
            <td>
                <ul>
                    <li>
                        id = ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Tag = ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["recipe"], "tag", array()), "id", array()), "html", null, true);
            echo "
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Author Name = ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["recipe"], "username", array()), "username", array()), "html", null, true);
            echo "
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Title = ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "title", array()), "html", null, true);
            echo "
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Summary = ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "summary", array()), "html", null, true);
            echo "
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Steps = ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "steps", array()), "html", null, true);
            echo "
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Ingredients = ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "ingredients", array()), "html", null, true);
            echo "
                    </li>
                </ul>
            </td>
        </tr>

        <tr>
            <td>
                <ul>
                    <li>
                 ";
            // line 76
            echo "                    </li>
                </ul>
            </td>
        </tr>

        <tr>
            <td>
                <li>
                    <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">Show Recipe Details</a>
                </li>
                ";
            // line 86
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute($context["recipe"], "username", array()), "username", array()))) {
                // line 87
                echo "                    <li>
                        <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
                echo "\">Edit Recipe</a>
                    </li>
                ";
            } elseif ($this->getAttribute(            // line 90
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 91
                echo "                ";
            }
            // line 92
            echo "                <li>
                    <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_collection_add", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">Add to Collection</a>
                </li>
                <li>
                    <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_new", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">Add Recipe Comment</a>
                </li>
            </td>
        </tr>
        <br>
        <hr>
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </tbody>
    <ul>
        <li>
            <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_new");
        echo "\">Create a new recipe</a>
        </li>
        <li>
            <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Homepage</a>
        </li>
    </ul>
";
        
        $__internal_0af75d90c01ed02c982913d13abdd75e671b9cd0d88fd08a3db14cfd373a2859->leave($__internal_0af75d90c01ed02c982913d13abdd75e671b9cd0d88fd08a3db14cfd373a2859_prof);

        
        $__internal_6b2f616d06bd64bd3720e5ac7a36ab4657d046996e7263f0b46f5ab47f9b96f9->leave($__internal_6b2f616d06bd64bd3720e5ac7a36ab4657d046996e7263f0b46f5ab47f9b96f9_prof);

    }

    public function getTemplateName()
    {
        return "recipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 110,  206 => 107,  201 => 104,  187 => 96,  181 => 93,  178 => 92,  175 => 91,  173 => 90,  168 => 88,  165 => 87,  163 => 86,  158 => 84,  148 => 76,  135 => 65,  123 => 56,  111 => 47,  99 => 38,  87 => 29,  75 => 20,  63 => 11,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Recipes list</h1>
    <tbody>
    {% for recipe in recipes %}
        <tr>
            <td>
                <ul>
                    <li>
                        id = {{ recipe.id }}
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Tag = {{ recipe.tag.id }}
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Author Name = {{ recipe.username.username }}
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Title = {{ recipe.title }}
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Summary = {{ recipe.summary }}
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Steps = {{ recipe.steps }}
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>
                        Ingredients = {{ recipe.ingredients }}
                    </li>
                </ul>
            </td>
        </tr>

        <tr>
            <td>
                <ul>
                    <li>
                 {#Comments {{ comment.recipe_id }}#}
                    </li>
                </ul>
            </td>
        </tr>

        <tr>
            <td>
                <li>
                    <a href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\">Show Recipe Details</a>
                </li>
                {% if app.user.username == recipe.username.username %}
                    <li>
                        <a href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\">Edit Recipe</a>
                    </li>
                {% elseif app.user %}
                {% endif %}
                <li>
                    <a href=\"{{ path('recipe_collection_add', { 'id': recipe.id }) }}\">Add to Collection</a>
                </li>
                <li>
                    <a href=\"{{ path('comment_new', { 'id': recipe.id }) }}\">Add Recipe Comment</a>
                </li>
            </td>
        </tr>
        <br>
        <hr>
        <br>
    {% endfor %}
    </tbody>
    <ul>
        <li>
            <a href=\"{{ path('recipe_new') }}\">Create a new recipe</a>
        </li>
        <li>
            <a href=\"{{ path('homepage') }}\">Homepage</a>
        </li>
    </ul>
{% endblock %}
", "recipe/index.html.twig", "C:\\Users\\ryan\\web3\\symfony_recipes\\app\\Resources\\views\\recipe\\index.html.twig");
    }
}
