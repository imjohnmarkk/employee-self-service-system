<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/styles.css" />
    <title>Log In</title>
</head>

<body>

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Login now!</h1>
                <p class="py-6 w-[400px]">
                    Welcome to the Employee Self-Service portal, your central hub for managing
                    your employment details conveniently and securely.
                </p>
            </div>
            <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <form class="card-body" for="username">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Username</span>
                        </label>
                        <input type="text" placeholder="Username" class="input input-bordered" required name="username"
                            id="username" autocomplete="off" />
                    </div>
                    <div class="form-control">
                        <label class="label" for="password">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="Password" class="input input-bordered" required
                            name="password" id="password" />
                        <label class="label">
                            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                        </label>
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
                <a href="./src/dashboard/user-dashboard.php" class="btn btn-primary">User Dashboard</a>
                <a href="./src/dashboard/admin-dashboard.php" class="btn btn-primary">Admin Dashboard</a>
            </div>
        </div>
    </div>
</body>

</html>