<?php include("./includes/header.php"); ?>
<?php include("./includes/nav_inn.php"); ?>


<div class="relative w-full h-full">
<div class="w-full h-[300px] bg-cover bg-center" style="background-image: url('./assetes/images/Arpico Bedroom Stall _web2.jpg');">

  <!-- Text Overlay -->
  <div class="w-full h-[300px] flex flex-col items-center justify-center bg-black bg-opacity-60 space-y-4">
    <div class="w-auto border-b-2 border-[#f6b81d]">
    <p class="text-white md:text-6xl text-4xl montserrat- font-bold" style="font-weight: bold;">Our Services</p>
    </div>
      <p class="text-[#f6b81d] text-xl montserrat-">We would love to hear from you</p>
  </div>
  </div>
  <a 
  href="https://wa.me/+94777273888" 
  target="_blank" 
  rel="noopener noreferrer" 
  class="whatsapp-button fixed bottom-4 left-4 flex items-center z-10 rounded-full bg-[#f6b81d] shadow-md p-2 space-x-2 cursor-pointer"
>
    <p><i class="ri-whatsapp-line"></i></p>
    <span class="text-gray-800 font-medium">WhatsApp us</span>
</a>

<div class="whatsapp-button fixed bottom-4 right-4 z-10 flex flex-col items-center bg-[#f6b81d] rounded-full shadow-md p-2 cursor-pointer space-y-2">
    <a href="https://web.facebook.com/StallBuilders.PrideExpoSolutions" target="_blank" rel="noopener noreferrer">
        <p><i class="ri-facebook-circle-fill"></i></p>
    </a>
    <a href="https://www.instagram.com/pride.expo/?utm_source=qr&igsh=MXFqdms2cTJ2Y3M4YQ%3D%3D" target="_blank" rel="noopener noreferrer">
        <p><i class="ri-instagram-fill"></i></p>
    </a>
    <a href="https://twitter.com/YourProfile" target="_blank" rel="noopener noreferrer">
        <p><i class="ri-twitter-x-line"></i></p>
    </a>
    <a href="https://youtube.com/YourChannel" target="_blank" rel="noopener noreferrer">
        <p><i class="ri-youtube-fill"></i></p>
    </a>
</div>

<!-- Button to Open Modal -->
<div 
    class="whatsapp-button fixed bottom-40 right-4 z-10 flex items-center rounded-full bg-[#f6b81d] shadow-md p-2 space-x-2 cursor-pointer"
    onclick="openModal()"
>
    <span class="text-gray-800 font-medium">GET A QUOTE</span>
</div>

<!-- Modal Container -->
<div 
    id="modalContainer1" 
    class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50"
>
    <!-- Modal Content -->
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg relative p-6">
        <!-- Close Button -->
        <button 
            class="absolute top-2 right-2 text-gray-500 hover:text-gray-800"
            onclick="closeModal()"
        >
            X
        </button>
        <!-- Include PHP File -->
        <?php include 'contact_popup.php'; ?>
    </div>
</div>
</div>
</div>
<div class="w-full flex flex-col justify-center items-center py-8 md:px-32">
<p class=" md:text-2xl text-center">  We provide a range of exhibition booth designs including bespoke custom stands,
modular booths, double-decker stands, portable stands, country pavilion stands and many more.</p>
</div>
<div class="w-full grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6">
    <!-- Card 1 -->
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-1">
        <img
            src="./assetes/images/Arpico Bedroom Stall _web1.jpg"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Arpico Mattress</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-2">
        <img
            src="./assetes/images/24 Street -web1.jpg"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white"> 24 Street Clothing</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-3">
        <img
            src="./assetes/images/web1.jpg"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Englander Mattress</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-4">
        <img
            src="./assetes/images/Pragmatic International_web1.jpg"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white"> Pragmatic International</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-5">
        <img
            src="./assetes/images/Fort resorts.jpg"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white"> Fort Resorts</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-6">
        <img
            src="./assetes/images/3M (1) (1).jpg"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">3M Stall</p>
        </div>
    </div>
    <!-- Repeat other cards -->
</div>

