<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7551c084c534dcef6e3aeec2760016d7771166ba6584e4d4ec5dff61c60c7031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7551c084c534dcef6e3aeec2760016d7771166ba6584e4d4ec5dff61c60c7031->enter($__internal_7551c084c534dcef6e3aeec2760016d7771166ba6584e4d4ec5dff61c60c7031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d1cd2a73efe2dd3042c7f2071e219e7e0e154c5039ff9a5b2a545116a3496a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cd2a73efe2dd3042c7f2071e219e7e0e154c5039ff9a5b2a545116a3496a1d->enter($__internal_d1cd2a73efe2dd3042c7f2071e219e7e0e154c5039ff9a5b2a545116a3496a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7551c084c534dcef6e3aeec2760016d7771166ba6584e4d4ec5dff61c60c7031->leave($__internal_7551c084c534dcef6e3aeec2760016d7771166ba6584e4d4ec5dff61c60c7031_prof);

        
        $__internal_d1cd2a73efe2dd3042c7f2071e219e7e0e154c5039ff9a5b2a545116a3496a1d->leave($__internal_d1cd2a73efe2dd3042c7f2071e219e7e0e154c5039ff9a5b2a545116a3496a1d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ca0e49ec7e071ef6433c17cccfae89a9879db9974fbc4faf971ac4d1e6390ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca0e49ec7e071ef6433c17cccfae89a9879db9974fbc4faf971ac4d1e6390ac->enter($__internal_5ca0e49ec7e071ef6433c17cccfae89a9879db9974fbc4faf971ac4d1e6390ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13348943aedbbf06e5d948bf5ae518c2a5cf11563bee87db69632a641623fe46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13348943aedbbf06e5d948bf5ae518c2a5cf11563bee87db69632a641623fe46->enter($__internal_13348943aedbbf06e5d948bf5ae518c2a5cf11563bee87db69632a641623fe46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_13348943aedbbf06e5d948bf5ae518c2a5cf11563bee87db69632a641623fe46->leave($__internal_13348943aedbbf06e5d948bf5ae518c2a5cf11563bee87db69632a641623fe46_prof);

        
        $__internal_5ca0e49ec7e071ef6433c17cccfae89a9879db9974fbc4faf971ac4d1e6390ac->leave($__internal_5ca0e49ec7e071ef6433c17cccfae89a9879db9974fbc4faf971ac4d1e6390ac_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_292a03e6770ce6ae6624a97ada1c8c280d12ee5b56193e92a3b1f28c8885b3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292a03e6770ce6ae6624a97ada1c8c280d12ee5b56193e92a3b1f28c8885b3de->enter($__internal_292a03e6770ce6ae6624a97ada1c8c280d12ee5b56193e92a3b1f28c8885b3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_949932d6e59ca332293f78b99723d61dc63f4823c9b3e61b3e230575dfeb7d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949932d6e59ca332293f78b99723d61dc63f4823c9b3e61b3e230575dfeb7d88->enter($__internal_949932d6e59ca332293f78b99723d61dc63f4823c9b3e61b3e230575dfeb7d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_949932d6e59ca332293f78b99723d61dc63f4823c9b3e61b3e230575dfeb7d88->leave($__internal_949932d6e59ca332293f78b99723d61dc63f4823c9b3e61b3e230575dfeb7d88_prof);

        
        $__internal_292a03e6770ce6ae6624a97ada1c8c280d12ee5b56193e92a3b1f28c8885b3de->leave($__internal_292a03e6770ce6ae6624a97ada1c8c280d12ee5b56193e92a3b1f28c8885b3de_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3369ec5f286a277bab76ae1af940a7ff3cb84a384aa3e9b98f54c1bbf3956d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3369ec5f286a277bab76ae1af940a7ff3cb84a384aa3e9b98f54c1bbf3956d6->enter($__internal_f3369ec5f286a277bab76ae1af940a7ff3cb84a384aa3e9b98f54c1bbf3956d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45f6bb82626f719c48dde63a49f6450d4d3a7ccdc2d9eb395fe24a78f2076ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f6bb82626f719c48dde63a49f6450d4d3a7ccdc2d9eb395fe24a78f2076ab9->enter($__internal_45f6bb82626f719c48dde63a49f6450d4d3a7ccdc2d9eb395fe24a78f2076ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_45f6bb82626f719c48dde63a49f6450d4d3a7ccdc2d9eb395fe24a78f2076ab9->leave($__internal_45f6bb82626f719c48dde63a49f6450d4d3a7ccdc2d9eb395fe24a78f2076ab9_prof);

        
        $__internal_f3369ec5f286a277bab76ae1af940a7ff3cb84a384aa3e9b98f54c1bbf3956d6->leave($__internal_f3369ec5f286a277bab76ae1af940a7ff3cb84a384aa3e9b98f54c1bbf3956d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/alardine/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
