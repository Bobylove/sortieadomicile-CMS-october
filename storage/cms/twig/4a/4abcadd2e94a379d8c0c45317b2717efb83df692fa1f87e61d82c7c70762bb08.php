<?php

/* /home/simplon/fred/PHP/october/install-master/themes/demo/pages/contact.htm */
class __TwigTemplate_ccb5a8b730c3af0765b6740bc5a4b5ade7e92111483338dbaeaebeb375c07199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "title = \"contact\"
url = \"/contact\"
layout = \"default\"
is_hidden = 0

[reservationForm]

[emptyForm]
messages_success = \"Your form was successfully submitted\"
messages_errors = \"There were errors with your submission\"
anonymize_ip = \"disabled\"
recaptcha_theme = \"light\"
recaptcha_type = \"image\"
recaptcha_size = \"normal\"


";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("genericForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/simplon/fred/PHP/october/install-master/themes/demo/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("title = \"contact\"
url = \"/contact\"
layout = \"default\"
is_hidden = 0

[reservationForm]

[emptyForm]
messages_success = \"Your form was successfully submitted\"
messages_errors = \"There were errors with your submission\"
anonymize_ip = \"disabled\"
recaptcha_theme = \"light\"
recaptcha_type = \"image\"
recaptcha_size = \"normal\"


{% component 'genericForm' %}", "/home/simplon/fred/PHP/october/install-master/themes/demo/pages/contact.htm", "");
    }
}
