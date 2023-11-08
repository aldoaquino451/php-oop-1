PHP Object-oriented programming 1
===

Realizzare una classe **Production** che sia estesa dalla classe Movie e dalla classe TvSerie.

**Attenzione #1**
gli attributi comuni sia a Movie che a TvSerie dovrebbero trovarsi in Production così da essere ereditati correttamente! Qualcosa andrebbe spostato?

**Attenzione #2**
occhio ai costruttori! spostando un attributo nella classe genitore, dobbiamo passarlo al costruttore del genitore con parent::__construct(...);

Aggiungiamo anche degli attributi unici per le nuove classi. Per esempio:
per la classe **Movie**:    
- $published_year: anno di pubblicazione
- $running_time: durata in minuti

Per la classe **TvSerie**:    
- $aired_from_year anno di messa in onda del primo episodio
- $aired_to_year anno di messa in onda dell’ultimo episodio
- $number_of_episodes numero di episodi
- $number_of_seasons numero di stagioni

**Bonus**
Creare un array misto di oggetti Movie e TvSerie. Stamparli a schermo in delle cards.     
Per gestire correttamente le stampe va gestito correttamente il polimorfismo delle classi, ossia la capacità di fare override dei metodi del genitore piuttosto che ereditarli.

Continuare l’esercitazione di ieri aggiungendo al gestione degli errori (minimo uno) con throw Exception  - try/catch e aggiungere un trait (potrebbe essere l’anno di pubblicazione)


- classe Production: titolo, genere, voto
- classe Movie: anno, durata
- classe TvSerie: anno primo ep, anno ultimo ep, numero episoodi, numero stagioni


