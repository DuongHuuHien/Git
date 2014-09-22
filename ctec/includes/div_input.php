<section class="widget clearfix">
			
			<?php
						echo '<h1><a href="#"><img src="../images/forum.png"> &nbsp;Xin chào '. $_SESSION ['tendangnhap'].'!</a></h1>';
							?>
							<?php if(isset($num)){ ?>
			<form action='QT.php' method='get'>
				<select class="input" name='selkhoa'>;
						<?php
						$re = mysql_query ( "SELECT * FROM khoa" );
						for(; $row = mysql_fetch_array ( $re );) {
							echo "<option value='" . $row ['idkhoa'] . "'>" . $row ['tenkhoa'] . "</option>";
						}
						?>
					</select>
				<input type='submit' name='ok' value='Lọc' />
			</form>
			<?php } ?>
							<hr />
		 <div id="search-box">
           <input type="text" value="" placeholder="Tìm trong trang" id="search_term"/> 
            
        </div>
						
        
</section>
<!-- End .widget clearfix-->