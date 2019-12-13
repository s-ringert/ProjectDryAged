<?php

use App\Entity\Quote;
use Doctrine\ORM\EntityManager;

$data = [
    [
        'id' => '1',
        'quote' => 'Es ist nicht wichtig, wie groß der erste Schritt ist, sondern in welche Richtung er geht.',
        'author' => 'unbekannt',
    ],
    [
        'id' => '2',
        'quote' => 'Die Entfernung ist unwichtig. Nur der erste Schritt ist wichtig.',
        'author' => 'Marquise du Deffand',
    ],
    [
        'id' => '3',
        'quote' => 'Wenn du nichts veränderst, wird sich auch nichts verändern!',
        'author' => 'Sparky Anderson',
    ],
    ['id' => '4', 'quote' => 'Niemand weiß, was er kann, bis er es probiert hat.', 'author' => 'Publilius Syrus'],
    [
        'id' => '5',
        'quote' => 'Ich kann Versagen akzeptieren, keiner ist perfekt. Aber was ich nicht akzeptieren kann ist, es nicht zu versuchen.',
        'author' => 'Michael Jordan',
    ],
    [
        'id' => '6',
        'quote' => 'Was immer du tun kannst oder träumst es zu können, fang damit an.',
        'author' => 'Johann Wolfgang von Goethe',
    ],
    [
        'id' => '7',
        'quote' => 'Wenn Du willst, dass Dir eine leichte Aufgabe richtig schwer erscheint, schieb sie einfach auf.',
        'author' => 'Olin Miller',
    ],
    ['id' => '8', 'quote' => 'Wie schnell sich “nicht jetzt” in “niemals” verwandelt.', 'author' => 'Martin Luther'],
    [
        'id' => '9',
        'quote' => 'In einem Jahr wirst Du Dir wünschen, Du hättest heute angefangen.',
        'author' => 'Karen Lamb',
    ],
    ['id' => '10', 'quote' => 'Mut steht am Anfang des Handelns, Glück am Ende.', 'author' => 'Demokrit'],
    [
        'id' => '11',
        'quote' => 'Beginne mit dem Notwendigen, dann tue das Mögliche und plötzlich wirst Du das Unmögliche tun.',
        'author' => 'Franz von Assisi',
    ],
    ['id' => '12', 'quote' => 'Fange zu tun an, dann hast du auch die Kraft dazu.', 'author' => 'Ralph Waldo Emerson'],
    ['id' => '13', 'quote' => 'Zu langes Nachdenken über eine Sache macht sie oft unmöglich.', 'author' => 'Eva Young'],
    [
        'id' => '14',
        'quote' => 'Es gibt nur zwei Dinge die du falsch machen kannst: aufhören oder gar nicht erst anfangen!',
        'author' => 'unbekannt',
    ],
    ['id' => '15', 'quote' => 'Warte nicht. Der Zeitpunkt wird niemals perfekt sein.', 'author' => 'Napoleon Hill'],
    [
        'id' => '16',
        'quote' => 'Manche Berge scheinen unüberwindlich, bis wir den ersten Schritt tun.',
        'author' => 'unbekannt',
    ],
    ['id' => '17', 'quote' => 'Eine Reise mit tausend Meilen beginnt mit einem kleinen Schritt.', 'author' => 'Laozi'],
    [
        'id' => '18',
        'quote' => 'Du musst nicht spitze sein, um anzufangen. Aber du musst anfangen, um spitze zu werden.',
        'author' => 'Zig Zagler',
    ],
    [
        'id' => '19',
        'quote' => 'Der eine wartet, dass die Zeit sich wandelt, der andere packt sie kräftig an und handelt.',
        'author' => 'Dante Alighieri',
    ],
    [
        'id' => '20',
        'quote' => 'Sportliche Menschen sind nicht verrückt, sie leben nur artgerecht.',
        'author' => 'unbekannt',
    ],
    [
        'id' => '21',
        'quote' => 'Du musst bereit sein die Dinge zu tun, die andere niemals tun werden, um die Dinge zu haben, die andere niemals haben werden.',
        'author' => 'Les Brown',
    ],
    [
        'id' => '22',
        'quote' => 'Manche Leute wollen, dass es passiert, manche wünschen, es würde passieren, andere sorgen dafür, dass es passiert.',
        'author' => 'Michael Jordan',
    ],
    [
        'id' => '23',
        'quote' => 'Der Unterschied zwischen dem, der du bist und dem, der du sein möchtest, ist das was du tust.',
        'author' => 'unbekannt',
    ],
    ['id' => '24', 'quote' => 'Niemand, der sein Bestes gegeben hat, hat es später bereut.', 'author' => 'unbekannt'],
    [
        'id' => '25',
        'quote' => 'Was Du mit guter Laune tust, fällt Dir nicht schwer.',
        'author' => 'ungarische Weisheit',
    ],
    [
        'id' => '26',
        'quote' => 'Wenn es einen Glauben gibt, der Berge versetzen kann, so ist es der Glaube an die eigene Kraft.',
        'author' => 'Marie von Ebner-Eschenbach',
    ],
    [
        'id' => '27',
        'quote' => 'Jeder Tag ist eine neue Chance, das zu tun, was du möchtest.',
        'author' => 'Friedrich von Schiller',
    ],
    ['id' => '28', 'quote' => 'Nur wer selbst brennt, kann Feuer in anderen entfachen.', 'author' => 'Augustinus'],
    ['id' => '29', 'quote' => 'Wenn du alles gibst, kannst du dir nichts vorwerfen.', 'author' => 'Dirk Nowitzki'],
    [
        'id' => '30',
        'quote' => 'Wer etwas will, findet Wege. Wer etwas nicht will, der findet Gründe.',
        'author' => 'Götz Werner',
    ],
    ['id' => '31', 'quote' => 'Du bist deine eigene Grenze, erhebe dich darüber!', 'author' => 'Hafes'],
    [
        'id' => '32',
        'quote' => 'Der Unterschied zwischen dem Unmöglichen und dem Möglichen liegt in der Entschlossenheit einer Person.',
        'author' => 'Tommy Lasorda',
    ],
    [
        'id' => '33',
        'quote' => 'Das größte Vergnügen im Leben besteht darin, Dinge zu tun, die man nach Meinung anderer Leute nicht fertig bringt!',
        'author' => 'Marcel Aymé',
    ],
    [
        'id' => '34',
        'quote' => 'Motivation bringt Dich in Gang. Gewohnheit hält Dich in Schwung.',
        'author' => 'Jim Rohn',
    ],
    ['id' => '35', 'quote' => 'Was immer du tust. Tue es mit ganzem Herzen.', 'author' => 'unbekannt'],
    [
        'id' => '36',
        'quote' => 'Tu es oder tu es nicht. Es gibt kein Versuchen.',
        'author' => 'Meister Yoda in Star Wars',
    ],
    [
        'id' => '37',
        'quote' => 'Es spielt kein Rolle, woher du kommst. Alles was zählt ist, wohin du gehst.',
        'author' => 'unbekannt',
    ],
    [
        'id' => '38',
        'quote' => 'Nicht die Menschen, die immer gewinnen sind die stärksten, sondern die die niemals aufgeben.',
        'author' => 'unbekannt',
    ],
    ['id' => '39', 'quote' => 'Es ist immer zu früh, um aufzugeben!', 'author' => 'unbekannt'],
    [
        'id' => '40',
        'quote' => 'Wer kämpft, kann verlieren. Wer nicht kämpft, hat schon verloren!',
        'author' => 'Bertolt Brecht',
    ],
    [
        'id' => '41',
        'quote' => 'Man liebt das, wofür man sich müht, und man müht sich für das, was man liebt.',
        'author' => 'Erich Fromm',
    ],
    ['id' => '42', 'quote' => 'Ehrgeiz ist die Fähigkeit, die Träume real werden lässt.', 'author' => 'Niklas Gennen'],
    [
        'id' => '43',
        'quote' => 'Es gibt mehr Leute, die kapitulieren, als solche, die scheitern.',
        'author' => 'Henry Ford',
    ],
    [
        'id' => '44',
        'quote' => 'Ich habe in meiner Karriere 9000 Würfe daneben geworfen. Ich habe fast 300 Spiele verloren. 26 mal wurde mir der alles entscheidende Wurf anvertraut – und ich habe ihn verfehlt. Ich habe immer und immer wieder versagt in meinem Leben, und daher war ich so erfolgreich.',
        'author' => 'Michael Jordan',
    ],
    [
        'id' => '45',
        'quote' => 'Wer aufhört, besser werden zu wollen, hört auf, gut zu sein.',
        'author' => 'Marie von Ebner-Eschenbach',
    ],
    [
        'id' => '46',
        'quote' => 'Wenn Du in Deinem Training immer nur 90% gibst, dann wirst Du auch wenn es darauf ankommt nur 90% geben.',
        'author' => 'Michael Owen',
    ],
    [
        'id' => '47',
        'quote' => 'Die Kunst ist, einmal mehr aufzustehen, als man umgeworfen wird.',
        'author' => 'Winston Churchill',
    ],
    [
        'id' => '48',
        'quote' => 'Wer einen Misserfolg nur als kleinen Umweg betrachtet, verliert nie sein Ziel aus den Augen.',
        'author' => 'Martin Luther',
    ],
    [
        'id' => '49',
        'quote' => 'Mit Fleiß, mit Mut und festem Willen lässt jeder Wunsch sich endlich stillen.',
        'author' => 'Novalis',
    ],
    [
        'id' => '50',
        'quote' => 'Unsere Körper sind unsere Gärten – unsere Willen sind unsere Gärtner.',
        'author' => 'William Shakespeare',
    ],
    [
        'id' => '51',
        'quote' => 'In dem Moment an dem du am aufgeben bist denke daran, warum du soviel gegeben hast.',
        'author' => 'Fernando Torres',
    ],
    ['id' => '52', 'quote' => 'Entweder werden wir einen Weg finden oder wir machen einen!', 'author' => 'Hannibal'],
    [
        'id' => '53',
        'quote' => 'Der Schmerz, den du heute fühlst, ist die Kraft, die morgen spürst.',
        'author' => 'unbekannt',
    ],
    [
        'id' => '54',
        'quote' => 'Indem man das, was man zu tun hat, aufschiebt, läuft man Gefahr, es nie tun zu können.',
        'author' => 'Charles-Pierre Baudelaire',
    ],
    [
        'id' => '55',
        'quote' => 'Gefühl von Grenze darf nicht heißen: hier bist du zu Ende, sondern: hier hast du noch zu wachsen.',
        'author' => 'Emil Gött',
    ],
    [
        'id' => '56',
        'quote' => 'Kontinuierliche Anstrengung – nicht Kraft oder Intelligenz – ist der Schlüssel, um Dein Potential freizusetzen.',
        'author' => 'Liane Cardes',
    ],
    [
        'id' => '57',
        'quote' => 'Hindernisse sollten Dich nicht aufhalten. Wenn Du gegen eine Wand läufst, dreh Dich nicht um, gib nicht auf. Finde heraus wie Du darüber klettern, hindurchgehen oder außenrum gehen kannst.',
        'author' => ' Michael Jordan',
    ],
    [
        'id' => '58',
        'quote' => 'Mach es wie die Briefmarke. Sie sichert sich den Erfolg durch die Fähigkeit an einer Sache festzuhalten bis sie ankommt.',
        'author' => 'Josh Billings',
    ],
    ['id' => '59', 'quote' => 'Auch im Alphabet kommt Anstrengung vor Erfolg.', 'author' => 'deutsche Weisheit'],
    ['id' => '60', 'quote' => 'Das Geheimnis des Erfolgs ist anzufangen.', 'author' => 'Mark Twain'],
    ['id' => '61', 'quote' => 'Leidenschaft steht am Anfang jeden Erfolgs.', 'author' => 'unbekannt'],
    ['id' => '62', 'quote' => 'Erfolg hat drei Buchstaben: TUN', 'author' => 'Johann Wolfang von Goethe'],
    [
        'id' => '63',
        'quote' => 'Der Preis des Erfolges ist Hingabe, harte Arbeit und unablässiger Einsatz für das, was man erreichen will.',
        'author' => 'Frank Lloyd Wright',
    ],
    [
        'id' => '64',
        'quote' => 'Erfolg ist nicht etwas, das einfach passiert. Erfolg wird erlernt, Erfolg wird trainiert.',
        'author' => 'George Halas',
    ],
    [
        'id' => '65',
        'quote' => 'Unsere Fehlschläge sind oft erfolgreicher als unsere Erfolge.',
        'author' => 'Henry Ford',
    ],
    [
        'id' => '66',
        'quote' => 'Ich messe den Erfolg nicht an meinen Siegen, sondern daran, ob ich jedes Jahr besser werde.',
        'author' => 'Tiger Woods',
    ],
    [
        'id' => '67',
        'quote' => 'Erfolg hat nur, wer etwas tut, während er auf den Erfolg wartet.',
        'author' => 'Thomas Alva Edison',
    ],
    ['id' => '68', 'quote' => 'Vergiss nicht, Erfolg ist die Belohnung für schwere Arbeit.', 'author' => 'Sophokles'],
    ['id' => '69', 'quote' => 'Schmerz ist vergänglich, Erfolg bleibt für immer!', 'author' => 'unbekannt'],
    [
        'id' => '70',
        'quote' => 'Das größte Hindernis auf dem Weg zum Erfolg ist die Angst vor dem Scheitern.',
        'author' => 'Sven-Göran Eriksson',
    ],
    [
        'id' => '71',
        'quote' => 'Für das Können ist es nur einen Beweis: das Tun.',
        'author' => 'Marie von Ebner-Eschenbach',
    ],
    [
        'id' => '72',
        'quote' => 'Erfolgreich zu sein setzt zwei Dinge voraus: Klare Ziele und den brennenden Wunsch, sie zu erreichen.',
        'author' => 'Johann Wolfgang von Goethe',
    ],
    [
        'id' => '73',
        'quote' => 'Gewinnen heißt, dass Du bereit bist länger zu laufen, härter zu arbeiten und mehr zu geben als alle anderen.',
        'author' => 'Vince Lombardi',
    ],
    [
        'id' => '74',
        'quote' => 'Wenn du laufen willst, lauf eine Meile. Wenn du ein neues Leben kennenlernen willst, dann lauf Marathon.',
        'author' => 'Emil Zatopek',
    ],
    [
        'id' => '75',
        'quote' => 'Erfolg sollte stets nur die Folge, nicht das Ziel des Handelns sein.',
        'author' => 'Gustave Flaubert',
    ],
    [
        'id' => '76',
        'quote' => 'Träume sind der Schlüssel zum Glück. Seine Träume wahr zu machen, ist der Schlüssel zum Erfolg.',
        'author' => 'unbekannt',
    ],
    [
        'id' => '77',
        'quote' => 'Es ist nie zu spät, das zu werden, was man hätte sein können.',
        'author' => 'George Eliot',
    ],
    [
        'id' => '78',
        'quote' => 'Ein Traum ist unerlässlich, wenn man die Zukunft gestalten will.',
        'author' => 'Victor Hugo',
    ],
    [
        'id' => '79',
        'quote' => 'Alle Träume können wahr werden, wenn wir den Mut haben, ihnen zu folgen.',
        'author' => 'Walt Disney',
    ],
    [
        'id' => '80',
        'quote' => 'Unsere Träume können wir erst dann verwirklichen, wenn wir uns entschließen, einmal daraus zu erwachen.',
        'author' => 'Josephine Baker',
    ],
    [
        'id' => '81',
        'quote' => 'Wenn wir uns von unseren Träumen leiten lassen, wird der Erfolg all unsere Erwartungen übertreffen.',
        'author' => 'Henry David Thoreau',
    ],
    [
        'id' => '82',
        'quote' => 'Nenne dich nicht arm, weil deine Träume nicht in Erfüllung gegangen sind; wirklich arm ist nur, der nie geträumt hat.',
        'author' => 'Marie von Ebner-Eschenbach',
    ],
    ['id' => '83', 'quote' => 'Die Tat unterscheidet das Ziel vom Traum.', 'author' => 'Lebensweisheit'],
    [
        'id' => '84',
        'quote' => 'Der Glaube an unsere Kraft kann sie ins unendliche verstärken.',
        'author' => 'Friedrich von Schlegel',
    ],
    [
        'id' => '85',
        'quote' => 'Nicht der Wille ist der Antrieb unseres Handelns, sondern unsere Vorstellungskraft.',
        'author' => 'Émile Coué',
    ],
    [
        'id' => '86',
        'quote' => 'Achte auf deine Gedanken! Sie sind der Anfang deiner Taten.',
        'author' => 'chin. Sprichwort',
    ],
    ['id' => '87', 'quote' => 'Glaube, dass du kannst und du bist schon halb dort.', 'author' => 'Greg Plitt'],
    ['id' => '88', 'quote' => 'Nichts im Leben wurde je im Traum erreicht. Also handle!', 'author' => 'unbekannt'],
    [
        'id' => '89',
        'quote' => 'Nur Ziele, die wir schriftlich festhalten, sind echte Ziele. Alle andern sind reine Phantasie.',
        'author' => 'Brian Tracy',
    ],
    ['id' => '90', 'quote' => 'Ziele sind Träume mit einer Deadline.', 'author' => 'Napoleon Hill'],
    [
        'id' => '91',
        'quote' => 'Wer immer tut, was er schon kann, bleibt immer das, was er schon ist.',
        'author' => 'Henry Ford',
    ],
    ['id' => '92', 'quote' => 'Wer ins Blaue zielt, wird kaum ins Schwarze treffen.', 'author' => 'unbekannt'],
    ['id' => '93', 'quote' => 'Nur wer sein Ziel kennt, findet den Weg.', 'author' => 'Laozi'],
    [
        'id' => '94',
        'quote' => 'Der Langsamste, der sein Ziel nur nicht aus den Augen verliert, geht immer noch geschwinder als der, der ohne Ziel herumirrt.',
        'author' => 'Gotthold Ephraim Lessing',
    ],
    [
        'id' => '95',
        'quote' => 'Ziele zu setzen ist der erste Schritt das unsichtbare in das sichtbare zu verwandeln.',
        'author' => 'Tony Robbins',
    ],
    [
        'id' => '96',
        'quote' => 'Der Mensch arbeitet immer für ein Ziel. Wer jedoch keine eigenen Ziele hat, arbeitet für die von Anderen.',
        'author' => 'Brian Tracy',
    ],
    [
        'id' => '97',
        'quote' => 'Fordert man sich nicht unablässig selber heraus, verdorrt man.',
        'author' => 'Lido ‚Lee‘ Iacocca',
    ],
    [
        'id' => '98',
        'quote' => 'Man muss das Unmögliche versuchen, um das mögliche zu erreichen.',
        'author' => 'Hermann Hesse',
    ],
    [
        'id' => '99',
        'quote' => 'Nichts verschafft mehr Ruhe, als ein gefasster Entschluss.',
        'author' => 'Charles Maurice de Talleyrand',
    ],
    ['id' => '100', 'quote' => 'Erst Ziele geben unserem Leben einen Sinn.', 'author' => 'C.H. Parkhurst'],
    [
        'id' => '101',
        'quote' => 'Der Erfolgreiche überprüft seine Begabungen und Fähigkeiten, ehe er sein Ziel steckt.',
        'author' => 'Vera F. Birkenbihl',
    ],
    [
        'id' => '102',
        'quote' => 'Wer all seine Ziele erreicht, hat sie zu niedrig gewählt.',
        'author' => 'Herbert von Karajan',
    ],
    [
        'id' => '103',
        'quote' => 'Begeisterung ist der nie erlahmende Impuls, der uns beharrlich unser Ziel verfolgen lässt.',
        'author' => 'Norman V. Peale',
    ],
    [
        'id' => '104',
        'quote' => 'Das große Meisterstück des Lebens besteht darin, Ziele zu erreichen und die Gegenwart bewusst zu erleben.',
        'author' => 'Jörg Löhr',
    ],
    ['id' => '105', 'quote' => 'Wer sich die richtigen Ziele setzt, kann nur gewinnen.', 'author' => 'Marc M. Galal'],
    [
        'id' => '106',
        'quote' => 'Du denkst immer drei Tore voraus – wer am Start schon ans Ziel denkt, kommt meist nicht dort an.',
        'author' => 'Alberto Tomba',
    ],
    [
        'id' => '107',
        'quote' => 'Ein festes Ziel weckt die Begeisterung. Begeisterungsfähigkeit + Beharrlichkeit führen immer zum Ziel!',
        'author' => 'Unbekannt',
    ],
    [
        'id' => '108',
        'quote' => 'Wer nicht mutig genug ist, Risiken einzugehen, wird es im Leben zu nichts bringen.',
        'author' => 'Muhammed Ali',
    ],
    [
        'id' => '109',
        'quote' => 'Es ist nicht wenig Zeit, die wir haben, sondern es ist viel Zeit, die wir nicht nutzen.',
        'author' => 'Lucius Annaeus Seneca',
    ],
    [
        'id' => '110',
        'quote' => 'Die einzige Person mit der du konkurrierst, ist jene die du im Spiegel siehst!',
        'author' => 'unbekannt',
    ],
    ['id' => '111', 'quote' => 'Jeder Mensch ist der Architekt seiner eigenen Zukunft.', 'author' => 'Sallust'],
    [
        'id' => '112',
        'quote' => 'Sorge dich gut um deinen Körper. Es ist der einzige Ort, den du zum Leben hast.',
        'author' => 'Jim Rohn',
    ],
    [
        'id' => '113',
        'quote' => 'Du wirst als Mensch nur wachsen, wenn du dich ausserhalb deiner Komfortzone befindest.',
        'author' => 'Percy Cerutty',
    ],
    ['id' => '114', 'quote' => 'Manchmal gewinnst du und manchmal lernst du!', 'author' => 'unbekannt'],
    [
        'id' => '115',
        'quote' => 'Wer einmal sich selbst gefunden hat, der kann nichts auf dieser Welt verlieren.',
        'author' => 'Stefan Zweig',
    ],
    ['id' => '116', 'quote' => 'Wenn du die Absicht hast, dich zu erneuern, tu es jeden Tag.', 'author' => 'Konfuzius'],
    [
        'id' => '117',
        'quote' => 'Wir sind verantwortlich für das, was wir tun, aber auch für das, was wir nicht tun.',
        'author' => 'Voltaire',
    ],
    [
        'id' => '118',
        'quote' => 'Es gibt nur einen Erfolg: Das Leben nach eigenen Vorstellungen leben zu können.',
        'author' => 'Christopher Morley',
    ],
    [
        'id' => '119',
        'quote' => 'Man kann niemanden überholen, wenn man in seine Fußstapfen tritt.',
        'author' => 'Francois Truffaut',
    ],
    [
        'id' => '120',
        'quote' => 'Unser Schicksal hängt nicht von den Sternen ab, sondern von unserem Handeln.',
        'author' => 'William Shakespeare',
    ],
    [
        'id' => '121',
        'quote' => 'Versuch nicht besser zu sein als andere. Versuche besser zu sein als Du gestern warst.',
        'author' => 'unbekannt',
    ],
    ['id' => '122', 'quote' => 'Was ohne Ruhepausen geschieht, ist nicht von Dauer.', 'author' => 'Ovid'],
    ['id' => '123', 'quote' => 'Erfahrung nennt man die Summe aller Irrtümer.', 'author' => 'Thomas Edison'],
    [
        'id' => '124',
        'quote' => 'Die Erfahrung ist wie eine Laterne auf unserem Rücken. Sie beleuchtet immer nur den Weg, der bereits hinter uns liegt.',
        'author' => 'Konfuzius',
    ],
    [
        'id' => '125',
        'quote' => 'Die Natur hält etwas vom Einfachen. Ein Mehr ist vergebens, wenn ein Weniger genügt.',
        'author' => 'Isaac Newton',
    ],
    [
        'id' => '126',
        'quote' => 'Alles sollte so einfach wie möglich gemacht werden, aber nicht einfacher.',
        'author' => 'Albert Einstein',
    ],
    [
        'id' => '127',
        'quote' => 'Entscheidungen richten sich nicht nach Möglichkeiten, Möglichkeiten werden durch Entscheidungen geschaffen.',
        'author' => 'Markus Heim',
    ],
    ['id' => '128', 'quote' => 'Was du heute denkst, wirst du morgen tun.', 'author' => 'Leo Tolstoi'],
    [
        'id' => '129',
        'quote' => 'Talent, das ist Glaube an sich selbst, an die eigene Kraft.',
        'author' => 'Maxim Gorki',
    ],
    [
        'id' => '130',
        'quote' => 'Aus der Stille werden die wahrhaft großen Dinge geboren.',
        'author' => 'Thomas Carlyle',
    ],
    ['id' => '131', 'quote' => 'Auf eingefahrenen Gleisen kommt man an kein neues Ziel.', 'author' => 'Paul Mommertz'],
    ['id' => '132', 'quote' => 'Fehler sind das Tor zu neuen Entdeckungen.', 'author' => 'James Joyce'],
    [
        'id' => '133',
        'quote' => 'Das Glück ist das einzige, das sich verdoppelt, wenn man es teilt.',
        'author' => 'Albert Schweitzer',
    ],
    [
        'id' => '134',
        'quote' => 'Hab Geduld, alle Dinge sind schwierig, bevor sie leicht werden.',
        'author' => 'französische Weisheit',
    ],
    [
        'id' => '135',
        'quote' => 'Nicht weil es schwer ist, wagen wir es nicht, sondern weil wir es nicht wagen, ist es schwer.',
        'author' => 'Lucius Annaeus Seneca',
    ],
    [
        'id' => '136',
        'quote' => 'Die Definition von Wahnsinn ist, immer wieder das Gleiche zu tun und andere Ergebnisse zu erwarten.',
        'author' => 'Albert Einstein',
    ],
    [
        'id' => '137',
        'quote' => 'Nur wer der Melodie seines Herzens folgt, kann Sterne wirklich tanzen sehen. ',
        'author' => ' unbekannt',
    ],
    ['id' => '138', 'quote' => 'Unsere Sichtweise entscheidet über unsere Zufriedenheit. ', 'author' => ' unbekannt'],
    [
        'id' => '139',
        'quote' => 'Denk nicht zu viel nach. Mach einfach, was dich glücklich macht. ',
        'author' => ' unbekannt',
    ],
    [
        'id' => '140',
        'quote' => 'Träume sind die Wolken der Seele. Wir müssen sie nur hin und wieder ausschütteln, damit sie neu atmen können. ',
        'author' => ' Jando',
    ],
    [
        'id' => '141',
        'quote' => 'Als ich begann, nicht mehr so hart zu mir selbst zu sein, wurde auch der Rest der Welt sanfter. ',
        'author' => ' Clara Louise',
    ],
    [
        'id' => '142',
        'quote' => 'Je weniger du auf unhöfliche, streitsüchtige, kritische Leute reagierst, desto friedvoller wird dein Leben werden. ',
        'author' => ' unbekannt',
    ],
    [
        'id' => '143',
        'quote' => 'Das Wichtigste ist, dein Leben zu genießen, glücklich zu sein. Das ist alles, was zählt. ',
        'author' => ' Audrey Hepburn',
    ],
    [
        'id' => '144',
        'quote' => 'Im Schmerz der Trennung begegnest du auch deiner inneren Trennung, begegnest deinem Von-dir-selbst-Verlassensein.',
        'author' => ' Benno Blues',
    ],
    [
        'id' => '145',
        'quote' => 'Beim Streit um die Wahrheit bleibt der Streit die einzige Wahrheit. ',
        'author' => ' Rabindranath Tagore',
    ],
    [
        'id' => '146',
        'quote' => 'Du willst wissen, wer du bist? Womöglich lohnt ein Blick dorthin, wer du glaubst, auf keinen Fall zu sein. ',
        'author' => ' Benno Blues',
    ],
    [
        'id' => '147',
        'quote' => 'Auf der Suche nach dem Glück bin ich mir selbst begegnet. ',
        'author' => ' Benno Blues',
    ],
    ['id' => '148', 'quote' => 'Nur wer du nicht bist, können andere entscheiden. ', 'author' => ' Benno Blues'],
    [
        'id' => '149',
        'quote' => 'Du kannst sein, was du sein willst. Die Frage ist: Warum willst du nicht sein, was du bist? ',
        'author' => ' Benno Blues',
    ],
    [
        'id' => '150',
        'quote' => 'Gefühle bitte nicht in den Eisschrank legen, sondern möglichst rasch verbrauchen! Gedanken bitte kühl verwenden! Erinnerungen stets mit Liebe beschriften und gut sortiert verwahren! ',
        'author' => ' Benno Blues',
    ],
    ['id' => '151', 'quote' => 'Alter Schmerz gräbt unablässig Schützengräben. ', 'author' => ' Benno Blues'],
    [
        'id' => '152',
        'quote' => 'Alles, was du dir im Geist vorstellst, wird Wirklichkeit, wenn du nicht aus dem Licht deines Herzens heraus trittst. ',
        'author' => ' Indianische Weisheit',
    ],
    [
        'id' => '153',
        'quote' => 'Vertrau besser nicht allein den Worten, auch deinen eigenen nicht. ',
        'author' => ' Benno Blues',
    ],
    [
        'id' => '154',
        'quote' => 'Es gibt wichtige Dinge, über die nachgedacht werden muss: Die Klimaerwärmung, die Arbeitslosigkeit, die Bevölkerungsexplosion und Schokoeis, zum Beispiel. ',
        'author' => ' Benno Blues',
    ],
    [
        'id' => '155',
        'quote' => 'Du kannst dein Glück nicht in einem anderen Menschen finden. Doch wenn auch er es mag,kannst du es in ihn hinein legen. ',
        'author' => ' Benno Blues',
    ],
    [
        'id' => '156',
        'quote' => 'Ein glückliches Leben zu führen, scheint insbesondere demjenigen vergönnt, der zu jeder Zeit den Unterschied zwischen Vergangenheit, Gegenwart und Zukunft zu erkennen vermag. ',
        'author' => ' Benno Blues',
    ],
    ['id' => '157', 'quote' => 'Wozu brauche ich Angst, Misstrauen, Eifersucht? ', 'author' => ' Benno Blues'],
    [
        'id' => '158',
        'quote' => 'Erst suchte ich Weite, dann das Weite. Die Enge blieb. Sie war in mir.',
        'author' => ' Benno Blues',
    ],
    [
        'id' => '159',
        'quote' => 'Einen Fehler durch eine Lüge zu verdecken hieße, einen Flecken durch ein Loch zu ersetzen. ',
        'author' => ' Aristoteles',
    ],
    [
        'id' => '160',
        'quote' => 'Wir stoßen oftmals gerade diejenigen fort, die etwas von dem verkörpern, was wir selbst in uns tragen, aber nicht an uns sehen wollen. Und wir ziehen jene an, die mitbringen, was wir eigentlich in uns selbst suchen sollten. ',
        'author' => ' Benno Blues',
    ],
    [
        'id' => '161',
        'quote' => 'Glück und Dankbarkeit Es ist nicht das Fehlende, das mich von meinem Glück trennt. Es ist das Wollende. ',
        'author' => ' Benno Blues',
    ],
    [
        'id' => '162',
        'quote' => 'Sie lehrten dich deine Selbstzweifel, weil sie selbst unsicher waren. Das hatte nichts mit dir zu tun. ',
        'author' => ' Benno Blues',
    ],
    [
        'id' => '163',
        'quote' => 'Die Welt gehört denen, die zu ihrer Eroberung ausziehen, bewaffnet mit Sicherheit und guter Laune ',
        'author' => ' Charles Dickens',
    ],
    [
        'id' => '164',
        'quote' => 'Nichts in der Welt wirkt so ansteckend wie Lachen und gute Laune. ',
        'author' => ' Charles Dickens',
    ],
    [
        'id' => '165',
        'quote' => 'Jedes Leben hat sein Maß an Leid. Manchmal bewirkt eben dieses unser Erwachen. ',
        'author' => ' Buddha',
    ],
    ['id' => '166', 'quote' => 'Du lächelst - und die Welt verändert sich.', 'author' => ' Buddha'],
    [
        'id' => '167',
        'quote' => 'Wir sind, was wir denken. Alles was wir sind, entsteht mit unseren Gedanken. Mit unseren Gedanken machen wir die Welt. ',
        'author' => ' Buddha',
    ],
    ['id' => '168', 'quote' => 'The pain is here to tell me that I\'m still alive.', 'author' => 'Hatebreed'],
    [
        'id' => '169',
        'quote' => 'Lebenskunst besteht zu 90 Prozent aus der Fähigkeit, mit Menschen auszukommen, die man nicht leiden kann.',
        'author' => 'Samuel Goldwyn',
    ],
    ['id' => '170', 'quote' => 'Sein Schwachsein bewahren, das nenne ich Stärke.', 'author' => 'Laotse'],
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

echo 'done' . PHP_EOL;
