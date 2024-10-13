<?php
  include('database/dbconnect.php');
  include 'header_student.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  
<section>
  <div class="hero bg-base-300 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center lg:text-left">
        <h1 class="text-5xl font-bold leading-12">Welcome to Cebu Eastern College Evaluation System</h1>
        <p class="py-6 text-lg">
        We're glad to have you here. Please log in to access your evaluation dashboard. 
        Your input plays a vital role in shaping a better learning 
        experience for everyone.
        </p>
      </div>
      <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
        <form 
          action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>"
          method="post"
          class="card-body">
          <div class="form-control">
            <label class="label">
              <span class="label-text text-xl">School ID</span>
            </label>
            <input type="text" 
              placeholder="School ID" 
              class="input input-bordered"
              required
              name="username"
              autocomplete="off" />
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text text-xl">Password</span>
            </label>
            <input 
              type="password" 
              placeholder="Password" 
              class="input input-bordered" 
              required
              name="password"
              autocomplete="off" />
            <label class="label">
              <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
            </label>
          </div>
          <div class="form-control mt-6">
            <input 
              type="submit" 
              value="login"
              class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>