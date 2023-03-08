<?php include('api.php');?>

<div class="table-list">
    <?php
    $valuesPerPage = 8;
    $totalPages = ceil(count($values) / $valuesPerPage);

    if (isset($_GET['page'])) {
        $currentPage = $_GET['page'];
    } else {
        $currentPage = 1;
    }

    $startIndex = ($currentPage - 1) * $valuesPerPage;
    $endIndex = $startIndex + $valuesPerPage;

    $count = ($currentPage - 1) * $valuesPerPage + 1;

    for ($i = $startIndex; $i < $endIndex && $i < count($values); $i++) {
        ?>
        <div class="row list-item">
            <div class="col-4">
                <h4 class="mb-0 font-d-bld text-white"><?php echo $count . ")" . $values[$i]->name; ?></h4>
            </div>
            <div class="col-2">
                <h4 class="mb-0  font-d-bld text-white"><?php echo $values[$i]->bet_size; ?></h4>
            </div>
            <div class="col-3">
                <h4 class="mb-0  font-d-bld text-white"><?php echo $values[$i]->multiplier; ?></h4>
            </div>
            <div class="col-3">
                <h4 class="mb-0  font-d-bld text-white"><?php echo $values[$i]->payout; ?></h4>
            </div>
        </div>
        <?php
        $count++;
    }
    ?>

    <div class="table-pagination-btn d-flex justify-content-between">
        <div class="left-btn">
            <?php if ($currentPage > 1) { ?>
                <a href="javascript:void(0)" onclick="loadData(<?php echo $currentPage - 1; ?>)"><i class="fa-solid fa-angle-left"></i></a>
            <?php } ?>
        </div>
        <div class="pagination-number">
            <ul class="ps-0 mb-0 d-flex">
                <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                    <li><a href="javascript:void(0)" class="font-d-bld <?php echo $i == $currentPage ? 'active' : ''; ?>" onclick="loadData(<?php echo $i; ?>)"><?php echo $i; ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="right-btn">
            <?php if ($currentPage < $totalPages) { ?>
                <a href="javascript:void(0)" onclick="loadData(<?php echo $currentPage + 1; ?>)"><i class="fa-solid fa-angle-right"></i></a>
            <?php } ?>
        </div>
    </div>
</div>