<!-- Gallery Modal -->
<div id="galleryModal" class="fixed inset-0 bg-black bg-opacity-90 hidden flex justify-center items-center z-50">
    <div class="relative w-full max-w-screen-md h-screen flex items-center justify-center">
        <!-- Close Button -->
        <button
            id="closeGallery"
            class="absolute top-4 right-4 text-white text-3xl font-bold"
        >
            ✖
        </button>

        <!-- Image Display -->
        <img
            id="modalImage"
            src=""
            alt="Gallery Image"
            class="max-w-full max-h-full object-contain"
        />

        <!-- Navigation -->
        <button
            id="prevImage"
            class="absolute left-4 text-white text-4xl font-bold bg-black bg-opacity-50 p-2 rounded-full"
        >
            ⬅
        </button>
        <button
            id="nextImage"
            class="absolute right-4 text-white text-4xl font-bold bg-black bg-opacity-50 p-2 rounded-full"
        >
            ➡
        </button>
    </div>
</div>
  <div class="bg-[#383838] montserrat- py-10 mt-16">
    <div class="w-full flex justify-center items-center">
    <p class="text-5xl text-[#f6b81d] text-center" style="font-size: 2.25rem; font-weight: bold;">PRIDE EXPO AT A GLANCE</p>
    </div>
  <div class="w-full mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
    <!-- Exhibition Organisation -->
    <div class="text-center text-white">
      <div class="flex justify-center mb-4">
        <img src="./assetes/images/Web Icons and logos-02.png" class="object-cover h-full">
      </div>
      <h3 class="text-xl font-bold">Exhibition</h3>
      <h3 class="text-xl font-bold mb-4">Organisation</h3>
      <ul class="space-y-2 text-sm text-[#CFD0CE]">
        <li>• Construction & Floor Management</li>
        <li>• Logistic Management</li>
        <li>• Development of Exhibition Concept</li>
      </ul>
    
    </div>

    <!-- Creative Department -->
    <div class="text-center text-white md:border-l border-white pl-8">
      <div class="flex justify-center mb-4">
        <img src="./assetes/images/Web Icons and logos-03.png" class="object-cover h-full">
      </div>
      <h3 class="text-xl font-bold">Creative</h3>
      <h3 class="text-xl font-bold mb-4">Department</h3>
      <ul class="space-y-2 text-gray-300 text-sm">
        <li>• Exhibitions and Events Designs</li>
        <li>• 3D Visualization</li>
        <li>• Graphic Designs</li>
        <li>• Branding and Advertising</li>
        <li>• Digital Printing</li>
      </ul>
    </div>

    <!-- End To End Rental Solutions -->
    <div class="text-center text-white md:border-l border-white pl-8">
      <div class="flex justify-center mb-4">
        <img src="./assetes/images/Web Icons and logos-04.png" class="object-cover h-full">
      </div>
      <h3 class="text-xl font-bold">End To End</h3>
      <h3 class="text-xl font-bold mb-4">Rental Solutions</h3>
      <ul class="space-y-2 text-gray-300 text-sm">
        <li>• Furniture</li>
        <li>• LED TV and Monitor</li>
        <li>• Sounds & Lighting</li>
        <li>• Computer & Accessories</li>
        <li>• Stands and Racks</li>
      </ul>
    </div>

    <!-- Event Solutions -->
    <div class="text-center text-white md:border-l border-white pl-8">
      <div class="flex justify-center mb-4">
        <img src="./assetes/images/Web Icons and logos-05.png" class="object-cover h-full">
      </div>
      <h3 class="text-xl font-bold">Event</h3>
      <h3 class="text-xl font-bold mb-4">Solutions</h3>
      <ul class="space-y-2 text-gray-300 text-sm">
      <li>• Stage Constructions</li>
        <li>• BackDrops</li>
        <li>• LED Video Wall</li>
        <li>• Pro Light System</li>
        <li>• Pro Sound System</li>
      </ul>
    </div>
  </div>
