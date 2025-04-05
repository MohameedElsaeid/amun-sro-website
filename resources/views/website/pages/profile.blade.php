@extends('website.layouts.app')

@section('title', 'Account Management - ASRO')
@section('meta-description', 'Manage your ASRO account settings, security, and character information from one central dashboard.')

<!-- Include Intl-Tel-Input Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">


@section('content')
    <!-- Hero Section -->
    <div class="page-hero" style="background-image: url('{{ asset('icons/feat_3.webp') }}');">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">My Account</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Manage your ASRO account</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-midnight">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Account Information Card -->
                <div class="bg-midnight-light rounded-lg border border-gold/30 overflow-hidden shadow-lg">
                    <!-- Account Header -->
                    <div class="p-6 border-b border-gold/30">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('icons/feat_5.webp') }}" alt="Profile Avatar"
                                class="w-20 h-20 rounded-full border-2 border-gold">
                            <div>
                                <h2 class="text-2xl font-cinzel font-bold text-gold">Update Profile</h2>
                                <p class="text-sand-light">Manage your personal details</p>
                                @if (session('success'))
                                    <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="bg-red-500 text-white p-4 rounded-md mb-4">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Account Details -->
                    <div class="p-6 space-y-6">
                        <form action="{{ route('website.update.profile') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sand-light text-sm font-medium mb-2">User Name</label>
                                    <input type="text" name="StrUserID" id="StrUserID" value="{{ $data->StrUserID }}"
                                        class="w-full bg-midnight border border-gold/20 rounded-md px-4 py-2 text-sand-light">
                                    @error('user_name')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sand-light text-sm font-medium mb-2">Gender</label>
                                    <select name="sex"
                                        class="w-full bg-midnight border border-gold/20 rounded-md px-4 py-2 text-sand-light">
                                        <option value="male" {{ $data->sex == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ $data->sex == 'female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                    @error('sex')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sand-light text-sm font-medium mb-2">Phone</label>
                                    <input type="tel" id="phone" name="phone" value="{{ $data->phone }}" 
                                        class="w-full bg-midnight border border-gold/20 rounded-md px-4 py-2 text-sand-light">
                                    @error('phone')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <input type="hidden" name="country_code" id="country_code">

                            </div>
                            <button type="submit" class="bg-gold text-white px-6 py-2 rounded-md mt-4">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- Include Intl-Tel-Input Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var input = document.querySelector("#phone");
        var countryCodeInput = document.querySelector("#country_code");
        var form = document.querySelector("#myForm");

        var iti = window.intlTelInput(input, {
            separateDialCode: true,
            preferredCountries: ["us", "gb", "ae", "sa", "in"],
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });

        // Get stored country code from database (removing "+" if exists)
        var savedDialCode = "{{ ltrim($data->country_code ?? '', '+') }}"; 

        console.log("Stored country code:", savedDialCode); // Debugging

        var countryData = window.intlTelInputGlobals.getCountryData();
        var matchedCountry = countryData.find(country => country.dialCode === savedDialCode);

        if (matchedCountry) {
            iti.setCountry(matchedCountry.iso2);
            console.log("Country set to:", matchedCountry.name, "ISO Code:", matchedCountry.iso2);
        } else {
            console.warn("No matching country found for dial code:", savedDialCode);
        }

        // Update the hidden country_code field whenever the country changes
        input.addEventListener("countrychange", function () {
            var selectedCountryData = iti.getSelectedCountryData();
            countryCodeInput.value = `+${selectedCountryData.dialCode}`;
            console.log("Country code updated to:", countryCodeInput.value);
        });

        // Ensure country code is updated before submission
        form.addEventListener("submit", function (event) {
            var selectedCountryData = iti.getSelectedCountryData();
            countryCodeInput.value = `+${selectedCountryData.dialCode}`;

            console.log("Submitting form with country code:", countryCodeInput.value);

            // Ensure the phone number is valid
            if (!iti.isValidNumber()) {
                event.preventDefault();
                alert("Please enter a valid phone number.");
            }
        });
    });
</script>







<style>
    /* Increase dropdown size */
    .iti__selected-dial-code {
        color: white !important;
        font-weight: bold !important;
    }
    .iti__country-list {
        width: 300px !important; /* Adjust width */
        max-height: 400px !important; /* Increase height */
        font-size: 16px !important; /* Bigger text */
        padding: 10px !important;
    }

    /* Increase size of each country option */
    .iti__country {
        padding: 10px !important;
        font-size: 16px !important;
    }

    /* Ensure flag & dial code remain readable */
    .iti__flag, .iti__dial-code {
        font-size: 18px !important;
    }

    .iti__selected-flag {
        color: black !important;
    }

    /* Adjust dropdown if needed */
    .iti__country-list {
        background-color: white !important;
        color: black !important;
    }
</style>


