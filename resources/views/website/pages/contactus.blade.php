@extends('Website.layouts.app')

@section('title', 'Contact Us - ASRO Game')
@section('meta-description', 'View player rankings for ASRO game. See the top players, leaderboards, and character stats in the ancient Egyptian online world.')

@section('content')
    <div class="relative py-16 z-20">

        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-cinzel font-bold text-gold text-center mb-12">Contact Us</h1>

            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Form -->
                <div class="md:col-span-2">
                    <div class="bg-midnight-light p-6 rounded-lg">
                        <h2 class="text-2xl font-cinzel text-gold mb-6">Send us a Message</h2>
                        <form action="#" method="POST" class="space-y-6">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-gold font-bold mb-2">Name</label>
                                    <input type="text" id="name" name="name"
                                           class="w-full bg-midnight border border-gold/30 rounded-lg px-4 py-2 text-sand">
                                </div>

                                <div>
                                    <label for="email" class="block text-gold font-bold mb-2">Email</label>
                                    <input type="email" id="email" name="email"
                                           class="w-full bg-midnight border border-gold/30 rounded-lg px-4 py-2 text-sand">
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-gold font-bold mb-2">Subject</label>
                                <input type="text" id="subject" name="subject"
                                       class="w-full bg-midnight border border-gold/30 rounded-lg px-4 py-2 text-sand">
                            </div>

                            <div>
                                <label for="message" class="block text-gold font-bold mb-2">Message</label>
                                <textarea id="message" name="message" rows="6"
                                          class="w-full bg-midnight border border-gold/30 rounded-lg px-4 py-2 text-sand"></textarea>
                            </div>

                            <button type="submit"
                                    class="w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-3 rounded-lg transition-colors">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div>
                    <div class="bg-midnight-light p-6 rounded-lg mb-8">
                        <h2 class="text-2xl font-cinzel text-gold mb-6">Contact Information</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold mr-3 mt-1" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <div>
                                    <h3 class="text-gold font-bold">Email</h3>
                                    <p class="text-sand">amunsro@gmail.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold mr-3 mt-1" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <div>
                                    <h3 class="text-gold font-bold">Support Hours</h3>
                                    <p class="text-sand">Mon - Fri: 9:00 AM - 6:00 PM (GMT)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-midnight-light p-6 rounded-lg">
                        <h2 class="text-2xl font-cinzel text-gold mb-6">Connect With Us</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="https://www.facebook.com/amunsro/"
                               class="flex items-center p-3 bg-midnight hover:bg-midnight-dark rounded-lg transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold mr-2"
                                     fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                </svg>
                                Facebook
                            </a>
                            <a href="https://www.instagram.com/amunsro/"
                               class="flex items-center p-3 bg-midnight hover:bg-midnight-dark rounded-lg transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold mr-2"
                                     fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.259.014 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058 1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                                Instagram
                            </a>
                            <a href="https://discord.gg/CjacDZVaff"
                               class="flex items-center p-3 bg-midnight hover:bg-midnight-dark rounded-lg transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold mr-2"
                                     fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19.54 0c1.356 0 2.46 1.104 2.46 2.472v21.528l-2.58-2.28-1.452-1.344-1.536-1.428.636 2.22h-13.608c-1.356 0-2.46-1.104-2.46-2.472v-16.224c0-1.368 1.104-2.472 2.46-2.472h16.08zm-4.632 15.672c2.652-.084 3.672-1.824 3.672-1.824 0-3.864-1.728-6.996-1.728-6.996-1.728-1.296-3.372-1.26-3.372-1.26l-.168.192c2.04.624 2.988 1.524 2.988 1.524-1.248-.684-2.472-1.02-3.612-1.152-.864-.096-1.692-.072-2.424.024l-.204.024c-.42.036-1.44.192-2.724.756-.444.204-.708.348-.708.348s.996-.948 3.156-1.572l-.12-.144s-1.644-.036-3.372 1.26c0 0-1.728 3.132-1.728 6.996 0 0 1.008 1.74 3.66 1.824 0 0 .444-.54.804-.996-1.524-.456-2.1-1.416-2.1-1.416l.336.204.048.036.047.027.014.006.047.027c.3.168.6.3.876.408.492.192 1.08.384 1.764.516.9.168 1.956.228 3.108.012.564-.096 1.14-.264 1.74-.516.42-.156.888-.384 1.38-.708 0 0-.6.984-2.172 1.428.36.456.792.972.792.972zm-5.58-5.604c-.684 0-1.224.6-1.224 1.332 0 .732.552 1.332 1.224 1.332.684 0 1.224-.6 1.224-1.332.012-.732-.54-1.332-1.224-1.332zm4.38 0c-.684 0-1.224.6-1.224 1.332 0 .732.552 1.332 1.224 1.332.684 0 1.224-.6 1.224-1.332 0-.732-.54-1.332-1.224-1.332z"/>
                                </svg>
                                Discord
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
