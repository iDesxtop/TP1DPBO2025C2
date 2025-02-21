import java.util.*;

public class Main {
    public static int searchID(List<Petshop> llist, String id) {
        int found = 0;
        int index = 0;
        Iterator<Petshop> it = llist.iterator();
        
        while(it.hasNext() && found == 0) {
            Petshop current = it.next();
            if(current.getId().equals(id)) {
                found = 1;
            } else {
                index++;
            }
        }
        
        if(found == 0) {
            return -1; // ID tidak ditemukan
        }
        return index; // Mengembalikan posisi ID yang ditemukan
    }
    public static int searchNama(List<Petshop> llist, String nama) {
        int found = 0;
        int index = 0;
        Iterator<Petshop> it = llist.iterator();
        
        while(it.hasNext() && found == 0) {
            Petshop current = it.next();
            if(current.getNama().equals(nama)) {
                found = 1;
            } else {
                index++;
            }
        }
        
        if(found == 0) {
            return -1; // ID tidak ditemukan
        }
        return index; // Mengembalikan posisi ID yang ditemukan
    }
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        String newline = System.lineSeparator(); 
        System.out.println("Selamat Datang di DBMS Petshop kami!" + newline);
        int menu = -1;
        String id, nama, kategori;
        int harga;

        List<Petshop> llist = new ArrayList<Petshop>();
        do{
            int i = 1;
            System.out.println("Main Menu:");
            System.out.println("1. Menampilkan Seluruh Item yang Tersimpan");
            System.out.println("2. Menambahkan Item Baru");
            System.out.println("3. Mengubah Data Item yang Tersimpan");
            System.out.println("4. Menghapus Item yang Tersimpan");
            System.out.println("5. Mencari Item");
            System.out.println("6. Quit");
            menu = sc.nextInt();

            switch (menu) {
                case 1:
                    if(llist.isEmpty()){
                        System.out.println("Database Masih Kosong!");
                    }else{
                        for(Petshop print : llist){
                            System.out.println( i + ". " + print.getId() + " | " + print.getNama() + " | " + print.getKategori() + " | " + print.getHarga());
                            i++;
                        }
                    }
                    break;
                case 2:
                    System.out.println("Masukkan ID");
                    id = sc.next();
                    if(searchID(llist, id) == -1){ // jika ID unik
                        System.out.println("Masukkan Nama Item");
                        nama = sc.next();
                        System.out.println("Masukkan Kategori Item");
                        kategori = sc.next();
                        System.out.println("Masukkan Harga");
                        harga = sc.nextInt();

                        Petshop newItem = new Petshop();
                        newItem.setAll(id, nama, kategori, harga);
                        llist.add(newItem);
                        System.out.println("Data Berhasil di Tambahkan!");
                    }else{
                        System.out.println("Maaf Item dengan ID " + id + " Sudah Dipakai!");
                    }
                    break;
                case 3:
                    if(llist.isEmpty()){
                        System.out.println("Database Masih Kosong!");
                    }else{
                        System.out.println("Masukkan ID Barang yang Dicari!");
                        id = sc.next();
                        int index = searchID(llist, id);
                        if(index == -1){
                            System.out.println("Barang dengan ID: " + id + " Tidak ditemukan!");
                        }else{
                            System.out.println("Masukkan Nama Baru!");
                            nama = sc.next();
                            System.out.println("Masukkan Kategori Baru!");
                            kategori = sc.next();
                            System.out.println("Masukkan Harga Baru!");
                            harga = sc.nextInt();

                            Petshop update = llist.get(index);
                            update.setAll(id, nama, kategori, harga);
                        }
                    }
                    break;
                case 4:
                    if(llist.isEmpty()){
                        System.out.println("Database Masih Kosong!");
                    }else{
                        System.out.println("Masukkan ID Barang yang akan Dihapus!");
                        id = sc.next();
                        int index = searchID(llist, id);
                        if(index == -1){
                            System.out.println("Barang dengan ID: " + id + " Tidak ditemukan!");
                        }else{
                            llist.remove(index);
                        }
                    }
                    break;
                case 5:
                    if(llist.isEmpty()){
                        System.out.println("Database Masih Kosong!");
                    }else{
                        System.out.println("Masukkan Nama Barang yang Akan Dicari!");
                        nama = sc.next();
                        int index = searchNama(llist, nama);
                        if(index == -1){
                            System.out.println("Barang dengan Nama: " + nama + " Tidak ditemukan!");
                        }else{
                            Petshop found = llist.get(index);
                            System.out.println(found.getId() + " | " + found.getNama() + " | " + found.getKategori() + " | " + found.getHarga());
                        }
                    }
                    break;
                default:
                    break;
            }
        }
        while(menu != 6);
        
    }
}