</div>
<div class="w-full flex flex-col justify-center items-center py-8 montserrat- space-y-4">
<p class="text-4xl text-[#f6b81d]" style="font-size: 2.25rem; font-weight: bold;">WORK PROCESS</p>
<p class="md:text-5xl text-4xl text-center md:px-32">Turnkey stand solutions for all your needs</p>
</div>
<div class="bg-white py-12 montserrat-">
  <div class="container mx-auto px-6 md:px-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 relative">
      <!-- Step 1 -->
      <div class="text-center relative">
        <div class="flex justify-center items-center mb-4">
          <img src="./assetes/images/Web Icons and logos-06.png" alt="Icon 1" class="h-16 w-16">
        </div>
        <h3 class="text-lg font-bold text-yellow-500">01. Brief and Response</h3>
        <p class="text-gray-600 mt-4">
          At the start of the project, a dedicated manager will assist you in achieving your brand requirements and goals.
        </p>
      </div>

      <!-- Arrow -->
      <div class="hidden lg:block absolute top-0 left-1/3 transform -translate-y-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-dasharray="4 2" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-4-4l4 4m-4 4l4-4" />
        </svg>
      </div>

      <!-- Step 2 -->
      <div class="text-center relative">
        <div class="flex justify-center items-center mb-4">
          <img src="./assetes/images/Web Icons and logos-07.png" alt="Icon 2" class="h-16 w-16">
        </div>
        <h3 class="text-lg font-bold text-yellow-500">02. 3D Visuals of your Stand</h3>
        <p class="text-gray-600 mt-4">
          Our experienced designers will passionately create a 3D design that can be viewed from every angle.
        </p>
      </div>

      <!-- Arrow -->
      <div class="hidden lg:block absolute top-0 left-2/3 transform -translate-y-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-dasharray="4 2" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-4-4l4 4m-4 4l4-4" />
        </svg>
      </div>

      <!-- Step 3 -->
      <div class="text-center relative">
        <div class="flex justify-center items-center mb-4">
          <img src="./assetes/images/Web Icons and logos-08.png" alt="Icon 3" class="h-16 w-16">
        </div>
        <h3 class="text-lg font-bold text-yellow-500">03. The Client’s Opinion Matters</h3>
        <p class="text-gray-600 mt-4">
          Suggest any modifications, and we’ll ensure the final stall reflects your vision.
        </p>
      </div>

     <!-- Step 1 -->
     <div class="text-center relative">
        <div class="flex justify-center items-center mb-4">
          <img src="./assetes/images/Web Icons and logos-11.png" alt="Icon 1" class="h-16 w-16">
        </div>
        <h3 class="text-lg font-bold text-yellow-500"> 04. Construction of stands</h3>
        <p class="text-gray-600 mt-4">
          At the start of the project, a dedicated manager will assist you in achieving your brand requirements and goals.
        </p>
      </div>

      <!-- Arrow -->
      <div class="hidden lg:block absolute top-1/2 left-1/3 transform -translate-y-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-dasharray="4 2" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-4-4l4 4m-4 4l4-4" />
        </svg>
      </div>
      <!-- Step 1 -->
      <div class="text-center relative">
        <div class="flex justify-center items-center mb-4">
          <img src="./assetes/images/Web Icons and logos-10.png" alt="Icon 1" class="h-16 w-16">
        </div>
        <h3 class="text-lg font-bold text-yellow-500">05. Installation & On-Site Supervision</h3>
        <p class="text-gray-600 mt-4">
          At the start of the project, a dedicated manager will assist you in achieving your brand requirements and goals.
        </p>
      </div>

      <!-- Arrow -->
      <div class="hidden lg:block absolute top-1/2 left-2/3 transform -translate-y-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-dasharray="4 2" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-4-4l4 4m-4 4l4-4" />
        </svg>
      </div>
      <!-- Step 1 -->
      <div class="text-center relative">
        <div class="flex justify-center items-center mb-4">
          <img src="./assetes/images/Web Icons and logos-09.png" alt="Icon 1" class="h-16 w-16">
        </div>
        <h3 class="text-lg font-bold text-yellow-500">06. Dismantling and Removal</h3>
        <p class="text-gray-600 mt-4">
          At the start of the project, a dedicated manager will assist you in achieving your brand requirements and goals.
        </p>
      </div>

      <!-- Arrow -->
      <div class="hidden lg:block absolute top-1/2 left-1/3 transform -translate-y-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-dasharray="4 2" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-4-4l4 4m-4 4l4-4" />
        </svg>
      </div>
    </div>
  </div>
