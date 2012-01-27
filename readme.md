# Twitter for Laravel

The beginings of Twitter support in Laravel, starting with [Bootstrap](https://twitter.github.com/bootstrap/).

## Bootstrap Forms

Twitter for Laravel is designed to work with [Bootstrap 2.0-wip](https://github.com/twitter/bootstrap/tree/2.0-wip).

### Installation

To use Twitter Bootstrap forms you should update the aliases in **application/config/application.php**

    'Form' => 'Twitter\\Bootstrap\\Form',

### Usage

The Twitter\Bootstrap\Form extends Laravel\Form so you can drop it in to existing forms; it also adds some useful functions.  Here's an example of a Login form:

	<article>
		<h1>Log in</h1>

		<?php echo Form::open(URL::to('login'), 'POST', array('class' => Form::TYPE_HORIZONTAL)); ?>
		<?php echo Form::token(); ?>
		<?php echo Form::hidden('from', Input::get('from', Request::uri() === 'login' ? '' : Request::uri())); ?>

		<?php if ($errors->has('login')): ?>
			<?php echo $errors->first('login', '<div class="alert-message error">:message</div>'); ?>
		<?php endif; ?>

		<?php echo Form::field('email', 'email', 'E-mail Address', array(Input::get('email')), array('error' => $errors->has('email'))); ?>
		<?php echo Form::field('password', 'password', 'Password', array(), array('error' => $errors->has('password'))); ?>
		<?php echo Form::field('labelled_checkbox', 'remember', '', array('Use a '.HTML::link('cookies', 'cookie', array('title' => 'Find out more about the cookies we use and how to delete them', 'rel' => 'twipsy', 'target' => '_blank')).' to remember my details', 'yes')); ?>

		<?php echo Form::actions(Form::submit("Log in", array('class' => 'primary'))); ?>

		<?php echo Form::close(); ?>
	</article>

The **Form::field** method allows you to generate a field for any Form:: field.  The parameters are:

* $type (string) Any **Laravel\Form** method with $name as the first parameter.
* $name (string) The name of the HTML field.
* $label (string) A HTML label for this field.
* $args (array) Additional parameters passed in order to the Form method.
* $opts (array) Additional form field parameters; help, error, warning or success.
