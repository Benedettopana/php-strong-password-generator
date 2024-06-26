# PHP Strong Password Generator

## Consegna:

Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

- **Milestone 1**
  Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
  Scriviamo tutto (logica e layout) in un unico file _index.php_
- **Milestone 2**
  Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file _functions.php_ che includeremo poi nella pagina principale
- **Milestone 3 (BONUS)**
  Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $\_SESSION recupererà la password da mostrare all’utente.
- **Milestone 4 (BONUS)**
  Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
  Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
  Simboli: !?&%$<>^+-\*/()[]{}@#\_=

## Logica e Svolgimento:

1. Dopo aver creato un minimo di interfaccia grafica in modo che il sito sia il più intuitivo possibile grazie all'utilizzo di un form di tipo range, facciamo scegliere all'utente una lunghezza che va da 4 a 24 caratteri.
1. Aggiungiamo due bottoni:

   -Uno per il `submit` dei dati tramite metodo POST.

   -Un altro di `reset` pereimpostare il form `range`.

1. Al "click" del `submit`, riempirò l'array `_POST` con il valore del `range` che mi avvierà la mia funzione di creazione della password.

1. Alla mia funzione di creazione della _password_, passerò come anticipato prima il `parametro range` che creerà dei caratteri random tramite un ciclo.
   Quando il ciclo finirà ritornerò il valore della scringa generata casualmente come `return`.
1. Stampo il risultato della mia funzione a schermo.

1. Al `submit` se tutto è andato a buon fine faccio atterrare l'utente in un'altra pagina contente la _password_ generata.

1. _BONUS 2:_ Creo delle `checkbox` per far scegliere all'utente cosa utilizzare per la creazione della _password_
