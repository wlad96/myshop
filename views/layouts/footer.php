    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © Nadezhda Dyakova 2016</p>
                <p class="pull-right"></p>
            </div>
        </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>

<!--for Materialize--> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/template/js/materialize.min.js"></script>
<!--/for Materialize-->

<!--for search-->
<script src="/template/js/jquery-2.2.3.min.js"></script>
<script src="/template/js/search.js"></script>   
<!--/for search-->

<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>