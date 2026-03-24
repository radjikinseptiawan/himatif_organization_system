<div class="w-full flex justify-center px-4 py-10 bg-gray-50">
  <div class="w-full max-w-4xl">
    <div class=" rounded-2xl p-6 flex flex-col gap-6">
    
      <div class="flex items-center gap-2 justify-center">
        <h2 class="text-2xl md:text-3xl font-bold text-center text-[#0c2b4b] mb-10"> Kotak Aspirasi </h2> 
      </div>

      <form action="{{ route("kirim.email") }}" class="flex flex-col" method="POST">
        @csrf()
      <label for="email" class="font-medium text-gray-700">Email</label>
      <input 
        type="email" 
        id="KotakAspirasi" 
        name="email" 
        placeholder="email@gmail.com" 
        class="p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
      >
          <label for="subject" class="font-medium text-gray-700">Subject</label>
          <input 
            type="text" 
            id="subject" 
            name="subject" 
            placeholder="Tuliskan Subject" 
            class="p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
        >


      <label for="aspirasiText" class="font-medium text-gray-700">Aspirasi</label>
      <textarea 
        name="aspirasi" 
        id="aspirasiText" 
        rows="6" 
        placeholder="Tulis aspirasi kamu di sini..." 
        class="p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
      ></textarea>

      <button 
        type="submit" 
        class="bg-blue-500 my-2 text-white w-32 flex-row-reverse items-center flex font-semibold py-3 px-6 rounded-xl hover:bg-blue-600 transition-colors self-center"
      >
         @include("components.icon.Send")
        Kirim
      </button>
    </form>
      
    </div>
  </div>
</div>
