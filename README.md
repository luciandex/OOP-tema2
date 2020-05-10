# OOP-tema2
OOP-tema2

Sa se creeze clasa (ex: Calculator) care sa actioneze ca un calculator si:
- sa contina metodele statice add (+), substract (-), multiply (*), divide (/), modulo (%), squareRoot, square, clear(C), getValue, setValue (fiecare metoda va primi cel mult un parametru.)
- sa contina un atribut static private: $value cu valoarea initiala 0.

Metoda setValue va suprascrie valoarea din atributul $value.
Metoda clear va suprascrievaloarea din atributul $value cu valoarea 0 si nu va avea nici un parametru
Metoda squareRoot va calcula radical-ul din numarul salvat in atributul $value si nu va avea nici un parametru
Metoda square va ridica la patrat valoarea salvata in atributul $value si nu va avea nici un parametru

Sa se dea cate un exemplu pentru fiecare operatie.

Recomandari
- Clasa creata ar putea sa fie definita intr-un fisier separat (ex nume fisiere: Calculator.php, index.php)
- Clasa statica nu va fi instantiata, se va folosi de metodele statice pentru a modifica informatiile din aceasta
- Metodele trebuie foloseasca type hinting si return type declarations (acolo unde este posibil si necesar)
- Se pot crea oricate metode/atribute in plus simtiti ca sunt necesare (dar minim cele cerute in enunt)
