<script>

// Listen for scroll event, when user scrolls past navbar height change opacity of navbar
//----------------------------------------------------------------------------------
window.addEventListener("scroll", function (event) {
    var scroll = this.scrollY;
    if (scroll >= 58) {
      document.getElementById("header_bar_id").style.backgroundColor = "rgb(52, 76, 93)";
    } else {
      document.getElementById("header_bar_id").style.backgroundColor = "rgba(52, 76, 93, .80)";                
    }
});
//----------------------------------------------------------------------------------

// Open and Close Modal Functions
//----------------------------------------------------------------------------------
    function open_modal() {
      document.getElementById("modal_id").style.display = "block";
    }

    function close_modal() {
      document.getElementById("modal_id").style.display = "none";
    }
//----------------------------------------------------------------------------------
       

// Mobile Buttons
//----------------------------------------------------------------------------------    
    function mobile_home_button_execute()  {
      if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        window.scrollTo(0, 0);         
      } else {
      window.scroll({top: 0, behavior: 'smooth'});
      }
      close_modal();
    }

    function mobile_about_us_button_execute() {      
      let i = document.getElementById("mobile_about_us_id").offsetTop;
      if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        window.scrollTo(0, i-57);         
      } else {
      window.scroll({top: i-57, behavior: 'smooth'});
      }
      close_modal();
    }

    function mobile_services_button_execute() {
      let i = document.getElementById("mobile_services_id").offsetTop;
      if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        window.scrollTo(0, i-57);         
      } else {
      window.scroll({top: i-57, behavior: 'smooth'});
      }
      close_modal();
    }

    function mobile_areas_served_button_execute() {
      let i = document.getElementById("mobile_areas_served_id").offsetTop;
      if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        window.scrollTo(0, i-57);         
      } else {
      window.scroll({top: i-57, behavior: 'smooth'});
      }
      close_modal();
    }

    function mobile_contact_us_button_execute() {
      let i = document.getElementById("mobile_contact_us_id").offsetTop;
      if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        window.scrollTo(0, i-57);         
      } else {
      window.scroll({top: i-37.3, behavior: 'smooth'});
      }
      close_modal();
    }
//----------------------------------------------------------------------------------


// Desktop Buttons
//----------------------------------------------------------------------------------
    function home_button_execute()  {
      if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        window.scrollTo(0, 0);         
      } else {
      window.scroll({top: 0, behavior: 'smooth'});
      }
    }

    function about_us_button_execute() {
     let i = document.getElementById("mobile_about_us_id").offsetTop;
      if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        window.scrollTo(0, i);         
      } else {
        window.scrollTo({top: i, behavior: 'smooth'});
      }
    }

    function services_button_execute() {
     let i = document.getElementById("mobile_services_id").offsetTop;
     if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        window.scrollTo(0, i);         
      } else {
      window.scroll({top: i, behavior: 'smooth'});
     }
    }

    function areas_served_button_execute() {
     let i = document.getElementById("mobile_areas_served_id").offsetTop;
     if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        window.scrollTo(0, i);         
      } else {
      window.scroll({top: i, behavior: 'smooth'});                
      }
    }

    function contact_us_button_execute() {
     let i = document.getElementById("mobile_contact_us_id").offsetTop;
     if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        window.scrollTo(0, i);         
      } else {
      window.scroll({top: i, behavior: 'smooth'});
      }
    }
//----------------------------------------------------------------------------------          
</script>

<!-- ------------------------------------------------------------------------------------- -->
 <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142929333-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-142929333-1');
  </script>
<!-- ------------------------------------------------------------------------------------- -->
</body>      

<footer>
<ul>
  <li>2532 Santa Clara Ave Suite 149 Alameda, CA 94501</li>
  <li><a href="https://www.websitepolicies.com/policies/view/1lDSkpSO" target="_blank">Privacy Policy</a> | <a href="https://www.websitepolicies.com/policies/view/euH4nUvr" target="_blank">Disclaimer</a></li>
  <li><a href="http://www.bayareaprocessservers.com/" target="_blank">BayAreaProcessServers.com</a></li>
  <li>&copy 2019 Eviction Resource</li>
</ul>          
</footer>   

</html>