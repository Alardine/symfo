<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_2e366d753fa19c767eb719a9bdec877ec3bcc387f06a26830fc81bf76364037d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b78ce7c988a47949d30dff1fbda5881548e01a35bfdb78c47358a4792fe01c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78ce7c988a47949d30dff1fbda5881548e01a35bfdb78c47358a4792fe01c21->enter($__internal_b78ce7c988a47949d30dff1fbda5881548e01a35bfdb78c47358a4792fe01c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_99e0358afef7bbc320d36cdad1a2ee4cbfd0708e87ca1462ab2adc239cd74318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e0358afef7bbc320d36cdad1a2ee4cbfd0708e87ca1462ab2adc239cd74318->enter($__internal_99e0358afef7bbc320d36cdad1a2ee4cbfd0708e87ca1462ab2adc239cd74318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b78ce7c988a47949d30dff1fbda5881548e01a35bfdb78c47358a4792fe01c21->leave($__internal_b78ce7c988a47949d30dff1fbda5881548e01a35bfdb78c47358a4792fe01c21_prof);

        
        $__internal_99e0358afef7bbc320d36cdad1a2ee4cbfd0708e87ca1462ab2adc239cd74318->leave($__internal_99e0358afef7bbc320d36cdad1a2ee4cbfd0708e87ca1462ab2adc239cd74318_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3801cd425d2c4a6ac6368edbd139ad97243d50918433d2564e8c7b07b9e89322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3801cd425d2c4a6ac6368edbd139ad97243d50918433d2564e8c7b07b9e89322->enter($__internal_3801cd425d2c4a6ac6368edbd139ad97243d50918433d2564e8c7b07b9e89322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6bf281f171c128f4d47d22d44429c4331001eee6c4c4b7b78dea480b3e5f6e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf281f171c128f4d47d22d44429c4331001eee6c4c4b7b78dea480b3e5f6e06->enter($__internal_6bf281f171c128f4d47d22d44429c4331001eee6c4c4b7b78dea480b3e5f6e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_6bf281f171c128f4d47d22d44429c4331001eee6c4c4b7b78dea480b3e5f6e06->leave($__internal_6bf281f171c128f4d47d22d44429c4331001eee6c4c4b7b78dea480b3e5f6e06_prof);

        
        $__internal_3801cd425d2c4a6ac6368edbd139ad97243d50918433d2564e8c7b07b9e89322->leave($__internal_3801cd425d2c4a6ac6368edbd139ad97243d50918433d2564e8c7b07b9e89322_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/html/alardine/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
