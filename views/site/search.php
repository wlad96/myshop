<!--pos.:    views/site/livesearch/search.php  вид  -->
<?php include ROOT . '/views/layouts/header.php';?>
<script src="livesearch/search.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

     <div class="container"> <!--Живой поиск--> 
        <div class="row"> 
            <div class="col-sm-1"></div>   
            <div class="col-sm-11">  
                <form class="navbar-search pull-left">
                     <input type="text" name="referal" placeholder="Поиск" value="" class="who search-query"  autocomplete="off">
                     <ul class="search_result"></ul>
                 </form>
            </div>
        </div> 
      </div> 

<?php include ROOT . '/views/layouts/footer.php'; ?>
