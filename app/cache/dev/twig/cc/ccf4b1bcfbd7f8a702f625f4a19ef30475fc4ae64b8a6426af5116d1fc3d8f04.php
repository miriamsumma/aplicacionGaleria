<?php

/* base.html.twig */
class __TwigTemplate_7e50ee0713e988a9541504fc826070d6283c30c0c3567601d1c1784ac550cb8b extends Twig_Template
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
        $__internal_0ef970d5980a426ce7d53ba33d3aa3a251ca8cbd2c5de7fd57bb3d8bd6dfc30f = $this->env->getExtension("native_profiler");
        $__internal_0ef970d5980a426ce7d53ba33d3aa3a251ca8cbd2c5de7fd57bb3d8bd6dfc30f->enter($__internal_0ef970d5980a426ce7d53ba33d3aa3a251ca8cbd2c5de7fd57bb3d8bd6dfc30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0ef970d5980a426ce7d53ba33d3aa3a251ca8cbd2c5de7fd57bb3d8bd6dfc30f->leave($__internal_0ef970d5980a426ce7d53ba33d3aa3a251ca8cbd2c5de7fd57bb3d8bd6dfc30f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d049fcc8b516efdb68ac0ed8ba3d1d90cb7b21e6a4fa42891d7d8c14b42935f0 = $this->env->getExtension("native_profiler");
        $__internal_d049fcc8b516efdb68ac0ed8ba3d1d90cb7b21e6a4fa42891d7d8c14b42935f0->enter($__internal_d049fcc8b516efdb68ac0ed8ba3d1d90cb7b21e6a4fa42891d7d8c14b42935f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gallery";
        
        $__internal_d049fcc8b516efdb68ac0ed8ba3d1d90cb7b21e6a4fa42891d7d8c14b42935f0->leave($__internal_d049fcc8b516efdb68ac0ed8ba3d1d90cb7b21e6a4fa42891d7d8c14b42935f0_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79906555b2d90ba5ef6082aeb71ea39a9907be7be64c52890cec5f6592e535fe = $this->env->getExtension("native_profiler");
        $__internal_79906555b2d90ba5ef6082aeb71ea39a9907be7be64c52890cec5f6592e535fe->enter($__internal_79906555b2d90ba5ef6082aeb71ea39a9907be7be64c52890cec5f6592e535fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_79906555b2d90ba5ef6082aeb71ea39a9907be7be64c52890cec5f6592e535fe->leave($__internal_79906555b2d90ba5ef6082aeb71ea39a9907be7be64c52890cec5f6592e535fe_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e587742f2bdd43059f4fba3ca2a4b5159b2b3ffd5bd630c5bcb21de5db144bf = $this->env->getExtension("native_profiler");
        $__internal_4e587742f2bdd43059f4fba3ca2a4b5159b2b3ffd5bd630c5bcb21de5db144bf->enter($__internal_4e587742f2bdd43059f4fba3ca2a4b5159b2b3ffd5bd630c5bcb21de5db144bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getUrl("contact");
        echo "\">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>

        ";
        
        $__internal_4e587742f2bdd43059f4fba3ca2a4b5159b2b3ffd5bd630c5bcb21de5db144bf->leave($__internal_4e587742f2bdd43059f4fba3ca2a4b5159b2b3ffd5bd630c5bcb21de5db144bf_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_56e9204016421f84a891851fa28bf3a24f045ea1f336be7adfc959b4b790eb85 = $this->env->getExtension("native_profiler");
        $__internal_56e9204016421f84a891851fa28bf3a24f045ea1f336be7adfc959b4b790eb85->enter($__internal_56e9204016421f84a891851fa28bf3a24f045ea1f336be7adfc959b4b790eb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "            <!-- Footer -->
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12 footer\">
                        <p>Contacto: ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo " </p>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_56e9204016421f84a891851fa28bf3a24f045ea1f336be7adfc959b4b790eb85->leave($__internal_56e9204016421f84a891851fa28bf3a24f045ea1f336be7adfc959b4b790eb85_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c9cfdd92418854fcd08cd32176eaaec150842aa49beb8059a88d830325f7012 = $this->env->getExtension("native_profiler");
        $__internal_7c9cfdd92418854fcd08cd32176eaaec150842aa49beb8059a88d830325f7012->enter($__internal_7c9cfdd92418854fcd08cd32176eaaec150842aa49beb8059a88d830325f7012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7c9cfdd92418854fcd08cd32176eaaec150842aa49beb8059a88d830325f7012->leave($__internal_7c9cfdd92418854fcd08cd32176eaaec150842aa49beb8059a88d830325f7012_prof);

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
        return array (  192 => 65,  186 => 62,  182 => 60,  176 => 59,  164 => 54,  158 => 50,  152 => 49,  135 => 39,  129 => 36,  120 => 30,  107 => 19,  101 => 18,  91 => 12,  86 => 10,  83 => 9,  77 => 8,  65 => 7,  56 => 67,  53 => 59,  50 => 49,  48 => 18,  41 => 15,  39 => 8,  35 => 7,  27 => 1,);
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
/*                                 <a href="{{ url('contact') }}">Contacto</a>*/
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
