<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Superhero Example App</title>
<meta name="generator" content="WYSIWYG Web Builder 17 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>body {
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   font-weight: normal;
   line-height: 1.1875;
   margin: 0;
   padding: 0;
}
a {
   color: #0000FF;
   text-decoration: underline;
}
a:visited {
   color: #800080;
}
a:active {
   color: #FF0000;
}
a:hover {
   color: #0000FF;
   text-decoration: underline;
}
input:focus,
textarea:focus,
select:focus {
   outline: none;
}
#wb_LayoutGrid1 {
   border: 0px solid #CCCCCC;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#LayoutGrid1 {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 50px 15px 50px 15px;
}
#LayoutGrid1 > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#LayoutGrid1 > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#LayoutGrid1 > .row > .col-1 {
   float: left;
}
#LayoutGrid1 > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 100%;
}
#LayoutGrid1:before,
#LayoutGrid1:after,
#LayoutGrid1 .row:before,
#LayoutGrid1 .row:after {
   content: " ";
   display: table;
}
#LayoutGrid1:after,
#LayoutGrid1 .row:after {
   clear: both;
}
@media (max-width: 480px) {
#LayoutGrid1 > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#wb_LayoutGrid1 .parallax {
   -webkit-transform-style: preserve-3d;
   -webkit-transform: translate3d(0, 0, 0);
   background-color: transparent;
   background-image: url('images/background.jpg');
   background-position: center;
   background-position: center top;
   background-repeat: no-repeat;
   background-repeat: repeat;
   background-size: cover;
   position: fixed;
   top: 0;
   transform-style: preserve-3d;
   transform: translate3d(0, 0, 0);
   width: 100%;
}
#wb_LayoutGrid1 .parallax__container {
   clip: rect(0, auto, auto, 0);
   height: 100%;
   left: 0;
   overflow: hidden;
   position: absolute;
   top: 0;
   width: 100%;
   z-index: -100;
}
#wb_LayoutGrid5 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #CCCCCC;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#LayoutGrid5 {
   -webkit-flex-direction: row;
   -webkit-flex-wrap: wrap;
   box-sizing: border-box;
   display: -webkit-flex;
   display: flex;
   flex-direction: row;
   flex-wrap: wrap;
   margin-left: auto;
   margin-right: auto;
   padding: 0;
}
#LayoutGrid5 > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 0px;
   padding-right: 0px;
   position: relative;
}
#LayoutGrid5 > .col-1 {
   -webkit-flex: 0 0 auto;
   flex: 0 0 auto;
}
#LayoutGrid5 > .col-1 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: center;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: #F5F5F5;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 5px;
   display: -webkit-flex;
   display: flex;
   flex-basis: 100%;
   flex-wrap: wrap;
   justify-content: center;
   max-width: 100%;
   text-align: center;
}
#LayoutGrid5 > .col-1 > .col-1-padding {
   box-sizing: border-box;
   padding: 5px 5px 0px 5px;
   width: 100%;
}
@media (max-width: 480px) {
#LayoutGrid5 > .col-1 {
   -webkit-flex-basis: 100%  !important;
   flex-basis: 100%  !important;
   max-width: 100%  !important;
}
}
#wb_Text2 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: center;
}
#wb_Text2 div {
   text-align: center;
}
#wb_Text2 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#wb_Text3 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 20px 0px 0px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text3 div {
   text-align: left;
}
#wb_Text3 {
   box-sizing: border-box;
   display: block;
   margin: 20px 0px 0px 0px;
   width: 100%;
}
#real_name {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 1px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 0px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   box-sizing: border-box;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   font-style: normal;
   font-weight: normal;
   line-height: 17px;
   margin: 10px 0px 20px 0px;
   padding: 4px 4px 4px 4px;
   text-align: left;
}
#wb_Text4 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: left;
}
#wb_Text4 div {
   text-align: left;
}
#wb_Text4 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#hero_name {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 1px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 0px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   box-sizing: border-box;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   font-style: normal;
   font-weight: normal;
   line-height: 17px;
   margin: 10px 0px 20px 0px;
   padding: 4px 4px 4px 4px;
   text-align: left;
}
#wb_Text5 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: left;
}
#wb_Text5 div {
   text-align: left;
}
#wb_Text5 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#publisher {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 1px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 0px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   box-sizing: border-box;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   font-style: normal;
   font-weight: normal;
   line-height: 17px;
   margin: 10px 0px 10px 0px;
   padding: 4px 4px 4px 4px;
   text-align: left;
}
#wb_Text6 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: left;
}
#wb_Text6 div {
   text-align: left;
}
#wb_Text6 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#first_appearance_date {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 1px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 0px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   box-sizing: border-box;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   font-style: normal;
   font-weight: normal;
   line-height: 17px;
   margin: 10px 0px 20px 0px;
   padding: 4px 4px 4px 4px;
   text-align: left;
}
#wb_Text7 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: left;
}
#wb_Text7 div {
   text-align: left;
}
#wb_Text7 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#abilities_powers {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 1px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 0px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   box-sizing: border-box;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   font-style: normal;
   font-weight: normal;
   margin: 10px 0px 20px 0px;
   overflow: auto;
   padding: 4px 4px 4px 4px;
   resize: none;
   text-align: left;
}
#wb_Text8 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: left;
}
#wb_Text8 div {
   text-align: left;
}
#wb_Text8 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#team_affiliations {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 1px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 0px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   box-sizing: border-box;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   font-style: normal;
   font-weight: normal;
   margin: 10px 0px 20px 0px;
   overflow: auto;
   padding: 4px 4px 4px 4px;
   resize: none;
   text-align: left;
}
#Button3 {
   -webkit-appearance: none;
   background-color: #56749A;
   background-image: none;
   border: 0px solid #A5A5A5;
   border-radius: 4px;
   color: #FFFFFF;
   font-family: "Candara Light";
   font-size: 16px;
   font-style: normal;
   font-weight: bold;
   margin: 0px 0px 20px 0px;
   padding: 1px 6px 1px 6px;
   text-align: center;
}
#Button3:hover {
   -webkit-transition: background-color 100ms linear 0ms;
   background-color: #7F7F7F;
   transition: background-color 100ms linear 0ms;
}
</style>
<script src="jquery-1.12.4.min.js"></script>
<script src="universal-parallax.min.js"></script>
<script>
function submitdo_update_superhero()
{
   var regexp;
   var real_name = document.getElementById('real_name');
   if (!(real_name.disabled || real_name.style.display === 'none' || real_name.style.visibility === 'hidden'))
   {
      if (real_name.value == "")
      {
         alert("A real name is needed in order to create the superhero.");
         real_name.focus();
         return false;
      }
      if (real_name.value.length < 1)
      {
         alert("A real name is needed in order to create the superhero.");
         real_name.focus();
         return false;
      }
      if (real_name.value.length > 100)
      {
         alert("A real name is needed in order to create the superhero.");
         real_name.focus();
         return false;
      }
   }
   var hero_name = document.getElementById('hero_name');
   if (!(hero_name.disabled || hero_name.style.display === 'none' || hero_name.style.visibility === 'hidden'))
   {
      if (hero_name.value == "")
      {
         alert("A hero name is needed in order to create the superhero.");
         hero_name.focus();
         return false;
      }
      if (hero_name.value.length < 1)
      {
         alert("A hero name is needed in order to create the superhero.");
         hero_name.focus();
         return false;
      }
      if (hero_name.value.length > 100)
      {
         alert("A hero name is needed in order to create the superhero.");
         hero_name.focus();
         return false;
      }
   }
   var publisher = document.getElementById('publisher');
   if (!(publisher.disabled || publisher.style.display === 'none' || publisher.style.visibility === 'hidden'))
   {
      if (publisher.value.length > 100)
      {
         alert("Please enter at most 100 characters in the \"publisher\" field.");
         publisher.focus();
         return false;
      }
   }
   var first_appearance_date = document.getElementById('first_appearance_date');
   if (!(first_appearance_date.disabled || first_appearance_date.style.display === 'none' || first_appearance_date.style.visibility === 'hidden'))
   {
      regexp = /(19|20)[0-9]{2}[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])/;
      if (first_appearance_date.value.length != 0 && !regexp.test(first_appearance_date.value))
      {
         alert("Please correct the first appearance date");
         first_appearance_date.focus();
         return false;
      }
   }
   var abilities_powers = document.getElementById('abilities_powers');
   if (!(abilities_powers.disabled || abilities_powers.style.display === 'none' || abilities_powers.style.visibility === 'hidden'))
   {
      if (abilities_powers.value.length > 2000)
      {
         alert("Please enter at most 2000 characters in the \"abilities_powers\" field.");
         abilities_powers.focus();
         return false;
      }
   }
   return true;
}
</script>
<script>
$(document).ready(function()
{
   new universalParallax().init();
});
</script>
</head>
<body>
<!-- init_page -->
<div id="Html1" style="position:absolute;left:1015px;top:16px;width:100px;height:100px;z-index:14">
<?php

   include 'bootstrap.php';
   require 'hero_api.php';
   
   $hero_api = new hero_api($dbConnection);   
   
   if (filter_input(INPUT_GET, "id") <> ""){
      $id = base64_decode(filter_input(INPUT_GET, "id"));
   } else {
      echo "<script>top.window.location = './index.php?action=2'</script>";
   }

   $result = $hero_api->find($id);

   if (!empty($result)){
      foreach($result as $item){
         $real_name = $item['real_name'];
         $hero_name = $item['hero_name'];
         $publisher = $item['publisher'];
         $first_appearance_date = date('Y-m-d', strtotime($item['first_appearance_date']));
         $abilities_powers = $item['abilities_powers'];
         $team_affiliations = $item['team_affiliations'];
      }
   } else {
      echo "<script>top.window.location = './index.php?action=2'</script>";
   }
   
