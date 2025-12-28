<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style.css">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login Portofolio | 2026</title>
</head>

<body class="overflow-hidden h-dvh">
  <?php include('controller.php');

  if (isset($_POST['login'])) {
    login();
  } ?>
  <div id="bg-grid"></div>
  <section id="login" class="h-dvh overflow-hidden">
    <div class="flex justify-center items-center h-dvh overflow-hidden">
      <div class="grid grid-cols-1 lg:grid-cols-2 w-full max-w-5xl">

        <div class="min-h-[60dvh] hidden
                  bg-[#0062ff]
                  rounded-s-xl
                  shadow-[0_6px_0px_rgba(0,0,0,0.25)]
                  relative overflow-hidden
                  md:flex items-center justify-center">

          <div class="absolute inset-0
                    bg-[linear-gradient(rgba(255,255,255,0.14)_1px,transparent_1px),
                        linear-gradient(90deg,rgba(255,255,255,0.14)_1px,transparent_1px)]
                    bg-[size:36px_36px]">
          </div>

          <div class="absolute inset-0
                    bg-[radial-gradient(circle_at_50%_30%,rgba(255,255,255,0.25),transparent_60%)]">
          </div>

          <script type="module"
            src="https://unpkg.com/@splinetool/viewer@1.12.27/build/spline-viewer.js">
          </script>

          <div class="relative w-full h-96 max-h-96 flex items-center justify-center overflow-hidden">
            <spline-viewer
              class="w-full h-full pointer-events-none"
              url="https://prod.spline.design/o2E9Xcjtpcp13M6c/scene.splinecode">
            </spline-viewer>
          </div>

        </div>

        <div class="h-auto bg-white pt-10 p-10 rounded-e-xl shadow-[0_6px_0px_rgba(0,0,0,0.25)]">
          <h1 class="text-center text-3xl text-[#0062ff] font-bold">
            Login <i class="fa-solid fa-graduation-cap ms-1"></i>
          </h1>

          <a href="index.html"
            class="absolute top-6 left-6 flex items-center gap-2
          text-blue-600 hover:text-blue-800 transition">
            <i class="fa-solid fa-arrow-left"></i>
            <span class="text-sm font-medium">Back</span>
          </a>

          <form method="POST" class="max-w-sm mx-auto mt-10">

            <label class="block mb-2.5 text-sm font-medium">Username</label>
            <div class="flex">
              <input type="text" name="username"
                class="rounded-none rounded-s-lg w-full px-3 py-2.5 border focus:border-blue-600"
                placeholder="elonmusk">
              <span class="inline-flex items-center px-4 border rounded-e-lg">
                <i class="fa-solid fa-graduation-cap"></i>
              </span>
            </div>

            <label class="block mb-2.5 text-sm font-medium mt-4">Password</label>
            <div class="flex">
              <input
                name="password"
                id="password"
                type="password"
                class="rounded-none rounded-s-lg w-full px-3 py-2.5 border focus:border-blue-600"
                placeholder="123">

              <span
                id="togglePassword"
                class="inline-flex items-center px-4 border rounded-e-lg cursor-pointer select-none">
                <i id="icon" class="fa-solid fa-eye"></i>
              </span>
            </div>


            <div class="flex items-start mt-5">
              <input type="checkbox" name="agree" class="w-4 h-4 mt-1 border border-neutral-200">
              <p class="ms-2 text-sm font-medium">
                I agree with the
                <a href="#" class="text-blue-600 hover:underline">terms</a>
              </p>
            </div>

            <button name="login" type="submit"
              class="group relative flex items-center justify-center gap-3 mt-6 w-full
                   bg-[#0062ff] text-white px-6 py-3.5 rounded-lg
                   hover:bg-[#0158e6] transition">
              <span>Login</span>
              <i class="fa-solid fa-arrow-right transition group-hover:translate-x-1"></i>
            </button>

            <p class="ms-2 text-sm font-medium text-center mt-5">
              Belum punya akun ?
              <a href="Register.php" class="text-blue-600 hover:underline">Daftar Sekarang</a>
            </p>

          </form>
        </div>

      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
  <script>
    const toggle = document.getElementById("togglePassword");
    const password = document.getElementById("password");
    const icon = document.getElementById("icon");

    toggle.addEventListener("click", () => {
      if (password.type === "password") {
        password.type = "text";
        icon.classList.replace("fa-eye", "fa-eye-slash");
      } else {
        password.type = "password";
        icon.classList.replace("fa-eye-slash", "fa-eye");
      }
    });
  </script>
</body>

</html>