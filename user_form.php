<div id="mobile_contact_us_id"></div>

<div class="Contact_Us_Container">
  <form action="./email_process.php" method="post" id="form_id">

    <div class="Form_Section">
      <h2 class="Contact_Us_Text">Contact Us</h2>
    </div>
    
    <div class="Form_Section">
      <hr/>
    </div>

    <div class="Form_Section">
      <label>First Name: </label>
      <input type="text" placeholder="First Name" name="first_name"/>
    </div>

    <div class="Form_Section">
      <label>Last Name: </label>            
      <input type="text" placeholder="Last Name" name="last_name"/>
    </div>

    <div class="Form_Section">
        <label>Email: </label>
        <input type="email" placeholder="E-Mail" name="email"/>
    </div>

    <div class="Form_Section">
      <label>Phone: </label>
      <input type="tel" placeholder="Phone Number" name="phone"/>
    </div>

    <div class="Form_Section">
      <label>Message: </label>
      <textarea class="Form_Message_Box" type="text" placeholder="Your message here.." name="message"></textarea>
    </div>

    <input type="submit" value="Submit" class="Form_Submit_Button" name="form_submit_button"/>
  </form>
</div>