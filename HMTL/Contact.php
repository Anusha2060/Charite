<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playwrite+BE+VLG:wght@100..400&display=swap"
      rel="stylesheet"
    />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet"
  />


    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              maincolor: "#263B5C",
              secondarycolor: "#F15B43",
              bgcolor: "#FCF2EB",
              boxcolor: "#65C9BB",
              imgboxcolor: "#F4F2F1",
              facebook: "#3B5998",
              instagram: "#405DE6",
              linkdin: "#0077B5",
              youtube: " #FF0000",
            },
          },
        },
      };
    </script>
    <title>CHARITE</title>
    <style>
      .fontuse {
        font-family: "Playwrite BE VLG", cursive;
      }

      .poppins {
    font-family: "Poppins", sans-serif;
  }

    </style>
  </head>

  <body class="h-fit w-screen overflow-x-clip poppins">
    <?php
    // define variables and set to empty values
    $firstname = $lastemail = $email = $message = $country = $donation = $agegroup = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $firstname= test_input($_POST["firstname"]);
      $lastemail= test_input($_POST["lastname"]);
      $email = test_input($_POST["email"]);
      $message= test_input($_POST["message"]);
      $country = test_input($_POST["country"]);
      $donation = test_input($_POST["donation"]);
      $agegroup = test_input($_POST["agegroup"]);
