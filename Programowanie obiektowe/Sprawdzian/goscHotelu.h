#ifndef GOSCHOTELU_H
#define GOSCHOTELU_H
#include <iostream>

using namespace std;

class goscHotelu
{
    public:
        void zapiszGoscia();
        void sprawdzWiek();
        void obliczCene();
        void PrzydzielPokoj();
        void pokazGoscia();
    private:
        string imie, nazwisko, zamieszkanie;
        int rok, pobyt, cena, pokoj;
        int cenaPokoju = 140;
};

#endif // GOSCHOTELU_H
