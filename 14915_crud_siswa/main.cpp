#include <iostream>

using namespace std;

struct data{
    char nis[6],nama[25],kelas[20];
};
    data delimiter[100];
    int v,w,x,y;

void insertdata()
{
    cout << "\nMasukan Jumlah data  : "; cin >> w;
    y=0;
    for( x=0;x < w;x++){
	    y=y+1;
	    cout << "\nData ke-"<<y<<endl;
	    cout << "Masukan NIS\t: ";cin>>delimiter[v].nis;
	    cout << "Masukan Nama\t: ";cin>>delimiter[v].nama;
	    cout << "Masukan Kelas\t: ";cin>>delimiter[v].kelas;
	    v++;
	}
}

void showdata()
{
    int i,start_number ;
    	cout << "==================================================================\n";
   		cout << "|| \tNO\t || \tNIS\t || \tNama\t|| \tKelas\t \n";
    start_number =0;
    for(i=0;i<v;i++)
    {start_number =start_number +1;
        cout << "------------------------------------------------------------------\n";
        cout << "\t" << start_number  << "\t || ";
        cout << "\t" << delimiter[i].nis << "\t || ";
        cout << "\t" << delimiter[i].nama << "\t||";
        cout << "\t" << delimiter[i].kelas << "\t";
        cout << endl;
    }
        cout << "==================================================================\n";
}

void deletedata()
{
    int awal,y;
    cout << "Hapus Data ke-"; cin >> awal;
    y = awal-1;
    v--;
    for(int i=y;i < v;i++)
    {
    	delimiter[i]=delimiter[i+1];
    }
    system("clear");
    	cout<<"================ Data ke- "<<awal<<" Berhasil Dihapus * _ * ============"<<endl;
}

void updatedata()
{
    int awal,akhir;
    cout << "Masukkan No Data : "; cin >> awal;
    akhir = awal-1;
    cout << "Masukan NIS\t: "; cin >> delimiter[akhir].nis;
    cout << "Masukan Nama\t: "; cin >> delimiter[akhir].nama;
    cout << "Masukan Kelas\t: "; cin >> delimiter[akhir].kelas;
    system("clear");
    showdata();
}

int main()
{
    char result;
    int masukan;
        start:
        cout << "\n========================== DASHBOARD ==========================";
        cout << "\n1. Tambah data siswa";
        cout << "\n2. Hapus data siswa";
        cout << "\n3. Lihat data siswa";
        cout << "\n4. Edit data siswa";
        cout << "\n5. Keluar Program";
        cout << "\n\nMasukkan Pilihan : "; cin >> masukan;
        if(masukan==1)
        {
        	system("clear");
        	insertdata();
      	    system("clear");
   		    goto start;
    	}
        if(masukan==2)
        {
        	system("clear");
        	showdata();
       		deletedata();
        	goto start;
    	}
        if(masukan==3)
        {
         	system("clear");
        	showdata();
        	goto start;
        }
        if(masukan==4)
		{
            system("clear");
            showdata();
        	updatedata();
        	goto start;
        }
        if(masukan==5)
        {
		   	cout << "\n\n\n            Are You Sure To EXIT ??"<<endl;
		    cout << "                [y]    or   [n]"<< endl;
		    cout << "                       ";
		    cin >> result;
		    if(result =='y'||result=='Y')
		    {
		      if(result=='n'||result=='N')
		        {
		        goto start;
		        }
		    }
		    else{
		    	system("clear");
		        goto start;
		    }

		    cout << "\n====================== Program Selesai ========================="<<endl;
		    return 0;
		}

}
