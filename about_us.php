<?php include("./includes/header.php"); ?>
<?php include("./includes/nav_inn.php"); ?>

<div class="w-full flex flex-col justify-center items-center">
<div class="relative w-full h-full">
<div class="w-full h-[300px] bg-cover bg-center" style="background-image: url('./assetes/images/bg-2.jpg');">

  <!-- Text Overlay -->
  <div class="w-full h-[300px] flex flex-col items-center justify-center bg-black bg-opacity-40 space-y-8">
      <p class="text-white md:text-6xl text-4xl montserrat-" style="font-weight: bold;">About Us</p>
  </div>
  </div>
  <a 
  href="https://wa.me/+94777273888" 
  target="_blank" 
  rel="noopener noreferrer" 
  class="whatsapp-button fixed bottom-4 left-4 flex items-center z-10 rounded-full bg-[#f6b81d] shadow-md p-2 space-x-2 cursor-pointer"
>
    <p><i class="ri-whatsapp-line"></i></p>
    <span class="text-gray-800 font-medium montserrat-">WhatsApp us</span>
</a>

<div class="whatsapp-button fixed bottom-4 right-4 z-10 flex flex-col items-center bg-[#f6b81d] rounded-full shadow-md p-2 cursor-pointer space-y-2">
    <a href="https://web.facebook.com/StallBuilders.PrideExpoSolutions" target="_blank" rel="noopener noreferrer">
        <p><i class="ri-facebook-circle-fill"></i></p>
    </a>
    <a href="https://www.instagram.com/pride.expo?utm_source=qr&igsh=MXFqdms2cTJ2Y3M4YQ==" target="_blank" rel="noopener noreferrer">
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
    <span class="text-gray-800 font-medium montserrat-">GET A QUOTE</span>
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
<div class="w-full flex flex-col justify-center items-center montserrat- py-8 md:px-32 px-8">
<p class=" md:text-2xl text-center">Pride Expo Solutions is an experienced exhibition stand design and build agency that focuses on brand building via 
below-the-line marketing platforms. With an experienced and skilled team and a client-centric approach we are experts in 
custom-built exhibition stands, as well as modular display stands for conventions and conferences. 
From building complex expo stands to customising small display kits, we can serve you 
anywhere in Sri Lanka.</p>

    
</div>
<div class="w-full flex flex-col justify-center items-center montserrat- space-y-4 pb-8">
    <p class="text-3xl">OUR CLIENTELE</p>
<div class="grid grid-cols-3 md:grid-cols-8 gap-0 w-full overflow-hidden md:px-32 px-8">
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-13.png" class="h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-14.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-15.png" class="h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-16.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-17.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-18.png" class="h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-19.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-20.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-21.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-22.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-23.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-24.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-25.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-26.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-27.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-28.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-29.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-30.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-31.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-32.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-35.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-36.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-36.png" class="object-cover h-full">
        </div>
        <div class="w-full border border-black">
        <img src="./assetes/images/Web Icons and logos-36.png" class="object-cover h-full">
        </div>
        
        
    </div>
</div>
<div class="w-full bg-[#d2d2d2] py-8 flex flex-col justify-center items-center md:px-32 space-y-4 border-t-4 border-[#f6b81d]">
<div class="flex justify-center mb-4">
        <img src="./assetes/images/Web Icons and logos-12.png" class="object-cover h-full">
      </div>
    <p class="md:text-4xl text-xl font-bold montserrat- text-center">FREE CONSULTANCY FOR A HOLISTIC SOLUTIONS</p>
    <p class="md:text-xl text-center montserrat- md:px-0 px-4"> Booked a space at an upcoming expo in Sri Lanka? Looking for someone to guide you through the options when it comes to exhibition stand design and fabrication? 
We give free consultation to help you understand expo stand solutions like custom stand designs, modular exhibition systems, portable displays and even technology ideas 
for making your exhibition booth an experience zone.</p>
        <button
          type="submit"
          id="openModal"
          class="px-6 py-3 montserrat- text-white transform transition-transform duration-300 hover:scale-110 font-medium bg-[#383838] rounded-md hover:from-blue-600 hover:to-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Talk to an expert
        </button>
         <!-- Modal Container -->
    <div id="modalContainer" class="fixed inset-0 z-10 flex justify-center items-center bg-black bg-opacity-50 hidden">
        <!-- Modal Content -->
        <div id="modalContent" class="bg-white rounded-lg shadow-lg w-full max-w-lg">
            <?php include 'contact_popup.php'; ?>
        </div>
    </div>
</div>
<div class="w-full px-4 py-12 overflow-hidden text-center montserrat-">
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
     
            <input type="hidden" name="page" value="About Us">
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
</div>
<?php include("./includes/footer.php"); ?>
<script>
        // JavaScript to handle modal open/close
        document.getElementById('openModal').addEventListener('click', function() {
            document.getElementById('modalContainer').classList.remove('hidden');
        });

        document.addEventListener('click', function(e) {
            if (e.target.id === 'modalContainer') {
                document.getElementById('modalContainer').classList.add('hidden');
            }
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