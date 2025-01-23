<?php include("./includes/header.php"); ?>
<?php include("./includes/nav_inn.php"); ?>

<div class="relative w-full h-full">
<div class="w-full h-[600px] bg-cover bg-center" style="background-image: url('./assetes/images/web3 (1).jpg');">

  <!-- Text Overlay -->
  <div class="w-full h-[600px] flex flex-col items-center justify-center bg-black bg-opacity-60 space-y-8">
    <div class="w-auto border-b-2 border-[#f6b81d]">
    <p class="text-white md:text-6xl  font-bold montserrat-" style="font-size: 4rem; font-weight: bold;">Blogs</p>
    </div>
    <div class="md:w-1/2 w-full flex justify-center items-center md:px-0 px-8">
    <p class="text-white text-xl montserrat- text-center">Your one stop solution for information on custom exhibition stands,
modular exhibition stands, portable displays and technology, lead capturing
and design ideas for global expo.</p>
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
  </div>
  
</div>

<div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6 px-8 py-8 md:space-y-0 space-y-4">
<a href="blog1.php" class="block w-full">
    <div class="w-full flex md:flex-row flex-col cursor-pointer"> 
        <!-- Card 1 -->
        <div class="w-full md:w-1/2 bg-white overflow-hidden relative card">
            <img
                src="./assetes/images/bg-2.jpg"
                alt="Arpico Mattress"
                class="w-full h-64 object-cover transform transition-transform duration-300 hover:scale-110"
            />
        </div>
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center space-y-4 md:px-8 text-align montserrat-">
            <p class="text-xl font-bold text-[#f6b81d]">How Custom and Modular Stands Transform Presence at Exhibitions</p>
            <p>It can be challenging to be unique in today’s highly competitive market that is rising with new trends and every exhibitor’s goal is to stand out, connect with their audience and let them leave with a memorable experience. It’s crucial for an exhibitor to accomplish all of the above in the world of exhibitions and trade shows. With every brand competing with each other for attention in mostly overcrowded and overwhelming environments, the ability to capture the attendees attention through a strong visual presence has never been more critical.</p>
        </div>
    </div>
</a>

<a href="blog2.php" class="block w-full">
    <div class="w-full flex md:flex-row flex-col cursor-pointer">
 <!-- Card 1 -->
 <div class="w-full md:w-1/2 bg-white overflow-hidden relative card">
        <img
            src="./assetes/images/Arpico Bedroom Stall _web1.jpg"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 hover:scale-110"
        />
       
        
    </div>
    <div class="w-full md:w-1/2 flex flex-col justify-center items-center space-y-4 md:px-8 montserrat- text-align">
        <p class="text-xl font-bold text-[#f6b81d]">Enhancing Engagement with Custom and Modular Stand Designs</p>
        <p>In the earlier ages exhibitions were a staple for promoting products only, but as time passed, exhibitions evolved dynamically! Many businesses view it as an opening engaged with the audience, building communities with lasting connections, gaining knowledge about the industry in a deeper manner, and ofcourse promoting the products or services. Various kinds of exhibition stall models are available. There is a vast option to choose from depending on a company’s requirements.</p>
    </div>
    </div>
    </a>
    <a href="blog3.php" class="block w-full">

    <div class="w-full flex md:flex-row flex-col cursor-pointer">
 <!-- Card 1 -->
 <div class="w-full md:w-1/2 bg-white overflow-hidden relative card">
        <img
            src="./assetes/images/Pragmatic International_web2.jpg"
            alt="Arpico Mattress"
            class="w-full h-64 object-cover transform transition-transform duration-300 hover:scale-110"
        />
       
        
    </div>
    <div class="w-full md:w-1/2 flex flex-col justify-center items-center montserrat- space-y-4 md:px-8 text-align">
        <p class="text-xl font-bold text-[#f6b81d]">The Evolution of Expo Stand Designs: Trends to Watch in 2025</p>
        <p>Dear exhibitors, you surely must’ve seen that expo stand design has revolutionized significantly over the years, shifting from static, dull-looking, functional structures to immersive and experience-driven spaces that captivate audiences and uplift brand visibility. In 2025, the exhibition sector is overflowing with innovations as stand contractors adopt environment-friendly practices, cutting-edge solutions and compelling storytelling to transform the trade show experience.</p>
    </div>
    </div>
    </a>
    <a href="blog4.php" class="block w-full">
    <div class="w-full flex md:flex-row flex-col cursor-pointer"> 
        <!-- Card 1 -->
        <div class="w-full md:w-1/2 bg-white overflow-hidden relative card">
            <img
                src="./assetes/images/web2.jpg"
                alt="Arpico Mattress"
                class="w-full h-64 object-cover transform transition-transform duration-300 hover:scale-110"
            />
        </div>
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center space-y-4 md:px-8 text-align montserrat-">
            <p class="text-xl font-bold text-[#f6b81d]">Design features that can have a negative impact on Exhibition stand</p>
            <p>Custom exhibition stands are evolving more than ever before. Exhibition design is becoming more competitive by the minute and everyone wants to be the leader of their industry. The stands which are extremely creative, tend to attract the biggest crowds and the most popular at the event. If you are ready to take the next step on your exhibition booth and really create that ‘wow’ factor here are 5 design elements you should avoid.</p>
        </div>
    </div>
</a>
    <!-- Repeat other cards -->
</div>


<div class="bg-gray-300 w-full flex flex-col justify-center items-center montserrat- pt-8">
    <h2 class="text-center text-5xl font-bold mb-6 montserrat-" style="font-size: 2.25rem; font-weight: bold;">CONTACT US</h2>
    <div class="w-full mx-auto bg-[#f6b81d] px-8 py-8 md:px-32">
        <form action="https://api.web3forms.com/submit" method="POST" class="flex flex-col space-y-6 overflow-visible relative">
            <!-- Row 1: Full Name & Email -->

            <input type="hidden" name="access_key" value="1f82c699-3a12-4df2-9875-3cbd9eb17c15">
     
            <input type="hidden" name="page" value="blog">
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