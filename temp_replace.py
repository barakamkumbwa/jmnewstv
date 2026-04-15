from pathlib import Path

replacements = [
    # Header + footer contact details
    ('templates/partials/header.php', 'hello@jmnewstv.co.tz', 'jmnewstv269@gmail.com'),
    ('templates/partials/header.php', '+255 123 456 789', '+255 789 921 814'),
    ('templates/partials/footer.php', 'JM News TV is Tanzania’s leading football media brand delivering live coverage, editorial stories, and premium sponsorship solutions.', 'JM News TV is a professional Tanzanian sports media company delivering football news, analysis, and digital sponsorship solutions.'),

    # Homepage hero and feature blocks
    ('templates/index.php', "Russia's World Cup Championship", 'JM News TV — Tanzania’s football news home'),
    ('templates/index.php', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!', 'JM News TV delivers real-time match previews, club analysis, and digital football coverage across Tanzania.'),
    ('templates/index.php', 'Sea Hawlks ', 'Simba SC '),
    ('templates/index.php', 'Brazil', 'Tanzania'),
    ('templates/index.php', 'London', 'Tanzania'),
    ('templates/index.php', 'Premier League &mdash; Round 10', 'Tanzania Premier League &mdash; Round 15'),
    ('templates/index.php', '10 September / 7:30 AM', '10 February / 8:00 PM'),
    ('templates/index.php', 'Match 1', 'Yanga SC vs Simba SC'),
    ('templates/index.php', 'Match 2', 'Azam FC vs Singida United'),
    ('templates/index.php', 'Match 3', 'Young Africans vs Mtibwa Sugar'),
    ('templates/index.php', 'RealMad vs Striker Who Will Win?', 'Simba SC maintains title push after derby win'),
    ('templates/index.php', 'By Colorlib &bullet; Sep 25, 2018', 'By JM News TV &bullet; Feb 10, 2026'),
    ('templates/index.php', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.', 'Our newsroom delivers fast reaction, expert commentary, and video highlights from the Tanzanian football scene.'),
    ('templates/index.php', 'World Cup Championship', 'Premier League review'),
    ('templates/index.php', 'May 20th 2018', 'Feb 10, 2026'),

    # About page
    ('templates/about.php', '<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>', '<p class="mt-4">JM News TV is a Tanzanian digital sports media company producing football news, match analysis, and live coverage for modern fans.</p>'),
    ('templates/about.php', '<h2 class="text-black">About Sportz</h2>', '<h2 class="text-black">About JM News TV</h2>'),
    ('templates/about.php', '<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis inventore eius, doloremque fugiat id laudantium. Delectus quisquam voluptates deleniti incidunt, iusto magni mollitia rerum! Ex perspiciatis incidunt, laborum repellat illo.</p>', '<p class="lead">Founded in Dar es Salaam in 2025, JM News TV focuses on fast football reporting, studio analysis, and digital storytelling for fans across East Africa.</p>'),
    ('templates/about.php', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo maxime eligendi sunt autem consequuntur minima, quidem iure, nisi laboriosam, nam nostrum saepe voluptatibus repellat quam reiciendis. Accusantium omnis facilis eligendi.</p>', '<p>Our channel brings together experienced journalists, production professionals, and digital specialists to create coverage that informs, inspires, and engages local audiences.</p>'),
    ('templates/about.php', '<h2 class="text-black">Dedicated Team</h2>', '<h2 class="text-black">Professional Team</h2>'),
    ('templates/about.php', '<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis inventore eius, doloremque fugiat id laudantium. Delectus quisquam voluptates deleniti incidunt, iusto magni mollitia rerum! Ex perspiciatis incidunt, laborum repellat illo.</p>', '<p class="lead">We operate with a core team of eight specialists and a growing editorial network to deliver consistent football media content.</p>'),
    ('templates/about.php', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo maxime eligendi sunt autem consequuntur minima, quidem iure, nisi laboriosam, nam nostrum saepe voluptatibus repellat quam reiciendis. Accusantium omnis facilis eligendi.</p>', '<p>From live match reviews to sponsored brand stories, JM News TV combines newsroom discipline with fast digital delivery.</p>'),

    # Contact page
    ('templates/contact.php', '<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>', '<p class="mt-4">Get in touch with JM News TV for advertising, editorial enquiries, or sports media collaborations.</p>'),
    ('templates/contact.php', '203 Fake St. Mountain View, San Francisco, California, USA', 'Nyumba No. YB V / MZ-10, Shina la Mzambarauni, Yombo Vituka, Dar es Salaam, Tanzania'),
    ('templates/contact.php', '+1 232 3235 324', '+255 789 921 814'),
    ('templates/contact.php', 'youremail@domain.com', 'jmnewstv269@gmail.com'),
    ('templates/contact.php', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!', 'Connect with our newsroom, sponsorship team, or local reporting crew to bring your story to Tanzanian football fans.'),

    # News page
    ('templates/news.php', '<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>', '<p class="mt-4">Stay current with Tanzanian football: transfers, match reports, and studio analysis published daily.</p>'),
    ('templates/news.php', 'RealMad vs Striker Who Will Win?', 'Simba SC strengthens title bid after derby victory'),
    ('templates/news.php', 'By Colorlib &bullet; Sep 25, 2018', 'By JM News TV &bullet; Feb 10, 2026'),
    ('templates/news.php', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.', 'Read the latest updates from our newsroom, including previews, interviews, and tactical breakdowns.'),

    # Matches page
    ('templates/matches.php', '<h1 class="bg-text-line">Match</h1>', '<h1 class="bg-text-line">Match Coverage</h1>'),
    ('templates/matches.php', '<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>', '<p class="mt-4">Detailed previews, results, and expert commentary for the top Tanzanian football fixtures.</p>'),
    ('templates/matches.php', 'Sea Hawlks ', 'Yanga SC '),
    ('templates/matches.php', 'Brazil', 'Tanzania'),
    ('templates/matches.php', 'London', 'Tanzania'),
    ('templates/matches.php', 'Premier League &mdash; Round 10', 'Tanzania Premier League &mdash; Round 15'),
    ('templates/matches.php', '10 September / 7:30 AM', '10 February / 8:00 PM'),
    ('templates/matches.php', 'Steelers', 'Simba SC'),
    ('templates/matches.php', 'Packers', 'Azam FC'),
    ('templates/matches.php', 'Patriots', 'Singida United'),
    ('templates/matches.php', 'Cowboys', 'Mtibwa Sugar'),
    ('templates/matches.php', 'Raiders', 'Young Africans'),
    ('templates/matches.php', 'Chiefs', 'Azam FC'),
    ('templates/matches.php', 'Sea Hawlks ', 'Yanga SC '),

    # Team page
    ('templates/team.php', '<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>', '<p class="mt-4">Meet the team behind JM News TV: experienced journalists, digital producers, and live sports specialists.</p>'),
    ('templates/team.php', '<h2 class="text-black">Team</h2>', '<h2 class="text-black">Our Team</h2>'),
    ('templates/team.php', 'Guzman', 'Juma Cheza Babu'),
    ('templates/team.php', 'Caballero', 'Saidi Abdallah Juma'),
    ('templates/team.php', 'Mercado', 'Heri Saidi Lyonga'),
    ('templates/team.php', 'Fazio', 'Bakari Hussein Bushiri'),
    ('templates/team.php', 'Perez', 'Shaibu Hamza Twaha'),
    ('templates/team.php', 'Marcos', 'Juma Miraji Bakari'),
    ('templates/team.php', 'Coach', 'Founder & Managing Director'),
    ('templates/team.php', 'Defender', 'Chief Executive Officer'),
    ('templates/team.php', 'Goal Keeper', 'Production Manager'),
    ('templates/team.php', 'Defender', 'Social Media Manager'),
    ('templates/team.php', 'Midfielder', 'Lead Reporter & Journalist'),
    ('templates/team.php', 'Forward', 'Technical Director'),
]

for path_str, old, new in replacements:
    path = Path(path_str)
    text = path.read_text(encoding='utf-8')
    if old in text:
        text = text.replace(old, new)
        path.write_text(text, encoding='utf-8')
        print(f'Updated {path_str}: {old[:60]} -> {new[:60]}')
    else:
        print(f'No match in {path_str}: {old[:60]}')
