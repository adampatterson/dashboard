<ul class="list-unstyled mb-auto">
    <?php /*
    <li class="nav-heading">
        <h5>Heading</h5>
    </li>
 */ ?>
    <li class="nav-item">
        <a class="btn btn-toggle d-flex align-items-center rounded fw-bold" data-bs-toggle="collapse"
           data-bs-target="#home-collapse" aria-expanded="true" role="button">
            <i class="fa-light fa-house me-2"></i>
            <spn>Home</spn>
        </a>
        <div class="collapse show" id="home-collapse">
            <?php include('item-collapse.blade.php') ?>
        </div>
    </li>
    <li class="nav-item">
        <a class="btn btn-toggle d-flex align-items-center rounded" data-bs-toggle="collapse"
           data-bs-target="#dashboard-collapse" aria-expanded="false" role="button">
            <i class="fa-light fa-gauge-high me-2"></i>
            <span>Dashboard</span>
            <span class="badge bg-success rounded-pill ms-auto me-4">New</span>
        </a>
        <div class="collapse" id="dashboard-collapse">
            <?php include('item-collapse.blade.php') ?>
        </div>
    </li>
    <li class="nav-item">
        <a class="btn btn-toggle d-flex align-items-center rounded" data-bs-toggle="collapse"
           data-bs-target="#orders-collapse" aria-expanded="false" role="button">
            <i class="fa-light fa-table-list me-2"></i>
            <span>Orders</span>
        </a>
        <div class="collapse" id="orders-collapse">
            <?php include('item-collapse.blade.php') ?>
        </div>
    </li>
    <li class="border-top my-3"></li>
    <li class="nav-item">
        <a class="btn btn-toggle d-flex align-items-center rounded" data-bs-toggle="collapse"
           data-bs-target="#account-collapse" aria-expanded="false" role="button">
            <i class="fa-light fa-grid me-2"></i>
            <span>Account</span>
        </a>
        <div class="collapse" id="account-collapse" style="">
            <?php include('item-collapse.blade.php') ?>
        </div>
    </li>
</ul>