alert('Thank you for submitting!!!!');

    }
    

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>



    <!-- NAVIGATION -->
    <nav id="navigation" class="fixed top-0 left-0 w-full z-50">
      <div class="w-11/12 mx-auto flex items-center justify-between py-5">
        <div class="flex items-center gap-24 text-white">
          <div
            class="text-3xl font-medium fontuse flex gap-3 items-center justify-center cursor-pointer"
          >
        
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-16 w-16 text-secondarycolor"
              viewBox="0 0 14 14"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="m5.385 5.242l1.404-1.27a3 3 0 0 1 2.406-.747l1.858.246l2.578-1.393a.25.25 0 0 1 .369.22v4.738a1 1 0 0 1-.418.813L11.846 9.09l-1.88-1.576a2.5 2.5 0 0 0 .966-.63a.625.625 0 1 0-.9-.869c-.185.193-.4.317-.652.366c-.219.043-.498.036-.849-.072l-.446-.375L6.84 6.943a1.12 1.12 0 0 1-1.455-1.701m-.838-.928l1.008-.911a3.064 3.064 0 0 0-1.33-.063l-1.835.318L.376 2.574A.255.255 0 0 0 0 2.799v4.236c0 .338.167.654.446.844l5.455 3.719a2.043 2.043 0 0 0 2.334-.023l2.506-1.779l-2.67-2.24l-.445.358a2.37 2.37 0 0 1-3.08-3.6Z"
                clip-rule="evenodd"
              />
            </svg>
            Charity
          </div>
  
          <div class="lg:flex hidden items-center gap-8 capitalize">
            <a class="hover:text-boxcolor" href="../index.html">home</a>
            <a class="hover:text-boxcolor" href="./About.html">about</a>
            <a class="hover:text-boxcolor" href="./Whower.html"
              >Who we are?</a
            >
            <a class="hover:text-boxcolor" href="./Programs.html"
              >Programs</a
            >
            <a class="hover:text-boxcolor" href="./Contact.html"
              >Contact</a
            >
          </div>
        </div>
        <div class="w-fit h-fit flex lg:hidden" onclick="Sidebar()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-10 w-10 text-white"
            viewBox="0 0 24 24"
          >
            <path
              fill="currentColor"
              d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"
            />
          </svg>
        </div>
        <div
          class="cursor-pointer transition-all duration-700 delay-150 ease-in-out w-fit h-fit px-6 py-4 text-white bg-secondarycolor capitalize lg:flex hidden items-center justify-center gap-2 hover:bg-transparent border-2 border-transparent hover:border-white"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="`w-6 h-6"
            viewBox="0 0 24 24"
          >
            <path
              fill="currentColor"
              d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53z"
            />
          </svg>
          make a donation
        </div>
      </div>
      <div
        id="sidebar"
        class=" w-44 h-full fixed top-24 mt-2 transition-all duration-500 delay-150 ease-in-out translate-x-44 shadow-md border-l p-6 right-0 bg-white text-maincolor"
      >
        <div class="flex flex-col gap-8 font-semibold capitalize poppins">
          <a href="../index.html">home</a>
          <a href="./About.html">about</a>
          <a href="./Whower.html">Who we are?</a>
          <a href="./Programs.html">Programs</a>
          <a href="./Contact.html">Contact</a>
        </div>
      </div>
    </nav>
    <div class="w-screen h-[400px] md:h-[600px]  relative">
      <img src="../Images/Back.jpg" class="h-full w-full object-cover" />
      <div class="absolute top-0 left-0 right-0 bottom-0 text-6xl text-white bg-black bg-opacity-50 flex items-center justify-center font-semibold
      capitalize poppins">Contact</div>
    </div>

    <!-- MIDDLE SECTION -->
    <div class="text-center p-20 text-3xl ">Make a Donation!!!</div>

    <div class="pb-10  w-10/12 mx-auto grid grid-cols-3 gap-14">
      <form class="grid grid-cols-2 gap-5  col-span-2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


      <div class="flex flex-col gap-2">
        <label>First Name</label>
        <input  
          class="p-2 border border-gray-700 outline-none " 
          type="text"
          name="firstname "
          placeholder="Your first name.."
        />
      </div>
      <div class="flex flex-col gap-2">
        <label>Last Name</label>
        <input
          class="p-2 border border-gray-700 outline-none"
          type="text"
          name="lastname"
          placeholder="Your last name.."
        />
      </div>

      <div class="flex flex-col gap-2">
        <label>Email</label>
        <input
          class="p-2 border border-gray-700 outline-none"
          type="text"
          name="email"
          placeholder="Your Email.."
        />
      </div>
      <div class="flex flex-col gap-2">
        <label>Message
        </label>
        <input
          class="border border-gray-700 outline-none p-2"
          type="text"
          name="message"
          placeholder="Enter Message.."
        />
      </div>

      <div class="flex flex-col gap-2">
        <label for="country">Country</label>
        <select id="country" name="country" class="border border-gray-700 outline-none p-2">
          <option value="australia">Australia</option>
          <option value="usa">United Kingdom</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>

        </select>
      </div>

      <!-- Multi-TIck  -->
      <div class="flex flex-col gap-2">
        <label for="donation">Donate</label>
        <div class="flex gap-5 cursor-pointer">
          <div>
            <input class="cursor-pointer" name='donation' value='money'  type="checkbox" />
            <label for="">Money</label>
          </div>

          <div>
            <input class="cursor-pointer" name='donation' value='food' type="checkbox" />
            <label for="">Food</label>
          </div>
          <div>
            <input class="cursor-pointer" name='donation' value='medicine' type="checkbox" />
            <label for="">Medicine</label>
          </div>
          <div>
            <input class="cursor-pointer" name='donation' value='clothe' type="checkbox" />
            <label for="">Clothe</label>
          </div>
        </div>
      </div>

      <!-- Radio -->

      <div class="flex flex-col gap-4 ">
        <label for="agegroup">Age group:</label>
        <div class="flex gap-2 ">
          <div>
            <input class="cursor-pointer" name='agegroup' value='0-20yrs' type="radio" />
            <label for="">0-20yrs</label>
          </div>

          <div>
            <input class="cursor-pointer" name='agegroup' value='21-50yrs'  type="radio" />
            <label for="">21-50yrs</label>
          </div>
          <div>
            <input class="cursor-pointer" name='agegroup' value='51-80yrs' type="radio" />
            <label for="">51-80yrs</label>
          </div>
          <div>
            <input class="cursor-pointer" name='agegroup' value='81-100yrs' type="radio" />
            <label for="">81-100yrs</label>
          </div>
        </div>
      </div>


      <button type="submit" class="uppercase col-span-2 w-fit h-fit py-3 px-12 font-semibold text-boxcolor border-2 border-boxcolor 
      hover:border-transparent hover:bg-boxcolor hover:text-white transition-all duration-700 delay-150 ease-in-out">Send</button>
      
    
  </form>
