@extends('website.layouts.app')

@section('title', 'Bug Report - ASRO Game')
@section('meta-description', 'View player rankings for ASRO game. See the top players, leaderboards, and character stats in the ancient Egyptian online world.')

@section('content')
    <div class="relative py-16 z-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-cinzel font-bold text-gold text-center mb-12">Report a Bug</h1>

            <div class="max-w-2xl mx-auto">
                <div class="bg-midnight-light p-6 rounded-lg">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="category" class="block text-gold font-bold mb-2">Bug Category</label>
                            <select id="category" name="category"
                                    class="w-full bg-midnight border border-gold/30 rounded-lg px-4 py-2 text-sand">
                                <option value="gameplay">Gameplay Issue</option>
                                <option value="technical">Technical Problem</option>
                                <option value="account">Account Issue</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="title" class="block text-gold font-bold mb-2">Bug Title</label>
                            <input type="text" id="title" name="title"
                                   class="w-full bg-midnight border border-gold/30 rounded-lg px-4 py-2 text-sand"
                                   placeholder="Brief description of the bug">
                        </div>

                        <div>
                            <label for="description" class="block text-gold font-bold mb-2">Detailed Description</label>
                            <textarea id="description" name="description" rows="6"
                                      class="w-full bg-midnight border border-gold/30 rounded-lg px-4 py-2 text-sand"
                                      placeholder="Please provide as much detail as possible"></textarea>
                        </div>

                        <div>
                            <label for="steps" class="block text-gold font-bold mb-2">Steps to Reproduce</label>
                            <textarea id="steps" name="steps" rows="4"
                                      class="w-full bg-midnight border border-gold/30 rounded-lg px-4 py-2 text-sand"
                                      placeholder="List the steps to reproduce this bug"></textarea>
                        </div>

                        <div>
                            <label for="screenshot" class="block text-gold font-bold mb-2">Screenshot (optional)</label>
                            <input type="file" id="screenshot" name="screenshot"
                                   class="w-full bg-midnight border border-gold/30 rounded-lg px-4 py-2 text-sand">
                        </div>

                        <button type="submit"
                                class="w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-3 rounded-lg transition-colors">
                            Submit Bug Report
                        </button>
                    </form>
                </div>

                <div class="mt-8 bg-midnight-light p-6 rounded-lg">
                    <h2 class="text-2xl font-cinzel text-gold mb-4">Before Submitting</h2>
                    <ul class="list-disc list-inside space-y-2 text-sand">
                        <li>Check if this bug has already been reported</li>
                        <li>Make sure you're using the latest game version</li>
                        <li>Include your system specifications if relevant</li>
                        <li>Be as detailed as possible in your description</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
