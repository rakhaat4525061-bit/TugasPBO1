class Mobil {
    //properti
    public String merk;
    public String mesin;
    public String rem;

    // Constructor untuk menginstansiasi objek valid
    Mobil(String merk) {
        this.merk = merk;
    }

    // Method untuk menampilkan kondisi mesin dengan Invarian 1 : jika mesin rusak objek akan menolak
    public void kondisimesin (){
        if(mesin == null || mesin == "rusak"){
            throw new IllegalArgumentException();
        } else {
            System.out.println("Mesin Sehat\n");
        }
    }

    // Method untuk menampilkan kondisi mesin dengan Invarian 2 : jika rem null atau blong objek akan menolak
    public void mengerem (){
        if(rem == null || rem == "blong"){
            throw new IllegalArgumentException();
        } else {
            System.out.println("Kampas Rem Bagus\n");
        }
    }
}
