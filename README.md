## Bingo Kata

### Llamar a números de bingo
- Necesitamos poder llamar a los números
- Generar cartones de Bingo para jugadores.
- Revise sus tarjetas cuando alguien llame a Bingo

Una vez que tenemos estos conceptos básicos en su lugar, podemos comenzar a agregar nuevas funciones
o modificar la forma en que funciona.

### Generando cartas de bingo
- Necesitamos un generador de cartas de Bingo
- Cada carta de Bingo tiene 25 espacios únicos
- Cada columna contiene números entre $loweBound y $upperBound (inclusive)
- Hay 1 espacio libre en el medio de cada tarjeta generada

| Columna | Límite inferior | Límite superior |
| - | -- | -- |
| B |  1 | 15 |
| I | 16 | 30 |
| N | 31 | 45 |
| G | 45 | 60 |
| O | 61 | 75 |

### Comprobación de cartas de bingo
- Necesitamos revisar las tarjetas de los jugadores cuando llaman a Bingo (para que se pueda decidir un ganador)
- Cuando un jugador llama a Bingo, compruebe si se han llamado todos los números de su tarjeta.
- Determinar si un jugador es ganador o no.