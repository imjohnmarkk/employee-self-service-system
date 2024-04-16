<div class="drawer lg:drawer-open">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <!-- Page content here -->

        <?php include ("../component/user/navbar.php") ?>

        <h1>User Dashboard</h1>

    </div>
    <div class="drawer-side">
        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul
            class="menu p-4 w-80 min-h-full bg-base-200 text-base-content rounded-box shadow-lg font-sans font-semibold ">
            <!-- Sidebar content here -->

            <li>
                <a href="#" class="hover:bg-blue-600 hover:text-white py-3 mb-2">
                    <span><?php include ("../assets/user/dashboard.php") ?></span> Dashboard
                </a>
            </li>

            <li>
                <a href="#" class="hover:bg-blue-600 hover:text-white py-3 mb-2">
                    <span><?php include ("../assets/user/account.php") ?> </span> Profile and Account Management
                </a>
            </li>

            <li>
                <a href="#" class="hover:bg-blue-600 hover:text-white py-3 mb-2"> <span>
                        <?php include ("../assets/user/time.php") ?> </span> Time and Attendance
                </a>
            </li>
            <li><a href="#" class="hover:bg-blue-600 hover:text-white py-3 mb-2">Payroll and Compensation</a></li>
            <li><a href="#" class="hover:bg-blue-600 hover:text-white py-3 mb-2">Performance and Development</a></li>
            <li><a href="#" class="hover:bg-blue-600 hover:text-white py-3 mb-2">Communication and Collaboration</a>
            </li>
            <li><a href="#" class="hover:bg-blue-600 hover:text-white py-3 mb-2">Requests and Approvals</a></li>
            <li><a href="#" class="hover:bg-blue-600 hover:text-white py-3 mb-2">Company Policies and Documents</a></li>
            <li><a href="#" class="hover:bg-blue-600 hover:text-white py-3 mb-2">Help and Support</a></li>
            <li><a href="../config/logout.php" class="hover:bg-blue-600 hover:text-white py-3 mb-2">Logout</a></li>



        </ul>
    </div>
</div>