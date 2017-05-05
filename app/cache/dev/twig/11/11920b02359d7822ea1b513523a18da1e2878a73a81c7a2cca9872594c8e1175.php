<?php

/* base.html.twig */
class __TwigTemplate_cc5a24be82811159e030334ef313f3de4a44548282c5e1fc7f4f172ba4cf0be6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ae4901e42a2f3fa3d8a2215eeae139a74df50196fe1247cea0d62e51a2d22c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae4901e42a2f3fa3d8a2215eeae139a74df50196fe1247cea0d62e51a2d22c3->enter($__internal_1ae4901e42a2f3fa3d8a2215eeae139a74df50196fe1247cea0d62e51a2d22c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1ae4901e42a2f3fa3d8a2215eeae139a74df50196fe1247cea0d62e51a2d22c3->leave($__internal_1ae4901e42a2f3fa3d8a2215eeae139a74df50196fe1247cea0d62e51a2d22c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f85bc2b0a2d6ce83cb1ced53d7f81bbe6b4ee9789522db8fd6cde662eae6f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f85bc2b0a2d6ce83cb1ced53d7f81bbe6b4ee9789522db8fd6cde662eae6f98->enter($__internal_3f85bc2b0a2d6ce83cb1ced53d7f81bbe6b4ee9789522db8fd6cde662eae6f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3f85bc2b0a2d6ce83cb1ced53d7f81bbe6b4ee9789522db8fd6cde662eae6f98->leave($__internal_3f85bc2b0a2d6ce83cb1ced53d7f81bbe6b4ee9789522db8fd6cde662eae6f98_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ead568df1779fb30a67c3cfab7c3c72c1666a8469bd2cafb8ff1ea768bde3a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead568df1779fb30a67c3cfab7c3c72c1666a8469bd2cafb8ff1ea768bde3a15->enter($__internal_ead568df1779fb30a67c3cfab7c3c72c1666a8469bd2cafb8ff1ea768bde3a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ead568df1779fb30a67c3cfab7c3c72c1666a8469bd2cafb8ff1ea768bde3a15->leave($__internal_ead568df1779fb30a67c3cfab7c3c72c1666a8469bd2cafb8ff1ea768bde3a15_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_30e3c081499a96dad26024719804db44b0d3cf24bb73af69d2f115c316e8c551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e3c081499a96dad26024719804db44b0d3cf24bb73af69d2f115c316e8c551->enter($__internal_30e3c081499a96dad26024719804db44b0d3cf24bb73af69d2f115c316e8c551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30e3c081499a96dad26024719804db44b0d3cf24bb73af69d2f115c316e8c551->leave($__internal_30e3c081499a96dad26024719804db44b0d3cf24bb73af69d2f115c316e8c551_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a736644f6bce0d0e657ce714dfa61974c8212afc1b9a19273da952c010bbbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a736644f6bce0d0e657ce714dfa61974c8212afc1b9a19273da952c010bbbe4->enter($__internal_3a736644f6bce0d0e657ce714dfa61974c8212afc1b9a19273da952c010bbbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3a736644f6bce0d0e657ce714dfa61974c8212afc1b9a19273da952c010bbbe4->leave($__internal_3a736644f6bce0d0e657ce714dfa61974c8212afc1b9a19273da952c010bbbe4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/apka/app/Resources/views/base.html.twig");
    }
}
