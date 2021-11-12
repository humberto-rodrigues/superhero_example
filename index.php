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
</style>
<link href="font-awesome.min.css" rel="stylesheet">
<style>#wb_LayoutGrid1 {
   background-color: #F5F5F5;
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
   clear: both;
   display: table;
   margin: 0;
   position: -webkit-sticky;
   position: sticky;
   table-layout: fixed;
   text-align: center;
   top: 0;
   width: 100%;
   z-index: 7776;
}
#LayoutGrid1 {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 30px 15px 30px 15px;
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
#wb_Text1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: center;
}
#wb_Text1 div {
   text-align: center;
}
#wb_Text1 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#wb_LayoutGrid2 {
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
#LayoutGrid2 {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 200px 15px 0px 15px;
}
#LayoutGrid2 > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#LayoutGrid2 > .row > .col-1,
#LayoutGrid2 > .row > .col-2 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#LayoutGrid2 > .row > .col-1,
#LayoutGrid2 > .row > .col-2 {
   float: left;
}
#LayoutGrid2 > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 50%;
}
#LayoutGrid2 > .row > .col-2 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 50%;
}
#LayoutGrid2:before,
#LayoutGrid2:after,
#LayoutGrid2 .row:before,
#LayoutGrid2 .row:after {
   content: " ";
   display: table;
}
#LayoutGrid2:after,
#LayoutGrid2 .row:after {
   clear: both;
}
@media (max-width: 480px) {
#LayoutGrid2 > .row > .col-1,
#LayoutGrid2 > .row > .col-2 {
   float: none;
   width: 100%  !important;
}
}
#wb_LayoutGrid2 .parallax {
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
#wb_LayoutGrid2 .parallax__container {
   clip: rect(0, auto, auto, 0);
   height: 100%;
   left: 0;
   overflow: hidden;
   position: absolute;
   top: 0;
   width: 100%;
   z-index: -100;
}
#wb_LayoutGrid3 {
   background-color: #808080;
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
#LayoutGrid3 {
   -webkit-flex-direction: row;
   -webkit-flex-wrap: wrap;
   box-sizing: border-box;
   display: -webkit-flex;
   display: flex;
   flex-direction: row;
   flex-wrap: wrap;
   margin-left: auto;
   margin-right: auto;
   max-width: 75%;
   padding: 0;
}
#LayoutGrid3 > .col-1,
#LayoutGrid3 > .col-2,
#LayoutGrid3 > .col-3 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 5px;
   padding-right: 5px;
   position: relative;
}
#LayoutGrid3 > .col-1,
#LayoutGrid3 > .col-2,
#LayoutGrid3 > .col-3 {
   -webkit-flex: 0 0 auto;
   flex: 0 0 auto;
}
#LayoutGrid3 > .col-1 {
   -webkit-align-content: center;
   -webkit-align-items: center;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: center;
   align-content: center;
   align-items: center;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: 50px;
   flex-wrap: wrap;
   justify-content: center;
   max-width: 50px;
   text-align: center;
}
#LayoutGrid3 > .col-2 {
   -webkit-align-content: center;
   -webkit-align-items: center;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: center;
   align-items: center;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: 300px;
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: 300px;
   text-align: left;
}
#LayoutGrid3 > .col-3 {
   -webkit-align-content: center;
   -webkit-align-items: center;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: center;
   align-items: center;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 350px) / 1);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 350px) / 1);
   text-align: left;
}
@media (max-width: 480px) {
#LayoutGrid3 > .col-1,
#LayoutGrid3 > .col-2,
#LayoutGrid3 > .col-3 {
   -webkit-flex-basis: 100%  !important;
   flex-basis: 100%  !important;
   max-width: 100%  !important;
}
}
#wb_IconFont1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #245580;
   border-radius: 0px;
   display: inline-block;
   margin: 0;
   padding: 0;
   position: relative;
   text-align: center;
   vertical-align: top;
}
#IconFont1 {
   height: 20px;
   width: 20px;
}
#IconFont1 i {
   color: #FFFFFF;
   display: inline-block;
   font-size: 20px;
   line-height: 20px;
   vertical-align: middle;
   width: 19px;
}
#IconFont1:hover i {
   color: #FFFFFF;
}
#word_2_search {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #FFFFFF;
   border-bottom-style: dotted;
   border-bottom-width: 1px;
   border-left-color: #FFFFFF;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #FFFFFF;
   border-right-style: dotted;
   border-right-width: 0px;
   border-top-color: #FFFFFF;
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
#word_2_search::placeholder {
   color: #D3D3D3;
   opacity: 1;
}
#word_2_search::-ms-input-placeholder {
   color: #D3D3D3;
}
#wb_info_accao_ok {
   background-color: #FFFFFF;
   background-image: none;
   border: 0px solid transparent;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#info_accao_ok {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 15px 15px 15px 15px;
}
#info_accao_ok > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#info_accao_ok > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#info_accao_ok > .row > .col-1 {
   float: left;
}
#info_accao_ok > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 100%;
}
#info_accao_ok:before,
#info_accao_ok:after,
#info_accao_ok .row:before,
#info_accao_ok .row:after {
   content: " ";
   display: table;
}
#info_accao_ok:after,
#info_accao_ok .row:after {
   clear: both;
}
@media (max-width: 480px) {
#info_accao_ok > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#wb_info_deleted_ok {
   background-color: #FFFFFF;
   background-image: none;
   border: 0px solid transparent;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#info_deleted_ok {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 15px 15px 15px 15px;
}
#info_deleted_ok > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#info_deleted_ok > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#info_deleted_ok > .row > .col-1 {
   float: left;
}
#info_deleted_ok > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 100%;
}
#info_deleted_ok:before,
#info_deleted_ok:after,
#info_deleted_ok .row:before,
#info_deleted_ok .row:after {
   content: " ";
   display: table;
}
#info_deleted_ok:after,
#info_deleted_ok .row:after {
   clear: both;
}
@media (max-width: 480px) {
#info_deleted_ok > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#wb_info_updated_ok {
   background-color: #FFFFFF;
   background-image: none;
   border: 0px solid transparent;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#info_updated_ok {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 15px 15px 15px 15px;
}
#info_updated_ok > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#info_updated_ok > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#info_updated_ok > .row > .col-1 {
   float: left;
}
#info_updated_ok > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 100%;
}
#info_updated_ok:before,
#info_updated_ok:after,
#info_updated_ok .row:before,
#info_updated_ok .row:after {
   content: " ";
   display: table;
}
#info_updated_ok:after,
#info_updated_ok .row:after {
   clear: both;
}
@media (max-width: 480px) {
#info_updated_ok > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#wb_info_accao_error {
   background-color: #FFFFFF;
   background-image: none;
   border: 0px solid transparent;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#info_accao_error {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 15px 15px 15px 15px;
}
#info_accao_error > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#info_accao_error > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#info_accao_error > .row > .col-1 {
   float: left;
}
#info_accao_error > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 100%;
}
#info_accao_error:before,
#info_accao_error:after,
#info_accao_error .row:before,
#info_accao_error .row:after {
   content: " ";
   display: table;
}
#info_accao_error:after,
#info_accao_error .row:after {
   clear: both;
}
@media (max-width: 480px) {
#info_accao_error > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#wb_LayoutGrid4 {
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
#LayoutGrid4 {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   max-width: 75%;
   padding: 50px 15px 50px 15px;
}
#LayoutGrid4 > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#LayoutGrid4 > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#LayoutGrid4 > .row > .col-1 {
   float: left;
}
#LayoutGrid4 > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 100%;
}
#LayoutGrid4:before,
#LayoutGrid4:after,
#LayoutGrid4 .row:before,
#LayoutGrid4 .row:after {
   content: " ";
   display: table;
}
#LayoutGrid4:after,
#LayoutGrid4 .row:after {
   clear: both;
}
@media (max-width: 480px) {
#LayoutGrid4 > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
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
#LayoutGrid5 > .col-1,
#LayoutGrid5 > .col-2 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 0px;
   padding-right: 0px;
   position: relative;
}
#LayoutGrid5 > .col-1,
#LayoutGrid5 > .col-2 {
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
   flex-basis: 250px;
   flex-wrap: wrap;
   justify-content: center;
   max-width: 250px;
   text-align: center;
}
#LayoutGrid5 > .col-1 > .col-1-padding {
   box-sizing: border-box;
   padding: 5px 5px 0px 5px;
   width: 100%;
}
#LayoutGrid5 > .col-2 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 250px) / 1);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 250px) / 1);
   text-align: left;
}
#LayoutGrid5 > .col-2 > .col-2-padding {
   box-sizing: border-box;
   padding: 0px 15px 0px 15px;
   width: 100%;
}
@media (max-width: 480px) {
#LayoutGrid5 > .col-1,
#LayoutGrid5 > .col-2 {
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
   text-align: left;
}
#wb_Text2 div {
   text-align: left;
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
   margin: 0px 0px 15px 0px;
   padding: 1px 6px 1px 6px;
   text-align: center;
}
#Button3:hover {
   -webkit-transition: background-color 100ms linear 0ms;
   background-color: #7F7F7F;
   transition: background-color 100ms linear 0ms;
}
#wb_LayoutGrid6 {
   background-color: #56749A;
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
#LayoutGrid6 {
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
#LayoutGrid6 > .col-1,
#LayoutGrid6 > .col-2,
#LayoutGrid6 > .col-3,
#LayoutGrid6 > .col-4,
#LayoutGrid6 > .col-5,
#LayoutGrid6 > .col-6,
#LayoutGrid6 > .col-7,
#LayoutGrid6 > .col-8 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 5px;
   padding-right: 5px;
   position: relative;
}
#LayoutGrid6 > .col-1,
#LayoutGrid6 > .col-2,
#LayoutGrid6 > .col-3,
#LayoutGrid6 > .col-4,
#LayoutGrid6 > .col-5,
#LayoutGrid6 > .col-6,
#LayoutGrid6 > .col-7,
#LayoutGrid6 > .col-8 {
   -webkit-flex: 0 0 auto;
   flex: 0 0 auto;
}
#LayoutGrid6 > .col-1 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 5);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 5);
   text-align: left;
}
#LayoutGrid6 > .col-2 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 5);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 5);
   text-align: left;
}
#LayoutGrid6 > .col-3 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 10);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 10);
   text-align: left;
}
#LayoutGrid6 > .col-4 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: center;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 10);
   flex-wrap: wrap;
   justify-content: center;
   max-width: calc((100% - 60px) / 10);
   text-align: center;
}
#LayoutGrid6 > .col-5 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 5);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 5);
   text-align: left;
}
#LayoutGrid6 > .col-6 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 5);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 5);
   text-align: left;
}
#LayoutGrid6 > .col-7 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border: 0px solid transparent;
   border-radius: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: 30px;
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: 30px;
   text-align: left;
}
#LayoutGrid6 > .col-8 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: 30px;
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: 30px;
   text-align: left;
}
@media (max-width: 480px) {
#LayoutGrid6 > .col-1,
#LayoutGrid6 > .col-2,
#LayoutGrid6 > .col-3,
#LayoutGrid6 > .col-4,
#LayoutGrid6 > .col-5,
#LayoutGrid6 > .col-6,
#LayoutGrid6 > .col-7,
#LayoutGrid6 > .col-8 {
   -webkit-flex-basis: 100%  !important;
   flex-basis: 100%  !important;
   max-width: 100%  !important;
}
}
#wb_Text9 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text9 div {
   text-align: left;
}
#wb_Text9 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_Text10 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text10 div {
   text-align: left;
}
#wb_Text10 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_Text11 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text11 div {
   text-align: left;
}
#wb_Text11 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_Text12 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text12 div {
   text-align: left;
}
#wb_Text12 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_Text13 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text13 div {
   text-align: left;
}
#wb_Text13 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_Text14 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text14 div {
   text-align: left;
}
#wb_Text14 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_LayoutGrid7 {
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
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#LayoutGrid7 {
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
#LayoutGrid7 > .col-1,
#LayoutGrid7 > .col-2,
#LayoutGrid7 > .col-3,
#LayoutGrid7 > .col-4,
#LayoutGrid7 > .col-5,
#LayoutGrid7 > .col-6,
#LayoutGrid7 > .col-7,
#LayoutGrid7 > .col-8 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 5px;
   padding-right: 5px;
   position: relative;
}
#LayoutGrid7 > .col-1,
#LayoutGrid7 > .col-2,
#LayoutGrid7 > .col-3,
#LayoutGrid7 > .col-4,
#LayoutGrid7 > .col-5,
#LayoutGrid7 > .col-6,
#LayoutGrid7 > .col-7,
#LayoutGrid7 > .col-8 {
   -webkit-flex: 0 0 auto;
   flex: 0 0 auto;
}
#LayoutGrid7 > .col-1 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 5);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 5);
   text-align: left;
}
#LayoutGrid7 > .col-2 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 5);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 5);
   text-align: left;
}
#LayoutGrid7 > .col-3 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 10);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 10);
   text-align: left;
}
#LayoutGrid7 > .col-4 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 10);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 10);
   text-align: left;
}
#LayoutGrid7 > .col-5 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 5);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 5);
   text-align: left;
}
#LayoutGrid7 > .col-6 {
   -webkit-align-content: flex-start;
   -webkit-align-items: flex-start;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: flex-start;
   align-items: flex-start;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 60px) / 5);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 60px) / 5);
   text-align: left;
}
#LayoutGrid7 > .col-7 {
   -webkit-align-content: center;
   -webkit-align-items: center;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: center;
   align-content: center;
   align-items: center;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: 30px;
   flex-wrap: wrap;
   justify-content: center;
   max-width: 30px;
   text-align: center;
}
#LayoutGrid7 > .col-8 {
   -webkit-align-content: center;
   -webkit-align-items: center;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: center;
   align-content: center;
   align-items: center;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: 30px;
   flex-wrap: wrap;
   justify-content: center;
   max-width: 30px;
   text-align: center;
}
@media (max-width: 480px) {
#LayoutGrid7 > .col-1,
#LayoutGrid7 > .col-2,
#LayoutGrid7 > .col-3,
#LayoutGrid7 > .col-4,
#LayoutGrid7 > .col-5,
#LayoutGrid7 > .col-6,
#LayoutGrid7 > .col-7,
#LayoutGrid7 > .col-8 {
   -webkit-flex-basis: 100%  !important;
   flex-basis: 100%  !important;
   max-width: 100%  !important;
}
}
#wb_LayoutGrid7:hover {
   -webkit-transition: background-color 500ms linear 0ms;
   background-color: #F5F5F5;
   transition: background-color 500ms linear 0ms;
}
#wb_Text15 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text15 div {
   text-align: left;
}
#wb_Text15 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_Text16 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text16 div {
   text-align: left;
}
#wb_Text16 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_Text17 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text17 div {
   text-align: left;
}
#wb_Text17 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_Text18 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: center;
}
#wb_Text18 div {
   text-align: center;
}
#wb_Text18 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_Text19 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text19 div {
   text-align: left;
}
#wb_Text19 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_Text20 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 10px 0px 10px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text20 div {
   text-align: left;
}
#wb_Text20 {
   box-sizing: border-box;
   display: block;
   margin: 10px 0px 10px 0px;
   width: 100%;
}
#wb_IconFont2 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 5px;
   display: inline-block;
   margin: 0;
   padding: 0;
   position: relative;
   text-align: center;
   vertical-align: top;
}
#wb_IconFont2:hover {
   background-color: transparent;
   background-image: none;
   border: 0px solid #56749A;
}
#IconFont2 {
   height: 20px;
   width: 20px;
}
#IconFont2 i {
   color: #000000;
   display: inline-block;
   font-size: 20px;
   line-height: 20px;
   vertical-align: middle;
   width: 19px;
}
#IconFont2:hover i {
   color: #56749A;
}
#wb_IconFont3 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 5px;
   display: inline-block;
   margin: 0;
   padding: 0;
   position: relative;
   text-align: center;
   vertical-align: top;
}
#wb_IconFont3:hover {
   background-color: transparent;
   background-image: none;
   border: 0px solid #56749A;
}
#IconFont3 {
   height: 20px;
   width: 20px;
}
#IconFont3 i {
   color: #000000;
   display: inline-block;
   font-size: 20px;
   line-height: 20px;
   vertical-align: middle;
   width: 19px;
}
#IconFont3:hover i {
   color: #56749A;
}
#wb_LayoutGrid53 {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #70AD47;
   border-bottom-left-radius: 5px;
   border-bottom-right-radius: 5px;
   border-bottom-style: dashed;
   border-bottom-width: 1px;
   border-left-color: #70AD47;
   border-left-style: dashed;
   border-left-width: 1px;
   border-right-color: #70AD47;
   border-right-style: dashed;
   border-right-width: 1px;
   border-top-color: #70AD47;
   border-top-left-radius: 5px;
   border-top-right-radius: 5px;
   border-top-style: dashed;
   border-top-width: 1px;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#LayoutGrid53 {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 15px 15px 15px 15px;
}
#LayoutGrid53 > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#LayoutGrid53 > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#LayoutGrid53 > .row > .col-1 {
   float: left;
}
#LayoutGrid53 > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 100%;
}
#LayoutGrid53:before,
#LayoutGrid53:after,
#LayoutGrid53 .row:before,
#LayoutGrid53 .row:after {
   content: " ";
   display: table;
}
#LayoutGrid53:after,
#LayoutGrid53 .row:after {
   clear: both;
}
@media (max-width: 480px) {
#LayoutGrid53 > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#wb_Text31 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: left;
}
#wb_Text31 div {
   text-align: left;
}
#wb_Text31 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#wb_LayoutGrid54 {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #C00000;
   border-bottom-left-radius: 5px;
   border-bottom-right-radius: 5px;
   border-bottom-style: dashed;
   border-bottom-width: 1px;
   border-left-color: #C00000;
   border-left-style: dashed;
   border-left-width: 1px;
   border-right-color: #C00000;
   border-right-style: dashed;
   border-right-width: 1px;
   border-top-color: #C00000;
   border-top-left-radius: 5px;
   border-top-right-radius: 5px;
   border-top-style: dashed;
   border-top-width: 1px;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#LayoutGrid54 {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 15px 15px 15px 15px;
}
#LayoutGrid54 > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#LayoutGrid54 > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#LayoutGrid54 > .row > .col-1 {
   float: left;
}
#LayoutGrid54 > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 100%;
}
#LayoutGrid54:before,
#LayoutGrid54:after,
#LayoutGrid54 .row:before,
#LayoutGrid54 .row:after {
   content: " ";
   display: table;
}
#LayoutGrid54:after,
#LayoutGrid54 .row:after {
   clear: both;
}
@media (max-width: 480px) {
#LayoutGrid54 > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#wb_Text32 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: left;
}
#wb_Text32 div {
   text-align: left;
}
#wb_Text32 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#wb_LayoutGrid9 {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #56749A;
   border-bottom-left-radius: 5px;
   border-bottom-right-radius: 5px;
   border-bottom-style: dashed;
   border-bottom-width: 1px;
   border-left-color: #56749A;
   border-left-style: dashed;
   border-left-width: 1px;
   border-right-color: #56749A;
   border-right-style: dashed;
   border-right-width: 1px;
   border-top-color: #56749A;
   border-top-left-radius: 5px;
   border-top-right-radius: 5px;
   border-top-style: dashed;
   border-top-width: 1px;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#LayoutGrid9 {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 15px 15px 15px 15px;
}
#LayoutGrid9 > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#LayoutGrid9 > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#LayoutGrid9 > .row > .col-1 {
   float: left;
}
#LayoutGrid9 > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 100%;
}
#LayoutGrid9:before,
#LayoutGrid9:after,
#LayoutGrid9 .row:before,
#LayoutGrid9 .row:after {
   content: " ";
   display: table;
}
#LayoutGrid9:after,
#LayoutGrid9 .row:after {
   clear: both;
}
@media (max-width: 480px) {
#LayoutGrid9 > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#wb_Text21 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: left;
}
#wb_Text21 div {
   text-align: left;
}
#wb_Text21 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#wb_LayoutGrid10 {
   background-color: transparent;
   background-image: none;
   border-bottom-color: #2E8B57;
   border-bottom-left-radius: 5px;
   border-bottom-right-radius: 5px;
   border-bottom-style: dashed;
   border-bottom-width: 1px;
   border-left-color: #2E8B57;
   border-left-style: dashed;
   border-left-width: 1px;
   border-right-color: #2E8B57;
   border-right-style: dashed;
   border-right-width: 1px;
   border-top-color: #2E8B57;
   border-top-left-radius: 5px;
   border-top-right-radius: 5px;
   border-top-style: dashed;
   border-top-width: 1px;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#LayoutGrid10 {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 15px 15px 15px 15px;
}
#LayoutGrid10 > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#LayoutGrid10 > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#LayoutGrid10 > .row > .col-1 {
   float: left;
}
#LayoutGrid10 > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 100%;
}
#LayoutGrid10:before,
#LayoutGrid10:after,
#LayoutGrid10 .row:before,
#LayoutGrid10 .row:after {
   content: " ";
   display: table;
}
#LayoutGrid10:after,
#LayoutGrid10 .row:after {
   clear: both;
}
@media (max-width: 480px) {
#LayoutGrid10 > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#wb_Text22 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: left;
}
#wb_Text22 div {
   text-align: left;
}
#wb_Text22 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#wb_LayoutGrid8 {
   background-color: #F5F5F5;
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
#LayoutGrid8 {
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
#LayoutGrid8 > .col-1,
#LayoutGrid8 > .col-2 {
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-left: 5px;
   padding-right: 5px;
   position: relative;
}
#LayoutGrid8 > .col-1,
#LayoutGrid8 > .col-2 {
   -webkit-flex: 0 0 auto;
   flex: 0 0 auto;
}
#LayoutGrid8 > .col-1 {
   -webkit-align-content: center;
   -webkit-align-items: center;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   align-content: center;
   align-items: center;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border-bottom-color: #808080;
   border-bottom-style: dotted;
   border-bottom-width: 0px;
   border-left-color: #808080;
   border-left-style: dotted;
   border-left-width: 0px;
   border-right-color: #808080;
   border-right-style: dotted;
   border-right-width: 1px;
   border-top-color: #808080;
   border-top-style: dotted;
   border-top-width: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: calc((100% - 35px) / 1);
   flex-wrap: wrap;
   justify-content: flex-start;
   max-width: calc((100% - 35px) / 1);
   text-align: left;
}
#LayoutGrid8 > .col-2 {
   -webkit-align-content: center;
   -webkit-align-items: center;
   -webkit-align-self: stretch;
   -webkit-flex-wrap: wrap;
   -webkit-justify-content: center;
   align-content: center;
   align-items: center;
   align-self: stretch;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   display: -webkit-flex;
   display: flex;
   flex-basis: 35px;
   flex-wrap: wrap;
   justify-content: center;
   max-width: 35px;
   text-align: center;
}
@media (max-width: 480px) {
#LayoutGrid8 > .col-1,
#LayoutGrid8 > .col-2 {
   -webkit-flex-basis: 100%  !important;
   flex-basis: 100%  !important;
   max-width: 100%  !important;
}
}
#wb_Text23 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 20px 0px 20px 0px;
   padding: 0;
   text-align: left;
}
#wb_Text23 div {
   text-align: left;
}
#wb_Text23 {
   box-sizing: border-box;
   display: block;
   margin: 20px 0px 20px 0px;
   width: 100%;
}
#wb_IconFont4 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 5px;
   display: inline-block;
   margin: 0;
   padding: 0;
   position: relative;
   text-align: center;
   vertical-align: top;
}
#wb_IconFont4:hover {
   background-color: transparent;
   background-image: none;
   border: 0px solid #56749A;
}
#IconFont4 {
   height: 25px;
   width: 25px;
}
#IconFont4 i {
   color: #000000;
   display: inline-block;
   font-size: 25px;
   line-height: 25px;
   vertical-align: middle;
   width: 24px;
}
#IconFont4:hover i {
   color: #56749A;
}
</style>
<script src="jquery-1.12.4.min.js"></script>
<script src="universal-parallax.min.js"></script>
<script>
function submitadd_superhero()
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
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css">
<script src="fancybox/jquery.easing-1.3.pack.js"></script>
<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script>
function displaylightbox(url, options)
{
   options.padding = 0;
   options.autoScale = true;
   options.href = url;
   options.type = 'iframe';
   $.fancybox(options);
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
<div id="Html1" style="position:absolute;left:1015px;top:17px;width:100px;height:100px;z-index:98">
<?php

   include 'bootstrap.php';
   require 'hero_api.php';
   
   $hero_api = new hero_api($dbConnection);   
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $word_2_search = $_POST["word_2_search"];
   } else {
      $word_2_search = "";
   }
   
   if (filter_input(INPUT_GET, "action") <> ""){
      $action = filter_input(INPUT_GET, "action");
   } else {
      $action = -1;
   }  
   
