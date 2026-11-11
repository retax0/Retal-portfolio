<?php

// Store the portfolio information in variables.

$pageTitle = "Retal Mazen Makkawi | Cybersecurity Portfolio";

$studentName = "Retal Mazen Makkawi";

$graduationYear = 2027;

$completionRate = 0.75;

$isCybersecurityStudent = true;

// Define a constant for the website name.

define("SITE_NAME", "Retal's Cybersecurity Portfolio");

// Store technical skills in an array.

$skills = [
    "Cybersecurity Fundamentals",
    "Networking",
    "Java Programming",
    "C++ Programming",
    "HTML & CSS",
    "Robotics",
    "Linux",
    "Binary Exploitation (Pwn)",
    "Cybersecurity Tools"
];

// Store coursework in an array of associative arrays.

$courses = [
    ["name" => "JAVA 101", "focus" => "Java Programming - Beginner Level", "status" => "Completed", "url" => "https://assets.safcsp.cloud/public/certificates/07c143b5-a99c-4b58-b6a2-57885d68524b/1751828284_cd541a7c-ba84-4bfe-88c4-fd6f0f3cfc24.png"],
    ["name" => "JAVA 103", "focus" => "Java Programming - Advanced Level", "status" => "Completed", "url" => "https://assets.safcsp.cloud/public/certificates/07c143b5-a99c-4b58-b6a2-57885d68524b/1751828285_3b04d69a-f400-4b4e-9d55-1d5f4ceb869a.png"],
    ["name" => "Network Programming 101", "focus" => "Network Programming - Beginner Level", "status" => "Completed", "url" => "https://assets.safcsp.cloud/public/certificates/07c143b5-a99c-4b58-b6a2-57885d68524b/1768775123_15587466-c7f6-46be-808b-b42adf8ffc22.png"],
    ["name" => "Network Programming 102", "focus" => "Network Programming - Intermediate Level", "status" => "Completed", "url" => "https://assets.safcsp.cloud/public/certificates/07c143b5-a99c-4b58-b6a2-57885d68524b/1768776841_5d4ba452-21f3-470a-8415-782a1c9afeae.png"],
    ["name" => "Threats, Vulnerabilities and Attacks in Cybersecurity", "focus" => "Cybersecurity Fundamentals", "status" => "Completed", "url" => "https://assets.safcsp.cloud/public/certificates/07c143b5-a99c-4b58-b6a2-57885d68524b/1751840721_386bb501-a5f8-42dc-b36d-6fe7365ffff9.png"],
    ["name" => "Introduction to Cybersecurity", "focus" => "Cybersecurity Fundamentals", "status" => "Completed", "url" => "https://assets.safcsp.cloud/public/certificates/07c143b5-a99c-4b58-b6a2-57885d68524b/1751828119_823270b5-392f-4a49-8291-270aee2f2188.png"],
    ["name" => "SDAIA Fundamentals of Artificial Intelligence", "focus" => "Artificial Intelligence", "status" => "Completed", "url" => "https://drive.google.com/file/d/1rWCHZgWFPY-Bf6eeXrhjaM9LHProYKIi/view?usp=sharing"],
    ["name" => "CompTIA Security+ SY0-701 Course", "focus" => "Cybersecurity Certification Course", "status" => "Completed", "url" => "https://drive.google.com/file/d/1o42w9ltRjsdz8L4t8IIjdLiUxsaon4d3/view?usp=sharing"],
    ["name" => "SDAIA Concepts of Artificial Intelligence and Its Advanced Applications", "focus" => "Artificial Intelligence", "status" => "Completed", "url" => "https://drive.google.com/file/d/183aIoWQwoeF0fLuZ6LnWCCEJZ-SQGPYl/view?usp=sharing"],
    ["name" => "IBM SkillsBuild - EYOUTH Learning Plan", "focus" => "Learning Plan", "status" => "Completed", "url" => "https://drive.google.com/file/d/1iGOYpu-roGWi0ggd-KSHaI_rZmBQQjch/view?usp=sharing"],
    ["name" => "Robotics Event Attendance", "focus" => "Robotics", "status" => "Completed", "url" => "https://drive.google.com/file/d/1UHl-iDqEvmLpff2ZQ8z0MPV0esrd6FX7/view?usp=sharing"],
    ["name" => "Engineering and Architecture Club Appreciation", "focus" => "Volunteering & Activities", "status" => "Completed", "url" => "https://drive.google.com/file/d/1wxltIOQrGjB6Jws2Ud7XYSxJFzQ88xr5/view?usp=sharing"],
    ["name" => "Robotics & AI Club Membership Certificate", "focus" => "Robotics & Artificial Intelligence Club — Umm Al-Qura University", "status" => "Completed", "url" => "https://drive.google.com/file/d/1Y19qaC8AiVcya308GnCVCsD18-lJAuRS/view?usp=sharing"],
    ["name" => "Certificate of Appreciation – Jeel Sumow Initiative", "focus" => "Volunteering & Community Initiatives — Umm Al-Qura University", "status" => "Completed", "url" => "https://drive.google.com/file/d/1I5Yoo1pAo_r4I5l5YooYxTjFXFfxFKZk/view?usp=sharing"],
    ["name" => "Cybersecurity Challenge – National Cybersecurity Academy", "focus" => "Cybersecurity Competition — Riyadh, 30 Sep 2026", "status" => "Attended", "url" => "https://drive.google.com/file/d/1ofw7dWOwVjHh5ByIns_wASxVpHjPcfeF/view?usp=sharing"],
    ["name" => "Certificate of Appreciation – Cybersecurity Challenge", "focus" => "Cybersecurity Department, College of Computing", "status" => "Completed", "url" => "https://drive.google.com/file/d/1kQaGl1V-wDNaUAgEAiF63IZq9CkzZwhY/view?usp=sharing"],
    ["name" => "Cybersecurity & SOC Fundamentals Workshop", "focus" => "2-Day Workshop — Hash Plus Club (Sep 2026)", "status" => "Attended", "url" => "https://drive.google.com/file/d/1XFoJ3usWdpcdnmXmLHeepmrFBJJV4zBi/view?usp=sharing"],
    ["name" => "Microsoft Excel", "focus" => "Doroob E-Training — 6 Training Hours", "status" => "Completed", "url" => "https://drive.google.com/file/d/1eQM6hU18xj8UjMJeCOxfqGKV65IsRsWE/view?usp=sharing"],
    ["name" => "Digital Operations Training Program", "focus" => "Tarmiz Association — 10 Practical Training Hours (Oct 2026)", "status" => "Completed", "url" => "https://drive.google.com/file/d/1yOhJ9P6JsSp5DBv8ooY3RbtJ4_TaoYp-/view?usp=sharing"],
    ["name" => "Drone Foundations Bootcamp – Summit Track", "focus" => "Tuwaiq Club (Tuwaiq Academy) — Umm Al-Qura University", "status" => "Completed", "url" => "https://drive.google.com/file/d/1VSExEnrhI_qGZD9Nl-o7fpffsjRkNlSQ/view?usp=sharing"],
        ["name" => "Cyber Crisis Management Workshop", "focus" => "TU Cybersecurity Club & Tuwaiq Club (Oct 2026)", "status" => "Attended", "url" => "https://drive.google.com/file/d/1iPs4UiSHF_Uy5rNMLYqH1C8FpS4ts4Ra/view?usp=sharing"],
    ["name" => "Imagine Cup Junior – Introductory Session", "focus" => "Ministry of Education — 2 Training Hours", "status" => "Attended", "url" => "https://drive.google.com/file/d/1xkpc9XEdTExXZs7z8PF41pIHHJE_705j/view?usp=sharing"]
];

