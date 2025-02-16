#pragma once
#include <bits/stdc++.h>
#include "Petshop.cpp"

using namespace std;

int checkAvailability(list<Petshop> llist, string id){
    int available = 1;
    if(llist.empty()){
        
    }else{
        list<Petshop>::iterator it = llist.begin();
        while(it != llist.end() && available == 1){
            if(it->get_id() == id){
                available = 0;
            }else{
                it++;
            }
        }
    }
    return available;
}

list<Petshop>::iterator searchID(list<Petshop>& llist, string id){
    int found = 0;
    list<Petshop>::iterator it = llist.begin();
    while(it != llist.end() && found == 0){
        if(it->get_id() == id){
            found = 1;
        }else{
            it++;
        }
    }
    cout << found;
    return it; 
}

list<Petshop>::iterator searchNama(list<Petshop>& llist, string nama){
    int found = 0;
    list<Petshop>::iterator it = llist.begin();
    while(it != llist.end() && found == 0){
        if(it->get_nama() == nama){
            found = 1;
        }else{
            it++;
        }
    }
    return it; 
}

// tinggal error handling

int main(){
    cout << "Selamat Datang di DBMS Petshop kami!" << '\n' << '\n';
    int menu;
    string id, nama, kategori;
    int harga;
    list<Petshop> llist;
    list<Petshop>::iterator it;
    do{
        int i = 0;
        cout << "Main Menu:" << '\n';
        cout << "1. Menampilkan Seluruh Item yang Tersimpan" << '\n';
        cout << "2. Menambahkan Item Baru" << '\n';
        cout << "3. Mengubah Data Item yang Tersimpan" << '\n';
        cout << "4. Menghapus Item yang Tersimpan" << '\n';
        cout << "5. Mencari Item" << '\n';
        cout << "6. Quit" << '\n';
        cin >> menu;
        switch (menu)
        {
        case 1:
            if(llist.empty()){
                cout << "Database Masih Kosong!" << '\n';
            }else{
                for(list<Petshop>::iterator it = llist.begin(); it != llist.end(); it++)
                {
                    cout << (i + 1) << ". " << it->get_id() << " | " << it->get_nama() << " | " << it->get_kategori() << " | " << it->get_harga() << '\n';
                    i++;
                }
            }
            break;
        case 2:
            cout << "Masukkan ID" << '\n';
            cin >> id;
            if(checkAvailability(llist, id)){
                cout << "Masukkan Nama Item" << '\n';
                cin >> nama;
                cout << "Masukkan Kategori Item" << '\n';
                cin >> kategori;
                cout << "Masukkan Harga" << '\n';
                cin >> harga;
    
                Petshop temp(id, nama, kategori, harga);
                llist.push_back(temp);
                cout << "Data Berhasil di Tambahkan!" << '\n';
            }else{
                cout << "Maaf, Item dengan ID " << id << " Sudah Ada ada di Database! Pilih ID lain!" << '\n';
            }
            break;
        case 3:
            if(llist.empty()){
                cout << "Database Masih Kosong!" << '\n';
            }else{
                cout << "Masukkan ID Barang yang Dicari!" << '\n';
                cin >> id;
                it = searchID(llist, id);
                if(it == llist.end()){
                    cout << "Barang dengan ID: " << id << " Tidak ditemukan!" << '\n';
                }else{
                    cout << "Masukkan Nama Baru!" << '\n';
                    cin >> nama;
                    cout << "Masukkan Kategori Baru!" << '\n';
                    cin >> kategori;
                    cout << "Masukkan Harga Baru!" << '\n';
                    cin >> harga;
                    it->set_nama(nama);
                    it->set_kategori(kategori);
                    it->set_harga(harga);
                }
            }
            break;
        case 4:
            if(llist.empty()){
                cout << "Database Masih Kosong!" << '\n';
            }else{
                cout << "Masukkan ID Barang yang akan Dihapus!" << '\n';
                cin >> id;
                it = searchID(llist, id);
                if(it == llist.end()){
                    cout << "Tidak Ditemukan!" << '\n';
                }else{
                    llist.erase(it);
                }
            }
            break;
        case 5:
            if(llist.empty()){
                cout << "Database Masih Kosong!" << '\n';
            }else{
                cout << "Masukkan Nama Barang yang Akan dicari!" << '\n';
                cin >> nama;
                it = searchNama(llist, nama);
                if(it == llist.end()){
                    cout << "Tidak Ditemukan!" << '\n';
                }else{
                    cout << it->get_id() << " | " << it->get_nama() << '\n';
                }
            }
            break;

        default:
            break;
        }
    }while(menu != 6);




}