?></div>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:24px;">Superheros Example App</span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid2">
<div class="parallax"></div>
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid3">
<form name="search_hero" method="post" action="index.php" enctype="multipart/form-data" id="LayoutGrid3">
<div class="col-1">
<div id="wb_IconFont1" style="display:inline-block;width:20px;height:20px;text-align:center;z-index:1;">
<div id="IconFont1"><i class="fa fa-search"></i></div>
</div>
</div>
<div class="col-2">
<input type="text" id="word_2_search" style="display:block;width: 100%;height:26px;z-index:2;" name="word_2_search" value="" spellcheck="false" placeholder="Find superhero">
</div>
<div class="col-3">
</div>
</form>
</div>
<div id="wb_info_accao_ok">
<div id="info_accao_ok">
<div class="row">
<div class="col-1">
<div id="wb_LayoutGrid53">
<div id="LayoutGrid53">
<div class="row">
<div class="col-1">
<div id="wb_Text31">
<span style="color:#70AD47;font-family:Candara;font-size:16px;"><strong>A new superhero is born.</strong></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_info_deleted_ok">
<div id="info_deleted_ok">
<div class="row">
<div class="col-1">
<div id="wb_LayoutGrid9">
<div id="LayoutGrid9">
<div class="row">
<div class="col-1">
<div id="wb_Text21">
<span style="color:#56749A;font-family:Candara;font-size:16px;"><strong>Superhero was deleted.</strong></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_info_updated_ok">
<div id="info_updated_ok">
<div class="row">
<div class="col-1">
<div id="wb_LayoutGrid10">
<div id="LayoutGrid10">
<div class="row">
<div class="col-1">
<div id="wb_Text22">
<span style="color:#2E8B57;font-family:Candara;font-size:16px;"><strong>Superhero was updated.</strong></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_info_accao_error">
<div id="info_accao_error">
<div class="row">
<div class="col-1">
<div id="wb_LayoutGrid54">
<div id="LayoutGrid54">
<div class="row">
<div class="col-1">
<div id="wb_Text32">
<span style="color:#CC0000;font-family:Candara;font-size:16px;"><strong>Ups, something went wrong.</strong></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
<div id="wb_LayoutGrid5">
<form name="add_superhero" method="post" action="add_superhero.php" enctype="multipart/form-data" id="LayoutGrid5" onsubmit="return submitadd_superhero()">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_Text2">
<span style="color:#000000;font-family:Arial;font-size:21px;">Add a new superhero</span>
</div>
<div id="wb_Text3">
<span style="color:#808080;font-family:Arial;font-size:13px;">Real name</span>
</div>
<input type="text" id="real_name" style="display:block;width: 100%;height:26px;z-index:13;" name="real_name" value="" spellcheck="false">
<div id="wb_Text4">
<span style="color:#808080;font-family:Arial;font-size:13px;">Hero name</span>
</div>
<input type="text" id="hero_name" style="display:block;width: 100%;height:26px;z-index:15;" name="hero_name" value="" spellcheck="false">
<div id="wb_Text5">
<span style="color:#808080;font-family:Arial;font-size:13px;">Publisher</span>
</div>
<input type="text" id="publisher" style="display:block;width: 100%;height:26px;z-index:17;" name="publisher" value="" spellcheck="false">
<div id="wb_Text6">
<span style="color:#808080;font-family:Arial;font-size:13px;">First appearance</span>
</div>
<input type="date" id="first_appearance_date" style="display:block;width: 100%;height:26px;z-index:19;" name="first_appearance_date" value="" spellcheck="false">
<div id="wb_Text7">
<span style="color:#808080;font-family:Arial;font-size:13px;">Abilities/Powers</span>
</div>
<textarea name="abilities_powers" id="abilities_powers" style="display:block;width: 100%;;height:100px;z-index:21;" rows="5" cols="26" spellcheck="false"></textarea>
<div id="wb_Text8">
<span style="color:#808080;font-family:Arial;font-size:13px;">Team affiliations</span>
</div>
<textarea name="team_affiliations" id="team_affiliations" style="display:block;width: 100%;;height:100px;z-index:23;" rows="5" cols="26" spellcheck="false"></textarea>
<input type="submit" id="Button3" name="add_superhero" value="Add superhero" style="display:inline-block;width:142px;height:30px;z-index:24;">
</div>
</div>
<div class="col-2">
<div class="col-2-padding">
<?php

   if ($word_2_search <> ""){

?><div id="wb_LayoutGrid8">
<div id="LayoutGrid8">
<div class="col-1">
<div id="wb_Text23">
<span style="color:#000000;font-family:Arial;font-size:13px;">Showing superheros with keyword (<strong><?php echo $word_2_search ?></strong>)</span>
</div>
</div>
<div class="col-2">
<div id="wb_IconFont4" style="display:inline-block;width:25px;height:25px;text-align:center;z-index:26;">
<a href="./index.php" title="Clear all keywords."><div id="IconFont4"><i class="fa fa-times"></i></div></a>
</div>
</div>
</div>
</div><?php

   }

