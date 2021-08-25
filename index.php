<!-- Header -->
<?php
    require("inc/header.php");
?>

<!-- Head-Bereich -->
<div id="header">
    <div id="logo"></div>
    <div id="flagge"></div>
    <div class="wrapper">
        <?php
            require("inc/nav.php");
        ?>
    </div>
</div>

<!-- Banner -->
<div id="banner_index">
</div>
<!-- ------------------------------------- -->

<!-- Inhalt -->
<div class="content_box">
    <div class="wrapper">
        <div id="content_index">
            
            <div class="zeile">
                <div id="links">
                    <h2>"Für ein Stück Lebensweg."</h2>
                    <p>Nach diesem Leitsatz arbeiten die Mitarbeiter der Vohburger Hauskrankenpflege GmbH schon seit über <?= date('Y')-'2010' ?> Jahren.<br>
                    </p>
                    <br>
                    <br>
                    <p>Unser Leistungsangebot ist sehr umfangreich. Einen kleinen Überblick bekommen Sie hier:</p>
                    <br>
                </div>
                <div id="rechts">
                    <img src="img/luca.jpg" alt="Wir nutzen die Luca App." width="100%">
                    <br>
                    <br>
                    <table>
                        <tr>
                            <th colspan="2" style="color: #db1015;"><b>Coronabedingt - aktuell Termine nur nach telefonischer Vereinbarung</b></th>
                        </tr>
                        <!--
                        <tr>
                            <th>Sprechzeiten</th>
                            <th>Büro</th>
                        </tr>
                        <tr>
                            <td>Montag</td>
                            <td class="durchgestrichen">10 - 12 Uhr</td>
                        </tr>
                        <tr>
                            <td>Dienstag</td>
                            <td class="durchgestrichen">14 - 16 Uhr</td>
                        </tr>
                        <tr>
                            <td>Mittwoch</td>
                            <td class="durchgestrichen">15 - 17 Uhr</td>
                        </tr>
                        <tr>
                            <td>Donnerstag</td>
                            <td>nach Terminvereinbarung</td>
                        </tr>
                        <tr>
                            <td>Freitag</td>
                            <td>nach Terminvereinbarung</td>
                        </tr>
                        <tr>
                            <td>Samstag</td>
                            <td>geschlossen</td>
                        </tr>
                        <tr>
                            <td>Sonntag</td>
                            <td>geschlossen</td>
                        </tr>
                        -->
                    </table>
                </div>
            </div>
            <!-- Icons -->
            <div class="zeile">
                <!-- ambulant -->
                <div id="index_icon_ambulant">
                    <h2>AMBULANTE PFLEGE</h2>
                    <p>
                        Unsere Schwestern kommen zu Ihnen, oder Ihren pflegebedürftigen Angehörigen nach Hause und unterstützen in den Bereichen der Körperpflege, Mobilität, Ernährung und Förderung von Alltagsfähigkeiten.
                    </p>
                    <br>
                    <a href="services.php">-> MEHR ERFAHREN <-</a>
                </div>

                <!-- WG -->
                <div id="index_icon_tagespflege">
                    <h2>TAGESPFLEGE</h2>
                    <p>Tagespflege Großmehring</p>
                    <br>
                    <a href="services.php">-> MEHR ERFAHREN <-</a>
                </div>

                <!-- Wunden -->
                <div id="index_icon_wunden">
                    <h2>WUNDVERSORGUNG</h2>
                    <p>In Zusammenarbeit mit Ihrem behandelnden Arzt erstellen wir einen  auf Sie zugeschnittenen Behandlungsvorschlag und versorgen Ihre Wunden mit geeigneten Wundauflagen, Verbandsmaterial und Kompressionstherapie (bei Bedarf).</p>
                    <br>
                    <a href="services.php">-> MEHR ERFAHREN <-</a>
                </div>

                <!-- Fahrdienst -->
                <div id="index_icon_fahrdienst">
                <h2>FAHRDIENST</h2>
                <p>
                    Sie benötigen einen flexiblen Fahrdienst? Arztfahrten, Erledigungen, oder auch Fahrten zur Tagespflege übernehmen wir gerne, teilweise ist eine Abrechnung über die Krankenkasse möglich.
                </p>
                <br>
                <a href="services.php">-> MEHR ERFAHREN <-</a>
            </div>
            </div>

            <div class="zeile">
                <!-- EAR -->
                <div id="index_icon_ear">
                    <h2>ESSEN AUF RÄDER</h2>
                    <p>Wir liefern Ihnen auf Wunsch traditionelle Hausmannskost direkt bis an die Haustür. An jedem Tag der Woche - auch an Sonntagen und Feiertagen.</p>
                    <br>
                    <a href="services.php">-> MEHR ERFAHREN <-</a>
                </div>

                <!-- Beratung -->
                <div id="index_icon_beratung">
                    <h2>BERATUNGSBESUCHE NACH §37.3</h2>
                    <p>Pflegen Sie Ihre Angehörigen selbst? Dann verlangt Ihre Pflegekasse regelmässige Beratungsbesuche durch einen zugelassenen Pflegedienst (§37.3).</p>
                    <br>
                    <a href="services.php">-> MEHR ERFAHREN <-</a>
                </div>

                <!-- HWV -->
                <div id="index_icon_hwv">
                    <h2>HAUSWIRTSCHAFTLICHE VERSORGUNG</h2>
                    <p>Gerne übernehmen wir für Sie und mit Ihnen die Aufgaben des Alltags und schaffen so wieder etwas Selbstständigkeit.</p>
                    <br>
                    <a href="services.php">-> MEHR ERFAHREN <-</a>
                </div>

                <!-- Betreuung -->
                <div id="index_icon_betreuung">
                    <h2>BETREUUNG</h2>
                    <p>Sie betreuen Ihre Angehörigen selbst? Gerne übernehmen wir für Sie die Betreuung. Haben Sie z.B. Termine, einen Engpass, oder auch einfach mal nur zur Entlastung.</p>
                    <br>
                    <a href="services.php">-> MEHR ERFAHREN <-</a>
                </div>
            </div>

            <div class="zeile">
                <!-- Platzhalter -->
                <div class="index_icon_platzhalter">
                </div>
                
                <!-- Fußpflege -->
                <div id="index_icon_fusspflege">
                    <h2>FUßPFLEGE</h2>
                    <p>Wir bieten Ihnen medizinische Fußpflege entweder in unserer Praxis, oder bei Ihnen zu Hause.</p>
                    <br>
                    <a href="services.php">-> MEHR ERFAHREN <-</a>
                </div>

                <!-- Seniorennachmittag -->
                <div id="index_icon_seniorennachmittag">
                    <h2>SENIORENNACHMITTAG</h2>
                    <p>Regelmäßig findet in unseren Geschäftsräumen ein Senioren-/Betreuungsnachmittag statt. Es gibt Kaffee, Kuchen, Beschäftigungsangebote und gute Laune.</p>
                    <br>
                    <a href="services.php">-> MEHR ERFAHREN <-</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
        
<!-- ------------------------------------- -->
<!-- Fusszeile -->
<?php
    require("inc/footer.php");
?>