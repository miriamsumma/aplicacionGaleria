<?php

/* default/index.html.twig */
class __TwigTemplate_4ae3170112b84815b9b23392e5f87ad772556d875f19611cc8d44a085b303381 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 15
            echo "            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
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
        return array (  70 => 23,  63 => 21,  54 => 17,  50 => 15,  45 => 14,  31 => 4,  28 => 3,  11 => 1,);
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
/*                 <a class="thumbnail" href="#">*/
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