</div>
<div class="w-full px-4 py-12 overflow-hidden text-center">
  <h3 class="text-sm font-semibold text-blue-500 uppercase montserrat-">Clients Testimonial</h3>
  <h2 class="text-2xl font-bold text-gray-900 mt-2 montserrat-">We Love Our Clients</h2>
  <div class="relative mt-8 w-full overflow-hidden">
  <!-- Testimonial Slides -->
  <div id="testimonial-slides" class="flex transition-transform duration-500 montserrat-">
    <!-- Slide 1 -->
    <div class="flex-shrink-0 w-full h-auto"> <!-- Adjust height based on content -->
      <div class="flex flex-col items-center">
        <img
          src="./assetes/images/test1.jpg"
          alt="Client image"
          class="w-20 h-20 rounded-full shadow-md"
        />
        <p class="mt-4 md:text-lg italic text-gray-600 md:px-16">
          We had the pleasure of working with Pride Solution Stall Builders for both Techno 2023 and Techno 2024 exhibitions. Their support throughout the entire process was truly exceptional, and the stalls they designed for us perfectly captured our vision. A huge thank you to the team for their dedication and professionalism!
        </p>
        <h4 class="mt-4 font-medium text-gray-800">Hasith gunathilake</h4>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="flex-shrink-0 w-full h-auto"> <!-- Adjust height based on content -->
      <div class="flex flex-col items-center">
        <img
          src="./assetes/images/test2.jpg"
          alt="Client image"
          class="w-20 h-20 rounded-full shadow-md"
        />
        <p class="mt-4 md:text-lg italic text-gray-600 md:px-16">
          We had an excellent experience with Pride Expo Solutions during the Pro Food and Hotel Show exhibitions. Their creativity, professionalism, and attention to detail resulted in beautifully designed stalls that perfectly showcased our brand. The team was responsive, efficient, and ensured everything was completed on time. Their work not only attracted many visitors but also exceeded our expectations. Highly recommended for anyone seeking top-notch stall design and construction services!
        </p>
        <h4 class="mt-4 font-medium text-gray-800">Dives foods</h4>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="flex-shrink-0 w-full h-auto"> <!-- Adjust height based on content -->
      <div class="flex flex-col items-center">
        <img
          src="./assetes/images/test3.jpg"
          alt="Client image"
          class="w-20 h-20 rounded-full shadow-md"
        />
        <p class="mt-4 md:text-lg italic text-gray-600 md:px-16">
          When I needed a stall at the last minute, I reached out to Leo, the owner of Pride Solutions, and he assured me that he would make it happen. Not only did he deliver on his promise, but he exceeded all my expectations.

          The stall he created was immaculately designed, with perfect lighting that added an elegant touch to the overall look. What truly sets Pride Solutions apart is their flexibility and friendly approach. Leo and his team were an absolute delight to work with, and they went above and beyond to make sure everything was just right.

          I was particularly impressed by their incredible flexibility and patience. Despite my numerous last-minute requests and changes, Leo and his team handled them all with a smile.

          If you're looking for the best exhibition stall solutions, look no further than Pride Solutions. I wholeheartedly recommend them to anyone in need of a top-notch stall that will leave a lasting impression. Thank you, Pride Solutions, for making my exhibition a huge success!
        </p>
        <h4 class="mt-4 font-medium text-gray-800">Chamindu menaka mihiranga</h4>
      </div>
    </div>
  </div>

  <!-- Navigation Arrows -->
  <button
    id="prev-btn"
    class="absolute top-1/2 left-0 transform -translate-y-1/2 w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center shadow-md hover:bg-gray-200"
  >
    <p><i class="ri-arrow-left-s-line"></i></p>
  </button>
  <button
    id="next-btn"
    class="absolute top-1/2 right-0 transform -translate-y-1/2 w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center shadow-md hover:bg-gray-200"
  >
    <p><i class="ri-arrow-right-s-line"></i></p>
  </button>
