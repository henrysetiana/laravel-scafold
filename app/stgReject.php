<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $unique_key
 * @property string $tgldapem
 * @property int $kdjnstrans
 * @property string $jenis
 * @property string $notas
 * @property string $kdjiwa
 * @property int $penpok
 * @property int $tistri
 * @property int $tanak
 * @property int $tp
 * @property int $tkd
 * @property int $tpp
 * @property int $tpajak
 * @property int $tberas
 * @property int $tcacat
 * @property int $ttewas
 * @property int $tbulat
 * @property int $kotor
 * @property int $ppajak
 * @property int $paskes
 * @property int $pkpkn
 * @property int $pkasda
 * @property int $ptaspen
 * @property int $psewa
 * @property int $passos
 * @property int $palimentasi
 * @property int $potongan
 * @property int $bersih
 * @property string $kodebyr
 * @property string $kdjnsdapem
 * @property string $namapensiunan
 * @property string $tgl_lahir_pensiunan
 * @property string $nama_penerima
 * @property string $tgl_lahir_penerima
 * @property string $kodecabang
 * @property string $tmtpensiun
 * @property string $nomor_skep
 * @property string $tanggal_skep
 * @property string $penerbit_skep
 * @property string $nip
 * @property int $norutdapem
 * @property string $kdpangkat
 * @property string $norek
 * @property string $kdhubkel
 * @property int $rapel
 * @property int $tdahor
 * @property string $kdhitung
 * @property string $kdsifatpok
 * @property int $masker
 * @property int $jmlistri
 * @property string $npwp
 * @property string $tgldiambil
 * @property string $infobank
 * @property int $tgr
 * @property string $jnssetor
 * @property string $tglsetor
 * @property string $updstamp
 * @property string $inputer
 * @property int $kdotentikasi
 * @property integer $number_of_error
 * @property string $error_desc
 * @property string $error_fields
 * @property string $error_codes
 * @property float $thn_tgldapem
 * @property float $thn_tgl_skep
 * @property int $cleansing_flag
 * @property string $cleansing_date
 * @property string $cleansed_column
 */
class stgReject extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stg_reject';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'unique_key';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['tgldapem', 'kdjnstrans', 'jenis', 'notas', 'kdjiwa', 'penpok', 'tistri', 'tanak', 'tp', 'tkd', 'tpp', 'tpajak', 'tberas', 'tcacat', 'ttewas', 'tbulat', 'kotor', 'ppajak', 'paskes', 'pkpkn', 'pkasda', 'ptaspen', 'psewa', 'passos', 'palimentasi', 'potongan', 'bersih', 'kodebyr', 'kdjnsdapem', 'namapensiunan', 'tgl_lahir_pensiunan', 'nama_penerima', 'tgl_lahir_penerima', 'kodecabang', 'tmtpensiun', 'nomor_skep', 'tanggal_skep', 'penerbit_skep', 'nip', 'norutdapem', 'kdpangkat', 'norek', 'kdhubkel', 'rapel', 'tdahor', 'kdhitung', 'kdsifatpok', 'masker', 'jmlistri', 'npwp', 'tgldiambil', 'infobank', 'tgr', 'jnssetor', 'tglsetor', 'updstamp', 'inputer', 'kdotentikasi', 'number_of_error', 'error_desc', 'error_fields', 'error_codes', 'thn_tgldapem', 'thn_tgl_skep', 'cleansing_flag', 'cleansing_date', 'cleansed_column'];

}
