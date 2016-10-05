

<footer class="roboto-thin">
    <div class="wrap clearfix">

        
        <div class="col-sm-4">
            <ul class="list-unstyled">
                
                
                
                
                <li>
             	   <span class="glyphicon glyphicon-earphone"></span>&nbsp;<span id="footer-phone">800-422-1066</span> 
             	</li>
                <br />
                
                <li>
                   <span class="glyphicon glyphicon-envelope"></span>&nbsp;<a href="mailto:info@expertbizdev.com">info@expertbizdev.com</a>
                </li>
                <br />
                <li>
                   <span class="glyphicon glyphicon-map-marker"></span>&nbsp;3 Bala Plaza East, Suite 504 
                   <br>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bala Cynwyd, PA 19004 
                   <br>
                </li>
                
            </ul> 
        
        </div>

        <div class="col-sm-8 hidden-xs">
        
     
            <ul id="footer-nav" class="list-unstyled">
                <li><a class="<?php if ($pageTitle=="Company")  echo "current"; ?>" href="<?php echo BASE_URL; ?>company">Company</a></li>
                <li><a class="<?php if ($pageTitle=="Services")  echo "current"; ?>" href="<?php echo BASE_URL; ?>services">Services</a></li>
                <li><a class="<?php if ($pageTitle=="Clients")  echo "current"; ?>" href="<?php echo BASE_URL; ?>clients">Clients</a></li>
                <li><a class="<?php if ($pageTitle=="Results")  echo "current"; ?>" href="<?php echo BASE_URL; ?>results">Results</a></li>
                <li><a class="<?php if ($pageTitle=="Articles")  echo "current"; ?>" href="<?php echo BASE_URL; ?>articles">Articles</a></li>
                <li><a class="<?php if ($pageTitle=="Contact")  echo "current"; ?>" href="<?php echo BASE_URL; ?>contact">Contact</a></li>
                <li><a class="<?php if ($pageTitle=="Jobs")  echo "current"; ?>" href="<?php echo BASE_URL; ?>jobs">Jobs</a></li>
            </ul>
        </div>

        <div id="toTop" onclick="toTop()"><span class="glyphicon glyphicon-chevron-up"></span></div>

    </div>



    <div id="sub-footer">
        <div class="wrap clearfix">
            <div class="col-sm-6">
                &copy; <?php echo date("Y"); ?> Expert Business Development, LLC
            </div>
            <div class="col-sm-6">
                <small><a href="<?php echo BASE_URL; ?>privacy">Privacy Policy</a> &nbsp;|&nbsp; <a href="<?php echo BASE_URL; ?>terms">Terms of Use</a></small>
            </div>
        </div>



    </div>



</footer>


<script src="<?php echo BASE_URL ?>assets/js/jquery-3.1.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo BASE_URL ?>assets/js/bootstrap.min.js"></script>

<!-- typed.js -->
<script src="<?php echo BASE_URL ?>assets/js/typed.min.js"></script>


<!-- countUp js -->
<script src="<?php echo BASE_URL ?>assets/js/countUp.min.js"></script>

<?php 

// include home.js only on the home page, using $pageTitle
if ($pageTitle == "home")

echo 

"<!-- home js :: typed and countup functions for home page only -->
<script src='" . BASE_URL . "assets/js/home.js'></script>"


?>

<!-- custom site js -->
<script src="<?php echo BASE_URL ?>assets/js/ebd.js"></script>



</body>

</html>