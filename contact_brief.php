<?php include("./includes/header.php"); ?>
<?php include("./includes/nav_inn.php"); ?>

<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
  <div class="w-full flex justify-center items-center mb-8">
  <img src="./assetes/images/Pride logo (5).jpg" alt="Icon 1" class="w-auto">
  </div>

  <form action="process_mail.php" method="POST" class="space-y-6" enctype="multipart/form-data">
    <!-- Company Details -->
    <fieldset>
      <legend class="text-lg font-semibold mb-4">Company Details</legend>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" name="company_name" placeholder="Company name" class="input-field">
        <input type="url" name="website_url" placeholder="Website URL" class="input-field">
        <input type="tel" name="phone_number" placeholder="Phone number" class="input-field">
        <input type="text" name="first_name" placeholder="First name" class="input-field">
        <input type="text" name="last_name" placeholder="Last name" class="input-field">
        <input type="text" name="job_title" placeholder="Job title" class="input-field">
        <input type="email" name="email" placeholder="Email" class="input-field">
        <input type="tel" name="mobile_phone" placeholder="Mobile phone number" class="input-field">
      </div>
    </fieldset>

    <!-- Exhibition and Stand Details -->
    <fieldset>
      <legend class="text-lg font-semibold mb-4">Exhibition and Stand Details</legend>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" name="exhibition_name" placeholder="Exhibition Name" class="input-field">
        <div class="relative">
          <input type="date" name="start_date" class="input-field">
        </div>
        <input type="text" name="hall_and_stand" placeholder="Hall and Stand Number" class="input-field">
        <input type="text" name="stand_size" placeholder="Stand Size" class="input-field">
        <select name="sides_open" class="input-field">
          <option value="">Sides Open</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <select name="pillar_space" class="input-field">
          <option value="">Is there a pillar in your space?</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>
    </fieldset>

    <!-- Understanding Your Brand -->
    <fieldset>
      <legend class="text-lg font-semibold mb-4">Understanding Your Brand</legend>
      <div class="space-y-4">
        <p>What is your main purpose of participation at this exhibition?</p>
        <div class="flex flex-wrap gap-4">
          <label><input type="checkbox" name="purpose" value="brand_building" class="mr-2">Brand Building Exercise</label>
          <label><input type="checkbox" name="purpose" value="sales" class="mr-2">Sales</label>
          <label><input type="checkbox" name="purpose" value="meeting_existing" class="mr-2">Meeting Existing Customers</label>
          <label><input type="checkbox" name="purpose" value="product_launch" class="mr-2">New Product Launch</label>
          <label><input type="checkbox" name="purpose" value="other" class="mr-2">Other</label>
        </div>

        <textarea name="brand_understanding" placeholder="Can you give us a basic understanding of your brand..." class="input-field h-24"></textarea>
        <textarea name="key_message" placeholder="What is the key message or takeaway..." class="input-field h-24"></textarea>
      </div>
    </fieldset>

    <!-- Stand Physical Requirements -->
    <fieldset>
      <legend class="text-lg font-semibold mb-4">Stand Physical Requirements</legend>
      <div class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <select name="design_kind" class="input-field">
            <option value="">What kind of design would you like?</option>
          </select>
          <select name="flooring_kind" class="input-field">
            <option value="">What kind of flooring do you prefer?</option>
          </select>
          <input type="number" name="graphics_count" placeholder="How many graphics do you want?" class="input-field">
        </div>

        <textarea name="meeting_rooms" placeholder="How many closed meeting rooms do you need?" class="input-field h-16"></textarea>
        <textarea name="audiovisual" placeholder="Audiovisual requirements" class="input-field h-16"></textarea>
        <textarea name="open_seating" placeholder="How many open seating areas do you need? An open seating area is considered as one round table with 4 chairs." class="input-field h-16"></textarea>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <p class="font-semibold mb-2">Pantry & Store Room Requirements</p>
            <div class="flex flex-wrap gap-4">
              <label><input type="checkbox" name="pantry" value="no_pantry" class="mr-2">No pantry required</label>
              <label><input type="checkbox" name="pantry" value="kettle" class="mr-2">Kettle</label>
              <label><input type="checkbox" name="pantry" value="working_table" class="mr-2">Working Table</label>
              <label><input type="checkbox" name="pantry" value="dustbin" class="mr-2">Big Dustbin</label>
              <label><input type="checkbox" name="pantry" value="racks" class="mr-2">Racks for storage</label>
              <label><input type="checkbox" name="pantry" value="fridge" class="mr-2">Small Fridge</label>
            </div>
          </div>
          <div>
            <p class="font-semibold mb-2">How do you display your products</p>
            <div class="flex flex-wrap gap-4">
              <label><input type="checkbox" name="display" value="pedestals" class="mr-2">On pedestals</label>
              <label><input type="checkbox" name="display" value="floor" class="mr-2">On the floor</label>
              <label><input type="checkbox" name="display" value="shelves" class="mr-2">Shelves</label>
              <label><input type="checkbox" name="display" value="ceiling" class="mr-2">Suspended from ceiling</label>
              <label><input type="checkbox" name="display" value="wall" class="mr-2">Wall mounted</label>
              <label><input type="checkbox" name="display" value="no_display" class="mr-2">We don't display products</label>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <p class="font-semibold mb-2">Technology and Interaction</p>
            <div class="flex flex-wrap gap-4">
              <label><input type="checkbox" name="technology" value="kiosks" class="mr-2">Touch Screen Kiosks</label>
              <label><input type="checkbox" name="technology" value="vr" class="mr-2">Virtual Reality</label>
              <label><input type="checkbox" name="technology" value="surface" class="mr-2">Surface Technology</label>
              <label><input type="checkbox" name="technology" value="holography" class="mr-2">Holography</label>
              <label><input type="checkbox" name="technology" value="tv" class="mr-2">Touch Screen TV</label>
            </div>
          </div>
          <div>
            <p class="font-semibold mb-2">Would you like us to help you with:</p>
            <div class="flex flex-wrap gap-4">
              <label><input type="checkbox" name="help" value="catering" class="mr-2">Catering Service</label>
              <label><input type="checkbox" name="help" value="hosts" class="mr-2">Hosts/Hostesses</label>
              <label><input type="checkbox" name="help" value="cleaning" class="mr-2">Daily Stand Cleaning</label>
              <label><input type="checkbox" name="help" value="design" class="mr-2">Graphic Design</label>
              <label><input type="checkbox" name="help" value="flowers" class="mr-2">Flower arrangements</label>
              <label><input type="checkbox" name="help" value="services" class="mr-2">Show Services Management</label>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="budget" placeholder="Budget" class="input-field">
          <input type="file" name="upload_file" id="upload_file" >
        </div>
      </div>
    </fieldset>

    <!-- Submit -->
    <div class="text-center">
      <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded hover:bg-yellow-600">Submit</button>
    </div>
  </form>
</div>

<style>
  .input-field {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 0.375rem;
    outline: none;
    transition: border-color 0.2s;
  }
  .input-field:focus {
    border-color: #fbbf24;
  }
  .file-input {
    display: block;
    padding: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 0.375rem;
    outline: none;
  }
</style>