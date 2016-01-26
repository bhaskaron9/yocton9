<?php
				ob_start();
				function createurl($id , $url)
				{
					$myfile = fopen("$id/index.php", "w") or die("Unable to open file!");
					$urlmyfile = fopen("$id/url.txt", "w") or die("Unable to open file!");
					$txt = "<?php\nheader('Location: '.'$url');\n?>;";
					fwrite($myfile, $txt);
					fwrite($urlmyfile, $url);
					fclose($myfile);
					fclose($urlmyfile);
				}
				if(isset($_GET['originalurl'])&&isset($_GET['try']))
				{
					$provided_url = $_GET['originalurl'];
					$provided_id = $_GET['try'];
					if(!empty($provided_url)&&!empty($provided_id))
					{
						if(!mkdir("$provided_id",0777))
						{
							echo 'Failed this time!!!';
						}
						else
						{
							createurl($provided_id,$provided_url);
							$_SESSION['yocto'] = $provided_id;
							header('Location: index.php');
						}
					}
					else if(!empty($provided_url)&&empty($provided_id))
					{
						$idcount_file = fopen("idcount.txt", "r") or die("Unable to open file!");
						$countid = fgets($idcount_file);
						$dirname = $countid.rand(66,6666);
						function needit()
						{
							return $dirname;
						}
						if(!mkdir("$dirname"))
						{
							echo 'Failed this time!!!';
						}
						else
						{
							createurl($dirname,$provided_url);
							$_SESSION['yocto'] = $dirname;
							header('Location: index.php');
						}
						fclose($idcount_file);
						$countid++;
						$idcount_file_update = fopen("idcount.txt", "w") or die("Unable to open file!");
						fwrite($idcount_file_update, $countid);
						fclose($idcount_file_update);
					}
					else 
						echo 'Sorry Dear, Your URL is already smaller than yocto :p';
				}
?>
	<form action="index.php" method="GET">
		<textarea name="originalurl" class="yottaurl" placeholder="<?php echo "\n\t\t\tPlease Enter the bigger URL";?>"></textarea>
		<span><br><input type="submit" value="Get yoctOn9"class="btn btn-lg btn-primary"><br>
		<font color="white" size="4" align="top">
		Enter custom yocto url if you want:
		</font>
		<font color="blue" size="4" align="left"><b>  http://www.yoctOn9.com/ </font></b><input type="text" name="try" class="yoctourl" placeholder="small URL">
		</span>
	</form>