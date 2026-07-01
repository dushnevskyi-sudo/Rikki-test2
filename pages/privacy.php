<?php /** Privacy Policy */ ?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Legal</span>
        <h1>Privacy Policy</h1>
        <p>Effective date: <?= e($LEGAL['effective_date']) ?></p>
    </div>
</section>

<section class="section">
    <div class="container container--narrow legal">
        <p><strong><?= e($COMPANY['legal_name']) ?></strong> ("<?= e($COMPANY['brand']) ?>", "we", "us" or "our") respects your privacy. This Policy explains what personal information we collect, how we use it, and the choices you have.</p>

        <h2>1. Information We Collect</h2>
        <ul>
            <li><strong>Contact details</strong> you provide through our quote, contact or tracking forms — such as name, company, email and phone number.</li>
            <li><strong>Shipment information</strong> needed to deliver our services, including origin, destination and cargo details.</li>
            <li><strong>Technical data</strong> collected automatically, such as IP address, browser type and pages visited, via cookies and similar technologies.</li>
        </ul>

        <h2>2. How We Use Your Information</h2>
        <ul>
            <li>To prepare quotes and provide the logistics services you request.</li>
            <li>To communicate with you about bookings, shipments and support.</li>
            <li>To comply with legal, customs and trade-compliance obligations.</li>
            <li>To improve our website, services and customer experience.</li>
        </ul>

        <h2>3. Legal Basis</h2>
        <p>We process your information to perform a contract with you, to comply with legal obligations, and for our legitimate business interests, or with your consent where required by law.</p>

        <h2>4. Sharing Your Information</h2>
        <p>We share information only as needed to provide our services — for example with carriers, customs authorities and trusted service providers — or where required by law. We do not sell your personal information.</p>

        <h2>5. Cookies</h2>
        <p>Our website uses cookies to keep the site functioning and to understand how it is used. You can control cookies through your browser settings; disabling them may affect some features.</p>

        <h2>6. Data Retention</h2>
        <p>We keep personal information only as long as necessary for the purposes described here or as required by tax, customs and other legal obligations.</p>

        <h2>7. Security</h2>
        <p>We use appropriate technical and organizational measures to protect your information against unauthorized access, loss or misuse.</p>

        <h2>8. Your Rights</h2>
        <p>Subject to applicable law, you may request access to, correction of, or deletion of your personal information, and object to certain processing. To exercise these rights, contact us using the details below.</p>

        <h2>9. Changes to This Policy</h2>
        <p>We may update this Policy from time to time. The latest version will always appear on this page with its effective date.</p>

        <h2>10. Contact</h2>
        <p>For any privacy questions or requests, contact us at <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a> or write to us at <?= e(company_address()) ?>.</p>
    </div>
</section>
