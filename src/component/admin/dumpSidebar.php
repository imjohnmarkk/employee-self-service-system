<div class="drawer lg:drawer-open">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <!-- Page content here -->


        <div class="navbar bg-base-100 flex justify-center items-center">
            <label for="my-drawer" class="btn btn-circle btn-neutral drawer-button lg:hidden fixed top-0 left-0 m-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </label>
            <a class="text-xl font-bold"> <img src="../logo/ess-logo.jpg" alt="ESS Logo"
                    class="h-[40px] w-[40px] rounded-lg">
                E.S.S</a>
        </div>

        <h1>Admin Dashboard</h1>

    </div>
    <div class="drawer-side">
        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul
            class="menu p-4 w-80 min-h-full bg-base-200 text-base-content rounded-box space-y-4 font-sans font-semibold">
            <!-- Sidebar content here -->

            <li><a href="#">Dashboard</a></li>
            <li><a href="../admin-pages/employee-management.php">Employee Management</a></li>
            <li><a href="#">Time and Attendance</a></li>
            <li><a href="#">Payroll and Compensation</a></li>
            <li><a href="#">Performance Management</a></li>
            <li><a href="#">Training and Development</a></li>
            <li><a href="#">Benefits Administration</a></li>
            <li><a href="#">Communication and Announcements</a></li>
            <li><a href="#">Reports and Analytics</a></li>
            <li><a href="#">Settings and Configuration</a></li>
            <li><a href="../config/logout.php">Logout</a></li>

        </ul>
    </div>
</div>