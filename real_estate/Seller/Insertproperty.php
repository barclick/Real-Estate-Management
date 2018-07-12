<html>
<head>
  <style type="text/css">
  #insertTitle{
  background-color: powderblue;
  } 
  #insertBody{
    background-color: powderblue;
  }
  td{
    font-style: bold;
  }
  #map {
        height: 100%;
      }
  </style>

  
</head>
<body >
    <?php 
    include 'Sellerpage.php';
     ?>
<div class= 'panel-heading' id="insertTitle">
      <table width='100%' border='0'>
      <tr>
<td  align='center' <div class='panel panel-primary'>
<div class='panel-heading'>
    <i>Add Real Estate Property</i>

    <div class='pull-right'>
                </div>
</div>     </td>
</tr>
</table>
</div>
<div class='panel-body' id="insertBody">
<strong> Location </strong>
    

<form  action="insertpropertydb.php" method="POST" enctype="multipart/form-data">
<table  cellspacing="10">
<tr><td> Name Of Real Estate </td>
<td>
<input type="text" class="form-control input-lg" required="" name="rename" data-error="enter valid name" >&nbsp;  &nbsp;&nbsp;&nbsp;
</td>
</tr>
<tr>
<td> Payment Tax Number</td>
<td><input type="text" class="form-control input-lg" required="" name="taxnumber" > &nbsp;  &nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td> Property For:</td>
<td><label>
<select name="propertyfor" id="cmbRoom" class="input-lg">
<option>Sell</option>
<option>Commertial</option>
<option> Rent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
</select>
</label> &nbsp;  &nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td> Real Estate Category:</td>
<td><label>
<select name="category" id="cmbRoom" class="input-lg">
<option>Villa</option>
<option>Apartment</option>
<option>Condominium Houses</option>
<option> Guest House</option>
<option>House/undercon_tion</option>
<option>Studio</option>
<option>G+1House</option>
<option>G+2House</option>
<option>G+3House&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

</select>
</label>&nbsp;  &nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td> Country</td>
<td><input type="text" class="form-control input-lg" required="" name="country" >&nbsp;  &nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td>State</td>
<td><input type="text" class="form-control input-lg" name="state" >&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" class="form-control input-lg" required="" name="price" >&nbsp;  &nbsp;&nbsp;&nbsp;
</td>
</tr>
<tr>

<td><input type="hidden" class="form-control" id="lat" name="lat">
<input type="hidden" class="form-control" id="lng" name="lng">&nbsp;  &nbsp;&nbsp;&nbsp;</td>
<div id="map"></div><br>


</tr>
<tr>

<td> Facility</td>
<div class="form-group">
<td><input type="checkbox" class="checkbox-inline input-lg" name="chk[]" value="Parking">Parking
<input type="checkbox" class="checkbox-inline input-lg" name="chk[]" value="Kitchen"> Kitchen
<input type="checkbox" class="checkbox-inline input-lg" name="chk[]" value="Garage"> Garage</br>
<input type="checkbox" class="checkbox-inline input-lg" name="chk[]" value="Internet">Internet
<input type="checkbox" class="checkbox-inline input-lg" name="chk[]" value="Water">Water
<input type="checkbox" class="checkbox-inline input-lg" name="chk[]" value="Laundry Room">Laundry Room
</td>
</div>
</tr>
<tr>
<td>YearBuilt</td>
<td><input type="number" min="1800" max="2019" required="required" class="form-control input-lg" name="yearbuilt" >
&nbsp;  &nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td>Total Area</td>
<td><input type="text" required="" class="form-control input-lg" name="totalarea" >&nbsp;  &nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td height="36"><span class="style8">Number of Bed Rooms:</span></td>
<td><label>
<select name="bedroom"  id="cmbRoom" class="input-lg">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
</select>
</label></td>
</tr>
<tr>
<td>Number of Bath Rooms:</span></td>
<td><label>
<div class="form-group">
<select class="input-lg" name="bathroom" >
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
</select>
  </div>
</tr>
 <input type="hidden" class="input-lg" name="pending" value="Pending"> </tr> 

      <tr>
<td height="38"><span class="style8">Image:</span></td>
<td><label>
<div>
<input type="file" name="image" accept="image/*"  onchange="imagepreview(this);">
<img id="imgpreview" name ="property"  width="100" height="90" title="You Select this Photo">

</div>

 <script type="text/javascript" src="js/jquery.min.js">      </script>
    <script type="text/javascript">
      function imagepreview(input){
        if (input.files && input.files[0]) {
          var reader=new FileReader();
          reader.onload=function(e){
            $('#imgpreview').attr('src',e.target.result);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
</label></td>
</tr>
<tr>
<td><span class="style8">3D_View:</span></td>
<td><label>
<input type="file" accept="video/*" name="view" id="txtFile" />
</label></td>
<input type="hidden" name="Pending" value="Pending">
</tr>
</table>
<button  type="submit" class="btn btn-primary" >Insert Property</button>
&nbsp;&nbsp;
<button type="reset" class="btn btn-danger">Reset Button</button>

</form> 
</div>
 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMfZcs4lgMT9QkAJslEMf3JFJfLi-CNPo&callback=initMap"
      ></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript">
        var marker = false;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 13.489988846878552, lng: 39.47285771369934},
          zoom: 15,
          mapTypeId:google.maps.MapTypeId.HYBRID
          });
        google.maps.event.addListener(map,"click",function(e){
          var latLng = e.latLng;
          $('#lat').val(latLng.lat());
          $('#lng').val(latLng.lng());
          if(marker)
            marker.setMap(null);
          var infowindow = new google.maps.InfoWindow({
            content: $('#name').val()
          });
          marker = new google.maps.Marker({
              position: latLng,
              map: map,
              title: $('#name').val(),
              label: 'H'
            });
            if($('#name').val())
              infowindow.open(map,marker);
            google.maps.event.addListener(marker, 'click', function() {
              if($('#name').val())
                infowindow.open(map,marker);
          });
         });
        }
</script>                              
</body>

</html>


