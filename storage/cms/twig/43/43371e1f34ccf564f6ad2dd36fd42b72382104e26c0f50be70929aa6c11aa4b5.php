<?php

/* /home/simplon/fred/PHP/october/install-master/plugins/vojtasvoboda/reservations/components/reservationform/default.htm */
class __TwigTemplate_021f664d278bb557c6088ceec1d8c3f45e4ff18c8d34f66b30558282aa6b32bf extends Twig_Template
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
        echo "<div id=\"result\">
    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 2
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 3
                echo "    <p class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</p>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 5
        echo "
    ";
        // line 6
        if (($context["error"] ?? null)) {
            // line 7
            echo "    <p class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        // line 9
        echo "</div>

<script type=\"text/javascript\">
    var booked = JSON.parse('";
        // line 12
        echo ($context["dates"] ?? null);
        echo "');
</script>

<form
    class=\"reservationform form\"
    method=\"post\"
    data-request=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSubmit\"
    data-request-update=\"'";
        // line 19
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::success': '#result'\"
    data-request-success=\"\$('#";
        // line 20
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo " input[type=text], #";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo " textarea').val('');\"
    id=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\"";
        if (($context["sent"] ?? null)) {
            echo " class=\"sent\"";
        }
        echo ">

    <div class=\"form-group\">
        <label for=\"date\">Date</label>
        <input id=\"date\" name=\"date\" class=\"form-control datepicker\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", array()), "html", null, true);
        echo "\" />
    </div>
    <div class=\"form-group\">
        <label for=\"time\">Time</label>
        <input id=\"time\" name=\"time\" class=\"form-control\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "time", array()), "html", null, true);
        echo "\" />
    </div>
    <div class=\"form-group\">
        <label for=\"time\">Email</label>
        <input id=\"email\" name=\"email\" class=\"form-control\" type=\"text\" placeholder=\"Email\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "email", array()), "html", null, true);
        echo "\" />
    </div>
    <div class=\"form-group\">
        <label for=\"time\">Name</label>
        <input id=\"name\" name=\"name\" class=\"form-control\" type=\"text\" placeholder=\"Name\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "name", array()), "html", null, true);
        echo "\" />
    </div>
    <div class=\"form-group\">
        <label for=\"time\">Address / street</label>
        <input id=\"street\" name=\"street\" class=\"form-control\" type=\"text\" placeholder=\"Street\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "street", array()), "html", null, true);
        echo "\" />
    </div>
    <div class=\"form-group\">
        <label for=\"phone\">Phone</label>
        <input id=\"phone\" name=\"phone\" class=\"form-control\" type=\"text\" placeholder=\"Phone\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "phone", array()), "html", null, true);
        echo "\" />
    </div>
    <div class=\"form-group\">
        <label for=\"message\">Your message</label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\" placeholder=\"Your message\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "message", array()), "html", null, true);
        echo "</textarea>
    </div>

    ";
        // line 52
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
    <button type=\"submit\" name=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "-submit\" class=\"btn btn-success\" value=\"1\" id=\"submit\">Submit</button>

</form>
";
    }

    public function getTemplateName()
    {
        return "/home/simplon/fred/PHP/october/install-master/plugins/vojtasvoboda/reservations/components/reservationform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  130 => 52,  124 => 49,  117 => 45,  110 => 41,  103 => 37,  96 => 33,  89 => 29,  82 => 25,  71 => 21,  65 => 20,  61 => 19,  57 => 18,  48 => 12,  43 => 9,  37 => 7,  35 => 6,  32 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"result\">
    {% flash %}
    <p class=\"alert alert-success\">{{ message }}</p>
    {% endflash %}

    {% if error %}
    <p class=\"alert alert-danger\">{{ error }}</p>
    {% endif %}
</div>

<script type=\"text/javascript\">
    var booked = JSON.parse('{{ dates | raw }}');
</script>

<form
    class=\"reservationform form\"
    method=\"post\"
    data-request=\"{{ __SELF__ }}::onSubmit\"
    data-request-update=\"'{{ __SELF__ }}::success': '#result'\"
    data-request-success=\"\$('#{{ __SELF__ }} input[type=text], #{{ __SELF__ }} textarea').val('');\"
    id=\"{{__SELF__}}\"{% if sent %} class=\"sent\"{% endif %}>

    <div class=\"form-group\">
        <label for=\"date\">Date</label>
        <input id=\"date\" name=\"date\" class=\"form-control datepicker\" type=\"text\" value=\"{{ post.date }}\" />
    </div>
    <div class=\"form-group\">
        <label for=\"time\">Time</label>
        <input id=\"time\" name=\"time\" class=\"form-control\" type=\"text\" value=\"{{ post.time }}\" />
    </div>
    <div class=\"form-group\">
        <label for=\"time\">Email</label>
        <input id=\"email\" name=\"email\" class=\"form-control\" type=\"text\" placeholder=\"Email\" value=\"{{ post.email }}\" />
    </div>
    <div class=\"form-group\">
        <label for=\"time\">Name</label>
        <input id=\"name\" name=\"name\" class=\"form-control\" type=\"text\" placeholder=\"Name\" value=\"{{ post.name }}\" />
    </div>
    <div class=\"form-group\">
        <label for=\"time\">Address / street</label>
        <input id=\"street\" name=\"street\" class=\"form-control\" type=\"text\" placeholder=\"Street\" value=\"{{ post.street }}\" />
    </div>
    <div class=\"form-group\">
        <label for=\"phone\">Phone</label>
        <input id=\"phone\" name=\"phone\" class=\"form-control\" type=\"text\" placeholder=\"Phone\" value=\"{{ post.phone }}\" />
    </div>
    <div class=\"form-group\">
        <label for=\"message\">Your message</label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\" placeholder=\"Your message\">{{ post.message }}</textarea>
    </div>

    {{ form_token() }}
    <button type=\"submit\" name=\"{{ __SELF__ }}-submit\" class=\"btn btn-success\" value=\"1\" id=\"submit\">Submit</button>

</form>
", "/home/simplon/fred/PHP/october/install-master/plugins/vojtasvoboda/reservations/components/reservationform/default.htm", "");
    }
}
