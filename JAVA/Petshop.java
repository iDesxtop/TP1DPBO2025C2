public class Petshop {

    private String id, nama, kategori;
    private int harga;

    public Petshop(){
    }

    public String getId() {
        return id;
    }
    public void setId(String id) {
        this.id = id;
    }
    public String getNama() {
        return nama;
    }
    public void setNama(String nama) {
        this.nama = nama;
    }
    public String getKategori() {
        return kategori;
    }
    public void setKategori(String kategori) {
        this.kategori = kategori;
    }
    public int getHarga() {
        return harga;
    }
    public void setHarga(int harga) {
        this.harga = harga;
    }

    public void setAll(String id, String nama, String kategori, int harga){
        this.id = id;
        this.nama = nama;
        this.kategori = kategori;
        this.harga = harga;
    }
}