?>
<div id="wb_LayoutGrid6">
<div id="LayoutGrid6">
<div class="col-1">
<div id="wb_Text9">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Real name</span>
</div>
</div>
<div class="col-2">
<div id="wb_Text10">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Hero name</span>
</div>
</div>
<div class="col-3">
<div id="wb_Text11">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Publisher</span>
</div>
</div>
<div class="col-4">
<div id="wb_Text12">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">First appeared</span>
</div>
</div>
<div class="col-5">
<div id="wb_Text13">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Abilities/Powers</span>
</div>
</div>
<div class="col-6">
<div id="wb_Text14">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Team affiliations</span>
</div>
</div>
<div class="col-7">
</div>
<div class="col-8">
</div>
</div>
</div>
<?php

   if (word_2_search == ""){
      $result = $hero_api->findAll();
   } else {
      $result = $hero_api->search($word_2_search);
   }

   foreach($result as $item) {
      $id = base64_encode($item['id']);
      $real_name = $item['real_name'];
      $hero_name = $item['hero_name'];
      $publisher = $item['publisher'];
      $first_appearance_date = date('Y-m-d', strtotime($item['first_appearance_date']));
      $abilities_powers = $item['abilities_powers'];
      $team_affiliations = $item['team_affiliations'];

?><div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="col-1">
<div id="wb_Text15">
<span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $real_name; ?></span>
</div>
</div>
<div class="col-2">
<div id="wb_Text16">
<span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $hero_name; ?></span>
</div>
</div>
<div class="col-3">
<div id="wb_Text17">
<span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $publisher; ?></span>
</div>
</div>
<div class="col-4">
<div id="wb_Text18">
<span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $first_appearance_date; ?></span>
</div>
</div>
<div class="col-5">
<div id="wb_Text19">
<span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $abilities_powers; ?></span>
</div>
</div>
<div class="col-6">
<div id="wb_Text20">
<span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $team_affiliations; ?></span>
</div>
</div>
<div class="col-7">
<div id="wb_IconFont2" style="display:inline-block;width:20px;height:20px;text-align:center;z-index:39;">
<a href="javascript:displaylightbox('./edit_superhero.php?id=<?php echo $id; ?>',{width:400,height:800})" target="_self" title="Edit superhero info."><div id="IconFont2"><i class="fa fa-pencil"></i></div></a>
</div>
</div>
<div class="col-8">
<div id="wb_IconFont3" style="display:inline-block;width:20px;height:20px;text-align:center;z-index:40;">
<a href="./delete_superhero.php?id=<?php echo $id; ?>" title="Delete superhero."><div id="IconFont3"><i class="fa fa-trash-o"></i></div></a>
</div>
</div>
</div>
</div>
<?php

   }

