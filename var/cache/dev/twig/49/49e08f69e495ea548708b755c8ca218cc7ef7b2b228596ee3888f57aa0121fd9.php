<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ad73c98149553abdb1a1e8a7ae4dd4b1aa05c8ec3b12e4b3213f34e837d36c65 extends Twig_Template
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
        $__internal_2ee6f8f1aa096f45a631aa53ef347bc09d2f6289f257e0b618f1059f6791c882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee6f8f1aa096f45a631aa53ef347bc09d2f6289f257e0b618f1059f6791c882->enter($__internal_2ee6f8f1aa096f45a631aa53ef347bc09d2f6289f257e0b618f1059f6791c882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_372b13b038caa5d2be6c857d6ff8477b53c55c26f877f907e2ca70017def5714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372b13b038caa5d2be6c857d6ff8477b53c55c26f877f907e2ca70017def5714->enter($__internal_372b13b038caa5d2be6c857d6ff8477b53c55c26f877f907e2ca70017def5714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ee6f8f1aa096f45a631aa53ef347bc09d2f6289f257e0b618f1059f6791c882->leave($__internal_2ee6f8f1aa096f45a631aa53ef347bc09d2f6289f257e0b618f1059f6791c882_prof);

        
        $__internal_372b13b038caa5d2be6c857d6ff8477b53c55c26f877f907e2ca70017def5714->leave($__internal_372b13b038caa5d2be6c857d6ff8477b53c55c26f877f907e2ca70017def5714_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4b7725886232f8405f8ace7711afcff73fb0b4dad7edf8b441ca642368ae2ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b7725886232f8405f8ace7711afcff73fb0b4dad7edf8b441ca642368ae2ad->enter($__internal_a4b7725886232f8405f8ace7711afcff73fb0b4dad7edf8b441ca642368ae2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5f1eb432112d7537c46cf73b13b8b0b8a81b8ae0771d3f7a54f991069d498b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1eb432112d7537c46cf73b13b8b0b8a81b8ae0771d3f7a54f991069d498b75->enter($__internal_5f1eb432112d7537c46cf73b13b8b0b8a81b8ae0771d3f7a54f991069d498b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5f1eb432112d7537c46cf73b13b8b0b8a81b8ae0771d3f7a54f991069d498b75->leave($__internal_5f1eb432112d7537c46cf73b13b8b0b8a81b8ae0771d3f7a54f991069d498b75_prof);

        
        $__internal_a4b7725886232f8405f8ace7711afcff73fb0b4dad7edf8b441ca642368ae2ad->leave($__internal_a4b7725886232f8405f8ace7711afcff73fb0b4dad7edf8b441ca642368ae2ad_prof);

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
", "@FOSUser/Registration/register.html.twig", "/var/www/html/alardine/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
