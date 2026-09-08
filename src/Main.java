public class Main {
    public static void main(String[] args) {
        // Instansiasi Objek valid
        Mobil Toyota = new Mobil("Toyota Supra");

        Toyota.mesin = "1200cc";
        Toyota.rem = "bagus";

        System.out.println("Mesin Mobil Anda adalah\t: " + Toyota.mesin);
        System.out.println("Kondisi Rem Mobil Anda adalah\t: " + Toyota.rem);

        Toyota.mengerem();
        Toyota.kondisimesin();
    }
}
