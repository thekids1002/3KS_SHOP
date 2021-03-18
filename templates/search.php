<head>
    <link rel="stylesheet" href="./css/khuong.css">
    <script src="./js/main.js"></script>
</head>

<!-- MODAL SEARCH -->
<div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content modal-search">

            <div class="modal-body modal-search-body row py-0">
                <form action="" method="post" id="form-search">
                    <input id="search-inp" type="text" placeholder="Tìm kiếm sản phẩm..." autofocus onkeyup="search_ajax(this.value)">
                    <ul id="result-search">
                        <li class="result-item">
                            <a href="#" class="result-link">
                                <img src="./img/carousel/slider-single-img.png" class="result-img">
                                <div class="content-result-item">
                                    <p class="result-link-title">Thịt cầy tơ 7 món</p>
                                    <p class="price-result">120.000đ</p>
                                </div>
                            </a>
                        </li>
                        <li class="result-item">
                            <a href="#" class="result-link">
                                <img src="./img/carousel/slider-single-img.png" class="result-img">
                                <div class="content-result-item">
                                    <p class="result-link-title">Thịt cầy tơ 7 món</p>
                                    <p class="price-result">120.000đ</p>
                                </div>
                            </a>
                        </li>
                        <li class="result-item">
                            <a href="#" class="result-link">
                                <img src="./img/carousel/slider-single-img.png" class="result-img">
                                <div class="content-result-item">
                                    <p class="result-link-title">Thịt cầy tơ 7 món</p>
                                    <p class="price-result">120.000đ</p>
                                </div>
                            </a>
                        </li>
                        <li class="result-item">
                            <a href="#" class="result-link">
                                <img src="./img/carousel/slider-single-img.png" class="result-img">
                                <div class="content-result-item">
                                    <p class="result-link-title">Thịt cầy tơ 7 món</p>
                                    <p class="price-result">120.000đ</p>
                                </div>
                            </a>
                        </li>
                        <li class="result-item">
                            <a href="#" class="result-link">
                                <img src="./img/carousel/slider-single-img.png" class="result-img">
                                <div class="content-result-item">
                                    <p class="result-link-title">Thịt cầy tơ 7 món</p>
                                    <p class="price-result">120.000đ</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </form>
            </div>

        </div>

    </div>
</div>

<script>
    function search_ajax(string) {}
</script>