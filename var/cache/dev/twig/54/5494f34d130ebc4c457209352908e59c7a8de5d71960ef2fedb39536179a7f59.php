<?php

/* AppBundle:User:add.html.twig */
class __TwigTemplate_12c79e64d97c853de7cbade3b37f80653f5c8c4e09c2d8f700c0b40bec2651d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_248c9a9fd8b798319461ecda7e5a844bf1985699db42ccd7f6309eeef547ee5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248c9a9fd8b798319461ecda7e5a844bf1985699db42ccd7f6309eeef547ee5d->enter($__internal_248c9a9fd8b798319461ecda7e5a844bf1985699db42ccd7f6309eeef547ee5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add.html.twig"));

        $__internal_65b984db9797faf173fbef66f536ac11b81c2206541377337c059e0299e9c1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b984db9797faf173fbef66f536ac11b81c2206541377337c059e0299e9c1a5->enter($__internal_65b984db9797faf173fbef66f536ac11b81c2206541377337c059e0299e9c1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248c9a9fd8b798319461ecda7e5a844bf1985699db42ccd7f6309eeef547ee5d->leave($__internal_248c9a9fd8b798319461ecda7e5a844bf1985699db42ccd7f6309eeef547ee5d_prof);

        
        $__internal_65b984db9797faf173fbef66f536ac11b81c2206541377337c059e0299e9c1a5->leave($__internal_65b984db9797faf173fbef66f536ac11b81c2206541377337c059e0299e9c1a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dc3a6c99dc20aad6466c398a8714d82e5288e88a843f71a50923a857f2aa549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc3a6c99dc20aad6466c398a8714d82e5288e88a843f71a50923a857f2aa549->enter($__internal_1dc3a6c99dc20aad6466c398a8714d82e5288e88a843f71a50923a857f2aa549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e96e958f1ef1dcf728f5b6fb3e47a6eea47073dd0d235055fc284082dfe26287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96e958f1ef1dcf728f5b6fb3e47a6eea47073dd0d235055fc284082dfe26287->enter($__internal_e96e958f1ef1dcf728f5b6fb3e47a6eea47073dd0d235055fc284082dfe26287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:User:add";
        
        $__internal_e96e958f1ef1dcf728f5b6fb3e47a6eea47073dd0d235055fc284082dfe26287->leave($__internal_e96e958f1ef1dcf728f5b6fb3e47a6eea47073dd0d235055fc284082dfe26287_prof);

        
        $__internal_1dc3a6c99dc20aad6466c398a8714d82e5288e88a843f71a50923a857f2aa549->leave($__internal_1dc3a6c99dc20aad6466c398a8714d82e5288e88a843f71a50923a857f2aa549_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4f670d36778b0c61a528d81c225b7aa7ccf99127256ef4a57035be1a30ca0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f670d36778b0c61a528d81c225b7aa7ccf99127256ef4a57035be1a30ca0d1->enter($__internal_e4f670d36778b0c61a528d81c225b7aa7ccf99127256ef4a57035be1a30ca0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd7c8b20183933bc4babc4c231a061e38684fc1fab62e02a1852bf79e5e0499f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7c8b20183933bc4babc4c231a061e38684fc1fab62e02a1852bf79e5e0499f->enter($__internal_bd7c8b20183933bc4babc4c231a061e38684fc1fab62e02a1852bf79e5e0499f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:add page</h1>
";
        
        $__internal_bd7c8b20183933bc4babc4c231a061e38684fc1fab62e02a1852bf79e5e0499f->leave($__internal_bd7c8b20183933bc4babc4c231a061e38684fc1fab62e02a1852bf79e5e0499f_prof);

        
        $__internal_e4f670d36778b0c61a528d81c225b7aa7ccf99127256ef4a57035be1a30ca0d1->leave($__internal_e4f670d36778b0c61a528d81c225b7aa7ccf99127256ef4a57035be1a30ca0d1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:User:add{% endblock %}

{% block body %}
<h1>Welcome to the User:add page</h1>
{% endblock %}
", "AppBundle:User:add.html.twig", "/var/www/html/alardine/src/AppBundle/Resources/views/User/add.html.twig");
    }
}
