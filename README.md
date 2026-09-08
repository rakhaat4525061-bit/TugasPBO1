# Tugas 1 — Class `Mobil` (Java & PHP)

**Nama   :** Rakha Athallah Fawwaz
**NPM    :** 4525210061

## Domain
**Mobil** — Merepresentasikan sebuah objek kendaraan mobil yang memiliki atribut kondisi mesin dan rem.

## Struktur Class

| Field / Properti | Tipe (Java / PHP)    | Keterangan                                       |
|------------------|----------------------|--------------------------------------------------|
| `merk`           | `String`             | Merk mobil, diinisialisasi melalui constructor    |
| `mesin`          | `String` (nullable)  | Spesifikasi/kondisi mesin mobil                  |
| `rem`            | `String` (nullable)  | Kondisi sistem pengereman mobil                  |

**Method:**
- `kondisimesin()` — Memeriksa dan menampilkan status kondisi mesin.
- `mengerem()` — Memeriksa dan menampilkan status fungsi pengereman.

## Invarian & Alasan

1. **`mesin` tidak boleh `null` atau bernilai `"rusak"` saat `kondisimesin()` dipanggil.**
   *Alasan:* Kondisi mesin merupakan komponen vital pengoperasian mobil. Jika mesin `null` atau `"rusak"`, mobil tidak laik jalan dan sistem harus menolak operasi tersebut. Pelanggaran melempar `IllegalArgumentException` (Java) / `InvalidArgumentException` (PHP).

2. **`rem` tidak boleh `null` atau bernilai `"blong"` saat `mengerem()` dipanggil.**
   *Alasan:* Sistem pengereman berkaitan langsung dengan keselamatan pengoperasian. Jika rem `null` atau `"blong"`, tindakan pengereman tidak aman/dapat dilakukan, sehingga objek menolak perintah ini. Pelanggaran melempar `IllegalArgumentException` (Java) / `InvalidArgumentException` (PHP).

---

## Struktur Berkas

```text
PBO/
└── tugas1/
    ├── img/          # Berisi foto rancangan class di kertas
    ├── src/
    │   ├── Mobil.java     # Definisi class (Java)
    │   ├── Main.java      # Program utama (Java)
    │   ├── mobil.php      # Definisi class (PHP)
    │   └── index.php      # Program utama (PHP)
    └── README.md