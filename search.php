<?php
include("./templates/header.php");
?>

<head>
    <link rel="stylesheet" href="./css/khuong.css">
</head>

<!-- Button search modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Search
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-search">
            <div class="modal-body">
                <form action="" class="form_search row">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" id="search_value" placeholder="Bạn muốn tìm gì?">
                        <button id="btn_search" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                    <div id="result_search">
                        <ul class="result_search-list">
                            <li class="result_search-item">
                                <a href="" class="result-search-link">
                                    <div class="d-flex">
                                        <img src="./img/carousel/slider-single-img.png" alt="" class="result-search-img">
                                        <h4 class="result-search-title">Cầy 7 món</h4>
                                        <h4 class="result-search-price text-success">120.000đ</h4>
                                    </div>
                                </a>
                            </li>

                            <li class="result_search-item">
                                <img src="./img/carousel/slider-single-img.png" alt="" class="result-search-img">
                                <h4 class="result-search-title">Cầy 7 món</h4>
                                <h4 class="result-search-price text-success">120.000đ</h4>
                            </li>

                            <li class="result_search-item">
                                <img src="./img/carousel/slider-single-img.png" alt="" class="result-search-img">
                                <h4 class="result-search-title">Cầy 7 món</h4>
                                <h4 class="result-search-price text-success">120.000đ</h4>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("./templates/footer.php");
?>

<script>
    $(document).ready(function() {
        $("#search_value").focus(function() {
            $("#result_search").css("display", "block");
        });
        $("#search_value").focusout(function() {
            $("#result_search").css("display", "none");
        });
    });
</script>