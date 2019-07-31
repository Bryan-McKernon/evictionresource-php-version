<div id="mobile_contact_us_id"></div>

<div class="Contact_Us_Container">          
    <div class="Thank_You_Form_Success">Thank You!</div>                     
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
