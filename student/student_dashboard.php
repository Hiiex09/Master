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
  <div class="container mx-auto grid md:grid-cols-1 lg:grid-cols-1 p-8 gap-5">
    <div class="card bg-slate-200  rounded-box grid h-[550px] w-full p-8">
    <div class="hero">
      <div class="hero-content grid sm:grid-cols-1 md:grid-cols-2 lg:flex-row-reverse">
          <div class="text-base sm:text-lg md:text-md lg:text-md">
            <h1 class="font-bold leading-tight">Welcome Juana Mary</h1>
            <p class="py-6 leading-relaxed text-sm sm:text-base md:text-lg lg:text-xl">
              Dear Students,
              <br /><br />
              We are pleased to have you here as part of our commitment to improving the quality of education and services at Cebu Eastern College.
              This system allows you to evaluate and provide valuable feedback on courses, instructors, and the overall learning experience.
              Your input is vital in helping us enhance our academic programs and maintain a positive learning environment.
              <br /><br />
              Please take your time to complete the evaluations honestly and thoughtfully. Your feedback will help shape the future of our school.
              <br /><br />
              Thank you for your participation!
            </p>
            <button class="btn btn-primary">
              <a href="#">Start Evaluate Now</a>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="card bg-slate-200  rounded-box grid h-[250px] w-full p-10">
      <div class="text-center p-4">
        <h1 class="text-5xl">Instruction</h1>
      </div>
      <div class="text-center">
        <ul class="steps">
          <li class="step step-primary text-lg p-2">Start Evaluation</li>
          <li class="step step-primary text-lg p-2">Instructor Name</li>
          <li class="step step-primary text-lg p-2">Subject</li>
          <li class="step step-primary text-lg p-2">Submit Evaluation</li>
        </ul>
      </div>
    </div>
  </div>
</section>
</body>
</html>