<!-- Second part -->
<div class=" flex flex-col gap-5">
  <div class="flex items-center gap-4">
    <div class="">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 24 24"><path fill="currentColor" d="m12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81zM12 3L2 12h3v8h6v-6h2v6h6v-8h3z"/></svg>
    </div>
    <div>
      <div>London, United kingdom </div>
      <div> Cutty Sark, SE10 9HT </div>
    </div>
  </div>


  <div class="flex items-center gap-3" >
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 36 36"><path fill="currentColor" d="M25 4H11a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2m-6 26h-2v-2h2Zm-8-4V6h14v20Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="none" d="M0 0h36v36H0z"/></svg>

    </div>
    <div>
      <div>+44 053 565 2365    </div>
      <div>Mon to Fri 9am to 6pm
    </div>
    </div>
  </div>


  <div class="flex items-center gap-3">
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12"  viewBox="0 0 24 24"><path fill="currentColor" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z"/></svg>

    </div>
    <div>
      <div>charity90@gmail.com</div>
      <div>Send us your query anytime!
    </div>
    </div>
  </div>
</div>
</div>









    <!-- FOOTER -->

<div>
      
  <div class="h-[400px] w-full">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2484.6471960368904!2d-0.008963223949975195!3d51.482989912486985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1722616948268!5m2!1sen!2suk"
      class="h-full w-full"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
  </div>

  <footer class="w-screen py-4 bg-maincolor text-white">
    <div
      class="grid md:grid-cols-4 lg:grid-cols-7 md:gap-y-16 gap-6 w-11/12 lg:w-10/12 mx-auto py-16 border-b border-gray-300"
    >
      <div class="flex flex-col col-span-2 gap-8">
        <div class="text-3xl font-medium fontuse flex gap-3 items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-16 w-16 text-secondarycolor"
            viewBox="0 0 14 14"
          >
            <path
              fill="currentColor"
              fill-rule="evenodd"
              d="m5.385 5.242l1.404-1.27a3 3 0 0 1 2.406-.747l1.858.246l2.578-1.393a.25.25 0 0 1 .369.22v4.738a1 1 0 0 1-.418.813L11.846 9.09l-1.88-1.576a2.5 2.5 0 0 0 .966-.63a.625.625 0 1 0-.9-.869c-.185.193-.4.317-.652.366c-.219.043-.498.036-.849-.072l-.446-.375L6.84 6.943a1.12 1.12 0 0 1-1.455-1.701m-.838-.928l1.008-.911a3.064 3.064 0 0 0-1.33-.063l-1.835.318L.376 2.574A.255.255 0 0 0 0 2.799v4.236c0 .338.167.654.446.844l5.455 3.719a2.043 2.043 0 0 0 2.334-.023l2.506-1.779l-2.67-2.24l-.445.358a2.37 2.37 0 0 1-3.08-3.6Z"
              clip-rule="evenodd"
            />
          </svg>
          Charity
        </div>
        <div>
          When a child gets access to good food, it can change just about
          everything. 
        </div>

        <!-- SVG ICONS -->

        <div class=" cursor-pointer flex gap-3 items-center">
          <div class="bg-facebook px-4 py-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z"
              />
            </svg>
          </div>
          <div class="bg-linkdin px-4 py-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002M7 8.48H3V21h4zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91z"
              />
            </svg>
          </div>
          <div class="bg-instagram px-4 py-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              viewBox="0 0 24 24"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M12.001 9a3 3 0 1 0 0 6a3 3 0 0 0 0-6m0-2a5 5 0 1 1 0 10a5 5 0 0 1 0-10m6.5-.25a1.25 1.25 0 0 1-2.5 0a1.25 1.25 0 0 1 2.5 0M12.001 4c-2.474 0-2.878.007-4.029.058c-.784.037-1.31.142-1.798.332a2.9 2.9 0 0 0-1.08.703a2.9 2.9 0 0 0-.704 1.08c-.19.49-.295 1.015-.331 1.798C4.007 9.075 4 9.461 4 12c0 2.475.007 2.878.058 4.029c.037.783.142 1.31.331 1.797c.17.435.37.748.702 1.08c.337.336.65.537 1.08.703c.494.191 1.02.297 1.8.333C9.075 19.994 9.461 20 12 20c2.475 0 2.878-.007 4.029-.058c.782-.037 1.308-.142 1.797-.331a2.9 2.9 0 0 0 1.08-.703c.337-.336.538-.649.704-1.08c.19-.492.296-1.018.332-1.8c.052-1.103.058-1.49.058-4.028c0-2.474-.007-2.878-.058-4.029c-.037-.782-.143-1.31-.332-1.798a2.9 2.9 0 0 0-.703-1.08a2.9 2.9 0 0 0-1.08-.704c-.49-.19-1.016-.295-1.798-.331C14.926 4.006 14.54 4 12 4m0-2c2.717 0 3.056.01 4.123.06c1.064.05 1.79.217 2.427.465c.66.254 1.216.598 1.772 1.153a4.9 4.9 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.047 1.066.06 1.405.06 4.122s-.01 3.056-.06 4.122s-.218 1.79-.465 2.428a4.9 4.9 0 0 1-1.153 1.772a4.9 4.9 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465c-1.067.047-1.406.06-4.123.06s-3.056-.01-4.123-.06c-1.064-.05-1.789-.218-2.427-.465a4.9 4.9 0 0 1-1.772-1.153a4.9 4.9 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.012 15.056 2 14.717 2 12s.01-3.056.06-4.122s.217-1.79.465-2.428a4.9 4.9 0 0 1 1.153-1.772A4.9 4.9 0 0 1 5.45 2.525c.637-.248 1.362-.415 2.427-.465C8.945 2.013 9.284 2 12.001 2"
              />
            </svg>
          </div>

          <div class="bg-youtube px-4 py-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              viewBox="0 0 24 24"
            >
              <g fill="none" fill-rule="evenodd">
                <path
                  d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"
                />
                <path
                  fill="currentColor"
                  d="M12 4c.855 0 1.732.022 2.582.058l1.004.048l.961.057l.9.061l.822.064a3.8 3.8 0 0 1 3.494 3.423l.04.425l.075.91c.07.943.122 1.971.122 2.954s-.052 2.011-.122 2.954l-.075.91l-.04.425a3.8 3.8 0 0 1-3.495 3.423l-.82.063l-.9.062l-.962.057l-1.004.048A62 62 0 0 1 12 20a62 62 0 0 1-2.582-.058l-1.004-.048l-.961-.057l-.9-.062l-.822-.063a3.8 3.8 0 0 1-3.494-3.423l-.04-.425l-.075-.91A41 41 0 0 1 2 12c0-.983.052-2.011.122-2.954l.075-.91l.04-.425A3.8 3.8 0 0 1 5.73 4.288l.821-.064l.9-.061l.962-.057l1.004-.048A62 62 0 0 1 12 4m-2 5.575v4.85c0 .462.5.75.9.52l4.2-2.425a.6.6 0 0 0 0-1.04l-4.2-2.424a.6.6 0 0 0-.9.52Z"
                />
              </g>
            </svg>
          </div>
        </div>
      </div>
      <div class="flex flex-col gap-8">
        <div class="text-2xl font-medium capitalize">Navigation</div>
        <div class="flex flex-col gap-2 capitalize">
          <a href="../index.html">home</a>
          <a href="./About.html">about</a>
          <a href="./Whower.html">Who we are?</a>
          <a href="./Programs.html">Programs</a>
          <a href="./Contact.html">Contact</a>
        </div>
      </div>

      <div class="flex flex-col lg:col-span-2 gap-8">
        <div class="text-2xl font-medium capitalize">Contact us</div>
        <div class="flex flex-col gap-2  cursor-pointer ">
          <div class="capitalize hover:underline">
            4486 Richards Avenue, Modesto CA - 95354
          </div>
          <div class="hover:underline">209-818-6041</div>
          <div class="hover:underline">charity90@gmail.com</div>
        </div>
      </div>

      <div class="flex flex-col col-span-2 gap-8">
        <div class="text-2xl font-medium capitalize">support</div>
        <div class="flex flex-col gap-3">
          <div>When a child gets access to good food, it can change.</div>
          <div
            class="w-fit h-fit px-6 py-3 bg-secondarycolor capitalize transition-all duration-700 delay-150 ease-in-out cursor-pointer font-medium hover:bg-transparent border-transparent hover:border-white border-2"
          >
            join us today
          </div>
        </div>
      </div>
    </div>
    <div class="text-sm text-center pt-2">
      Copyright © 2024 All rights reserved
    </div>
  </footer>
</div>

    <script src="../index.js"></script>
  </body>
</html>
