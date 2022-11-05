@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header"><i class="fa-btn fa-solid fa-table-columns" ></i>{{ __('Adatvédelem') }}</div>
                <div class="card-body justify-content-left">
                
                                <h2 style="text-align:left;">Adatvédelmi nyilatkozat</h2>
                                <p ><hr /></p>
                                    <p style="text-align:justify;" >
                                    Adatainak védelme fontos számunkra! Ebben a tájékoztatóban minden információt megtalál az adatai kezelésével kapcsolatban.
                                    Kérjük, olvassa el figyelmesen. Amennyiben kifogásolja az adatvédelmi eljárásunkat, vagy nem ért egyet a módszerrel, bátran
                                    keressen fel minket a weboldalon feltüntetett elérhetőségek valamelyikén!
                                    </p>
                                <div style="text-align:justify;">
                                    <p><strong>Adatvédelmi nyilatkozat a Weboldal használatához</strong></p>
                                    <p>A <strong>TANONC rendszer </strong>( Programtervező informatikus (fejlesztő) 2021-2023), mint adatkezelő (a továbbiakban: „<strong>Adatkezelő</strong>”) tájékoztatja Önt, hogy a 196/2003. sz. törvényerejű rendelet („<strong>Adatvédelmi törvény</strong>”) és az (EU) 679/2016 rendelet („<strong>GDPR</strong>”) alapján a személyes adatai kezelése az alábbi módon és az alábbi célokból történik:</p>
                                    <p><strong><u>1. Az adatkezelés tárgya</u></strong></p>
                                    <p>Az Adatkezelő az Ön által az Adatkezelővel kötött szerződés alapján adatfeldolgozást nyújtó félként megadott személyazonosító – nem érzékeny – adatokat kezel (a továbbiakban „<strong>Adatok</strong>” vagy „<strong>Személyes adatok</strong>”) (különösen név, vezetéknév, vállalatnév, e-mail-cím stb.), amelyeket Ön adott meg az Adatkezelő <a href="#">TANONC rendszer</a> weboldalán (a továbbiakban „<strong>Weboldal</strong>”) történő böngészés során és/vagy az Adatkezelőnek küldött kapcsolatfelvételi kérelem esetén.</p>
                                    <p><span style="text-decoration: underline;"><strong>2. </strong><strong>Az adatkezelés céljai</strong></span></p>
                                    <p>A személyes adatait az alábbi célokból kezeljük:</p>
                                    <p>A. az előzetes engedélye nélkül <u>oktatási célból</u> az alábbiak érdekében:</p>
                                    <ul>
                                    <li>a Weboldal kezelése és karbantartása;</li>
                                    <li>az Öntől érkező kapcsolatfelvételi kérelmek kezelése;</li>
                                    <li>a csalárd tevékenységek vagy a Weboldallal szembeni káros visszaélések megelőzése vagy feltárása;</li>
                                    <li>az Adatkezelői jogok gyakorlása, mint a bíróság előtti védelemhez való jog;</li>
                                    </ul>
                                    <p>B. az előzetes engedélyével <u>oktatási célból</u> az alábbiak érdekében:</p>
                                    <ul>
                                    <li>az Ön tájékoztatása az Adatkezelőtől érkező rendszeres e-maileken keresztül. Ezenkívül, ha már a felhasználónk, előfordulhat, hogy az ön által megadott e-mail-címre tájékoztató leveleket küldünk önnek az Adatkezelő oktatási projektjével kapcsolatban. Minden elküldött e-mailben lehetősége lesz arra, hogy a megadott hivatkozásra kattintva válaszoljon az üzenetre.</li>
                                    </ul>
                                    <p><strong><u>3. Az adatkezelés módja</u></strong></p>
                                    <p>Az adatainak kezelése elektronikusan történik adatgyűjtési, regisztrációs, szervezési, tárolási, konzultációs, kidolgozási, módosítási, kiválasztási, adatbányászati, összehasonlítási, adathasználati, összekapcsolási, blokkolási, kommunikációs, törlési és megsemmisítési műveleteken keresztül.</p>
                                    <p><strong><u>4. Adattárolás</u></strong></p>
                                    <p>Az Adatkezelő a Személyes adatokat a fenti célok teljesítéséhez szükséges ideig kezeli, de az adatgyűjtést követő 2 évet nem meghaladó ideig.</p>
                                    <p><span style="text-decoration: underline;"><strong>5. Az Adatokhoz való hozzáférés</strong></span></p>
                                    <p>Az Adataihoz a fenti célokból az alábbiak férhetnek hozzá:</p>
                                    <ul>
                                    <li>az Adatkezelő adatkezelésért felelős személyként és/vagy belső Adatfeldolgozóként és/vagy rendszeradminisztrátorként;</li>
                                    </ul>
                                    <p><strong><u>6. </u><u>Adatközlés</u></strong></p>
                                    <p>Adatai az előzetes engedélye nélkül is közölhetők kérésre az ellenőrző szervekkel, rendőrséggel vagy igazságügyi szervekkel, amelyek független Adatkezelői minőségükben intézményi célokból és/vagy vizsgálatok és ellenőrzések során a jogszabályok szerint kezelik az adatokat. Az Adatait ezenkívül harmadik felekkel nem közölhetjük.</p>
                                    <p><span style="text-decoration: underline;"><strong>7. Adattovábbítás</strong></span></p>
                                    <p>Adatai EU-n kívüli országokba nem kerülnek továbbításra.</p>
                                    <p><strong><u>8. Az adatszolgáltatás jellege és a válaszadás visszautasításának következményei</u></strong></p>
                                    <p>Az adatszolgáltatás az alábbi célokból kötelező: ezek az Adatok az Adatkezelő szolgáltatásai, az oktatási projekt sikeres értékelésének érdekében szükségesek és amennyiben úgy dönt, hogy nem adja meg az Adatait, nem tudja igénybe venni az Adatkezelő szolgáltatásait.</p>
                                    <p>Az adatkezelő a megadott adatokat marketing célra nem használja fel.</p>
                                    <p><strong><u>9. Az érintettek jogai</u></strong></p>
                                    <p>Az Adatkezelő tájékoztatja Önt, hogy az adatkezeléssel érintett személyként az alábbiakhoz van joga:</p>
                                    <ul>
                                    <li>megerősítést és érthető tájékoztatást kapni az Önnel kapcsolatos Személyes Adatok meglétéről vagy hiányáról, akkor is, ha még nem regisztrált;</li>
                                    <li>tájékoztatást és, ha szükséges, másolatot kapni az alábbiakról: a) a Személyes Adatok forrása és kategóriája; b) az alkalmazott módszer, ha az adatkezelés elektronikus eszközökkel történik; c) az adatkezelés célja és módja; d) az Adatkezelő és az Adatfeldolgozók azonosítására szolgáló információk; e) azon személyek vagy személyek kategóriái, akik megkaphatják a Személyes adatokat, vagy akik megismerhetik őket, különösen, ha a fogadó fél EU-n kívüli ország vagy nemzetközi szervezet; e) a Személyes adatok tárolásának időtartama, vagy ha ez nem lehetséges, ezen időtartam meghatározásának szempontjai; f) az automatizált döntéshozatali folyamatok megléte, és ha vannak, a mögöttük rejlő módszer, valamint az érintettre vonatkozó jelentőségük és következményeik; g) a Személyes adatok EU-n kívüli országba vagy nemzetközi szervezetbe történő továbbítása esetén a megfelelő óvintézkedések megléte;</li>
                                    <li>késedelem nélkül megkapni a hiányos Adatok frissítését, helyesbítését, vagy ha érdekli, az integrációját;</li>
                                    <li>elérni az alábbi Adatok törlését, anonimizálását vagy blokkolását: a) törvénytelenül kezelt adatok; b) az adatgyűjtés vagy későbbi adatkezelés céljával kapcsolatban már nem szükséges adatok; c) ha visszavonja a hozzájárulását, amelyen az adatkezelés alapul, nincs más jogalap az adatkezelésre; d) ha nem egyezik bele az adatkezelésbe, és nincs olyan jogalap, amely ezt felülírná; e) a jogi kötelezettségekkel összhangban; f) gyermekekre vonatkozó adatok. Az Adatkezelő megtagadhatja az Adatok törlését, ha az adatkezelés az alábbiakhoz szükséges: a) a véleménynyilvánítás szabadságához és a tájékozódáshoz való jog gyakorlása céljából; b) jogi kötelezettséggel összhangban, közérdekű, illetve közhatalmi jogosítvány gyakorlásához szükséges feladat teljesítéséhez; c) közérdekű okokból; d) közérdekű, tudományos vagy történelmi kutatási vagy statisztikai célokból; e) jogi panaszok benyújtásához;</li>
                                    <li>korlátozni az adatkezelést, ha: a) a Személyes adatok pontossága megkérdőjelezhető; b) az adatkezelés jogellenes, és az érintett ellenzi a Személyes adatok törlését; c) az Adatok jogi panaszok benyújtásához történő igénylése esetén; d) annak folyamatban lévő ellenőrzése esetén, hogy az Adatkezelő jogalapjai felülírják-e az érintett jogalapjait;</li>
                                    <li>az Önre vonatkozó Személyes adatokat strukturált, széles körben elterjedt, géppel olvasható formában megkapni, és továbbítani őket egy másik adatkezelőnek anélkül, hogy ezt az adatkezelő, akinek a személyes adatokat megadta, akadályozná, ha az adatkezelés automatizált formában történik;</li>
                                    <li>részben vagy teljes mértékben megtagadni az alábbiakat: a) az Önnel kapcsolatos Személyes adatok kezelését jogos indokok alapján, akkor is, ha elengedhetetlen az Adatgyűjtés szempontjából; b) az Önnel kapcsolatos személyes adatoknak az operátor beavatkozása nélküli, automatikus hívórendszeren, e-mailen és/vagy hagyományos marketinges módszereken (telefonon és/vagy papíralapú levélen) keresztüli reklámanyagküldés, közvetlen értékesítés, piackutatás vagy kereskedelmi kommunikáció céljából történő kezeléséhez.</li>
                                    <li>panaszt benyújtani az illetékes felügyeleti szervnek.</li>
                                    </ul>
                                    <p>Ha szükséges, a fenti esetekben az Adatkezelő köteles közölni az Ön joggyakorlását minden harmadik féllel, akiknek továbbította a Személyes adatokat, kivéve egyes különleges esetekben (pl., ha ez lehetetlennek bizonyul vagy aránytalan erőfeszítéssel járna).</p>
                                    <p><strong><u>10. A jogok gyakorlásának módjai</u></strong></p>
                                    <p>Jogait bármikor gyakorolhatja:</p>
                                    <ul>
                                    <li>ha ajánlott levelet küld az Adatkezelő címére;</li>
                                    <li>ha e-mailt küld a <a href="mailto:nyi-proginfo-2021@googlegroups.com">NYI-Proginfo-2021</a> címre;</li>
                                    </ul>
                                    <p><strong><u>11. Adatkezelő, Adatfeldolgozó és az adatkezelésért felelős személyek </u></strong></p>
                                    <p>Az Adatkezelő:</p>
                                    <ul>
                                    <li>Nyíregyházi Egyetem, Programtervező informatikus (fejlesztő) 2021 levelező csoportja</li>
                                    </ul>
                                    <p>A kinevezett Adatvédelmi Tisztviselő:</p>
                                    <ul>
                                    <li>Projektvezető: Erős József</li>
                                    <li>Vezető fejlesztő: Varga Péter</li>
                                    <li>E-mail cím: nyi-proginfo-2021@googlegroups.com</li>
                                    </ul>
                                    <p>Nyíregyháza, 2022.10.01.</p>
                                    <p>&nbsp;</p>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection