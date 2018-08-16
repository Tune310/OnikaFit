<?php

/*
*	Template Name:Step 2
*
*
*/
get_header();
if ( have_posts() ) {	
	while ( have_posts() ) {	
		the_post();
?>
<style>
.dash ul li {
	list-style: none;
	float: left;
	width: 30%;
	font-size: 14px;
}
.dash ul li span {
	width: 60px;
	height: 60px;
	border-radius: 50%;
	display: block;
	border: 1px solid #333;
	text-align: center;
	line-height: 57px;
	margin-left: 16px;
}
.dash ul li span.headline {
	background: #72c4ff;
	color: #fff;
	border: 1px solid #72c4ff;
}
.btn {
	background-color: #5dc2ca;
	border-radius: 5px;
	color: #fff;
	cursor: pointer;
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
}
.form-group {
	margin: 28px 0;
}
select {
	padding: 11px 0px;
}
.form-check {
	padding: 11px 14px;
}
#exampleSelect2 {
	padding-left: 10px;
}
</style>
<section id="regStep2" class="regStep boldSection topSpaced bottomSpaced btLightSkin gutter inherit">
  <div class="port">
    <header class="header btClear extralarge btDash topDash">
      <div class="dash">
        <ul>
          <li><span >1</span> Account Setup </li>
          <li><span class="headline">2</span>Profile Details</li>
          <li><span>3</span>Build Profile</li>
        </ul>
      </div>
    </header>
    <div class="rowItem col-md-8 col-ms-8  btTextLeft inherit" >
      <div class="rowItemContent">
        <form name="step2" id="step2" method="post" action="<?php echo $next; ?>/app-controller/">
          <input type="hidden" name="step" value="2">
          <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" class="form-control" id="full_name"  placeholder="Enter Full Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Location	</label>
            <input type="text" class="form-control" id="location" placeholder="Location">
          </div>
          
           <div class="form-check">
           <label for="exampleInputPassword1">Do you consider yourself a founder?</label>
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="founder"  value="yes">
                Yes </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="founder"  value="no">
                No </label>
            </div>
            
            <div class="form-check">
           <label for="exampleInputPassword1">Are you a student?</label>
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="student"  value="yes">
                Yes </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="student"  value="no">
                No </label>
            </div>
            
            <div class="form-check">
           <label for="exampleInputPassword1">Interested in</label>
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="interested"  value="Joining a team">
                Joining a team </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="interested"  value="Consulting">
                Consulting </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="interested"  value="Freelancing">
                Freelancing </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="interested"  value="all">
                All the above </label>
            </div>
            
            <div class="form-check">
           <label for="exampleInputPassword1">Method of Compensation Preferred</label>
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="moc"  value="Equity (% equity stake)">
                Equity (% equity stake) </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="moc"  value="Contract Pay">
                Contract Pay </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="moc"  value="Experience">
                Experience </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="moc"  value="Salary">
                Salary </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="moc"  value="Up for negotiation">
                Up for negotiation </label>
            </div>
            
            <div class="form-check">
           <label for="exampleInputPassword1">Time committment?</label>
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="time-committment"  value="Full-time business">
                Full-time business </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="time-committment"  value="Part-time business">
                Part-time business </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="time-committment"  value="Flexible full time/part time">
                Flexible full time/part time </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="time-committment"  value="Per Diem (on - call)">
                Per Diem (on - call) </label>
            </div>
            
            <div class="form-check">
           <label for="exampleInputPassword1">Preference for Work style</label>
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="work-style"  value="On - Location">
                On - Location </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="work-style"  value="Remote Work">
                Remote Work </label>
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="work-style"  value="Flexible">
                Flexible </label>
                
            </div>
            
          
       
          
          
          
          <button type="submit" name="btnStep2" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php
	}
}
get_footer();

?>
