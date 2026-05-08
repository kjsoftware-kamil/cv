<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage Presentatie - Kamil | KJ Software</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; color: #1a1a2e; background: #f8f9fa; }

        section { min-height: auto; display: flex; align-items: center; justify-content: center; padding: 60px 20px; }
        .container { max-width: 960px; width: 100%; }

        .hero { background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); color: #fff; text-align: center; }
        .hero h1 { font-size: 3rem; margin-bottom: 16px; font-weight: 700; }
        .hero .subtitle { font-size: 1.4rem; color: #a8d8ea; margin-bottom: 8px; }
        .hero .meta { font-size: 1rem; color: #7b8ca8; margin-top: 24px; }

        h2 { font-size: 2rem; margin-bottom: 32px; color: #1a1a2e; border-left: 4px solid #0f3460; padding-left: 16px; }
        h3 { font-size: 1.3rem; margin: 24px 0 12px; color: #16213e; }
        h4 { font-size: 1.1rem; margin: 16px 0 8px; color: #16213e; }

        .card { background: #fff; border-radius: 12px; padding: 32px; margin-bottom: 24px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); }
        .card-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        @media (max-width: 768px) { .card-grid { grid-template-columns: 1fr; } .hero h1 { font-size: 2rem; } }

        .stat { text-align: center; padding: 24px; }
        .stat .number { font-size: 2.5rem; font-weight: 700; color: #0f3460; }
        .stat .label { font-size: 0.9rem; color: #666; margin-top: 4px; }

        .timeline { position: relative; padding-left: 32px; }
        .timeline::before { content: ''; position: absolute; left: 8px; top: 0; bottom: 0; width: 2px; background: #0f3460; }
        .timeline-item { position: relative; margin-bottom: 20px; }
        .timeline-item::before { content: ''; position: absolute; left: -28px; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #0f3460; }
        .timeline-item .phase { font-size: 0.8rem; color: #0f3460; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
        .timeline-item p { margin-top: 4px; color: #444; line-height: 1.5; }

        pre { background: #1a1a2e; color: #a8d8ea; padding: 20px; border-radius: 8px; overflow-x: auto; font-size: 0.85rem; line-height: 1.6; margin: 16px 0; }
        code { font-family: 'Cascadia Code', 'Fira Code', monospace; }
        p code, li code, td code { background: #e8edf2; padding: 2px 6px; border-radius: 4px; font-size: 0.9em; color: #0f3460; }

        ul, ol { margin: 12px 0; padding-left: 24px; }
        li { margin-bottom: 8px; line-height: 1.6; color: #444; }

        .tag { display: inline-block; background: #e8edf2; color: #0f3460; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; margin: 4px; font-weight: 500; }

        .comparison { display: grid; grid-template-columns: 1fr auto 1fr; gap: 16px; align-items: center; text-align: center; }
        .comparison .arrow { font-size: 2rem; color: #0f3460; }
        .comparison .before, .comparison .after { padding: 20px; border-radius: 8px; }
        .comparison .before { background: #fee; }
        .comparison .after { background: #efe; }
        .comparison .time { font-size: 2rem; font-weight: 700; }

        table { width: 100%; border-collapse: collapse; margin: 16px 0; }
        th, td { padding: 10px 14px; text-align: left; border-bottom: 1px solid #eee; font-size: 0.95rem; }
        th { background: #f0f2f5; font-weight: 600; color: #1a1a2e; }

        p { line-height: 1.7; color: #444; margin-bottom: 12px; }

        footer { text-align: center; padding: 40px; color: #999; font-size: 0.85rem; }
    </style>
</head>
<body>

{{-- ============================================================ --}}
{{-- SLIDE 1: Intro (30 sec) --}}
{{-- ============================================================ --}}
<section class="hero">
    <div class="container">
        <h1>Stage Presentatie</h1>
        <div class="subtitle">DevOps & Automatisering bij KJ Software</div>
        <div class="meta">
            Kamil &mdash; Mei 2026
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- SLIDE 2: Bedrijf + Uitgangssituatie (1 min) --}}
{{-- ============================================================ --}}
<section>
    <div class="container">
        <h2>De uitgangssituatie</h2>
        <div class="card">
            <p><strong>KJ Software</strong> bouwt webapplicaties op maat voor verschillende klanten. Denk aan administratiesystemen, portalen en meer. Het team werkt aan meerdere projecten tegelijk.</p>
            <p>Elk project bestaat uit meerdere onderdelen (bijvoorbeeld een website, een koppeling met andere systemen, en een inlogpagina). Om hieraan te werken heeft elke developer een <strong>lokale kopie</strong> nodig op zijn eigen computer.</p>
        </div>
        <div class="card">
            <h3>Wat er nog niet was</h3>
            <p>Toen ik begon was er <strong>geen automatisering</strong>. Alles moest met de hand:</p>
            <ul>
                <li>Geen manier om snel een werkende kopie van een project te krijgen</li>
                <li>Geen lokale database — moest je zelf opzetten en configureren</li>
                <li>Alle instellingen (wachtwoorden, adressen, poortnummers) met de hand invullen</li>
                <li>Als je aan twee projecten tegelijk werkte, botsten ze met elkaar</li>
                <li>Geen handleiding of documentatie voor nieuwe collega's</li>
            </ul>
            <p><strong>Ik heb het complete systeem vanaf nul ontworpen en gebouwd.</strong></p>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- SLIDE 3: Opdracht (30 sec) --}}
{{-- ============================================================ --}}
<section>
    <div class="container">
        <h2>Mijn opdracht</h2>
        <div class="card">
            <p>Een systeem bouwen waarmee elke developer met <strong>één commando</strong> een volledig werkende kopie van elk project krijgt op zijn eigen computer — zonder iets handmatig te hoeven instellen.</p>
            <h3>Wat ik moest realiseren</h3>
            <ul>
                <li>De hele technische omgeving automatisch opzetten (server, database, netwerk)</li>
                <li>Met één commando een compleet project klaarzetten</li>
                <li>Meerdere projecten tegelijk kunnen draaien zonder conflicten</li>
                <li>De echte database automatisch kopieren naar de lokale computer</li>
                <li>Zorgen dat alles snel laadt (geen lange wachttijden)</li>
                <li>Documentatie schrijven zodat het hele team ermee kan werken</li>
            </ul>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- SLIDE 4: Wat heb ik gebouwd (1 min) --}}
{{-- ============================================================ --}}
<section>
    <div class="container">
        <h2>Wat heb ik gebouwd</h2>
        <div class="card">
            <p>Een set van <strong>7 automatiseringsscripts</strong> die samen het hele proces afhandelen. In totaal circa <strong>2.550 regels code</strong>.</p>
            <table>
                <thead>
                    <tr><th>Script</th><th>Wat het doet</th></tr>
                </thead>
                <tbody>
                    <tr><td><code>install-docker.sh</code></td><td>Installeert de benodigde software (Docker) op de computer</td></tr>
                    <tr><td><code>setup-mssql.sh</code></td><td>Zet een lokale database server op met alle benodigde gebruikers en rechten</td></tr>
                    <tr><td><code>build-sail-mssql.sh</code></td><td>Maakt een herbruikbare "bouwsteen" zodat projecten sneller opstarten</td></tr>
                    <tr><td><code>clone-multi.sh</code></td><td>Het hoofdscript: kopieert alle onderdelen van een project tegelijkertijd</td></tr>
                    <tr><td><code>clone.sh</code></td><td>Configureert één onderdeel volledig automatisch (het grootste script: 605 regels)</td></tr>
                    <tr><td><code>db-clone.sh</code></td><td>Kopieert de echte database van de server naar je eigen computer</td></tr>
                    <tr><td><code>startup.sh</code></td><td>Start een bestaand project op zodat je er weer aan kunt werken</td></tr>
                </tbody>
            </table>
            <p>Daarnaast heb ik <strong>documentatie</strong> geschreven op de interne wiki zodat het hele team het systeem kan gebruiken.</p>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- SLIDE 5: Hoe het werkt (1 min) --}}
{{-- ============================================================ --}}
<section>
    <div class="container">
        <h2>Hoe het werkt</h2>
        <div class="card">
            <h3>Stap 1: Eenmalige voorbereiding (alleen de eerste keer)</h3>
            <p>Drie commando's die de computer klaarmaken. Dit hoeft maar één keer:</p>
            <ol>
                <li>Software installeren (Docker)</li>
                <li>Lokale database server opzetten</li>
                <li>Herbruikbare bouwsteen aanmaken</li>
            </ol>

            <h3>Stap 2: Project klaarzetten (één commando)</h3>
            <p>De developer voert één commando in en het systeem doet automatisch:</p>
            <ol>
                <li>Alle projectonderdelen tegelijkertijd downloaden</li>
                <li>Alle instellingen automatisch invullen</li>
                <li>De database kopieren</li>
                <li>Alles opstarten en klaar maken</li>
            </ol>
            <p>Na <strong>35 seconden</strong> is het complete project klaar om aan te werken.</p>

            <h3>Stap 3: Dagelijks opstarten</h3>
            <p>De volgende dag hoeft de developer alleen het opstartscript te draaien — binnen een paar seconden is alles weer beschikbaar.</p>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- SLIDE 6: Uitdagingen (1 min) --}}
{{-- ============================================================ --}}
<section>
    <div class="container">
        <h2>Uitdagingen die ik heb opgelost</h2>
        <div class="card-grid">
            <div class="card">
                <h4>Projecten botsten met elkaar</h4>
                <p>Elk project heeft een webadres nodig. Als twee projecten hetzelfde adres willen, werkt geen van beide. Ik heb een formule bedacht die automatisch een uniek adres geeft per project.</p>
            </div>
            <div class="card">
                <h4>Dubbele namen</h4>
                <p>Elk draaiend onderdeel moet een unieke naam hebben. Ik heb gezorgd dat elk onderdeel automatisch een naam krijgt op basis van het project en issuenummer.</p>
            </div>
            <div class="card">
                <h4>Trage installatie (5 min per onderdeel)</h4>
                <p>Bij elke installatie moest een stukje software opnieuw gebouwd worden vanuit broncode. Ik heb een herbruikbare versie gemaakt die je maar één keer hoeft te bouwen.</p>
            </div>
            <div class="card">
                <h4>Trage pagina's (10-15 seconden)</h4>
                <p>De lokale omgeving probeerde verbinding te maken met een externe server. Ik heb de oorzaken gevonden en automatische oplossingen ingebouwd.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- SLIDE 7: Resultaat (1 min) --}}
{{-- ============================================================ --}}
<section>
    <div class="container">
        <h2>Resultaat</h2>

        <div class="card">
            <div class="comparison">
                <div class="before">
                    <div class="time">Handmatig</div>
                    <div>Niets geautomatiseerd</div>
                </div>
                <div class="arrow">&rarr;</div>
                <div class="after">
                    <div class="time">35 sec</div>
                    <div>Volledig automatisch</div>
                </div>
            </div>
        </div>

        <div class="card-grid">
            <div class="card stat">
                <div class="number">~2.550</div>
                <div class="label">Regels code geschreven</div>
            </div>
            <div class="card stat">
                <div class="number">7</div>
                <div class="label">Scripts gebouwd</div>
            </div>
            <div class="card stat">
                <div class="number">1</div>
                <div class="label">Commando nodig</div>
            </div>
            <div class="card stat">
                <div class="number">0</div>
                <div class="label">Handmatige stappen</div>
            </div>
        </div>

        <div class="card">
            <p><strong>Echte test:</strong> een project met 3 onderdelen werd in <strong>35 seconden</strong> volledig automatisch klaargezet — inclusief database, instellingen en alles wat nodig is om te beginnen met ontwikkelen.</p>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- SLIDE 8: Wat heb ik geleerd (1 min) --}}
{{-- ============================================================ --}}
<section>
    <div class="container">
        <h2>Wat heb ik geleerd</h2>
        <div class="card">
            <div class="timeline">
                <div class="timeline-item">
                    <div class="phase">Servers & Containers (Docker)</div>
                    <p>Hoe je applicaties in afgesloten omgevingen (containers) draait, zodat ze niet met elkaar botsen en overal hetzelfde werken.</p>
                </div>
                <div class="timeline-item">
                    <div class="phase">Automatisering (Bash scripting)</div>
                    <p>Complexe taken vertalen naar scripts die het werk automatisch doen. Inclusief meerdere taken tegelijk uitvoeren en fouten opvangen.</p>
                </div>
                <div class="timeline-item">
                    <div class="phase">Problemen analyseren en oplossen</div>
                    <p>Uitzoeken waarom iets traag is of niet werkt, de oorzaak vinden en structureel oplossen in plaats van een tijdelijke fix.</p>
                </div>
                <div class="timeline-item">
                    <div class="phase">Database beheer</div>
                    <p>Een database server opzetten, databases kopieren tussen servers, en gebruikers en rechten beheren.</p>
                </div>
                <div class="timeline-item">
                    <div class="phase">Samenwerken & Documentatie</div>
                    <p>Technische kennis vastleggen zodat collega's het systeem zelfstandig kunnen gebruiken, via de interne wiki.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- SLIDE 9: Afsluiting (30 sec) --}}
{{-- ============================================================ --}}
<section class="hero">
    <div class="container">
        <h1>Bedankt</h1>
        <div class="subtitle">Vragen?</div>
        <div class="meta">
            Kamil<br>
            KJ Software &mdash; Mei 2026
        </div>
    </div>
</section>

<footer>
    Stage Presentatie &mdash; Kamil &mdash; KJ Software &mdash; 2026
</footer>

</body>
</html>
