<?php include("./includes/header.php"); ?>
<?php include("./includes/nav_inn.php"); ?>

<div class="relative w-full h-full">
<div class="w-full h-[300px] bg-cover bg-center" style="background-image: url('./assetes/images/Sala Enterprises_web2.jpg');">

  <!-- Text Overlay -->
  <div class="w-full h-[300px] flex flex-col items-center justify-center bg-black bg-opacity-60 space-y-4">
    <div class="w-auto border-b-2 border-[#f6b81d]">
    <p class="text-white md:text-6xl text-4xl montserrat-" style="font-weight: bold;">Our Portfolio</p>
    </div>
      <p class="text-[#f6b81d] text-xl montserrat-">We would love to hear from you</p>
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
    <span class="text-gray-800 montserrat- font-medium">GET A QUOTE</span>
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
  
</div>

<div class="w-full flex flex-col justify-center items-center montserrat- py-8 md:px-32 px-8">
<p class=" md:text-2xl text-center"> We are an exhibition stand design and build agency, that promises creative stall designs that respect and deliver within client’s budgets and brand language. 
Our portfolio will give you a sense of the kind of innovative stall design and fabrication that we have done.
 We have realised custom booths as well as innovated in terms of material usage, graphic printing methods and light engineering. 
Browse through our work to understand us better, and if you have any queries or just want to discuss your brand then we shall look forward to a call from your side.</p>

    
</div>  
<div class="w-full grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6 montserrat-">
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
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-7">
        <img
            src="./assetes/images/1  27-JanRich Foods Ltd-Maya Products.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">JanRich Foods Ltd-Maya Products</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-8">
        <img
            src="./assetes/images/Maxtherm India_Pride Expo, stall exhibition, stall design, exhibition stall builder, stall fabricators (1)web.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Maxtherm India Pvt Ltd</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-9">
        <img
            src="./assetes/images/web1  25-Arpico Mattress, at (Hotel Show Colombo 2024).webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Arpico Mattress, at (Hotel Show Colombo 2024)</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-10">
        <img
            src="./assetes/images/Pride Expo, stall exhibition, stall design, exhibition stall builder, stall fabricators (2) web.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Lihini Seafoods (Pvt) Ltd</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-11">
        <img
            src="./assetes/images/1  23-Tudawe Trading Co (Pvt) Ltd.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Tudawe Trading Co (Pvt) Ltd</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-12">
        <img
            src="./assetes/images/web1  22-Fort Resorts_ (Colombo Fort Hotels).webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Fort Resorts_ (Colombo Fort Hotels)</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-13">
        <img
            src="./assetes/images/web1 21-FIRE FREEZE FIRE SERVICES ( PVT) LTD.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">FIRE FREEZE FIRE SERVICES ( PVT) LTD</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-14">
        <img
            src="./assetes/images/Suleco-2.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">SULECO (PVT) LTD</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-15">
        <img
            src="./assetes/images/24 Street -web1.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Twenty Four Street Garments PVT. LTD</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-16">
        <img
            src="./assetes/images/ornazone jewellers - web2.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Ornazone Jewellers</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-17">
        <img
            src="./assetes/images/Hydepark_0000__CHA0974.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Arpico Mattress Gallery_Hydepark</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-18">
        <img
            src="./assetes/images/Web-Zesta Tea Boutique (Tea Verandah), Galle (4).webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Zesta Tea Boutique (Tea Verandah), Galle</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-19">
        <img
            src="./assetes/images/1  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">3D visuals of Arpico Bedding Solution (kandy katugastota)</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-20">
        <img
            src="./assetes/images/Coats Stall 2016-web1.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Coats Thread Exports Pvt. Ltd</p>
        </div>
    </div>
    
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-21">
        <img
            src="./assetes/images/Pragmatic International_web1.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Pragmatic International</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-22">
        <img
            src="./assetes/images/Fontera Baby and you _web2.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Fontera (Baby and you)</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-23">
        <img
            src="./assetes/images/Lanka Pay_web1.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Lanka Pay</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-24">
        <img
            src="./assetes/images/Mahawali Stall_web1.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Mahawali</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-25">
        <img
            src="./assetes/images/Sala Enterprises_web2.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Sala Enterprises</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-26">
        <img
            src="./assetes/images/Omobio (Pvt) Ltd_2web.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Omobio (Pvt) Ltd</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-27">
        <img
            src="./assetes/images/VTA 1web.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">VTA</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-28">
        <img
            src="./assetes/images/Mankind 1 web.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Mankind</p>
        </div>
    </div>
    <div class="bg-white overflow-hidden cursor-pointer relative group card" data-gallery="gallery-29">
        <img
            src="./assetes/images/Russels_web 2.webp"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-110"
        />
        <div class="absolute bottom-0 w-full bg-[#383838] py-4 text-center transition-all duration-300 group-hover:bg-[#505050]">
            <p class="font-semibold text-white">Russels Tea</p>
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
<div class="bg-gray-300 w-full flex flex-col justify-center items-center montserrat- pt-8">
    <h2 class="text-center text-5xl font-bold mb-6 montserrat-" style="font-size: 2.25rem; font-weight: bold;">CONTACT US</h2>
    <div class="w-full mx-auto bg-[#f6b81d] px-8 py-8 md:px-32">
        <form action="https://api.web3forms.com/submit" method="POST" class="flex flex-col space-y-6 overflow-visible relative">
            <!-- Row 1: Full Name & Email -->

            <input type="hidden" name="access_key" value="1f82c699-3a12-4df2-9875-3cbd9eb17c15">
     
            <input type="hidden" name="page" value="portfolio">
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
        "gallery-7": [
            "./assetes/images/1  27-JanRich Foods Ltd-Maya Products.webp",
            "./assetes/images/2  27-JanRich Foods Ltd-Maya Products.webp",
            "./assetes/images/3  27-JanRich Foods Ltd-Maya Products.webp",
            "./assetes/images/4  27-JanRich Foods Ltd-Maya Products.webp",

        ],
        "gallery-8": [
            "./assetes/images/Maxtherm India_Pride Expo, stall exhibition, stall design, exhibition stall builder, stall fabricators (1)web.webp",
            "./assetes/images/Maxtherm India_Pride Expo, stall exhibition, stall design, exhibition stall builder, stall fabricators (2)web.webp",
            "./assetes/images/Maxtherm India_Pride Expo, stall exhibition, stall design, exhibition stall builder, stall fabricators (3)web.webp",

        ],
        "gallery-9": [
            "./assetes/images/web1  25-Arpico Mattress, at (Hotel Show Colombo 2024).webp",
            "./assetes/images/web2  25-Arpico Mattress, at (Hotel Show Colombo 2024).webp",
            "./assetes/images/web3  25-Arpico Mattress, at (Hotel Show Colombo 2024).webp",
            "./assetes/images/web5  25-Arpico Mattress, at (Hotel Show Colombo 2024).webp",

        ],
        "gallery-10": [
            "./assetes/images/24 Street -web1.webp",
            "./assetes/images/24 Street -web2.webp",
            "./assetes/images/24 Street -web3.webp",
            "./assetes/images/24 Street -web4.webp",

        ],
        "gallery-11": [
            "./assetes/images/1  23-Tudawe Trading Co (Pvt) Ltd.webp",
            "./assetes/images/2  23-Tudawe Trading Co (Pvt) Ltd.webp",
            "./assetes/images/3  23-Tudawe Trading Co (Pvt) Ltd.webp",

        ],
        "gallery-12": [
            "./assetes/images/web1  22-Fort Resorts_ (Colombo Fort Hotels).webp",
            "./assetes/images/web2  22-Fort Resorts_ (Colombo Fort Hotels).webp",
            "./assetes/images/web3  22-Fort Resorts_ (Colombo Fort Hotels).webp",
            "./assetes/images/web4  22-Fort Resorts_ (Colombo Fort Hotels).webp",

        ],
        "gallery-13": [
            "./assetes/images/web1 21-FIRE FREEZE FIRE SERVICES ( PVT) LTD.webp",
            "./assetes/images/web2 21-FIRE FREEZE FIRE SERVICES ( PVT) LTD.webp",
            "./assetes/images/web3 21-FIRE FREEZE FIRE SERVICES ( PVT) LTD.webp",
            "./assetes/images/web4 21-FIRE FREEZE FIRE SERVICES ( PVT) LTD.webp",

        ],
        "gallery-14": [
            "./assetes/images/Suleco-1.webp",
            "./assetes/images/Suleco-2.webp",
            "./assetes/images/Suleco-3.webp",

        ],
        "gallery-15": [
            "./assetes/images/24 Street -web1.webp",
            "./assetes/images/24 Street -web2.webp",
            "./assetes/images/24 Street -web3.webp",
            "./assetes/images/24 Street -web4.webp",
            "./assetes/images/24 Street -web5.webp",
            "./assetes/images/24 Street -web6.webp",

        ],
        "gallery-16": [
            "./assetes/images/ornazone jewellers - web1.webp",
            "./assetes/images/ornazone jewellers - web2.webp",
            "./assetes/images/ornazone jewellers - web3.webp",
            "./assetes/images/ornazone jewellers - web4.webp",
            "./assetes/images/ornazone jewellers - web5.webp",
            "./assetes/images/ornazone jewellers - web6.webp",
            "./assetes/images/ornazone jewellers - web7.webp",
            "./assetes/images/ornazone jewellers - web8.webp",

        ],
        "gallery-17": [
            "./assetes/images/Hydepark_0000__CHA0974.webp",
            "./assetes/images/Hydepark_0010__CHA0964.webp",
            "./assetes/images/Hydepark_0011__CHA0952.webp",
            "./assetes/images/Hydepark_0013__CHA0950.webp",
            "./assetes/images/Hydepark_0020__CHA0943.webp",
            "./assetes/images/Hydepark_0021__CHA0942.webp",
            "./assetes/images/Hydepark_0026__CHA0937.webp",
            "./assetes/images/Hydepark_0030__CHA0933.webp",

        ],
        "gallery-18": [
            "./assetes/images/Web-Zesta Tea Boutique (Tea Verandah), Galle (1).webp",
            "./assetes/images/Web-Zesta Tea Boutique (Tea Verandah), Galle (2).webp",
            "./assetes/images/Web-Zesta Tea Boutique (Tea Verandah), Galle (3).webp",
            "./assetes/images/Web-Zesta Tea Boutique (Tea Verandah), Galle (4).webp",
            "./assetes/images/Web-Zesta Tea Boutique (Tea Verandah), Galle (5).webp",
            "./assetes/images/Web-Zesta Tea Boutique (Tea Verandah), Galle (6).webp",
            "./assetes/images/Web-Zesta Tea Boutique (Tea Verandah), Galle (7).webp",

        ],
        "gallery-19": [
            "./assetes/images/1  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/2  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/3 14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/4  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/5  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/6  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/7  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/8  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/9  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/10  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/11  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/12  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/13  14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp",
            "./assetes/images/14-3D visuals of Arpico Bedding Solution (kandy katugastota).webp.",

        ],
        "gallery-20": [
            "./assetes/images/Coats Stall 2016-web1.webp",
            "./assetes/images/Coats Stall 2016-web2.webp",

        ],
        "gallery-21": [
            "./assetes/images/Coats Stall 2016-web1.webp",
            "./assetes/images/Coats Stall 2016-web2.webp",

        ],
        "gallery-22": [
            "./assetes/images/Arpico Bedroom Stall _web1.webp",
            "./assetes/images/Arpico Bedroom Stall _web2.webp",
            "./assetes/images/Arpico Bedroom Stall _web3.webp",
            "./assetes/images/Arpico Bedroom Stall _web4.webp",

        ],
    
        "gallery-23": [
            "./assetes/images/Lanka Pay_web1.webp",
            "./assetes/images/Lanka Pay_web2.webp",
            "./assetes/images/Lanka Pay_web3.webp",
            "./assetes/images/Lanka Pay_web3.webp",

        ],
        "gallery-24": [
            "./assetes/images/Mahawali Stall_web1.webp",
            "./assetes/images/Mahawali Stall_web2.webp",
            "./assetes/images/Mahawali Stall_web3.webp",
            "./assetes/images/Mahawali Stall_web4.webp",

        ],
        "gallery-25": [
            "./assetes/images/Sala Enterprises_web1.webp",
            "./assetes/images/Sala Enterprises_web2.webp",
            "./assetes/images/Sala Enterprises_web3.webp",
            "./assetes/images/Sala Enterprises_web4.webp",

        ],
        "gallery-26": [
            "./assetes/images/Omobio (Pvt) Ltd_web.webp",
            "./assetes/images/Omobio (Pvt) Ltd_2web.webp",
            "./assetes/images/Omobio (Pvt) Ltd_3web.webp",
        ],
        "gallery-27": [
            "./assetes/images/VTA 1web.webp",
            "./assetes/images/VTA 2web.webp",
            "./assetes/images/VTA 3web.webp",
        ],
        "gallery-28": [
            "./assetes/images/Mankind 1 web.webp",
            "./assetes/images/Mankind 2 web.webp",
        ],
        "gallery-29": [
            "./assetes/images/Russels_web 2.webp",
            "./assetes/images/Russels-web.webp",
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
<script>
    let currentIndex = 0; // Initial index

    // Function to handle slide and dot color change
    function slideTo(index, dotElement = null) {
        const slider = document.querySelector('.slider');
        const dots = document.querySelectorAll('.dot');

        // Slide to the specified index
        currentIndex = index;
        const offset = -index * 100; // Calculate the offset for the slide
        slider.style.transform = `translateX(${offset}%)`;

        // Reset all dots to default color
        dots.forEach((dot, idx) => {
            dot.style.backgroundColor = idx === index ? '#EFBF04' : '#D9D9D9';
        });
    }

    // Set initial active dot
    document.addEventListener('DOMContentLoaded', () => {
        slideTo(currentIndex);
    });
</script>