?>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


</body>
</html><script>

   document.getElementById("wb_info_accao_ok").style.display = "none";
   document.getElementById("wb_info_accao_error").style.display = "none";
   document.getElementById("wb_info_deleted_ok").style.display = "none";
   document.getElementById("wb_info_updated_ok").style.display = "none";
   
</script>
<script>

   val_action = <?php echo $action; ?>;
   
   val_timer_on = 0;

   if (val_action == 1){
      document.getElementById("wb_info_accao_ok").style.display = "block";
      val_timer_on = 1;
   }

   if (val_action == 2){
      document.getElementById("wb_info_accao_error").style.display = "block";
      val_timer_on = 1;
   }

   if (val_action == 3){
      document.getElementById("wb_info_deleted_ok").style.display = "block";
      val_timer_on = 1;
   }

   if (val_action == 4){
      document.getElementById("wb_info_updated_ok").style.display = "block";
      val_timer_on = 1;
   }

   if (val_timer_on == 0){
      var myVar = setInterval(myTimer, 0);
   } else {
      var myVar = setInterval(myTimer, 5000);
   }

   function myTimer() {
      document.getElementById("wb_info_accao_ok").style.display = "none";
      document.getElementById("wb_info_accao_error").style.display = "none";
      document.getElementById("wb_info_deleted_ok").style.display = "none";
      document.getElementById("wb_info_updated_ok").style.display = "none";
      val_timer_on = 0;
   }   

</script>