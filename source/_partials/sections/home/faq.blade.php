<section class="py-10 bg-white sm:py-16 lg:py-24 px-4 flex flex-col md:flex-row">
    <div class="w-full md:w-1/2 text-center">
        <h2 class="text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">
            Frequently asked questions
        </h2>
        <p class="mt-4 text-lg text-gray-400">
            Everything You Need to Know Before Getting Started.
    </div>
    <div class="w-full md:w-1/2 mt-8 space-y-4 md:mt-16">
        <div class="transition-all duration-200 rounded bg-gray-100 border border-rounded-sm shadow-lg cursor-pointer">
            <button type="button" id="question1" data-state="closed"
                class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                <span class="flex text-lg font-semibold text-black">What services do you offer?</span>
                <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" class="w-6 h-6 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                <p>
                    Our Services at a Glance
                </p>
                <ul style="list-style-type: disc; padding-left: 20px;">
                    <li>IT Audit & Assurance: Strengthening ITGCs, ITACs, and automated controls to ensure compliance
                        and operational integrity.</li>
                    <li>Risk & Compliance Consulting: Aligning your processes with SOX, SOC, PCI DSS, NIST, CIS, and
                        ISO
                        frameworks.</li>
                    <li>Cybersecurity & Governance: Implementing robust security measures to protect data and meet
                        regulatory standards.</li>
                    <li>Training & Awareness: Equipping teams with the knowledge to manage risk and maintain audit
                        readiness.</li>
                    <li>Technology & Control Optimization: Enhancing systems and controls for efficiency, resilience,
                        and scalability.</li>
                </ul>
            </div>
        </div>
        <div class="transition-all duration-200 rounded bg-gray-100 border border-rounded-sm shadow-lg cursor-pointer">
            <button type="button" id="question2" data-state="closed"
                class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                <span class="flex text-lg font-semibold text-black">How can I get support?</span>
                <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" class="w-6 h-6 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                <p>
                    We make it simple to connect with our team and get the expert support you need:
                </p>
                <ul style="list-style-type: disc; padding-left: 20px;">
                    <li>Contact Us Directly: Reach out via email or phone for immediate assistance with your IT
                        audit,
                        risk, or compliance needs.</li>
                    <li>Consultation Booking: Schedule a free consultation session to discuss your challenges and
                        explore tailored solutions.</li>
                    <li>Ongoing Client Support: Existing clients can access dedicated account managers and priority
                        response channels.</li>
                    <li>Knowledge Resources: We provide guides, templates, and best practices to help you stay
                        audit-ready and compliant.</li>
                </ul>
                <p>
                    Our team is committed to providing responsive, clear, and actionable support—whether you need
                    one-time advice or ongoing partnership.
                </p>
            </div>
        </div>
        <div class="transition-all duration-200 rounded bg-gray-100 border border-rounded-sm shadow-lg cursor-pointer">
            <button type="button" id="question3" data-state="closed"
                class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                <span class="flex text-lg font-semibold text-black">Do You Offer Training?</span>
                <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" class="w-6 h-6 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                <p>
                    Yes, we offer specialized training programs designed to build expertise in IT audit, risk
                    management, and compliance. Our training is tailored to both technical and non-technical teams,
                    helping organizations strengthen their control environment and stay audit-ready.
                </p>
                <p>
                    Our Training Programs Include:
                </p>
                <ul style="list-style-type: disc; padding-left: 20px;">
                    <li>IT Audit Fundamentals & Best Practices – Understanding ITGCs, ITACs, and audit processes.
                    </li>
                    <li>Risk & Compliance Frameworks – Hands-on training on SOX, SOC, PCI DSS, NIST, CIS, and ISO
                        standards.</li>
                    <li>Cybersecurity Awareness & Governance – Building a strong security culture and reducing human
                        risk.</li>
                    <li>Custom Workshops – Tailored sessions based on your organization’s unique systems, policies,
                        and
                        regulatory requirements.</li>
                </ul>
                <p>
                    We offer on-site workshops, virtual sessions, and executive briefings to suit your needs.
                </p>
            </div>
        </div>
    </div>
    <script>
        // JavaScript to toggle the answers and rotate the arrows
        document.querySelectorAll('[id^="question"]').forEach(function (button, index) {
            button.addEventListener('click', function () {
                var answer = document.getElementById('answer' + (index + 1));
                var arrow = document.getElementById('arrow' + (index + 1));

                if (answer.style.display === 'none' || answer.style.display === '') {
                    answer.style.display = 'block';
                    arrow.style.transform = 'rotate(0deg)';
                } else {
                    answer.style.display = 'none';
                    arrow.style.transform = 'rotate(-180deg)';
                }
            });
        });
    </script>
</section>