<style>
.form{
  margin-left:90px;
  width:700px;
  height:110%;
  background-color:lightblue;
  border:4px solid black;
  text-align:center;
}
p{
  color:red;
}
.date{
  margin-left:70%;
  width:200px;
  background-color:white;
  color:green;
  border:2px solid black;
}
</style>
<div class="form">
  

  <?php //echo validation_errors();?>
 
    <div class="title">Welcome</div>
      <div class="subtitle">Let's create your account!</div>
    <?php echo form_open('user/validation'); ?>
<div class="date">
   <?php
    $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
        $time = time();
        echo mdate($datestring, $time);
        ?>
</div>
      <div class="input-container ic1">
      <label for="firstname"  value="<?php echo set_value('username');?>class="placeholder">First name</label>
        <input id="firstname" name="fname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
      <p>
        <?php echo form_error('fname'); ?>
</p>
      </div>

      <div class="input-container ic2">
      <label for="lastname" class="placeholder">Last name</label>
        <input id="lastname" name="lname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <p>
        <?php echo form_error('lname'); ?>
      </p>
      </div>

      <div class="input-container ic2">
      <label for="email" class="placeholder">Email</>
        <input id="email" name="email" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <p>
        <?php echo form_error('email'); ?>
       </p>
      </div>

      <div class="input-container ic2">
      <label for="password" class="placeholder">Password</>
        <input id="password" name="password" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <p>
        <?php echo form_error('password'); ?>
       </p>
      </div>

      <div class="input-container ic2">
      <label for="cpassword" class="placeholder">Confirm Password</>
        <input id="cpassword" name="cpassword" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <p>
        <?php echo form_error('cpassword'); ?>
       </p>
      </div>
      
      <div class="input-container ic2">
      <label for="number" class="placeholder">number</>
        <input id="number" name="number" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <p>
        <?php echo form_error('number'); ?>
       </p>
      </div>
      
      <br>
      <label for="birthday">DOB:</label>
  <input type="integer" id="birthday" placeholder="dd/mm/yy" name="numeric">
  <?php echo form_error('numeric'); ?>
<br><br>
