<?php

/* default/index.html.twig */
class __TwigTemplate_45acb814989d3fd7bfe52d8e03811be6af7a03a82b7b9480d359137ea1ab29b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_4ad0a05cd47ca77a9809f863259937781827947d01a90c3aa5cda0ac431fdd4c = $this->env->getExtension("native_profiler");
        $__internal_4ad0a05cd47ca77a9809f863259937781827947d01a90c3aa5cda0ac431fdd4c->enter($__internal_4ad0a05cd47ca77a9809f863259937781827947d01a90c3aa5cda0ac431fdd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ad0a05cd47ca77a9809f863259937781827947d01a90c3aa5cda0ac431fdd4c->leave($__internal_4ad0a05cd47ca77a9809f863259937781827947d01a90c3aa5cda0ac431fdd4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f09e6bea459a018038c962c4c7f5c85b075c29532d79428bf562c3940ea0206f = $this->env->getExtension("native_profiler");
        $__internal_f09e6bea459a018038c962c4c7f5c85b075c29532d79428bf562c3940ea0206f->enter($__internal_f09e6bea459a018038c962c4c7f5c85b075c29532d79428bf562c3940ea0206f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Gallery</h1>
            </div>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 15
            echo "            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\" ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_updateItem", array("item_id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\">
                    <img class=\"img-responsive\" src=\" ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["image"], "path", array()))), "html", null, true);
            echo "\" alt=\"\">
                </a>
            </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "                <p>No hay im&aacute;genes</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>

    </div>
    <!-- /.container -->


";
        
        $__internal_f09e6bea459a018038c962c4c7f5c85b075c29532d79428bf562c3940ea0206f->leave($__internal_f09e6bea459a018038c962c4c7f5c85b075c29532d79428bf562c3940ea0206f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  75 => 21,  66 => 17,  62 => 16,  59 => 15,  54 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* */
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">Gallery</h1>*/
/*             </div>*/
/*             {% for image in images %}*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href=" {{ path('_updateItem',{item_id : image.id} ) }}">*/
/*                     <img class="img-responsive" src=" {{ asset('uploads/images/' ~ image.path) }}" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             {% else %}*/
/*                 <p>No hay im&aacute;genes</p>*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
