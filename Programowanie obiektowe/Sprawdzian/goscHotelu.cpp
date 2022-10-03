#include "goscHotelu.h"
#include <iostream>
#include <string>
#include <stdlib.h>
#include <time.h>

using namespace std;

void goscHotelu::zapiszGoscia()
{
    cout << "---  REZERWACJA  ---" << endl;
    cout << "Podaj imie: ";
    cin >> imie;
    this->imie = imie;
    cout << "Podaj nazwisko: ";
    cin >> nazwisko;
    this->nazwisko = nazwisko;
    cout << "Rok urodzenia: ";
    cin >> rok;
    this->rok= rok;
    cout << "Miejsce zamieszkania: ";
    cin.ignore();
    getline(cin, zamieszkanie);
    this->zamieszkanie = zamieszkanie;
    cout << "Dlugosc pobytu w dniach: ";
    cin >> pobyt;
    this->pobyt = pobyt;
}
void goscHotelu::sprawdzWiek()
{
    if(rok <= 2005)
    {
        cout << "Rezerwacja potwierdzona" << endl;
    }
    else
    {
        cout << "Nie mozemy zarezerwowac pokoju dla osoby niepelnoletniej";
        exit(0);
    }
}
void goscHotelu::obliczCene()
{
    cena = pobyt*cenaPokoju;
}
void goscHotelu::PrzydzielPokoj()
{
    srand(time(NULL));
    pokoj = rand() % 100+1;
}
void goscHotelu::pokazGoscia()
{
    cout << "---  POTWIERDZENIE REZERWACJI  ---" << endl;
    cout << imie << " " << nazwisko << " " << zamieszkanie << endl;
    cout << "Numer pokoju: " << pokoj << endl;
    cout << "Dlugosc pobytu: " << pobyt << " dni" << endl;
    cout << "Koszt pobytu to " << cena << " PLN" << endl;
}



