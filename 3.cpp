#include <iostream>

using namespace std;
int main(int argc, char const *argv[])
{
	int x;
	int y = x;

	cout << "Masukan Panjang Persegi: " << endl;
	cin >> x;
	cout << "Masukan Tinggi Persegi: " << endl;
	cin>> y;

	if ( (x %2) == 1 ){
		x += 1;
	}
	
		for (int i = 1; i <= y; i++)
		{
			for (int j = 1; j <= x; j++)
			{
				if (i == 1 || i == y ){
					cout << "+ ";
				}else if (j == (x-2)/3 +1 || j == (x-(x-2)/3 ))
				{
					cout << "+ ";
				}else{
					cout << "= ";	
				}
			}
			cout << endl;
		}
	cin.get();
	cin.get();
	return 0;
}
