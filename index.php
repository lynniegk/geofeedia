<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="map.js"></script>
  

  <title></title>
  <link rel="stylesheet" type="text/css" href="" media="all">

  </head>
<script type="text/javascript"> 
function removeSearchGlass(){
      document.getElementById('address').style.background = "none";
      document.getElementById('address').style.background = "#ffffff";
    }

    function replaceSearchGlass(theVal){
      console.log(theVal);
      if (theVal == '') {  
      document.getElementById('address').style.background = "transparent url(css/images/search.svg) no-repeat scroll right";
      document.getElementById('address').style.backgroundColor = "#ffffff";
      document.getElementById('address').style.backgroundSize = "14%";
    };
}
</script> 



    <body id="main_body" >
      <div id='logo_background'><img id='logo' src='css/images/geofeedia_logo_final_white2.png'></div></div>
      <div id="form_container">
        <h1 id="form_header"><a></a></h1>
        <form id="form_geofeedia" method="post" action="">
          <div class="form_description">
            <h2 class="title"></h2>
            <p>Complete the form to generate your map widget embed code.</p>
          </div>            
          <ul id="U_list">
            <li id="li_1" >
              <div>
                <input value="" id="app_id" name="appid" class="element_text_medium" type="text" maxlength="255" placeholder="&nbsp;Geofeedia appID" onfocus="if (this.placeholder == '&nbsp;Geofeedia appID') {this.placeholder=''}" onblur="if (this.placeholder == '') {this.placeholder='&nbsp;Geofeedia appID'}"/> 
              </div> 
            </li>   
            <li id="li_2" >
              <div>
                <input value="" id="app_key" name="appkey" class="element_text_medium" type="text" maxlength="255" placeholder="&nbsp;Geofeedia appKey" onfocus="if (this.placeholder == '&nbsp;Geofeedia appKey') {this.placeholder=''}"onblur="if (this.placeholder == '') {this.placeholder='&nbsp;Geofeedia appKey'}"/>  
              </div> 
            </li>   
            <li id="li_3" >
              <div>
                <input value="" id="collection_feed_id" name="collection" class="element_text_medium" type="text" maxlength="255" placeholder="&nbsp;Geofeedia Collection ID" onfocus="if (this.placeholder == '&nbsp;Geofeedia Collection ID') {this.placeholder=''}"onblur="if (this.placeholder == '') {this.placeholder='&nbsp;Geofeedia Collection ID'}"/>  
              </div> 
            </li>   
            <li id="li_4" >
              <div>
                
                <label for="address" id="address_label" class="element_text_medium"> Position the map center and zoom level: </label>
                <input type="text" id="address" class="element_text_medium" style='font-style:italic; color:#999;' value='&nbsp;Address or Location'  onfocus="if (this.value == '&nbsp;Address or Location') {removeSearchGlass(); this.value=''}" onkeydown="if (event.keyCode == 13) {codeAddress();}" onblur="if (this.value == '') {replaceSearchGlass(this.value); this.value='&nbsp;Address or Location'}"/> 
                <button class="button-success pure-button" style="display: none;" onclick="codeAddress();">Search</button>

                <div id="map-canvas" class="element_text_medium"></div>

                <!-- this is hidden by default and fed by the preview map -->
                <input id="location" name="location" class="element text medium" type="text" maxlength="255" placeholder="Address or Location"/> 
              </div> 
            </li>
            <li id="li_5" >
            <div>
              <input value="" id="map_width" name="width" class="map_w_h" type="text" maxlength="80" placeholder="&nbsp;Width (px)" onfocus="if (this.placeholder == '&nbsp;Width (px)') {this.placeholder=''}"onblur="if (this.placeholder == '') {this.placeholder='&nbsp;Width (px)'}"/>  
            </div> 
          </li>
          <li id="li_6" >
            <div>
              <input value="" id="map_height" name="height" class="map_w_h" type="text" maxlength="80" placeholder="&nbsp;Height (px)" onfocus="if (this.placeholder == '&nbsp;Height (px)') {this.placeholder=''}"onblur="if (this.placeholder == '') {this.placeholder='&nbsp;Height (px)'}"/>  
            </div> 
          </li>
          <li class="buttons">
            <input type="hidden" name="form_id" value="form-id" />
            <div class="button-container">
              <input id="saveForm" class="button_text" type="submit" name="submit" value="Get code" />
              <input id="preview_map" class="button_text" type="submit" name="preview" value="Preview" target="_blank" />
            </div>
          </li>
          </ul>
        </form> 
        <div id='dialog' >
          <textarea rows="8" cols="30">

          </textarea>
        </div>
        <div id="footer">

        </div>
      </div>
    <script type="text/javascript" src="widget.js"></script>

    </body>
  </html>
  
