<?php 
    // include 'db_connect.php'; 
    include 'includes/header.php'; 
?>

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Judicial Hierarchy</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Judicial Hierarchy</span>
        </nav>
    </div>
</section>

<section class="content-section section-padding" style="background: #fff;">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 50px; flex-wrap: wrap; gap: 30px;">
        <div style="flex: 1; min-width: 300px;">
            <p style="color: var(--gold-accent); text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 10px;">Judicial Hierarchy</p>
            <h2 style="font-size: 2.5rem; color: var(--primary-color); line-height: 1.2;">
                Judicial Hierarchy of <span style="font-family: 'Playfair Display', serif; font-style: italic; color: var(--gold-accent);">Sri Lanka</span>
            </h2>
            <div style="width: 50px; height: 3px; background-color: var(--gold-accent); margin-top: 15px;"></div>
        </div>
        <div style="flex: 1; min-width: 300px; color: #666; font-size: 0.95rem; line-height: 1.6;">
            Explore the structure, powers, and responsibilities of the Sri Lankan judiciary, from the Supreme Court to the Primary Court and Judicial Service Commission.
        </div>
    </div>
    <div class="container" style="display: flex; gap: 40px; align-items: flex-start; flex-wrap: wrap;">
        <aside class="judicial-sidebar" style="min-width: 220px; max-width: 260px; flex: 1;">
            <nav>
                <ul class="judicial-nav" style="list-style: none; padding: 0; margin: 0;">
                    <li><button class="judicial-nav-btn active" data-target="supreme">The Supreme Court</button></li>
                    <li><button class="judicial-nav-btn" data-target="appeal">The Court of Appeal</button></li>
                    <li><button class="judicial-nav-btn" data-target="high">The High Court</button></li>
                    <li><button class="judicial-nav-btn" data-target="district">The District Court</button></li>
                    <li><button class="judicial-nav-btn" data-target="magistrate">The Magistrate Court</button></li>
                    <li><button class="judicial-nav-btn" data-target="primary">The Primary Court</button></li>
                    <li><button class="judicial-nav-btn" data-target="jsc">The Judicial Service Commission</button></li>
                </ul>
            </nav>
        </aside>
        <main class="judicial-content" style="flex: 3; min-width: 280px;">
            <div id="supreme" class="judicial-panel">
                <h2>The Supreme Court</h2>
                <p>The Supreme Court of the Republic of Sri Lanka shall be the highest and final superior Court of record.</p>
                <p>The Supreme Court shall consist of the Chief Justice and of not less than six and not more than ten other judges.</p>
                <h3>Powers of the Supreme Court</h3>
                <ul>
                    <li><b>Appellate Jurisdiction:</b> Final and conclusive civil and criminal appellate jurisdiction on appeals from the Court of Appeal or any Court of first Instance.</li>
                    <li><b>Constitutional Jurisdiction:</b> Interpretation of the Constitution and to determine whether any bills are inconsistent with the Constitution.</li>
                    <li><b>Protection of fundamental rights:</b> Freedom of thought, conscience, freedom from torture, right to equality, freedom from arbitrary arrest/detention, freedom of speech, assembly and association.</li>
                    <li>Jurisdiction in respect of the breaches of Parliamentary privileges.</li>
                    <li>Presidential election jurisdiction, enrolment/suspension/removal of attorneys-at-law.</li>
                </ul>
            </div>
            <div id="appeal" class="judicial-panel" style="display:none;">
                <h2>The Court of Appeal</h2>
                <p>The Court of Appeal consists of the President of the Court of Appeal and not less than six and not more than eleven other Judges.</p>
                <p>Next to the Supreme Court, the Court of Appeal shall be the highest and final superior court of record.</p>
                <h3>Powers of the Court of Appeal</h3>
                <ul>
                    <li><b>Appellate Jurisdiction:</b> Over the courts of first instance and other judicial institutions.</li>
                    <li><b>Jurisdiction for correction:</b> Correction of all errors in fact or in law.</li>
                    <li>Cognizance of matters and things of Courts of First Instance. May call for case records and examine them.</li>
                    <li>Powers to impose punishment for contempt of Court. Imprisonment for a period not less than 08 years can be imposed.</li>
                    <li><b>Power to issue writs:</b> Writs of certiorari, procedendo, mandamus and quo warranto can be issued.</li>
                </ul>
            </div>
            <div id="high" class="judicial-panel" style="display:none;">
                <h2>The High Court</h2>
                <p>The High Court is the only Court which exercises the jurisdiction of the Court of First Instance and the appellate jurisdiction.</p>
                <p>It exercises the civil jurisdiction as well as the criminal jurisdiction.</p>
                <h3>The High Court of Civil Appeal</h3>
                <p>Established to expedite civil appeals in District Courts. Appeals in District Courts are heard by the High Court of Civil Appeal.</p>
                <h3>High Court And The Provincial High Court</h3>
                <p>Cases can be heard in the presence of a Judge of the High Court or a Jury. The High Court takes cognizance of cases on submission of indictments by the Attorney General.</p>
                <h3>Commercial High Court</h3>
                <p>Empowered to hear cases involving commercial transactions exceeding three million rupees. Jurisdiction over cases under the Intellectual Property Act.</p>
            </div>
            <div id="district" class="judicial-panel" style="display:none;">
                <h2>The District Court</h2>
                <p>Jurisdiction to take cognizance of all civil income and insolvency testamentary cases, marital disputes, family jurisdiction over divorce and nullity of marriage cases, guardianship of persons of unsound mind and their property, testamentary cases of persons deceased without a last will, care of minors and their property.</p>
            </div>
            <div id="magistrate" class="judicial-panel" style="display:none;">
                <h2>The Magistrate Court</h2>
                <ul>
                    <li>Jurisdiction over criminal cases filed under the Penal Code and other laws within its jurisdiction.</li>
                    <li>First and post mortem examinations.</li>
                    <li>Issue of Warrants of Judicial orders to arrest and produce suspected persons.</li>
                    <li>Issue of search warrants.</li>
                    <li>Ordering persons to enter into bonds of good conduct and preventive jurisdiction on public nuisance.</li>
                </ul>
            </div>
            <div id="primary" class="judicial-panel" style="display:none;">
                <h2>The Primary Court</h2>
                <ul>
                    <li>Exercises civil and criminal jurisdiction within its area.</li>
                    <li>Value of claim for compensation should not exceed Rs. 1500/-.</li>
                    <li>Cases under Section 66 of the Primary Court Procedure Act.</li>
                    <li>Hearing of land disputes involving threat to or breach of peace.</li>
                </ul>
            </div>
            <div id="jsc" class="judicial-panel" style="display:none;">
                <h2>The Judicial Service Commission</h2>
                <ul>
                    <li>Consists of the Chief Justice and two other Supreme Court Judges appointed by the President.</li>
                    <li>The Chief Justice is the Ex Officio Chairman of the Judicial Service Commission.</li>
                    <li>The Secretary shall not hold the office of the Judge of the Court of First Instance on completion of his tenure as Secretary.</li>
                    <li>The Secretary to the Judicial Service Commission shall be a Senior Judge of the Court of First Instance.</li>
                    <li>Interference in the Judicial Service Commission work is an offence punishable with a fine of Rs. 1500/- and imprisonment after hearing the case in the presence of the High Court without a jury.</li>
                </ul>
            </div>
        </main>
    </div>
</section>

<script>
    // Sidebar navigation logic
    const navBtns = document.querySelectorAll('.judicial-nav-btn');
    const panels = document.querySelectorAll('.judicial-panel');
    navBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            navBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const target = this.getAttribute('data-target');
            panels.forEach(panel => {
                if(panel.id === target) {
                    panel.style.display = '';
                } else {
                    panel.style.display = 'none';
                }
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?>