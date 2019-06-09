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
[Bild 1]: https://github.com/Sandro6880/FeedbackbogenOnline_2018-19_3AHIF/blob/master/ReadMeContainer/RunNGINX.png
[Bild 2]: https://github.com/Sandro6880/FeedbackbogenOnline_2018-19_3AHIF/blob/master/ReadMeContainer/docker-compose.png
[Bild 3]: https://github.com/Sandro6880/FeedbackbogenOnline_2018-19_3AHIF/blob/master/ReadMeContainer/localhost.png
[Bild 4]: https://github.com/Sandro6880/FeedbackbogenOnline_2018-19_3AHIF/blob/master/ReadMeContainer/Screenshot from 2019-06-09 19-37-20.png
![RunNGINX.png][Bild 1]

--name  -> Hier den gewünschten Namen für den Docker service angeben
nach -v -> Den Dateipfad von dem Fragebogen Ordner angeben. (Normal oder Weiblich)

Im DockerDB Ordner docker-compose-up ausführen.
![docker-compose.png][Bild 2]

Jetzt ist die Datenbank und der Server Online, jetzt nur zum Localhost:Port gehen.

![localhost.png][Bild 3]

Den Port kann man mit docker ps finden.
![Screenshot from 2019-06-09 19-37-20.png][Bild 4]
