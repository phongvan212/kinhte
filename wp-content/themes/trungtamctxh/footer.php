		<footer id="footer">
                <div class="copyright container">
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <address>
							  <strong>© <?php echo date('Y'); ?> <?php bloginfo( 'sitename' ); ?></strong><br>
							  <abbr title="Address"><?php printf(__("Address:","cswd")); ?></abbr> <?php printf(__("06 Tran Van On Street, Phu Hoa District, Thu Dau Mot City, Binh Duong Province","cswd"));?><br>							  
							  <abbr title="Phone"><?php printf(__("Phone:","cswd")); ?></abbr><?php printf(__("(0650) 3.837.803","cswd"));?><br>
							  <abbr title="Email">Email:</abbr> ef@tdmu.edu.vn</br>
							  <abbr title="Website">Website:</abbr> <a href="http://ef.tdmu.edu.vn" alt="ef.tdmu.edu.vn">ef.tdmu.edu.vn</a>
						</address>
                    </div>
                </div>
        </footer>
</div> <!--end #container -->
 <?php wp_footer(); ?>

<script type="text/javascript">
	$(document).ready(function () {
		   var docHeight = $(window).height();
		   var footerHeight = $('#footer').height();
		   var footerTop = $('#footer').position().top + footerHeight;
		   $(".navbar-inner").before("<div class='left-nav-bg'></div>");
		   $(".navbar-inner").after("<div class='right-nav-bg'></div>");
		   $("#s").attr("placeholder","<?php printf(__("Search","cswd")); ?>");
		   if (footerTop < docHeight) {
		    $('#footer').css('margin-top',  (docHeight - footerTop) + 'px');
		   }

		   $("h3.widgettitle").wrap("<div class='ef-wg-title'></div>");
		   $("#menu_my_bootstrap_menu_settings_menu_ngang_outer_list").wrap("<div class='container'></div>");
		   $("#menu_my_bootstrap_menu_settings_menu_ngang_en_outer_list").wrap("<div class='container'></div>");
		   $(".breadcrumbs").addClass("breadcrumb");
		   $("input").addClass("form-control");
		   $("textarea").addClass("form-control");
		   $(".wpcf7-submit").addClass("btn btn-ef");
		   $(".widget_calendar>.widgettitle").addClass("alert alert-title");
		   $(".widget_calendar>.widgettitle").after("<hr/>");
		   $("#visits_counter_widget>.widgettitle").addClass("alert alert-title");
		   $("#visits_counter_widget>.widgettitle").after("<hr/>")
		   $("img").addClass("img-responsive");
		   $("table").addClass("table");
		   $("#s").addClass("must-wrap");
		   $("#searchsubmit").replaceWith("<spand class='input-group-btn must-wrap'><button id='searchsubmit' type='submit' class='btn btn-search'><i class='fa fa-search'></i></button></spand>");
		   $(".must-wrap").wrapAll("<div class='input-group'></div>");
		   $(".screen-reader-text").replaceWith("");
		   if ($("#myFrame").length > 0)
            {
                var resInterval = setInterval(function () {
                    if ($("#myFrame").contents().find("#pdfHeight").val() != "") {
                        var hgt = 0;
                        hgt = $("#myFrame").contents().find("#pdfHeight").val() * 1;
                        $("#myFrame").css({ "height": hgt + "px" }).fadeTo('10');
                    }
                }, 75);
            }
		  });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71852651-1', 'auto');
  ga('send', 'pageview');

</script>

</body> <!--end body-->
</html> <!--end html -->