class Petshop:
    __id = ""
    __nama = ""
    __kategori = ""
    __harga = 0
    
    
    def __init__(self, id = "", nama = "", kategori = "", harga = 0):
        self.__id = id
        self.__nama = nama
        self.__kategori = kategori
        self.__harga = harga
    
    def updateAll(self, id = "", nama = "", kategori = "", harga = 0):
        self.__id = id
        self.__nama = nama
        self.__kategori = kategori
        self.__harga = harga
    
    def getId(self):
        return self.__id
    
    def setId(self, id):
        self.__id = id
    
    def getNama(self):
        return self.__nama
    
    def setNama(self, nama):
        self.__nama = nama
    
    def getKategori(self):
        return self.__kategori
    
    def setKategori(self, kategori):
        self.__kategori = kategori
    
    def getHarga(self):
        return self.__harga
    
    def setHarga(self, harga):
        self.__harga = harga
    