</div>


  <!-- Pagination Dots -->
  <div class="mt-6 flex justify-center space-x-2">
    <span
      data-slide="0"
      class="pagination-dot w-3 h-3 bg-blue-500 rounded-full shadow-md cursor-pointer"
    ></span>
    <span
      data-slide="1"
      class="pagination-dot w-3 h-3 bg-gray-300 rounded-full shadow-md cursor-pointer"
    ></span>
    <span
      data-slide="2"
      class="pagination-dot w-3 h-3 bg-gray-300 rounded-full shadow-md cursor-pointer"
    ></span>
  </div>
</div>
<div class="bg-gray-300 w-full flex flex-col justify-center items-center montserrat- pt-8">
    <h2 class="text-center text-5xl font-bold mb-6 montserrat-" style="font-size: 2.25rem; font-weight: bold;">CONTACT US</h2>
    <div class="w-full mx-auto bg-[#f6b81d] px-8 py-8 md:px-32">
        <form action="https://api.web3forms.com/submit" method="POST" class="flex flex-col space-y-6 overflow-visible relative">
            <!-- Row 1: Full Name & Email -->

            <input type="hidden" name="access_key" value="1f82c699-3a12-4df2-9875-3cbd9eb17c15">
     
            <input type="hidden" name="page" value="services">
            <div class="w-full flex md:flex-row flex-col md:space-x-8 space-y-6 md:space-y-0">
                <input 
                    type="text" 
                    name="name"
                    placeholder="Full Name" 
                    class="p-4 md:w-1/2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" 
                    required 
                />
                <input 
                    type="email" 
                    name="email"
                    placeholder="Your Email" 
                    class="p-4 md:w-1/2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" 
                    required 
                />
            </div>

            <!-- Row 2: Phone Number, City, and Exhibition Name -->
            <div class="w-full flex md:flex-row flex-col md:space-x-8 space-y-6 md:space-y-0">
                <input 
                    type="tel" 
                    name="tel"
                    placeholder="Your Phone Number" 
                    class="p-4 md:w-1/3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" 
                    required 
                />
                <input 
                    type="text" 
                    name="city"
                    placeholder="Your City" 
                    class="p-4 md:w-1/3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" 
                    required 
                />
                <input 
                    type="text" 
                    name="Exhibition_Name"
                    placeholder="Exhibition Name" 
                    class="p-4 md:w-1/3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" 
                    required 
                />
            </div>

            <!-- Row 3: File Upload & Message -->
            <div class="w-full flex md:flex-row flex-col md:space-x-8 space-y-6 md:space-y-0">
   
                <textarea 
                    placeholder="Your Message" 
                    name="message"
                    class="md:w-1/2 w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" 
                    required
                ></textarea>
            </div>
            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

            <!-- Submit Button -->
            <div class="w-full text-right">
                <button 
                    type="submit" 
                    class="bg-yellow-500 text-white font-bold py-2 px-6 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-600"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    function updateFileName() {
        const input = document.getElementById('file-input');
        const fileName = document.getElementById('file-name');
        fileName.textContent = input.files.length > 0 ? input.files[0].name : 'No file chosen';
    }
</script>
<div class="w-full md:px-32 px-8 bg-[#f6b81d] py-16">
    <p class="text-justify text-white montserrat-"> Design Stand, Exhibition Stand, Exhibition Stall Design, Exhibition Stand Builders, Exhibition Stall, Expo Portable Displays, Exhibition Stand Design and Build, Expo Stand, Stand Builders, Stand 
Contractors, Modular Stand Design, Modular Exhibition Stand Design, Stall Booth Design, Exhibition Stand Booth, Portable Event Booth, Expo Stands For, Best Stand Design, 
Booth Design, Booth Display Design, Small Stall Design, Booth Designers, Expo Stand Designer, Exhibition Booth Design Company, Best Expo Booth Design, Expo Display Design, 
Custom Built Exhibition Standee, Expo Stand Design, Exhibition Stall Designs, Expo Booth Design, Portable Displays, Portable Booth Displays, Event Stand Design, Amazing Exhibition Stands, 
Small Exhibition Booth Designs, Creative Exhibition Stand Designs, Exhibition Stand, Exhibition Design Stand, Event Stand Builders, Innovative Booth Design</p>
</div>
<?php include("./includes/footer.php"); ?>

