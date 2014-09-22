<section class="widget">
			<h4 class="widgettitle">PHÒNG</h4>
            <br />
			
                    <?php
                    $kq = mysql_query("select tenphong, link
										from menu_phong");
                    if ($kq) {
                        echo "<ul>";
                        while ($row = mysql_fetch_row($kq)) {
                            echo "<li><a href='" . $row[1] . "'>" . $row[0] . "</a></li>";
                        }
                        echo "</ul>";
                    }

                    ?>
		</section>
		<!-- End .widget -->
