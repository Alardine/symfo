<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c609787acd24ec0b4b1a361d4531bbba377252f376fc0c3641ca193572b7906f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_021af1c7cc6c005439f36d7151947337343f85bca8b5f8ccd358f4c496d2d4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021af1c7cc6c005439f36d7151947337343f85bca8b5f8ccd358f4c496d2d4e2->enter($__internal_021af1c7cc6c005439f36d7151947337343f85bca8b5f8ccd358f4c496d2d4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_48a829072786b8cda5199b8f13abe6c18f6628eedbbbe0a43ca677f7b5413307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a829072786b8cda5199b8f13abe6c18f6628eedbbbe0a43ca677f7b5413307->enter($__internal_48a829072786b8cda5199b8f13abe6c18f6628eedbbbe0a43ca677f7b5413307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021af1c7cc6c005439f36d7151947337343f85bca8b5f8ccd358f4c496d2d4e2->leave($__internal_021af1c7cc6c005439f36d7151947337343f85bca8b5f8ccd358f4c496d2d4e2_prof);

        
        $__internal_48a829072786b8cda5199b8f13abe6c18f6628eedbbbe0a43ca677f7b5413307->leave($__internal_48a829072786b8cda5199b8f13abe6c18f6628eedbbbe0a43ca677f7b5413307_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a289d07de54c49d9431e51423a0d2355f2659627f29dc74e6443ffa407b08ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a289d07de54c49d9431e51423a0d2355f2659627f29dc74e6443ffa407b08ac8->enter($__internal_a289d07de54c49d9431e51423a0d2355f2659627f29dc74e6443ffa407b08ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6140e04821c36be371519f7547a88f0a58d655c770d0c4541c5bd37e38aacc22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6140e04821c36be371519f7547a88f0a58d655c770d0c4541c5bd37e38aacc22->enter($__internal_6140e04821c36be371519f7547a88f0a58d655c770d0c4541c5bd37e38aacc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6140e04821c36be371519f7547a88f0a58d655c770d0c4541c5bd37e38aacc22->leave($__internal_6140e04821c36be371519f7547a88f0a58d655c770d0c4541c5bd37e38aacc22_prof);

        
        $__internal_a289d07de54c49d9431e51423a0d2355f2659627f29dc74e6443ffa407b08ac8->leave($__internal_a289d07de54c49d9431e51423a0d2355f2659627f29dc74e6443ffa407b08ac8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/alardine/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
