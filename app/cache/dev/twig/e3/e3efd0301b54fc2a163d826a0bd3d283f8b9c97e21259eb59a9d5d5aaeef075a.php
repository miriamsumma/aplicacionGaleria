<?php

/* default/contact.html.twig */
class __TwigTemplate_323b7e818078859db41714bcfe2474c0f7a0b2c4c244c56d4bde245353979433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
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
        $__internal_ea187d4ee48787fc48b3e935b0b999e5106b957e11b237474348889d138d127e = $this->env->getExtension("native_profiler");
        $__internal_ea187d4ee48787fc48b3e935b0b999e5106b957e11b237474348889d138d127e->enter($__internal_ea187d4ee48787fc48b3e935b0b999e5106b957e11b237474348889d138d127e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea187d4ee48787fc48b3e935b0b999e5106b957e11b237474348889d138d127e->leave($__internal_ea187d4ee48787fc48b3e935b0b999e5106b957e11b237474348889d138d127e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f30adcfb4f0b69ff307c61d7402e69dbc63f72f84ef32a7671dc52aa265c5b21 = $this->env->getExtension("native_profiler");
        $__internal_f30adcfb4f0b69ff307c61d7402e69dbc63f72f84ef32a7671dc52aa265c5b21->enter($__internal_f30adcfb4f0b69ff307c61d7402e69dbc63f72f84ef32a7671dc52aa265c5b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3 form-box\">
                <div class=\"form-top\">
                    <h3>Contacta con nosotros</h3>
                    <p>Completa el formulario para ponerte en contacto con nosotros:</p>
                </div>
                <div class=\"form-bottom contact-form\">
                    <form role=\"form\" action=\"assets/contact.php\" method=\"post\">
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"contact-email\">Email</label>
                            <input type=\"text\" name=\"email\" placeholder=\"Email...\" class=\"contact-email form-control\"
                                   id=\"contact-email\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"contact-subject\">Subject</label>
                            <input type=\"text\" name=\"subject\" placeholder=\"Asunto...\"
                                   class=\"contact-subject form-control\" id=\"contact-subject\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"contact-message\">Message</label>
                            <textarea name=\"message\" placeholder=\"Mensaje...\" class=\"contact-message form-control\"
                                      id=\"contact-message\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"contact-antispam\">Antispam question: 7 + 5 = ?</label>
                            <input type=\"text\" name=\"antispam\" placeholder=\"Tu respuesta...\"
                                   class=\"contact-antispam form-control\" id=\"contact-antispam\">
                        </div>
                        <button type=\"submit\" class=\"btn\">Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->


";
        
        $__internal_f30adcfb4f0b69ff307c61d7402e69dbc63f72f84ef32a7671dc52aa265c5b21->leave($__internal_f30adcfb4f0b69ff307c61d7402e69dbc63f72f84ef32a7671dc52aa265c5b21_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* */
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-6 col-sm-offset-3 form-box">*/
/*                 <div class="form-top">*/
/*                     <h3>Contacta con nosotros</h3>*/
/*                     <p>Completa el formulario para ponerte en contacto con nosotros:</p>*/
/*                 </div>*/
/*                 <div class="form-bottom contact-form">*/
/*                     <form role="form" action="assets/contact.php" method="post">*/
/*                         <div class="form-group">*/
/*                             <label class="sr-only" for="contact-email">Email</label>*/
/*                             <input type="text" name="email" placeholder="Email..." class="contact-email form-control"*/
/*                                    id="contact-email">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="sr-only" for="contact-subject">Subject</label>*/
/*                             <input type="text" name="subject" placeholder="Asunto..."*/
/*                                    class="contact-subject form-control" id="contact-subject">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="sr-only" for="contact-message">Message</label>*/
/*                             <textarea name="message" placeholder="Mensaje..." class="contact-message form-control"*/
/*                                       id="contact-message"></textarea>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="contact-antispam">Antispam question: 7 + 5 = ?</label>*/
/*                             <input type="text" name="antispam" placeholder="Tu respuesta..."*/
/*                                    class="contact-antispam form-control" id="contact-antispam">*/
/*                         </div>*/
/*                         <button type="submit" class="btn">Send message</button>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
