<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "root", "searchEngine");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM BESearch 
  WHERE website_url LIKE '%".$search."%'
  OR title LIKE '%".$search."%' 
  OR description LIKE '%".$search."%' 
  OR meta_keywords LIKE '%".$search."%' 
  OR biz_name LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM BESearch ORDER BY title
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table">
   <table>
    <tr style="border: 2px solid #000;">
     <th style="background:#efefef; text-align:center; margin:5px; padding: 5px;">Organization Name</th>
     <th style="background:white;text-align:center; margin:5px;padding: 5px;">Website</th>
     <th style="background:#efefef; text-align:center; margin:5px;padding: 5px;">Title</th>
     <th style="background:white;text-align:center; margin:5px;padding: 5px;">Description</th>
     <th style="background:#efefef; text-align:center; margin:5px;padding: 5px;">Keywords</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr style="border: 2px solid #000;">
    <td style="background:#efefef; text-align:center; margin:5px;padding: 5px;">'.$row["biz_name"].'</td>
    <td style="background:white; text-align:center; margin:5px;padding: 5px;">'.$row["website_url"].'</td>
    <td style="background:#efefef; text-align:center; margin:5px;padding: 5px;">'.$row["title"].'</td>
    <td style="background:white;text-align:center; margin:5px;padding: 5px;">'.$row["description"].'</td>
    <td style="background:#efefef; text-align:center; margin:5px;padding: 5px;">'.$row["meta_keywords"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>


