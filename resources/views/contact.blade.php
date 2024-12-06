<x-layout>

    <section class="flex items-center justify-center min-h-screen py-16"
        style="background-image: linear-gradient(to right, rgba(103, 102, 219, 0.9), rgba(255, 219, 238, 0.5));
background-size: cover;
background-position: center;">
        <div class="container flex flex-col items-center gap-10 mx-auto lg:flex-row">
            <!-- Left Section (Text) -->
            <div class="flex-1 text-center lg:text-left">
                <h1 class="mb-4 text-5xl font-bold text-white drop-shadow-lg">
                    Connect with Us
                </h1>
                <p class="mb-6 text-gray-200">
                    Want to chat? We'd love to hear from you! Get in touch with our Customer Success Team to inquire
                    about
                    speaking events, advertising rates, or just say hello.
                </p>
                <div
                    class="w-[200px] h-[50px] bg-[#4D2C5E] rounded-full flex items-center justify-center mx-auto lg:mx-0">
                    <button onclick="scrollToForm()"
                        class="text-white text-sm font-medium font-['Roboto'] hover:opacity-90 transition">
                        Continue
                    </button>
                </div>
            </div>

            <!-- Right Section (Image) -->
            <div class="flex justify-center mt-12 md:mt-0 md:w-1/2">
                <img src="/img/qii.png" alt="Learning Illustration" class="w-[600px] h-auto">
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <div class="flex flex-col items-center justify-center w-full gap-16 px-24 mt-20">
        <!-- Form Section -->
        <form id="contact-form" class="flex-1 p-14 bg-white rounded-2xl shadow-2xl shadow-[#4d2c5eb5] w-[900px] ">
            <h3 class="mb-6 text-3xl font-bold text-center text-[#4D2C5E]">Get In Touch</h3>
            <div class="mb-4">
                <label for="first_name" class="block mb-2 font-medium text-gray-700">First Name</label>
                <input type="text" id="first_name" placeholder="Enter your first name"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-400 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email address"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-400 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="subject" class="block mb-2 font-medium text-gray-700">Subject</label>
                <input type="text" id="subject" placeholder="Enter the subject"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-400 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-2 font-medium text-gray-700">Message</label>
                <textarea id="message" placeholder="Type your message here" rows="4"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-400 focus:outline-none">
            </textarea>
            </div>
            <button type="submit"
                class="w-full px-6 py-3 text-white transition bg-purple-700 rounded-full hover:bg-[#4D2C5E]">
                Send Message
            </button>
        </form>
    </div>


</x-layout>

<script>
    function scrollToForm() {
        document.getElementById('contact-form').scrollIntoView({
            behavior: 'smooth'
        });
    }
</script>
