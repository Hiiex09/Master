<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
</head>
<body>
  
<?php
  include'../header_student.php';
?>

<section>
<div class="flex w-full flex-col lg:flex-row p-8 gap-5">
    <div class="card bg-base-300 rounded-box grid h-[500px] w-full grid lg:grid-rows p-4">
      
      <div>
          <h1 class="text-2xl font-semibold">Teacher List</h1>
      </div>
      <div class="px-8 py-2">
        <a href="#Teacher-1">
          <img 
            src="../Profiles User/Teacher 1.png" 
            alt="Teacher-1"
            height="60"
            width="60"
            class="rounded-md">
        </a>
      </div>
      <div>
        <form 
          action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>"
          method="post"
          class="card-body">
          <div class="form-control">

            <input type="text" 
              placeholder="Instructor Name" 
              class="input input-bordered"
              required
              name="username"
              autocomplete="off" />
          </div>
          <div class="form-control">
            <input 
              type="text" 
              placeholder="Subject" 
              class="input input-bordered" 
              required
              name="password"
              autocomplete="off" />
          </div>
          <div class="form-control mt-6">
            <input 
              type="submit" 
              value="Login"
              class="btn btn-primary">
          </div>
        </form>
      </div>
    
    </div>

   
    
    <div class="card bg-base-300 rounded-box grid h-[500px] w-full grid grid-cols-2 p-4">
      <div>
          <h1 class="text-2xl font-semibold">Forms</h1>
      </div>
      <div class="p-2">
        <div class="text-md text-accent-content">
          <h1>1. Teaching Quality</h1>
        </div>
        <div class="text-md text-accent-content">
          <p>How would you rate the teacher's knowledge of the subject?</p>
        </div>
      </div>
      <div>
        
      </div>
    </div>
</div>
</section>
</body>
</html>