<?php
include("./templates/header.php");
include("./templates/search.php");
?>


<div class="container-fluid my-5">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <article class="card-group-item">
                    <header class="card-header">
                        <h6 class="title">Lọc theo khoảng giá</h6>
                    </header>
                    <div class="filter-content">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Thấp nhất</label>
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="0 VND">
                                </div>
                                <div class="form-group col-md-6 text-right">
                                    <label>Cao nhất</label>
                                    <input type="number" class="form-control" placeholder="1,000,000 VND">
                                </div>
                            </div>
                        </div> <!-- card-body.// -->
                    </div>
                </article> <!-- card-group-item.// -->
                <article class="card-group-item">
                    <header class="card-header">
                        <h6 class="title">Danh mục</h6>
                    </header>
                    <div class="filter-content">
                        <div class="card-body">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check1">
                                <label class="custom-control-label" for="Check1">Chó</label>
                            </div> <!-- form-check.// -->

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check2">
                                <label class="custom-control-label" for="Check2">Mèo</label>
                            </div> <!-- form-check.// -->

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check3">
                                <label class="custom-control-label" for="Check3">Rắn</label>
                            </div> <!-- form-check.// -->

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check4">
                                <label class="custom-control-label" for="Check4">Dịch vụ</label>
                            </div> <!-- form-check.// -->
                        </div> <!-- card-body.// -->
                    </div>
                </article> <!-- card-group-item.// -->
            </div> <!-- card.// -->
        </div>

        <div class="col-9">
            <div id="filter-panel" class="filter-panel">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <label class="filter-col" style="margin-right:2px;" for="pref-perpage">Sắp xếp theo:</label>
                                <select id="pref-perpage" class="form-control" style="margin-right: 2px;">
                                    <option value="low">Giá: Thấp đến cao</option>
                                    <option value="height">Giá: Cao đến thấp</option>
                                </select>
                            </div> <!-- form group [rows] -->
                            <div class="form-group">
                                <label class="filter-col" style="margin-right:2px;" for="pref-search">Tìm kiếm:</label>
                                <input type="text" class="form-control input-sm" id="pref-search">
                            </div><!-- form group [search] -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include("./templates/footer.php");
?>