<style type="text/css">
.users.form table {
	text-align: center;
}
</style>

<div class="users form">

  <fieldset>
    <legend></legend>
  </fieldset>
  <table width="1110" height="247" border="1">
    <tr>
    <th width="1100" scope="col"><div class="users form"></div>      <?php echo $this->Session->flash('auth'); ?><?php echo $this->Form->create('User'); ?></th>
  </tr>
  <tr>
    <th scope="row"><p><?php echo __('Please enter your username and password'); ?></p>
      <p>&nbsp;</p>      
      <p><?php echo $this->Form->input('email');
        echo $this->Form->input('password');
    ?></p>
      <p>&nbsp;</p></th>
  </tr>
  <tr>
    <th scope="row"><?php echo $this->Form->end(__('Login')); ?></th>
  </tr>
</table>
</div>