<?php include("./includes/header.php"); ?>
<div class="md:p-6">
    <!-- Modal Header -->
    <div class="flex justify-between items-center">
        <h2 class="text-xl font-bold">Contact</h2>
        <button id="closeModal" class="text-gray-400 hover:text-gray-600" onclick="document.getElementById('modalContainer').classList.add('hidden')">
            &times;
        </button>
    </div>

    <!-- Form -->
    <form action="https://api.web3forms.com/submit" method="POST"  class="mt-4 space-y-4">
            <!-- Row 1: Full Name & Email -->

            <input type="hidden" name="access_key" value="1f82c699-3a12-4df2-9875-3cbd9eb17c15">
            <input type="hidden" name="page" value="pop up">
        <div class="flex gap-4">
            <input type="text" name="first_name" placeholder="First Name" class="border border-gray-300 rounded px-4 py-2 w-full" required>
            <input type="text" name="last_name" placeholder="Last Name" class="border border-gray-300 rounded px-4 py-2 w-full" required>
        </div>
        <div class="flex gap-4">
            <input type="email" name="email" placeholder="Email" class="border border-gray-300 rounded px-4 py-2 w-full" required>
            <input type="tel" name="tel" placeholder="Phone Number" class="border border-gray-300 rounded px-4 py-2 w-full">
        </div>
        <textarea name="message" placeholder="Message" class="border border-gray-300 rounded px-4 py-2 w-full" rows="4"></textarea>
        <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

        <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded hover:bg-yellow-600">
            Submit
        </button>
    </form>
</div>
