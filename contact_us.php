<?php include("./includes/header.php"); ?>
<?php include("./includes/nav_inn.php"); ?>

<div class="relative w-full h-full">
<div class="w-full h-[300px] bg-cover bg-center" style="background-image: url('./assetes/images/bg4.jpg');">

  <!-- Text Overlay -->
  <div class="w-full h-[300px] flex flex-col items-center justify-center bg-black bg-opacity-60 space-y-4">
    <div class="w-auto border-b-2 border-[#f6b81d]">
    <p class="text-white md:text-6xl text-4xl font-bold montserrat-" style="font-weight: bold;">Contact Us</p>
    </div>
      <p class="text-[#f6b81d] text-xl montserrat-">We would love to hear from you</p>
  </div>
  
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
<div class="w-full flex md:flex-row flex-col justify-center items-start md:px-32 px-8">
<div class="md:w-1/2 w-full flex flex-col justify-center items-center pt-8">
<h2 class="text-center text-3xl font-bold mb-6" style="font-size: 2.25rem; font-weight: bold;">CONTACT US</h2>
<p class=" md:text-2xl">stalls that captivate and engage.</p>



    <div class="w-full mx-auto py-8">
    <form action="https://api.web3forms.com/submit" method="POST" class="flex flex-col space-y-8">
        <input type="hidden" name="access_key" value="1f82c699-3a12-4df2-9875-3cbd9eb17c15">
        <input type="hidden" name="page" value="contact">
      
    <div class="w-full flex space-x-8">
        <!-- Full Name -->
        <div class="w-1/2">
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input
                type="text"
                id="name"
                name="name"
                class="p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
                required
            />
        </div>
</div>

    <div class="w-full flex space-x-8">
        <!-- Email -->
        <div class="w-1/2">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input
                type="email"
                id="email"
                name="email"
                class="p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
                required
            />
        </div>
        <!-- Phone Number -->
        <div class="w-1/2">
            <label for="tel" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input
                type="tel"
                id="tel"
                name="tel"
                class="p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
                required
            />
        </div>
    </div>

    <div class="w-full flex space-x-8">
        <!-- Message -->
        <div class="w-full">
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea
                id="message"
                name="message"
                class="p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
                required
            ></textarea>
        </div>
    </div>

    <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

    <!-- Submit Button -->
    <div class="w-full flex justify-center items-center">
        <button
            type="submit"
            class="bg-yellow-500 text-white font-bold py-2 px-6 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-600"
        >
            Submit
        </button>
    </div>
</form>

<script>
    function updateFileName() {
        const fileInput = document.getElementById('file-upload');
        const fileNameDisplay = document.getElementById('file-name');
        fileNameDisplay.textContent = fileInput.files[0] ? fileInput.files[0].name : 'No file chosen';
    }
</script>

    </div>
</div>

<div class="md:w-1/2 w-full flex flex-col justify-center items-start space-y-4 pt-8 md:pl-8 md:pb-0 pb-8">
    <p class="md:text-3xl text-2xl">COME VISIT OUR WORKPLACE</p>
    <p>Visit us and we would be delighted to welcome you.</p>
    <div class="w-full space-y-4">
        <p>SOL GMBH EUROPE</p>
        <div class="w-full">
            <p>Hanauer Landstraße 291B,</p>
            <p>Frankfurt am Main 60314, Germany.</p>
            <p>Email: info@exposol.de</p>
            <p>Phone No: +49 152 36967869</p>
        </div>
    </div>
    <div class="w-full space-y-4">
        <p>SOL Brand Solutions Inc. USA</p>
        <div class="w-full">
            <p>6920 S Cimarron Road,</p>
            <p>Suite 100, Las Vegas, NV 89113, USA</p>
            <p>Email: info@exhibitrentals.com</p>
            <p>Phone No: + 1(702)271-5928</p>
        </div>
    </div>
</div>
</div>
<div class="h-[300px]">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126695.2442433194!2d79.90183994999999!3d6.842604299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24d14780a06e9%3A0x7f1f0c6ff1aa44d0!2sPiliyandala!5e0!3m2!1sen!2slk!4v1691063982035!5m2!1sen!2slk"
                width="100%"
                height="100%"
                class="rounded-3xl"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="w-full md:px-32 px-8 bg-[#f6b81d] py-16">
    <p class="text-justify text-white montserrat-"> Design Stand, Exhibition Stand, Exhibition Stall Design, Exhibition Stand Builders, Exhibition Stall, Expo Portable Displays, Exhibition Stand Design and Build, Expo Stand, Stand Builders, Stand 
Contractors, Modular Stand Design, Modular Exhibition Stand Design, Stall Booth Design, Exhibition Stand Booth, Portable Event Booth, Expo Stands For, Best Stand Design, 
Booth Design, Booth Display Design, Small Stall Design, Booth Designers, Expo Stand Designer, Exhibition Booth Design Company, Best Expo Booth Design, Expo Display Design, 
Custom Built Exhibition Standee, Expo Stand Design, Exhibition Stall Designs, Expo Booth Design, Portable Displays, Portable Booth Displays, Event Stand Design, Amazing Exhibition Stands, 
Small Exhibition Booth Designs, Creative Exhibition Stand Designs, Exhibition Stand, Exhibition Design Stand, Event Stand Builders, Innovative Booth Design</p>
</div>

<?php include("./includes/footer.php"); ?>

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