
<?php require('header.php'); ?>
<script src="samplejson.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$.post("samplejson.js", { 
    username:"sa"
})
.done(function( data2 ) {
  console.log(data);
    document.getElementById("profile_img_url").src=data.image_url;
    document.getElementById("name").innerHTML="<center>".concat(data.name).concat("</center>");
    document.getElementById("headline").innerHTML="<center>".concat(data.headline).concat("</center>");
    document.getElementById("shortlocation").innerHTML="<center>".concat(data.location_short).concat("</center>");
    document.getElementById("investortype").innerHTML="Investor Type : ".concat(data.investor_type);
    if (data.linkedin=="")
      document.getElementById("linkedinurl").innerHTML="LinkedIn : N/A";
    else document.getElementById("linkedinurl").innerHTML="LinkedIn : <a target=_blank href=".concat(data.linkedin).concat(">").concat(data.linkedin).concat("</a>");
    if (data.twitter=="")
      document.getElementById("twitterurl").innerHTML="Twitter : N/A";
    else document.getElementById("twitterurl").innerHTML="Twitter : <a target=_blank href=".concat(data.twitter).concat(">").concat(data.twitter).concat("</a>");
    document.getElementById("currentorg").innerHTML="Current Organization : ".concat(data.currentorg);
    document.getElementById("designation").innerHTML="Designation : ".concat(data.designation);
    document.getElementById("city").innerHTML="City : ".concat(data["location"]);
    document.getElementById("country").innerHTML="Country : ".concat(data.country);
    document.getElementById("interests").innerHTML
    if(data.interests.length==0)
      document.getElementById("interests").innerHTML="Not available";
    else {
      var sts=""
      for(var i=0;i<data.interests.length;i++)
        sts=sts.concat(data.interests[i]["area"]).concat("<br>")
        document.getElementById("interests").innerHTML=sts;
    }
    document.getElementById("noofinvestments").innerHTML="Number of investments : ".concat(data["noofinvestments"]);
    document.getElementById("typicalinvestmentamount").innerHTML="Typical investment amount : ".concat(data.typcalinvestmentamount);
    if(data.portfolio.length==0)
      document.getElementById("portfolio").innerHTML="<br>Not available";
    else {
      var sts="<br>"
      for(var i=0;i<data.portfolio.length;i++)
        sts=sts.concat("<h4>").concat(data.portfolio[i]["name"]).concat("</h4>")
        document.getElementById("portfolio").innerHTML=sts;
    }
    if(data.following.length==0)
      document.getElementById("following").innerHTML="You have not bookmarked any companies yet.";
    else {
      var sts="";

      for(var i=0;i<data.following.length;i++)
        sts=sts.concat(' <div class="col-xs-18 col-sm-6 col-md-3"><div class="thumbnail flower" data-category="green yellow large antarctica"><img src="').concat(data.following[i]["photo"]).concat('"><div class="caption"><h4>').concat(data.following[i]["name"]).concat('</h4><p>').concat(data.following[i]["tagline"]).concat('</p><a href="').concat(data.following[i]["url"]).concat('"class="btn btn-info btn-xs" role="button">View offering</a></div></div></div>')
        document.getElementById("following").innerHTML=sts;
    }
});

</script>
 
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size  mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" >
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(76, 105, 114);"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                 <div class="col-xs-18 col-sm-12 col-md-12">
         
            <center><img id="profile_img_url" ></center>
              <div class="caption">
                <h4 id="name"></h4>
                <p id="headline"></p>
                <p id="shortlocation"></p>
            </div>
        
       
        </div>
      
    </div>
</section>



<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" >
    <div class=" mbr-box__magnet--sm-padding mbr-box__magnet--center-left" >


<div class="container">
  <ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="pill" href="#profile">Profile</a></li>
    <li><a data-toggle="pill" href="#portfolio">Portfolio</a></li>
    <li><a data-toggle="pill" href="#following">Following</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="profile" class="tab-pane fade in active"><br>
<p id="investortype" >Investor type : </p>
<p id="linkedinurl">Linkedin : </p>
<p id="twitterurl">Twitter :  </p><br>

<h3>Current affiliation</h3>
<p id="currentorg">Current Organization : </p>
<p id="designation">Designation : </p>
<p id="city">City : </p>
<p id="country">Country : </p><br>

<h3>Interests</h3>
<div  id="interests"></div>


<h3>Investment Preferences</h3>
<p id="noofinvestments"></p>
<p id="typicalinvestmentamount"></p>

    </div>
    <div id="portfolio" class="tab-pane fade">
      <br>
      <p id="portofolio"></p>
    </div>
    <div id="following" class="tab-pane fade">
      <br>
         <div id="following"></div>
    </div>
        
  </div>
</div>


</div>
</section>

<?php require('footer.php'); ?>