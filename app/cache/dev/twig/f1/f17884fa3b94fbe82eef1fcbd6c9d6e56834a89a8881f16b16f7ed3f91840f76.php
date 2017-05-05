<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3283225d04e3f896abcb9fae2e7ecfda1baec71fa6b5478f334325072aedd2ac extends Twig_Template
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
        $__internal_77f5d81aebe963ea5ece0b685a4e402ae8293301b2061cc5a579d66ef28cc663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f5d81aebe963ea5ece0b685a4e402ae8293301b2061cc5a579d66ef28cc663->enter($__internal_77f5d81aebe963ea5ece0b685a4e402ae8293301b2061cc5a579d66ef28cc663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77f5d81aebe963ea5ece0b685a4e402ae8293301b2061cc5a579d66ef28cc663->leave($__internal_77f5d81aebe963ea5ece0b685a4e402ae8293301b2061cc5a579d66ef28cc663_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e59312e951701300dfa228768c1a5fc3ed005a7032e4296ba2a942e601bdf97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e59312e951701300dfa228768c1a5fc3ed005a7032e4296ba2a942e601bdf97->enter($__internal_6e59312e951701300dfa228768c1a5fc3ed005a7032e4296ba2a942e601bdf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e59312e951701300dfa228768c1a5fc3ed005a7032e4296ba2a942e601bdf97->leave($__internal_6e59312e951701300dfa228768c1a5fc3ed005a7032e4296ba2a942e601bdf97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd7d0cb475a2c4f24d65cb7675ace8150ab4efcd5c936b7ecaa6a0e10dce8494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7d0cb475a2c4f24d65cb7675ace8150ab4efcd5c936b7ecaa6a0e10dce8494->enter($__internal_fd7d0cb475a2c4f24d65cb7675ace8150ab4efcd5c936b7ecaa6a0e10dce8494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd7d0cb475a2c4f24d65cb7675ace8150ab4efcd5c936b7ecaa6a0e10dce8494->leave($__internal_fd7d0cb475a2c4f24d65cb7675ace8150ab4efcd5c936b7ecaa6a0e10dce8494_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_676f57e59bded8fcc0f59b1f6dd858e6b9800d9b879af71974346c0eebecfe60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676f57e59bded8fcc0f59b1f6dd858e6b9800d9b879af71974346c0eebecfe60->enter($__internal_676f57e59bded8fcc0f59b1f6dd858e6b9800d9b879af71974346c0eebecfe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_676f57e59bded8fcc0f59b1f6dd858e6b9800d9b879af71974346c0eebecfe60->leave($__internal_676f57e59bded8fcc0f59b1f6dd858e6b9800d9b879af71974346c0eebecfe60_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/apka/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