<script>
  const slides = document.getElementById("testimonial-slides");
  const dots = document.querySelectorAll(".pagination-dot");
  const prevBtn = document.getElementById("prev-btn");
  const nextBtn = document.getElementById("next-btn");
  let currentSlide = 0;

  const updateSlide = () => {
    slides.style.transform = `translateX(-${currentSlide * 100}%)`;
    dots.forEach((dot, index) => {
      dot.classList.toggle("bg-blue-500", index === currentSlide);
      dot.classList.toggle("bg-gray-300", index !== currentSlide);
    });
  };

  prevBtn.addEventListener("click", () => {
    currentSlide = (currentSlide - 1 + dots.length) % dots.length;
    updateSlide();
  });

  nextBtn.addEventListener("click", () => {
    currentSlide = (currentSlide + 1) % dots.length;
    updateSlide();
  });

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      currentSlide = index;
      updateSlide();
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".card");
    const modal = document.getElementById("galleryModal");
    const closeGallery = document.getElementById("closeGallery");
    const modalImage = document.getElementById("modalImage");
    const prevImage = document.getElementById("prevImage");
    const nextImage = document.getElementById("nextImage");

    // Define galleries with their respective images
    const galleries = {
        "gallery-1": [
            "./assetes/images/Arpico Bedroom Stall _web1.jpg",
            "./assetes/images/Arpico Bedroom Stall _web2.jpg",
            "./assetes/images/Arpico Bedroom Stall _web3.jpg",
            "./assetes/images/Arpico Bedroom Stall _web4.jpg",

        ],
        "gallery-2": [
          "./assetes/images/24 Street -web1.jpg",
          "./assetes/images/24 Street -web2.jpg",
          "./assetes/images/24 Street -web3.jpg",
          "./assetes/images/24 Street -web4.jpg",
          "./assetes/images/24 Street -web5.jpg",

        ],
        "gallery-3": [
          "./assetes/images/web1.jpg",
          "./assetes/images/web2.jpg",
          "./assetes/images/web3.jpg",
          "./assetes/images/web4.jpg",
          "./assetes/images/web5.jpg",


        ],
        "gallery-4": [
          "./assetes/images/Pragmatic International_web1.jpg",
          "./assetes/images/Pragmatic International_web2.jpg",
          "./assetes/images/Pragmatic International_web3.jpg",
          "./assetes/images/Pragmatic International_web4.jpg",

        ],
        "gallery-5": [
          "./assetes/images/web1 (1).jpg",
          "./assetes/images/web2 (1).jpg",
          "./assetes/images/web3 (1).jpg",
          "./assetes/images/web4 (1).jpg",

        ],
        "gallery-6": [
          "./assetes/images/3M (1) (1).jpg",
          "./assetes/images/3M (1)web.jpg",
          "./assetes/images/3M (2) web.jpg",
        ],
    };

    let currentGallery = [];
    let currentIndex = 0;

    // Open modal and display the first image of the clicked gallery
    cards.forEach((card) => {
        card.addEventListener("click", () => {
            const galleryKey = card.getAttribute("data-gallery");
            currentGallery = galleries[galleryKey];
            currentIndex = 0;
            modalImage.src = currentGallery[currentIndex];
            modal.classList.remove("hidden");
        });
    });

    // Close modal
    closeGallery.addEventListener("click", () => {
        modal.classList.add("hidden");
    });

    // Navigate to previous image
    prevImage.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = currentGallery.length - 1; // Loop to last image
        }
        modalImage.src = currentGallery[currentIndex];
    });

    // Navigate to next image
    nextImage.addEventListener("click", () => {
        if (currentIndex < currentGallery.length - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // Loop to first image
        }
        modalImage.src = currentGallery[currentIndex];
    });
});

</script>
<script>
  function openModal() {
    document.getElementById('modalContainer1').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('modalContainer1').classList.add('hidden');
}

</script>
<style>
  #modalContainer.hidden {
    display: none;
}

</style>

<style>
  .slider-container {
    width: 100%;
    height: 100vh;
    position: relative;
    overflow: hidden;
}

.slider {
    display: flex;
    width: 300%; /* Adjust based on the number of sections */
    transform: translateX(0); /* Initial position */
}

</style>
   