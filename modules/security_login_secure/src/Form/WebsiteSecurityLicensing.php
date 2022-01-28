<?php

/**
 * @file
 * Contains \Drupal\security_login_secure\Form\WebsiteSecurityLicensing.
 */

namespace Drupal\security_login_secure\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormBase;
use Drupal\security_login_secure\Utilities;

class WebsiteSecurityLicensing extends FormBase {

    public function getFormId() {
        return 'website_security_licensing';
    }

    public function buildForm(array $form, FormStateInterface $form_state){

        $form['markup_library'] = array(
            '#attached' => array(
                'library' => array(
                    "security_login_secure/security_login_secure.admin",
                )
            )
        );

        $form['header_top_style_2'] = array(
         '#markup' => '<div class="ns_table_layout_1"><div class="ns_table_layout">'
       );

   $form['markup_1'] = array(
            '#markup' =>'<br><h2>&emsp; Upgrade Plans</h2><hr>'
        );

        $form['markup_free'] = array(
            '#markup' => '<html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Main Style -->
            </head>
            <body>
            <!-- Pricing Table Section -->
            <section id="pricing-table">
                <div class="container_1">
                    <div class="row">
                        <div class="pricing">
                            <div>
                                <div class="pricing-table class_inline_1">
                                    <div class="pricing-header" id="feature_list">
                                        <h2 class="pricing-title">Features / Plans</h2>
                                    </div>
                                    <div class="pricing-list">
                                        <ul>
                                            <li>Brute Force Protection</li>
                                            <li>Show remaining login attempts to user</li>
                                            <li>Set time period for which User/IP should be blocked</li>
                                            <li>Set number of login failures before detecting an attack</li>
                                            <li>IP Blocking:(manual and automatic) [Blacklisting and whitelisting included]</li>
                                            <li>View list of Blacklisted and whitelisted IPs</li>
                                            <li>Email Alerts for IP blocking and unusual activities to admin and end users</li>
                                            <li>Advanced activity logs auditing and reporting</li>
                                            <li>Advanced Blocking - Block users based on: IP range, Country Blocking</li>   
                                            <li>Allow Role Login by IP Configuration</li>
                                            <li>Icon based Authentication</li>
                                            <li>Honeypot - Divert hackers and bots away from your assets</li>
                                            <li>Advanced User Verification</li>
                                            <li>Customized Email Templates</li>
                                            <li>DOS protection - Process Delays - Delays responses in case of an attack</li>
                                            <li>Enforce Strong Password : Check Password strength for all users</li>
                                            <li>Contextual authentication based on device, location, time and user behaviour</li>
                                            <li>End to End Integration Support</li>
                                            <li>Support</li>                                                                   
                                        </ul>
                                    </div>
                                </div>                           
                            <div class="pricing-table class_inline">
                                <div class="pricing-header">
                                    <p class="pricing-title">FREE<br><span></span></span></p>
                                    <p class="pricing-rate"><sup>$</sup> 0</sup></p>
                                    
                                    <div class="filler-class"></div>
                                     <a class="btn btn-custom btn-danger btn-sm">ACTIVE PLAN</a>
                                </div>
                                <div class="pricing-list">
                                    <ul>
                                        <li>&#x2714;</li>
                                        <li>&#x2714;</li>
                                        <li>&#x2714;</li>
                                        <li>&#x2714;</li>
                                        <li>&#x2714;</li>
                                        <li>&#x2714;</li>
                                        <li>&#x2714;</li>                                    
                                        <li></li>                                    
                                        <li></li>
                                        <li></li>
                                        <li></li>                                    
                                        <li></li>                                    
                                        <li></li>
                                        <li></li>  
                                        <li></li>                                   
                                        <li></li>                                    
                                        <li></li>
                                        <li></li>                                  
                                        <li>Basic Email Support Available</li>                           
                                    </ul>
                                </div>
                            </div>
                        
                        
                        <div class="pricing-table class_inline">
                            <div class="pricing-header">
                                <p class="pricing-title">PREMIUM<br></p>
                                <p class="pricing-rate"><sup>$</sup> 199 <sup>*</sup></p>
                                
                                <h4 class="text_h4">Additional Discounts available for multiple instances and years</h4>
                                <div class="filler-class-custom-gateway"></div>
                                 <a href="https://www.miniorange.com/contact" target="_blank" class="btn btn-custom btn-danger btn-sm">CONTACT US</a>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>                                    
                                    <li>&#x2714;</li>                                    
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>                                    
                                    <li>&#x2714;</li>                                    
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>&#x2714;</li>
                                    <li>Premium Support Plans Available</li>                                                               
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Table Section End -->
    </br>
    
    </body>
    </html>',
     );

    $form['markup_6'] = array(
            '#markup' => '<div id="return_policy">* Cost applicable for one instance and per year only. Licenses are perpetual and the Support Plan includes 12 months of maintenance (support and version updates). You can renew maintenance after 12 months at 50% of the current license cost.<br><br>
            <h3>10 Days Return Policy - </h3>
            At miniOrange, we want to ensure you are 100% happy with your purchase. If the premium module you purchased is not working as advertised and you have attempted to resolve any issues with our support team, which could not get resolved. We will refund the whole amount within 10 days of the purchase. Please email us at <a href="mailto:drupalsupport@xecurify.com">drupalsupport@xecurify.com</a> for any queries regarding the return policy.'
        );


    $form['hello1'] = [ '#type' => 'html_tag', '#tag' => 'script', '#attributes'=> ["src"=>"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"]];

        $form['main_layout_div_end_1'] = array(
                '#markup' => '</div><div>',
            );

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {

    }

}
