<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);


function cookie_consent(){ ?>
    
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#eeeeee"
            },
            "button": {
              "background": "#436bce"
            }
          },
          "theme": "edgeless",
          "position": "bottom-left",
          "content": {
            "href": "https://crowhurst-electricalcontractors.co.uk/cookie-policy/"
          }
        })});
    </script>
    
<?php }

add_action('wp_head', 'cookie_consent');


//add_action('wp_head','corona_consent');
function corona_consent(){
    ?>
    <div id="site__wide__notice">
        <p>
        	In the light of the uncertainty surrounding the recent outbreak of Covid – 19, our priority continues to be the well-being of our customers and employees, and we are committed to ensuring that our front line customer service operates in the safest way for us all.
        </p>
        <p>
        	We would like to reassure customers that we are taking all necessary steps to follow the guidance given by the government and the world health organisation at this time.
        </p>

        <p>
            Following the government guidelines and being categorised as key workers, we are available for all emergency work regarding loss of power or dangerous situations.
            Normal opening hours apply.
        </p>
        
		<p>
			We are still carrying out quotations and installations as these can be carried out without jeopardising the health of either our customers or employees.
			Please call <a href="tel:07711373425">07711373425</a> for more information.
		</p>
		
        <div id="site__wide__notice--close">
            X
        </div>
    </div>
    <style>
        #site__wide__notice {
            max-width: 100%;
            min-height: 120px;
            background-color: #436BCE;
            position: fixed;
            z-index: 1500;
            bottom: 80px;
            left: 10px;
            right: 10px;
            padding: 2rem;
            font-size: 11px;
            color: #FFFFFF;
            font-family: inherit;
            margin: 0;
            opacity: 0;
            transition: all 200ms ease-in-out;
        }

        #site__wide__notice p {
      color: #FFFFFF;
      margin-bottom: 15px;
        }

         #site__wide__notice a {
          color: #FFFFFF;
        }

         #site__wide__notice a:hover {
          opacity: .7;
        }
        @media (min-width: 768px) {
            #site__wide__notice {
                font-size: 13px;
                width: 700px;
                left: 10px;
            }
        }
        #site__wide__notice--close {
            position: absolute;
            top: 1rem;
            right: 1.25rem;
            cursor: pointer;
            transition: all 200ms ease-in-out;
        }
        #site__wide__notice--close:hover {
            color: rgb(224, 224, 224);
        }
        #site__wide__notice.show {
            opacity: 1;
        }
        #site__wide__notice.hidden {
            display: none;
        }
    </style>
<script>
        var notice = document.querySelector('#site__wide__notice');
        var closeNotice = document.querySelector('#site__wide__notice--close');
        if (notice) {
            setTimeout(function() {
                notice.classList.add('show');
            }, 3000);
            closeNotice.addEventListener('click', function() {
                notice.classList.remove('show');
                setTimeout(function() {
                    notice.classList.add('hidden');
                }, 500)
            });
        }
console.log("yo");
(function($){
$(document).ready(function(){
	console.log("yo");
});
})(jQuery); 

// document.querySelector(".header_top .container_inner .right a").innerHTML = "01452 533682";
    </script>
  <?php
}