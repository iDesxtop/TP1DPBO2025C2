from Petshop import Petshop

def searchID(llist, id):
    for index, item in enumerate(llist):
        if item.getId() == id:
            return index
    return -1  # ID tidak ditemukan

def searchNama(llist, nama):
    for index, item in enumerate(llist):
        if item.getNama() == nama:
            return index
    return -1  # ID tidak ditemukan

print("Selamat Datang di DBMS Petshop kami!")
menu = -1
id, nama, kategori = "", "", ""
harga = -1

llist = []
petshop = Petshop("001", "Kucing", "Hewan", 1000000)
llist.append(petshop)

while(menu != 6):
    i = 1
    print("Main Menu:")
    print("1. Menampilkan Seluruh Item yang Tersimpan")
    print("2. Menambahkan Item Baru")
    print("3. Mengubah Data Item yang Tersimpan")
    print("4. Menghapus Item yang Tersimpan")
    print("5. Mencari Item")
    print("6. Quit")
    
    menu = int(input())
    if menu == 1:
        if len(llist) == 0:
            print("Database Masih Kosong!")
        else:
            for el in llist:
                print(str(i) + ". " + el.getId() + " | " + el.getNama() + " | " + el.getKategori() + " | " + str(el.getHarga()))
                i = i+1
    elif menu == 2:
        print("Masukkan ID")
        id = input()
        if(searchID(llist, id) == -1):
            print("Masukkan Nama Item")
            nama = input()
            print("Masukkan Kategori Item")
            kategori = input()
            print("Masukkan Harga Item")
            harga = int(input())
            newItem = Petshop(id, nama, kategori, harga)
            llist.append(newItem)
        else:
            print("Maaf Item dengan ID " + id + " Sudah Dipakai!")
    elif menu == 3:
        if len(llist) == 0:
            print("Database Masih Kosong!")
        else:
            print("Masukkan ID Barang yang Dicari!")
            id = input()
            index = searchID(llist, id)
            if(index == -1):
                print("Barang dengan ID: " + id + " Tidak ditemukan!")
            else:
                print("Masukkan Nama Baru")
                nama = input()
                print("Masukkan Kategori Baru")
                kategori = input()
                print("Masukkan Harga Baru")
                harga = int(input())
                llist[index].updateAll(id, nama, kategori, harga)
    elif menu == 4:
        if len(llist) == 0:
            print("Database Masih Kosong!")
        else:
            print("Masukkan ID Barang yang akan Akan Dihapus!")
            id = input()
            index = searchID(llist, id)
            if(index == -1):
                print("Barang dengan ID: " + id + " Tidak ditemukan!")
            else:
                llist.pop(index)
    elif menu == 5:
        if len(llist) == 0:
            print("Database Masih Kosong!")
        else:
            print("Masukkan Nama Barang yang akan Akan Dicari!")
            nama = input()
            index = searchNama(llist, nama)
            if(index == -1):
                print("Barang dengan Nama: " + nama + " Tidak ditemukan!")
            else:
                print(llist[index].getId() + " | " + llist[index].getNama() + " | " + llist[index].getKategori() + " | " + str(llist[index].getHarga()))