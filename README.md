# Feedbackbogen Online

## Beschreibung

Dieses Projekt dient der Schule HTL-Leonding. Der Onlinefeedbackbogen
dient dazu, dass den Lehrern eine leichtere Alternative gegenüber
den gedruckten Fragebögen angeboten wird. Das Programm wird in der
Lage sein von jeder Person verwendet zu werden. Die Mindestanzahl
der zu generierenden Codes für den Feedbackbogen sind 10 Schüler.
Außerdem werden die gesammelten Daten nur an den Lehrer geschickt.

## User Stories

-Der Lehrer will unser Programm verwenden, damit er eine ordentliche und schnelle
Rückfrage seiner Schüler bekommt.   
    -Die Schüler wollen unser Programm verwenden, damit sie das Feedback
schnell abgeben können.                             
-Der Lehrer will unser Programm verwenden, damit er keine Zettel von den
Fragebögen für die Schüler ausdrucken muss.


## Plichtenheft

### Ausgangslage

Als kleines Team der Schule HTL-Leonding wurden wir beauftragt eine Website
für Fragebögen zu machen. Der Fragebogen dient zur Bewertung der Fachkräfte.

### Ist-Zustand

Fragebögen werden in der HTL-Leonding von den Lehrern an die Schüler ausgegeben,
damit sie ein Feedback von den Schüler bekommen.

### Problem

Die Schüler verlieren eine wertvolle Zeit während des Ausfüllens des Fragebogens.
Die Lehrer brauchen eine lange Zeit bis sie alle Feedbackbögen durchgeschaut haben.

### Zielsetzung

Das Ziel unseres Projektes ist, dass wir eine schnelle Befragung ermöglichen.
Die Lehrer werden ein verständliches Feedback über ihre E-Mail bekommen.
Die Ausgabe soll anonym sein.

### Ausführung
[Bild 1]: https://github.com/Sandro6880/FeedbackbogenOnline_2018-19_3AHIF/blob/master/ReadMeContainer/docker-compose.png
[Bild 2]: https://github.com/Sandro6880/FeedbackbogenOnline_2018-19_3AHIF/blob/master/ReadMeContainer/survey.png
[Bild 3]: https://github.com/Sandro6880/FeedbackbogenOnline_2018-19_3AHIF/blob/master/ReadMeContainer/evaluation.png

Im DockerDB Ordner einfach ein 'docker-compose up' machen und schon ist alles Fertig!
![docker-compose.png][Bild 1]

Als nächstes den Fragebogen befüllen und die Antworten abschicken!
![survey.png][Bild 2]

Um die Ergebnisse der Antworten zu sehen, 'localhost:8080/evaluation.php' eingeben.
![evaluation.png][Bild 3]
