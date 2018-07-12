<html>
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
</head>
<?php 
$con=mysqli_connect("localhost","root","","re");
// mysql_select_db("re");


if(isset($_GET['search'])){

   $RE_ID  = $_GET['value'];
    
    $search_query = "SELECT * from reproperty where Status like '%$RE_ID%'";
    
    $run_query = mysqli_query($con,$search_query);
    if(mysqli_num_rows($run_query)==0){
      echo "<center><h1>sorry, result not found</h1><a href='addrequerments.php'>click her to add requermets </a></center>";
    }
      else{

while ($search_row=mysqli_fetch_array($run_query)){
    $post_name = $search_row['RE_Name'];
    $post_id = $search_row['State'];
    $post_title ="Price:". $search_row['Price'];
    $post_image = $search_row['image'];
    $post_content = "Country:".substr($search_row['Country'],0,150);
     $Bedroom ="Number of Bedroom:". $search_row['Bedroom'];
      $Bathroom ="Number of Bathroom:". $search_row['Bathroom'];
       $Category ="Category of realestate:". $search_row['Category'];
 
?>
<h2>
</h1></center>
<table>
<tr>
<a href="searchdisplay.php?RE_ID<?php echo "$RE_ID";?>"</a>
<h4><?php echo $post_name; ?> Real Estate</h4>
<input type="image" src="images/<?php echo $post_image; ?>" width="300" height="100"></a>
<p><?php echo $post_title; ?></p>
<p><?php echo $post_content; ?></p>
<p><?php echo$Bedroom; ?></p>
<p><?php echo $Bathroom; ?></p>
<p><?php echo  $Category; ?></p>
</tr>
</table>
<?php 
   }}}
 ?>

</div>

<body>
<div id="backgroundsearch">
    <h2>Advanced Search</h2>
    <div>      
        <form action="" method="get" enctype="multipart/form-data" name="myform">
      <input type="hidden" id="advance_search_submit" name="search" value="<?php echo $advance_search_submit; ?>">
      <div class="search-box">
        <label class="search-label">Search BY Status:</label>
        <div>
          <input type="text" name="value" class="demoInputBox" value="<?php echo $with_any_one_of; ?>"  />
          <span id="advance_search_link" onClick="showHideAdvanceSearch()">Advance Search</span>
        </div>    
        <div id="advanced-search-box" <?php if(empty($advance_search_submit)) { ?>style="display:none;"<?php } ?>>
          <label class="search-label">With Price:</label>
          <div>
            <input type="text" name="search[with_the_exact_of]" id="with_the_exact_of" class="demoInputBox" value="<?php echo $with_the_exact_of; ?>" />
          </div>
          <label class="search-label">Search With Location:</label>
          <div>
            <input type="text" name="search[without]" id="without" class="demoInputBox" value="<?php echo $without; ?>" />
          </div>
          <label class="search-label">Search By Price:</label>
          <div>
            <select name="search[search_in]" id="search_in" class="demoInputBox">
              <option value="">Select Column</option>
              <option value="title" <?php if($search_in=="title") { echo "selected"; } ?>>Title</option>
              <option value="description" <?php if($search_in=="description") { echo "selected"; } ?>>Description</option>
            </select>
          </div>
        </div>
        
        <div>
          <input type="submit" name="search" value="Search" class="btnSearch"  onclick="return validateForm()">  
        </div>
      </div>
      </form> 
    </div>
  </div>
  </body>
</html>