?></div>
<div id="wb_LayoutGrid1">
<div class="parallax"></div>
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="wb_Text2">
<span style="color:#FFFFFF;font-family:Arial;font-size:35px;"><strong>Superhero Info</strong></span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid5">
<form name="do_update_superhero" method="post" action="do_update_superhero.php" enctype="multipart/form-data" id="LayoutGrid5" onsubmit="return submitdo_update_superhero()">
<input type="hidden" name="id" value="<?php echo $id; ?>" id="id">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_Text3">
<span style="color:#808080;font-family:Arial;font-size:13px;">Real name</span>
</div>
<input type="text" id="real_name" style="display:block;width: 100%;height:26px;z-index:2;" name="real_name" value="<?php echo $real_name; ?>" spellcheck="false">
<div id="wb_Text4">
<span style="color:#808080;font-family:Arial;font-size:13px;">Hero name</span>
</div>
<input type="text" id="hero_name" style="display:block;width: 100%;height:26px;z-index:4;" name="hero_name" value="<?php echo $hero_name; ?>" spellcheck="false">
<div id="wb_Text5">
<span style="color:#808080;font-family:Arial;font-size:13px;">Publisher</span>
</div>
<input type="text" id="publisher" style="display:block;width: 100%;height:26px;z-index:6;" name="publisher" value="<?php echo $publisher; ?>" spellcheck="false">
<div id="wb_Text6">
<span style="color:#808080;font-family:Arial;font-size:13px;">First appearance</span>
</div>
<input type="date" id="first_appearance_date" style="display:block;width: 100%;height:26px;z-index:8;" name="first_appearance_date" value="<?php echo $first_appearance_date; ?>" spellcheck="false">
<div id="wb_Text7">
<span style="color:#808080;font-family:Arial;font-size:13px;">Abilities/Powers</span>
</div>
<textarea name="abilities_powers" id="abilities_powers" style="display:block;width: 100%;;height:100px;z-index:10;" rows="5" cols="116" spellcheck="false"><?php echo $abilities_powers; ?></textarea>
<div id="wb_Text8">
<span style="color:#808080;font-family:Arial;font-size:13px;">Team affiliations</span>
</div>
<textarea name="team_affiliations" id="team_affiliations" style="display:block;width: 100%;;height:100px;z-index:12;" rows="5" cols="116" spellcheck="false"><?php echo $team_affiliations; ?></textarea>
<input type="submit" id="Button3" name="update_superhero" value="Update superhero" style="display:inline-block;width:169px;height:30px;z-index:13;">
</div>
</div>
</form>
</div>
</body>
</html>