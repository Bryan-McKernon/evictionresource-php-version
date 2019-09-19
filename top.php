<!DOCTYPE html>
  <html>
        <head>
          <title>Eviction Resource</title>
          <meta name="keywords" content="eviction resources, eviction information, evictions,
          rental agreements, rental forms, section 21, lease, lease agreement, removing a tenant,
          tenant removal, tenant eviction">
          <meta name="description" content="Welcome to Eviction Resource (510) 764-3838">
          <meta name="viewport" content="width=device-width, initial-scale=1"/>
          <meta name="format-detection" content="telephone=no"/>
          <link rel="stylesheet" type="text/css" href="mainCSS.css">
          <link rel="stylesheet" type="text/css" href="areas_served.css">
        </head>
        
        <body>

        <div class="header_bar" id="header_bar_id">
            <img src="mobile_icon_3.png" class="mobile_icon" onclick="open_modal()"/>
            <div class="navbar_website_title">Eviction Resource</div>
            <div class="phone_number_text">Call: (510) 764-3838</div>
            <ul class="header_buttons_wrapper">
                <li><a onclick="home_button_execute()">Home</a></li>                
                <li><a onclick="about_us_button_execute()">About Us</a></li>                
                <li><a onclick="services_button_execute()">Services</a></li>                               
                <li><a onclick="areas_served_button_execute()">Areas Served</a></li>
                <li><a onclick="contact_us_button_execute()">Contact Us</a></li>
            </ul>
        </div>

        <div class="Modal" id="modal_id">
          <img src="close_button.png" onclick="close_modal()"/>
          <div>
            <div onclick="mobile_home_button_execute()">Home</div>
            <div onclick="mobile_about_us_button_execute()">About Us</div>
            <div onclick="mobile_services_button_execute()">Services</div>
            <div onclick="mobile_areas_served_button_execute()">Areas Served</div>
            <div onclick="mobile_contact_us_button_execute()">Contact Us</div>
            <div><a href="tel:5107643838">(510) 764-3838</a></div>
          </div>
        </div>
    
        <div class="background_image">
        <div class="home_page_context">
            <h2>Welcome to</h2>             
            <hr/>
            <h2>Eviction Resource</h2>            
        </div>
        </div>

      <div id="mobile_about_us_id"></div>

      <div class="About_Us_Panel_Container">
        <div class="About_Us_Panel_Container_Contained">
            <div class="About_Us_Master_Container">
              <div class="About_Us_Container">          
                <h2>About Us</h2>
                <hr class="hr_above_about_us"/>
                  <p class="About_Us_Paragraph">
                  EvictionResource.com takes pride in our quality of service, successful track-record,
                  and our impeccable reputation. Get some of the most experienced, knowledgeable, and
                  up-to-date industry experts working for you. We strive to offer full-service solution
                  to make your legal matter process stress free.
                  </p>
                  <p class="About_Us_Paragraph">
                  The main difference between our service and other online companies is our service, we are there for you 
                  every step of the way. Our experience allows us to do it the right way the first time, resulting in a 
                  quick resolution. Since we are not attorneys, we can keep our costs reasonable. We actually answer our 
                  phones and you get to talk to a real person. 
                  </p>
                  <p class="About_Us_Paragraph">
                  A personal touch can go a long way for matters as 
                  important as an eviction or defense. That&#39;s why our services are valuable and indispensable to you.
                  </p>
              </div>
            </div>
        </div>
      </div>
      
      <div id="mobile_services_id"></div>

      <div class="Services_Panel_Container">
          <div class="Services_Master_Container">
            <div class="Services_Title">
              <h2 id="mobile_services_id">Eviction Package</h2>
              <hr class="hr_above_services"/>
            </div>

            <div class="Services_Container">
              <h3>$499.00 Flat Rate Package Includes the following:</h3>
              <div class="Services_ul_li_Container">
                <ul>
                  <li>Initial consultant with experienced Intake Specialist</li>
                  <ul>
                    <li class="li_indented">Document Preparation include all notices and court forms, local forms, Prejudgment CRTP</li>
                  </ul>
                  <li>Case Filing</li>
                  <ul>
                    <li>Professional Process Service of Court Documents on all Defendants (including Prejudgment Claim of Right to Possession</li>              
                  </ul>
                  <li>Subsequent Filing for Restitution of Premises</li>
                  <li>Judgement - Unlawful Detainer</li>
                  <li>Declaration of Default</li>
                  <li>Default Judgement</li>            
                  <li>Trial Setting Service (if needed)</li>
                  <li>Request/Counter - Request to Set Case for Trial</li>
                  <li>Substitution of Attorney</li>
                </ul>
              </div>            
            </div>
          </div>
      </div>

      <div id="mobile_areas_served_id"></div>

      <div class="Areas_Served_Panel_Container">
        <div class="Areas_Served_Panel_Container_Contained">

          <div class="Areas_Served_Master_Container">
            <div class="Areas_Served_Title">
              <h2>Areas Served</h2>
              <h3 id="mobile_areas_served_id">(Click for details)</h3>
              <hr/>    
            </div>
            <div class="Areas_Served_Container">

                <div class="Specific_Area_Served_Container" onclick=(window.open("https://www.courts.ca.gov/selfhelp-housing.htm"))>
                  <div class="Specific_Area_Served_Title">Alameda</div>
                </div>

                <div class="Specific_Area_Served_Container" onclick=(window.open("http://www.cc-courts.org/ud/ud.aspx"))>
                  <div class="Specific_Area_Served_Title">Contra Costa</div>
                </div>

                <div class="Specific_Area_Served_Container" onclick=(window.open("https://www.marincourt.org/civil_special.htm"))>
                  <div class="Specific_Area_Served_Title">Marin</div>
                </div>

                <div class="Specific_Area_Served_Container" onclick=(window.open("https://www.monterey.courts.ca.gov/mediation/small-claims-unlawful-detainer"))>
                  <div class="Specific_Area_Served_Title">Monterey</div>
                </div>
              
                <div class="Specific_Area_Served_Container" onclick=(window.open("http://www.courts.ca.gov/forms.htm?filter=UD"))>
                  <div class="Specific_Area_Served_Title">Napa</div>
                </div>
                
                <div class="Specific_Area_Served_Container" onclick=(window.open("http://www.placer.courts.ca.gov/division-civil-ud.shtml"))>
                  <div class="Specific_Area_Served_Title">Placer County</div>
                </div>
              
                <div class="Specific_Area_Served_Container" onclick=(window.open("https://www.saccourt.ca.gov/ud/ud.aspx"))>
                  <div class="Specific_Area_Served_Title">Sacramento</div>
                </div>

                <div class="Specific_Area_Served_Container" onclick=(window.open("http://www.sanbenito.courts.ca.gov/new_site/court_divisions/small_claims_div.shtml"))>
                  <div class="Specific_Area_Served_Title">San Benito</div>
                </div>

                <div class="Specific_Area_Served_Container" onclick=(window.open("https://www.courts.ca.gov/selfhelp-eviction.htm"))>
                  <div class="Specific_Area_Served_Title">San Francisco</div>
                </div>
  
                <div class="Specific_Area_Served_Container" onclick=(window.open("https://www.sjcourts.org/divisions/unlawful-detainer-landlord-tenant/"))>
                  <div class="Specific_Area_Served_Title">San Joaquin</div>
                </div>
              
                <div class="Specific_Area_Served_Container" onclick=(window.open("http://www.sanmateocourt.org/self_help/workshop_landlord.php"))>
                  <div class="Specific_Area_Served_Title">San Mateo</div>
                </div>

                <div class="Specific_Area_Served_Container" onclick=(window.open("http://www.scscourt.org/self_help/civil/ud/ud_home.shtml"))>
                  <div class="Specific_Area_Served_Title">Santa Clara</div>
                </div>
  
                <div class="Specific_Area_Served_Container" onclick=(window.open("https://www.courts.ca.gov/20130.htm"))>
                  <div class="Specific_Area_Served_Title">Santa Cruz</div>
                </div>

                <div class="Specific_Area_Served_Container" onclick=(window.open("http://www.solanocounty.com/depts/sheriff/civil_bureau/evictions.asp"))>
                  <div class="Specific_Area_Served_Title">Solano</div>
                </div>
                
                
                <div class="Specific_Area_Served_Container" onclick=(window.open("http://sonoma.courts.ca.gov/forms-filing/packets/unlawful-detainer-eviction"))>
                  <div class="Specific_Area_Served_Title">Sonoma</div>
                </div>

                <div class="Specific_Area_Served_Container" onclick=(window.open("https://www.stanct.org/sites/default/files/Complaint%20-%20Unlawful%20Detainer%20%28Eviction%29.pdf"))>
                  <div class="Specific_Area_Served_Title">Stanislaus</div>
                </div>        
              
              </div>                
            </div>    
          </div>
      </div>