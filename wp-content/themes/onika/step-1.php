<?php

/*
*	Template Name:Step 1
*
*
*/
get_header();
session_start();
$next=site_url();

if ( have_posts() ) {	
	while ( have_posts() ) {	
		the_post();
?>
<style>.dash ul li{ list-style: none; float: left; width:30%; }
.dash ul li span{ width: 60px;
    height: 60px;
    border-radius: 50%;
    display: block;
    border: 1px solid #333;
    text-align: center;
    line-height: 57px; }
    .dash ul li span.headline{background: #72c4ff;
    color: #fff;
    border: 1px solid #72c4ff;}
.btn{background-color: #5dc2ca;
       border-radius: 5px; color: #fff; cursor: pointer;
    display: inline-block;
    margin: 0;
    padding: 1.1em 2.5em;
    border: none;
    font-size: .8em;
    line-height: 1;
    width: auto;
    font-weight: 700;
    text-transform: uppercase;
    background-color: #5dc2ca;
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    transition: all 300ms ease;
   
} .form-group {
    margin: 28px 0;
}</style>
<section id="regStep1" class="regStep boldSection topSpaced bottomSpaced btLightSkin gutter inherit">
  <div class="port">
    <header class="header btClear extralarge btDash topDash">
      <div class="dash">
          <ul><li><span class="headline">Account Setup</span></li><li><span>Social Profiles</span></li>
          <li><span>Build Profile</span></li>
                    
          </ul>        
      </div>      
    </header>
    
    <div class="rowItem col-md-8 col-ms-8  btTextLeft inherit" >
      <div class="rowItemContent">
        <form name="step1" id="step1" method="post" action="<?php echo $next; ?>/app-controller/">
          <input type="hidden" name="step" value="1">
          <div class="form-group">
            <label for="email">User Name:</label>
            <input type="text" class="form-control" name="user_name"  id="user_name" value="<?=$_SESSION['userData']['user_login']?>">
          </div>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email"  id="email" value="<?=$_SESSION['userData']['user_email']?>">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" id="pwd">
          </div>
          <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            <input type="password" class="form-control" name="cpwd"  id="cpwd">
          </div>
          <button type="submit" name="btnStep1" class="btn btn-default" value="sub">Next</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php
	}
}

?>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
 <script>
		
        $(document).ready(function (e) { 
			var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
            $('#step1').validate({                
                rules:{
                    user_name:{
						required:true,
						remote:{
                            url: ajaxurl,
                            type: "post",
                            data: {
								'action':'validate_user_ajax_request',
								'user_name' : function(){ return $( "#user_name" ).val(); }
							}
                        }
					},                   
                    email: {
                        required: true,                        
                        email: true,
                        remote:{
                            url: ajaxurl,
                            type: "post",
                            data: {
								'action':'validate_email_ajax_request',
								'email' : function(){ return $( "#email" ).val(); }
							}
                        }
                    },
                    pwd: {
                        required: true,
                        minlength: 6
                    },
					cpwd: {
                        required: true,
                        minlength: 6,
						equalTo: "#pwd"
                    }
                },
                messages:{
                    user_name:{
                        required: "User Name Required",
                        remote:"User Name already registered"
                    },
                    email: {
                        required: "Email Id Required",                        
                        email: "Invalid Email",
                        remote:"Email already registered"
                    },
                    pwd: {
                        required: "Password can't empty",
                        minlength: "Password must be minimum 6 character long"
                    },
					cpwd: {
                        required: "Password can't empty",
                        minlength: "Password must be minimum 6 character long",
						equalTo: "Password not matched"
                    }
                },
                submitHandler: function(form) {
                    form.submit();
					//alert("Hi");
                }
            });
        });


    </script> 

<?php
get_footer();

?>
