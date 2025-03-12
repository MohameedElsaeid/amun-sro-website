@extends('website.layouts.app')

@section('title', 'Careers - Amun Sro')
@section('meta-description', 'Join our team at Amun Sro – help shape the future of our Silkroad private server. View available positions and apply today.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-midnight-dark py-20 relative">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-cinzel font-bold text-gold mb-6">Join Our Team</h1>
            <p class="text-xl text-sand-light max-w-3xl mx-auto mb-8">Become a part of the Amun Sro community and help shape the future of our game.</p>
        </div>
    </section>
    <!-- Careers Section -->
    <section class="py-16 bg-midnight">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-center mb-12 text-sand">Available Positions</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Example Position Card -->
                <div class="bg-midnight-light p-6 rounded-lg hover:shadow-lg transition-shadow duration-300 border-t-4 border-gold">
                    <h3 class="text-2xl font-cinzel font-bold text-gold mb-4">Supporter</h3>
                    <p class="text-sand-light mb-4">Provide exceptional customer service and technical support to our players.</p>
                    <ul class="text-sand-light mb-6 list-disc list-inside">
                        <li>Respond to player inquiries</li>
                        <li>Troubleshoot issues</li>
                        <li>Monitor game forums</li>
                        <li>Create helpful guides</li>
                    </ul>
                    <a href="#application-form" class="inline-block bg-gold text-midnight-dark font-bold px-4 py-2 rounded hover:bg-gold-light transition-colors">Apply Now</a>
                </div>
                <!-- Repeat for other positions (Seller, Administrator, etc.) -->
            </div>
            <!-- Application Form -->
            <div id="application-form" class="max-w-3xl mx-auto bg-midnight-light p-8 rounded-lg">
                <h3 class="text-2xl font-cinzel font-bold text-gold mb-6 text-center">Career Application Form</h3>
                <form id="careers-form" class="space-y-6">
                    <!-- Position Selection and personal info fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="form-label">Position</label>
                            <select id="position" class="form-input" required>
                                <option value="">Select a position</option>
                                <option value="supporter">Supporter</option>
                                <option value="seller">Seller</option>
                                <option value="administrator">Administrator</option>
                            </select>
                        </div>
                        <div class="hidden md:block"></div>
                        <div>
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" id="first-name" class="form-input" required>
                        </div>
                        <div>
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" id="last-name" class="form-input" required>
                        </div>
                        <div>
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-input" required>
                        </div>
                        <div>
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" class="form-input" required>
                        </div>
                        <div>
                            <label for="country" class="form-label">Country</label>
                            <input type="text" id="country" class="form-input" required>
                        </div>
                        <div>
                            <label for="city" class="form-label">City</label>
                            <input type="text" id="city" class="form-input" required>
                        </div>
                        <div>
                            <label for="address" class="form-label">Address</label>
                            <input type="text" id="address" class="form-input" required>
                        </div>
                        <div>
                            <label for="area" class="form-label">Area</label>
                            <input type="text" id="area" class="form-input" required>
                        </div>
                    </div>
                    <div>
                        <label for="resume" class="form-label">Resume/CV (PDF or Word)</label>
                        <input type="file" id="resume" class="form-input py-2" accept=".pdf,.doc,.docx">
                    </div>
                    <div>
                        <label for="additional-info" class="form-label">Why do you want to join our team?</label>
                        <textarea id="additional-info" class="form-input min-h-[100px]" placeholder="Tell us why you're a good fit..."></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-gold-dark hover:bg-gold text-midnight-dark font-bold px-8 py-3 rounded transition-colors">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
