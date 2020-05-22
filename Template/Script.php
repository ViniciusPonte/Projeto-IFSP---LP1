<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> <!-- JQUERY -->
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> <!-- JQUERY -->
<script src="js/materialize.js"></script> <!-- MATERIALIZE -->
<script type="text/javascript" src="slick/slick.min.js"></script> <!-- SLICK -->
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/jquery.elevateZoom-3.0.8.min.js"></script>
        
        <script type="text/javascript">
            $('.slider').slick({
                dots: false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 2000,
                pauseOnHover: true
            });
        </script>
        
        <script>
            var elem = document.querySelector('.collapsible.expandable');
            var instance = M.Collapsible.init(elem, {
            accordion: false
            });
        </script>

        <script>
            $(document).ready(function(){
                $('select').formSelect();
            });
        </script>

        <script>
            $('.elevateImage').elevateZoom();
        </script>
