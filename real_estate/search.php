<html>
<head>
   <link rel="stylesheet" href="css/advanced.css" type="text/css">

</head>
</head>
<body>
<div id="backgroundsearch">
    <h2>Search Availeble Real Estate </h2>
    <div>      
        <form action="searchbyprice.php" method="GET"  name="myform">
      <input type="hidden" id="advance_search_submit" name="search" value="<?php echo $advance_search_submit; ?>">
      <div class="search-box">
        <label class="search-label">Search Real estate by price range:</label>
        <div>
          <input type="number" name="value" class="demoInputBox" placeholder="Enter lowest price"   />
          </br>
           <input type="number" name="value1" class="demoInputBox" placeholder="Enter maximum price"  />
          
        </div>    
        
        <div>
          <input type="submit" name="search" value="Search" class="btnSearch">  
        </div>
      </div>
      </form> 
    </div>
  </div>
  </body>
</html>