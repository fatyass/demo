<?php

/* bundles/FOSUserBundle/Security/login.html.twig */
class __TwigTemplate_eb5336b8f103ff844eb2eb5a800fb6382fd35a03b1bb140a3c884ff304781610 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bundles/FOSUserBundle/Security/login.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->source); })()), "messageData", []), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <form class=\"form-horizontal col-sm-offset-2 col-sm-8\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\"/>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" required=\"required\"/>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <div class=\"checkbox\">
                    <label for=\"remember_me\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/> ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "
                    </label>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <input type=\"submit\" class=\"btn btn-default\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\"/>
            </div>
        </div>

    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bundles/FOSUserBundle/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  102 => 32,  89 => 22,  81 => 17,  76 => 15,  70 => 12,  65 => 10,  62 => 9,  56 => 7,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form class=\"form-horizontal col-sm-offset-2 col-sm-8\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"username\">{{ 'security.login.username'|trans }}</label>
            <div class=\"col-sm-10\">
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"password\">{{ 'security.login.password'|trans }}</label>
            <div class=\"col-sm-10\">
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <div class=\"checkbox\">
                    <label for=\"remember_me\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/> {{ 'security.login.remember_me'|trans }}
                    </label>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <input type=\"submit\" class=\"btn btn-default\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"/>
            </div>
        </div>

    </form>
{% endblock %}
", "bundles/FOSUserBundle/Security/login.html.twig", "/application/templates/bundles/FOSUserBundle/Security/login.html.twig");
    }
}