// A function that returns a greeting.

function getGreeting() {

    $hour = (int) date("G");

    if ($hour < 12) {

        return "Good morning";

    } else {

        return "Good day";

    }

}

// Prepare variables for form validation and results.

$errors = [];

$successMessage = "";

$submittedName = "";

$submittedEmail = "";

$submittedContact = "";

$submittedNumber = "";

$submittedHobbies = [];

// Process the contact form securely on the server.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $submittedName = trim($_POST["name"] ?? "");
    $submittedEmail = trim($_POST["email"] ?? "");
    $submittedContact = $_POST["contactMethod"] ?? "";
    $submittedNumber = trim($_POST["number"] ?? "");
    $submittedHobbies = $_POST["hobbies"] ?? [];
    $updates = isset($_POST["updates"]);

    if ($submittedName === "") {
        $errors[] = "Name is required.";
    }
    if (!filter_var($submittedEmail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
    if (!in_array($submittedContact, ["email", "linkedin"], true)) {
        $errors[] = "Please select a preferred contact method.";
    }
    $validNumber = filter_var($submittedNumber, FILTER_VALIDATE_INT);
    if ($validNumber === false || $validNumber < 1 || $validNumber > 100) {
        $errors[] = "Enter a whole number between 1 and 100.";
    }
    if (!is_array($submittedHobbies)) {
        $submittedHobbies = [];
        $errors[] = "Invalid interests selection.";
    } else {
        $allowedHobbies = ["Cybersecurity", "Networking", "Robotics"];
        foreach ($submittedHobbies as $hobby) {
            if (!in_array($hobby, $allowedHobbies, true)) {
                $errors[] = "Invalid interests selection.";
                break;
            }
        }
    }
    if (empty($errors)) {
        $successMessage = "Form submitted successfully!";
    }
}

?>

<!DOCTYPE html>

<!-- Declares this document as HTML5 -->

<html lang="en">

<head>

    <!-- UTF-8 so Arabic/English characters display correctly -->

    <meta charset="UTF-8">

    <!-- Makes the page scale properly on phones/tablets -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Text shown in the browser tab -->

     <title><?php echo $pageTitle . " | " . SITE_NAME; ?></title>

    <!-- Links the external stylesheet (no inline CSS used) -->

    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <!-- ===== HEADER: name, title, short intro ===== -->

    <header>

<h1><?= htmlspecialchars($studentName) ?></h1>

<p>Cybersecurity Student — 3rd Year</p>
        <p><?= htmlspecialchars(getGreeting(), ENT_QUOTES, 'UTF-8') ?>!</p>

<p>Interested in Cybersecurity, Networking, Programming, and SOC Operations.</p>

    </header>

    <main>

        <!-- ===== ABOUT ME: intro paragraph ===== -->

        <section id="about">

            <h2>About Me</h2>

            <p>

                I am a third-year Cybersecurity student with a strong interest in Security Operations Center (SOC) and defensive cybersecurity. I enjoy understanding how cyber threats happen, analyzing suspicious activities, and learning how security teams detect, investigate, and respond to incidents.

                I am especially interested in networking, threat detection, SIEM, and incident response, and I enjoy exploring how different security tools work together to protect systems and networks. My interest in cybersecurity goes beyond studying theory — I am always looking for opportunities to build my practical skills, solve problems, and learn from real-world security scenarios.

                I also have a passion for robotics and connected systems, which has motivated my interest in the security challenges of drones and autonomous technologies. I am continuously developing my technical and analytical skills with the goal of becoming a skilled cybersecurity professional and contributing to a strong and effective SOC team.

            </p>

        </section>

        <!-- ===== SKILLS: unordered list, order doesn't matter ===== -->

        <section id="skills">

            <h2>Technical Skills</h2>

            <!-- class="skills-list" is targeted by CSS to display as a Flexbox row of badges -->

            <ul class="skills-list">
                <?php foreach ($skills as $skill): ?>
                    <li><?= htmlspecialchars($skill, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>

        </section>

        <!-- ===== CERTIFICATIONS: table so course/status data lines up in columns ===== -->

        <section id="certifications">

            <h2>Coursework &amp; Certifications</h2>

            <table>

                <!-- Column headings -->

                <thead>

                    <tr>

                        <th>Course / Certificate</th>

                        <th>Focus Area</th>

                        <th>Status</th>

                    </tr>

                </thead>

                <!-- One row per certificate; each name links out to the actual certificate file -->

                <tbody>
                    <?php foreach ($courses as $course): ?>
                        <tr>
                            <td>
                                <?php if (!empty($course["url"])): ?>
                                    <a href="<?= htmlspecialchars($course["url"], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($course["name"], ENT_QUOTES, 'UTF-8') ?></a>
                                <?php else: ?>
                                    <?= htmlspecialchars($course["name"], ENT_QUOTES, 'UTF-8') ?>
                                <?php endif; ?>
                            </td>
                            <td><?= htmlspecialchars($course["focus"], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($course["status"], ENT_QUOTES, 'UTF-8') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>

        </section>

        <!-- ===== ACHIEVEMENTS: ordered list because ranking/order matters ===== -->

        <section id="achievements">

            <h2>Achievements</h2>

            <ol>

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1709_Ij8M5PXCub_L6piXOS9DYux4V6lS/view?usp=sharing"

                           target="_blank">

                            3rd Place - Global Robotics Challenge (GRC)

                        </a>

                    </strong>

                    <p>

                        Achieved third place in the Global Robotics Challenge with my team RoboDrift.

                    </p>

                </li>

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1NxCZnSJ1jhoRNAYAANpUAn8boz4aXShf/view?usp=sharing"

                           target="_blank">

                            1st Place in School

                        </a>

                    </strong>

                    <p>

                        Ranked first in my school based on academic achievement.

                    </p>

                </li>

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1KNyXNrVwgYMwZnczd-ou11m5Eqhoc4Mq/view?usp=sharing"

                           target="_blank">

                            Top-10 National Placement - World Robot Olympiad (WRO)

                        </a>

                    </strong>

                    <p>

                        Achieved a top-10 national placement in the World Robot Olympiad.

                    </p>

                </li>

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1I3EKOlIhAoHAxXP2O68EK1qGQvz71EQY/view?usp=sharing"

                           target="_blank">

                            3rd Place - Saudi Schools Basketball League

                        </a>

                    </strong>

                    <p>

                        Achieved third place in the Saudi Schools Basketball League.

                    </p>

                </li>

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/18uW7de2VkPEXrfil4ZYxU2cX7cADQRwy/view?usp=sharing"

                           target="_blank">

                            300+ Volunteer Hours

                        </a>

                    </strong>

                    <p>

                        Completed more than 300 hours of volunteering through different activities and initiatives.

                    </p>

                </li>

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1Jv-XKYJEfbLN4YTPuDBeeBSB6vBd9qEX/view?usp=sharing"

                           target="_blank">

                            Certificate of Appreciation

                        </a>

                    </strong>

                    <p>

                        Digital Rainbow Project, Umm Al-Qura University.

                    </p>

                </li>

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1T1fnxsXiDC77074STKrxvTF4iWe5d9q6/view?usp=sharing"

                           target="_blank">

                            Global Robotics Challenge 2025

                        </a>

                    </strong>

                    <p>

                        Certificate of Appreciation (Riyadh, Saudi Arabia).

                    </p>

                </li>

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/12nIaJLFPCpwgTaB1ValTYeDkWHf9sq1v/view?usp=sharing"

                           target="_blank">

                            Certificate of Appreciation – "I Can Measure" Competition

                        </a>

                    </strong>

                    <p>

                        Achieved full marks in a competition training on simulated questions for international and national assessments (TIMSS/PISA-style) in Mathematics, Chemistry, and Biology.

                    </p>

                </li>

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1CQkm-o_1lnvhhe3sCAk7oKj1uBoSHmIp/view?usp=sharing"

                           target="_blank">

                            Model Student Award – 2nd Semester 2023

                        </a>

                    </strong>

                    <p>

                        Recognized as the model student of the class for outstanding academic performance in the second semester.

                    </p>

                </li>

            

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1hoZ-GwsQsuHGT8_uetcMfA_RiA5FFtGs/view?usp=sharing"

                           target="_blank">

                            Binary Exploitation CTF camp - Computing Club

                        </a>

                    </strong>

                    <p>

                        Solved all Easy, Medium, and Hard pwn challenges (2,549 points) in the final CTF of the Tuwaiq Club Binary Exploitation Bootcamp, Umm Al-Qura University.

                    </p>

                </li>

                                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1kqQE-xQ0HlP4-y4HURIeZl7oPrf7MoKa/view?usp=sharing"

                           target="_blank" rel="noopener noreferrer">

                            Star of the Month - UQU Computer Club

                        </a>

                    </strong>

                    <p>

                        Selected as one of the Computer Club's Stars of the Month in recognition of my contributions to the Scientific Committee, Umm Al-Qura University.

                    </p>

                </li>

                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1oT7Mejii4LJcpPRKQ8eAv6iDOu2Uhqf2/view?usp=sharing"

                           target="_blank" rel="noopener noreferrer">

                            Top 200 Participants - MEDATHON 2026

                        </a>

                    </strong>

                    <p>

                        Selected among the top 200 participants of MEDATHON 2026, organized by the Saudi Youth Healthcare Forum (SYHF).

                    </p>

                </li>

                                <li>

                    <strong>

                        <a href="https://drive.google.com/file/d/1HiWw39QFfqBAJPbDD8RwBUFMxyYghyZq/view?usp=sharing"

                           target="_blank" rel="noopener noreferrer">

                            4th Place - Smart Rocket Launch Prediction Challenge

                        </a>

                    </strong>

                    <p>

                        Placed 4th in the UQU Computer Club's Smart Rocket Workshop competition by predicting rocket launch outcomes (Success / At Risk / Failure) from flight data. Built a Logistic Regression model with Python (pandas, scikit-learn) that reached 86% leave-one-out accuracy, compared with a 42% baseline.

                    </p>

                </li>
             </ol>
        </section>

        <!-- ===== LANGUAGES: simple list ===== -->

        <section id="languages">

            <h2>Languages</h2>

            <ul>

                <li>Arabic - Native</li>

                <li>English - Fluent</li>

                

            </ul>

        </section>

        <!-- ===== INTERESTS: simple list ===== -->

        <section id="interests">

            <h2>Interests</h2>

            <ul>

                <li>Cybersecurity</li>

                <li>Drone Cybersecurity</li>

                <li>Networking</li>

                <li>Robotics</li>

                <li>Programming</li>

                <li>Basketball</li>

            </ul>

        </section>

        <!-- ===== CONTACT: info + a front-end-only demo form ===== -->

        <section id="contact">

            <h2>Get In Touch</h2>

            <p>

                You can connect with me through

                <!-- target="_blank" opens the link in a new tab -->

                <a href="https://www.linkedin.com/in/retal-makkawi-64751435b"

                   target="_blank">

                    LinkedIn

                </a>

                or email me at:

                <strong>

                    retal.makkawi17@gmail.com

                </strong>

            </p>

            <!-- novalidate: disables the browser's built-in validation popups

                 so script.js is fully responsible for checking the fields -->

            <form id="contactForm" method="post" action="">
                <p>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name"
                           value="<?= htmlspecialchars($submittedName, ENT_QUOTES, 'UTF-8') ?>" required>
                </p>
                <p>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email"
                           value="<?= htmlspecialchars($submittedEmail, ENT_QUOTES, 'UTF-8') ?>" required>
                </p>
                <p>
                    <label for="number">Number of projects (1–100):</label>
                    <input type="number" id="number" name="number" min="1" max="100" step="1"
                           value="<?= htmlspecialchars($submittedNumber, ENT_QUOTES, 'UTF-8') ?>" required>
                </p>
                <fieldset>
                    <legend>Preferred contact method:</legend>
                    <label for="emailContact">
                        <input type="radio" id="emailContact" name="contactMethod" value="email" required
                            <?= $submittedContact === "email" ? "checked" : "" ?>> Email
                    </label>
                    <label for="linkedinContact">
                        <input type="radio" id="linkedinContact" name="contactMethod" value="linkedin"
                            <?= $submittedContact === "linkedin" ? "checked" : "" ?>> LinkedIn
                    </label>
                </fieldset>
                <fieldset>
                    <legend>Interests:</legend>
                    <?php foreach (["Cybersecurity", "Networking", "Robotics"] as $hobby): ?>
                        <label>
                            <input type="checkbox" name="hobbies[]" value="<?= htmlspecialchars($hobby, ENT_QUOTES, 'UTF-8') ?>"
                                <?= in_array($hobby, $submittedHobbies, true) ? "checked" : "" ?>>
                            <?= htmlspecialchars($hobby, ENT_QUOTES, 'UTF-8') ?>
                        </label>
                    <?php endforeach; ?>
                </fieldset>
                <p>
                    <input type="checkbox" id="updates" name="updates" <?= !empty($updates) ? "checked" : "" ?>>
                    <label for="updates">I would like to receive project updates.</label>
                </p>
                <button type="submit">Submit</button>
            </form>
            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <?php if (!empty($errors)): ?>
                    <div class="form-errors" role="alert">
                        <h3>Please correct these errors:</h3>
                        <ul><?php foreach ($errors as $error): ?><li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li><?php endforeach; ?></ul>
                    </div>
                <?php else: ?>
                    <div class="form-success" role="status">
                        <h3><?= htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8') ?></h3>
                        <p>Name: <?= htmlspecialchars($submittedName, ENT_QUOTES, 'UTF-8') ?></p>
                        <p>Email: <?= htmlspecialchars($submittedEmail, ENT_QUOTES, 'UTF-8') ?></p>
                        <p>Preferred contact: <?= htmlspecialchars($submittedContact, ENT_QUOTES, 'UTF-8') ?></p>
                        <p>Number of projects: <?= htmlspecialchars($submittedNumber, ENT_QUOTES, 'UTF-8') ?></p>
                        <p>Interests:</p>
                        <?php if ($submittedHobbies): ?>
                            <ul><?php foreach ($submittedHobbies as $hobby): ?><li><?= htmlspecialchars($hobby, ENT_QUOTES, 'UTF-8') ?></li><?php endforeach; ?></ul>
                        <?php else: ?><p>No interests selected.</p><?php endif; ?>
                        <p>Project updates: <?= isset($updates) && $updates ? "Yes" : "No" ?></p>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

        </section>

    </main>

    <!-- ===== FOOTER: copyright + course reference ===== -->

<?php include __DIR__ . "/footer.php"; ?>

    <!-- Placed at the end of body so the DOM is fully loaded before this file runs -->

    <script src="script.js"></script>

</body>

</html>