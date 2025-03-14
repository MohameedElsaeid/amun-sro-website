<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to Amun Sro Server</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f6f6f6; font-family: Arial, sans-serif;">
<!-- Wrapper -->
<table align="center" cellpadding="0" cellspacing="0"
       style="width: 100%; table-layout: fixed; background-color: #f6f6f6; padding: 20px 0;">
    <tr>
        <td>
            <!-- Main Container -->
            <table cellpadding="0" cellspacing="0" align="center"
                   style="width: 600px; background-color: #ffffff; border-radius: 6px; overflow: hidden; border: 1px solid #e0e0e0;">
                <!-- Header / Cover Section -->
                <tr>
                    <td style="position: relative; text-align: center; padding: 0; color: #ffffff;">
                        <!-- Cover Image -->
                        <img src="{{ asset('icons/cover.webp') }}"
                             alt="Amun Sro Server Cover"
                             style="width: 100%; display: block;">
                    </td>
                </tr>
                <!-- Content Section -->
                <tr>
                    <td style="padding: 30px;">
                        <!-- Main Title -->
                        <h1 style="font-size: 24px; margin: 0 0 10px; color: #111111;">
                            Welcome to Amun Sro Server!
                        </h1>
                        <!-- Intro Paragraphs -->
                        <p style="font-size: 15px; line-height: 1.6; margin: 15px 0; color: #333333;">
                            Thank you for registering for <strong>Amun Sro Server</strong> – the ultimate fantasy MMORPG
                            experience.
                            Prepare to embark on a thrilling journey, explore mystical realms, forge powerful alliances,
                            and test your might against fearsome foes.
                        </p>
                        <p style="font-size: 15px; line-height: 1.6; margin: 15px 0; color: #333333;">
                            Your account has been successfully created. You can log in anytime using the credentials you
                            provided during registration. We can’t wait to see you in-game! If you have any questions,
                            feel free to reach out to our support team.
                        </p>
                        <!-- Additional Game Info -->
                        <p style="font-size: 15px; line-height: 1.6; margin: 15px 0; color: #333333;">
                            <strong>What to Expect in Amun Sro Server:</strong>
                        <ul style="margin: 10px 0 0 20px; padding: 0; color: #333333;">
                            <li style="margin-bottom: 8px;">Immersive quests that take you through ancient lands.</li>
                            <li style="margin-bottom: 8px;">Fast-paced PvP battles to test your strategy and skill.</li>
                            <li style="margin-bottom: 8px;">Engaging guild systems and community events.</li>
                            <li style="margin-bottom: 8px;">Exclusive in-game rewards for loyal players.</li>
                        </ul>
                        <p style="font-size: 15px; line-height: 1.6; margin: 15px 0; color: #333333;">
                            We regularly update the server with fresh content and host exciting tournaments, ensuring
                            there’s always
                            a new challenge for you and your friends.
                        </p>
                        <!-- Call to Action Button -->
                        <a href="{{ route('website.downloads') }}"
                           style="display: inline-block; background-color: #e18f11; color: #ffffff; padding: 12px 25px; border-radius: 4px; text-decoration: none; margin-top: 15px;">
                            Start Your Adventure
                        </a>
                        <!-- Social Media Icons Section -->
                        <div style="text-align: center; margin-top: 30px;">
                            <p style="font-size: 15px; color: #333333; margin: 0 0 10px;">Join Our Community</p>
                            <a href="https://bit.ly/4bEmY9b" target="_blank"
                               style="text-decoration: none; margin: 0 8px;">
                                <img src="{{ asset('icons/social-media/Discord.png') }}" alt="Discord"
                                     style="width: 24px; height: 24px; vertical-align: middle;">
                            </a>
                            <a href="https://bit.ly/4ivLonE" target="_blank"
                               style="text-decoration: none; margin: 0 8px;">
                                <img src="{{ asset('icons/social-media/Twitch.png') }}" alt="Twitch"
                                     style="width: 24px; height: 24px; vertical-align: middle;">
                            </a>
                            <a href="https://bit.ly/3XFE2G7" target="_blank"
                               style="text-decoration: none; margin: 0 8px;">
                                <img src="{{ asset('icons/social-media/YouTube.png') }}" alt="YouTube"
                                     style="width: 24px; height: 24px; vertical-align: middle;">
                            </a>
                            <a href="https://bit.ly/3DrvwUp" target="_blank"
                               style="text-decoration: none; margin: 0 8px;">
                                <img src="{{ asset('icons/social-media/Instagram.png') }}" alt="Instagram"
                                     style="width: 24px; height: 24px; vertical-align: middle;">
                            </a>
                            <a href="https://bit.ly/4kAwwWY" target="_blank"
                               style="text-decoration: none; margin: 0 8px;">
                                <img src="{{ asset('icons/social-media/Facebook.png') }}" alt="Facebook"
                                     style="width: 24px; height: 24px; vertical-align: middle;">
                            </a>
                        </div>
                    </td>
                </tr>
                <!-- Footer Section -->
                <tr>
                    <td style="background-color: #333333; color: #aaaaaa; text-align: center; padding: 20px; font-size: 12px;">
                        <p style="margin: 0; padding: 0; color: #aaaaaa;">
                            © {{ date('Y') }} Amun Sro Server. All rights reserved.
                        </p>
                        <p style="margin: 5px 0 0; color: #aaaaaa;">
                            You are receiving this email because you recently registered an account with Amun Sro
                            Server.<br>
                            If this was not you, please
                            <a href="{{ route('website.help') }}" style="color: #aaaaaa; text-decoration: underline;">
                                contact our support team
                            </a>
                            immediately.
                        </p>
                    </td>
                </tr>
            </table>
            <!-- End Main Container -->
        </td>
    </tr>
</table>
<!-- End Wrapper -->
</body>
</html>
