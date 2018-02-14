<ul id="flexiselDemo2" style="background-color: white;"> 
<?php 

require_once("connection.php");
 $var = $_POST['al_id'];


$sql_select_cate = mysqli_query($conn,"select *,cate_name from tbl_sub_cate inner join tbl_mian_cate on tbl_mian_cate.cate_id = tbl_sub_cate.cate_id where tbl_sub_cate.cate_id='$var' AND sub_cate_status='active'");
	while($sql_fetch_sub_cate = mysqli_fetch_assoc($sql_select_cate))
	{
		$result2 = $sql_fetch_sub_cate['sub_cate_name'];
if(strlen($sql_fetch_sub_cate['sub_cate_name'])>12)
{
	$result = substr($sql_fetch_sub_cate['sub_cate_name'], 0, 9);
	$result = $result."...";

}else{
	$result = $sql_fetch_sub_cate['sub_cate_name'];
}
	?>
	   <li style="margin-bottom: 10px;">
	   	<a title="<?php echo $result2  ?>" style="text-decoration: none;" target="_blank" href="<?php echo $sql_fetch_sub_cate['sub_cate_link']  ?>">
	   		<div style="text-align: center;">
	   		<img src="<?php echo $sql_fetch_sub_cate['sub_cate_image'] ?>">
	   			<p ><?php echo $result  ?></p>
	   		</div> 
	   	</a>
	   </li>  

<?php 
}

?>
</ul>