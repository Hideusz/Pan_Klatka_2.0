#include <iostream>
#include "goscHotelu.h"
using namespace std;

int main()
{
    goscHotelu gosc1;
    gosc1.zapiszGoscia();
    gosc1.sprawdzWiek();
    gosc1.obliczCene();
    gosc1.PrzydzielPokoj();
    gosc1.pokazGoscia();

    return 0;
}
