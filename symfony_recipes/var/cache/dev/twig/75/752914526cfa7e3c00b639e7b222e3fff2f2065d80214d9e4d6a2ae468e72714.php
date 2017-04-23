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
        $__internal_56db25bb15a13fb6dcb5d71139b6bda55d9f66bdf4bc6dac929e844789efe184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56db25bb15a13fb6dcb5d71139b6bda55d9f66bdf4bc6dac929e844789efe184->enter($__internal_56db25bb15a13fb6dcb5d71139b6bda55d9f66bdf4bc6dac929e844789efe184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_84dcb6381c34be467d84c5c183569ef3646b14723556e2f79424b593fe8e6527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dcb6381c34be467d84c5c183569ef3646b14723556e2f79424b593fe8e6527->enter($__internal_84dcb6381c34be467d84c5c183569ef3646b14723556e2f79424b593fe8e6527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56db25bb15a13fb6dcb5d71139b6bda55d9f66bdf4bc6dac929e844789efe184->leave($__internal_56db25bb15a13fb6dcb5d71139b6bda55d9f66bdf4bc6dac929e844789efe184_prof);

        
        $__internal_84dcb6381c34be467d84c5c183569ef3646b14723556e2f79424b593fe8e6527->leave($__internal_84dcb6381c34be467d84c5c183569ef3646b14723556e2f79424b593fe8e6527_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4e40b53a9817d4deaa9ae741c064f2f7c9a9a5aafa35b4f4bce7fc8ec8479d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e40b53a9817d4deaa9ae741c064f2f7c9a9a5aafa35b4f4bce7fc8ec8479d3->enter($__internal_a4e40b53a9817d4deaa9ae741c064f2f7c9a9a5aafa35b4f4bce7fc8ec8479d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb45515dc30af00fce0084e2d90ca83e48b077a4e94d4873435ced35f073bb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb45515dc30af00fce0084e2d90ca83e48b077a4e94d4873435ced35f073bb48->enter($__internal_bb45515dc30af00fce0084e2d90ca83e48b077a4e94d4873435ced35f073bb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["recipe"], "tag", array()), "name", array()), "html", null, true);
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
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute($this->getAttribute($context["recipe"], "username", array()), "username", array()))) {
                // line 87
                echo "                    <li>
                        <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
                echo "\">Edit Recipe</a>
                    </li>
                ";
            } else {
                // line 91
                echo "                    ";
                // line 92
                echo "                ";
            }
            // line 93
            echo "                <li>
                    <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_collection_add", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">Add to Collection</a>
                </li>
                <li>
                    <a href=\"";
            // line 97
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
        // line 105
        echo "    </tbody>
    <ul>
        <li>
            <a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_new");
        echo "\">Create a new recipe</a>
        </li>
        <li>
            <a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Homepage</a>
        </li>
    </ul>
";
        
        $__internal_bb45515dc30af00fce0084e2d90ca83e48b077a4e94d4873435ced35f073bb48->leave($__internal_bb45515dc30af00fce0084e2d90ca83e48b077a4e94d4873435ced35f073bb48_prof);

        
        $__internal_a4e40b53a9817d4deaa9ae741c064f2f7c9a9a5aafa35b4f4bce7fc8ec8479d3->leave($__internal_a4e40b53a9817d4deaa9ae741c064f2f7c9a9a5aafa35b4f4bce7fc8ec8479d3_prof);

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
        return array (  213 => 111,  207 => 108,  202 => 105,  188 => 97,  182 => 94,  179 => 93,  176 => 92,  174 => 91,  168 => 88,  165 => 87,  163 => 86,  158 => 84,  148 => 76,  135 => 65,  123 => 56,  111 => 47,  99 => 38,  87 => 29,  75 => 20,  63 => 11,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
                        Tag = {{ recipe.tag.name }}
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
                {% if app.user  == recipe.username.username %}
                    <li>
                        <a href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\">Edit Recipe</a>
                    </li>
                {% else %}
                    {# Do Nothing #}
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
