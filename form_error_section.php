<div id="mobile_contact_us_id"></div>

<div class="Contact_Us_Container">
  <form action="./email_process.php" method="post" id="form_id">
    <div class="Form_Section">
      <label class="Form_fail_label" id="mobile_contact_us_id">* Please enter your first name</label>
      <input type="text" placeholder="First Name" name="first_name"/>
    </div>

    <div class="Form_Section">
      <label class="Form_fail_label">* Please enter your last name</label>
      <input type="text" placeholder="Last Name" name="last_name"/>
    </div>

    <div class="Form_Section">
      <label class="Form_fail_label">* Please enter your E-Mail</label>
        <input type="email" placeholder="E-Mail" name="email"/>
    </div>

    <div class="Form_Section">
      <label class="Form_fail_label">* Please enter your phone number</label>
      <input type="tel" placeholder="Phone Number" name="phone"/>
    </div>

    <div class="Form_Section">
      <label class="Form_fail_label">* Please enter a message</label>
      <textarea class="Form_Message_Box" type="text" placeholder="Your message here.." name="message"></textarea>
    </div>

    <input type="submit" class="Form_Submit_Button" name="form_submit_button"/>
  </form>
</div>

<script>
    function contact_us_button_execute() {
      let i = document.getElementById("mobile_contact_us_id").offsetTop;
        if (document.documentMode || /Edge/.test(navigator.userAgent)) {
            window.scrollTo(0, i);         
        } else {
            window.scrollBy(0, i);
        }    
    }
    contact_us_button_execute();
</script>
