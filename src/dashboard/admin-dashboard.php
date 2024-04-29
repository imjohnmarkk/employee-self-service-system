<?php include("../component/admin/header.php") ?>
<?php include("../component/admin/navbar.php") ?>
<?php include("../component/admin/sidebar.php") ?>


<!-- Page Content -->
<div class="p-4 sm:ml-64 mt-5">
    <div class="p-4 rounded-lg dark:border-gray-700 mt-5">

        <?php if (isset($_SESSION["login_success"])) { ?>

            <div role="alert" class="alert alert-success flex justify-center items-center text-xl text-white w-[400px] mx-auto">
                <span><?php echo $_SESSION["login_success"]; ?></span>
            </div>

            <?php unset($_SESSION["login_success"]); ?>
        <?php } ?>

        <div id="content"></div>
    </div>
</div>

<?php include("../component/admin/footer.php") ?>