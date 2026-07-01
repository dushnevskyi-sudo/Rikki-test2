<?php /** Terms of Service */ ?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Legal</span>
        <h1>Terms of Service</h1>
        <p>Effective date: <?= e($LEGAL['effective_date']) ?></p>
    </div>
</section>

<section class="section">
    <div class="container container--narrow legal">
        <p>These Terms of Service ("Terms") govern your access to and use of the website and services provided by <strong><?= e($COMPANY['legal_name']) ?></strong> ("<?= e($COMPANY['brand']) ?>", "we", "us" or "our"), a company registered in the <?= e($COMPANY['address_country']) ?> (EIN: <?= e($COMPANY['ein']) ?>). By using our website or engaging our services, you agree to these Terms.</p>

        <h2>1. Services</h2>
        <p>We provide freight forwarding, transportation, warehousing, customs brokerage and related logistics services. Quotes are estimates based on the information you provide and are subject to change if shipment details differ at the time of tender.</p>

        <h2>2. Quotes &amp; Bookings</h2>
        <p>A quotation does not constitute a binding contract until a booking is confirmed in writing by both parties. Rates are valid for the period stated on the quote and may be affected by fuel surcharges, carrier availability, duties, taxes and currency fluctuations.</p>

        <h2>3. Your Responsibilities</h2>
        <ul>
            <li>Provide accurate and complete shipment information, including weight, dimensions, commodity and value.</li>
            <li>Ensure goods are lawful to ship and properly packaged for transport.</li>
            <li>Supply all documentation required for customs clearance in a timely manner.</li>
            <li>Comply with all applicable export, import and trade-compliance laws.</li>
        </ul>

        <h2>4. Prohibited &amp; Restricted Goods</h2>
        <p>We do not transport illegal, hazardous or restricted items except where expressly agreed in writing and in accordance with applicable regulations. You are responsible for declaring dangerous goods.</p>

        <h2>5. Liability</h2>
        <p>Our liability for loss of or damage to goods is limited to the extent permitted by applicable international conventions and national law. We are not liable for indirect, incidental or consequential damages. We strongly recommend cargo insurance, which we can arrange on request.</p>

        <h2>6. Payment</h2>
        <p>Invoices are payable within the terms stated on the invoice. Late payments may incur interest and may result in suspension of services. All charges are exclusive of taxes unless stated otherwise.</p>

        <h2>7. Cancellations</h2>
        <p>Bookings may be cancelled subject to any costs already incurred on your behalf, including carrier, storage or documentation fees.</p>

        <h2>8. Intellectual Property</h2>
        <p>All content on this website, including text, graphics, logos and code, is the property of <?= e($COMPANY['legal_name']) ?> and may not be reproduced without permission.</p>

        <h2>9. Changes to These Terms</h2>
        <p>We may update these Terms from time to time. The current version will always be posted on this page with its effective date.</p>

        <h2>10. Governing Law</h2>
        <p>These Terms are governed by the laws of the State of <?= e($COMPANY['address_state']) ?>, <?= e($COMPANY['address_country']) ?>, without regard to conflict-of-law principles.</p>

        <h2>11. Contact</h2>
        <p>Questions about these Terms? Contact us at <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a> or <?= e(company_address()) ?>.</p>
    </div>
</section>
