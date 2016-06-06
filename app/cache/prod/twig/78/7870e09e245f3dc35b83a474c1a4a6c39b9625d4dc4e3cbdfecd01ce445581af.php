<?php

/* ::base.html.twig */
class __TwigTemplate_99b66673e58ab27f662d478bc4a1a0286f7de3292ee6b456a1d61a52da1d03f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Gallery";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <!-- Bootstrap Core CSS -->
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Custom CSS -->
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/thumbnail-gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">Gallery</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("addItems");
        echo "\">A&ntilde;adir imagenes</a>
                            </li>
                            <li>
                                <a href=\"#\">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>

        ";
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "            <!-- Footer -->
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12 footer\">
                        <p>Contacto: ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : null), "html", null, true);
        echo " </p>
                    </div>
                </div>
            </footer>
        ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "
            <!-- jQuery -->
            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 65,  150 => 62,  146 => 60,  143 => 59,  134 => 54,  128 => 50,  125 => 49,  108 => 36,  99 => 30,  86 => 19,  83 => 18,  76 => 12,  71 => 10,  68 => 9,  65 => 8,  59 => 7,  53 => 67,  50 => 59,  47 => 49,  45 => 18,  38 => 15,  36 => 8,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <title>{% block title %}Gallery{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <!-- Bootstrap Core CSS -->*/
/*             <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*             <!-- Custom CSS -->*/
/*             <link href="{{ asset('css/thumbnail-gallery.css') }}" rel="stylesheet">*/
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             <!-- Navigation -->*/
/*             <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*                 <div class="container">*/
/*                     <!-- Brand and toggle get grouped for better mobile display -->*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <a class="navbar-brand" href="{{ url('homepage') }}">Gallery</a>*/
/*                     </div>*/
/*                     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li>*/
/*                                 <a href="{{ url('addItems') }}">A&ntilde;adir imagenes</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">Contacto</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- /.navbar-collapse -->*/
/*                 </div>*/
/*                 <!-- /.container -->*/
/*             </nav>*/
/* */
/*         {% endblock %}*/
/*         {% block footer %}*/
/*             <!-- Footer -->*/
/*             <footer>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12 footer">*/
/*                         <p>Contacto: {{ contact_email }} </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/* */
/*             <!-- jQuery -->*/
/*             <script src="{{ asset('js/jquery.js') }}"></script>*/
/* */
/*             <!-- Bootstrap Core JavaScript -->*/
/*             <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
