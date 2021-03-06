<?php

/* register.html.twig */
class __TwigTemplate_3b06386b7a77a5dafdc939f1782cbdd1 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<form name='form' id='form' class='form' action='register.php' onsubmit='return validate(this)' method='post'>
    <fieldset>
        <legend>
            <span>Inscripcion</span>
        </legend>
        <input type='hidden' name='page_mode' value='register' />
        <div>
            <label for='name1'>Name first player</label>
            <input id='name1' name='name1' id='name1' type='text' />
        </div>
        <div>
            <label for='surname1'>Name second player</label>
            <input name='surname1' id='surname1' type='text' />
        </div>
        <div>
            <label for='telefono1'>Phone first player</label>
            <input name='phone1' id='phone1' type='text' />
        </div>
        <div>
            <label for='email1'>E-mail first player</label>
            <input name='email1' id='email1' type='text' />
        </div>
        <div>
            <label for='name2'>Name second player</label>
            <input name='name2' id='name2' type='text' />
        </div>
        <div>
            <label for='surname2'>Surname second player</label>
            <input name='surname2' id='surname2' type='text' />
        </div>
        <div>
            <label for='telefono2'>Phone second player</label>
            <input name='phone2' id='phone2' type='text' />
        </div>
        <div>
            <label for='email2'>E-mail second player</label>
            <input name='email2' id='email2' type='text' />
        </div>
        <div>
            <label for='userName'>Username</label>
            <input name='userName' id='userName' type='text' />
        </div>
        <div>
            <label for='password'>Password</label>
            <input name='password' id='password' type='password' />
        </div>
        <div>
            <label for='confirmPassword'>Confirm password</label>
            <input name='confirmPassword' id='confirmPassword' type='password' />
        </div>
    </fieldset>
    <fieldset class='submit'>
        <input name='submit' id='submit' value='Sign up' type='submit' class='button'/>
    </fieldset>
</form>
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
