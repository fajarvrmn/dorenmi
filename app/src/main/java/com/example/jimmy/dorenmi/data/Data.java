package com.example.jimmy.dorenmi.data;

public class Data {
    private String PesananID, namakonsumen, namapesanan, harga;

    public Data() {
    }

    public Data(String PesananID, String namakonsumen, String namapesanan, String harga) {
        this.PesananID = PesananID;
        this.namakonsumen = namakonsumen;
        this.namapesanan = namapesanan;
        this.harga = harga;
    }

    public String getId() {
        return PesananID;
    }

    public void setPesananID(String id) {
        this.PesananID = PesananID;
    }

    public String getNamaKonsumen() {
        return namakonsumen;
    }

    public void setNamakonsumen(String namakonsumen) {
        this.namakonsumen = namakonsumen;
    }

    public String getNamapesanan() {
        return namapesanan;
    }

    public void setNamaPesanan(String namapesanan) {
        this.namapesanan = namapesanan;
    }

    public String getHarga() {
        return harga;
    }

    public void setHarga(String harga) {
        this.harga = harga;
    }
}

