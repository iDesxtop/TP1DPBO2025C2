#include <iostream>
#include <string>

using namespace std;

class Petshop
{
private:
    string id, nama, kategori;
    int harga;
public:
    Petshop(){
        this->id = "";
        this->nama = "";
        this->kategori = "";
        this->harga = 0;
    };
    Petshop(string id, string nama, string kategori, int harga){
        this->id = id;
        this->nama = nama;
        this->kategori = kategori;
        this->harga = harga;
    }

    void set_id(string id){
        this->id = id;
    }
    void set_nama(string nama){
        this->nama = nama;
    }
    void set_kategori(string kategori){
        this->kategori = kategori;
    }
    void set_harga(int harga){
        this->harga = harga;
    }

    string get_id(){
        return this->id;
    }
    string get_nama(){
        return this->nama;
    }
    string get_kategori(){
        return this->kategori;
    }
    int get_harga(){
        return this->harga;
    }

    ~Petshop(){
    };
};
