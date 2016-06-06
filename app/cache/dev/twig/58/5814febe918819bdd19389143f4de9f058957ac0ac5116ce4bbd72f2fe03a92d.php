<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_57ceea26b9d1badc172e4866dd79f5e91f5e3e80398a2c2928e97e7ae9c68ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_128a928bce490ebb04707b614bd7bdebc9ddb3f1ab414f3af4059299cde80e44 = $this->env->getExtension("native_profiler");
        $__internal_128a928bce490ebb04707b614bd7bdebc9ddb3f1ab414f3af4059299cde80e44->enter($__internal_128a928bce490ebb04707b614bd7bdebc9ddb3f1ab414f3af4059299cde80e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_128a928bce490ebb04707b614bd7bdebc9ddb3f1ab414f3af4059299cde80e44->leave($__internal_128a928bce490ebb04707b614bd7bdebc9ddb3f1ab414f3af4059299cde80e44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_58721cb30bb291460896dc0f07e1b7b1fcb7ecaca6cffa253c70f2be9b52d358 = $this->env->getExtension("native_profiler");
        $__internal_58721cb30bb291460896dc0f07e1b7b1fcb7ecaca6cffa253c70f2be9b52d358->enter($__internal_58721cb30bb291460896dc0f07e1b7b1fcb7ecaca6cffa253c70f2be9b52d358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_58721cb30bb291460896dc0f07e1b7b1fcb7ecaca6cffa253c70f2be9b52d358->leave($__internal_58721cb30bb291460896dc0f07e1b7b1fcb7ecaca6cffa253c70f2be9b52d358_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_31d303a8e84c6ce06bb42b844d4cd2e4aa3e58bed4ea5ebaacbaf893ef9ab16c = $this->env->getExtension("native_profiler");
        $__internal_31d303a8e84c6ce06bb42b844d4cd2e4aa3e58bed4ea5ebaacbaf893ef9ab16c->enter($__internal_31d303a8e84c6ce06bb42b844d4cd2e4aa3e58bed4ea5ebaacbaf893ef9ab16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31d303a8e84c6ce06bb42b844d4cd2e4aa3e58bed4ea5ebaacbaf893ef9ab16c->leave($__internal_31d303a8e84c6ce06bb42b844d4cd2e4aa3e58bed4ea5ebaacbaf893ef9ab16c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3686fd0586893b7a1f6bccc350a1a075cdec0b7bb04d6bae6ef929bc2f12913 = $this->env->getExtension("native_profiler");
        $__internal_b3686fd0586893b7a1f6bccc350a1a075cdec0b7bb04d6bae6ef929bc2f12913->enter($__internal_b3686fd0586893b7a1f6bccc350a1a075cdec0b7bb04d6bae6ef929bc2f12913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b3686fd0586893b7a1f6bccc350a1a075cdec0b7bb04d6bae6ef929bc2f12913->leave($__internal_b3686fd0586893b7a1f6bccc350a1a075cdec0b7bb04d6bae6ef929bc2f12913_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
