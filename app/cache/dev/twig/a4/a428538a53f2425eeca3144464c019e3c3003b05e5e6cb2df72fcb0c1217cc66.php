<?php

/* default/add.html.twig */
class __TwigTemplate_695d3cf7ba802706b1920db9d6bea5509c256167ac2c4d9a22ac67b8c2cb70f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/add.html.twig", 1);
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
        $__internal_e9eda64e3dfc46383b8aff99c98b83e75df1ba7e862e64a910748130f4d5c99b = $this->env->getExtension("native_profiler");
        $__internal_e9eda64e3dfc46383b8aff99c98b83e75df1ba7e862e64a910748130f4d5c99b->enter($__internal_e9eda64e3dfc46383b8aff99c98b83e75df1ba7e862e64a910748130f4d5c99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9eda64e3dfc46383b8aff99c98b83e75df1ba7e862e64a910748130f4d5c99b->leave($__internal_e9eda64e3dfc46383b8aff99c98b83e75df1ba7e862e64a910748130f4d5c99b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec8b512d7a9d8a9f06591f8d152166883cc105171c67b8c5173413fc5157085f = $this->env->getExtension("native_profiler");
        $__internal_ec8b512d7a9d8a9f06591f8d152166883cc105171c67b8c5173413fc5157085f->enter($__internal_ec8b512d7a9d8a9f06591f8d152166883cc105171c67b8c5173413fc5157085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <!-- Page Content -->
    <div class=\"container\">
        <p>A&ntilde;adir imagen</p>
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
        
        $__internal_ec8b512d7a9d8a9f06591f8d152166883cc105171c67b8c5173413fc5157085f->leave($__internal_ec8b512d7a9d8a9f06591f8d152166883cc105171c67b8c5173413fc5157085f_prof);

    }

    public function getTemplateName()
    {
        return "default/add.html.twig";
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
/*         <p>A&ntilde;adir imagen</p>*/
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
