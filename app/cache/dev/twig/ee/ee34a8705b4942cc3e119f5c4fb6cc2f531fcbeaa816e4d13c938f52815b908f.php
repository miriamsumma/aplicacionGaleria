<?php

/* default/update.html.twig */
class __TwigTemplate_a131c44930869b40a78ec714198ee729127ac5f9e11decfe3ae8bf62b52db518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/update.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_358a38b4e2b3aa8a415672145212fef222d061387c64578c907ffaa4c9441a43 = $this->env->getExtension("native_profiler");
        $__internal_358a38b4e2b3aa8a415672145212fef222d061387c64578c907ffaa4c9441a43->enter($__internal_358a38b4e2b3aa8a415672145212fef222d061387c64578c907ffaa4c9441a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_358a38b4e2b3aa8a415672145212fef222d061387c64578c907ffaa4c9441a43->leave($__internal_358a38b4e2b3aa8a415672145212fef222d061387c64578c907ffaa4c9441a43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e40e36df1872488d327e64eb99dfad5133827cd9e9494147a36d4ddeaaf9170 = $this->env->getExtension("native_profiler");
        $__internal_2e40e36df1872488d327e64eb99dfad5133827cd9e9494147a36d4ddeaaf9170->enter($__internal_2e40e36df1872488d327e64eb99dfad5133827cd9e9494147a36d4ddeaaf9170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <!-- Page Content -->
    <div class=\"container\">
        <p>Actualizar imagen</p>
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "

            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "

            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'widget');
        echo "

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <!-- /.container -->


";
        
        $__internal_2e40e36df1872488d327e64eb99dfad5133827cd9e9494147a36d4ddeaaf9170->leave($__internal_2e40e36df1872488d327e64eb99dfad5133827cd9e9494147a36d4ddeaaf9170_prof);

    }

    public function getTemplateName()
    {
        return "default/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  76 => 18,  71 => 16,  66 => 14,  62 => 13,  57 => 11,  53 => 10,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* */
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/*         <p>Actualizar imagen</p>*/
/*         {{ form_start(form) }}*/
/*             {{ form_label(form.name) }}*/
/*             {{ form_widget(form.name) }}*/
/* */
/*             {{ form_label(form.description) }}*/
/*             {{ form_widget(form.description) }}*/
/* */
/*             {{ form_widget(form.path) }}*/
/* */
/*             {{ form_widget(form.save) }}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
