<head> 
 <script type="text/javascript">
function validateForm()
{
var search=document.myform.value.value;
if(search==null || search=="")
    {
        alert("please fill  Search Details");
     return false;
  }
  return true;
  }
  function showHideAdvanceSearch() {
      if(document.getElementById("advanced-search-box").style.display=="none") {
        document.getElementById("advanced-search-box").style.display = "block";
        document.getElementById("advance_search_submit").value= "1";
      } else {
        document.getElementById("advanced-search-box").style.display = "none";
        document.getElementById("with_the_exact_of").value= "";
        document.getElementById("without").value= "";
        document.getElementById("starts_with").value= "";
        document.getElementById("search_in").value= "";
        document.getElementById("advance_search_submit").value= "";
      }
    }
</script>
    <link rel="stylesheet" href="css/advanced.css" type="text/css">
</head>
<body>
<?php 
include 'buyerpage.php';
 ?>
              <!-- <div class="sidebar-collapse">
                side-menu
                <ul class="nav" id="side-menu"> -->
     <div id="searchwrapper">     
          <div class="row">
                <div class="col-lg-12">
                     <!--Basic Tabs   -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="input-group custom-search-form"  ></i> <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search">      Search Availeble Real Estate</i>
                                </button>
                            </span> 
                        </div>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills " id="search-menu">
                            <li class="active"><a href="#all" data-toggle="tab">Advance Search</a>
                                </li>
                                <li><a href="#price" data-toggle="tab">Search BY Price:</a>
                                </li>
                                <li><a href="#category" data-toggle="tab">Search BY Real Category</a>
                                </li>
                                <li><a href="#for" data-toggle="tab">Real Estate For</a>
                                </li>
                                
                            </ul>
                            </div>
                           <div class="tab-content">
                                <div class="tab-pane fade in active" id="all">
                                    <form action="addvancedsearch.php" method="get" enctype="multipart/form-data" name="myform">
                                          <input type="hidden" id="advance_search_submit" name="search" value="">
                                          <div class="search-box">
                                             <label class="search-label">Category:</label>

                                              <select name="value" id="search_in" class="demoInputBox">
                                                  <option>Villa</option>
                                                <option value="" >Apartment</option>
                                                <option value="">Condominium Houses</option>
                                                <option value=""> Guest House</option>
                                                <option value="">House/undercon_tion</option>
                                                <option value="">Studio</option>
                                                <option value="">G+1House</option>
                                                <option value="">G+2House</option>
                                                </select>  
                                              <span id="advance_search_link" onClick="showHideAdvanceSearch()">Advance Search</span>
                                         
                                            <div id="advanced-search-box" style="display:none;"
                                              <label class="search-label">RE_For:&nbsp;&nbsp;&nbsp;</label>
                                              <select name="for" id="search_in" class="demoInputBox">
                                                  <option>Sell</option>
                                                <option value="" >Rent</option>
                                                <option value=""> Commertial</option>
                                                </select>        
                                               <div>
                                              </div>
                                              <label class="search-label"> Price:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                          
                                                <input type="text" name="price" id="without" class="demoInputBox" value="" />
                                              <div>
                                              </div>
                                              <label class="search-label"> Location:</label>
                                                <input type="text" name="location" id="without" class="demoInputBox" value="" />
                                              <div>  
                                              </div>
                                            </div>
                                            <div>
                                              <input type="submit" name="search" value="Search" class="btnSearch"  onclick="return validateForm()">  
                                            </div>
                                          </div>
                                          </form> 
                                       </div>
                                 <div class="tab-pane fade" id="price">
                                    <form action="searchbyprice.php" method="get" enctype="multipart/form-data" name="myform">
                                          <input type="hidden" id="advance_search_submit" name="search" value="">
                                          <div class="search-box">
                                            <label class="search-label">Min_Price:</label>
                                         <input type="text" name="minprice" class="demoInputBox" value=""  placeholder="enter Min_price..."  /> </br>
                                             <label class="search-label"> Max_Price:</label>
                                                <input type="text" name="maxprice" id="without" class="demoInputBox" value="" placeholder="Max_price" />
                                              <div>  
                                              </div>
                                            <div>
                                              <input type="submit" name="search" value="Search" class="btnSearch"  onclick="return validateForm()">  
                                            </div>
                                          </div>
                                          </form> 
                                         </div>
                                <div class="tab-pane fade" id="category">
                                     <form action="searchbycategory.php" method="get" enctype="multipart/form-data" name="myform">
                                          <input type="hidden" id="advance_search_submit" name="search" value="">
                                          <div class="search-box">
                                     <label class="search-label">Category:</label>
                                        <select name="value" id="search_in" class="demoInputBox">
                                                   <option>Villa</option>
                                                <option >Apartment</option>
                                                <option >Condominium Houses</option>
                                                <option > Guest House</option>
                                                <option >House/undercon_tion</option>
                                                <option >Studio</option>
                                                <option >G+1House</option>
                                                <option >G+2House</option>
                                                </select>  
                                            <div>
                                              <input type="submit" name="search" value="Search" class="btnSearch"  onclick="return validateForm()">  
                                            </div>
                                          </div>
                                          </form> 
                                </div>
                                <div class="tab-pane fade" id="for">
                                     <form action="searchbyrealfor.php" method="get" enctype="multipart/form-data" name="myform">
                                          <input type="hidden" id="advance_search_submit" name="search" value="">
                                          <div class="search-box">
                                     <label class="search-label">Real Estate For:</label>

                                             <select name="value" class="demoInputBox">
                                                <option>Sell</option>
                                                <option>Rent</option>
                                                <option > Commertial</option>
                                                </select>  
                                            <div>
                                              <input type="submit" name="search" value="Search" class="btnSearch"  onclick="return validateForm()">  
                                            </div>
                                          </div>
                                          </form> 
                                </div>
                                <div class="tab-pane fade" id="location">
                                    <form action="searchbylocation.php" method="get" enctype="multipart/form-data" name="myform">
                                          <input type="hidden" id="advance_search_submit" name="search" value="">
                                          <div class="search-box">
                                            <label class="search-label">Location:</label>
                                         <input type="text" name="value" class="demoInputBox" value=""  placeholder="enter better place you want..."  /> 
                                             
                                            <div>
                                              <input type="submit" name="search" value="Search" class="btnSearch"  onclick="return validateForm()">  
                                            </div>
                                          </div>
                                          </form> 
                                </div>
                            </div>
                        </body>



