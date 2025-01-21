<?php include("./includes/header.php"); ?>
<div class="w-full flex flex-col md:flex-row justify-end items-center md:pr-32 text-white md:space-x-8 bg-[#383838] py-4 montserrat">
    <p class="text-white hover:text-[#f6b81d] cursor-pointer montserrat-" aria-label="Email address">
        <a href="mailto:pridesolutions.sales@gmail.com">pridesolutions.sales@gmail.com</a>
    </p>
    <p class="text-white hover:text-[#f6b81d] cursor-pointer montserrat-" aria-label="Phone number">
        <a href="tel:+94777273888">+94 77 727 3888</a>
    </p>
</div>

<div class="w-full md:flex justify-between items-center px-32 md:inline hidden space-x-8 bg-[#1e1e1e] montserrat-">
<div class="w-1/3">
        <a href="./index.php"> <!-- Replace with the desired link -->
            <img src="./assetes/images/Pride logo (5).jpg" alt="Icon 1" class="w-auto">
        </a>
    </div>

    <?php
// Get the current page name dynamically
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="w-full flex justify-between items-center text-white">
  <a href="./index.php" class="text-center text-white px-8 flex items-center justify-center h-14 hover:rounded-lg hover:text-[#f6b81d] <?php echo $current_page == 'index.php' ? 'active' : ''; ?>">HOME</a>
  <a href="./about_us.php" class="text-center text-white px-8 flex items-center justify-center h-14 hover:rounded-lg hover:text-[#f6b81d] <?php echo $current_page == 'about_us.php' ? 'active' : ''; ?>">ABOUT</a>
  <a href="./portfolio.php" class="text-center text-white px-8 flex items-center justify-center h-14 hover:rounded-lg hover:text-[#f6b81d] <?php echo $current_page == 'portfolio.php' ? 'active' : ''; ?>">PORTFOLIO</a>
  <a href="./services.php" class="text-center px-8 text-white flex items-center justify-center h-14 hover:rounded-lg hover:text-[#f6b81d] <?php echo $current_page == 'services.php' ? 'active' : ''; ?>">SERVICES</a>
  <a href="./blog.php" class="text-center px-8 text-white flex items-center justify-center h-14 hover:rounded-lg hover:text-[#f6b81d] <?php echo $current_page == 'blog.php' ? 'active' : ''; ?>">BLOG</a>
  <a href="./contact_us.php" class="text-center text-white flex items-center justify-center h-14 hover:rounded-lg hover:text-[#f6b81d] <?php echo $current_page == 'contact_us.php' ? 'active' : ''; ?>">CONTACT</a>
</div>

<style>
  a.active {
  color: #f6b81d; /* Active link color */
 
}

</style>
</div>
<div class="w-full relative md:hidden bg-[#1e1e1e]">
  <!-- Navbar -->
  <div class="w-full flex justify-between items-center p-4 text-white">
    <a href="./index.php"> <!-- Replace with the desired link -->
      <img src="./assetes/images/Pride logo (6).jpg" alt="Icon 1" class="w-auto">
    </a>
    <!-- Menu Toggle Button -->
    <button
      id="menuToggle"
      class="md:hidden focus:outline-none"
    >
      <!-- Hamburger Icon -->
      <svg
        id="hamburgerIcon"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        class="h-6 w-6"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4 6h16M4 12h16m-7 6h7"
        />
      </svg>
      <!-- Close Icon -->
      <svg
        id="closeIcon"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        class="h-6 w-6 hidden"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M6 18L18 6M6 6l12 12"
        />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div
    id="mobileMenu"
    class="w-full hidden flex-col space-y-2 md:hidden bg-gray-700 text-white px-4 py-2"
  >
    <a
      href="./index.php"
      class="block px-4 py-2 rounded hover:bg-gray-600 hover:text-[#f6b81d]"
    >HOME</a>
    <a
      href="./about_us.php"
      class="block px-4 py-2 rounded hover:bg-gray-600 hover:text-[#f6b81d]"
    >ABOUT</a>
    <a
      href="./portfolio.php"
      class="block px-4 py-2 rounded hover:bg-gray-600 hover:text-[#f6b81d]"
    >PORTFOLIO</a>
    <a
      href="./services.php"
      class="block px-4 py-2 rounded hover:bg-gray-600 hover:text-[#f6b81d]"
    >SERVICES</a>
    <a
      href="./blog.php"
      class="block px-4 py-2 rounded hover:bg-gray-600 hover:text-[#f6b81d]"
    >BLOG</a>
    <a
      href="./contact_us.php"
      class="block px-4 py-2 rounded hover:bg-gray-600 hover:text-[#f6b81d]"
    >CONTACT</a>
  </div>
</div>

<script>
  // JavaScript to handle menu toggle
  const menuToggle = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  const hamburgerIcon = document.getElementById('hamburgerIcon');
  const closeIcon = document.getElementById('closeIcon');

  menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    hamburgerIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });
</script>
