<?php

use App\Entity\Quote;
use Doctrine\ORM\EntityManager;

$data = [
    [
        'quote' => 'Es ist nicht wichtig, wie groß der erste Schritt ist, sondern in welche Richtung er geht.',
        'author' => 'unbekannt'
    ],
    ['quote' => 'Die Entfernung ist unwichtig. Nur der erste Schritt ist wichtig.', 'author' => 'Marquise du Deffand'],
    ['quote' => 'Wenn du nichts veränderst, wird sich auch nichts verändern!', 'author' => 'Sparky Anderson'],
    ['quote' => 'Niemand weiß, was er kann, bis er es probiert hat.', 'author' => 'Publilius Syrus'],
    [
        'quote' => 'Ich kann Versagen akzeptieren, keiner ist perfekt. Aber was ich nicht akzeptieren kann ist, es nicht zu versuchen.',
        'author' => 'Michael Jordan'
    ],
    [
        'quote' => 'Was immer du tun kannst oder träumst es zu können, fang damit an.',
        'author' => 'Johann Wolfgang von Goethe'
    ],
    [
        'quote' => 'Wenn Du willst, dass Dir eine leichte Aufgabe richtig schwer erscheint, schieb sie einfach auf.',
        'author' => 'Olin Miller'
    ],
    ['quote' => 'Wie schnell sich “nicht jetzt” in “niemals” verwandelt.', 'author' => 'Martin Luther'],
    ['quote' => 'In einem Jahr wirst Du Dir wünschen, Du hättest heute angefangen.', 'author' => 'Karen Lamb'],
    ['quote' => 'Mut steht am Anfang des Handelns, Glück am Ende.', 'author' => 'Demokrit'],
    [
        'quote' => 'Beginne mit dem Notwendigen, dann tue das Mögliche und plötzlich wirst Du das Unmögliche tun.',
        'author' => 'Franz von Assisi'
    ],
    ['quote' => 'Fange zu tun an, dann hast du auch die Kraft dazu.', 'author' => 'Ralph Waldo Emerson'],
    ['quote' => 'Zu langes Nachdenken über eine Sache macht sie oft unmöglich.', 'author' => 'Eva Young'],
    [
        'quote' => 'Es gibt nur zwei Dinge die du falsch machen kannst: aufhören oder gar nicht erst anfangen!',
        'author' => 'unbekannt'
    ],
    ['quote' => 'Warte nicht. Der Zeitpunkt wird niemals perfekt sein.', 'author' => 'Napoleon Hill'],
    ['quote' => 'Manche Berge scheinen unüberwindlich, bis wir den ersten Schritt tun.', 'author' => 'unbekannt'],
    ['quote' => 'Eine Reise mit tausend Meilen beginnt mit einem kleinen Schritt.', 'author' => 'Laozi'],
    [
        'quote' => 'Du musst nicht spitze sein, um anzufangen. Aber du musst anfangen, um spitze zu werden.',
        'author' => 'Zig Zagler'
    ],
    [
        'quote' => 'Der eine wartet, dass die Zeit sich wandelt, der andere packt sie kräftig an und handelt.',
        'author' => 'Dante Alighieri'
    ],
    ['quote' => 'Sportliche Menschen sind nicht verrückt, sie leben nur artgerecht.', 'author' => 'unbekannt'],
    [
        'quote' => 'Du musst bereit sein die Dinge zu tun, die andere niemals tun werden, um die Dinge zu haben, die andere niemals haben werden.',
        'author' => 'Les Brown'
    ],
    [
        'quote' => 'Manche Leute wollen, dass es passiert, manche wünschen, es würde passieren, andere sorgen dafür, dass es passiert.',
        'author' => 'Michael Jordan'
    ],
    [
        'quote' => 'Der Unterschied zwischen dem, der du bist und dem, der du sein möchtest, ist das was du tust.',
        'author' => 'unbekannt'
    ],
    ['quote' => 'Niemand, der sein Bestes gegeben hat, hat es später bereut.', 'author' => 'unbekannt'],
    ['quote' => 'Was Du mit guter Laune tust, fällt Dir nicht schwer.', 'author' => 'ungarische Weisheit'],
    [
        'quote' => 'Wenn es einen Glauben gibt, der Berge versetzen kann, so ist es der Glaube an die eigene Kraft.',
        'author' => 'Marie von Ebner-Eschenbach'
    ],
    ['quote' => 'Jeder Tag ist eine neue Chance, das zu tun, was du möchtest.', 'author' => 'Friedrich von Schiller'],
    ['quote' => 'Nur wer selbst brennt, kann Feuer in anderen entfachen.', 'author' => 'Augustinus'],
    ['quote' => 'Wenn du alles gibst, kannst du dir nichts vorwerfen.', 'author' => 'Dirk Nowitzki'],
    ['quote' => 'Wer etwas will, findet Wege. Wer etwas nicht will, der findet Gründe.', 'author' => 'Götz Werner'],
    ['quote' => 'Du bist deine eigene Grenze, erhebe dich darüber!', 'author' => 'Hafes'],
    [
        'quote' => 'Der Unterschied zwischen dem Unmöglichen und dem Möglichen liegt in der Entschlossenheit einer Person.',
        'author' => 'Tommy Lasorda'
    ],
    [
        'quote' => 'Das größte Vergnügen im Leben besteht darin, Dinge zu tun, die man nach Meinung anderer Leute nicht fertig bringt!',
        'author' => 'Marcel Aymé'
    ],
    ['quote' => 'Motivation bringt Dich in Gang. Gewohnheit hält Dich in Schwung.', 'author' => 'Jim Rohn'],
    ['quote' => 'Was immer du tust. Tue es mit ganzem Herzen.', 'author' => 'unbekannt'],
    ['quote' => 'Tu es oder tu es nicht. Es gibt kein Versuchen.', 'author' => 'Meister Yoda in Star Wars'],
    ['quote' => 'Es spielt kein Rolle, woher du kommst. Alles was zählt ist, wohin du gehst.', 'author' => 'unbekannt'],
    [
        'quote' => 'Nicht die Menschen, die immer gewinnen sind die stärksten, sondern die die niemals aufgeben.',
        'author' => 'unbekannt'
    ],
    ['quote' => 'Es ist immer zu früh, um aufzugeben!', 'author' => 'unbekannt'],
    ['quote' => 'Wer kämpft, kann verlieren. Wer nicht kämpft, hat schon verloren!', 'author' => 'Bertolt Brecht'],
    [
        'quote' => 'Man liebt das, wofür man sich müht, und man müht sich für das, was man liebt.',
        'author' => 'Erich Fromm'
    ],
    ['quote' => 'Ehrgeiz ist die Fähigkeit, die Träume real werden lässt.', 'author' => 'Niklas Gennen'],
    ['quote' => 'Es gibt mehr Leute, die kapitulieren, als solche, die scheitern.', 'author' => 'Henry Ford'],
    [
        'quote' => 'Ich habe in meiner Karriere 9000 Würfe daneben geworfen. Ich habe fast 300 Spiele verloren. 26 mal wurde mir der alles entscheidende Wurf anvertraut – und ich habe ihn verfehlt. Ich habe immer und immer wieder versagt in meinem Leben, und daher war ich so erfolgreich.',
        'author' => 'Michael Jordan'
    ],
    [
        'quote' => 'Wer aufhört, besser werden zu wollen, hört auf, gut zu sein.',
        'author' => 'Marie von Ebner-Eschenbach'
    ],
    [
        'quote' => 'Wenn Du in Deinem Training immer nur 90% gibst, dann wirst Du auch wenn es darauf ankommt nur 90% geben.',
        'author' => 'Michael Owen'
    ],
    ['quote' => 'Die Kunst ist, einmal mehr aufzustehen, als man umgeworfen wird.', 'author' => 'Winston Churchill'],
    [
        'quote' => 'Wer einen Misserfolg nur als kleinen Umweg betrachtet, verliert nie sein Ziel aus den Augen.',
        'author' => 'Martin Luther'
    ],
    ['quote' => 'Mit Fleiß, mit Mut und festem Willen lässt jeder Wunsch sich endlich stillen.', 'author' => 'Novalis'],
    [
        'quote' => 'Unsere Körper sind unsere Gärten – unsere Willen sind unsere Gärtner.',
        'author' => 'William Shakespeare'
    ],
    [
        'quote' => 'In dem Moment an dem du am aufgeben bist denke daran, warum du soviel gegeben hast.',
        'author' => 'Fernando Torres'
    ],
    ['quote' => 'Entweder werden wir einen Weg finden oder wir machen einen!', 'author' => 'Hannibal'],
    ['quote' => 'Der Schmerz, den du heute fühlst, ist die Kraft, die morgen spürst.', 'author' => 'unbekannt'],
    [
        'quote' => 'Indem man das, was man zu tun hat, aufschiebt, läuft man Gefahr, es nie tun zu können.',
        'author' => 'Charles-Pierre Baudelaire'
    ],
    [
        'quote' => 'Gefühl von Grenze darf nicht heißen: hier bist du zu Ende, sondern: hier hast du noch zu wachsen.',
        'author' => 'Emil Gött'
    ],
    [
        'quote' => 'Kontinuierliche Anstrengung – nicht Kraft oder Intelligenz – ist der Schlüssel, um Dein Potential freizusetzen.',
        'author' => 'Liane Cardes'
    ],
    [
        'quote' => 'Hindernisse sollten Dich nicht aufhalten. Wenn Du gegen eine Wand läufst, dreh Dich nicht um, gib nicht auf. Finde heraus wie Du darüber klettern, hindurchgehen oder außenrum gehen kannst.',
        'author' => ' Michael Jordan'
    ],
    [
        'quote' => 'Mach es wie die Briefmarke. Sie sichert sich den Erfolg durch die Fähigkeit an einer Sache festzuhalten bis sie ankommt.',
        'author' => 'Josh Billings'
    ],
    ['quote' => 'Auch im Alphabet kommt Anstrengung vor Erfolg.', 'author' => 'deutsche Weisheit'],
    ['quote' => 'Das Geheimnis des Erfolgs ist anzufangen.', 'author' => 'Mark Twain'],
    ['quote' => 'Leidenschaft steht am Anfang jeden Erfolgs.', 'author' => 'unbekannt'],
    ['quote' => 'Erfolg hat drei Buchstaben: TUN', 'author' => 'Johann Wolfang von Goethe'],
    [
        'quote' => 'Der Preis des Erfolges ist Hingabe, harte Arbeit und unablässiger Einsatz für das, was man erreichen will.',
        'author' => 'Frank Lloyd Wright'
    ],
    [
        'quote' => 'Erfolg ist nicht etwas, das einfach passiert. Erfolg wird erlernt, Erfolg wird trainiert.',
        'author' => 'George Halas'
    ],
    ['quote' => 'Unsere Fehlschläge sind oft erfolgreicher als unsere Erfolge.', 'author' => 'Henry Ford'],
    [
        'quote' => 'Ich messe den Erfolg nicht an meinen Siegen, sondern daran, ob ich jedes Jahr besser werde.',
        'author' => 'Tiger Woods'
    ],
    ['quote' => 'Erfolg hat nur, wer etwas tut, während er auf den Erfolg wartet.', 'author' => 'Thomas Alva Edison'],
    ['quote' => 'Vergiss nicht, Erfolg ist die Belohnung für schwere Arbeit.', 'author' => 'Sophokles'],
    ['quote' => 'Schmerz ist vergänglich, Erfolg bleibt für immer!', 'author' => 'unbekannt'],
    [
        'quote' => 'Das größte Hindernis auf dem Weg zum Erfolg ist die Angst vor dem Scheitern.',
        'author' => 'Sven-Göran Eriksson'
    ],
    ['quote' => 'Für das Können ist es nur einen Beweis: das Tun.', 'author' => 'Marie von Ebner-Eschenbach'],
    [
        'quote' => 'Erfolgreich zu sein setzt zwei Dinge voraus: Klare Ziele und den brennenden Wunsch, sie zu erreichen.',
        'author' => 'Johann Wolfgang von Goethe'
    ],
    [
        'quote' => 'Gewinnen heißt, dass Du bereit bist länger zu laufen, härter zu arbeiten und mehr zu geben als alle anderen.',
        'author' => 'Vince Lombardi'
    ],
    [
        'quote' => 'Wenn du laufen willst, lauf eine Meile. Wenn du ein neues Leben kennenlernen willst, dann lauf Marathon.',
        'author' => 'Emil Zatopek'
    ],
    ['quote' => 'Erfolg sollte stets nur die Folge, nicht das Ziel des Handelns sein.', 'author' => 'Gustave Flaubert'],
    [
        'quote' => 'Träume sind der Schlüssel zum Glück. Seine Träume wahr zu machen, ist der Schlüssel zum Erfolg.',
        'author' => 'unbekannt'
    ],
    ['quote' => 'Es ist nie zu spät, das zu werden, was man hätte sein können.', 'author' => 'George Eliot'],
    ['quote' => 'Ein Traum ist unerlässlich, wenn man die Zukunft gestalten will.', 'author' => 'Victor Hugo'],
    ['quote' => 'Alle Träume können wahr werden, wenn wir den Mut haben, ihnen zu folgen.', 'author' => 'Walt Disney'],
    [
        'quote' => 'Unsere Träume können wir erst dann verwirklichen, wenn wir uns entschließen, einmal daraus zu erwachen.',
        'author' => 'Josephine Baker'
    ],
    [
        'quote' => 'Wenn wir uns von unseren Träumen leiten lassen, wird der Erfolg all unsere Erwartungen übertreffen.',
        'author' => 'Henry David Thoreau'
    ],
    [
        'quote' => 'Nenne dich nicht arm, weil deine Träume nicht in Erfüllung gegangen sind; wirklich arm ist nur, der nie geträumt hat.',
        'author' => 'Marie von Ebner-Eschenbach'
    ],
    ['quote' => 'Die Tat unterscheidet das Ziel vom Traum.', 'author' => 'Lebensweisheit'],
    ['quote' => 'Der Glaube an unsere Kraft kann sie ins unendliche verstärken.', 'author' => 'Friedrich von Schlegel'],
    [
        'quote' => 'Nicht der Wille ist der Antrieb unseres Handelns, sondern unsere Vorstellungskraft.',
        'author' => 'Émile Coué'
    ],
    ['quote' => 'Achte auf deine Gedanken! Sie sind der Anfang deiner Taten.', 'author' => 'chin. Sprichwort'],
    ['quote' => 'Glaube, dass du kannst und du bist schon halb dort.', 'author' => 'Greg Plitt'],
    ['quote' => 'Nichts im Leben wurde je im Traum erreicht. Also handle!', 'author' => 'unbekannt'],
    [
        'quote' => 'Nur Ziele, die wir schriftlich festhalten, sind echte Ziele. Alle andern sind reine Phantasie.',
        'author' => 'Brian Tracy'
    ],
    ['quote' => 'Ziele sind Träume mit einer Deadline.', 'author' => 'Napoleon Hill'],
    ['quote' => 'Wer immer tut, was er schon kann, bleibt immer das, was er schon ist.', 'author' => 'Henry Ford'],
    ['quote' => 'Wer ins Blaue zielt, wird kaum ins Schwarze treffen.', 'author' => 'unbekannt'],
    ['quote' => 'Nur wer sein Ziel kennt, findet den Weg.', 'author' => 'Laozi'],
    [
        'quote' => 'Der Langsamste, der sein Ziel nur nicht aus den Augen verliert, geht immer noch geschwinder als der, der ohne Ziel herumirrt.',
        'author' => 'Gotthold Ephraim Lessing'
    ],
    [
        'quote' => 'Ziele zu setzen ist der erste Schritt das unsichtbare in das sichtbare zu verwandeln.',
        'author' => 'Tony Robbins'
    ],
    [
        'quote' => 'Der Mensch arbeitet immer für ein Ziel. Wer jedoch keine eigenen Ziele hat, arbeitet für die von Anderen.',
        'author' => 'Brian Tracy'
    ],
    ['quote' => 'Fordert man sich nicht unablässig selber heraus, verdorrt man.', 'author' => 'Lido ‚Lee‘ Iacocca'],
    ['quote' => 'Man muss das Unmögliche versuchen, um das mögliche zu erreichen.', 'author' => 'Hermann Hesse'],
    [
        'quote' => 'Nichts verschafft mehr Ruhe, als ein gefasster Entschluss.',
        'author' => 'Charles Maurice de Talleyrand'
    ],
    ['quote' => 'Erst Ziele geben unserem Leben einen Sinn.', 'author' => 'C.H. Parkhurst'],
    [
        'quote' => 'Der Erfolgreiche überprüft seine Begabungen und Fähigkeiten, ehe er sein Ziel steckt.',
        'author' => 'Vera F. Birkenbihl'
    ],
    ['quote' => 'Wer all seine Ziele erreicht, hat sie zu niedrig gewählt.', 'author' => 'Herbert von Karajan'],
    [
        'quote' => 'Begeisterung ist der nie erlahmende Impuls, der uns beharrlich unser Ziel verfolgen lässt.',
        'author' => 'Norman V. Peale'
    ],
    [
        'quote' => 'Das große Meisterstück des Lebens besteht darin, Ziele zu erreichen und die Gegenwart bewusst zu erleben.',
        'author' => 'Jörg Löhr'
    ],
    ['quote' => 'Wer sich die richtigen Ziele setzt, kann nur gewinnen.', 'author' => 'Marc M. Galal'],
    [
        'quote' => 'Du denkst immer drei Tore voraus – wer am Start schon ans Ziel denkt, kommt meist nicht dort an.',
        'author' => 'Alberto Tomba'
    ],
    [
        'quote' => 'Ein festes Ziel weckt die Begeisterung. Begeisterungsfähigkeit + Beharrlichkeit führen immer zum Ziel!',
        'author' => 'Unbekannt'
    ],
    [
        'quote' => 'Wer nicht mutig genug ist, Risiken einzugehen, wird es im Leben zu nichts bringen.',
        'author' => 'Muhammed Ali'
    ],
    [
        'quote' => 'Es ist nicht wenig Zeit, die wir haben, sondern es ist viel Zeit, die wir nicht nutzen.',
        'author' => 'Lucius Annaeus Seneca'
    ],
    [
        'quote' => 'Die einzige Person mit der du konkurrierst, ist jene die du im Spiegel siehst!',
        'author' => 'unbekannt'
    ],
    ['quote' => 'Jeder Mensch ist der Architekt seiner eigenen Zukunft.', 'author' => 'Sallust'],
    [
        'quote' => 'Sorge dich gut um deinen Körper. Es ist der einzige Ort, den du zum Leben hast.',
        'author' => 'Jim Rohn'
    ],
    [
        'quote' => 'Du wirst als Mensch nur wachsen, wenn du dich ausserhalb deiner Komfortzone befindest.',
        'author' => 'Percy Cerutty'
    ],
    ['quote' => 'Manchmal gewinnst du und manchmal lernst du!', 'author' => 'unbekannt'],
    [
        'quote' => 'Wer einmal sich selbst gefunden hat, der kann nichts auf dieser Welt verlieren.',
        'author' => 'Stefan Zweig'
    ],
    ['quote' => 'Wenn du die Absicht hast, dich zu erneuern, tu es jeden Tag.', 'author' => 'Konfuzius'],
    [
        'quote' => 'Wir sind verantwortlich für das, was wir tun, aber auch für das, was wir nicht tun.',
        'author' => 'Voltaire'
    ],
    [
        'quote' => 'Es gibt nur einen Erfolg: Das Leben nach eigenen Vorstellungen leben zu können.',
        'author' => 'Christopher Morley'
    ],
    ['quote' => 'Man kann niemanden überholen, wenn man in seine Fußstapfen tritt.', 'author' => 'Francois Truffaut'],
    [
        'quote' => 'Unser Schicksal hängt nicht von den Sternen ab, sondern von unserem Handeln.',
        'author' => 'William Shakespeare'
    ],
    [
        'quote' => 'Versuch nicht besser zu sein als andere. Versuche besser zu sein als Du gestern warst.',
        'author' => 'unbekannt'
    ],
    ['quote' => 'Was ohne Ruhepausen geschieht, ist nicht von Dauer.', 'author' => 'Ovid'],
    ['quote' => 'Erfahrung nennt man die Summe aller Irrtümer.', 'author' => 'Thomas Edison'],
    [
        'quote' => 'Die Erfahrung ist wie eine Laterne auf unserem Rücken. Sie beleuchtet immer nur den Weg, der bereits hinter uns liegt.',
        'author' => 'Konfuzius'
    ],
    [
        'quote' => 'Die Natur hält etwas vom Einfachen. Ein Mehr ist vergebens, wenn ein Weniger genügt.',
        'author' => 'Isaac Newton'
    ],
    [
        'quote' => 'Alles sollte so einfach wie möglich gemacht werden, aber nicht einfacher.',
        'author' => 'Albert Einstein'
    ],
    [
        'quote' => 'Entscheidungen richten sich nicht nach Möglichkeiten, Möglichkeiten werden durch Entscheidungen geschaffen.',
        'author' => 'Markus Heim'
    ],
    ['quote' => 'Was du heute denkst, wirst du morgen tun.', 'author' => 'Leo Tolstoi'],
    ['quote' => 'Talent, das ist Glaube an sich selbst, an die eigene Kraft.', 'author' => 'Maxim Gorki'],
    ['quote' => 'Aus der Stille werden die wahrhaft großen Dinge geboren.', 'author' => 'Thomas Carlyle'],
    ['quote' => 'Auf eingefahrenen Gleisen kommt man an kein neues Ziel.', 'author' => 'Paul Mommertz'],
    ['quote' => 'Fehler sind das Tor zu neuen Entdeckungen.', 'author' => 'James Joyce'],
    ['quote' => 'Das Glück ist das einzige, das sich verdoppelt, wenn man es teilt.', 'author' => 'Albert Schweitzer'],
    ['quote' => 'Hab Geduld, alle Dinge sind schwierig, bevor sie leicht werden.', 'author' => 'französische Weisheit'],
    [
        'quote' => 'Nicht weil es schwer ist, wagen wir es nicht, sondern weil wir es nicht wagen, ist es schwer.',
        'author' => 'Lucius Annaeus Seneca'
    ],
    [
        'quote' => 'Die Definition von Wahnsinn ist, immer wieder das Gleiche zu tun und andere Ergebnisse zu erwarten.',
        'author' => 'Albert Einstein'
    ],
];

chdir(dirname(__DIR__));
require 'vendor/autoload.php';
/** @var \Psr\Container\ContainerInterface $container */
$container = require 'config/container.php';

/** @var EntityManager $entityManager */
$entityManager = $container->get(EntityManager::class);

foreach ($data as $dataRow) {
    $quote = new Quote();
    $quote->setAuthor($dataRow['author']);
    $quote->setQuote($dataRow['quote']);

    $entityManager->persist($quote);

    $entityManager->flush();
    echo 'Created Quote with ID ' . $quote->getId() . PHP_EOL;
}

echo 'done'.PHP_EOL;





