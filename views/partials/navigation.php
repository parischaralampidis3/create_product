<nav class="bg-blue-300 mt-0">

  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">

      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">


        <div class="text-left flex items-center">
            <h1 class="font-bold text-white text-xl">Φόρμα Καταχώρησης Προϊόντος</h1>
        </div>


        <div class="mx-12 hidden md:block">    
          <div class="flex text-xl items-baseline space-x-8">
            <a href="/" class=" text-lg text-gray-700 rounded-md px-3 py-2 text-lg font-medium" aria-current="page">Αρχική</a>
            <a href="products.php" class="font-bold text-gray-700 hover:font-bold hover:text-blue-500 rounded-md px-3 py-2 text-lg font-medium">Λίστα προϊόντων</a>
          </div>
        </div>

      </div>


            <div class="mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                        class="burger-btn inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" loading="lazy">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" loading="lazy">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
            </div>

      </div>


    </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:block toggler md:hidden" id="mobile-menu">

    <div class="flex flex-col px-2 pb-3 pt-2 sm:px-3 ">
        <a href="/" class="text-base text-gray-700 block px-3 py-2 text-base font-medium" aria-current="page">Αρχική</a>
        <a href="products.php" class="text-base text-gray-700 hover:text-blue-500 hover:font-bold block  rounded-md px-3 py-2 text-base font-medium">Λίστα προϊόντων</a>
    </div>
  </div>
</nav>


<script>
    let burgerButton = document.querySelector(".burger-btn");
    let togglerBox = document.querySelector(".toggler");

    burgerButton.addEventListener("click", toggleMobileMenu);

    function toggleMobileMenu() {
        if (togglerBox.style.display === "none" || togglerBox.style.display === "") {
            togglerBox.style.display = "block";
        } else {
            togglerBox.style.display = "none";
        }
    }

    // Preserve the menu state across page reloads
    window.addEventListener("DOMContentLoaded", () => {
        const menuState = localStorage.getItem("menuState");
        if (menuState === "open") {
            togglerBox.style.display = "none";
        } else {
            togglerBox.style.display = "block";
        }
    });


    window.addEventListener("beforeunload", () => {
        if (togglerBox.style.display === "block") {
            localStorage.setItem("menuState", "open");
        } else {
            localStorage.setItem("menuState", "closed");
        }
    });



function checkScreenWidth() {
    if (window.innerWidth >= 768) {
       
        togglerBox.style.display = "none";
    }
}

// Call the function on page load
window.addEventListener("DOMContentLoaded", checkScreenWidth);

// Call the function on window resize
window.addEventListener("resize", checkScreenWidth);
</script>