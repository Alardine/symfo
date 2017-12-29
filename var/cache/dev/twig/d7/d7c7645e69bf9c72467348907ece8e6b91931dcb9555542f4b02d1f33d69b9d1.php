<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c9c310ed2d4989158f4c6fbe19b3b79a4b292f41f53c8f2595fb6aa0ab9782a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_99f17ccf464d3a1bc00beebcbbb1fbc9a5ec3950337be7025c51f6001576dab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f17ccf464d3a1bc00beebcbbb1fbc9a5ec3950337be7025c51f6001576dab4->enter($__internal_99f17ccf464d3a1bc00beebcbbb1fbc9a5ec3950337be7025c51f6001576dab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_30d1bfaf2444171f114a6d0388c335bb40fe0e9b707bd25d1dd21e8a24f4cda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d1bfaf2444171f114a6d0388c335bb40fe0e9b707bd25d1dd21e8a24f4cda6->enter($__internal_30d1bfaf2444171f114a6d0388c335bb40fe0e9b707bd25d1dd21e8a24f4cda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f17ccf464d3a1bc00beebcbbb1fbc9a5ec3950337be7025c51f6001576dab4->leave($__internal_99f17ccf464d3a1bc00beebcbbb1fbc9a5ec3950337be7025c51f6001576dab4_prof);

        
        $__internal_30d1bfaf2444171f114a6d0388c335bb40fe0e9b707bd25d1dd21e8a24f4cda6->leave($__internal_30d1bfaf2444171f114a6d0388c335bb40fe0e9b707bd25d1dd21e8a24f4cda6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_111889abd4bf64580632c827c631ac001bcb3fdefe03c51698c5be0f8c567a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111889abd4bf64580632c827c631ac001bcb3fdefe03c51698c5be0f8c567a49->enter($__internal_111889abd4bf64580632c827c631ac001bcb3fdefe03c51698c5be0f8c567a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d060026a687c9b5a2f68ce77b7f848979e5f7123408b8fbb8f5fd83108867fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d060026a687c9b5a2f68ce77b7f848979e5f7123408b8fbb8f5fd83108867fc7->enter($__internal_d060026a687c9b5a2f68ce77b7f848979e5f7123408b8fbb8f5fd83108867fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d060026a687c9b5a2f68ce77b7f848979e5f7123408b8fbb8f5fd83108867fc7->leave($__internal_d060026a687c9b5a2f68ce77b7f848979e5f7123408b8fbb8f5fd83108867fc7_prof);

        
        $__internal_111889abd4bf64580632c827c631ac001bcb3fdefe03c51698c5be0f8c567a49->leave($__internal_111889abd4bf64580632c827c631ac001bcb3fdefe03c51698c5be0f8c567a49_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/alardine/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
