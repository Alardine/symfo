<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09039c7ac26b4b12f04aa14457188527788e0dd6b236ed4f45f5a1ff27bff0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09039c7ac26b4b12f04aa14457188527788e0dd6b236ed4f45f5a1ff27bff0d9->enter($__internal_09039c7ac26b4b12f04aa14457188527788e0dd6b236ed4f45f5a1ff27bff0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2cd9999ce46bf6eeba6fe04bfc120059e23443159e6d7d0ee86a3d1335e4ef68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd9999ce46bf6eeba6fe04bfc120059e23443159e6d7d0ee86a3d1335e4ef68->enter($__internal_2cd9999ce46bf6eeba6fe04bfc120059e23443159e6d7d0ee86a3d1335e4ef68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09039c7ac26b4b12f04aa14457188527788e0dd6b236ed4f45f5a1ff27bff0d9->leave($__internal_09039c7ac26b4b12f04aa14457188527788e0dd6b236ed4f45f5a1ff27bff0d9_prof);

        
        $__internal_2cd9999ce46bf6eeba6fe04bfc120059e23443159e6d7d0ee86a3d1335e4ef68->leave($__internal_2cd9999ce46bf6eeba6fe04bfc120059e23443159e6d7d0ee86a3d1335e4ef68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d62f270fa69203f553302d0da165466be8dd9c711e636beff0e44f402686cca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62f270fa69203f553302d0da165466be8dd9c711e636beff0e44f402686cca3->enter($__internal_d62f270fa69203f553302d0da165466be8dd9c711e636beff0e44f402686cca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_097fa9302aa197bb89cf6922e13e825f804f3a228157187efdf4e3feb98adfcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097fa9302aa197bb89cf6922e13e825f804f3a228157187efdf4e3feb98adfcf->enter($__internal_097fa9302aa197bb89cf6922e13e825f804f3a228157187efdf4e3feb98adfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_097fa9302aa197bb89cf6922e13e825f804f3a228157187efdf4e3feb98adfcf->leave($__internal_097fa9302aa197bb89cf6922e13e825f804f3a228157187efdf4e3feb98adfcf_prof);

        
        $__internal_d62f270fa69203f553302d0da165466be8dd9c711e636beff0e44f402686cca3->leave($__internal_d62f270fa69203f553302d0da165466be8dd9c711e636beff0e44f402686cca3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_105b4a3a9530250fc00e3f566aca116a5559b37f32604e7eb75244d986d38067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105b4a3a9530250fc00e3f566aca116a5559b37f32604e7eb75244d986d38067->enter($__internal_105b4a3a9530250fc00e3f566aca116a5559b37f32604e7eb75244d986d38067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93d528a13a0ad3a232f6d1e14db45f2a970941570c3617c81ecd659dfe3574dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d528a13a0ad3a232f6d1e14db45f2a970941570c3617c81ecd659dfe3574dc->enter($__internal_93d528a13a0ad3a232f6d1e14db45f2a970941570c3617c81ecd659dfe3574dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93d528a13a0ad3a232f6d1e14db45f2a970941570c3617c81ecd659dfe3574dc->leave($__internal_93d528a13a0ad3a232f6d1e14db45f2a970941570c3617c81ecd659dfe3574dc_prof);

        
        $__internal_105b4a3a9530250fc00e3f566aca116a5559b37f32604e7eb75244d986d38067->leave($__internal_105b4a3a9530250fc00e3f566aca116a5559b37f32604e7eb75244d986d38067_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61b9f304f0d0bc22e4dc8d74922f0d40b08236683c0529d804d262d45e842b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b9f304f0d0bc22e4dc8d74922f0d40b08236683c0529d804d262d45e842b1c->enter($__internal_61b9f304f0d0bc22e4dc8d74922f0d40b08236683c0529d804d262d45e842b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e5fb37cff2837ddd13f4e4fa373ca4a4a4a4de06061e79680817497f3f220f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5fb37cff2837ddd13f4e4fa373ca4a4a4a4de06061e79680817497f3f220f9->enter($__internal_3e5fb37cff2837ddd13f4e4fa373ca4a4a4a4de06061e79680817497f3f220f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e5fb37cff2837ddd13f4e4fa373ca4a4a4a4de06061e79680817497f3f220f9->leave($__internal_3e5fb37cff2837ddd13f4e4fa373ca4a4a4a4de06061e79680817497f3f220f9_prof);

        
        $__internal_61b9f304f0d0bc22e4dc8d74922f0d40b08236683c0529d804d262d45e842b1c->leave($__internal_61b9f304f0d0bc22e4dc8d74922f0d40b08236683c0529d804d262d45e842b1c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/alardine/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
